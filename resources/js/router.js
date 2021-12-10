import Vue from 'vue'
import VueRouter from "vue-router";

Vue.use(VueRouter) //что бы можно было использовать VueRouter внутри Vue

export default  new VueRouter({
    mode:'history',
    routes:[
        {
            path: '/payments',
            component: () => import('./components/payment/Index'),
            name: 'payment.index'
        },
        {
            path: '/payments/create',
            component: () => import('./components/payment/create'),
            name: 'payment.create'
        }
    ]
})
