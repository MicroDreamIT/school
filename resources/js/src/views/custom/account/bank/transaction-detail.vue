<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Bank Manager
                </h2>
                <div class="p-2">
                    <bank-navigation></bank-navigation>

                </div>
            </div>
            <vs-divider class="mx-3"/>
            <div class="p-2">
                <h4 >Create New Transaction</h4>
                <div class="row my-2 ">
                    <div class="col-md-4">Date</div>
                    <div class="col-md-5">
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
                </div>
                <div class="row my-2">
                    <div class="col-md-4">Bank Name</div>
                    <div class="col-md-5">
                        <select>
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-4">Account Type</div>
                    <div class="col-md-5">
                        <v-select/>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-4">Withdraw/Deposit ID</div>
                    <div class="col-md-5">
                        <vs-input class="w-100"></vs-input>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-4">Amount</div>
                    <div class="col-md-5">
                        <vs-input type="number" class="w-100"/>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-4">Description</div>
                    <div class="col-md-5">
                        <vs-textarea></vs-textarea>
                    </div>
                </div>
                <div class="row my-2">
                    <vs-button color="#00b8cf"
                               type="filled"
                               class="my-round"
                               @click="posting"
                    >
                        {{buttonText}}
                    </vs-button>
                </div>
            </div>
            <div class="col-md-12">
                <vs-card>
                    <div class="p-2">
                        <bank-navigation2></bank-navigation2>
                    </div>
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
                                                <vs-input v-model="searchData.bank" class="w-100">
                                                </vs-input>
                                            </div>
                                        </div>
										<div class="col-md-6">
                                            <div class="form-group ">
                                                <label>Date Range:</label>
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
                forms:{},
                error:[],
                buttonText:'create',
            	selected:[],
                tableHeader: [
                    {name: 'Date', sort_key: ''},
                    {name: 'Ledger/Head', sort_key: ''},
                    {name: 'Dr Amount', sort_key: ''},
                    {name: 'Cr Amount', sort_key: ''},
                    {name: 'Description', sort_key: ''},
                    {name: 'Action', sort_key: ''},
                ],
                searchData: {},
				mainItem:[],
                banks:[]
            }
        },
        created(){
            this.$http.get('/json/account/bank-transaction/add')
                .then(res=>{
                    console.log(res.data)
                })
        },
        methods: {
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
