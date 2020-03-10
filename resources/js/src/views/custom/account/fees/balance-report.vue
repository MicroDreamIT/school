<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Fees Collection Manager
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
                                                    <v-select :options="batch"
                                                              v-model="searchData.batch">

                                                    </v-select>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Academic Status:</label>
                                                    <v-select v-model="searchData.academic_status"
                                                              :options="academic_status"
                                                              label="value"
                                                              value="id"
                                                              placeholder="Select Academic Status"
                                                    >
                                                    </v-select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Faculty/Class</label>
                                                    <v-select v-model="searchData.faculties"
                                                              :options="faculties"
                                                              placeholder="Select Faculty/Class"
                                                    >
                                                    </v-select>

                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Sem./Sec.</label>
                                                    <v-select v-model="searchData.semester"
                                                              :options="semester"
                                                              label="value"
                                                              value="id"
                                                              placeholder="Select Sem./Sec."
                                                    >
                                                    </v-select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Status:</label>
                                                    <v-select v-model="searchData.status"
                                                              :options="['Active','In-Active']"
                                                              placeholder="Select Status"
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
                                                    <label>Due Status:</label>
                                                    <v-select v-model="searchData.due_status"
															  :options="[
															  		{value:'all',text:'Total Balance '},
															  		{value:'overdue',text:'Get Over Due Only'},
															  ]"
															  label="text"
													>

													</v-select>
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
                    <div class="col-md-12 ">
                        <h4 class="header large lighter blue">
                            <i class="fa fa-list" aria-hidden="true"></i>&nbsp;
                             Fees Collection List
                        </h4>
						<div class="my-2">
							<vs-button class="smBtn"> Send Due Reminder SMS/Email Alert</vs-button>
							<vs-button class="smBtn">
								Bulk Due Detail Slip
							</vs-button>
							<vs-button class="smBtn">
								Bulk Short Due Reminder Slip
							</vs-button>
						</div>
                        <div class="table-header">
                            Fees Collection Record list on table. Filter Fees Collection using the filter.
                        </div>
                    </div>
                    <vs-table
                            v-model="selected"
                            pagination
							:multiple="true"
                            :max-items="10"
                            :data="mainItem"
                            description
                            :noDataText="'No Fees Collection data found. Please Filter Fees Collection to show.'"
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
                                <vs-td></vs-td>
                                <vs-td></vs-td>
                            </vs-tr>
                            <vs-tr class="totalSection">
                                <vs-td colspan="10">Total {{getTotal}}</vs-td>
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
        components: {},
        data() {
            return {
                feesHeader: [
                    {name: 'Faculty/Class.', sort_key: 'reg_no'},
                    {name: 'Sem/Sec', sort_key: ''},
                    {name: 'Reg.Num.', sort_key: ''},
                    {name: 'Name of Student', sort_key: ''},
                    {name: 'Total Fee', sort_key: ''},
                    {name: 'Balance', sort_key: ''},
                ],
                searchData: {},
                academic_status: [],
                faculties: [],
                batch: [],
                semester: [],
                item:[],
                mainItem:[],
				selected:[]

            }
        },
        computed: {
            getTotal(){
                return 120
            }

        },
        created() {
            this.getData()
        },

        methods: {
            getData(){

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

            }

        }

    }


</script>

<style scoped>

</style>
