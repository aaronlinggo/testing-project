<template>
    <Modal v-if="showMedal" @close="showMedal = false"></Modal>
    <header class="text-gray-600 body-font bg-black-custom">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center w-3/4">
            <router-link
                to="/"
                class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0"
            >
                <span class="ml-3 text-3xl text-gray-100">My Blog</span>
            </router-link>
            <nav
                class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400 flex flex-wrap items-center text-base justify-center"
            >
                <a class="mr-5 hover:text-gray-900">First Link</a>
            </nav>
            <button
                class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"
                @click="showModal = true"
            >
                Login
            </button>
        </div>
    </header>
    <div v-if="showModal" class="bg-indigo-500">AAAAAAAAAA</div>
</template>

<script>
    import '@/components/Modal.vue'
    import Modal from './Modal.vue';
    export default {
        name: "Navbar",
        components: {
            Modal
        },
        data() {
            return {
                showMedal: false
            }
        },
        methods: {

        }
    };
</script>