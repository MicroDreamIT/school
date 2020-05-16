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
                        <v-select
                                v-model="selectedStudent"
                                class="w-100"
                                :filterable="false"
                                @search="findStudent"
                                :options="students"
                                :reduce="student => student.id"
                                label="text"
                        >
                        </v-select>
                    </div>
                    <vs-divider></vs-divider>
                    <vs-button @click="verifyStudent" class="smBtn">
                        <i class="fa fa-user"></i>
                        Verify Student for Collect Fees
                    </vs-button>
                    <div class="col-sm-12 mt-2" v-if="htmldata">
                        <div v-html="htmldata"></div>
<!--                        <div id="student_wrapper"></div>-->
                        <vs-divider></vs-divider>
                        <div class="row mx-0 my-2">
                            <div class="col-sm-2">Receive Date</div>
                            <div class="col-sm-2">
                                <datepicker v-model="forms.date"></datepicker>
                            </div>
                            <div class="col-sm-2">Receive Amount</div>
                            <div class="col-sm-2">
                                <vs-input type="number"
                                          v-model="forms.receive_amount"
                                          required>

                                </vs-input>
                            </div>

                            <div class="col-sm-2">Discount Amount</div>
                            <div class="col-sm-2">
                                <vs-input type="number"
                                          v-model="forms.discount_amount"
                                          required>

                                </vs-input>
                            </div>
                        </div>
                        <div class="row mx-0 my-2">
                            <div class="col-sm-2 ">Payment Method</div>
                            <div class="col-sm-10">
                                <vs-radio v-model="forms.payment_mode" vs-value="cash">Cash</vs-radio>
                                <vs-radio v-model="forms.payment_mode" vs-value="bank">Bank</vs-radio>
                            </div>
                        </div>
                        <div class="row mx-0 my-2">
                            <div class="col-sm-2">Note</div>
                            <div class="col-sm-10">
                                <vs-textarea v-model="forms.note"></vs-textarea>
                            </div>
                        </div>
                        <div class="row mx-0 my-2">
                            <div class="col-sm-2">
                                <vs-radio v-model="forms.print_receipt" name="print_receipt" vs-value="none">No Print</vs-radio>
                            </div>
                            <div class="col-sm-3">
                                <vs-radio v-model="forms.print_receipt" name="print_receipt" vs-value="short">Print Short Print</vs-radio>
                            </div>
                            <div class="col-sm-3">
                                <vs-radio v-model="forms.print_receipt" name="print_receipt" vs-value="long">Print Detail Receipt</vs-radio>
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
                selectedStudent: {},
                students: [],
                receive_date: '',
                receive_amount: null,
                discount: 0,
                note: '',
                payment_method: 'cash',
                isPrint: 'no_print',
                htmldata:null,
                forms:{}

            }
        },

        watch: {
            selectedStudent(val) {
                if(val){
                    this.$http.post('/json/account/student-detail-html', {
                        id:parseInt(val)
                    })
                        .then(res=>{
                            this.htmldata = JSON.parse(res.data).html
                        })
                }
            }
        },

        methods: {
            findStudent(search, loading) {
                loading(true)
                this.$http.get('/json/student/student-name-autocomplete', {
                    params: {
                        terms: search,
                        q: search
                    }
                })
                    .then(res => {
                        if(res.data){
                            this.students = res.data
                            loading(false)
                        }
                    })
            },
            verifyStudent() {

            },
            quickCollect() {
                let elm = document.querySelector('#balance_fee')
                this.forms.studentDue = parseInt(elm.innerHTML)
                this.forms.add_collection = 'save'
                this.forms.student_id = this.selectedStudent
                console.log(this.forms)
                this.$http.post('/json/account/fees/quick-receive/store', this.forms)
                    .then(res=>{
                        console.log(res.data)
                    })
            }
        }

    }


</script>

<style scoped>

</style>
