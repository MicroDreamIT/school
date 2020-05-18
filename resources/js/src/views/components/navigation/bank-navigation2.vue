<template>
    <div>
        <router-link :to="'/account/bank'">
            <vs-button type="filled" class="smBtn">
                <i class="fa fa-history" aria-hidden="true"></i>
                Manage Bank
            </vs-button>
        </router-link>
<!--        <router-link :to="'/account/bank/add'">-->
<!--            <vs-button type="filled" class="smBtn">-->
<!--                <i class="fa fa-list" aria-hidden="true"></i>-->
<!--                Add New Bank-->
<!--            </vs-button>-->
<!--        </router-link>-->
        <router-link :to="'/account/bank-transaction'">
            <vs-button type="filled" class="smBtn">
                <i class="fa fa-list" aria-hidden="true"></i>
                Transaction Details
            </vs-button>
        </router-link>
<!--        <router-link :to="'/account/bank-transaction/add'">-->
<!--            <vs-button type="filled" class="smBtn">-->
<!--                <i class="fa fa-compress" aria-hidden="true"></i>-->
<!--                Bank Transaction-->
<!--            </vs-button>-->
<!--        </router-link>-->
    </div>
</template>