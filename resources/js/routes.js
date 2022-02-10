// Dependecies
import Vue from 'vue';
import VueRouter from 'vue-router';

// Route components
import Home from './pages/Home.vue';
import About from './pages/About.vue';

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
        },

        {
        path: '/about',
        name: 'about',
        component: About,
        },
]
});

export default router;