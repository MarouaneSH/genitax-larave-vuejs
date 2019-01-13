<template>
     <v-layout column align-center="">
         <div class="text-xs-center btn_propose search_faq">
                   <app-search></app-search>
                    <v-btn color="primary" style="font-weight: 200;
                        border-radius: 20px;
                        padding: 0px 20px;">
                        <a href="mailto:contact@genitax.ma">Poser une question à la DGI ?</a>
                    </v-btn> 
                     
        </div>

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
import appSearch from '../shared/search';
export default {
    components : {
        appSearch
    },
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
.btn_propose {
    a{
        text-decoration: none;
        color: white;
    }
}
.card__content  {
    display: flex;
    justify-content:center;
    flex-wrap: wrap;
    cursor: pointer;
    &_item {
        width: 30%;
        padding: 30px 17px;
        text-align: center;
        cursor: pointer;
        h3 {
        color: #2c4983;
        font-size: 18px;
        margin-top: 10px;
        font-weight: 200;
        }
        &_card {
            height:150px;
            width:150px;
            display:flex;
            align-items:center;
            justify-content:center;
           border-radius: 50%;
           margin: 0 auto;
           box-shadow: 0 5px 15px 0 rgba(37,44,97,0.15), 0 2px 4px 0 rgba(93,100,148,0.2);
           transition: all .6s ease;

           &:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 25px 0 rgba(37,44,97,0.2), 0 2px 24px 0 rgba(93,100,148,0.2);
            transition: all .2s ease;
           }
   
        }
        img {
                   max-width: 100%;
        }
    }
}



</style>
