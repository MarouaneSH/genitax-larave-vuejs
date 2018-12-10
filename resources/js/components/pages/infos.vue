<template>
        <div id="info_content">
            <v-card class="card__info">
                <p><strong>Email : </strong> {{email}}  </p>
                <p><strong>Téléphone : </strong> {{telephone}}  </p>
                <div class="content_html" v-html="contentHTML">
                </div>
            </v-card>
        </div>
</template>

<script>
export default {
    mounted() {
        axios.get('/infos').then((response)=> {
            this.contentHTML = response.data.info.contenu_html;
            this.email = response.data.info.email;
            this.telephone = response.data.info.telephone;
        })
    },
    data () {
        return {
            contentHTML : null,
            email :null,
            telephone : null,
        }
    }
}
</script>

<style>
.card__info {
    padding: 30px;
}
</style>
