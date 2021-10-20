<template>
    <div class="card m-4" style="width: 18rem;">
        <!-- <img src="{{ post.image }}" class="card-img-top" alt="..." /> -->
        <div class="card-body">
            <h5 class="card-title">{{ post.title }}</h5>
            <p class="card-text">
                {{ post.content }}
            </p>
            <a href="#" class="btn btn-primary">Leggi</a>
        </div>
    </div>
</template>

<script>
export default {
    props: ["post"]
};
</script>

<style></style>
