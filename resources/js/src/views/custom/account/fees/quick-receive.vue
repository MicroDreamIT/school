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

                    <div class="col-md-12 ">
                        <h4 class="header large lighter blue">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            Search & Verify Student Before Collect
                        </h4>
                        <vs-select autocomplete
                                  v-model="selectedStudent"
								   class="w-100"
                        >
							<vs-select-item :key="index"
											:value="item"
											:text="item"
											v-for="(item,index) in students" />

                        </vs-select>
                    </div>
					<vs-divider></vs-divider>
					<vs-button @click="verifyStudent" class="smBtn">
						<i class="fa fa-user"></i>
						Verify Student for Collect Fees
					</vs-button>
					<div class="col-sm-12 mt-2" v-if="selectedStudent">
						<div class="row">
							<div class="col-sm-2">Receive  Date</div>
							<div class="col-sm-2">
								<datepicker v-model="receive_date"></datepicker>
							</div>
							<div class="col-sm-2">Receive  Amount</div>
							<div class="col-sm-2">
								<vs-input type="number"
										  v-model="receive_amount"
										  required>

								</vs-input>
							</div>

							<div class="col-sm-2">Discount Amount</div>
							<div class="col-sm-2">
								<vs-input type="number"
										  v-model="discount"
										  required>

								</vs-input>
							</div>
						</div>
					</div>
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
                selectedStudent: null,
				students:['dsad','sadsad'],
				receive_date:'',
				receive_amount:null,
				discount:0,
				note:''
            }
        },

        created() {

        },

        methods: {
        	verifyStudent(){

			}
		}

    }


</script>

<style scoped>

</style>
