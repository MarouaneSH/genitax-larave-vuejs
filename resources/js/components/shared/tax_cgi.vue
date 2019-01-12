<template>
    <v-layout column justify-center align-center xs12>
        <div class="box-gtax">
            <v-flex xs12 class="box-gtax__article">
                    <div class="box-gtax__input">
                        <v-text-field
                            label="Solo"
                            placeholder="Aller à Nº Article.."
                            class="box-gtax__search"
                            solo
                            v-model="article"
                            @click:append="searchArticle"
                            @change="searchArticle"
                            append-icon="arrow_forward"
                            :loading="loadingArticle"
                        ></v-text-field>
                        <div class="text-xs-center toast" v-if="articleNotFound">
                            Article non trouvé
                        </div>
                    </div>
            </v-flex>
           
        </div>
         <v-flex xs12 class="box-gtax__toggle_wrapper" v-if="headerCategories.length">
                    <v-btn-toggle dark v-model="toggle_header" class="box-gtax__toggle" @change="fetch_categories">
                            <v-btn flat v-for="cat in headerCategories" :value="cat.id " :key="cat.id" >
                                <h6> {{cat.titre}} </h6>
                            </v-btn>
                    </v-btn-toggle>
            </v-flex>
        <div class="treeview_wrapper">
                <v-app id="inspire">

                    <div class="treeview_header_wrapper">
                         <h5 class="tree_header" v-if="type =='cgi'">{{selectedHeaderName}} </h5>
                         <h5 class="tree_header" v-else>Taxes Locales </h5>
                         <v-btn class="btn_summary" v-if="!openAll" @click="openAll = true" round dark  >VOIR SOMMAIRE</v-btn>
                         <v-btn class="btn_summary" v-else @click="emtyOpen()" round dark  >CACHER SOMMAIRE</v-btn>
                    </div>
                    <v-treeview
                        ref="treeview"
                        v-if="!loadingTree"
                        v-model="tree"
                        :active.sync="active"
                        :items="items"
                        activatable
                        :open-all="openAll"
                        :open="open"
                        item-text="titre"
                        item-key="id"
                        class="grey lighten-5"
                        open-on-click
                        transition>
                        <template slot="prepend" slot-scope="{ item, open }" >
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
                if(this.$route.query.id) {
                    this.toggle_header = parseInt(this.$route.query.id);
                } else {
                     this.toggle_header = result.data.categories[0].id;
                }
               
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
        openAll : false,
  }),
  methods : {

    fetch_categories() {
      this.loadingTree = true;
      let url;
      if(this.type == "cgi") {
         let titre = this.headerCategories.filter((e) => e.id == this.toggle_header)[0].titre;
         this.$router.push({ query: { id: this.toggle_header, titre:  titre}})
         url = `/categories/parent=${this.toggle_header}`;
      } else {
         url = "/caregories/taxes"
      }
     axios.get(url).then((result) => {
        this.items = result.data.categories;
        this.loadingTree = false;
        if(this.getTreeviewOpenCache) {
            this.open =  this.getTreeviewOpenCache;
        }
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
         //save the opened tree
        const openTreeCache = this.$refs.treeview.$data.openCache;
        this.$store.commit("setTreeviewOpenCache",openTreeCache);

        this.$router.push({name : "ArticleById", params : { id : this.selectedArticle.id} , query : {category : this.type}})
    },

    searchArticle() {
        console.log("sdds");
        this.loadingArticle = true;
        this.articleNotFound = false;
        axios.get(`article/num=${this.article}&type=${this.toggle_html_type}&category=${this.type}`).then((result)=> {
            this.loadingArticle = false;
            if(!result.data.article) {
                this.articleNotFound = true;
                return;
            }
            this.generateHtml(result.data.article.content_html);
            this.loadingDialog = false;
            this.selectedArticle = {
                name :  result.data.article.category.titre,
                id : result.data.article.id
            }
            this.openDialog();
        })
    },
    generateHtml(htmlContent) {
        let html = document.createElement('div');
        html.innerHTML = htmlContent;
        Array.from(html.querySelectorAll("a")).forEach((e) => { 
            if(e.href.includes("article")) {
               let article_id = e.href.split("/").reverse()[0];
               e.href = "#/article/"+article_id+"/"+this.$route.query.category;
            }
        })
        this.contentHTML = html.innerHTML;
    },
    emtyOpen() {
        const temp = this.items;
        this.items = [];
        setTimeout(() => {
           this.items = temp; 
           this.openAll = false;
        }, 50);
    },
    getTreeViewItems() {
            let _this = this;
            this.items.filter(function(obj) {
                if (!obj.children.length) {
                  console.log("dssd");
                }
                 return _this.getTreeViewItems();
            });

            return  _this.selected;
    },
    getObjectValueByPath (obj, path, fallback) {
            // credit: http://stackoverflow.com/questions/6491463/accessing-nested-javascript-objects-with-string-key#comment55278413_6491621
            if (!path || path.constructor !== String) return fallback
            path = path.replace(/\[(\w+)\]/g, '.$1') // convert indexes to properties
            path = path.replace(/^\./, '') // strip a leading dot
            return getNestedValue(obj, path.split('.'), fallback)
    },

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
      },
      
  },
  computed : {
      selectedHeaderName() {
          if(!this.headerCategories.length || !this.toggle_header) return null;
         return this.headerCategories.filter((e) => e.id == this.toggle_header)[0].titre;
      },
      getTreeviewOpenCache() {
          return this.$store.getters.getTreeviewOpenCache;
      }
  }

}
</script>