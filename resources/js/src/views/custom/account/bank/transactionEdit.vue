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
                    <div class="p-2">
						<h4 >Create New Transaction</h4>
                    <div class="row my-2 ">
						<div class="col-md-4">Date</div>
						<div class="col-md-5">
							<datepicker/>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-md-4">Bank Name</div>
						<div class="col-md-5">
							<v-select/>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-md-4">Account Type</div>
						<div class="col-md-5">
							<v-select/>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-md-4">Withdraw/Deposit ID</div>
						<div class="col-md-5">
							<vs-input class="w-100"></vs-input>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-md-4">Amount</div>
						<div class="col-md-5">
							<vs-input type="number" class="w-100"/>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-md-4">Description</div>
						<div class="col-md-5">
							<vs-textarea></vs-textarea>
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


