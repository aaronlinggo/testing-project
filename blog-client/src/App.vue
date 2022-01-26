<template>
  <Navbar id="nav"></Navbar>
  <router-view />
  
</template>

<script>
import Navbar from '@/components/Navbar.vue'
export default {
  name: 'App',
  components: {
    Navbar
  }
}
</script>

<style>
body {
  background-color: #eeeeee;
}

.bg-black-custom {
  background-color: #222831;
}

.bg-white-custom {
  background-color: #f6f6f6;
}
</style>
