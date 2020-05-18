<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Transaction Ledger Manager
                </h2>
                <div class="p-2">
                    <router-link :to="'/account/fees'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            Student Fee
                        </vs-button>
                    </router-link>
                    <router-link :to="'/account/payroll'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-user-secret" aria-hidden="true"></i>
                            Staff Payroll
                        </vs-button>
                    </router-link>
                    <router-link :to="'/account/transaction-head'">

                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            Ledger
                        </vs-button>
                    </router-link>
                    <router-link :to="'/account/transaction'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            Transactions
                        </vs-button>
                    </router-link>
                    <router-link :to="'/account/bank'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-bank" aria-hidden="true"></i>
                            Bank
                        </vs-button>
                    </router-link>

                </div>
            </div>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
                <vs-card>
                    <div class="p-2">
                        <router-link :to="'/account/transaction'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-history" aria-hidden="true"></i>
                                Transaction Detail
                            </vs-button>
                        </router-link>
                        <router-link :to="'/account/transaction/add'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                New Transaction
                            </vs-button>
                        </router-link>
                        <router-link :to="'/account/transaction-head'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                Ledger
                            </vs-button>
                        </router-link>
                    </div>
                    <vs-divider/>

                    <div class="row">
                        <div class="col-md-4">
                            <label class="col-sm-3">Date</label>
                            <datepicker class="col-sm-9"
                                        :format="'yyyy-MM-dd'"
                                        :value="forms.date"
                                        @input="forms.date = $root.formatPicker($event)"
                            >
                            </datepicker>
                        </div>
                        <div class="col-md-4">
                            <label>
                                Ledger/Transaction Head
                            </label>
                            <select v-model="forms.tr_head" class="form-control">
                                <option :value="l.id" v-for="l in ledgers">{{l.value}}</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">
                                Account Type
                            </label>
                            <select class="form-control" v-model="forms.account_type" autocomplete="off">
                                <option value="dr_amt">Debit (+)</option>
                                <option value="cr_amt">Credit (-)</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Account</label>
                            <vs-input class="w-100" v-model="forms.amount" ref="amount"></vs-input>
                        </div>
                        <div class="col-md-4">
                            <label>description</label>
                            <vs-textarea class="w-`00" v-model="forms.description"></vs-textarea>
                        </div>
                        <div class="col-md-4">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <vs-button color="#00b8cf"
                                       type="filled"
                                       class="my-round"
                                       @click="posting"
                            >
                                {{buttonText}}
                            </vs-button>
                        </div>
                    </div>
                    <hr>
                    <vs-collapse class="custom-collapse">
                        <vs-collapse-item>
                            <div slot="header">
                                <vs-button type="filled"
                                           color="primary"
                                           icon="double_arrow"
                                           class="rounded"
                                >
                                    Filter Transaction
                                </vs-button>
                            </div>
                            <div class="filterBox">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label>Reg:</label>
                                                <vs-input v-model="searchData.ledger" class="w-100">
                                                </vs-input>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date Range</label>
                                                <div class="d-flex justify-content-between">
                                                    <datepicker v-model="searchData.fromDate" class="flex-1"/>
                                                    <label>To</label>
                                                    <datepicker v-model="searchData.toDate" class="flex-1"/>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2 pl-0">
                                    <vs-button type="filled"
                                               color="#00b8cf"
                                               icon="double_arrow"
                                               @click.prevent="doFilter"
                                    >
                                        Filter
                                    </vs-button>
                                </div>
                            </div>
                        </vs-collapse-item>
                    </vs-collapse>
                    <data-table-final :headers="tableHeader"
                                      :tableHeader="'Transaction Ledger List'"
                                      :suggestText="'Transaction Ledger list on table. Filter Transaction Ledger using the filter.'"
                                      :url="'/json/account/transaction'"
                                      :model="'transaction'"
                                      :noDataMessage="'No Transaction Ledger data found. Please Filter Transaction Ledger to show.'"
                                      :hasSearch="true"
                                      :has-multiple="true"
                                      :has-pagination="true"
                                      :filterSection="true"
                                      ref="transaction"
                                      :ajaxVariableSet="['transaction']"
                                      @get-return-value="GetReturnValue"
                                      :showAction="false"
                    >
                        <template slot="items" slot-scope="props">
                            <vs-td :data="props.data.date">
                                {{props.data.date}}
                            </vs-td>
                            <vs-td :data="props.data.head">
                                {{props.data.head}}
                            </vs-td>
                            <vs-td :data="props.data.dr">
                                {{props.data.dr}}
                            </vs-td>
                            <vs-td :data="props.data.cr">
                                {{props.data.cr}}
                            </vs-td>
                            <vs-td :data="props.data.description">
                                {{props.data.description}}
                            </vs-td>
                            <vs-td :data="props.data.action">
                                <div class="action-own">
                                    <a class="btn btn-success btn-sm pointer-all"
                                       title="Edit"
                                       @click.stop="editItems(props.data.id)">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="btn btn-danger btn-sm pointer-all"
                                       title="Delete"
                                       @click.stop="deleteItems(props.data.id)">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </div>
                            </vs-td>
                        </template>
                    </data-table-final>
                </vs-card>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        data() {
            return {
            	selected:[],
                tableHeader: [
                    {name: 'Date', field:'date', sort_key: 'date'},
                    {name: 'Ledger/Head', field:'head', sort_key: 'head'},
                    {name: 'Dr Amount', field:'dr', sort_key: 'dr'},
                    {name: 'Cr Amount', field:'cr', sort_key: 'cr'},
                    {name: 'Description', field:'description', sort_key: 'description'},
                    {name: 'Action', sort_key: ''},
                    {name: 'status', sort_key: ''},
                ],
                searchData: {},
				mainItem:[],
                ledgers:[],
                forms:{},
                error:[],
                buttonText:'create'
            }
        },
        created(){
            this.$http.get('/json/account/transaction/add')
                .then(res=>{
                    this.ledgers = this.$root.objectToArray(res.data.th)
                })
        },
        methods: {
            editItems(id){
                this.$refs['amount'].$el.querySelector('input').focus()

                this.$http.get('/json/account/transaction/' + id + '/edit')
                    .then(res=>{
                        this.forms = res.data.row
                        console.log(res.data.row.dr_amount)
                        this.forms.amount = parseInt(res.data.row.dr_amount)>0?res.data.row.dr_amount:res.data.row.cr_amount
                        this.forms.account_type =res.data.row.dr_amount?'dr_amt':'cr_amt'
                        this.forms.tr_head = res.data.row.tr_head_id
                        this.buttonText = 'Update'
                    })
                    .catch(err=>{

                    })
            },
            deleteItems(id){
                this.$dialog.confirm('Are you sure? These items will be permanently deleted and cannot be recovered.').then(dialog => {
                    this.$http.get('/json/account/transaction/' + id + '/delete').then(res => {
                        this.$refs.transaction.getData()
                        this.$vs.notify({title: res.data[0], text: res.data[1], color: res.data[0], icon: 'verified'})
                    })
                })
            },
            posting() {
                let url = this.forms.id !== undefined && this.forms.id
                    ? '/json/account/transaction/' + this.forms.id + '/update'
                    : '/json/account/transaction/store'

                if(this.forms.id){
                    if(this.forms.account_type==='dr_amt'){
                        this.forms.dr_amount = this.forms.amount
                        this.forms.cr_amount = 0
                    }else{
                        this.forms.cr_amount = this.forms.amount
                        this.forms.dr_amount = 0
                    }
                }

                this.$http.post(url, this.forms)
                    .then(res => {
                        if (res.status === 200) {
                            this.$vs.notify({
                                title: res.data[0],
                                text: res.data[1],
                                color: res.data[0],
                                icon: 'verified_user'
                            })
                            this.$refs.transaction.getData()
                            this.forms = {}
                        }

                    })
                    .catch(err => {
                        if (err.response) {
                            this.error = err.response.data.errors
                        }
                    })
            },
            GetReturnValue(arg = null) {
                let val = arg.map(st => {
                    return {
                        id: st.id,
                        date:st.date,
                        head:st.tr_head.tr_head,
                        dr:st.dr_amount,
                        cr:st.cr_amount,
                        description:st.description,
                        status:st.status
                    }
                });
                this.$store.dispatch('updateTableData', val)
            },
        }
    }
</script>

<style scoped>

</style>
