<template>
  <v-navigation-drawer  app class="app_drawer" width="350" v-model="drawer" >

      <v-autocomplete
        v-if="diplaySearch"
        v-model="selectedItem"
        style="font-weight:200"
        :items="items"
        :loading="isLoading"
         class="search_input"
        :search-input.sync="search"
        color="primary"
        solo
        :disable-resize-watcher="true"
        :disable-route-watcher ="true"
        :filter="filtred"
        append-icon="search"
        no-data-text="Aucun résultat trouvé"
        item-text="titre"
        :item-value="getItemValue"
        @input.native="searchArticle"
        label="Public APIs"
        :placeholder="'Chercher ' + getLabelName + '...'"
      >  

       <template
        slot="item"
        slot-scope="{ item, tile }"
      >
        <template v-if='currentRoute == "cgi" ||currentRoute == "taxes"'> 
          {{ item.titre }} 
        </template>
        <template v-else>
           {{ item.question }} 
        </template>
      </template>
      </v-autocomplete>


        <v-btn-toggle id="sidebar_toggle">
              <v-btn to="/cgi" flat>
                <img src="/img/1.png" alt="">
                <h5>CGI</h5>
                <p>Code Général des Impôts</p>
              </v-btn>
              <v-btn to="/taxes" flat>
                 <img src="/img/2.png" alt="">
                <h5>TAXES</h5>
                <p>Locales</p>
              </v-btn>
              <v-btn to="/faqs" flat>
                <img src="/img/4.png" alt="">
                <h5>Q&A</h5>
                <p>Réponses DGI</p>
              </v-btn>
              <v-btn  to="/outils" flat>
                <img src="/img/5.png" alt="">
                <h5>OUTILS</h5>
                <p>Divers</p>
              </v-btn>
              <v-btn to="/infos" flat>
                <img src="/img/3.png" alt="">
                <h5>INFOS</h5>
                <p>sur GeniTax</p>
              </v-btn>
      </v-btn-toggle>
      <img src="/img/seddikk.png" class="seddik_brand">
    </v-navigation-drawer>
</template>

<script>
  export default {
    data: () => ({
      descriptionLimit: 60,
      searchedItems: [],
      isLoading: false,
      selectedItem: null,
      search: null,
      urlToSearch : "",
      currentRoute : null,
      drawer : true,
    }),
    methods : {
      filtred(t) {
        return t;
      },
      searchArticle : _.debounce(function(){
        this.isLoading = true
        if(!this.search) return;
        // Lazily load input items

        if(this.currentRoute == "cgi" || this.currentRoute == "taxes") {
              axios.get("article/query="+ this.search +"&type_search="+this.currentRoute)
              .then(res => {
                this.searchedItems = res.data.search_result
              })
              .catch(err => {
                console.log(err)
              })
              .finally(() => (this.isLoading = false))
        } 
        else {
             axios.get("faqs/questions/query="+ this.search)
              .then(res => {
                this.searchedItems = res.data.search_result
              })
              .catch(err => {
                console.log(err)
              })
              .finally(() => (this.isLoading = false))
        }
        


      }, 500),
      toggleDrawer() {
        this.drawer = !this.drawer;
      }
    },
    computed: {
      items () {
          if(this.currentRoute == "cgi" || this.currentRoute == "taxes") { 
            return this.searchedItems.map(article => {
              const Description = article.titre.length > this.descriptionLimit
                ? article.titre.slice(0, this.descriptionLimit) + '...'
                : article.titre

              return Object.assign({}, article, { Description })
            })
          } else {
              return this.searchedItems.map(article => {
              const Description = article.question.length > this.descriptionLimit
                ? article.question.slice(0, this.descriptionLimit) + '...'
                : article.question

              return Object.assign({}, article, { Description })
            })
          }
        
      },
      diplaySearch() {
        const route = this.$route.name;
        this.searchedItems = [];
        this.currentRoute = route.toLowerCase();;

        return route == "CGI" || route == "TAXES" || route == "faqs" || route == "faqs_single";
      },
      getItemValue() {
        if(this.currentRoute == "cgi" || this.currentRoute == "taxes") {
            return "articles[0].id";
        } else {
          return "id";
        }
      },
      getLabelName() {
        if(this.currentRoute == "cgi" || this.currentRoute == "taxes") {
            return "un article";
        } else {
          return "une question";
        }
      }
    },

    watch: {
      selectedItem(val) {
        if(!val) return;
        if(this.currentRoute == "cgi" || this.currentRoute == "taxes") {
           this.$router.push({ name: 'ArticleById', params: { id: val } , query : {category : this.currentRoute} })
           this.selectedItem = null;
        } else {
            this.$router.push({name: "faqs_question" , params : {id : val }})
            this.selectedItem = null;
        }
      }
    }
  }
</script>
