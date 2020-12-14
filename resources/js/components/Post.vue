<template>
    <div class="card my-3" data-id="{{ id }}">
        <div class="card-header">
            <div class="card-header-title">
                <span>{{ created_at }}</span>
                <span>{{ updated_at }}</span>
            </div>
        </div>
        <div class="card-content" style="white-space: pre-wrap">
            <div>{{ preview }}</div>
            <div>{{ content }}</div>
        </div>
        <div class="card-footer" v-if="meta">
            <div v-if="meta['og:url']">
                <div>
                    <a :href="meta['og:url']" v-text="meta['og:title']"></a>
                </div>
                <div v-if="meta['og:image']">
                    <a :href="meta['og:url']" target="_blank">
                        <img :src="meta['og:image']" alt="image link">
                    </a>
                </div>
                <div v-text="meta['og:description']">

                </div>
            </div>

            <pre v-if="debug">{{ meta }}</pre>

        </div>
    </div>
</template>

<script>

export default {
    name: 'Post',

    props: [
        'id',
        'preview',
        'content',
        'meta',
        'created_at',
        'updated_at',
    ],

    components: {

    },

    mounted() {

    },

    data() {
        return {
            debug: false
        }
    },

    methods: {

    }
}
</script>
