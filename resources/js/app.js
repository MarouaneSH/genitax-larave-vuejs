
require('./bootstrap');
import VueRouter from 'vue-router';
import Vuetify from 'vuetify';
import SocialSharing from 'vue-social-sharing';
import { routes } from './routes/routes';


window.Vue = require('vue');
Vue.use(SocialSharing);


Vue.use(VueRouter);
Vue.use(Vuetify)

window.axios.defaults.baseURL ="http://genitax.test/api";
// window.axios.defaults.baseURL ="http://142.93.227.137/api";

const router = new VueRouter({
    routes
});

Vue.component('app-side-bar', require('./components/shared/SideBarComponent.vue'));
Vue.component('app-layout', require('./components/layout.vue'));



const app = new Vue({
    el: '#app',
    router
});
