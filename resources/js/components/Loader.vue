<template>
    <div class="loader">
        <div class="spinner-border text-success" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
</template>

<script>
export default {
    name: "Loader"
};
</script>

<style scoped>
.loader {
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background-color: (0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1;
}
</style>
