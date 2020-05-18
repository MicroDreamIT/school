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
                        <router-link :to="'/account/payroll'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-history" aria-hidden="true"></i> Pay History
                            </vs-button>
                        </router-link>
                        <router-link :to="'/account/payroll/master'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                Payroll Detail
                            </vs-button>
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
                    <vs-divider/>
                    <div class="row mx-0">
                        <div class="col-md-4 mb-2">

                            <h4> Edit Payroll Head</h4>

                            <div class="form-group mt-3 ">
                                <label class="col-sm-3">Title</label>
                                <vs-input class="col-sm-12"></vs-input>
                            </div>
                            <vs-divider></vs-divider>
                            <vs-button color="#00b8cf"
                                       type="filled"
                                       class="my-round">Update
                            </vs-button>
                        </div>
                        <div class="col-md-8">
                            <ow-data-table :headers="tableHeader"
                                           :tableHeader="'Payroll Head List'"
                                           :suggestText="'Payroll Head Record list on table. Filter Payroll Head using the filter.'"
                                           :url="'/student'"
                                           :noDataMessage="'No Payroll Head data found. Please Filter Payroll Head to show.'"
                                           :hasSearch="true"
                                           :has-multiple="true"
                                           :has-pagination="true"
										   :print-section="false"
                            >
                                <template slot="items" slot-scope="props">
                                    <vs-td :data="props.data.username" class="pointer-none">
                                        {{props.data.email}}
                                    </vs-td>

                                    <vs-td :data="props.data.username">
                                        {{props.data.username}}
                                    </vs-td>

                                    <vs-td :data="props.data.id">
                                        {{props.data.website}}
                                    </vs-td>

                                    <vs-td :data="props.id">
                                        {{props.data.id}}
                                    </vs-td>
                                </template>
                            </ow-data-table>
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
                tableHeader: [
                    {name: 'Email', field: 'email', sort_key: 'email'},
                    {name: 'Name', field: 'name', sort_key: 'name'},
                    {name: 'Mobile', field: 'mobile'},
                    {name: 'PID'},
                ],
            }
        }
    }
</script>

<style scoped>

</style>
