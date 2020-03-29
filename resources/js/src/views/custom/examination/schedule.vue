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
                                            Filter Exam Schedule
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
                                           :tableHeader="'Exam Schedule List'"
                                           :suggestText="'Exam Schedule Record list on table. Filter Exam Schedule using the filter.'"
                                           :url="url"
                                           :noDataMessage="'No Exam Schedule data found. Please Filter Exam Schedule to show.'"
                                           :hasSearch="true"
                                           :has-multiple="true"
                                           :has-pagination="true"
                                           :main-item="mainItem"
                                           :getData="getData"
                            >
                                <template slot="items" slot-scope="props">
                                    <vs-td :data="props.data.semester">
                                        <div class="d-flex flex-column">
                                            <div class="px-2 d-flex">
                                                <span class="flex-1 border-r p-2">Semester</span>
                                                <span class="flex-1 p-2">{{props.data.semester}}</span>
                                            </div>
                                            <div class="px-2 d-flex border-t bg-grey-light">
                                                <span class="flex-1 border-r p-2">Grading Type</span>
                                                <span class="flex-1 p-2">{{props.data.grading_type.title}}</span>
                                            </div>
                                            <div class="px-2 d-flex border-t">
                                                <span class="flex-1 border-r p-2">Teacher/Staff</span>
                                                <span class="flex-1 p-2">{{props.data.staff.first_name?props.data.staff.first_name:' '}}
                                                {{props.data.staff.middle_name?' '+props.data.staff.middle_name:' '+' '}}
                                                {{props.data.staff.last_name?' '+props.data.staff.last_name:' '}}</span>
                                            </div>
                                        </div>
                                    </vs-td>

                                    <vs-td>
                                        <div class="d-flex flex-column">
                                            <span v-for="(sub,idx) in props.data.subjects"
                                                  :class="{'p-2':true ,'border-t':idx>0}">
                                                {{sub.title}}
                                            </span>
                                        </div>
                                    </vs-td>

                                    <vs-td>
                                        <div class="d-flex flex-wrap">
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

                                    <vs-td>
                                        <div class="action-own">
                                            <a class="btn btn-success btn-sm pointer-all"
                                               title="Edit"
                                               @click.stop="editItems(props.data.id)">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a class="btn btn-danger btn-sm pointer-all"
                                               title="Delete"
                                               @click.stop="deletePopModal(props.data.id)">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </div>
                                    </vs-td>
                                </template>


                                <template slot="printSection" slot-scope="printData">
                                    <thead>
                                    <tr>
                                        <th>SN.No.</th>
                                        <th>
                                            Semester
                                        </th>
                                        <th>
                                            Subjects
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="(tr, idx) in printData.data">
                                        <td>
                                            {{printData.data.indexOf(tr)+1}}
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <div class="px-2 d-flex">
                                                    <span class="flex-1 border-r p-2">Semester</span>
                                                    <span class="flex-1 p-2">{{tr.semester}}</span>
                                                </div>
                                                <div class="px-2 d-flex border-t bg-grey-light">
                                                    <span class="flex-1 border-r p-2">Grading Type</span>
                                                    <span class="flex-1 p-2">{{tr.grading_type.title}}</span>
                                                </div>
                                                <div class="px-2 d-flex border-t">
                                                    <span class="flex-1 border-r p-2">Teacher/Staff</span>
                                                    <span class="flex-1 p-2">{{tr.staff.first_name?tr.staff.first_name:' '}}
                                                {{tr.staff.middle_name?' '+tr.staff.middle_name:' '+' '}}
                                                {{tr.staff.last_name?' '+tr.staff.last_name:' '}}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                            <span v-for="(sub,idx) in tr.subjects"
                                                  :class="{'p-2':true ,'border-t':idx>0}">
                                                {{sub.title}}
                                            </span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <span v-if="tr.status=='active'" class="p-2 ">Active</span>
                                                <span v-else class="p-2">In-Active</span>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </template>
                            </ow-data-table>
                        </div>
                    </div>

                </vs-card>
            </div>
        </div>
        <vs-popup class="holamundo"
                  :title="'Delete Confirmation'"
                  :active.sync="deletePop">
            <div class="mt-3">
                <p class="p-2 my-round delete-pop-text">These items will be permanently deleted and cannot be
                    recovered.</p>

                <p><i class="p-2 ace-icon fa fa-hand-o-right"></i>Are you sure?</p>
            </div>

            <div class="footer-modal">
                <vs-button class="smBtn"
                           @click="deletePop=false, deleteItem= null">
                    <i class="fa fa-close"></i>
                    Cancel
                </vs-button>
                <vs-button class="smBtn" color="danger" @click="deletePop=false, deleteItems()">
                    <i class="fa fa-trash"></i>
                    Yes,Delete Now!
                </vs-button>
            </div>
        </vs-popup>
    </div>
