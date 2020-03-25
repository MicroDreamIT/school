<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">SMS / Email Manager</h2>
                <div>
                    <router-link :to="'/info/notice'">
                        <vs-button type="filled" class="smBtn">Notice</vs-button>
                    </router-link>
                    <router-link :to="'/info/sms-email'">
                        <vs-button type="filled" class="smBtn">Sms/Email</vs-button>
                    </router-link>
                </div>
            </div>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
                <vs-card>
                    <div class="row mx-0">
                        <div class="col-md-12">
                            <br>
                            <h4 class="header large lighter blue">
                                SMS / Email
                            </h4><br>
                        </div>
                        <div class="col-md-12">
                            <router-link :to="'/info/sms-email'">
                                <vs-button type="filled" class="smBtn">Detail</vs-button>
                            </router-link>
                            <router-link :to="'/info/sms-email/add'">
                                <vs-button type="filled" class="smBtn">Group Message</vs-button>
                            </router-link>
                            <router-link :to="'/info/sms-email/student-guardian'">
                                <vs-button type="filled" class="smBtn">Student & Guardian</vs-button>
                            </router-link>
                            <router-link :to="'/info/sms-email/staff'">
                                <vs-button type="filled" class="smBtn">Staff</vs-button>
                            </router-link>
                            <router-link :to="'/info/sms-email/individual'">
                                <vs-button type="filled" class="smBtn">Individual</vs-button>
                            </router-link>
                        </div>
                        <vs-divider class="mx-3"></vs-divider>
                        <div class="col-md-12 mb-2">
                            <vs-collapse class="custom-collapse">
                                <vs-collapse-item>
                                    <div slot="header">
                                        <vs-button type="filled"
                                                   color="primary"
                                                   icon="double_arrow"
                                                   class="rounded"
                                        >
                                            Filter Students
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
                                                                  :options="['Active','In-Active']"
                                                                  placeholder="Select Status"
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
                        <div class="col-md-8">
                            <ow-data-table :headers="studentHeader"
                                           :tableHeader="'Students List'"
                                           :suggestText="'Student Record list on table. Filter Student using the filter.'"
                                           :url="'/json/student/'"
                                           :noDataMessage="'No Student data found. Please Filter Student to show.'"
                                           :hasSearch="true"
                                           :action-btn="false"
                                           :print-section="false"
                                           :has-multiple="true"
                                           :has-pagination="true"
                                           :main-item="mainItem"
                                           :getData="getData"
                                           ref="studentGuardian"
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
                                            {{props.data.middle_name?' '+props.data.middle_name:' '+' '}}
                                            {{props.data.last_name?' '+props.data.last_name:' '}}
                                        </a>

                                    </vs-td>
                                </template>


                                <template slot="printSection" slot-scope="printData">
                                </template>
                            </ow-data-table>
                        </div>
                        <vs-divider class="mx-3"></vs-divider>
                        <div class="col-md-12 row">
                            <div class="col-md-8">
                                <p>Message</p>
                                <vs-textarea
                                        v-model="sms.message"
                                        v-validate="'required'"
                                        data-vv-name="message"
                                        :danger="errors.first('message')?true:false"
                                        :danger-text="errors.first('message')"
                                        class="w-100"
                                        height="200px"
                                >

                                </vs-textarea>
                                <span class="error-text" v-if="errors.first('message')">
                                    {{ errors.first('message') }}
                                </span>
                            </div>
                            <div class="col-md-4">
                                <p>Type</p>
                                <vs-radio v-model="sms.type" vs-value="sms">Sms</vs-radio>
                                <vs-radio v-model="sms.type" vs-value="email">Email</vs-radio>
                                <p>Message Send Groups</p>
                                <vs-checkbox v-model="sms.to" class="my-2" vs-value="student">Student</vs-checkbox>
                                <vs-checkbox v-model="sms.to" class="my-2" vs-value="guardian">Guardian</vs-checkbox>
                                <vs-checkbox v-model="sms.to" class="my-2" vs-value="father">Father</vs-checkbox>
                                <vs-checkbox v-model="sms.to" class="my-2" vs-value="mother">Mother</vs-checkbox>
                            </div>
                        </div>
                        <vs-divider></vs-divider>
                        <div class="row mx-0">
                            <vs-button class="my-round mx-2"
                                       color="warning"
                                       @click.prevent="reset"

                            >
                                Reset
                            </vs-button>
                            <vs-button class="my-round mx-2"
                                       @click.prevent="send">
                                Send
                            </vs-button>
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
                sms: {type: ['sms'], to: []},
                searchData: {},
                studentHeader: [
                    {name: 'Faculty/Class', sort_key: 'faculty'},
                    {name: 'Sem', sort_key: ''},
                    {name: 'Reg.Num', sort_key: 'reg_no'},
                    {name: 'Student Name', sort_key: ''},
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
                this.$http.get('/json/info/smsemail/student-guardian').then(res => {
                    this.item = res.data.student;
                    this.mainItem = this.item;
                    this.academic_status = this.$root.objectToArray(res.data.academic_status)
                    this.faculties = this.$root.objectToArray(res.data.faculties);
                    this.batch = res.data.batch;
                });
            },
            doFilter() {
                this.$http.get('/json/info/smsemail/student-guardian', {params: this.searchData}).then(res => {
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
            reset() {
                this.sms = {type: ['sms'],chkIds:[]};
                this.$validator.reset();
            },
            send() {
                this.$refs.studentGuardian.getSelected();
                this.$nextTick(()=>{
                    this.sms.chkIds=this.$root.selected;
                })


                this.$validator.validateAll().then(value => {
                    if (value) {
                        this.$http.post('/json/info/smsemail/student-guardian/send', this.sms).then(res => {
                            this.$vs.notify({
                                title: 'Send Status ',
                                text: res.data[1],
                                color: res.data[0],
                                position: 'top-right'
                            });
                            this.sms = {type: ['sms'],chkIds:[]};
                            this.$validator.reset();
                        })
                    }
                })
            },
        }

    }


</script>

<style scoped>

</style>
