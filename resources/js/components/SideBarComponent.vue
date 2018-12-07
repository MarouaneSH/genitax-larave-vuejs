<template>
  <v-navigation-drawer  app class="app_drawer" width="350" >
        <v-text-field
            label="Solo"
            placeholder="Search"
            class="search_input"
            solo
            append-icon="search"
        ></v-text-field>
        <v-btn-toggle v-model="toggle_exclusive" id="sidebar_toggle">
              <v-btn flat value="CGI">
                <v-icon>library_books</v-icon>
                <h5>CGI</h5>
                <p>Code Général des Impôts</p>
              </v-btn>
              <v-btn flat>
                <v-icon>vertical_split</v-icon>
                <h5>TAXES</h5>
                <p>Locales</p>
              </v-btn>
              <v-btn flat>
                <v-icon>chat</v-icon>
                <h5>FAQ</h5>
                <p>Faire Aux Questions</p>
              </v-btn>
              <v-btn flat>
                <v-icon>equalizer</v-icon>
                <h5>OUTILS</h5>
                <p>Divers</p>
              </v-btn>
              <v-btn flat>
                <v-icon>info</v-icon>
                <h5>INFO</h5>
                <p>Taux sur GaniTax</p>
              </v-btn>
      </v-btn-toggle>
    </v-navigation-drawer>
</template>

<script>
    export default {
        data() {
            return {
                toggle_exclusive : "CGI",
            }
        }
    }
</script>
