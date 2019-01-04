<template>
     <v-layout column align-center="">
            <div class="text-xs-center w-100" v-if="loading">
                    <v-progress-circular
                    indeterminate
                    color="primary"
                    ></v-progress-circular>
            </div>
            <div v-else class="card__content card__faqs">
                 <div class="card__content_item"  v-for="faq in faqs" :key="faq.id" >
                        <div class="card__content_item_card" @click="navigateTo(faq)"
                                :style="{backgroundColor : faq.couleur}">
                                <div class="text-xs-center">
                                        <img :src="'storage/'+faq.icone" alt="">
                                </div>
                        </div>
                        <h3 class="mb-0">{{faq.titre_categories}} </h3>
                 </div>
            </div>
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
        navigateTo(faq) {
            this.$router.push({
                name : "faqs_single", 
                params : {id :faq.id},
                query :  {   
                    title : faq.titre_categories,
                    icon : faq.icone, 
                    color : faq.couleur , 
                }
            });
        },
    }
}
</script>

<style lang="scss">
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
    cursor: pointer;
    &_item {
        width: 30%;
        padding: 30px 17px;
        text-align: center;
        cursor: pointer;
        h3 {
        color: #2c4983;
        font-size: 14px;
        margin-top: 10px;
        font-weight: 400;
        }
        &_card {
          padding: 25px 17px;
           border-radius: 33px;
           max-width: 150px;
           margin: 0 auto;
           box-shadow: 0 5px 15px 0 rgba(37,44,97,0.15), 0 2px 4px 0 rgba(93,100,148,0.2);
   
        }
        img {
                   max-width: 100%;
        }
    }
}



</style>
