<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Assignment Manager</h2>
                <div  role="alert" class="mt-2 alert alert-success alert-dismissible display-block">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <i class="ace-icon fa fa-hand-o-right"></i>
                    Please, Create Year and Active
                </div>
            </div>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
                <vs-card>
                    <div class="row mx-0">
                        <div class="col-md-12 pt-2">
                            <router-link :to="'/assignment'">
                                <vs-button type="filled" class="smBtn">Assignment Detail</vs-button>
                            </router-link>
                            <router-link :to="'/assignment/add'">
                                <vs-button type="filled" class="smBtn">New Assignment</vs-button>
                            </router-link>
                        </div>
                        <vs-divider class="mx-3"></vs-divider>
                        <h4>Assignment</h4>
                        <div class="row">
                            <div class="col-md-2">Faculty/Class</div>
                            <div class="col-md-4">
                                <v-select :options="['B.Tech','MBA']"
                                          placeholder="Select Faculty/Class"
                                >
                                </v-select>
                            </div>
                            <div class="col-md-2">Sem./Sec.</div>
                            <div class="col-md-4">
                                <v-select :options="['1st','2nd']"
                                          placeholder="Select Sem./Sec."
                                >
                                </v-select>
                            </div>
                            <div class="col-md-2">Subject</div>
                            <div class="col-md-2">
                                <v-select :options="['A','B']"
                                          placeholder="Select Subject"
                                >
                                </v-select>
                            </div>
                            <div class="col-md-2">Publish Date</div>
                            <div class="col-md-2">
                                <datepicker/>
                            </div>
                            <div class="col-md-2">End Date</div>
                            <div class="col-md-2">
                                 <datepicker/>
                            </div>
                            <div class="col-md-2">
                                 Question Title
                            </div>
                            <div class="col-md-10">
                                 <vs-input/>
                            </div>
                            <div class="col-md-2">
                                 Detail
                            </div>

                            <div class="col-md-10">
                                 <quill-editor v-model="content"></quill-editor>
                            </div>
                            <div class="col-md-2">Attach File</div>
                            <div class="col-md-4">
                                 <vs-input type="file"/>
                            </div>
                        </div>
                        <vs-divider class="mx-3"></vs-divider>
                        <div class="row mx-0">
                            <vs-button class="my-round mx-2" color="warning">Reset</vs-button>
                            <vs-button class="my-round mx-2">Save</vs-button>
                            <vs-button class="my-round mx-2" color="#28c76f">Save And Add Another</vs-button>
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
                searchData: {},
                tableHeader1: [
                    {name: 'Email', field: 'email', sort_key: 'email'},
                    {name: 'Name', field: 'name', sort_key: 'name'},
                    {name: 'Mobile', field: 'mobile'},
                    {name: 'PID'},
                ],
            }
        },

    }


</script>

<style scoped>

</style>
