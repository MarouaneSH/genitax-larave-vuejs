<template>
    <v-dialog ref="dialog_article" class="dialog_article" v-model="dialog" fullscreen hide-overlay transition="dialog-bottom-transition" >
                <v-card>
                        <v-toolbar dark color="primary" class="article_dialog">
                          
                            <v-btn icon dark @click="returnHome()">
                                <v-icon>home</v-icon>
                            </v-btn>
                            <v-btn icon dark @click="$router.go(-1)" class="arrow_back_yellow">
                                <v-icon>arrow_back</v-icon>
                            </v-btn>
                            
                            <v-toolbar-title v-if="selectedArticle && !articleNotFound" style="font-weight:200;">{{selectedArticle.name}} </v-toolbar-title>
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
                            <div class="article-subheader">
                                
                                 <span @click="copyToClipBoard()"><v-icon>file_copy</v-icon> copier l'article au Presse papier</span>
                            </div>
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
                                 <h3 class="article_header tahoma-font"  v-if="!articleNotFound"> {{getArticleHeader}}  : {{selectedArticle.num}} </h3>

                                <div id="article_content" class="content_html tahoma-font_all" @keypress="scroll()" v-if="!articleNotFound" ref="contentHtml"  v-html="contentHTML"></div>
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

      document.onkeyup=(e) => {
        if (e.which == 37) {
            this.fetchArticle('back');
        } else if(e.which == 39)  {
            this.fetchArticle('next');
        } 
        else if(e.which == 8)  {
            this.fetchArticle('back');
        } 
        else if(e.which == 40)  {
            console.log("dsds");
            document.querySelector('.v-dialog--active').scrollTop += 20
            document.querySelector('.dialog_article').scrollTop += 20
        } 
        else if(e.which == 38)  {
            document.querySelector('.v-dialog--active').scrollTop -= 20
            document.querySelector('.dialog_article').scrollTop -= 20
        } 
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
        returnHome() {
            if(this.$route.query) {
                if(this.$route.query.category == "cgi") {
                         this.$router.push('/');
                } else {
                     this.$router.push('/taxes');
                }
            }  else{
                this.$router.push('/');
            } 
        },
        copyToClipBoard(){
             var dummy = document.createElement("input");
                document.body.appendChild(dummy);
                dummy.setAttribute('value', this.$refs.contentHtml.textContent );
                dummy.select();
                document.execCommand("copy");
               document.body.removeChild(dummy);
        },
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

            axios.get(`article/num=${this.selectedArticle.num}&action=${action}&type=${this.$route.query.category}`)
                 .then((result)=> {
                     this.toggle_html_type = "article";
                     if(!result.data.article) {
                        this.articleNotFound = true;
                        return;
                    }
                     this.$router.push({name : "ArticleById", params : { id : result.data.article.id} , query : {category : this.$route.query.category}})
                     
                 }).catch(()=> {
                     this.articleNotFound = true;
                 }).then(()=>{
                     this.loadingDialog = false;
                     this.articleNotFound = true;
                 })
        },
        scroll() {
            console.log();
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
.article-subheader {
    display: flex;
}
.article-subheader  span {
    margin-left: auto;
    font-size: 12px;
    display: flex;
    align-items: center;
    margin-right: 19px;
    cursor: pointer;
    padding-top:65px;
}
.article_header {
    color: #1976d1;
    text-transform:uppercase;
    font-weight:200;
    padding: 0 40px 40px;
    font-family: 'Oswald', sans-serif !important;
    font-size: 26px;
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
