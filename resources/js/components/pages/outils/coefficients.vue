<template>
    <v-layout column>
        <v-expansion-panel popout>
            <v-expansion-panel-content @input="fetch_data('tarif_fiscals')">
                <div CL slot="header">Tarif fiscal</div>
                <app-tarif-fiscal :loading-tree="loading" :items="tarif_fiscals"></app-tarif-fiscal>
            </v-expansion-panel-content>
            <v-expansion-panel-content @input="fetch_data('coefficients')">
                <div CL slot="header">COEFFICIENTS APPLICABLES AU CHIFFRE D'AFFAIRE POUR LA Détermination du Bénéfice forfaitaire a l'ir</div>
                    <v-card>
                        <div class="text-xs-center p-5" v-if="loading">
                                   <v-progress-circular
                                    indeterminate
                                    color="primary"
                                    ></v-progress-circular>
                        </div>
                        <v-card-text v-else>
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
                        </v-card-text>
                    </v-card>
            </v-expansion-panel-content>
            <v-expansion-panel-content @input="fetch_data('nomenclatures')"  @click="fetch_data('nomenclatures')">
                <div slot="header">NOMENCLATURE DES ACTIVITés PASSIBLES DE LA TAXE PROFESSIONNELLE</div>
                    <v-card>
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
            </v-expansion-panel-content>
        </v-expansion-panel>
    </v-layout>
</template>

<script>
import appTarifFiscal from "./tarif-fiscal";

export default {
    data() {
        return {
            loading : false,
            coefficients : [],
            nomenclatures : [],
            tarif_fiscals : []
        }
    },
    methods: {
        fetch_data(data) {
            this.loading = true;
            if(data == "coefficients") {
                axios.get("outils/coefficients").then((response)=> {
                    this.coefficients = response.data.coefficients;
                    this.loading = false;
                })
            } else if( data == "nomenclatures") {
                axios.get("outils/nomenclatures").then((response)=> {
                    this.nomenclatures = response.data.nomenclature;
                    this.loading = false;
                })
            } else if( data == "tarif_fiscals") {
                axios.get("outils/tarif-fiscal").then((response)=> {
                    this.tarif_fiscals = response.data.categories;
                    this.loading = false;
                })
            }
        }
    },
    components : {
        appTarifFiscal
    }
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
