<template>
    <div id="app_tarif_fiscal">
        <v-icon @click="$router.go(-1)" class="arrow__back">arrow_back</v-icon>
         <div class="treeview_wrapper_fiscal">
                    <v-treeview
                        v-if="!loading"
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
                    
        </div>

          <v-dialog v-model="dialog" fullscreen hide-overlay transition="dialog-bottom-transition">
                <v-card>
                        <v-toolbar dark color="primary">
                            <v-btn icon dark @click="dialog = false">
                                <v-icon>close</v-icon>
                            </v-btn>
                            <v-toolbar-title v-if="selectedArticle">{{selectedArticle.name}} </v-toolbar-title>
                            <v-spacer></v-spacer>
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
    </div>
</template>

<script>
export default {
    mounted() {
        this.loading = true;
        axios.get("outils/tarif-fiscal").then((response)=> {
            this.items = response.data.categories;
            this.loading = false;
        })
    },
    data() {
        return {
            tree : [],
            active : [],
            dialog : false,
            loadingDialog : false,
            contentHTML : null,
            loading  : false,
            selectedArticle : null,
            items : []
        }
    },
    methods : {
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
            axios.get(`outils/tarif-fiscal/article=${this.selectedArticle.id}`).then((result)=> {
                this.contentHTML = result.data.article.contenu_html;
                this.loadingDialog = false;
            })
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
      dialog : function() {
          if(!this.dialog) {
              this.active = [];
          }
      }
  },
}
</script>

<style scoped>
.treeview_wrapper_fiscal {
    padding: 20px;
}
</style>
