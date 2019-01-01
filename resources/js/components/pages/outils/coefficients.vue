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
        <div class="coefficient_box_wrapper">
             <div class="coefficient_box tahoma-font_all" v-for="coef in coefficients" :key="coef.id">
                    <div class="coefficient_item">
                        <strong>PROFESSION: </strong>
                        {{coef.profession}}
                    </div>
                    <div class="coefficient_details">
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

<style lang="scss">
.app_outils_header {
    padding: 20px;
}
</style>
