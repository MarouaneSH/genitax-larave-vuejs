<template>
        <div id="info_content">
            <img src="img/info.png" class="img_info" alt="">
            <div class="card__info tahoma-font_all">
                <div class="content_htmlS" v-html="contentHTML">
                </div>
                <div style="height:30px"></div>
                <a  :href="'mailto:'+email" style="padding: 20px 50px;
    background: white;
    border-radius: 34px;
    position: relative;"><strong style="position: absolute;
    top: -20px;
    background: #2c4983;
    color: white;
    box-shadow: 0 5px 5px 0px rgba(0,0,0,0.2);
    left: -20px;
    font-family: 'Oswald' !important;
    width: 66px;
    border-radius: 20px;
    font-weight: 200;
    padding: 10px;">E-mail</strong> {{email}}  </a> <br />

                <div style="height:65px"></div>
    <a :href="'tel:'+telephone" style="padding: 20px 50px;
    background: white;
    border-radius: 34px;
    position: relative;"><strong style="position: absolute;
    top: -20px;
    background: #2c4983;
    color: white;
    box-shadow: 0 5px 5px 0px rgba(0,0,0,0.2);
    left: -20px;
    font-family: 'Oswald' !important;
    width: 80px;
    border-radius: 20px;
    font-weight: 200;
    padding: 10px;">Téléphone</strong> {{telephone}}  </a> <br />
<div style="height:70px"></div>
                <img src="img/tax-firm2017.jpg" width="120">
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
