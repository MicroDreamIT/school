<template>
    <div class="row mx-0">
        <router-link :to="'/student'">
            <vs-button type="filled" class="smBtn">
                <i class="fa fa-list" aria-hidden="true"></i>
                Detail
            </vs-button>
        </router-link>
        <router-link :to="'/student/registration'">
            <vs-button type="filled" class="smBtn">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Registration
            </vs-button>
        </router-link>
        <router-link :to="'/student/import'">
            <vs-button type="filled" class="smBtn">
                <i class="fa fa-upload" aria-hidden="true"></i>
                Bulk Registration
            </vs-button>
        </router-link>
        <router-link :to="'/student/transfer'">
            <vs-button type="filled" class="smBtn">
                <i class="fa fa-exchange" aria-hidden="true"></i>
                Transfer
            </vs-button>
        </router-link>
        <router-link :to="'/student/document'">
            <vs-button type="filled" class="smBtn">
                <i class="fa fa-files-o" aria-hidden="true"></i>
                Documents
            </vs-button>
        </router-link>
        <router-link :to="'/student/note'">
            <vs-button type="filled" class="smBtn">
                <i class="fa fa-sticky-note" aria-hidden="true"></i>
                Notes
            </vs-button>
        </router-link>
        <router-link :to="'/account/fees'">
            <vs-button type="filled" class="smBtn">
                <i class="fa fa-calculator" aria-hidden="true"></i>
                Balance Fees
            </vs-button>
        </router-link>
        <router-link :to="'/library/student'">
            <vs-button type="filled" class="smBtn">
                <i class="fa fa-calculator" aria-hidden="true"></i>
                Library
            </vs-button>
        </router-link>
        <router-link :to="'/attendance/student'">
            <vs-button type="filled" class="smBtn">
                <i class="fa fa-calendar" aria-hidden="true"></i>
                Attendance
            </vs-button>
        </router-link>
    </div>
</template>