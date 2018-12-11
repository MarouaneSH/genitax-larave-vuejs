<template>
    <div class="coefficient_wrapper">
        <v-icon @click="$router.go(-1)" class="arrow__back">arrow_back</v-icon>
        <div class="text-xs-center" v-if="loading">
            <v-progress-circular
            indeterminate
            color="primary"
            ></v-progress-circular>
        </div>
        <div class="coefficient_box" v-for="coef in coefficients" :key="coef.id">
            <div class="coefficient_item">
                <strong>PROFESSION: </strong>
                {{coef.profession}}
            </div>
            <div class="coefficient_item">
                <strong>N.M.A.E: </strong>
                {{coef.nmae}}
            </div>
            <div class="coefficient_item">
                <strong>Taux: </strong>
                {{coef.taux}} %
            </div>
       </div>
    </div>
</template>

<script>


export default {
    mounted() {
          this.loading = true;
        axios.get("outils/coefficients").then((response)=> {
            this.coefficients = response.data.coefficients;
            this.loading = false;
        })
    },
    data() {
        return {
            loading : false,
            coefficients : [],
        }
    },
    methods: {
    },

}
</script>

<style>

.coefficient_box{
      box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
    padding: 20px;
    margin: 20px 0;
}
.coefficient_item strong{
 color: #5284e2;
}
</style>
