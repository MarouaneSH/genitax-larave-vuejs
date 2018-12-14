<template>
    <v-app >
       <app-side-bar ref="sidebar"></app-side-bar>
        <v-content>
            <v-container fluid>
                    <div class="toggle_drawer">
                        <v-icon @click="toggleDrawer()">filter_list</v-icon>
                    </div>
                    <div class="text-xs-center">
                           <img class="logo" src="/img/logo.jpg" alt="">
                    </div>
                  <router-view :key="$route.fullPath"></router-view>
            </v-container>
        </v-content>
</v-app>
</template>

<script>
export default {
    data: () => ({
  }),
  methods : {
      toggleDrawer() {
          this.$refs.sidebar.toggleDrawer();
      }
  }

}
</script>

<style scoped>
.toggle_drawer {
    font-size: 35px;
}
</style>
