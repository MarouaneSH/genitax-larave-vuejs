
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vuetify from 'vuetify';
// import 'vuetify/dist/vuetify.min.css';


Vue.use(Vuetify)

Vue.component('app-side-bar', require('./components/SideBarComponent.vue'));
Vue.component('app-home', require('./components/home.vue'));



const app = new Vue({
    el: '#app'
});
