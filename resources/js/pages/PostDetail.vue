<template>
  <section class="container">
      <div v-if="post">
          
          <h1 class="mb-4">{{ post.title }}</h1>

          <h4 class="mb-4">{{ post.dateFormatted }}</h4>

            <h3 v-if="post.category">Category: {{ post.category.name }}</h3>

            <h3 v-else>Uncategorized</h3>

          <Tags :list="post.tags" />

          <figure v-if="post.cover">
                <img :src="post.cover" :alt="post.title">
          </figure>

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