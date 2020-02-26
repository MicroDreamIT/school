<template>
    <div>
        <div class="row">
            <div class="col-md-12 mb-2">
                <h2 class="pageTitle">Import</h2>
            </div>
            <div class="col-md-12">
                <div class="row mx-0">
                    <router-link :to="'/student'">
                        <vs-button type="filled" class="smBtn" icon="list">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            Detail</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Registration</vs-button>
                    </router-link>
                    <router-link :to="'/student/import'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-upload" aria-hidden="true"></i>
                            Bulk Registration</vs-button>
                    </router-link>
                    <router-link :to="'/transfer-student'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-exchange" aria-hidden="true"></i>
                            Transfer</vs-button>
                    </router-link>
                    <router-link :to="'/doc-upload'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-files-o" aria-hidden="true"></i>
                            Documents</vs-button>
                    </router-link>
                    <router-link :to="'/create-notes'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-sticky-note" aria-hidden="true"></i>
                            Notes
                        </vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-calculator" aria-hidden="true"></i>
                            Balance Fees</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-calculator" aria-hidden="true"></i>
                            Library</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            Attendance</vs-button>
                    </router-link>
                </div>
            </div>
        <div class="col-md-12">
            <div class="mt-2 alert alert-success alert-dismissible display-block" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <i class="ace-icon fa fa-hand-o-right"></i>
                Please, Create Year and Active
            </div>
        </div>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
                <vs-row vs-justify="center">
                    <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="17">
                        <vs-card class="p-4">
                                <h4>Import</h4>
                                <hr>
                                <h4 class="text-capitalize">
                                    <i class="fa fa-download"></i> CSV Template for Bulk Student Import
                                </h4>
                                <hr>
                                <vs-input type="file"></vs-input>
                                <hr>
                                <vs-button color="primary" class="rounded" type="filled">Upload</vs-button>
                          
                        </vs-card>
                    </vs-col>
                </vs-row>
            </div>
        </div>
    </div>

</template>

<script>
    import Button from "../../components/vuesax/button/Button";
    export default {
        name: "bulk-import",
        components: {Button}
    }
</script>

<style scoped>

</style>
