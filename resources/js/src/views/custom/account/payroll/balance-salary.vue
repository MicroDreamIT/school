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
						<router-link :to="'/account/payroll'">
							<vs-button type="filled" class="smBtn">
								<i class="fa fa-history" aria-hidden="true"></i> Pay History
							</vs-button>
						</router-link>
						<router-link :to="'/account/payroll/master'">
							<vs-button type="filled" class="smBtn">
								<i class="fa fa-list" aria-hidden="true"></i>
								Payroll Detail</vs-button>
						</router-link>
						<router-link :to="'/account/payroll/master/add'">
							<vs-button type="filled" class="smBtn">
								<i class="fa fa-plus" aria-hidden="true"></i>
								Add Payroll
							</vs-button>
						</router-link>
						<router-link :to="'/account/salary/payment'">
							<vs-button type="filled" class="smBtn">
								<i class="fa fa-calculator" aria-hidden="true"></i>
								Pay Salary
							</vs-button>
						</router-link>
						<router-link :to="'/account/payroll/balance'">
							<vs-button type="filled" class="smBtn" color="warning">
								<i class="fa fa-money" aria-hidden="true"></i>
								Balance Salary
							</vs-button>
						</router-link>
						<router-link :to="'/account/payroll/head'">
							<vs-button type="filled" class="smBtn">
								<i class="fa fa-header" aria-hidden="true"></i>
								Payroll Head
							</vs-button>
						</router-link>
					</div>
					<vs-divider />
                    <div class="col-md-12 mb-2">
                        <vs-collapse class="custom-collapse">
                            <vs-collapse-item>
                                <div slot="header">
                                    <vs-button type="filled"
                                               color="primary"
                                               icon="double_arrow"
                                               class="rounded"
                                    >
                                        Filter Staff Balance Salary
                                    </vs-button>
                                </div>
                                <div class="filterBox">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label>Reg:</label>
                                            <vs-input v-model="searchData.reg_no" class="w-100">
                                            </vs-input>
                                        </div>
                                        <div class="form-group">
                                            <label>Designation</label>
                                            <v-select :options="designation"
                                                      v-model="searchData.designation">

                                            </v-select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Join Date</label>
                                            <div class="d-flex justify-content-between">
                                                <datepicker v-model="searchData.fromDate" class="flex-1"/>
                                                <label>To</label>
                                                <datepicker v-model="searchData.toDate" class="flex-1"/>
                                            </div>

                                        </div>
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
                             Payroll List
                        </h4>
                        <div class="table-header">
                            Payroll Record list on table. Filter Payroll using the filter.
                        </div>
                    </div>
                    <vs-table
                            pagination
                            :max-items="10"
                            :data="mainItem"
                            description
                            :noDataText="'No Payroll data found. Please Filter Payroll to show.'"
                            description-title="Showing"
                    >

                        <template slot="thead">
                            <vs-th>S.N.</vs-th>
                            <vs-th :sort-key="thead.sort_key?thead.sort_key:''" v-for="(thead,indx) in tableHeader"
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

        data() {
            return {
                tableHeader: [
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
