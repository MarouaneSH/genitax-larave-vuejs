<template>
    <div id="outils_wrapper">
         <div class="text-xs-center mt-5" v-if="loading">
                <v-progress-circular
                indeterminate
                color="primary"
                ></v-progress-circular>
        </div>
        <div v-else class="outils_container">
            <div class="outil_card" 
                 v-for="outil in outils" :key="outil.id"
                 :style="{backgroundColor : outil.coleur}"
                 @click="navigateTo(outil)">

                <img :src="'storage/' + outil.icon" alt="">
                <div class="outil_card_title">{{outil.titre}} </div>

            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        axios.get("/outils").then((response)=>{
            this.outils  = response.data.outils;
            this.loading = false;
        })
    },
    data() {
        return {
            outils : [],
            loading : true
        }
    },
    methods : {
        navigateTo(outil) {
            this.$router.push({ name: outil.component , 
                                query :  {   
                                    title : outil.titre,
                                    icon : outil.icon, 
                                    color : outil.coleur , 
                                }
                            })
        }
    }
}
</script>

<style lang="scss" scoped>
.outils_container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
.outil_card{
    padding: 30px 40px;
    border-radius: 60px;
    display: flex;
    align-items: center;
    margin: 20px 0;
    width: 49%;
    color: white;
    margin-top: 15px;
    cursor: pointer;
      box-shadow: 0 5px 15px 0 rgba(37,44,97,0.15), 0 2px 4px 0 rgba(93,100,148,0.2);
    transition: all .3s ease-in;
    &:hover {
        transform: scale(1.03);
    }
    img {
        max-width: 50px;
    }
    &_title {
        margin-left: 10px;
    }
}
</style>
