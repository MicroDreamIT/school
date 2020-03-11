<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Subject Attendance
                </h2>
                <div class="mb-2">
                    <router-link :to="'/attendance/student'">
                        <vs-button type="filled" class="smBtn">Student Regular Attendance</vs-button>
                    </router-link>
                    <router-link :to="'/attendance/subject'">
                        <vs-button type="filled" class="smBtn">Student Subject Wise Attendance</vs-button>
                    </router-link>
                    <router-link :to="'/attendance/staff'">
                        <vs-button type="filled" class="smBtn"> Staff Attendance</vs-button>
                    </router-link>
                </div>
                <vs-divider></vs-divider>
            </div>
            <div class="col-md-12">
                <vs-card>
                    <div class="row p-4">
                        <div class="mb-2 col-md-12">
                            <router-link :to="'/attendance/subject'">
                                <vs-button type="filled" class="smBtn">Attendance Detail</vs-button>
                            </router-link>
                            <router-link :to="'/attendance/subject/add'">
                                <vs-button type="filled" class="smBtn">Add / Edit Subject Attendance</vs-button>
                            </router-link>
                            <router-link :to="'/attendance/subject/alert'">
                                <vs-button type="filled" class="smBtn">Subject Attendance Alert</vs-button>
                            </router-link>
                        </div>
                        <vs-divider/>

                        <div class="col-md-12">
                            <h4><i class="fa fa-search"></i>
                                Search Student</h4>
                        </div>
                        <div class="row my-3 col-md-12">
                            <div class="col-md-1">Date</div>
                            <div class="col-md-2">
                                <datepicker/>
                            </div>
                            <div class="col-md-2">Faculty/Class</div>
                            <div class="col-md-4">
                                <v-select/>
                            </div>
                            <div class="col-md-1">Sem./Sec.</div>
                            <div class="col-md-2">
                                <v-select/>
                            </div>
                            <div class="col-md-2">Subject</div>
                            <div class="col-md-4">
                                <v-select/>
                            </div>
                            <div class="col-md-1">Type</div>
                            <div class="col-md-2">
                                <v-select/>
                            </div>
                        </div>
                        <div class="row col-md-12">
                            <div class="col-md-1">Batch</div>
                            <div class="col-md-2">
                                <v-select/>
                            </div>
                            <p>[ Select Only if you want to filter batch-wise ]</p>
                        </div>
                        <div class="col-md-12">
                            <h4><i class="fa fa-list"></i>
                                Student Attendance</h4>
                        </div>
                        <div class="col-md-12">
                            <vs-table
                                    v-model="selected"
                                    pagination
                                    :max-items="10"
                                    :data="mainItem"
                                    :multiple="true"
                                    description
                                    :noDataText="'No Student Attendance data found. Please Filter Student Attendance to show.'"
                                    description-title="Showing"
                            >

                                <template slot="thead">
                                    <vs-th>S.N.</vs-th>
                                    <vs-th>Picture</vs-th>
                                    <vs-th>Reg. Num.</vs-th>
                                    <vs-th>Student Name</vs-th>
                                    <vs-th>
                                        <vs-radio v-model="attendanceStatus"
                                                  vs-value="1"
                                                  class="radio-btn"
                                                  color="#007bff"

                                        >
                                            <p class="bg-primary">Present All</p>
                                        </vs-radio>
                                        <vs-radio v-model="attendanceStatus"
                                                  vs-value="2"
                                                  class="radio-btn "
                                                  color="danger"

                                        >
                                            <p class="bg-danger">Absent All</p>
                                        </vs-radio>
                                        <vs-radio v-model="attendanceStatus"
                                                  vs-value="3"
                                                  class="radio-btn "
                                                  color="warning"

                                        >
                                            <p class="bg-warning">LATE All</p>
                                        </vs-radio>
                                        <vs-radio v-model="attendanceStatus"
                                                  vs-value="4"
                                                  class="radio-btn "
                                                  color="success"
                                        >
                                            <p class="bg-success">LEAVE All</p>
                                        </vs-radio>
                                        <vs-radio v-model="attendanceStatus"
                                                  vs-value="5"
                                                  class="radio-btn "
                                                  color="#17a2b8"
                                        >
                                            <p class="bg-info">Holiday All</p>
                                        </vs-radio>

                                    </vs-th>
                                    <vs-th>ACTION</vs-th>
                                </template>
                                <template slot-scope="{data}">
                                    <vs-tr :data="tr" :key="idx" v-for="(tr, idx) in data">
                                        <vs-td>{{mainItem.indexOf(tr)+1}}</vs-td>
                                        <vs-td></vs-td>
                                        <vs-td></vs-td>
                                        <vs-td></vs-td>
                                        <vs-td></vs-td>
                                        <vs-td></vs-td>
                                        <vs-td></vs-td>
                                    </vs-tr>
                                </template>

                            </vs-table>
                        </div>
                        <vs-divider></vs-divider>
                        <div class="col-md-12 row">
                            <vs-button class="my-round mx-3" color="warning">Reset</vs-button>
                            <vs-button class=" my-round">Save Attendance</vs-button>
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
                mainItem: [],
                selected: [],
                attendanceStatus: '',
                send_alert: 3,
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
