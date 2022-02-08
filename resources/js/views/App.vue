<template>
    <div>
        <h1>Our Blog</h1>

        <div v-if="posts">
            <article v-for="post in posts" :key="`post-${post.id}`" class="mb-4">
                <h2>{{ post.title }}</h2>
                <div class="mb-4">{{ post.created_at }}</div>
                <p>{{ post.content }}</p>
            </article>

        <!-- Pagination -->

            <!-- Previous -->
            <button
            class="btn btn-primary mr-3"
            :disabled="pagination.current === 1"
            @click="getPosts(pagination.current - 1)"
            >
            Prev
            </button>
            <!-- Next -->
            <button
            class="btn btn-primary mr-3"
            :disabled="pagination.current === pagination.last"
            @click="getPosts(pagination.current + 1)"
            >
            Next
            </button>

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