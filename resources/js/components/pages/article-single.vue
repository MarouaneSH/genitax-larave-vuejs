<template>
    <v-dialog v-model="dialog" fullscreen hide-overlay transition="dialog-bottom-transition">
                <v-card>
                        <v-toolbar dark color="primary">
                            <v-btn icon dark @click="$router.go(-1)">
                                <v-icon>close</v-icon>
                            </v-btn>
                            <v-toolbar-title v-if="selectedArticle">{{selectedArticle.name}} </v-toolbar-title>
                            <v-spacer></v-spacer>
                            <v-btn-toggle light v-model="toggle_html_type" @change="fetch_article" >
                                    <v-btn flat value="article">
                                        <h6> Article </h6>
                                    </v-btn>
                                    <v-btn flat value="circulaire">
                                        <h6> Circulaire </h6>
                                    </v-btn>
                            </v-btn-toggle>
                        </v-toolbar>
                            <div class="text-xs-center mt-5" v-if="articleNotFound">
                                Article non trouvé
                            </div>
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
</template>

<script>
export default {
    mounted(){
       this.fetch_article();
    },
    methods : {
        generateHtml(htmlContent) {
            let html = document.createElement('div');
            html.innerHTML = htmlContent;
            Array.from(html.querySelectorAll("a")).forEach((e) => { 
                if(e.href.includes("article")) {
                   let article_id = e.href.split("/").reverse()[0];
                   e.href = "#/article/"+article_id+"/"+this.type;
                }
            })
            this.contentHTML = html.innerHTML;
        },
        fetch_article(){
             this.loadingDialog = true;
            let num_article = this.$route.params.num;
            let type = this.$route.params.type;

            axios.get(`article/num=${num_article}&type=${this.toggle_html_type}&category=${type}`).then((result)=> {
                if(!result.data.article) {
                    this.articleNotFound = true;
                    return;
                }
                this.generateHtml(result.data.article.content_html);
                this.loadingDialog = false;
                this.selectedArticle = {
                    name :  result.data.article.category.titre,
                    id : result.data.article.id
                }
            })
        }
    },
    data() {
        return {
            dialog : true,
            loadingDialog : true,
            toggle_html_type : "article",
            articleNotFound : false,
            selectedArticle : null
        }
    }
}
</script>

<style>

</style>
