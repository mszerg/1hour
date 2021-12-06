<template>
<div>
    <div class="mb-3">
        <input type="text" class="form-control" id="name" placeholder="name">
    </div>
    <div class="mb-3">
        <input type="number" class="form-control" id="age" placeholder="age">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="job" placeholder="job">
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Добавить">
    </div>
</div>
</template>

<script>
export default {
    name: "CreateComponent",
    mounted() {
        console.log('Component mounted.')
    }
}
</script>

<style scoped>

</style>
