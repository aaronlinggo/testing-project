<template>
    <div class="container px-4 py-4 mx-auto my-4 bg-white-custom rounded-lg w-3/4">
        <div class="flex flex-wrap -m-12">
            <div class="p-12 flex flex-col items-start w-full">
                <h2
                    class="sm:text-2xl text-xl title-font font-medium text-gray-900 mt-4 mb-4"
                >{{ title }}</h2>
                <p class="leading-relaxed mb-8">{{ desc }}</p>
                <p class="leading-relaxed mb-8">Uploaded by : {{ uploaded_by }}</p>
                <div class="flex items-center flex-wrap mt-auto w-full">
                    <span
                        class="text-gray-400 mr-3 inline-flex items-center ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200"
                    >
                        <svg
                            class="w-4 h-4 mr-1"
                            stroke="currentColor"
                            stroke-width="2"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            viewBox="0 0 24 24"
                        >
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>1.2K
                    </span>
                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                        <svg
                            class="w-4 h-4 mr-1"
                            stroke="currentColor"
                            stroke-width="2"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            viewBox="0 0 24 24"
                        >
                            <path
                                d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"
                            />
                        </svg>6
                    </span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "PostDetails",
    props: {
        id: Number
    },
    data() {
        return {
            //TODO: request from database the other property based on the id
            title: 'temp title',
            desc: 'temp desc',
            uploaded_by: 'temp uploaded_by'
        }
    }
}
</script>

<style>
</style>