<template>
    <div class="questions_wrapper">
        <div class="app_outils_header" :style="{backgroundColor : outil_info.color}">
            <v-icon @click="$router.go(-1)" class="arrow__back">arrow_back</v-icon>
            <div class="app_outils_header_content" >
                <img :src="'storage/'+outil_info.icon" alt="">
                <div class="app_outils_header_title">{{outil_info.title}} </div>
            </div>
        </div>   
        <div v-if="loading" class="text-xs-center">
            <v-progress-circular
                indeterminate
                color="primary"
            ></v-progress-circular>
        </div>
        <div class="card_questions">
             <div class="card_questions_content" 
                    v-for="(q,index) in questions" 
                    @click="show_question(q.id)"
                    :key="index" >
                <v-layout column>
                    <p class="lead">{{q.created_at}}</p>
                    <h3 class="headline mb-0">{{q.question}} </h3>
                </v-layout>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        const id = this.$route.params.id;
        this.fetch_questions(id)
    },
    data() {
        return {
            questions : [],
            loading : false,
        }
    },
    methods : {
         fetch_questions(id) {
             this.loading = true;
             axios.get(`/faqs/${id}/questions`).then((response)=> {
                this.loading = false;
                this.questions = response.data.questions;
             })
        },
         show_question(id) {
             this.$router.push({name: "faqs_question" , params : {id :id }})
        }
    },
    computed : {
            outil_info() {
                return {
                    icon : this.$route.query.icon,
                    color : this.$route.query.color,
                    title : this.$route.query.title,
                }
            }
    },
}
</script>

<style socped lang="scss">
.card_questions{
    margin: 22px 15px;
    &_content {
        margin: 10px 0;
        background: white;
        padding: 15px 30px;
        border-radius: 20px;
        cursor: pointer;
        .lead {
            color: #304A7F;
        }
    }
}
</style>
