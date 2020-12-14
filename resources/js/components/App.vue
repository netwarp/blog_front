<template>
    <Post v-for="post in posts"
          :id="post.id"
          :preview="post.preview"
          :content="post.content"
          :meta="post.meta"
          :created_at="post.created_at"
          :updated_at="post.updated_at"
    />
</template>

<script>
    import axios from 'axios'

    import Post from './Post'

    export default {
        name: 'App',

        components:[

        ],

        mounted() {
            this.fetchPosts()

            window.addEventListener('scroll', () => {
                let current_scroll = window.pageYOffset
                let limit = document.body.offsetHeight - window.innerHeight


                if (current_scroll === limit) {
                    this.page++
                    this.fetchPosts()
                }
            });
        },

        data() {
            return {
                page: 1,
                last_page: null,
                posts: []
            }
        },

        methods: {
            async fetchPosts() {
                const url = `/api/posts?page=${this.page}`;
                const response = await axios.get(url)
                let data = await response.data

                this.last_page = await response.data.meta.last_page

                for (let post of data.data) {
                    this.posts.push(post)
                }
            },
        }
    }
</script>
