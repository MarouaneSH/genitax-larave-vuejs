<template>
    <div class="text-xs-center">
        <v-dialog
        v-model="dialog"
        width="500"
        >

        <v-card>

            <v-card-text>
                <p class="tahoma-font_all" v-html="contentHTML"></p>
            </v-card-text>

            <v-divider></v-divider>

            <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn
                color="primary"
                flat
                @click="dialog = false"
            >
               Accepter
            </v-btn>
            </v-card-actions>
        </v-card>
        </v-dialog>
    </div>
</template>

<script>
export default {
    mounted(){
        axios.get('/settings/name=policy').then((response)=>{
            this.contentHTML = response.data;
        })
    },
    data() {
        return {
            dialog : true,
            contentHTML : null,
        }
    }
}
</script>

<style scoped>
.banner_immage {
    text-align: center;
}
.banner_immage img {
    width: 200px;
}
</style>
