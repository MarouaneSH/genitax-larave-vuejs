<template>
    <v-layout column justify-center align-center xs12>
        <div class="box-gtax">
            <v-flex xs12 class="box-gtax__article">
                    <h5> Nº Article</h5>
                    <div class="box-gtax__input">
                        <v-text-field
                            label="Solo"
                            placeholder="Search"
                            class="box-gtax__search"
                            solo
                            v-model="article"
                            @change="searchArticle"
                            append-icon="search"
                            :loading="loadingArticle"
                        ></v-text-field>
                        <div class="text-xs-center" v-if="articleNotFound">
                            Article non trouvé
                        </div>
                    </div>
            </v-flex>
            <v-flex xs12 class="box-gtax__toggle_wrapper">
                    <v-btn-toggle dark v-model="toggle_header" class="box-gtax__toggle" @change="fetch_categories">
                            <v-btn flat v-for="cat in headerCategories" :value="cat.id" :key="cat.id" >
                                <h6> {{cat.titre}} </h6>
                            </v-btn>
                    </v-btn-toggle>
            </v-flex>
        </div>
        <div class="treeview_wrapper">
                <v-app id="inspire">

                    <h5 class="tree_header" v-if="type =='cgi'">{{selectedHeaderName}} </h5>
                    <h5 class="tree_header" v-else>Taxes Locales </h5>
                    <v-treeview
                        v-if="!loadingTree"
                        v-model="tree"
                        :active.sync="active"
                        :items="items"
                        activatable
                        item-text="titre"
                        item-key="id"
                        class="grey lighten-5"
                        transition>
                        <template slot="prepend" slot-scope="{ item, open,  leaf }" >
                              <v-icon>
                                  <template v-if="item.icon_type == 1">  {{ open ? 'folder_open' : 'folder' }} </template>
                                  <template v-else-if="item.icon_type == 2">list_alt</template>
                                  <template v-else-if="item.icon_type == 3">library_books</template>
                                  <template v-else-if="item.icon_type == 4">list</template>
                                  <template v-else-if="item.icon_type == 5">subdirectory_arrow_right</template>
                              </v-icon>
                        </template>
                    </v-treeview>

                    <div v-else  class="text-xs-center">
                         <v-progress-circular
                            indeterminate
                            color="primary"
                        ></v-progress-circular>
                    </div>
                    
                </v-app>
        </div>

          <v-dialog v-model="dialog" fullscreen hide-overlay transition="dialog-bottom-transition">
                <v-card>
                        <v-toolbar dark color="primary">
                            <v-btn icon dark @click="dialog = false">
                                <v-icon>close</v-icon>
                            </v-btn>
                            <v-toolbar-title v-if="selectedArticle">{{selectedArticle.name}} </v-toolbar-title>
                            <v-spacer></v-spacer>
                            <v-btn-toggle light v-model="toggle_html_type" @change="openDialog" >
                                    <v-btn flat value="article">
                                        <h6> Article </h6>
                                    </v-btn>
                                    <v-btn flat value="circulaire">
                                        <h6> Circulaire </h6>
                                    </v-btn>
                            </v-btn-toggle>
                        </v-toolbar>
                            <div v-if="loadingDialog" class="text-xs-center">
                                <v-progress-circular
                                    indeterminate
                                    color="primary"
                                ></v-progress-circular>
                            </div>
                            <template v-else>
                                <div class="content_html"  v-html="contentHTML"></div>
                            </template>
                    </v-card>
            </v-dialog>
    </v-layout>
</template>

<script>
export default {
    props : {
        type : {
            required : true,
            default : "cgi",
        }
    },
    mounted() {
        this.loadingTree = true;
        if(this.type == "cgi") {
            axios.get(`/caregories/cgi/header`).then((result) => {
                this.headerCategories = result.data.categories;
                this.toggle_header = result.data.categories[0].id;
                this.fetch_categories();
            });
        } else {
            this.fetch_categories();
        }
       
    },
     data: () => ({
        toggle_header : null,
        loadingTree : false,
        active : [],
        loadingDialog : false,
        toggle_html_type : "article",
        selectedArticle : null,
        headerCategories : [],
        contentHTML : null, 
        items: [],
        dialog : false,
        open: [],
        tree : [] ,
        selected : null,
        article : null,
        loadingArticle : false,
        articleNotFound : false,
  }),
  methods : {
    fetch_categories() {
      this.loadingTree = true;
      let url;
      if(this.type == "cgi") {
         url = `/categories/parent=${this.toggle_header}`;
      } else {
         url = "/caregories/taxes"
      }
     axios.get(url).then((result) => {
        this.items = result.data.categories;
        this.loadingTree = false;
      }); 
    },
    search(arr, id) {
         let _this = this;
         let article = null;
         arr.filter(function(obj) {
            if (obj.id == id) {
               _this.selected = obj;
            }
            if (obj.children && obj.children.length > 0) {
                    return _this.search(obj.children, id);
            }
        });

        return  _this.selected;
    },
    openDialog() {
        this.dialog = true;
        this.loadingDialog = true;
        axios.get(`article/id=${this.selectedArticle.id}&type=${this.toggle_html_type}`).then((result)=> {
            this.generateHtml(result.data.article.content_html);
            this.loadingDialog = false;
        })
    },
    searchArticle() {
        this.loadingArticle = true;
        this.articleNotFound = false;
        axios.get(`article/num=${this.article}&type=${this.toggle_html_type}&category=${this.type}`).then((result)=> {
            this.loadingArticle = false;
            if(!result.data.article) {
                this.articleNotFound = true;
                return;
            }
            this.dialog = true;
            this.generateHtml(result.data.article.content_html);
            this.loadingDialog = false;
            this.selectedArticle = {
                name :  result.data.article.category.titre,
                id : result.data.article.id
            }
        })
    },
    generateHtml(htmlContent) {
        let html = document.createElement('div');
        html.innerHTML = htmlContent;
        Array.from(html.querySelectorAll("a")).forEach((e) => { 
            if(e.href.includes("article")) {
               let article_id = e.href.split("/").reverse()[0];
               e.href = "#/article/"+article_id+"/"+this.type;
            }
        })
        this.contentHTML = html.innerHTML;
    }
  },

  watch : {
      active : function() {
        if (!this.active.length) return undefined
            let id = this.active[0];
            let selectedArticle = this.search(this.items,id);
            if(selectedArticle.articles && selectedArticle.articles.length) {
                this.selectedArticle = {
                    name : selectedArticle.titre,
                    id : selectedArticle.articles[0].id
                };
               this.openDialog();
            return true;
            }
        return null;
      }
  },
  computed : {
      selectedHeaderName() {
          if(!this.headerCategories.length) return null;
          return this.headerCategories.filter((e) => e.id == this.toggle_header)[0].titre;
      }
  }

}
</script>