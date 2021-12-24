<template>
    <div>
        333333333
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ОКПО предприятия</th>
                    <th scope="col">Наименование предприятия</th>
                    <th scope="col">Контрагент</th>
                    <th scope="col">Дата</th>
                    <th scope="col">Сумма</th>
                    <th scope="col">Назначение платежа</th>
                    <th scope="col">ЦФО</th>
                    <th scope="col">БДР_4</th>
                    <th scope="col">Добавить</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"></th>
                <td><input type="text" v-model="OKPO_F" class="form-control" readonly></td>
                <td><input type="text" v-model="NAME_F" class="form-control" readonly></td>
                <td><input type="text" v-model="NAME_KORR" placeholder="Контрагент" class="form-control"></td>
                <td><input type="text" v-model="DATA_DOC" placeholder="Дата" class="form-control"></td>
                <td><input type="number" v-model="SUM_IN" placeholder="Сумма" class="form-control"></td>
                <td><input type="text" v-model="N_P" placeholder="Назначение платежа" class="form-control"></td>
                <td><input type="text" v-model="CFO" placeholder="ЦФО" class="form-control"></td>
                <td><input type="text" v-model="D_R" placeholder="БДР" class="form-control"></td>
                <td><a href="#" @click.prevent="addAccruals" class="btn btn-success">Добавить</a></td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "Create",
    data() {
        return {
            OKPO_F:'43461729',
            NAME_F:'ПП "Українська ПМ"',
            NAME_KORR:'',
            DATA_DOC:null,
            SUM_IN:null,
            N_P:'',
            CFO:null,
            D_R:null,
        }
    },
    methods: {
        addAccruals() {
            axios.post('/api/accruals/store',{OKPO_F: this.OKPO_F, NAME_F: this.NAME_F,NAME_KORR: this.NAME_KORR,DATA_DOC: this.DATA_DOC,SUM_IN: this.SUM_IN,N_P: this.N_P,CFO: this.CFO,D_R: this.D_R})
            .then(res=>{
                console.log(res)
            })
        }
    }
}
</script>

<style scoped>

</style>
