<template>
    <div class="staff-navigation">
        <router-link :to="'/staff'">
            <vs-button type="filled" class="smBtn">
                <i class="fa fa-list" aria-hidden="true"></i>
                Detail
            </vs-button>
        </router-link>
        <router-link :to="'/staff/add'">
            <vs-button type="filled" class="smBtn">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Registration
            </vs-button>
        </router-link>
        <router-link :to="'/staff/import'">
            <vs-button type="filled" class="smBtn">
                <i class="fa fa-upload" aria-hidden="true"></i>
                Bulk Registration
            </vs-button>
        </router-link>

        <router-link :to="'/staff/document'">
            <vs-button type="filled" class="smBtn">
                <i class="fa fa-files-o" aria-hidden="true"></i>
                Documents
            </vs-button>
        </router-link>
        <router-link :to="'/staff/note'">
            <vs-button type="filled" class="smBtn">
                <i class="fa fa-sticky-note" aria-hidden="true"></i>
                Notes
            </vs-button>
        </router-link>
        <router-link :to="'/staff/payroll'">
            <vs-button type="filled" class="smBtn">
                <i class="fa fa-sticky-note" aria-hidden="true"></i>
                Payroll
            </vs-button>
        </router-link>
        <router-link :to="'/library/staff'">
            <vs-button type="filled" class="smBtn">
                <i class="fa fa-calculator" aria-hidden="true"></i>
                Library
            </vs-button>
        </router-link>
        <router-link :to="'/attendance/staff'">
            <vs-button type="filled" class="smBtn">
                <i class="fa fa-calendar" aria-hidden="true"></i>
                Attendance
            </vs-button>
        </router-link>
        <router-link :to="'/staff/designation'">
            <vs-button type="filled" class="smBtn">
                <i class="fa fa-calendar" aria-hidden="true"></i>
                Designation
            </vs-button>
        </router-link>
    </div>
</template>

<script>
    export default {
    };
</script>
