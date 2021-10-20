<template>
    <header class="text-center mt-2">
        <h1>Benvenuto su {{ title }}</h1>
    </header>
</template>

<script>
export default {
    name: "Header",
    props: ["title"]
};
</script>

<style></style>
