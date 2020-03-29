<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Bank Manager
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
                        <router-link :to="'/account/bank'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-history" aria-hidden="true"></i>
                                Manage Bank
                            </vs-button>
                        </router-link>
                        <router-link :to="'/account/bank/add'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                Add New Bank
                            </vs-button>
                        </router-link>
                        <router-link :to="'/account/bank-transaction'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                Transaction Details
                            </vs-button>
                        </router-link>
                        <router-link :to="'/account/bank-transaction/add'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-compress" aria-hidden="true"></i>
                                Bank Transaction
                            </vs-button>
                        </router-link>
                    </div>
                    <vs-divider/>
					<h4>Create New Bank Account</h4>
                    <div class="row mt-5">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-3">Bank</label>
                                <vs-input class="col-sm-9"></vs-input>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3">Account Number</label>
                                <vs-input class="col-sm-9"></vs-input>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-3">Account Name </label>
                                <vs-input class="col-sm-9"></vs-input>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3">Branch</label>
                                <vs-input class="col-sm-9"></vs-input>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <hr>
                        <button class="btn btn-default " type="submit">
                            <i class="fa fa-history"></i>
                            Reset
                        </button>
                        <button class="btn btn-primary " type="submit">
                            <i class="fa fa-save"></i>
                            Save
                        </button>
                        <button class="btn btn-success " type="submit">
                            <i class="fa fa-save"></i>
                            Save & Add Another
                        </button>
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
                searchData: {},
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


