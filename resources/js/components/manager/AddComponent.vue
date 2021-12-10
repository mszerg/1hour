<template>
    <create-component></create-component>
</template>

<script>
import CreateComponent from "./CreateComponent";
export default {
    name: "AddComponent",
    data() {
        return {

        }
    },
    mounted() {
        //this.getPosts()
    },
    methods: {
        /*getPosts(){
            axios.get('/admin/manager/store')
                .then(function (data){
                    console.log(data);

                })
        }*/
    },
    components: {CreateComponent}
}
</script>

<style scoped>

</style>
