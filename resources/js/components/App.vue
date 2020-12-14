<template>
    Hello
</template>

<script>
    import axios from 'axios'

    import Post from './Post'

    export default {
        name: 'App',

        components:

        mounted() {
            this.fetchPosts()
        },

        data() {
            return {

            }
        },

        methods: {
            async fetchPosts() {

            }
        }
    }
</script>
