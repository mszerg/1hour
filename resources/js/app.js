import Vue from 'vue'
import IndexComponent from "./components/manager/IndexComponent.vue";
import AddComponent from "./components/manager/AddComponent.vue";
import Index from "./components";

import router from "./router";

require('./bootstrap');


const app = new Vue({
    el: '#app',

    components: {
        IndexComponent,
        AddComponent,
        Index
    },

    router //подключаем js компонет router.js
});
