<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">User Notice Manager</h2>
                <div>
                    <router-link :to="'/info/notice'">
                        <vs-button type="filled" class="smBtn">Notice</vs-button>
                    </router-link>
                    <router-link :to="'/info/sms-email'">
                        <vs-button type="filled" class="smBtn">Sms/Email</vs-button>
                    </router-link>
                </div>
            </div>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
                <vs-card>
                    <div class="row mx-0">
                        <div class="col-md-12">
                            <br>
                            <h4 class="header large lighter blue">
                                Create Notice
                            </h4><br>
                        </div>
                        <div class="col-md-12">
                            <router-link :to="'/info/notice'">
                                <vs-button type="filled" class="smBtn">Notice</vs-button>
                            </router-link>
                            <router-link :to="'/info/notice/add'">
                                <vs-button type="filled" class="smBtn">Create Notice</vs-button>
                            </router-link>
                        </div>
                        <vs-divider class="mx-3"></vs-divider>
                        <div class="col-md-12 row">
                            <div class="col-md-8">
                                <p>Title</p>
                                <vs-input></vs-input>
                                <p>Message</p>
                               <quill-editor v-model="content"></quill-editor>
                            </div>
                            <div class="col-md-4">
                                <p>Publish Date</p>
                                <datepicker></datepicker>
                                <p>End Date</p>
                                <datepicker></datepicker>
                                <p>Message Display Groups</p>
                                <vs-checkbox v-model="display_group" class="my-2">Administrator</vs-checkbox>
                                <vs-checkbox v-model="display_group" class="my-2">Accountant</vs-checkbox>
                                <vs-checkbox v-model="display_group" class="my-2"> Librarian</vs-checkbox>
                                <vs-checkbox v-model="display_group" class="my-2">Staff</vs-checkbox>
                                <vs-checkbox v-model="display_group" class="my-2">Student</vs-checkbox>
                                <vs-checkbox v-model="display_group" class="my-2">Guardian</vs-checkbox>
                                <vs-checkbox v-model="display_group" class="my-2">Teacher</vs-checkbox>
                            </div>
                        </div>
                        <vs-divider></vs-divider>
                        <div class="row mx-0">
                            <vs-button class="my-round mx-2" color="warning">Reset</vs-button>
                            <vs-button class="my-round mx-2">Create</vs-button>
                            <vs-button class="my-round mx-2" color="#28c76f">Create And Add Another</vs-button>
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
                display_group:null
            }
        },

    }


</script>

<style scoped>

</style>
