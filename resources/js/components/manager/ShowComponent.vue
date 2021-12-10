<template>
    <tr :class="this.$parent.isEdit(manager.id) ? 'd-none' : ''">
        <th scope="row">{{ manager.id }}</th>
        <td>{{ manager.name }}</td>
        <td>{{ manager.age }}</td>
        <td>{{ manager.job }}</td>
        <td><a href="#" @click.prevent="changeEditManagerId(manager.id,manager.name,manager.age,manager.job)"
               class="btn btn-success">Edit</a></td>
        <td><a href="#" @click.prevent="deleteManager(manager.id)" class="btn btn-danger">Delete</a></td>
    </tr>
</template>

<script>
import ShowComponent from "./EditeComponent";

export default {
    name: "IndexComponent",

    props: [
        'manager'
    ],
    data() {
        return {
        }
    },
    mounted() {
    },
    methods: {
        deleteManager(id) {
            axios.delete(`/api/admin/manager/${id}`)
                .then(res => {
                    this.$parent.getManagers()
                })
        },
        changeEditManagerId(id, name, age, job) {
            this.$parent.editManagerId = id
            let editName = `edit_${id}`
            let fullEditName = this.$parent.$refs[editName][0]
            fullEditName.name = name
            fullEditName.age = age
            fullEditName.job = job
        }
    },
    components: {}
}
</script>

<style scoped>

</style>
