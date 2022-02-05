<template>
  <div class="container mx-auto w-3/4">
    <section class="text-gray-600 body-font overflow-hidden">
      <div v-for="post in blog.data" :key="post.id">
        <router-link :to="{ name: 'PostDetails', params: { id: post.id } }">
          <Post
            :id="post.id"
            :title="post.title"
            :desc="post.desc"
            :uploaded_by="search(post.posted_by)"
          ></Post>
        </router-link>
      </div>
      <Pagination></Pagination>
    </section>
  </div>
</template>

<script>
import Post from '@/components/Post.vue'
import { onMounted, ref } from 'vue'
import axios from 'axios'
import Pagination from '@/components/Pagination.vue'

export default {
  name: 'Home',
  components: {
    Post,
    Pagination
  },
  setup() {
    // reactive post
    let blog = ref([]);

    onMounted(() => {
      // get data from api endpoint
      axios.get('http://127.0.0.1:8000/api/blog')
        .then((result) => {
          blog.value = result.data
        }).catch((err) => {
          console.log(err.response)
        });
    });

    return {
      blog,
      search
    }
  }
}
function search(id) {
    axios.get(
      `http://127.0.0.1:8000/api/user/${id}`
    )
    .then((result) => {
      console.log(result.data);
      return result.data.data.name;
    }).catch((err) => {
      console.log(err.response)
    });
}
</script>
