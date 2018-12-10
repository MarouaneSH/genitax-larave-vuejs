<template>
    <v-app >
       <app-side-bar></app-side-bar>
        <v-content>
            <v-container fluid>
                    <div class="text-xs-center">
                           <img class="logo" src="/img/logo.jpg" alt="">
                    </div>
                  <router-view></router-view>
            </v-container>
        </v-content>
</v-app>
</template>

<script>
export default {
     data: () => ({

  })

}
</script>

<style>


</style>
