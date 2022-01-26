<template>
  <div class="container mx-auto w-3/4">
    <section class="text-gray-600 body-font overflow-hidden">
      <Post id="1" title="Post 1" desc="Lorem" uploaded_by="1"></Post>
      <Post id="2" title="Post 2" desc="Lorem" uploaded_by="2"></Post>
      <Post id="3" title="Post 3" desc="Lorem" uploaded_by="3"></Post>
    </section>
  </div>
</template>

<script>
import Post from '@/components/Post.vue'
export default {
  name: 'Home',
  components: {
    Post
  }
}
</script>
