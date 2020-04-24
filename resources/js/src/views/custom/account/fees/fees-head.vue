<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Fees Head Manager
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
                                       importFeesHead=false">Create
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
                                <vs-input class="col-sm-12"></vs-input>
                            </div>
                            <div class="form-group  mt-3 ">
                                <label class="col-sm-3">Amount</label>
                                <vs-input class="col-sm-12"></vs-input>
                            </div>
                            <vs-divider></vs-divider>
                            <vs-button color="warning"
                                       type="filled"
                                       class="my-round">Reset
                            </vs-button>
                            <vs-button color="#00b8cf"
                                       type="filled"
                                       class="my-round">Create
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
                        <data-table-final :headers="headers"
                                          :tableHeader="'Route List'"
                                          :suggestText="'Route Record list on table. Filter room type using the filter.'"
                                          :url="'/json/account/fees/head'"
                                          :model="'route'"
                                          :noDataMessage="'No Route data found. Please Filter room type to show.'"
                                          :hasSearch="true"
                                          :has-multiple="true"
                                          :has-pagination="true"
                                          :filterSection="true"
                                          ref="dataTableRoute"
                                          :ajaxVariableSet="['route']"
                                          @get-return-value="GetReturnValue"
                                          :showAction="false"
                        >
                            <template slot="items" slot-scope="props">
                                <vs-td>
                                    <table>
                                        <tr>
                                            <th>title:</th>
                                            <td>{{props.data.title}}</td>
                                        </tr>
                                        <tr>
                                            <th>rent:</th>
                                            <td>{{props.data.rent}}</td>
                                        </tr>
                                        <tr>
                                            <th>description:</th>
                                            <td>{{props.data.description}}</td>
                                        </tr>
                                    </table>
                                </vs-td>
                                <vs-td>
                                    <table v-for="vehicle in props.data.vehicles">
                                        <tr>
                                            <th>number</th>
                                            <td>{{vehicle.number}}</td>
                                        </tr>
                                        <tr>
                                            <th>model</th>
                                            <td>{{vehicle.model}}</td>
                                        </tr>
                                        <tr>
                                            <th>type:</th>
                                            <td>{{vehicle.type}}'</td>
                                        </tr>
                                        <tr>
                                            <hr v-if="props.data.vehicles.length>0">
                                        </tr>
                                    </table>
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
                tableHeader: [
                    {name: 'Email', field: 'email', sort_key: 'email'},
                    {name: 'Name', field: 'name', sort_key: 'name'},
                    {name: 'Mobile', field: 'mobile'},
                    {name: 'PID'},
                ],
                notification: '',
                createFeesHead: true,
                importFeesHead: false
            }
        },
        methods:{
            GetReturnValue(arg = null) {
                let val = arg.map(st => {
                    return {
                        id: st.id,
                    }
                });
                this.$store.dispatch('updateTableData', val)
            },
        }
    }
</script>

<style scoped>

</style>
