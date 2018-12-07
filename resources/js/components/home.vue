<template>
    <v-app >
       <app-side-bar></app-side-bar>
        <v-content>
            <v-container fluid>
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
      v-model="tree"
      :open="open"
      :items="items"
      activatable
      item-key="name"
      open-on-click
    >
      <template slot="prepend" slot-scope="{ item, open, leaf }">
        <v-icon v-if="!item.file">
          {{ open ? 'mdi-folder-open' : 'folder' }}
        </v-icon>
        <v-icon v-else>
          {{ files[item.file] }}
        </v-icon>
      </template>
    </v-treeview>
  </v-app>
                    </div>
               </v-layout>
            </v-container>
        </v-content>
</v-app>
</template>

<script>
export default {
     data: () => ({
    open: ['public'],
    files: {
      html: 'language-html5',
      js: 'nodejs',
      json: 'json',
      md: 'markdown',
      pdf: 'file-pdf',
      png: 'file-image',
      txt: 'file-document-outline',
      xls: 'file-excel'
    },
    tree: [],
    items: [
      {
        name: '.git'
      },
      {
        name: 'node_modules'
      },
      {
        name: 'public',
        children: [
          {
            name: 'static',
            children: [{
              name: 'logo.png',
              file: 'png'
            }]
          },
          {
            name: 'favicon.ico',
            file: 'png'
          },
          {
            name: 'index.html',
            file: 'html'
          }
        ]
      },
      {
        name: '.gitignore',
        file: 'txt'
      },
      {
        name: 'babel.config.js',
        file: 'js'
      },
      {
        name: 'package.json',
        file: 'json'
      },
      {
        name: 'README.md',
        file: 'md'
      },
      {
        name: 'vue.config.js',
        file: 'js'
      },
      {
        name: 'yarn.lock',
        file: 'txt'
      }
    ]
  })

}
</script>

<style>


</style>
