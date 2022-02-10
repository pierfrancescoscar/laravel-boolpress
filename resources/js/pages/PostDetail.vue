<template>
  <section class="container">
      <div v-if="post">
          
          <h1>{{ post.title }}</h1>

          <h3>Category: {{ post.category.name }}</h3>

          <Tags :list="post.tags" />

          <p>{{ post.content }}</p>

      </div>

      <div v-else>
          Loading...
      </div>
  </section>
</template>

<script>
import axios from 'axios';
import Tags from '../components/Tags';

export default {
    name: 'PostDetail',
    components: {
        Tags,
    },
    data() {
        return {
            post: null,
        }
    },
    created() {
        this.getPostDetail();
    },
    methods: {
        getPostDetail() {
            axios.get(`http://127.0.0.1:8000/api/posts/${this.$route.params.slug}`)
            .then(res => {
                this.post = res.data;
            })
            .catch(err => log.error(err));
        }
    }

}
</script>

<style lang="scss" scoped>

</style>