<template>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Job</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
            <template v-for="manager in managers">
                <show-component :manager="manager"></show-component>
                <edite-component :manager="manager" :ref="`edit_${manager.id}`"></edite-component>
            </template>
            </tbody>
        </table>
    </div>
</template>

<script>
//import CreateComponent from "./CreateComponent";
import EditeComponent from "./EditeComponent";
import ShowComponent from "./ShowComponent";

export default {
    name: "IndexComponent",
    data() {
        return {
            managers: null,
            editManagerId: null,
            name:'',
            age:null,
            job:''
        }
    },
    mounted() {
        this.getManagers()
    },
    methods: {
        getManagers(){
            axios.get('/api/admin/manager')
                .then(res => {
                    this.managers = res.data;
                })
                .catch(error =>{

                })
                .finally({

                })
        },
        updateManager(id){
            this.editManagerId = null
            axios.patch(`/api/admin/manager/${id}`, {name: this.name, age: this.age, job: this.job})
                .then(res => {
                    this.getManagers()
                })
        },
        deleteManager(id){
            axios.delete(`/api/admin/manager/${id}`)
                .then(res => {
                    this.getManagers()
                })
        },
        changeEditManagerId(id,name,age,job) {
            this.editManagerId = id
            let editName = `edit_${id}`
            let fullEditName = this.$refs[editName][0]
            fullEditName.name=name
            fullEditName.age=age
            fullEditName.job=job
        },
        isEdit(id) {
            return this.editManagerId === id
        }
    },
    components: {
        EditeComponent,
        ShowComponent
    }
}
</script>

<style scoped>

</style>
