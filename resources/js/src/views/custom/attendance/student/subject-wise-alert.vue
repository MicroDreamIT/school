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
                        </div>
                        <vs-divider></vs-divider>
                        <div class="col-md-12 row">
                            <vs-button class="my-round mx-3" color="warning">Reset</vs-button>
                            <vs-button class="my-round">Send Subject Attendance Alert</vs-button>
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
                attendanceStatus:'',
                send_alert:3,
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
