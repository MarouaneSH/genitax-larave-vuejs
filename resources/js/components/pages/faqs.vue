<template>
     <v-layout column align-center="" class="mt-5">
            <div class="text-xs-center w-100" v-if="loading">
                    <v-progress-circular
                    indeterminate
                    color="primary"
                    ></v-progress-circular>
            </div>
            <div v-else class="card__content">
                 <v-flex x6 
                        v-show="!displayQuestion" 
                        v-for="faq in faqs" :key="faq.id" >
                    <v-card @click="fetch_questions(faq.id)"
                            class="card__faqs">
                            <div class="text-xs-center">
                                    <v-avatar :size="100">
                                        <v-img
                                        :src="'storage/'+faq.icone"
                                        ></v-img>
                                    </v-avatar>
                            </div>
                            <v-card-title class="text-xs-center" primary-title>
                                    <h3 class="headline mb-0">{{faq.titre_categories}} </h3>
                            </v-card-title>
                    </v-card>
                  </v-flex>
                  <div v-show="displayQuestion">
                      <v-icon @click="displayQuestion = false" class="arrow__back">arrow_back</v-icon>
                      <v-card class="card__questions" 
                             v-for="(q,index) in questions" 
                             @click="show_question(q.id,q.question)"
                             :key="index" >
                          <v-layout column>
                                <h3 class="headline mb-0">{{q.question}} </h3>
                                <p class="lead">{{q.created_at}}</p>
                            </v-layout>
                      </v-card>
                  </div>
            </div>
            <v-dialog v-model="dialog" fullscreen hide-overlay transition="dialog-bottom-transition">
                <v-card>
                        <v-toolbar dark color="primary">
                            <v-btn icon dark @click="dialog = false">
                                <v-icon>close</v-icon>
                            </v-btn>
                            <v-toolbar-title v-if="selectedQuestion">{{selectedQuestion}} </v-toolbar-title>
                            <v-spacer></v-spacer>
                        </v-toolbar>
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
      </v-layout>
</template>

<script>
export default {
    mounted() {
        this.loading = true;
        axios.get('/faqs').then((response)=> {
            this.faqs = response.data.faqs;
            this.loading = false;
        })  
    },
    data(){
        return {
            faqs : [],
            loading : false,
            displayQuestion : false,
            questions : [],
            dialog : false,
            selectedQuestion : null,
            loadingDialog : false,
            contentHTML : null,
        }
    },
    methods : {
        fetch_questions(id) {
             this.loading = true;
             axios.get(`/faqs/${id}/questions`).then((response)=> {
                this.loading = false;
                this.displayQuestion = true;
                this.questions = response.data.questions;
             })
        },
        show_question(id,name) {
            this.dialog = true;
            this.loadingDialog = true;
            this.selectedQuestion = name;
            axios.get(`questions/${id}`).then((response)=> {
                 this.contentHTML = response.data.question.response;
                 this.loadingDialog = false;
            })
        }
    }
}
</script>

<style>
.card__faqs {
    margin: 5px;
    cursor: pointer;
}

.card__questions {
    padding: 20px;
    width: 100%;
    cursor: pointer;
}

.arrow__back {
    font-size: 29px;
    margin: 15px 0;
    cursor: pointer;
}
.card__content  {
    display: flex;
    flex-wrap: wrap;
}
.card__content  .flex {
        width: 50%;
}
.card__faqs h3{
    width: 100%;
}


</style>
