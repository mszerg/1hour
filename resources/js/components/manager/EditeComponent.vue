<template>
    <tr :class="this.$parent.isEdit(manager.id) ? '' : 'd-none'">
        <th scope="row">{{ manager.id }}</th>
        <td><input type="text" v-model="name" class="form-control"></td>
        <td><input type="number" v-model="age" class="form-control"></td>
        <td><input type="text" v-model="job" class="form-control"></td>
        <td><a href="#" @click.prevent="updateManager(manager.id)" class="btn btn-success">Update</a></td>
    </tr>
</template>

<script>
export default {
    name: "EditeComponent",
    props: [
        'manager'
    ],

    data() {
        return {
            name:'',
            age:null,
            job:''
        }
    },
    mounted() {

    },
    methods: {

        updateManager(id){
            this.$parent.editManagerId = null
            axios.patch(`/api/admin/manager/${id}`, {name: this.name, age: this.age, job: this.job})
                .then(res => {
                    this.$parent.getManagers()
                })
        },
    },
    components: {}
}
</script>

<style scoped>

</style>
