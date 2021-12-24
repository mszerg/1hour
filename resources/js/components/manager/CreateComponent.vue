<template>
<div class="w-25">
    <div class="mb-3">
        <input type="text" class="form-control" v-model="name" id="name" placeholder="name">
    </div>
    <div class="mb-3">
        <input type="number" class="form-control" v-model="age" id="age" placeholder="age">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" v-model="job" id="job" placeholder="job">
    </div>
    <div class="mb-3">
        <a href="#" @click.prevent="addPersons" class="btn btn-success">Добавить</a>
    </div>
</div>
</template>

<script>
export default {
    name: "CreateComponent",
    data() {
      return {
          name:null,
          age:null,
          job:null,
      }
    },
    methods: {
      addPersons() {
          //console.log(this.name,this.age,this.job)
          axios.post('/api/admin/manager/store',{name: this.name, age: this.age,job: this.job})
          .then( res =>{
              this.name = null
              this.age = null
              this.job = null
              //console.log(res);
          })
      }
    },
    mounted() {
        //console.log('CreateComponent mounted.')
    }
}
</script>

<style scoped>

</style>
