<template>
    <div>
        <router-link :to="{ name: 'payment.index'}">Payment</router-link>
        <router-link :to="{ name: 'payment.create'}">Add</router-link>
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: "App"
}
</script>

<style scoped>

</style>
