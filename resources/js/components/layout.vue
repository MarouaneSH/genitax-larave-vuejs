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
            <app-privacy></app-privacy>
        </v-content>
</v-app>
</template>

<script>
import appPrivacy from './shared/privacy';

export default {
    data: () => ({
  }),
  methods : {
      toggleDrawer() {
          this.$refs.sidebar.toggleDrawer();
      }
  },
  components : {
      appPrivacy
  }

}
</script>

<style scoped>
.toggle_drawer {
    font-size: 35px;
    position: absolute;
}
</style>
