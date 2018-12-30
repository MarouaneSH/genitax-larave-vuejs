<template>
        <div id="info_content">
            <img src="img/info.png" class="img_info" alt="">
            <div class="card__info">
                <p><strong>Email : </strong> {{email}}  </p>
                <p><strong>Téléphone : </strong> {{telephone}}  </p>
                <div class="content_htmlS" v-html="contentHTML">
                </div>
            </div>
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

<style lang="scss">
#info_content {
    text-align: center;
}
.img_info {
 width: 350px;
}
.card__info {
    padding: 30px;
    border-radius: 10px;
    text-align: center;
    p {
        strong {
            display: block;
            text-transform: uppercase;
            color: #2c4983;
        }
    }
}

</style>
