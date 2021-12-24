import Vue from 'vue'
import IndexComponent from "./components/manager/IndexComponent.vue";
import AddComponent from "./components/manager/AddComponent.vue";
import App from "./components/App";
import Appaccruals from "./components/Appaccruals";


import router from "./router";

require('./bootstrap');

Vue.component('pagination', require('laravel-vue-pagination'));

const app = new Vue({
    el: '#app',

    components: {
        IndexComponent,
        AddComponent,
        Appaccruals,
        App,
    },

    router //подключаем js компонет router.js
});
