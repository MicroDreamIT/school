<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Receive Detail
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

                    <student-table :headers="studentHeader"
                                   :tableHeader="'Student List'"
                                   :suggestText="'Student Record list on table. Filter Students using the filter.'"
                                   :url="'/json/student/'"
                                   :noDataMessage="'No Student data found. Please Filter Student to show.'"
                                   :hasSearch="true"
                                   :has-multiple="true"
                                   :has-pagination="true"
                                   :filterSection="true"
                                   ref="studentTable"
                    >
                        <template slot="items" slot-scope="props">
                            <vs-td :data="props.data.faculty" class="pointer-none">
                                {{props.data.faculty}}
                            </vs-td>

                            <vs-td :data="props.data.semester">
                                {{props.data.semester}}
                            </vs-td>

                            <vs-td :data="props.data.reg_no">
                                {{props.data.reg_no}}
                            </vs-td>

                            <vs-td :data="props.data.first_name">
                                <a @click.stop="viewItems(props.data.id)"
                                   class="pointer-all text-primary"
                                   title="View"
                                >
                                    {{props.data.first_name+' '+props.data.middle_name+' '+props.data.last_name}}
                                </a>

                            </vs-td>
							<vs-td></vs-td>
                            <vs-td>
                                <div class="d-flex">
                                    {{props.data.academic_status}}
                                    <vs-switch color="success"
                                               :checked="props.data.status=='active'?true:false"
                                               @click.stop="changeStatus(props.data.id)"
                                               class="pointer-all ml-2"
                                    >
                                        <span slot="on">Active</span>
                                        <span slot="off">In-Active</span>
                                    </vs-switch>
                                </div>

                            </vs-td>
                            <vs-td>
                                <div class="action-own">
                                    <a class="btn btn-primary btn-sm pointer-all"
                                       title="View"
                                       @click.stop="viewItems(props.data.id)"

                                    >
                                        <i class="fa fa-calculator"></i>
                                    </a>
                                </div>
                            </vs-td>

                        </template>
                    </student-table>
                </vs-card>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                studentHeader: [
                    {name: 'Faculty/Class', sort_key: 'faculty'},
                    {name: 'Sem./Sec.', sort_key: ''},
                    {name: 'Reg.No.', sort_key: 'reg_no'},
                    {name: 'Name', sort_key: ''},
                    {name: 'Contact. No.', sort_key: ''},
                    {name: 'Status', sort_key: ''},
                    {name: 'Action', sort_key: ''},
                ],
                notification: '',

            }
        },

        created() {

        },

        methods: {
            viewItems(id) {
                this.$router.push({name: 'feesView', params: {id: id}})
            },
            editItems() {
                alert("hey hasib im edit ")
            },
            deleteItems() {
                alert("hey hasib im delete ")
            },
            changeStatus() {
                // this.$http.get()
                this.$refs.studentTable.getData()
            },
        }

    }


</script>

<style scoped>

</style>
