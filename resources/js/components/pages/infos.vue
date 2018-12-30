<template>
        <div id="info_content">
            <div class="card__info">
                <p><strong>Email : </strong> {{email}}  </p>
                <p><strong>Téléphone : </strong> {{telephone}}  </p>
                <div class="content_html" v-html="contentHTML">
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
.card__info {
    padding: 30px;
    box-shadow: 0 5px 15px 0 rgba(37,44,97,0.15), 0 2px 4px 0 rgba(93,100,148,0.2);
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
