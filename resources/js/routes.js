// Dependecies
import Vue from 'vue';
import VueRouter from 'vue-router';

// Routes Activation in Vue
Vue.use(VueRouter);

// Routes
const router = new VueRouter ({
    mode: 'history',
    routes: [
        {
        path: '/',
        name: 'home',
        component: Home,
        }
]
});