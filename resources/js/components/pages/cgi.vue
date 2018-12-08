<template>
    <v-layout column justify-center align-center xs12>
        <img class="logo" src="/img/logo.jpg" alt="">
        <div class="box-gtax">
            <v-flex xs6 class="box-gtax__article">
                    <h5> Nº Article</h5>
                    <v-text-field
                    label="Solo"
                    placeholder="Search"
                    class="box-gtax__search"
                    solo
                    append-icon="search"
                ></v-text-field>
            </v-flex>
            <v-flex xs6 class="box-gtax__toggle_wrapper">
                    <v-btn-toggle dark v-model="toggle_exclusive" class="box-gtax__toggle">
                            <v-btn flat value="CGI">
                                <h6>CGI</h6>
                            </v-btn>
                            <v-btn flat value="CIRCULAIRE">
                                <h6>Circulaire LF 2018</h6>
                            </v-btn>
                    </v-btn-toggle>
            </v-flex>
        </div>
        <div class="treeview_wrapper">
                <v-app id="inspire">
                    <v-treeview
                        :active.sync="active"
                        :items="items"
                        activatable
                        item-text="titre"
                        item-key="id"
                        active-class="primary--text"
                        class="grey lighten-5"
                        transition>
                        <template slot="prepend" slot-scope="{ item, open,  leaf }" >
                              <v-icon v-if="!item.parent_id">
                                  {{ open ? 'folder_open' : 'folder' }}
                              </v-icon>
                              <v-icon v-else>
                                  list_alt
                              </v-icon>
                              <template v-if="item.articles && item.articles.length" @click="test()" >
                                  view
                              </template>
                        </template>
                    </v-treeview>

                    <div  class="text-xs-center">
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
    mounted() {
      this.$emit("sd");
      this.loadingTree = true;
      axios.get('/categories').then((result) => {
        this.items = result.data;
          this.loadingTree = false;
      });
    },
     data: () => ({
        toggle_exclusive : "CGI",
        loadingTree : false,
        active : [],
        items: [],
        open: [],
        selected : null
  }),
  methods : {
    test(d) {
        console.log(d);
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
    }
  },
  computed : {
      selectedArticle() {
        if (!this.active.length) return undefined
        let id = this.active[0];
        let selectedArticle = this.search(this.items,id);
        if(selectedArticle.articles && selectedArticle.articles.length) {
            return true;
        }
        return null;

      }
  }

}
</script>