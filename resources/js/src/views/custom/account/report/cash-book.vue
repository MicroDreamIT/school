<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Cash Book Report Manager </h2>
                <div class="p-2">
                    <router-link :to="'/student'">
                        <vs-button type="filled" class="smBtn"><i class="fa fa-users "> </i> Student Fee</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn"><i class="fa fa-user-secret "> </i> Staff Payroll
                        </vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn"><i class="fa fa-list"> </i> Ledger</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn"><i class="fa fa-list"> </i> Transacrion</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn"><i class="fa fa-bank"> </i> Bank</vs-button>
                    </router-link>
                </div>
                <hr class="own-hr">

            </div>
            <div class="col-md-12">
                <vs-card>
                    <div class="row p-4">
                        <div class="col-md-12">
                            <div class="p-2">
                                <router-link :to="'/student'">
                                    <vs-button type="filled" class="smBtn">
                                        <i class="fa fa-dollar" aria-hidden="true"></i> Cash Book
                                    </vs-button>
                                </router-link>
                                <router-link :to="'/'">
                                    <vs-button type="filled" class="smBtn">
                                        <i class="fa fa-calculator" aria-hidden="true"></i>
                                        Free Collection Head
                                    </vs-button>
                                </router-link>
                                <router-link :to="'/'">
                                    <vs-button type="filled" class="smBtn">
                                        <i class="fa fa-card" aria-hidden="true"></i>
                                        Transaction Detail
                                    </vs-button>
                                </router-link>
                                <router-link :to="'/'">
                                    <vs-button type="filled" class="smBtn">
                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                        Bank Transaction
                                    </vs-button>
                                </router-link>
                            </div>
                            <hr class="own-hr">
                            <br>
                            <h4 class="header large lighter blue">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                Bank Transaction List
                            </h4>
                            <vs-collapse class="custom-collapse">
                                <vs-collapse-item>
                                    <div slot="header">
                                        <vs-button type="filled"
                                                   color="primary"
                                                   icon="double_arrow"
                                                   class="rounded"
                                        >
                                            Filter
                                        </vs-button>
                                    </div>
                                    <div class="filterBox">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <datepicker v-model="searchData.start_date" clear-button/>
                                            </div>
                                            <div class="col-md-4">
                                                <datepicker v-model="searchData.end_date" clear-button/>
                                            </div>
                                            <div class="col-md-4">
                                                <select v-model="searchData.report_type" class="form-control">
                                                    <option :value="null"></option>
                                                    <option value="daily">daily</option>
                                                    <option value="weekly">weekly</option>
                                                    <option value="monthly">monthly</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </vs-collapse-item>
                            </vs-collapse>
                            <table class="table table-striped dataex-html5-selectors">
                                <thead>
                                <tr>
                                    <th class="text-center">Particulars</th>
                                    <th class="text-right">Cr.</th>
                                    <th class="text-right">Dr.</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-right"><strong>Opening Balance </strong></td>
                                    <td class="text-right"><strong>{{ all.total.opening }}</strong> Cr.</td>
                                    <td class="text-right"></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Total Fee Collected</td>
                                    <td class="text-right">{{ all.fee_collection }} Cr.</td>
                                    <td class="text-right"></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Total Salary Pay</td>
                                    <td class="text-right"></td>
                                    <td class="text-right">{{ all.salary_pay }} Dr.</td>
                                </tr>
                                <tr>
                                    <td class="text-left">Bank deposit / withdraw amount</td>
                                    <td class="text-right">{{ all.bank_transaction | findTotal('cr_amt') }} Cr.</td>
                                    <td class="text-right">{{ all.bank_transaction | findTotal('dr_amt') }} Dr.</td>
                                </tr>
                                <tr>
                                    <td class="text-left">Transactions Income and Expenses on different heads</td>

                                    <td class="text-right">{{ all.transaction | findTotal('cr_amount') }} Cr.</td>
                                    <td class="text-right">{{ all.transaction | findTotal('dr_amount') }} Dr.</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Closing Balance Cash on Hand</strong></td>
                                    <td class="text-right"></td>
                                    <td class="text-right"><strong>{{ all.total.coh }}</strong> Dr.</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr style="font-size: 14px; background: orangered;color: white; border:1px black solid; font-weight: bold">
                                    <td class="text-center">Account Tally</td>
                                    <td class="text-right">{{ all.total.cr }} Cr.</td>
                                    <td class="text-right">{{ all.total.dr }} Dr.</td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </vs-card>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        data: () => ({
            all: {
                fee_collection: 0,
                salary_pay: 0,
                total: {
                    opening: null,
                    coh: null,
                    cr: null,
                    dr: null,
                }
            },
            searchData: {},
        }),
        watch:{
            searchData:{
                deep:true,
                handler(val){
                    if(val.start_date !== undefined && val.start_date){
                        val.start_date = this.$root.formatPicker(val.start_date)
                    }
                    if(val.end_date !== undefined && val.end_date){
                        val.end_date = this.$root.formatPicker(val.end_date)
                    }
                    this.getData()
                }
            }
        },
        created() {
            this.getData()
        },
        methods: {
            getData(){
                this.$http.get('/json/account/report/cash-book', {params:this.searchData})
                    .then(res => {
                        this.all = res.data
                    })
                    .catch(err=>{
                        this.$vs.notify({
                            title: err.response.data[0],
                            text: err.response.data[1],
                            color: err.response.data[0],
                            icon: 'verified_user'
                        })
                    })
            },
            totalSum() {

            }
        }
    }
</script>

<style scoped>

</style>

