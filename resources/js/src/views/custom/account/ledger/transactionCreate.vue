<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Transaction Ledger Manager
                </h2>
                <div class="p-2">
                    <bank-navigation></bank-navigation>

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
<!--                        <router-link :to="'/account/transaction/add'">-->
<!--                            <vs-button type="filled" class="smBtn">-->
<!--                                <i class="fa fa-list" aria-hidden="true"></i>-->
<!--                                New Transaction-->
<!--                            </vs-button>-->
<!--                        </router-link>-->
                        <router-link :to="'/account/transaction-head'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                Ledger
                            </vs-button>
                        </router-link>
                    </div>
                    <vs-divider/>
                    <div class="row mx-0">
                        <div class="col-md-6 mb-2">

                            <h4>Add</h4>
                            <div class="row mt-3 ">
                                <label class="col-sm-3">Date</label>
                                <datepicker class="col-sm-9">
                                </datepicker>
                            </div>
                            <div class="row mt-3 ">
                                <label class="col-sm-3">Ledger/Transaction Head</label>
                                <v-select class="col-sm-9">
                                </v-select>
                            </div>
                            <div class="row mt-3 ">
                                <label class="col-sm-3">Account Type</label>
                                <v-select class="col-sm-9">
                                </v-select>
                            </div>
                            <div class="row mt-3 ">
                                <label class="col-sm-3">Amount</label>
                                <vs-input class="col-sm-9"
                                          type="number"
                                          placeholder="amount">

                                </vs-input>
                            </div>
                            <div class="row mt-3 ">
                                <label class="col-sm-3">Description</label>
                                <div class="col-sm-9">
                                     <vs-textarea
                                          placeholder="Description">
                                     </vs-textarea>

                                </div>
                            </div>

                            <vs-divider></vs-divider>
                            <div>
                                <vs-button color="warning"
                                           type="filled"
                                           class="my-round">Reset
                                </vs-button>
                                <vs-button color="#00b8cf"
                                           type="filled"
                                           class="my-round">Save
                                </vs-button>
                                <vs-button color="success"
                                           type="filled"
                                           class="my-round">Save And Another
                                </vs-button>
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
        data() {
            return {
                tableHeader: [
                    {name: 'Transaction Ledger', sort_key: ''},
                    {name: 'Group', sort_key: ''},
                    {name: 'Status', sort_key: ''},
                    {name: 'Action', sort_key: ''},
                ],
            }
        },
        created() {
            this.$http.get('/json/account/transaction/add')
                .then(res=>{
                    console.log(res.data)
                })
        }
    }
</script>

<style scoped>

</style>
