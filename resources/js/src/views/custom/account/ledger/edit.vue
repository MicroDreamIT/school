<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Transaction Ledger Manager
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
                        <router-link :to="'/account/transaction'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-history" aria-hidden="true"></i>
								Transaction Detail
                            </vs-button>
                        </router-link>
                        <router-link :to="'/account/transaction/add'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                New Transaction
                            </vs-button>
                        </router-link>
                        <router-link :to="'/account/transaction-head'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                Ledger
                            </vs-button>
                        </router-link>
                    </div>
                    <vs-divider/>
                    <div class="row mx-0">
                        <div class="col-md-4 mb-2">

                            <h4>Edit Ledger</h4>

                            <div class="form-group mt-3 ">
                                <label class="col-sm-3">Title</label>
                                <vs-input class="col-sm-12"
								placeholder="e.g. Room Rent">

								</vs-input>
                            </div>
							<div class="form-group mt-3 ">
                                <label class="col-sm-3">Group</label>
                                <v-select class="col-sm-12">

								</v-select>
                            </div>
                            <vs-divider></vs-divider>
                            <vs-button color="#00b8cf"
                                       type="filled"
                                       class="my-round">Update
                            </vs-button>
                        </div>
                        <div class="col-md-8">
                            <ow-data-table :headers="tableHeader"
                                           :tableHeader="'Transaction Ledger List'"
                                           :suggestText="'Transaction Ledger Record list on table. Filter Transaction Ledger using the filter.'"
                                           :url="'/student'"
                                           :noDataMessage="'No Ledger Record found. Please Filter Ledger Record to show.'"
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
    </div>
</template>

<script>

    export default {
        data() {
            return {
                tableHeader: [
                    {name: 'Transaction Ledger', sort_key: ''},
                    {name: 'Group', sort_key: ''},
                    {name: 'Status',sort_key: ''},
                    {name: 'Action',sort_key: ''},
                ],
            }
        }
    }
</script>

<style scoped>

</style>
