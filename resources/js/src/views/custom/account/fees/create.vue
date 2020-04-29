<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Fees Master Manager
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
                    <div class="col-md-12 mb-2">
                        <vs-collapse class="custom-collapse">
                            <vs-collapse-item>
                                <div slot="header">
                                    <vs-button type="filled"
                                               color="primary"
                                               icon="double_arrow"
                                               class="rounded"
                                    >
                                        Filter Student with Total Balance & Over Due
                                    </vs-button>
                                </div>
                                <div class="filterBox">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group ">
                                                    <label>Reg:</label>
                                                    <vs-input v-model="searchData.reg_no" class="w-100">
                                                    </vs-input>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Reg Date From</label>
                                                    <div class="d-flex justify-content-between">
                                                        <datepicker v-model="searchData.fromRegDate"
                                                                    class="flex-1"></datepicker>
                                                        <label>To:</label>
                                                        <datepicker v-model="searchData.toRegDate" class="flex-1">
                                                        </datepicker>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Batch</label>
                                                    <select v-model="searchData.batch" class="form-control">
                                                        <option :value="batch.id" v-for="batch in batches">{{batch.value}}</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Academic Status:</label>
                                                    <select v-model="searchData.academic_status" class="form-control">
                                                        <option :value="as.id" v-for="as in academic_statuses">{{as.value}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Faculty/Class</label>
                                                    <select v-model="searchData.faculties" class="form-control">
                                                        <option :value="f.id" v-for="f in faculties">{{f.value}}</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Sem./Sec.</label>
                                                    <select v-model="searchData.semester" class="form-control">
                                                        <option :value="s.id" v-for="s in semesters">{{s.value}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Status:</label>
                                                    <v-select v-model="searchData.status"
                                                              :options="['active','in-active']"
                                                              placeholder="Select Status"
                                                              class="status-select"
                                                    >
                                                    </v-select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Religion:</label>
                                                    <vs-input v-model="searchData.religion" class="w-100"></vs-input>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Caste:</label>
                                                    <vs-input v-model="searchData.caste" class="w-100"></vs-input>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Nationality:</label>
                                                    <vs-input v-model="searchData.nationality" class="w-100"></vs-input>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Mot.Tongue:</label>
                                                    <vs-input v-model="searchData.mot_tounge" class="w-100"></vs-input>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Facility:</label>
                                                    <select v-model="searchData.facility" class="form-control">
                                                        <option :value="fa.id" v-for="fa in faculties">{{fa.value}}</option>
                                                    </select>
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
                    </div>
                    <div class="col-md-12">
                        <h4><i class="fa fa-calculator"> Fees Master Add Form</i></h4>
                        <vs-alert
                                color="warning"
                                :active.sync="notification2"
                                closable
                                close-icon="close">
                            Warning! Please be patient when adding fees because it effects on selected students and
                            after that you will change manually.

                        </vs-alert>
                        <div class="table-responsive mt-4 " :style="feeList.length>0?'padding-bottom: 300px;':''">
                            <table class="table  table-striped fees-sort-table">
                                <thead>
                                <tr>
                                    <th >
                                    Sort
                                </th>
                                <th >
                                    Due Date
                                </th>
                                <th >
                                    Fees Head
                                </th>
                                <th >
                                    Amount
                                </th>
                                <th>
                                    <vs-button @click="addRow" class="my-round">
                                        New
                                    </vs-button>
                                </th>
                                </tr>

                                </thead>
                                <draggable v-model="feeList" tag="tbody">
                                    <tr :key="i" v-for="(tr, i) in feeList">
                                        <td class="w-12">
                                            <vs-button class="my-round">
                                                <i class="fa fa-arrows"></i>
                                            </vs-button>
                                        </td>

                                        <td>

                                            <datepicker v-model="tr.due_date">

                                            </datepicker>
                                        </td>
                                        <td>
                                            <select v-model="tr.fee_head" class="form-control">
                                                <option :value="fee.id" v-for="fee in feeheads">{{fee.value}}</option>
                                            </select>
                                        </td>
                                        <td>

                                            <vs-input v-model="tr.amount" type="number">
                                            </vs-input>

                                        </td>

                                        <td class="w-12">
                                            <vs-button class="rounded"
                                                       color="danger"
                                                       @click="removeList(i)">
                                                <i class="fa fa-trash"></i>
                                            </vs-button>
                                        </td>


                                    </tr>
                                </draggable>
                            </table>
                        </div>
                        <vs-divider></vs-divider>
                        <div>
                            <vs-button class="my-round mx-2" color="warning">Reset</vs-button>
                            <vs-button class="my-round mx-2">Add Fee</vs-button>
                        </div>

                    </div>
                    <div class="col-md-12 mt-4">
                        <h4 class="header large lighter blue">
                            <i class="fa fa-list" aria-hidden="true"></i>&nbsp;
                            Student List
                        </h4>
                        <div class="table-header">
                            Fees Master Record list on table. Filter Fees Master using the filter.
                        </div>
                    </div>
                    <vs-table
                            v-model="selected"
                            pagination
                            :multiple="true"
                            :max-items="10"
                            :data="mainItem"
                            description
                            :noDataText="'No Student data found. Please Filter Student to show.'"
                            description-title="Showing"
                    >

                        <template slot="thead">
                            <vs-th>S.N.</vs-th>
                            <vs-th :sort-key="thead.sort_key?thead.sort_key:''" v-for="(thead,indx) in feesHeader"
                                   :key="indx">
                                {{thead.name}}
                            </vs-th>
                        </template>
                        <template slot-scope="{data}">
                            <vs-tr :data="tr" :key="idx" v-for="(tr, idx) in data">
                                <vs-td>{{mainItem.indexOf(tr)+1}}</vs-td>
                                <vs-td></vs-td>
                                <vs-td></vs-td>
                                <vs-td></vs-td>
                            </vs-tr>
                        </template>

                    </vs-table>
                </vs-card>
            </div>
        </div>

    </div>
</template>

<script>
    export default {

        data() {
            return {
                feesHeader: [
                    {name: 'Faculty/Class.', sort_key: 'reg_no'},
                    {name: 'Sem/Sec', sort_key: ''},
                    {name: 'Reg.Num.', sort_key: ''},
                    {name: 'Name of Student', sort_key: ''},
                ],
                searchData: {},
                academic_statuses: [],
                faculties: [],
                facilities:[],
                batches: [],
                semesters: [],
                item: [],
                mainItem: [],
                selected: [],
                notification2: true,
                feeList: [],
                feeheads:[],
                dragging: false

            }
        },
        computed: {
            getTotal() {
                return 120
            }

        },
        created() {
            this.onLoading()
        },

        methods: {
            onLoading() {
                this.$http.get('/json/account/fees/master/add')
                    .then(res=>{
                        this.feeheads = this.$root.objectToArray(res.data.fee_heads)
                        this.faculties = this.$root.objectToArray(res.data.faculties)
                        this.facilities = this.$root.objectToArray(res.data.facility)
                        this.batches = this.$root.objectToArray(res.data.batch)
                        this.academic_statuses = this.$root.objectToArray(res.data.academic_status)
                        this.semesters = this.$root.objectToArray(res.data.semester)
                    })
            },
            viewItems() {
                alert("hey hasib im view ")
            },
            editItems() {
                alert("hey hasib im edit ")
            },
            deleteItems() {
                alert("hey hasib im delete ")
            },
            doFilter() {

            },
            addRow() {
                this.feeList.push({
                    due_date: '',
                    fee_head: null,
                    amount: null,
                })
            },
            removeList(idx) {
                this.feeList.splice(idx, 1)
            },

        }

    }


</script>

<style scoped>

</style>
