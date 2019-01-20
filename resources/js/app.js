
require('./bootstrap');
import VueRouter from 'vue-router';
import Vuetify from 'vuetify';
import SocialSharing from 'vue-social-sharing';
import { routes } from './routes/routes';
import Vuex from 'vuex'
import {store} from "./store";



window.Vue = require('vue');
Vue.use(SocialSharing);


Vue.use(VueRouter);
Vue.use(Vuetify)
Vue.use(Vuex)

window.axios.defaults.baseURL ="http://genitax.test/api";
// window.axios.defaults.baseURL ="http://genitax.ma/api";

const router = new VueRouter({
    routes
});

Vue.component('app-side-bar', require('./components/shared/SideBarComponent.vue'));
Vue.component('app-layout', require('./components/layout.vue'));



const app = new Vue({
    el: '#app',
    router,
    store
    
});
