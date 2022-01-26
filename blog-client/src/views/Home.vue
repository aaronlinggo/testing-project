<template>
  <div class="container mx-auto w-3/4">
    <section class="text-gray-600 body-font overflow-hidden">
      <div v-for="(post, index) in blog.data" :key="index">
        <Post v-bind:id="post.id" v-bind:title="post.title" v-bind:desc="post.desc" v-bind:uploaded_by="search(post.posted_by)"></Post>
      </div>
    </section>
  </div>
</template>

<script>
import Post from '@/components/Post.vue'
import {onMounted, ref} from 'vue'
import axios from 'axios'

export default {
  name: 'Home',
  components: {
    Post
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

    function search(id) {
        let name = "";
        axios.get(
            `http://127.0.0.1:8000/api/user/${id}`
        )
        .then((result) => {
            console.log(result.data.data.name);
            name = result.data.data.name;   
        }).catch((err) => {
            console.log(err.response)
        });

        return name;
    }

    return {
        blog,
        search
    }
  }
}
</script>
