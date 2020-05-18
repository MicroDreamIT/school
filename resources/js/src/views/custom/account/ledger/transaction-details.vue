<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Transaction Ledger Manager
                </h2>
                <bank-navigation></bank-navigation>
            </div>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
                <vs-card>
                    <div class="p-2">
                        <bank-navigation2></bank-navigation2>
                    </div>
                    <vs-divider/>

                    <div class="row">
                        <div class="col-md-4">
                            <label class="col-sm-3">Date</label>
                            <datepicker class="col-sm-9"
                                        :format="'yyyy-MM-dd'"
                                        :value="forms.date"
                                        @input="forms.date = $root.formatPicker($event)"
                                        :danger="error.date!==undefined"
                            >
                            </datepicker>
                            <p v-if="error.date!==undefined" class="text-danger">
                                {{ error.date[0] }}
                            </p>
                        </div>
                        <div class="col-md-4">
                            <label>
                                Ledger/Transaction Head
                            </label>
                            <select v-model="forms.tr_head" class="form-control" :danger="error.tr_head!==undefined">
                                <option :value="l.id" v-for="l in ledgers">{{l.value}}</option>
                            </select>
                            <p v-if="error.tr_head!==undefined" class="text-danger">
                                {{ error.tr_head[0] }}
                            </p>
                        </div>
                        <div class="col-md-4">
                            <label for="">
                                Account Type
                            </label>
                            <select class="form-control" v-model="forms.account_type" autocomplete="off" :danger="error.account_type!==undefined">
                                <option value="dr_amt">Debit (+)</option>
                                <option value="cr_amt">Credit (-)</option>
                            </select>
                            <p v-if="error.account_type!==undefined" class="text-danger">
                                {{ error.account_type[0] }}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Account</label>
                            <vs-input class="w-100" v-model="forms.amount" ref="amount" :danger="error.amount!==undefined"/>
                            <p v-if="error.amount!==undefined" class="text-danger">
                                {{ error.amount[0] }}
                            </p>
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
                                                <label>ledger/transaction head:</label>
                                                <select v-model="searchData.tr_head" class="form-control">
                                                    <option :value="l.id" v-for="l in ledgers">{{l.value}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date Range</label>
                                                <div class="d-flex justify-content-between">
                                                    <datepicker :format="'yyyy-MM-dd'" :value="searchData.tr_start_date" @input="searchData.tr_start_date = $root.formatPicker($event)" class="flex-1"></datepicker>
                                                    <label>To</label>
                                                    <datepicker :format="'yyyy-MM-dd'" :value="searchData.tr_end_date" @input="searchData.tr_end_date = $root.formatPicker($event)" class="flex-1"></datepicker>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2 pl-0">
                                    <vs-button type="filled"
                                               color="#00b8cf"
                                               icon="double_arrow"
                                               @click.prevent="getdata"
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
                                      :searchData="searchData"
                                      ref="transaction"
                                      :ajaxVariableSet="['transaction']"
                                      @get-return-value="GetReturnValue"
                                      :showAction="false"
                                      :showStatus="false"
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
                    // {name: 'status', sort_key: ''},
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
        watch:{
            searchData:{
                deep:true,
                handler(val){
                    console.log(val)
                }
            }
        },
        methods: {
            getdata(){
                this.$refs.transaction.getData()
            },
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
