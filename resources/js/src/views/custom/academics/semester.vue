<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Semester/Section Manager</h2>
            </div>
            <notify-bar/>
            <vs-divider class="mx-3"></vs-divider>
            <div class="col-md-12">
                <vs-card>
                    <div class="row p-4">
                        <div class="col-md-4">
                            <h4>
                                <i class="fa fa-search"></i>
                                Create Semester/Section</h4>
                            <br>
                            <div class="form-group row">
                                <label class="col-md-4">Sem./Sec.</label>
                                <vs-input class="col-md-8"
                                          v-model="semester.semester"
                                          placeholder=""
                                          v-validate="'required'"
                                          data-vv-name="semester"
                                          :danger="errors.first('semester')?true:false"
                                          :danger-text="errors.first('semester')"
                                >

                                </vs-input>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4">Grading Type</label>
                                <div class="col-md-8">
                                    <vs-select
                                            autocomplete
                                            class="selectExample w-100"
                                            v-model="semester.gradingType_id"
                                            v-validate="'required'"
                                            data-vv-name="grading"
                                            :danger="errors.first('grading')?true:false"
                                            :danger-text="errors.first('grading')"
                                    >
                                        <vs-select-item :key="index" :value="item.id" :text="item.title"
                                                        v-for="(item,index) in gradingScales"/>
                                    </vs-select>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4">Teacher/Staff</label>
                                <div class="col-md-8">
                                    <vs-select
                                            autocomplete
                                            class="selectExample w-100"
                                            v-model="semester.staff_id"
                                            v-validate="'required'"
                                            data-vv-name="staff"
                                            :danger="errors.first('staff')?true:false"
                                            :danger-text="errors.first('staff')"
                                    >
                                        <vs-select-item :key="index" :value="item.id" :text="item.value"
                                                        v-for="(item,index) in staff"/>
                                    </vs-select>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-md-12">Course Find and Add Type</label>
                                <div class="col-md-12">
                                   <vs-select
                                            autocomplete
                                            class="selectExample w-100"
                                            v-model="subject"
                                            @input-change="getSubject($event.target.value)"
                                            ref="searchCourse"
                                    >
                                        <vs-select-item :key="index" :value="item" :text="item.code+'-'+item.title"
                                                        v-for="(item,index) in subjects"/>
                                    </vs-select>
                                </div>
                            </div>

                            <vs-divider></vs-divider>
                            <vs-button color="#00b8cf"
                                       type="filled"
                                       class="smBtn my-round"
                                       @click="addSubject(subject)"
                            >
                                Add course
                            </vs-button>
                            <br>
                            <div class="form-group table-responsive">
                                <table class="table table-striped table-bordered table-hover mt-3">
                                    <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="(sub,idx) in selectedSubjects" v-if="selectedSubjects.length">
                                        <td>{{sub.code}}</td>
                                        <td>{{sub.title}}</td>
                                        <td>
                                            <vs-button @click="removeSubject(idx)">
                                                <i class="fa fa-trash"></i>
                                            </vs-button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <vs-button color="#00b8cf"
                                           type="filled"
                                           class="my-round"
                                           @click.prevent="submit"
                                >Create
                                </vs-button>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <ow-data-table :headers="tableHeader"
                                           :tableHeader="'Semester/Section List'"
                                           :suggestText="'Semester/Section Record list on table. Filter Semester/Section using the filter.'"
                                           :url="url"
                                           :noDataMessage="'No Semester data found. Please Semester Faculty to show.'"
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
                this.$http.get(this.url).then(res => {
                    this.items = res.data.data;
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
                        this.$http.post(this.url + '/store', {
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
                            this.subjects=[];
                            this.selectedSubjects=[]
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
