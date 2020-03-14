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
                        <div class="col-md-12">
                            <vs-collapse class="custom-collapse">
                                <vs-collapse-item>
                                    <div slot="header">
                                        <vs-button type="filled"
                                                   color="primary"
                                                   icon="double_arrow"
                                                   class="rounded"
                                        >
                                            Filter Subject Attendance
                                        </vs-button>
                                        <br>
                                    </div>
                                    <div class="filterBox">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group ">
                                                        <label>Reg:</label>
                                                        <vs-input v-model="searchData.reg_no" class="w-100">
                                                        </vs-input>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Batch</label>
                                                        <v-select :options="batch"
                                                                  v-model="searchData.batch">

                                                        </v-select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Reg Date From</label>
                                                        <datepicker v-model="searchData.fromRegDate"/>
                                                        <label>To</label>
                                                        <datepicker v-model="searchData.toRegDate"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Academic Status:</label>
                                                        <v-select v-model="searchData.academic_status"
                                                                  :options="academic_status"
                                                                  label="value"
                                                                  value="id"
                                                                  placeholder="Select Academic Status"
                                                        >
                                                        </v-select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Status:</label>
                                                        <v-select v-model="searchData.status"
                                                                  :options="['Active','In-Active']"
                                                                  placeholder="Select Status"
                                                        >
                                                        </v-select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Faculty/Class</label>
                                                        <v-select v-model="searchData.faculties"
                                                                  :options="faculties"
                                                                  placeholder="Select Faculty/Class"
                                                        >
                                                        </v-select>

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Sem./Sec.</label>
                                                        <v-select v-model="searchData.semester"
                                                                  :options="semester"
                                                                  label="value"
                                                                  value="id"
                                                                  placeholder="Select Sem./Sec."
                                                        >
                                                        </v-select>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row  mb-3">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Religion:</label>
                                                        <vs-input v-model="searchData.religion"
                                                                  class="w-100"></vs-input>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Caste:</label>
                                                        <vs-input v-model="searchData.caste" class="w-100"></vs-input>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Nationality:</label>
                                                        <vs-input v-model="searchData.nationality"
                                                                  class="w-100"></vs-input>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Mot.Tongue:</label>
                                                        <vs-input v-model="searchData.mot_tounge"
                                                                  class="w-100"></vs-input>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Year</label>
                                                        <v-select v-model="searchData.mot_tounge"
                                                                  class="w-100">
                                                        </v-select>

                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Month</label>
                                                        <v-select v-model="searchData.mot_tounge"
                                                                  class="w-100">
                                                        </v-select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Subject</label>
                                                        <v-select v-model="searchData.mot_tounge"
                                                                  class="w-100">
                                                        </v-select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Type</label>
                                                        <v-select v-model="searchData.mot_tounge"
                                                                  class="w-100">
                                                        </v-select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-2 pl-0">
                                            <vs-button type="filled"
                                                       color="#00b8cf"
                                                       icon="double_arrow"
                                                       @click.prevent="doFilter"
                                            >
                                                Filter
                                            </vs-button>
                                        </div>
                                    </div>
                                </vs-collapse-item>
                            </vs-collapse>
                        </div>
                        <div class="col-md-12">
                            <h4 class="header large lighter blue">
                                <i class="fa fa-list" aria-hidden="true"></i>&nbsp;Student Attendance List</h4>
                            <div class="clearfix mt-3">
                                <div class="easy-link-menu">
                                    <a class="btn-success btn-sm bulk-action-btn">
                                        <i class="fa fa-check" aria-hidden="true"></i> Active</a>
                                    <a class="btn-warning btn-sm bulk-action-btn">
                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                        In-Active</a>
                                    <a class="btn-danger btn-sm bulk-action-btn">
                                        <i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                                </div>
                            </div>
                            <br>
                            <div class="table-header">
                                Student Attendance Record list on table. Filter Student Attendance using the filter.
                            </div>
                            <div class="dt-buttons btn-group action-group my-3">
                                <button class="btn btn-secondary buttons-copy buttons-html5"

                                        @click.prevent="doCopy"
                                >
                                    <span>Copy</span>
                                </button>
                                <button class="btn btn-secondary buttons-pdf buttons-html5"
                                        @click.prevent="doPdf"
                                >
                                    <span>PDF</span>
                                </button>
                                <button class="btn btn-secondary"
                                        @click.prevent="doJson"
                                >
                                    <span>JSON</span>
                                </button>
                                <button class="btn btn-secondary buttons-print"
                                        @click.prevent="doPrint"
                                >
                                    <span>Print</span>
                                </button>
                            </div>
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
                                    <vs-th>Year</vs-th>
                                    <vs-th>Month</vs-th>
                                    <vs-th>Reg.Num</vs-th>
                                    <vs-th>Student Name</vs-th>
                                    <vs-th v-for="(i,idx) in 32" :key="idx">{{i}}</vs-th>
                                    <vs-th>PRESENT</vs-th>
                                    <vs-th>ABSENT</vs-th>
                                    <vs-th>LATE</vs-th>
                                    <vs-th>LEAVE</vs-th>
                                    <vs-th>HOLIDAY</vs-th>
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
