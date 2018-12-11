<template>
    <v-card>
        <v-icon @click="$router.go(-1)" class="arrow__back p-5">arrow_back</v-icon>
        <div class="text-xs-center" v-if="loading">
            <v-progress-circular
            indeterminate
            color="primary"
            ></v-progress-circular>
        </div>
         <v-card-text v-else>
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
        </v-card-text>
    </v-card>
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
    }
}
</script>

<style scoped>
.coefficient_box{
      box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
    padding: 20px;
    margin: 20px 0;
}
.coefficient_item strong{
 color: #5284e2;
}
</style>
