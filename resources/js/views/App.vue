<template>
    <div>
        <h1>Our Blog</h1>

        <div v-if="posts">
            <article v-for="post in posts" :key="`post-${post.id}`" class="mb-4">
                <h2>{{ post.title }}</h2>
                <div class="mb-4">{{ post.created_at }}</div>
                <p>{{ post.content }}</p>
            </article>
        </div>

        <div v-else>
            Loading posts...
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: 'App',
    components: {},
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
        getPosts() {
            // console.log('Axios call here');
            
            axios.get('http://127.0.0.1:8000/api/posts')
                .then(res => {
                    console.log(res);

                    this.posts = res.data;
                });
        }

    }

}
</script>

<style lang="scss">

</style>