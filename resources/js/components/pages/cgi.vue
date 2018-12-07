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
                      v-if="!loadingTree"
                        v-model="active"
                        :active.sync = "tt"
                        :items="items"
                        selectable
                        activatable
                        @update="test()"
                        @open="test()"
                        item-text="titre"
                        open-on-click>
                        <template slot="prepend" slot-scope="{ item,  leaf }" >
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

                    <div   v-else class="text-xs-center">
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
        tt: [],
        tree: [],
        items: []
  }),
  methods : {
    test() {
      alet("dsds");
    }
  }

}
</script>