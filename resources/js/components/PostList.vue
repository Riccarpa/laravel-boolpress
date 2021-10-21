<template>
    <section id="Post-list">
        <Loader v-if="isLoading" />
        <div
            v-else
            class="d-flex flex-wrap justify-content-center position-relative"
        >
            <Card :post="post" v-for="post in posts" :key="post.id" />
            <nav class="pages-navbar" aria-label="Page navigation example">
                <ul class="pagination">
                    <li
                        class="page-item pointer"
                        @click="getPosts(pagination.currentPage - 1)"
                        v-if="pagination.currentPage > 1"
                    >
                        <a class="page-link">Previous</a>
                    </li>
                    <li
                        class="page-item"
                        :class="pagination.currentPage == i ? 'active' : ''"
                        v-for="i in pagination.lastPage"
                        :key="i"
                    >
                        <a class="page-link" @click="getPosts(i)">{{ i }}</a>
                    </li>
                    <li
                        @click="getPosts(pagination.currentPage + 1)"
                        v-if="pagination.lastPage > pagination.currentPage"
                        class="page-item pointer"
                    >
                        <a class="page-link">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
</template>

<script>
import Card from "./Card.vue";
import Loader from "./Loader.vue";

export default {
    name: "PostList",
    components: {
        Card,
        Loader
    },
    data() {
        return {
            posts: [],
            isLoading: false,
            pagination: {}
        };
    },
    methods: {
        getPosts(page) {
            this.isLoading = true;
            axios
                .get(`http://localhost:8000/api/posts?page=${page}`)
                .then(res => {
                    const { data, current_page, last_page } = res.data;

                    this.posts = data;
                    this.pagination = {
                        currentPage: current_page,
                        lastPage: last_page
                    };
                    this.isLoading = false;
                })
                .catch(err => {
                    console.error(err);
                })
                .then(() => {
                    this.isLoading = false;
                });
        }
    },
    created() {
        this.getPosts();
    }
};
</script>

<style scoped>
.page-item {
    cursor: pointer;
}
.pages-navbar {
    position: absolute;
    top: 100%;
}
</style>
