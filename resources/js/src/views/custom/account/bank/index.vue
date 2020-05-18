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
            <div class="col-md-12">
                <h4>Create New Bank Account</h4>
                <div class="row mt-5 p-3">
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label class="col-sm-3">Bank</label>
                            <vs-input class="col-sm-9" v-model="forms.bank_name" :danger="error.bank_name!==undefined"/>
                            <p v-if="error.bank_name!==undefined" class="text-danger">
                                {{ error.bank_name[0] }}
                            </p>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3">Account Number</label>
                            <vs-input class="col-sm-9" v-model="forms.ac_name" :danger="error.ac_name!==undefined"/>
                            <p v-if="error.ac_name!==undefined" class="text-danger">
                                {{ error.ac_name[0] }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label class="col-sm-3">Account Name </label>
                            <vs-input class="col-sm-9" v-model="forms.ac_number" :danger="error.ac_number!==undefined"/>
                            <p v-if="error.ac_number!==undefined" class="text-danger">
                                {{ error.ac_number[0] }}
                            </p>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3">Branch</label>
                            <vs-input class="col-sm-9" v-model="forms.branch" :danger="error.branch!==undefined"/>
                            <p v-if="error.branch!==undefined" class="text-danger">
                                {{ error.branch[0] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <button class="btn btn-primary " type="submit" @click="posting">
                    <i class="fa fa-save"></i>
                    Save
                </button>
                <br>
                <hr>
            </div>
            <hr>
            <div class="col-md-12">
                <bank-navigation2></bank-navigation2>
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
                                    Filter Bank
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
                                                <label>Account Name:</label>
                                                <vs-input v-model="searchData.account_name" class="w-100">
                                                </vs-input>
                                            </div>
                                        </div>
										<div class="col-md-6">
                                            <div class="form-group ">
                                                <label>Account Number:</label>
                                                <vs-input v-model="searchData.account_No" class="w-100">
                                                </vs-input>
                                            </div>
                                        </div>
										<div class="col-md-6">
                                            <div class="form-group ">
                                                <label>Branch:</label>
                                                <vs-input v-model="searchData.branch" class="w-100">
                                                </vs-input>
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
                    <h4 class="header large lighter blue mt-4">
                        <i class="fa fa-list" aria-hidden="true"></i>&nbsp;
                        Bank List
                    </h4>
                    <br>
                    <div class="table-header">
                        Bank Record list on table. Filter Bank using the filter.
                    </div>

                    <data-table-final :headers="tableHeader"
                                      :tableHeader="'Bank List'"
                                      :suggestText="'Bank list on table. Filter Bank using the filter.'"
                                      :url="'/json/account/bank'"
                                      :model="'bank'"
                                      :noDataMessage="'No Bank data found. Please Filter Bank to show.'"
                                      :hasSearch="true"
                                      :has-multiple="true"
                                      :has-pagination="true"
                                      :filterSection="true"
                                      ref="bank"
                                      :ajaxVariableSet="['bank']"
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
				mainItem:[]

            }
        },
        created(){
            this.$http.get('/json/account/bank/add')
                .then(res=>{
                    console.log(res.data)
                    // this.ledgers = this.$root.objectToArray(res.data.th)
                })
        },
        methods: {
            posting() {
                let url = this.forms.id !== undefined && this.forms.id
                    ? '/json/account/bank/' + this.forms.id + '/update'
                    : '/json/account/bank/store'
                this.$http.post(url, this.forms)
                    .then(res => {
                        if (res.status === 200) {
                            this.$vs.notify({
                                title: res.data[0],
                                text: res.data[1],
                                color: res.data[0],
                                icon: 'verified_user'
                            })
                            this.$refs.bank.getData()
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
