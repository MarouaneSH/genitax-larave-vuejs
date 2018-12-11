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
                 @click="$router.push({ name: outil.component})">

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
    }
}
</script>

<style lang="scss" scoped>
.outil_card{
    padding: 30px 40px;
    border-radius: 60px;
    display: flex;
    align-items: center;
    color: white;
    margin-top: 15px;
    cursor: pointer;
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