</template>

<script>

    export default {
        components: {},
        name: "payment-method",
        data() {
            return {
                searchData: {},
                tableHeader: [
                    {name: 'Semester', sort_key: 'email'},
                    {name: 'Subjects', sort_key: 'name'},
                    {name: 'Status'},
                    {name: 'Action'},
                ],
                semester: {},
                items: [],
                mainItem: [],
                staff: [],
                gradingScales: [],
                subjects: [],
                selectedSubjects: [],
                subject: null,
                deletePop: false,
                deleteItem: null,
                url: '/json/semester',
            }
        },
        created() {
            this.getData()
        },

        methods: {
            getData() {
                this.$http.get(this.url + '/' + this.$route.params.id + '/edit').then(res => {
                    this.semester = res.data.row;
                    this.selectedSubjects = res.data.row.subjects;
                    this.items = res.data.semester;
                    this.mainItem = this.items;
                    this.staff = this.$root.objectToArray(res.data.staff);
                    this.gradingScales = res.data.gradingScales;
                })
            },
            getSubject(val) {
                this.$http.get('/json/semester/get-subject', {params: {id: val ? val : ''}}).then(res => {
                    this.subjects = res.data.subject;
                })
            },

            submit() {
                this.$validator.validateAll().then(value => {
                    if (value) {
                        this.$http.post(this.url + '/' + this.$route.params.id + '/update', {
                            semester: this.semester.semester,
                            gradingType_id: this.semester.gradingType_id,
                            staff_id: this.semester.staff_id,
                            sem_subject_id: this.selectedSubjects.map(d => {
                                return d.id
                            }),
                        }).then(res => {
                            this.$root.notification.status = res.data[0];
                            this.$root.notification.message = res.data[1];
                            this.semester = {semester: '', staff_id: null, gradingType_id: null};
                            this.subjects = [];
                            this.selectedSubjects = [];
                            this.getData();
                            this.$validator.reset()
                        })
                    }
                })
            },
            addSubject(sub) {

                {
                    this.selectedSubjects.push(sub);
                    this.selectedSubjects = this.selectedSubjects.reduce((x, y) => x.findIndex(e => e.id === y.id) < 0 ? [...x, y] : x, [])
                }

            },
            removeSubject(idx) {
                this.selectedSubjects.splice(idx, 1)
            },
            changeStatus(id, status) {
                let stat = status === 'active' ? 'in-active' : 'active';
                let url = '/json/semester/' + id + '/' + stat;
                this.$http.get(url).then(res => {
                    this.getData();
                    this.$root.notification.status = res.data[0];
                    this.$root.notification.message = res.data[1]
                })

            },
            editItems(id) {
                this.$router.push({name: 'semesterEdit', params: {id: id}})
            },
            deletePopModal(id) {
                this.deleteItem = id;
                this.deletePop = true
            },
            deleteItems() {
                this.$http.get('/json/semester/' + this.deleteItem + '/delete').then(res => {
                    this.getData();
                    this.$root.notification.status = res.data[0];
                    this.$root.notification.message = res.data[1]
                })
            },
        }
    }
</script>

<style scoped>

</style>
