<template>
    <v-app >
       <app-side-bar></app-side-bar>
        <v-content>
            <v-container fluid>
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
