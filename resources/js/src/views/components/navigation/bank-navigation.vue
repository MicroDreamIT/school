<template>
    <div>
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
</template>