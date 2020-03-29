<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Assignment Manager</h2>
                <div class="p-2">
                    <router-link :to="'/assignment'">
                        <vs-button type="filled" class="smBtn">Assignment Detail</vs-button>
                    </router-link>
                    <router-link :to="'/assignment/add'">
                        <vs-button type="filled" class="smBtn">New Assignment</vs-button>
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
                                            Filter Assignment
                                        </vs-button>
                                    </div>
                                    <div class="filterBox">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group ">
                                                        <label>Year:</label>
                                                        <v-select :options="years"
                                                                  label="value"
                                                                  v-model="searchData.year"
                                                                  :reduce="a => a.id"
                                                        >
                                                        </v-select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
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
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Sem./Sec.</label>
                                                        <v-select v-model="searchData.semester_id"
                                                                  :options="semester"
                                                                  label="semester"
                                                                  :reduce="a => a.id"
                                                                  placeholder="Select Sem./Sec."
                                                                  @input="findSubject(searchData.semester_id)"
                                                        >
                                                        </v-select>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Subject</label>
                                                        <v-select v-model="searchData.subjects_id"
                                                                  :options="subjects"
                                                                  label="value"
                                                                  :reduce="a => a.id"
                                                                  placeholder="Select Subject"
                                                        >
                                                        </v-select>
                                                    </div>

                                                </div>

                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Join Date</label>
                                                        <div class="d-flex justify-content-between">
                                                            <datepicker
                                                                    v-model="searchData.publish_date_start"
                                                                    :format="'yyyy-MM-dd'"
                                                                    @input="searchData.publish_date_start=$root.formatPicker($event)"
                                                                    class="flex-1"/>
                                                            <label>To</label>
                                                            <datepicker
                                                                    v-model="searchData.publish_date_end"
                                                                    :format="'yyyy-MM-dd'"
                                                                    @input="searchData.publish_date_end=$root.formatPicker($event)"
                                                                    class="flex-1"/>
                                                        </div>

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
                                           :tableHeader="'Assignment List'"
                                           :suggestText="'Assignment Record list on table. Filter Assignment using the filter.\n'"
                                           :url="'/json/student/'"
                                           :noDataMessage="'No Assignment data found. Please Filter Assignment to show.'"
                                           :hasSearch="true"
                                           :has-multiple="true"
                                           :has-pagination="true"
                                           :main-item="mainItem"
                                           :getData="getData"
                            >
                                <template slot="items" slot-scope="props">

                                    <vs-td :data="props.data.semester.semester">
                                        {{props.data.semester.semester}}
                                    </vs-td>
                                    <vs-td >
                                        {{props.data.subject_data.title}}
                                    </vs-td>
                                    <vs-td :data="props.data.title">
                                        {{props.data.title}}
                                    </vs-td>
                                    <vs-td >
                                        {{$root.parseDate(props.data.publish_date)+' to '}}{{$root.parseDate(props.data.end_date)}}
                                    </vs-td>
                                    <vs-td >
                                        <vs-button class="smBtn pointer-all">Submit</vs-button>
                                    </vs-td>
                                    <vs-td>
                                        <div class="d-flex flex-wrap">
                                            {{props.data.academic_status}}
                                            <vs-switch color="success"
                                                       :checked="props.data.status=='active'?true:false"
                                                       @click.stop="changeStatus(props.data.id,props.data.status)"
                                                       class="pointer-all ml-2"
                                            >
                                                <span slot="on">Active</span>
                                                <span slot="off">In-Active</span>
                                            </vs-switch>
                                        </div>

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
                    {name: 'SEM/SEC', sort_key: 'semester'},
                    {name: 'Subject', sort_key: ''},
                    {name: 'Question', sort_key: 'title'},
                    {name: 'Available On', sort_key: ''},
                    {name: 'Submit', sort_key: ''},
                    {name: 'Status', sort_key: ''},

                ],
                item: [],
                mainItem: [],
                academic_status: [],
                faculties: [],
                batch: [],
                semester: [],
                subjects: [],
                years:[]
            }
        },
        created() {
            this.getData()
        },
        methods: {
            getData() {
                this.$http.get('/json/assignment').then(res => {
                    this.item = res.data.assignment;
                    this.mainItem = this.item;
                    this.faculties = this.$root.objectToArray(res.data.faculties);
                    this.years = res.data.years;
                });
            },
            doFilter() {
                this.$http.get('/json/assignment', {params: this.searchData}).then(res => {
                    this.item = res.data.assignment;
                    this.mainItem = this.item;
                });
            },
            findSemester(faculty) {
                if (faculty) {
                    this.$http.post('/json/assignment/find-semester', {
                        faculty_id: faculty
                    }).then(res => {
                        this.semester = res.data.semester
                    }).catch(err => {
                        console.log(err.response.message)
                    })
                }

            },
            findSubject(semester) {
                if (semester) {
                    this.$http.post('/json/assignment/mark-ledger/find-subject', {
                        semester_id: semester
                    }).then(res => {
                        this.subjects = this.$root.objectToArray(res.data.subjects);
                    }).catch(err => {
                        console.log(err.response.message)
                    })
                }

            },
            changeStatus(id, status) {
                let stat = status === 'active' ? 'in-active' : 'active'
                let url = '/json/assignment/' + id + '/' + stat
                this.$http.get(url).then(res => {
                    this.$refs.studentTable.getData()
                    this.$root.notification.status = res.data[0]
                    this.$root.notification.message = res.data[1]
                })

            },
        }

    }
</script>

