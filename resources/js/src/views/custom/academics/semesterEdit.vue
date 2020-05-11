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
                                Edit Semester/Section</h4>
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
                                >Update
                                </vs-button>
                            </div>
                        </div>
                        <div class="col-md-8">

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
                this.$http.get(this.url + '/' + this.$route.params.id + '/edit').then(res => {
                    this.semester = res.data.row;
                    this.selectedSubjects = res.data.row.subjects;
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
                        this.$http.post(this.url + '/' + this.$route.params.id + '/update', {
                            semester: this.semester.semester,
                            gradingType_id: this.semester.gradingType_id,
                            staff_id: this.semester.staff_id,
                            sem_subject_id: this.selectedSubjects.map(d => {
                                return d.id
                            }),
                        }).then(res => {
                            this.semester = {semester: '', staff_id: null, gradingType_id: null};
                            this.subjects = [];
                            this.selectedSubjects = [];
                            this.getData();
                            this.$validator.reset()
                            this.$vs.notify({
                                title: res.data[0],
                                text: res.data[1],
                                color: res.data[0],
                                icon: 'verified_user'
                            })
                            this.$router.push({path: '/semester'})
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
                    this.$vs.notify({
                        title: res.data[0],
                        text: res.data[1],
                        color: res.data[0],
                        icon: 'verified_user'
                    })
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
                    this.$vs.notify({
                        title: res.data[0],
                        text: res.data[1],
                        color: res.data[0],
                        icon: 'verified_user'
                    })
                })
            },
        }
    }
</script>

<style scoped>

</style>
