<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Student Report Manager</h2>
                <div class="p-2">
                    <router-link :to="'/report/student'">
                        <vs-button type="filled" class="smBtn">Student</vs-button>
                    </router-link>
                    <router-link :to="'/report/staff'">
                        <vs-button type="filled" class="smBtn">Staff</vs-button>
                    </router-link>
                </div>
            </div>
            <notify-bar/>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
                <vs-card>
                    <div class="row p-2">
                        <div class="col-md-12 mb-2">
                            <vs-collapse class="custom-collapse">
                                <vs-collapse-item>
                                    <div slot="header">
                                        <vs-button type="filled"
                                                   color="primary"
                                                   icon="double_arrow"
                                                   class="rounded"
                                        >
                                            Filter Student Report
                                        </vs-button>
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
                                                        <datepicker
                                                                :value="searchData.reg_start_date"
                                                                :format="'yyyy-MM-dd'"
                                                                @input="searchData.reg_start_date=$root.formatPicker($event)"
                                                        />
                                                        <label>To</label>
                                                        <datepicker
                                                                v-model="searchData.reg_end_date"
                                                                :format="'yyyy-MM-dd'"
                                                                @input="searchData.reg_end_date=$root.formatPicker($event)"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Academic Status:</label>
                                                        <v-select v-model="searchData.academic_status"
                                                                  :options="academic_status"
                                                                  label="value"
                                                                  :reduce="a => a.id"
                                                                  placeholder="Select Academic Status"
                                                        >
                                                        </v-select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Status:</label>
                                                        <v-select v-model="searchData.status"
                                                                  :options="['active','in-active']"
                                                                  placeholder="Select Status"
                                                                  class="status-select"
                                                        >
                                                        </v-select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Faculty/Class</label>
                                                        <v-select v-model="searchData.faculty"
                                                                  :options="faculties"
                                                                  label="value"
                                                                  :reduce="a => a.id"
                                                                  placeholder="Select Faculty/Class"
                                                                  @input="findSemester(searchData.faculty)"
                                                        >
                                                        </v-select>

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Sem./Sec.</label>
                                                        <v-select v-model="searchData.semester_select"
                                                                  :options="semester"
                                                                  label="semester"
                                                                  :reduce="a => a.id"
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
                                                        <vs-input v-model="searchData.mother_tongue"
                                                                  class="w-100"></vs-input>
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
                            <ow-data-table :headers="tableHeader"
                                           :tableHeader="'Student Report List'"
                                           :suggestText="'Student Report Record list on table. Filter Student Report using the filter.'"
                                           :url="'/json/student/'"
                                           :noDataMessage="'No Student Report data found. Please Filter Student Report to show.'"
                                           :hasSearch="true"
                                           :action-btn="false"
                                           :print-section="false"
                                           :has-multiple="false"
                                           :has-pagination="true"
                                           :main-item="mainItem"
                                           :getData="getData"
                            >
                                <template slot="items" slot-scope="props">
                                    <vs-td :data="props.data.faculty" class="pointer-none">
                                        {{props.data.faculty_data.faculty}}
                                    </vs-td>

                                    <vs-td :data="props.data.semester">
                                        {{props.data.semester_data.semester}}
                                    </vs-td>

                                    <vs-td :data="props.data.reg_no">
                                        {{props.data.reg_no}}
                                    </vs-td>
                                    <vs-td :data="props.data.first_name">
                                        <a @click.stop="viewItems(props.data.id)"
                                           class="pointer-all text-primary"
                                           title="View"
                                        >
                                            {{props.data.first_name?props.data.first_name:' '}}
                                            {{props.data.middle_name?(' '+props.data.middle_name):' '}}
                                            {{props.data.last_name?(' '+props.data.last_name):' '}}
                                        </a>

                                    </vs-td>
                                    <vs-td>
                                        {{props.data.reg_date?$root.parseDate(props.data.reg_date):''}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.university_reg}}
                                    </vs-td>

                                    <vs-td>
                                        {{props.data.date_of_birth?$root.parseDate(props.data.date_of_birth):''}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.gender}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.blood_group}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.nationality}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.mother_tongue}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.email}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.address}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.state}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.country}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.temp_address}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.temp_state}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.temp_country}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.home_phone}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.mobile_1 + ' '+props.data.mobile_2}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.academic_status_data.title}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.status}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.grandfather_first_name?props.data.grandfather_first_name:' '}}
                                        {{props.data.grandfather_middle_name?(' '+props.data.grandfather_middle_name):''}}
                                        {{props.data.grandfather_last_name?(' '+props.data.grandfather_last_name):' '}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.father_first_name?props.data.father_first_name:' '}}
                                        {{props.data.father_middle_name?(' '+props.data.father_middle_name):''}}
                                        {{props.data.father_last_name?(' '+props.data.father_last_name):' '}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.father_eligibility}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.father_occupation}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.father_office}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.father_office_number}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.father_residence_number}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.father_mobile_1+' '+props.data.father_mobile_2}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.father_email}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.mother_first_name?props.data.mother_first_name:' '}}
                                        {{props.data.mother_middle_name?(' '+props.data.mother_middle_name):''}}
                                        {{props.data.mother_last_name?(' '+props.data.mother_last_name):' '}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.mother_eligibility}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.mother_occupation}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.mother_office}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.mother_office_number}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.mother_residence_number}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.mother_mobile_1+' '+props.data.mother_mobile_2}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.mother_email}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.guardian_first_name?props.data.guardian_first_name:' '}}
                                        {{props.data.guardian_middle_name?(' '+props.data.guardian_middle_name):''}}
                                        {{props.data.guardian_last_name?(' '+props.data.guardian_last_name):' '}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.guardian_eligibility}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.guardian_occupation}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.guardian_office}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.guardian_office_number}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.guardian_residence_number}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.guardian_mobile_1+' '}}{{props.data.guardian_mobile_2}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.guardian_email}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.guardian_relation}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.guardian_address}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.extra_info}}
                                    </vs-td>


                                </template>


                                <template slot="printSection" slot-scope="printData">
                                </template>
                            </ow-data-table>
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
                tableHeader: [
                    {name: 'Faculty/Class', sort_key: 'faculty'},
                    {name: 'Sem', sort_key: ''},
                    {name: 'Reg. Num', sort_key: 'reg_no'},
                    {name: 'Student Name', sort_key: ''},
                    {name: 'Reg. Date', sort_key: ''},
                    {name: 'University Reg.', sort_key: ''},
                    {name: 'Date Of Birth', sort_key: ''},
                    {name: 'Gender', sort_key: ''},
                    {name: 'Blood Group', sort_key: ''},
                    {name: 'Nationality', sort_key: ''},
                    {name: 'Mother Tongue', sort_key: ''},
                    {name: 'Email', sort_key: ''},
                    {name: 'Address', sort_key: ''},
                    {name: 'State', sort_key: ''},
                    {name: 'Country', sort_key: ''},
                    {name: 'Temp. Address', sort_key: ''},
                    {name: 'Temp. State', sort_key: ''},
                    {name: 'Temp. Country', sort_key: ''},
                    {name: 'Home Phone', sort_key: ''},
                    {name: 'Mobile No', sort_key: ''},
                    {name: 'Academic Status', sort_key: ''},
                    {name: 'Status', sort_key: ''},
                    {name: 'Grand Father Name', sort_key: ''},
                    {name: 'Father Name', sort_key: ''},
                    {name: 'Father Eligibility', sort_key: ''},
                    {name: 'Father Occupation', sort_key: ''},
                    {name: 'Father Office', sort_key: ''},
                    {name: 'Father Office Number', sort_key: ''},
                    {name: 'Father Resident Number', sort_key: ''},
                    {name: 'Father Mobile', sort_key: ''},
                    {name: 'Father Email', sort_key: ''},
                    {name: 'Mother Name', sort_key: ''},
                    {name: 'Mother Eligibility', sort_key: ''},
                    {name: 'Mother Occupation', sort_key: ''},
                    {name: 'Mother Office', sort_key: ''},
                    {name: 'Mother Office Number', sort_key: ''},
                    {name: 'Mother Resident Number', sort_key: ''},
                    {name: 'Mother Mobile', sort_key: ''},
                    {name: 'Mother Email', sort_key: ''},
                    {name: 'Guardian Name', sort_key: ''},
                    {name: 'Guardian Eligibility', sort_key: ''},
                    {name: 'Guardian Occupation', sort_key: ''},
                    {name: 'Guardian Office', sort_key: ''},
                    {name: 'Guardian Office Number', sort_key: ''},
                    {name: 'Guardian Resident Number', sort_key: ''},
                    {name: 'Guardian Mobile', sort_key: ''},
                    {name: 'Guardian Email', sort_key: ''},
                    {name: 'Guardian Relation', sort_key: ''},
                    {name: 'Guardian Address', sort_key: ''},
                    {name: 'Extra info', sort_key: ''},

                ],
                item: [],
                mainItem: [],
                academic_status: [],
                faculties: [],
                batch: [],
                semester: []
            }
        },
        created() {
            this.getData()
        },
        methods: {
            getData() {
                this.$http.get('/json/report/student').then(res => {
                    this.item = res.data.student;
                    this.mainItem = this.item;
                    this.academic_status = this.$root.objectToArray(res.data.academic_status)
                    this.faculties = this.$root.objectToArray(res.data.faculties);
                    this.batch = res.data.batch;
                });
            },
            doFilter() {
                this.$http.get('/json/report/student', {params: this.searchData}).then(res => {
                    this.item = res.data.student;
                    this.mainItem = this.item
                });
            },
            findSemester(faculty) {
                if (faculty) {
                    this.$http.post('/json/student/find-semester', {
                        faculty_id: faculty
                    }).then(res => {
                        this.semester = res.data.semester
                    }).catch(err => {
                        alert(err.response.message)
                    })
                }

            },
        }

    }
</script>
