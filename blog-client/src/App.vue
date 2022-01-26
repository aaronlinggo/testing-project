<template>
  <!-- <h1 class="text-9xl bg-indigo-500">Hello World</h1>   -->
  <Navbar id="nav"/>
  <router-view/>
</template>

<script>
  import Navbar from '@/components/Navbar.vue'
  export default {
    name: 'Home',
    components: {
      Navbar
    }
  }
</script>

<style>
#nav a {
  font-weight: bold;
  color: #2c3e50;
}

#nav a.router-link-exact-active {
  color: #42b983;
}
</style>
