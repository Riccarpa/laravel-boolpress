<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <Header :title="title" />
                    </div>

                    <div class="card-body text-center">
                        my blog WIP
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Header from "./Header.vue";
export default {
    name: "App",
    components: {
        Header
    },
    data() {
        return {
            title: "MyBlog"
        };
    }
};
</script>
