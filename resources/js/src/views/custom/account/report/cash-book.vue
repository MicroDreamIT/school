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
                        <vs-button type="filled" class="smBtn"><i class="fa fa-user-secret "> </i> Staff Payroll</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn"><i class="fa fa-list"> </i> Ledger</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn"> <i class="fa fa-list">  </i> Transacrion</vs-button>
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
                            <table  class="table table-striped dataex-html5-selectors">
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
                                    <td class="text-right"> </td>
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
        data:()=>({
            all:{
                fee_collection:0,
                salary_pay:0,
                total:{
                    opening:null,
                    coh:null,
                    cr:null,
                    dr:null,
                }
            },
            searchData: {},
        }),
        created(){
            this.$http.get('/json/account/report/cash-book')
                .then(res=>{
                    this.all = res.data
                })
        },
        methods:{
            totalSum(){

            }
        }
    }
</script>

<style scoped>

</style>

