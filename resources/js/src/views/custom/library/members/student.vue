<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Books Manager
                </h2>
                <div class="p-2">
                    <router-link :to="'/library/book'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            Book Detail
                        </vs-button>
                    </router-link>
                    <router-link :to="'/library/issue-history'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-history" aria-hidden="true"></i>
                            Issue History
                        </vs-button>
                    </router-link>
                    <router-link :to="'/library/member'">

                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            Membership
                        </vs-button>
                    </router-link>
                    <router-link :to="'/library/student'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            Students Member
                        </vs-button>
                    </router-link>
                    <router-link :to="'/library/staff'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            Staffs Member
                        </vs-button>
                    </router-link>
                    <router-link :to="'/library/return-over'">
                        <vs-button type="filled" class="smBtn" color="warning">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            Return Period Over
                        </vs-button>
                    </router-link>

                </div>
            </div>
            <div class="col-md-12 mb-2" v-if="filterSection">
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
                                            <vs-input v-model="searchData.religion" class="w-100"></vs-input>
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
                                            <vs-input v-model="searchData.nationality" class="w-100"></vs-input>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Mot.Tongue:</label>
                                            <vs-input v-model="searchData.mother_tongue" class="w-100"></vs-input>
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
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
                <vs-card>
                    <data-table-final :headers="headers"
                                      :tableHeader="'Student List'"
                                      :suggestText="'Student Record list on table. Filter student using the filter.'"
                                      :url="'/json/library/student'"
                                      :model="'route'"
                                      :noDataMessage="'No Student data found. Please Filter student to show.'"
                                      :hasSearch="true"
                                      :searchData="searchData"
                                      :has-multiple="true"
                                      :has-pagination="true"
                                      :filterSection="true"
                                      ref="dataTableStudent"
                                      :ajaxVariableSet="['student']"
                                      @get-return-value="GetReturnValue"
                                      :showAction="false"
                                      :showStatus="false"
                    >
                        <template slot="items" slot-scope="props">
                            <vs-td :data="props.data.faculty">
                                {{props.data.faculty}}
                            </vs-td>
                            <vs-td :data="props.data.semester">
                                {{props.data.semester}}
                            </vs-td>
                            <vs-td :data="props.data.reg_no">
                                {{props.data.reg_no}}
                            </vs-td>
                            <vs-td :data="props.data.fullname">
                                {{props.data.fullname}}
                            </vs-td>
                            <vs-td :data="props.data.taken">
                                {{props.data.taken}}
                            </vs-td>
                            <vs-td :data="props.data.eligible">
                                {{props.data.eligible}}
                            </vs-td>
                            <vs-td :data="props.data.status">
                                {{props.data.status}}
                            </vs-td>

                        </template>
                    </data-table-final>

                </vs-card>
            </div>
        </div>

    </div>
</template>

<script>
    export default {

        data() {
            return {
                filterSection:true,
                searchData:{},
                headers: [
                    {name: 'Faculty/Class', sort_key: 'faculty'},
                    {name: 'Sem/Sec', sort_key: 'sem_sec'},
                    {name: 'Reg no', sort_key: 'reg_no'},
                    {name: 'student name', sort_key: 'fullname'},
                    {name: 'book taken', sort_key: 'book_taken'},
                    {name: 'eligible', sort_key: 'eligible'},
                    {name: 'status'},
                ],

            }
        },

        watch:{
            searchData:{
                deep:true,
                handler(val){
                    console.log(val)
                    this.$refs.dataTableStudent.getData()
                }
            }
        },
        created() {

        },

        methods: {
            GetReturnValue(arg = null, all) {
                let faculty = this.$root.objectToArray(all.faculties)
                let val = arg.map(st => {
                    return {
                        id: st.id,
                        faculty:faculty.filter(f=>{
                            return f.id === st.faculty
                        })[0].value,
                        semester:st.semester,
                        reg_no:st.memberdetail[2],
                        taken:st.taken,
                        eligible:st.eligible,
                        status:st.status,
                        fullname:this.$root.singleSpacing(st.first_name+' '+st.middle_name+' '+st.last_name)
                    }
                });
                this.$store.dispatch('updateTableData', val)
            },

        }

    }


</script>

<style scoped>

</style>


