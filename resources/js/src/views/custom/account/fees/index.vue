<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Receive Detail
                </h2>
                <div class="p-2">
                    <bank-navigation></bank-navigation>

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
                                        Filter Fees Collection
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
                                        </div>
                                        <div class="row  mb-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Date:</label>
                                                    <div class="d-flex justify-content-between">
                                                        <datepicker v-model="searchData.fromDate"
                                                                    class="flex-1"></datepicker>
                                                        <label>To:</label>
                                                        <datepicker v-model="searchData.toDate"
                                                                    class="flex-1"></datepicker>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Head:</label>
                                                    <v-select/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Method</label>
                                                    <v-select/>
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
                            Fees Receive History
                        </h4>

                        <div class="table-header">
                            Fees Collection Record list on table. Filter Fees Collection using the filter.
                        </div>
                    </div>
                    <data-table-final :headers="tableHeader"
                                      :tableHeader="'Route List'"
                                      :suggestText="'Route Record list on table. Filter room type using the filter.'"
                                      :url="'/json/account/fees'"
                                      :model="'feehead'"
                                      :noDataMessage="'No Route data found. Please Filter room type to show.'"
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
                    {name: 'Reg.Num.', sort_key: 'reg_no'},
                    {name: 'Name', sort_key: ''},
                    {name: 'Sem/Sec', sort_key: ''},
                    {name: 'Head', sort_key: ''},
                    {name: 'Date', sort_key: ''},
                    {name: 'Amount', sort_key: ''},
                    {name: 'Method', sort_key: ''},
                    {name: 'User', sort_key: ''},
                    {name: 'Note', sort_key: ''},
                ],
                searchData: {},
                academic_status: [],
                faculties: [],
                batch: [],
                semester: [],
                item:[],
                mainItem:[]

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
            GetReturnValue(arg = null) {
                let val = arg.map(st => {
                    return {
                        id: st.id
                    }
                });
                this.$store.dispatch('updateTableData', val)
            },

        }

    }


</script>

<style scoped>

</style>
