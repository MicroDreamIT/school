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
                    <div class="row mx-0">
                        <div class="col-md-4 mb-2">

                            <h4> Create Ledger</h4>

                            <div class="form-group mt-3 ">
                                <label class="col-sm-3">Title</label>
                                <vs-input class="col-sm-12"
                                          v-model="forms.tr_head"
                                          placeholder="e.g. Room Rent"
                                          ref="tr_head"
                                          :danger="error.tr_head!==undefined"/>
                                <p v-if="error.tr_head!==undefined" class="text-danger">
                                    {{ error.tr_head[0] }}
                                </p>
                            </div>
                            <div class="form-group mt-3 ">
                                <label class="col-sm-3">Group</label>
                                <select name="acc_id"
                                        v-model="forms.acc_id"
                                        id="form-field-select-3"
                                        class="chosen-select form-control"
                                        :danger="error.acc_id!==undefined"
                                        data-placeholder="Choose a Group...">
                                    <option :value="0">Select Ledger Group</option>
                                    <option :value="1">Bank Accounts</option>
                                    <option :value="2">Bank OCC A/c</option>
                                    <option :value="3">Bank OD A/c</option>
                                    <option :value="4">Branch / Divisions</option>
                                    <option :value="5">Cash-in-Hand</option>
                                    <option :value="6">Current Assets</option>
                                    <option :value="7">Current Liabilities</option>
                                    <option :value="8">Direct Expenses</option>
                                    <option :value="9">Direct Incomes</option>
                                    <option :value="10">Duties & Taxes</option>
                                    <option :value="11">Expenses (Direct)</option>
                                    <option :value="12">Expenses (Indirect)</option>
                                    <option :value="13">Fixed Assets</option>
                                    <option :value="14">Income (Direct)</option>
                                    <option :value="15">Income (Indirect)</option>
                                    <option :value="16">Indirect Expenses</option>
                                    <option :value="17">Indirect Incomes</option>
                                    <option :value="18">Investments</option>
                                    <option :value="19">Loans & Advances (Assets)</option>
                                    <option :value="20">Loans (Liability)</option>
                                    <option :value="21">Misc. Expenses (ASSET)</option>
                                    <option :value="22">Provisions</option>
                                    <option :value="23">Purchase Accounts</option>
                                    <option :value="24">Reserves & Surplus</option>
                                    <option :value="25">Retained Earnings</option>
                                    <option :value="26">Secured Loans</option>
                                    <option :value="27">Stock-in-Hand</option>
                                    <option :value="28">Sundry Creditors</option>
                                    <option :value="29">Sundry Debtors</option>
                                    <option :value="30">Suspense A/c</option>
                                    <option :value="31">Unsecured Loans</option>
                                </select>
                                <p v-if="error.acc_id!==undefined" class="text-danger">
                                    {{ error.acc_id[0] }}
                                </p>
                            </div>
                            <vs-divider></vs-divider>
                            <vs-button color="#00b8cf"
                                       type="filled"
                                       @click="posting"
                                       class="my-round">
                                {{buttonText}}
                            </vs-button>
                        </div>
                        <div class="col-md-8">
                            <data-table-final :headers="tableHeader"
                                              :tableHeader="'Transaction Ledger List'"
                                              :suggestText="'Transaction Ledger list on table. Filter Transaction Ledger using the filter.'"
                                              :url="'/json/account/transaction-head'"
                                              :model="'feehead'"
                                              :noDataMessage="'No Transaction Ledger data found. Please Filter Transaction Ledger to show.'"
                                              :hasSearch="true"
                                              :has-multiple="true"
                                              :has-pagination="true"
                                              :filterSection="true"
                                              ref="transaction_head"
                                              :ajaxVariableSet="['tr_head']"
                                              @get-return-value="GetReturnValue"
                                              :showAction="false"
                            >
                                <template slot="items" slot-scope="props">
                                    <vs-td :data="props.data.tr_head">
                                        {{props.data.tr_head}}
                                    </vs-td>
                                    <vs-td :data="props.data.group">
                                        {{props.data.group}}
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
                        </div>
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
                forms: {},
                error:[],
                buttonText: 'create',
                tableHeader: [
                    {name: 'Transaction Ledger', field:'tr_head', sort_key: ''},
                    {name: 'Group', field:'group', sort_key: ''},
                    {name: 'Action', sort_key: ''},
                    {name: 'Status', sort_key: ''},
                ],
            }
        },
        methods: {
            editItems(id){
                this.$refs['tr_head'].$el.querySelector('input').focus()

                this.$http.get('/json/account/transaction-head/' + id + '/edit')
                    .then(res=>{
                        this.forms = res.data.row
                        this.buttonText = 'Update'
                    })
                    .catch(err=>{

                    })
            },
            deleteItems(id){
                this.$dialog.confirm('Are you sure? These items will be permanently deleted and cannot be recovered.').then(dialog => {
                    this.$http.get('/json/account/transaction-head/' + id + '/delete').then(res => {
                        this.$refs.transaction_head.getData()
                        this.$vs.notify({title: res.data[0], text: res.data[1], color: res.data[0], icon: 'verified'})
                    })
                })
            },
            GetReturnValue(arg = null) {
                let val = arg.map(st => {
                    return {
                        id: st.id,
                        tr_head:st.tr_head,
                        group:st.account_category.ac_name,
                        status:st.status
                    }
                });
                this.$store.dispatch('updateTableData', val)
            },
            posting() {
                let url = this.forms.id !== undefined && this.forms.id
                    ? '/json/account/transaction-head/' + this.forms.id + '/update'
                    : '/json/account/transaction-head/store'
                this.$http.post(url, this.forms)
                    .then(res => {
                        if (res.status === 200) {
                            this.$vs.notify({
                                title: res.data[0],
                                text: res.data[1],
                                color: res.data[0],
                                icon: 'verified_user'
                            })
                            this.$refs.transaction_head.getData()
                            this.forms = {}
                        }

                    })
                    .catch(err => {
                        if (err.response) {
                            this.error = err.response.data.errors
                        }
                    })
            }
        }
    }
</script>

<style scoped>

</style>
