<template>
    <div class="container">

    </div>
</template>

<script>
import axios from 'axios';
import Loader from '../components/Loader';

export default {
    name: 'App',
    components: {
        Loader,
    },
    data() {
        return {
            posts: null,
        }
    },
    created() {
        // console.log('Get posts from API');
        this.getPosts();
    },
    methods: {
        getPosts(page = 1) {
            // console.log('Axios call here');
            
            axios.get(`http://127.0.0.1:8000/api/posts?page=${page}`)
                .then(res => {
                    console.log(res);

                    this.posts = res.data.data;
                    this.pagination = {
                        current: res.data.current_page,
                        last: res.data.last_page,
                    };
                });
        },
        formatDate(postDate) {
            // console.log(postDate);
            const date = new Date(postDate);
            // console.log(date);

            const formatted = new Intl.DateTimeFormat('it-IT').format(date);
            return formatted;
        }

    }

}
</script>

<style lang="scss">

</style>