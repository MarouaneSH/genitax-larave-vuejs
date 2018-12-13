
require('./bootstrap');
import VueRouter from 'vue-router';
import Vuetify from 'vuetify';
import { routes } from './routes/routes';


window.Vue = require('vue');


Vue.use(VueRouter);
Vue.use(Vuetify)

window.axios.defaults.baseURL ="http://genitax.marouane.me/api";

const router = new VueRouter({
    routes
});

Vue.component('app-side-bar', require('./components/shared/SideBarComponent.vue'));
Vue.component('app-layout', require('./components/layout.vue'));



const app = new Vue({
    el: '#app',
    router
});
