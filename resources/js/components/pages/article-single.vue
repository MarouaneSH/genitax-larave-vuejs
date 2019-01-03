<template>
    <v-dialog v-model="dialog" fullscreen hide-overlay transition="dialog-bottom-transition">
                <v-card>
                        <v-toolbar dark color="primary">
                            <v-btn icon dark @click="$router.go(-1)" class="arrow_back_yellow">
                                <v-icon>arrow_back</v-icon>
                            </v-btn>
                            <v-toolbar-title v-if="selectedArticle">{{selectedArticle.name}} </v-toolbar-title>
                            <v-spacer></v-spacer>
                            
                            <v-btn-toggle class="article_switcher_toggle" v-if="!hideToggle && !loadingDialog" light v-model="toggle_html_type" @change="isSearchablebyId ? fetchArticleById() : fetchArticleByName ()" >
                                    <v-btn flat value="article">
                                        <h6> Article </h6>
                                    </v-btn>
                                    <v-btn flat value="circulaire">
                                        <h6> Circulaire </h6>
                                    </v-btn>
                            </v-btn-toggle>
                            <div id="article_navigation">
                                    <v-text-field
                                        v-if="selectedArticle"
                                        label="N article"
                                        v-model="selectedArticle.num"
                                        solo
                                        light
                                        prepend-icon="arrow_back"
                                        append-icon="arrow_forward"
                                        @click:append="fetchArticle('next')"
                                        @click:prepend="fetchArticle('back')"
                                        @change="fetchArticle('find')"
                                    ></v-text-field>
                            </div>
                           <app-social-sharing :title="selectedArticle ? selectedArticle.name : '' "></app-social-sharing>
                        </v-toolbar>
                            <p class="subheadline" v-if="selectedArticle && !articleNotFound" >{{selectedArticle.name}} </p>
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
                                 <h3 class="article_header tahoma-font"> {{getArticleHeader}}  : {{selectedArticle.num}} </h3>
                                <div class="content_html tahoma-font_all" v-if="!articleNotFound"  v-html="contentHTML"></div>
                            </template>
                    </v-card>
            </v-dialog>
</template>

<script>
import appSocialSharing from '../shared/social_sharing';

export default {
    mounted(){
      let article_id = this.$route.params.id;
      if(article_id) {
          this.isSearchablebyId = true;
          this.fetchArticleById();
          this.currentArticle = article_id;
      } else {
          this.fetchArticleByName();
      }
        
    },
    data() {
        return {
            dialog : true,
            loadingDialog : true,
            toggle_html_type : "article",
            articleNotFound : false,
            selectedArticle : null,
            hideToggle : false,
            isSearchablebyId : false,
        }
    }, 
    methods : {
        generateHtml(htmlContent) {
            let html = document.createElement('div');
            html.innerHTML = htmlContent;
            Array.from(html.querySelectorAll("a")).forEach((e) => { 
                if(e.href.includes("article")) {
                  let article_num = e.href.split("/").reverse()[0];
                  let category;
                  if(this.$route.query.category) {
                      category = this.$route.query.category;
                  } else {
                      category = this.$route.params.type;
                  }
                  e.href = "#/article/"+article_num+"/"+ category;
                }
            })
            this.contentHTML = html.innerHTML;
        },
        fetchArticleByName(){
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

                let num;
                if(this.toggle_html_type == "article") {
                    num = result.data.article.num_article
                } else {
                    num = result.data.article.num_circulaire
                }
    
                if(!result.data.article.has_circulaire)  this.hideToggle = true;

                this.selectedArticle = {
                    name :  result.data.article.category.titre,
                    id : result.data.article.id,
                    num :num
                }
            })
        },
        fetchArticleById(){
            let article_id = this.$route.params.id;

            this.loadingDialog = true;
            axios.get(`article/id=${article_id}&type=${this.toggle_html_type}`).then((result)=> {
                if(!result.data.article) {
                    this.articleNotFound = true;
                    return;
                }

                if(!result.data.article.content_html) {
                    this.toggle_html_type = "circulaire";
                    this.hideToggle = true;
                    this.fetchArticleById();
                }

                if(!result.data.article.has_circulaire)  this.hideToggle = true;

                this.generateHtml(result.data.article.content_html);
                this.loadingDialog = false;

                let num;
                if(this.toggle_html_type == "article") {
                    num = result.data.article.num_article
                } else {
                    num = result.data.article.num_circulaire
                }

                this.selectedArticle = {
                    name :  result.data.article.category.titre,
                    id : result.data.article.id,
                    num : num
                }
            })
        },
        fetchArticle(action) {

            this.loadingDialog = true;
            axios.get(`article/num=${this.selectedArticle.num}&action=${action}`)
                 .then((result)=> {
                     this.toggle_html_type = "article";
                     if(!result.data.article) {
                        this.articleNotFound = true;
                        return;
                    }
                     this.$router.push({name : "ArticleById", params : { id : result.data.article.id} , query : {category : this.$route.query.category}})
                     
                 }).then(()=>{
                     this.loadingDialog = false;
                 })
        } 
    },
   
    computed : {
        getArticleHeader() {
            return this.toggle_html_type.charAt(0).toUpperCase() + this.toggle_html_type.slice(1);
        }
    },
    components : {
        appSocialSharing
    }
}
</script>

<style scoped>
.article_header {
    color: #1976d1;
    padding: 40px;
}
.content_html {
    padding: 0 40px;
    padding-bottom: 20px;
}
.subheadline{
    margin: 0;
    margin-left: 40px;
    margin-top: 20px;
    color: #79868a;
}
</style>
