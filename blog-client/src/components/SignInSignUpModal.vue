<template>
    <SignInModal v-if="isSignIn" @signUp="isSignIn = false"></SignInModal>
    <SignUpModal v-else @signIn="isSignIn = true"></SignUpModal>
</template>

<script>
import SignInModal from '@/components/SignInModal.vue'
import SignUpModal from '@/components/SignUpModal.vue'
export default {
  name: "SignInSignUpModal",
  components: {
      SignInModal, SignUpModal
  },
  data() {
    return {
      isSignIn: true
    }
  },
  methods: {
  }
}
</script>

<style>

</style>