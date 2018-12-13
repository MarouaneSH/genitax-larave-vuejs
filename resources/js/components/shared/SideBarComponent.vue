<template>
  <v-navigation-drawer  app class="app_drawer" width="350" >

      <v-autocomplete
        v-if="diplaySearch"
        v-model="selectedArticle"
        :items="items"
        :loading="isLoading"
         class="search_input"
        :search-input.sync="search"
        color="primary"
        solo
        :filter="filtred"
        append-icon="search"
        no-data-text="Aucun article trouvé"
        item-text="titre"
        item-value="articles[0].id"
        @input.native="searchArticle"
        label="Public APIs"
        placeholder="Chercher une article"
      >  

       <template
        slot="item"
        slot-scope="{ item, tile }"
      >
        <template> {{ item.titre }} </template>
      </template>
      </v-autocomplete>


        <v-btn-toggle id="sidebar_toggle">
              <v-btn to="/cgi" flat>
                <v-icon>library_books</v-icon>
                <h5>CGI</h5>
                <p>Code Général des Impôts</p>
              </v-btn>
              <v-btn to="/taxes" flat>
                <v-icon>vertical_split</v-icon>
                <h5>TAXES</h5>
                <p>Locales</p>
              </v-btn>
              <v-btn to="/faqs" flat>
                <v-icon>chat</v-icon>
                <h5>FAQ</h5>
                <p>Faire Aux Questions</p>
              </v-btn>
              <v-btn  to="/outils" flat>
                <v-icon>equalizer</v-icon>
                <h5>OUTILS</h5>
                <p>Divers</p>
              </v-btn>
              <v-btn to="/infos" flat>
                <v-icon>info</v-icon>
                <h5>INFO</h5>
                <p>Taux sur GaniTax</p>
              </v-btn>
      </v-btn-toggle>
    </v-navigation-drawer>
</template>

<script>
  export default {
    data: () => ({
      descriptionLimit: 60,
      articles: [],
      isLoading: false,
      selectedArticle: null,
      search: null,
      type_search : null
    }),
    methods : {
      filtred(t) {
        return t;
      },
      searchArticle : _.debounce(function(){
        this.isLoading = true
        if(!this.search) return;
        // Lazily load input items
        axios.get('article/query='+ this.search +"&type_search="+this.type_search)
          .then(res => {
            this.articles = res.data.articles
          })
          .catch(err => {
            console.log(err)
          })
          .finally(() => (this.isLoading = false))


      }, 500)
    },
    computed: {
      items () {
        return this.articles.map(article => {
          const Description = article.titre.length > this.descriptionLimit
            ? article.titre.slice(0, this.descriptionLimit) + '...'
            : article.titre

          return Object.assign({}, article, { Description })
        })
      },
      diplaySearch() {
        const route = this.$route.name;
        this.type_search = route.toLowerCase();
        this.articles = [];
        return route == "CGI" || route == "TAXES" || route == "faqs";
      }
    },

    watch: {
      selectedArticle (val) {
        if(!val) return;
        let category = (this.$route.name == "CGI") ? "cgi" : "taxe";
        this.$router.push({ name: 'ArticleById', params: { id: val } , query : {category : category} })
      }
    }
  }
</script>
