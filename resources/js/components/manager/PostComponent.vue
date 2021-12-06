<template>
<div>
    <CreateComponent></CreateComponent>
</div>
</template>

<script>
import CreateComponent from "./CreateComponent";
export default {
    name: "PostComponent",
    components: {CreateComponent},
    mounted() {
        console.log('Component mounted.')
    },
    methods:{

    }
}
</script>

<style scoped>

</style>
