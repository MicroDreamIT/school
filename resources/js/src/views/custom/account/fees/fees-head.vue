<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Fees Head Manager
                </h2>
                <div class="p-2">
                    <bank-navigation></bank-navigation>

                </div>
            </div>
            <vs-divider class="mx-3"/>
            <vs-card>
                <div class="p-2">
                    <router-link :to="'/account/fees'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-history" aria-hidden="true"></i>
                            Receive History
                        </vs-button>
                    </router-link>
                    <router-link :to="'/account/fees/master'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            Master Detail
                        </vs-button>
                    </router-link>
                    <router-link :to="'/account/fees/master/add'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Add Fees
                        </vs-button>
                    </router-link>
                    <router-link :to="'/account/fees/quick-receive'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-calculator" aria-hidden="true"></i>
                            Quick Receive
                        </vs-button>
                    </router-link>
                    <router-link :to="'/account/fees/collection'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-calculator" aria-hidden="true"></i>
                            Collect Fees
                        </vs-button>
                    </router-link>
                    <router-link :to="'/account/fees/balance'">
                        <vs-button type="filled" class="smBtn" color="warning">
                            <i class="fa fa-money" aria-hidden="true"></i>
                            Balance Fees
                        </vs-button>
                    </router-link>
                    <router-link :to="'/account/fees/head'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-header" aria-hidden="true"></i>
                            Fees Head
                        </vs-button>
                    </router-link>
                </div>
                <vs-divider/>
                <div class="row mx-0">
                    <div class="col-md-4 mb-2">

                        <h4> Create Fees Head</h4>
                        <vs-button color="#00b8cf"
                                   type="filled"
                                   class="my-round"
                                   @click="createFeesHead=true,
                                       importFeesHead=false,
                                       resetting()">
                            Create
                        </vs-button>
                        <vs-button color="#00b8cf"
                                   type="filled"
                                   class="my-round"
                                   @click="importFeesHead=true,
                                       createFeesHead=false">Import
                        </vs-button>
                        <div v-if="createFeesHead">
                            <div class="form-group mt-3 ">
                                <label class="col-sm-3">Head</label>
                                <vs-input class="col-sm-12" ref="fee_form" v-model="fee_head.fee_head_title" :danger="error.fee_head_title!==undefined"/>
                                <p v-if="error.fee_head_title!==undefined" class="text-danger">
                                    {{ error.fee_head_title[0] }}
                                </p>
                            </div>
                            <div class="form-group  mt-3 ">
                                <label class="col-sm-3">Amount</label>
                                <vs-input class="col-sm-12" v-model="fee_head.fee_head_amount" :danger="error.fee_head_amount!==undefined"/>
                                <p v-if="error.fee_head_amount!==undefined" class="text-danger">
                                    {{ error.fee_head_amount[0] }}
                                </p>
                            </div>
                            <vs-divider></vs-divider>
                            <vs-button color="warning"
                                       type="filled"
                                       @click="resetting()"
                                       class="my-round">Reset
                            </vs-button>
                            <vs-button color="#00b8cf"
                                       type="filled"
                                       @click="posting"
                                       class="my-round">
                                {{buttonText}}
                            </vs-button>
                        </div>
                        <div v-if="importFeesHead">
                            <vs-divider></vs-divider>
                            <h4><i class="fa fa-download">CSV Template</i></h4>
                            <vs-divider></vs-divider>
                            <div class="form-group  mt-3 ">
                                <label class="col-sm-3">File</label>
                                <vs-input type="file" class="col-sm-12"></vs-input>
                            </div>
                            <vs-divider></vs-divider>
                            <vs-button color="#00b8cf"
                                       type="filled"
                                       class="my-round">Import
                            </vs-button>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <data-table-final :headers="tableHeader"
                                          :tableHeader="'fee head List'"
                                          :suggestText="'fee head Record list on table. fee head type using the filter.'"
                                          :url="'/json/account/fees/head'"
                                          :model="'feehead'"
                                          :noDataMessage="'No fee head data found. Please Filter fee head to show.'"
                                          :hasSearch="true"
                                          :has-multiple="true"
                                          :has-pagination="true"
                                          :filterSection="true"
                                          ref="fees_head"
                                          :ajaxVariableSet="['fees_head']"
                                          @get-return-value="GetReturnValue"
                                          :showAction="false"
                        >
                            <template slot="items" slot-scope="props">
                                <vs-td :data="props.data.fee_head_title">
                                    {{props.data.fee_head_title}}
                                </vs-td>
                                <vs-td :data="props.data.fee_head_amount">
                                    {{props.data.fee_head_amount}}
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
</template>

<script>

    export default {


        data() {
            return {
                fee_head:{
                    fee_head_amount:'',
                    fee_head_title:'',
                },
                tableHeader: [
                    {name: 'fee head', field: 'fee_head_title', sort_key: 'fee_head_title'},
                    {name: 'amount', field: 'name', sort_key: 'name'},
                    {name: 'Action', sort_key: ''},
                    {name: 'status', field: 'status'},
                ],
                notification: '',
                createFeesHead: true,
                importFeesHead: false,
                error:[],
                buttonText:'create'
            }
        },
        methods:{
            resetting(){
                this.fee={}
                this.fee_head.fee_head_amount=''
                this.fee_head.fee_head_title=''
                this.buttonText = 'create'
            },
            editItems(id){
                this.$refs['fee_form'].$el.querySelector('input').focus()

                this.$http.get('/json/account/fees/head/' + id + '/edit')
                    .then(res=>{
                        this.fee_head = res.data.row
                        this.buttonText = 'Update'
                    })
                    .catch(err=>{

                    })
            },
            deleteItems(id){
                this.$dialog.confirm('Are you sure? These items will be permanently deleted and cannot be recovered.').then(dialog => {
                    this.$http.get('/json/account/fees/head/' + id + '/delete').then(res => {
                        this.$refs.fees_head.getData()
                        this.$vs.notify({title: res.data[0], text: res.data[1], color: res.data[0], icon: 'verified'})
                    })
                })
            },
            posting(){
                let url =  this.fee_head.id!==undefined && this.fee_head.id
                    ? '/json/account/fees/head/'+ this.fee_head.id +'/update'
                    : '/json/account/fees/head/store'

                this.$http.post(url, this.fee_head)
                    .then(res => {
                        if (res.status === 200) {
                            this.$vs.notify({
                                title: res.data[0],
                                text: res.data[1],
                                color: res.data[0],
                                icon: 'verified_user'
                            })

                            this.$refs.fees_head.getData()
                            this.resetting()
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
                        fee_head_title:st.fee_head_title,
                        fee_head_amount:st.fee_head_amount,
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
