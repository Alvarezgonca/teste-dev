<template>
    <header class="bg-dark text-white p-3 mb-4">
        <div class="container d-flex justify-content-between align-items-center">
            <a :href="indexUrl"><img :src="logoUrl" alt="Logo Libre Soluções" height="70" /></a>
            <a :href="createUrl" class="btn btn-success">+ Novo Contato</a>
        </div>
    </header>
</template>

<script>
export default {
    props: {
        createUrl: {
            type: String,
            required: true,
        },
        logoUrl: {
            type: String,
            required: true,
        },
        indexUrl: {
            type: String,
            required: true,
        },
    },
};
</script>

<style scoped>
header {
    border-bottom: 8px solid greenyellow;
}

a:hover {
    cursor: pointer;
}
</style>
