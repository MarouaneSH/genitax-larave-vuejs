<template>
    <div class="app_outils_wrapper">
        <div class="app_outils_header" :style="{backgroundColor : outil_info.color}">
            <v-icon @click="$router.go(-1)" class="arrow__back">arrow_back</v-icon>
            <div class="app_outils_header_content" >
                <img :src="'storage/'+outil_info.icon" alt="">
                <div class="app_outils_header_title">{{outil_info.title}} </div>
            </div>
        </div>        
        <div class="text-xs-center" v-if="loading">
            <v-progress-circular
            indeterminate
            color="primary"
            ></v-progress-circular>
        </div>
         <div v-else>
            <div class="coefficient_box" v-for="item in nomenclatures" :key="item.id">
                    <div class="coefficient_item">
                        <strong>ACTIVITES: </strong>
                        {{item.activites}}
                    </div>
                    <div v-if="item.classe_3" class="coefficient_item">
                        <strong>CLASSE 3 (10%) </strong>
                        {{item.classe_3}}
                    </div>
                    <div v-if="item.classe_2" class="coefficient_item">
                        <strong>CLASSE 2 (20%) </strong>
                        {{item.classe_2}}
                    </div>
                    <div v-if="item.classe_1" class="coefficient_item">
                        <strong>CLASSE 1 (10%) </strong>
                        {{item.classe_1}}
                    </div>
                </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        this.loading = true;
         axios.get("outils/nomenclatures").then((response)=> {
            this.nomenclatures = response.data.nomenclature;
            this.loading = false;
        })
    },
    data() {
        return {
            loading : false,
            nomenclatures : [],
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

<style scoped>
.coefficient_box{
    padding: 20px;
    width: 80%;
    margin-top: 20px;
    border-radius: 5px;
}
.coefficient_item strong{
 color: #5284e2;
}
</style>
