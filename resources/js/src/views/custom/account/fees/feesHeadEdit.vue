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

                        <h4> Update Fees Head</h4>

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
                                       class="my-round">Update
                            </vs-button>
                    </div>
                    <div class="col-md-8">
                        <ow-data-table :headers="tableHeader"
                                       :tableHeader="'Fees Head List'"
                                       :suggestText="'Fees Head Record list on table. Filter Fees Head using the filter.'"
                                       :url="'/student'"
                                       :noDataMessage="'No Fees Head data found. Please Filter Fees Head to show.'"
                                       :hasSearch="true"
                                       :has-multiple="true"
                                       :has-pagination="true"
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
            }
        }
    }
</script>

<style scoped>

</style>
