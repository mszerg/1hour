<template>
    <div class="content-wrapper">
        <router-link :to="{ name: 'accruals.index'}">Payment accruals</router-link>
        <router-link :to="{ name: 'accruals.create'}">Add accruals32</router-link>
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: "AppAccruals"
}
</script>

<style scoped>

</style>
