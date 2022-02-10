// Dependecies
import Vue from 'vue';
import VueRouter from 'vue-router';

// Route components
import Home from './pages/Home.vue';
import About from './pages/About.vue';
import Blog from './pages/Blog.vue';
import PostDetail from './pages/PostDetail.vue';

// Routes Activation in Vue
Vue.use(VueRouter);

// Routes
const router = new VueRouter ({
    mode: 'history',
    linkActiveClass: 'active',
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

        {
        path: '/blog',
        name: 'blog',
        component: Blog,
        },

        {
        path: '/blog/:slug',
        name: 'post-detail',
        component: PostDetail,
        },
]
});

export default router;