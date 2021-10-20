<template>
    <section id="Post-list" class="d-flex flex-wrap justify-content-center">
        <Card :post="post" v-for="post in posts" :key="post.id" />
    </section>
</template>

<script>
import Card from "./Card.vue";
export default {
    name: "PostList",
    components: {
        Card
    },
    data() {
        return {
            posts: []
        };
    },
    methods: {
        getPosts() {
            axios
                .get("http://localhost:8000/api/posts")
                .then(res => {
                    this.posts = res.data;
                    console.log(this.posts);
                })
                .catch(err => {
                    console.error(err);
                });
        }
    },
    created() {
        this.getPosts();
    }
};
</script>

<style></style>
