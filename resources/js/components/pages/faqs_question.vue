<template>
    <v-dialog v-model="dialog" fullscreen hide-overlay transition="dialog-bottom-transition">
    <v-card>
            <v-toolbar dark color="primary">
                <v-btn icon dark @click="$router.go(-1)">
                    <v-icon>close</v-icon>
                </v-btn>
                <v-toolbar-title v-if="selectedQuestion">{{selectedQuestion}} </v-toolbar-title>
                <v-spacer></v-spacer>
            </v-toolbar>
                <div v-if="loading" class="text-xs-center">
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
</template>

<script>
export default {
    mounted() {
        const id = this.$route.params.id;
        this.loading = true;
        axios.get(`questions/${id}`).then((response)=> {
            this.contentHTML = response.data.question.response;
            this.selectedQuestion = response.data.question.question;
            this.loading = false;
        })
    },
    data() {
        return {
            dialog : true,
            selectedQuestion :null,
            loading : false,
            contentHTML : null,
        }
    },
    methods : {
        
    }
}
</script>

<style>

</style>
