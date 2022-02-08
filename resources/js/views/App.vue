<template>
    <div>
        <h1>Our Blog</h1>

        <div v-if="posts">

        </div>

        <div v-else>
            Loading posts...
        </div>
    </div>
</template>

<script>
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