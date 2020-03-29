<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Fee Head Collection Report Manager </h2>
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
                        </div>
                    </div>
                </vs-card>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        components: {

        },

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

