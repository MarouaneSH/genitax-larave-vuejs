<template>
    <div class="text-xs-center">
        <v-dialog
        v-model="dialog"
        width="500"
        >

        <v-card>

            <v-card-text>
                <div class="banner_immage" v-if="!displayPrivacy">
                    <img src="/img/seddik.png" alt="">
                </div>
                <p v-else class="tahoma-font_all" v-html="contentHTML"></p>
            </v-card-text>

            <v-divider></v-divider>

            <v-card-actions v-if="displayPrivacy">
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
        setTimeout(()=> {
            this.displayPrivacy = true;
        }, 3000)
        axios.get('/settings/name=policy').then((response)=>{
            this.contentHTML = response.data;
        })
    },
    data() {
        return {
            dialog : true,
            contentHTML : null,
            displayPrivacy : false,
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
