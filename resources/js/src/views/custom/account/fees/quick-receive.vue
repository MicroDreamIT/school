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
                                            v-for="(item,index) in students"/>

                        </vs-select>
                    </div>
                    <vs-divider></vs-divider>
                    <vs-button @click="verifyStudent" class="smBtn">
                        <i class="fa fa-user"></i>
                        Verify Student for Collect Fees
                    </vs-button>
                    <div class="col-sm-12 mt-2" v-if="selectedStudent">
                        <div class="row w-100">
                            <div class="col-md-3">
                                <div class="d-flex justify-content-center align-items-center w-100 ">
                                    <img :src="selectedStudent.profile_picture"
                                         v-if="selectedStudent.profile_picture"
                                         class="img-thumbnail mt-3 ">
                                    <img src="../../../../../../assets/images/profile-default.jpg"
                                         v-else
                                         class="img-thumbnail mt-3 ">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="data-table">
                                    <div class="rows">
                                        <div class="header">Name</div>
                                        <div class="content">
                                            <router-link :to="{name:'studentView',params:{id:selectedStudent.id}}">
                                                {{selectedStudent.name}}sdfds
                                            </router-link>
                                        </div>
                                        <div class="header">Reg. No.:</div>
                                        <div class="content">
                                            <router-link :to="{name:'studentView',params:{id:selectedStudent.id}}">
                                                {{selectedStudent.reg_no}}sfddsfds
                                            </router-link>
                                        </div>
                                    </div>
                                    <div class="rows">
                                        <div class="header">Univ.Reg.:</div>
                                        <div class="content">{{selectedStudent.university_reg_no}}</div>
                                        <div class="header">DOB:</div>
                                        <div class="content">{{selectedStudent.date_of_birth}}</div>
                                    </div>
                                    <div class="rows">
                                        <div class="header">Faculty/Class:</div>
                                        <div class="content">123</div>
                                        <div class="header">Sem./Sec.:</div>
                                        <div class="content"> 06/01/2020</div>
                                    </div>
                                    <div class="rows">
                                        <div class="header">Gender :</div>
                                        <div class="content">1235</div>
                                        <div class="header">Blood Group :</div>
                                        <div class="content"> 06/01/2020</div>
                                    </div>
                                    <div class="rows">
                                        <div class="header">Nationality :</div>
                                        <div class="content">male</div>
                                        <div class="header">E-mail :</div>
                                        <div class="content"> a+</div>
                                    </div>
                                    <div class="rows2">
                                        <div class="header">Balance Fee :</div>
                                        <div class="content">islam</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <vs-divider></vs-divider>
                        <div class="row mx-0 my-2">
                            <div class="col-sm-2">Receive Date</div>
                            <div class="col-sm-2">
                                <datepicker v-model="receive_date"></datepicker>
                            </div>
                            <div class="col-sm-2">Receive Amount</div>
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
                        <div class="row mx-0 my-2">
                            <div class="col-sm-2 ">Payment Method</div>
                            <div class="col-sm-10">
                                <vs-radio v-model="payment_method" vs-value="cash">Cash</vs-radio>
                                <vs-radio v-model="payment_method"  vs-value="bank">Bank</vs-radio>
                            </div>
                        </div>
                        <div class="row mx-0 my-2">
                            <div class="col-sm-2">Note</div>
                            <div class="col-sm-10">
                                <vs-textarea v-model="note"></vs-textarea>
                            </div>
                        </div>
                        <div class="row mx-0 my-2">
                            <div class="col-sm-2">
                                <vs-radio v-model="isPrint" vs-value="no_print">No Print</vs-radio>
                            </div>
                            <div class="col-sm-3">
                                <vs-radio v-model="isPrint" vs-value="short_print">Print Short Print</vs-radio>
                            </div>
                            <div class="col-sm-3">
                                <vs-radio v-model="isPrint" vs-value="long_print">Print Detail Receipt</vs-radio>
                            </div>
                        </div>
                        <vs-divider></vs-divider>
                        <vs-button class="w-100 my-round" @click="quickCollect">Quick Collect</vs-button>
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
                selectedStudent: null,
                students: ['dsad', 'sadsad'],
                receive_date: '',
                receive_amount: null,
                discount: 0,
                note: '',
                payment_method:'cash',
                isPrint:'no_print'
            }
        },

        created() {

        },

        methods: {
            verifyStudent() {

            },
            quickCollect(){

            }
        }

    }


</script>

<style scoped>

</style>
