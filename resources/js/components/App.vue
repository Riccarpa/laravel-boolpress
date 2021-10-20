<template>
    <div class="container">
        <Header :title="title" />
        <main>
            <PostList />
        </main>
    </div>
</template>

<script>
import Header from "./Header.vue";
import PostList from "./PostList.vue";

export default {
    name: "App",
    components: {
        Header,
        PostList
    },
    data() {
        return {
            title: "MyBlog"
        };
    }
};
</script>
