<template>
    <div class="custom-table">
        <div class="row p-4">
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
            <div class="col-md-12 ">
                <h4 class="header large lighter blue">
                    <i class="fa fa-list" aria-hidden="true"></i>&nbsp;
                    {{tableHeader}}
                </h4>
                <div class="easy-link-menu d-flex flex-wrap" v-if="actionBtn">
                    <a class="btn-success btn-sm bulk-action-btn  m-1" @click.prevent="doActive">
                        <i class="fa fa-check"></i>
                        Active
                    </a>
                    <a class="btn-warning btn-sm bulk-action-btn m-1" @click.prevent="doInActive">
                        <i class="fa fa-remove"></i>
                        In-Active
                    </a>
                    <a class="btn-danger btn-sm bulk-action-btn m-1" @click.prevent="doDelete">
                        <i class="fa fa-trash"></i>
                        Delete
                    </a>
                </div>
                <br>
                <div class="table-header" v-if="headerSuggestion">
                    {{suggestText}}
                </div>
                <div class="dt-buttons btn-group action-group mt-3" v-if="printSection">
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
                            v-print="'#studentTableMain'"
                    >
                        <span>Print</span>
                    </button>
                </div>
                <div v-if="transferSection">
                    <div class="col-md-12">
                        <div class="row mx-0">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Faculty/Class</label>
                                    <v-select v-model="transferred.faculty"
                                              :options="faculties"
                                              label="value"
                                              :reduce="a => a.id"
                                              placeholder="Select Faculty/Class"
                                              @input="findSemesterTransfer(transferred.faculty)"
                                    >
                                    </v-select>

                                </div>
                                <div class="form-group">
                                    <label>Academic Status:</label>
                                    <v-select v-model="transferred.academic_status"
                                              :options="academic_status"
                                              label="value"
                                              :reduce="a => a.id"
                                              placeholder="Select Academic Status"
                                    >
                                    </v-select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sem./Sec.</label>
                                    <v-select v-model="transferred.semester"
                                              :options="semesterTransfer"
                                              label="semester"
                                              :reduce="a => a.id"
                                              placeholder="Select Sem./Sec."
                                    >
                                    </v-select>
                                </div>
                                <div class="form-group  pt-1"><br>
                                    <button type="submit" class="btn btn-success btn-sm m-1 waves-effect waves-light"
                                            id="student-transfer-btn" @click="doTransfer">
                                        <i class="fa fa-check" aria-hidden="true"></i> Transfer
                                    </button>
                                    <button type="reset"
                                            class="btn btn-warning btn-sm m-1 waves-effect waves-light text-white"
                                            @click="doReset"
                                    >
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        Reset
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <vs-divider></vs-divider>
                </div>
                <vs-table
                        v-model="selected"
                        :pagination="hasPagination"
                        :multiple="hasMultiple"
                        :max-items="maxItem"
                        :search="hasSearch"
                        :data="mainItem"
                        :noDataText="noDataMessage"
                        description
                        description-title="Showing"
                        class="container"
                >

                    <template slot="thead">
                        <vs-th>S.N.</vs-th>
                        <vs-th :sort-key="thead.sort_key?thead.sort_key:''" v-for="(thead,indx) in headers" :key="indx">
                            {{thead.name}}
                        </vs-th>
                    </template>
                    <template slot-scope="{data}">
                        <vs-tr :data="tr" :key="idx" v-for="(tr, idx) in data">
                            <vs-td>{{mainItem.indexOf(tr)+1}}</vs-td>
                            <slot name="items" v-bind:data="tr">
                            </slot>
                        </vs-tr>
                    </template>

                </vs-table>
            </div>
        </div>
        <div class="d-none" ref="studentTableMain">
            <slot name="printSection" :data="mainItem"></slot>
        </div>

    </div>
</template>

