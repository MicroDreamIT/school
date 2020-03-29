<template>
    <div>
        <div class="row">
            <div class="col-md-12 mb-2">
                <h2 class="pageTitle">Exam Schedule Manager</h2>
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
                        <div class="col-md-12">
                            <div class="row mx-0">
                                <router-link :to="'/exam/dchedulr'">
                                    <vs-button type="filled" class="smBtn">
                                        <i class="fa fa-list" aria-hidden="true"></i>
                                        Schedule List
                                    </vs-button>
                                </router-link>
                                <router-link :to="'/exam/schedule/add'">
                                    <vs-button type="filled" class="smBtn">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        Schedule/Modify
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
                        <vs-divider></vs-divider>
                        <div class="col-md-12 row">
                            <div class="col-md-2 my-2">Faculty/Class</div>
                            <div class="col-md-4 my-2">
                                <vs-select
                                        autocomplete
                                        class="w-100"
                                        v-model="schedule.faculty"
                                        placeholder="Faculty/class.."
                                        @change="findSemester(schedule.faculty)"
                                >
                                    <vs-select-item :key="index" :value="item.id" :text="item.value"
                                                    v-for="(item,index) in faculties"/>
                                </vs-select>
                            </div>
                            <div class="col-md-2 my-2">Sem./Sec.</div>
                            <div class="col-md-4 my-2">
                                <vs-select
                                        autocomplete
                                        class="w-100"
                                        v-model="schedule.semester"
                                        placeholder="Faculty/class.."
                                >
                                    <vs-select-item :key="index" :value="item.id" :text="item.semester"
                                                    v-for="(item,index) in semesters"/>
                                </vs-select>
                            </div>
                            <div class="col-md-2 my-2">Year</div>
                            <div class="col-md-2 my-2">
                                <vs-select
                                        autocomplete
                                        class="w-100"
                                        v-model="schedule.year"
                                        placeholder="Faculty/class.."
                                >
                                    <vs-select-item :key="index" :value="item.id" :text="item.value"
                                                    v-for="(item,index) in years"/>
                                </vs-select>
                            </div>
                            <div class="col-md-2 my-2">Month</div>
                            <div class="col-md-2 my-2">
                                <vs-select
                                        autocomplete
                                        class="w-100"
                                        v-model="schedule.month"
                                        placeholder="Faculty/class.."
                                >
                                    <vs-select-item :key="index" :value="item.id" :text="item.value"
                                                    v-for="(item,index) in months"/>
                                </vs-select>
                            </div>
                            <div class="col-md-2 my-2">Exam</div>
                            <div class="col-md-2 my-2">
                                <vs-select
                                        autocomplete
                                        class="w-100"
                                        v-model="schedule.exam"
                                        placeholder="Faculty/class.."
                                >
                                    <vs-select-item :key="index" :value="item.id" :text="item.value"
                                                    v-for="(item,index) in exams"/>
                                </vs-select>
                            </div>
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
                schedule: {},
                schedule_exams: [],
                faculties: [],
                semesters: [],
                years: [],
                months: [],
                exams: [],
                subjects: [],
                url: '/json/exam/schedule',
            }
        },
        created() {
            this.getData()
        },

        methods: {
            getData() {
                this.$http.get(this.url).then(res => {
                    this.faculties = this.$root.objectToArray(res.data.faculties);
                    this.months = this.$root.objectToArray(res.data.months);
                    this.exams = this.$root.objectToArray(res.data.exams);
                    this.years = this.$root.objectToArray(res.data.years);
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

            removeSubject(idx) {
                this.selectedSubjects.splice(idx, 1)
            },

            findSemester(faculty) {
                if (faculty) {
                    this.$http.post('/json/student/find-semester', {
                        faculty_id: faculty
                    }).then(res => {
                        this.semesters = res.data.semester
                    }).catch(err => {
                        alert(err.response.message)
                    })
                }

            },
        }
    }
</script>

<style scoped>

</style>
