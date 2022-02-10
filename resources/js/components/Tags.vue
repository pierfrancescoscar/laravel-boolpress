<template>
  <div class="mb-5">
      <span
        v-for="tag in list"
        :key="`tag-${tag.id}`"
        class="badge badge-primary mr-2"
      >
        {{ tag.name }}
      </span>
  </div>
</template>

<script>
export default {
    name: 'Tags',
    props: {
        list: Array,
    }

}
</script>

<style scoped lang="scss">

</style>