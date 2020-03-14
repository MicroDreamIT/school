<template>
    <div>
        <div class="row">
            <div class="col-md-12 mb-2">
                <h2 class="pageTitle">Exams Manager</h2>
            </div>
            <div class="col-md-12">
                <div class="row mx-0">
                    <router-link :to="'/exam'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            Exam Type
                        </vs-button>
                    </router-link>
                    <router-link :to="'/exam/schedule'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Schedule
                        </vs-button>
                    </router-link>
                    <router-link :to="'/exam/mark-ledger'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-upload" aria-hidden="true"></i>
                            Manage Mark Ledger
                        </vs-button>
                    </router-link>
                </div>
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
                    <div class="col-md-12">
                        <router-link :to="'/exam/schedule'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-history" aria-hidden="true"></i>
                                Schedule List
                            </vs-button>
                        </router-link>
                        <router-link :to="'/exam/schedule/add'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                Schedule/Modify
                            </vs-button>
                        </router-link>
                    </div>
                    <vs-divider/>
                    <div class="col-md-12 mb-2">

                        <div class="row">
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
                        </div>
                    </div>
                    <div class="col-md-12 ">
                        <div class="table-responsive overflow mt-4 " :style="scheduleList.length>0?'padding-bottom: 250px;':''">
                            <table class="table  table-striped">
                                <thead>
                                <tr>
                                    <th>Sort</th>
                                    <th>Subject</th>
                                    <th>Date</th>
                                    <th>StartTime</th>
                                    <th>EndTime</th>
                                    <th class="w-6">FM (T)</th>
                                    <th class="w-6">PM (T)</th>
                                    <th class="w-6">FM (p)</th>
                                    <th class="w-6">PM (P)</th>
                                    <th>Action</th>
                                </tr>

                                </thead>
                                <draggable v-model="scheduleList" tag="tbody">
                                    <tr :key="i" v-for="(tr, i) in scheduleList" class="own-modify-tr">
                                        <td class="w-12">
                                            <vs-button class="my-round">
                                                <i class="fa fa-arrows"></i>
                                            </vs-button>
                                        </td>
                                        <td>
                                            <vs-input v-model="tr.subject" disabled> </vs-input>
                                        </td>
                                        <td class="w-120">
                                            <datepicker v-model="tr.due_date" placeholder="Date"> </datepicker>
                                        </td>
                                        <td  class="w-120">
                                            <vs-input type="time"/>
                                        </td>
                                        <td  class="w-120">
                                            <vs-input type="time"/>
                                        </td>
                                        <td class="w-90">
                                            <vs-input type="number"/>
                                        </td>
                                        <td class="w-90">
                                            <vs-input type="number"/>
                                        </td>
                                        <td class="w-90">
                                            <vs-input type="number"/>
                                        </td>
                                        <td class="w-90">
                                            <vs-input type="number"/>
                                        </td>
                                        <td class="text-right">
                                            <vs-button @click="deleteRow(i)" color="danger">
                                                <i class="fa fa-trash"></i>
                                            </vs-button>
                                        </td>
                                    </tr>
                                </draggable>
                            </table>
                        </div>
                        <vs-divider></vs-divider>
                        <button class="btn btn-default " type="submit">
                            <i class="fa fa-history"></i>
                            Reset
                        </button>
                        <button class="btn btn-primary " type="submit">
                            <i class="fa fa-save"></i>
                            Save
                        </button>
                        <button class="btn btn-success " type="submit">
                            <i class="fa fa-save"></i>
                            Save & Add Another
                        </button>
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
                searchData: {},
                scheduleList: [{subject: ''}, {subject: ''}]
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
            deleteRow(i) {

            }
        }

    }


</script>

<style scoped>

</style>