<script>
    export default {
        props: {
            url: {
                type: String,
                default: () => ''
            },
            filterSection: {
                type: Boolean,
                default: () => false
            },
            tableHeader: {
                type: String,
                default: () => 'Data List'
            },
            actionBtn: {
                type: Boolean,
                default: () => true
            },
            headerSuggestion: {
                type: Boolean,
                default: () => true
            },
            printSection: {
                type: Boolean,
                default: () => true
            },
            suggestText: {
                type: String,
                default: () => 'Data Record list on table. Filter Data using the filter.'
            },
            headers: {
                type: Array,
                default: () => []
            },
            noDataMessage: {
                type: String,
                default: () => 'No Data Found'
            },
            hasSearch: {
                type: Boolean,
                default: () => true
            },
            hasPagination: {
                type: Boolean,
                default: () => false
            },
            hasMultiple: {
                type: Boolean,
                default: () => false
            },
            transferSection: {
                type: Boolean,
                default: () => false
            }
        },

        data() {
            return {
                selected: [],
                maxItem: 10,
                searchData: {},
                item: [],
                academic_status: [],
                faculties: [],
                batch: [],
                semester: [],
                mainItem: [],
                transferred: {},
                semesterTransfer: []
            }
        },
        created() {
            this.getData()
        },
        watch:{
            // searchData:{
            //     deep:true,
            //     handler(val){
            //         const searchParams = new URLSearchParams();
            //         const search = val;
            //
            //         Object.keys(search).forEach(key => searchParams.append(key, search[key]));
            //         // console.log(searchParams.toString())
            //     }
            // }
        },
        methods: {
            getData() {
                this.$http.get(this.url).then(res => {
                    this.item = res.data.student;
                    this.academic_status = this.$root.objectToArray(res.data.academic_status)
                    this.faculties = this.$root.objectToArray(res.data.faculties);
                    this.batch = res.data.batch;
                    this.doSerialize()
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
            findSemesterTransfer(faculty) {
                if (faculty) {
                    this.$http.post('/json/student/find-semester', {
                        faculty_id: faculty
                    }).then(res => {
                        this.semesterTransfer = res.data.semester
                    }).catch(err => {
                        alert(err.response.message)
                    })
                }

            },

            doFilter() {
                this.$http.get(this.url,{params:this.searchData}).then(res => {
                    this.item = res.data.student;
                    this.doSerialize()
                });
            },
            doActive() {
                if (this.selected.length > 0) {
                    this.$http.post('/json/student/bulk-action', {
                        bulk_action: 'active',
                        chkIds: this.selected.map(val => {
                            return val.id
                        })
                    })
                        .then(res => {
                            this.$root.notification.status = 'success'
                            this.$root.notification.message = 'Active successfully'
                            this.selected = [];
                            this.getData()
                        })
                        .catch(err => {
                            alert(err.response.message)
                        })
                } else {
                    this.$root.notification.status = 'error'
                    this.$root.notification.message = 'select at least one'
                }

            },
            doInActive() {
                if (this.selected.length > 0) {
                    this.$http.post('/json/student/bulk-action', {
                        bulk_action: 'in-active',
                        chkIds: this.selected.map(val => {
                            return val.id
                        })
                    })
                        .then(res => {
                            this.$root.notification.status = 'success'
                            this.$root.notification.message = 'in-active successfully'
                            this.selected = [];
                            this.getData()
                        })
                        .catch(err => {
                            alert(err.response.message)
                        })
                } else {
                    this.$root.notification.status = 'error'
                    this.$root.notification.message = 'select at least one'
                }
            },
            doCopy() {
                this.$copyText(this.$refs.studentTableMain.innerText)
            },
            doPdf() {
                alert('doing pdf')
            },
            doJson() {
                alert('doing json')
            },
            doPrint() {
                alert('doing print')
            },
            doDelete() {
                if (this.selected.length > 0) {
                    this.$http.post('/json/student/bulk-action', {
                        bulk_action: 'delete',
                        chkIds: this.selected.map(val => {
                            return val.id
                        })
                    })
                        .then(res => {
                            this.$root.notification.status = 'success'
                            this.$root.notification.message = 'delete successfully'
                            this.selected = [];
                            this.getData()
                        })
                        .catch(err => {
                            alert(err.response.message)
                        })
                } else {
                    this.$root.notification.status = 'error'
                    this.$root.notification.message = 'select at least one'
                }
            },
            doSerialize() {
                this.mainItem = this.item.map(st => {
                    return {
                        id: st.id,
                        reg_no: st.reg_no,
                        reg_date: st.reg_date,
                        faculty: this.faculties[st.faculty].value,
                        semester: st.semester,
                        batch: this.batch[st.batch],
                        academic_status: this.academic_status.filter(d => d.id == st.academic_status)[0].value,
                        first_name: st.first_name ? st.first_name : '',
                        middle_name: st.middle_name ? st.middle_name : '',
                        last_name: st.last_name ? st.last_name : '',
                        status: st.status
                    }
                })
            },
            doTransfer() {
                var ids = [];
                this.selected.forEach(d => {
                    ids.push(d.id)
                })
                alert(ids)
            },
            doReset() {
                this.transferred = {faculty: null, semester: null, academic_status: null}
            }
        }
    }
</script>
