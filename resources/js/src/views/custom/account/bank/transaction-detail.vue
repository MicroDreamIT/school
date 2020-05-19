<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Bank Manager
                </h2>
                <div class="p-2">
                    <bank-navigation></bank-navigation>
                    <div class="p-2">
                        <bank-navigation2></bank-navigation2>
                    </div>
                </div>
            </div>
            <vs-divider class="mx-3"/>
            <div class="p-5">
                <h4 >Create New Transaction</h4>
                <div class="row">
                    <div class="col-md-4">
                        <label>
                            date
                        </label>
                        <datepicker class="w-100"
                                    :format="'yyyy-MM-dd'"
                                    :value="forms.date"
                                    @input="forms.date = $root.formatPicker($event)"
                                    :danger="error.date!==undefined"
                                    ref="bank_input"
                        >
                        </datepicker>
                        <p v-if="error.date!==undefined" class="text-danger">
                            {{ error.date[0] }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <label>Bank Name</label>
                        <select v-model="forms.banks_id" class="form-control" :danger="error.banks_id!==undefined">
                            <option v-for="b in banks" :value="b.id">{{b.value}}</option>
                        </select>
                        <p v-if="error.banks_id!==undefined" class="text-danger">
                            {{ error.banks_id[0] }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <label>Account Type</label>
                        <select class="form-control" v-model="forms.account_type" :danger="error.account_type!==undefined">
                            <option value="dr_amt">debit</option>
                            <option value="cr_amt">credit</option>
                        </select>
                        <p v-if="error.account_type!==undefined" class="text-danger">
                            {{ error.account_type[0] }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <label>
                            Withdraw/Deposit ID
                        </label>
                        <vs-input class="w-100" v-model="forms.deposit_id" :danger="error.deposit_id!==undefined"/>
                        <p v-if="error.deposit_id!==undefined" class="text-danger">
                            {{ error.deposit_id[0] }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <label>Amount</label>
                        <vs-input type="number" class="w-100" v-model="forms.amount" :danger="error.amount!==undefined"/>
                        <p v-if="error.amount!==undefined" class="text-danger">
                            {{ error.amount[0] }}
                        </p>
                    </div>

                    <div class="col-md-4">
                        <label>Description</label>
                        <vs-textarea v-model="forms.description"></vs-textarea>

                    </div>
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

            </div>

            <div class="col-md-12">
                <vs-card>

                    <vs-divider/>

                    <vs-collapse class="custom-collapse">
                        <vs-collapse-item>
                            <div slot="header">
                                <vs-button type="filled"
                                           color="primary"
                                           icon="double_arrow"
                                           class="rounded"
                                >
                                    Filter Bank Transaction
                                </vs-button>
                            </div>
                            <div class="filterBox">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label>Bank:</label>
                                                <select v-model="searchData.banks_id" class="form-control">
                                                    <option v-for="b in banks" :value="b.id">{{b.value}}</option>
                                                </select>
                                            </div>
                                        </div>
										<div class="col-md-6">
                                            <div class="form-group ">
                                                <label>Date Range:</label>
                                               <div class="d-flex justify-content-between">
                                                <datepicker v-model="searchData.tr_start_date" class="flex-1"/>
                                                <label>To</label>
                                                <datepicker v-model="searchData.tr_end_date" class="flex-1"/>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </vs-collapse-item>
                    </vs-collapse>
                    <data-table-final :headers="tableHeader"
                                      :tableHeader="'Bank Transaction List'"
                                      :suggestText="'Bank Transaction list on table. Filter Bank Transaction using the filter.'"
                                      :url="'/json/account/bank-transaction'"
                                      :model="'transaction'"
                                      :noDataMessage="'No Bank Transaction data found. Please Filter Bank Transaction to show.'"
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
                            <vs-td :data="props.data.banks">
                                {{props.data.banks}}
                            </vs-td>
                            <vs-td :data="props.data.description">
                                {{props.data.description}}
                            </vs-td>
                            <vs-td :data="props.data.deposit_id">
                                {{props.data.deposit_id}}
                            </vs-td>
                            <vs-td :data="props.data.dr_amt">
                                {{props.data.dr_amt}}
                            </vs-td>
                            <vs-td :data="props.data.cr_amt">
                                {{props.data.cr_amt}}
                            </vs-td>
                            <vs-td :data="props.data.amount">
                                {{props.data.amount}}
                            </vs-td>
                            <vs-td :data="props.data.action">
                                <div class="action-own">
<!--                                    <a class="btn btn-success btn-sm pointer-all"-->
<!--                                       title="Edit"-->
<!--                                       @click.stop="editItems(props.data.id)">-->
<!--                                        <i class="fa fa-pencil"></i>-->
<!--                                    </a>-->
                                    <a class="btn btn-danger btn-sm pointer-all"
                                       title="Delete"
                                       @click.stop="deleteItems(props.data.id)">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </div>
                            </vs-td>
                        </template>
                    </data-table-final>
                    <div>
                        <p>debit total: {{dr_total}}</p>

                        <p>credit total: {{cr_total}}</p>
                        <p>total:{{total_amount}}</p>
                    </div>
                </vs-card>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        data() {
            return {
                forms:{},
                error:[],
                buttonText:'create',
            	selected:[],
                tableHeader: [
                    {name: 'Date',field:'date', sort_key: ''},
                    {name: 'Bank',field:'banks', sort_key: ''},
                    {name: 'Description',field:'description', sort_key: ''},
                    {name: 'Deposit/withdraw ID',field:'deposit_id', sort_key: 'deposit_id'},
                    {name: 'Debit',field:'dr_amt', sort_key: ''},
                    {name: 'Credit',field:'cr_amt', sort_key: ''},
                    {name: 'Amount',field:'amount', sort_key: ''},
                    {name: 'Action', sort_key: ''},
                ],
                searchData: {},
				mainItem:[],
                banks:[],
                dr_total:0,
                cr_total:0,
                total_amount:0
            }
        },
        watch:{
            searchData:{
                deep:true,
                handler(val){
                    if(val.hasOwnProperty('tr_start_date') && val.tr_start_date){
                        val.tr_start_date = this.$root.formatPicker(val.tr_start_date)
                    }
                    if(val.hasOwnProperty('tr_end_date') && val.tr_end_date){
                        val.tr_end_date = this.$root.formatPicker(val.tr_end_date)
                    }
                    this.$refs.transaction.getData()
                }
            }
        },
        created(){
            this.$http.get('/json/account/bank-transaction/add')
                .then(res=>{
                    this.banks = this.$root.objectToArray(res.data.banks)
                })
        },
        methods: {
            deleteItems(id){
                this.$dialog.confirm('Are you sure? These items will be permanently deleted and cannot be recovered.').then(dialog => {
                    this.$http.get('/json/account/bank-transaction/' + id + '/delete').then(res => {
                        this.$refs.transaction.getData()
                        this.$vs.notify({title: res.data[0], text: res.data[1], color: res.data[0], icon: 'verified'})
                    })
                })
            },
            posting() {
                let url = this.forms.id !== undefined && this.forms.id
                    ? '/json/account/bank-transaction/' + this.forms.id + '/update'
                    : '/json/account/bank-transaction/store'

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
            GetReturnValue(arg, all) {
                this.dr_total = all.dr_total
                this.cr_total = all.cr_total
                this.total_amount=all.total_amount
                let val = arg.map(st => {
                    return {
                        id: st.id,
                        date:st.date,
                        banks:st.banks.bank_name,
                        dr_amt:st.dr_amt,
                        cr_amt:st.cr_amt,
                        amount:st.cr_amt>0?'-'+st.amount:st.amount,
                        description:st.description,
                        deposit_id:st.deposit_id,
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
