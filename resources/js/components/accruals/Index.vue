<template>
    <div>
        <div>
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
                </tr>
                </thead>
                <tbody>
                <tr v-for="accrual in accruals.data" @click="selectRow(accrual.id)" :key="accrual.id" :class="{'highlight':(accrual.id === selectedAccrual)}">
                    <th scope="row">{{ accrual.id }}</th>
                    <td>{{ accrual.OKPO_F }}</td>
                    <td>{{ accrual.NAME_F }}</td>
                    <td>{{ accrual.NAME_KORR }}</td>
                    <td>{{ formatDate(accrual.DATA_DOC) }}</td>
                    <td class="text-right">{{ formatMoney(accrual.SUM_IN) }}</td>
                    <td>{{ accrual.N_P }}</td>
                    <td>{{ accrual.CFO }}</td>
                </tr>
                </tbody>
            </table>
            <pagination :data="accruals" @pagination-change-page="getAccruals" show-disabled :limit="2"></pagination>
        </div>
        <div>
            Счета
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ОКПО предприятия</th>
                    <th scope="col">Контрагент</th>
                    <th scope="col">Номер договора</th>
                    <th scope="col">Тип маркетинга</th>
                    <th scope="col">Дата</th>
                    <th scope="col">Сумма</th>
                    <th scope="col">Комментарий</th>
                    <th scope="col">Менеджер</th>
                    <th scope="col">Код платежа</th>
                    <th scope="col">Связать</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(invoice,i) in invoices" @click="selectInvoiceRow(invoice.id)" :key="invoice.id" :class="{'highlight':(invoice.id === selectedInvoice)}">
                    <th scope="row">{{ invoice.id }}</th>
                    <td>{{ invoice.OKPO }}</td>
                    <td>{{ invoice.NamePost }}</td>
                    <td>{{ invoice.NumDogovor }}</td>
                    <td>{{ invoice.TypeMarketing }}</td>
                    <td>{{ invoice.DateInvoice }}</td>
                    <td>{{ invoice.SumItogo }}</td>
                    <td>{{ invoice.Comment }}</td>
                    <td>{{ invoice.NameManager }}</td>
                    <td>{{ invoice.import_bank_id }}</td>
                    <td>
                        <div class="custom-control custom-switch custom-switch-on-success">
                            <input type="checkbox" class="custom-control-input" :id="`customSwitch_${i}`" v-model="invoice.import_bank_id" ref="checked" @change="check(i,invoice.import_bank_id)">
                            <label class="custom-control-label" :for="`customSwitch_${i}`"></label>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    name: "Index",
    data() {
        return {
            accruals:Object(),
            invoices:null,
            selectedAccrual: null,
            selectedInvoice: null,
        }
    },
    mounted() {
        this.getAccruals()
        this.getInvoice()
    },
    /*created() {
        this.getAccruals()
    },*/

    methods:{
        getAccruals(page){
            /*axios.get('/api/accruals')
            .then ( res=>{
                this.accruals=res.data.data
                //console.log(this.accruals);
            })*/
            console.log(typeof page);
            if (typeof page === "undefined") {
                page = 1;
            }
            console.log(page);
            axios.get("/api/accruals?page=" + page)
                .then(response => {
                    this.accruals = response.data;
                    console.log(this.accruals.data);
                });
        },
        getInvoice(){
            axios.get('/api/accruals/invoice')
                .then ( res=>{
                    this.invoices=res.data
                    //console.log(res.data);
                })
        },
        selectRow(accrualid){
            this.selectedAccrual = accrualid;
            //console.log(accrualid)
            //Do other things
        },
        selectInvoiceRow(id){
            this.selectedInvoice = id;
            //console.log(accrualid)
            //Do other things
        },

        check(i,import_bank_id) {
            console.log(import_bank_id);
            if (import_bank_id)
                {

                    //console.log(this.$refs);
                    //console.log(this.selectedAccrual);
                    if (this.selectedAccrual==null)
                        {
                            alert("Не выделено начисление");
                            //this.BoxChecked[i]=false;
                            this.getInvoice()
                        }
                    else
                        {
                            axios.patch(`/api/accruals/invoice/${this.selectedInvoice}`, {import_bank_id: this.selectedAccrual})
                                .then(res => {
                                    //this.invoices=res.data
                                    console.log(res.data);
                                    this.getInvoice()
                                })
                        }
                }

            else
            {
                console.log(this.BoxChecked);
                //this.BoxChecked[i]=true;
                axios.patch(`/api/accruals/invoice/${this.selectedInvoice}`,{import_bank_id: null})
                    .then ( res=>{
                        //this.invoices=res.data
                        //console.log(res.data);
                        this.getInvoice()
                    })
            }
        },
        formatDate(date) {
            //const options = {year:'numeric', month: 'long',day:'numeric'}
            //return new Date(date).toLocaleDateString('ru',options)
            return new Date(date).toLocaleDateString()
        },
        formatMoney(n)
        {
            return parseFloat(n).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1 ");
        }

    }
}
</script>

<style scoped>
.highlight {
    background-color: rgba(247, 255, 0, 0.93);
}
tr:hover{
    cursor: pointer;
}
</style>
