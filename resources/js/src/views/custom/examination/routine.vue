<template>
    <div>
        <div class="row">
            <div class="col-md-12 mb-2">
                <h2 class="pageTitle">Exam Routine Manager</h2>
            </div>
            <div class="col-md-12" v-if="notification">
                <div role="alert"
                     class="mt-2 alert alert-success alert-dismissible display-block"
                >
                    <button type="button"
                            data-dismiss="alert"
                            aria-label="Close"
                            class="close"
                            @click="notification=''"
                    >
                        <span aria-hidden="true">×</span>
                    </button>
                    <i class="ace-icon fa fa-hand-o-right"></i>
                    {{notification}}
                </div>
            </div>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
                <vs-card>
                    <div class="col-md-12 mb-2">
                        <h4 class="header large lighter blue">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            Meet Your Target Exam
                        </h4>
                        <div class="row p-2">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Year</label>
                                    <v-select v-model="searchData.status"
                                              :options="[]"
                                              placeholder="Select Year"
                                    >
                                    </v-select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Month</label>
                                    <v-select v-model="searchData.status"
                                              :options="[]"
                                              placeholder="Select Month"
                                    >
                                    </v-select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Exam</label>
                                    <v-select/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label>Faculty/Class</label>
                                    <vs-input v-model="searchData.reg_no" class="w-100">
                                    </vs-input>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sem./Sec.</label>
                                    <v-select :options="designation"
                                              v-model="searchData.designation">

                                    </v-select>
                                </div>
                            </div>
                            <vs-divider></vs-divider>
                            <vs-button class="my-round" color="#00cfe8">
                                <i class="fa fa-print"></i>
                                Print Routine/Schedule
                            </vs-button>

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
                    {name: 'Reg. No.', sort_key: 'reg_no'},
                    {name: 'Student Notes'},
                    {name: 'Status'},
                    {name: 'Action'},
                ],
                notification: '',
                note: {},
                mainItem: [],
                searchData: {}
            }
        },
        methods: {
            viewItems(id) {
                this.$router.push({name: 'studentView', params: {id: id}})
            },
            editItems() {
                alert("hey hasib im edit ")
            },
            deleteItems() {
                alert("hey hasib im delete ")
            },
            changeStatus() {

            },
        }

    }


</script>

<style scoped>

</style>
