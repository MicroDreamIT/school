<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Semester/Section Manager</h2>
            </div>
            <div class="col-md-12" v-if="$root.notification.status">
                <div role="alert"
                     :class="`mt-2 alert alert-${$root.notification.status} alert-dismissible display-block`"
                >
                    <button type="button"
                            data-dismiss="alert"
                            aria-label="Close"
                            class="close"
                            @click="$root.emptyNotification()"
                    >
                        <span aria-hidden="true">×</span>
                    </button>
                    <i class="ace-icon fa fa-hand-o-right"></i>
                    {{$root.notification.message}}
                </div>
            </div>
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
                                    <v-select v-model="semester.gradingType_id"
                                              :options="gradingScales"
                                              label="title"
                                              :reduce="a => a.id"
                                              v-validate="'required'"
                                              name="gradingType_id"
                                              :class="{ 'error-box': errors.has('gradingType_id') }"

                                    >
                                    </v-select>
                                    <span v-show="errors.has('gradingType_id')" class="error-text">
                                        {{ errors.first('gradingType_id') }}
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4">Teacher/Staff</label>
                                <div class="col-md-8">
                                    <v-select v-model="semester.staff_id"
                                              :options="staff"
                                              label="name"
                                              :reduce="a => a.id"
                                              v-validate="'required'"
                                              name="staff_id"
                                              :class="{ 'error-box': errors.has('staff_id') }"

                                    >
                                    </v-select>
                                    <span v-show="errors.has('staff_id')" class="error-text">
                                        {{ errors.first('staff_id') }}
                                    </span>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-md-12">Course Find and Add Type</label>
                                <div class="col-md-12">
                                    <v-select placeholder="Search Course..."
                                              ref="searchCourse"
                                              class="w-100"
                                              @search="getData"
                                              label="value"
                                              :reduce="a => a.id"
                                              :options="subjects"
                                              v-model="semester.subject_id"
                                    >

                                    </v-select>
                                    <span v-show="errors.has('gradingType_id')" class="error-text">
                                        {{ errors.first('gradingType_id') }}
                                    </span>
                                </div>
                            </div>

                            <vs-divider></vs-divider>
                            <vs-button color="#00b8cf"
                                       type="filled"
                                       class="my-round">Add course
                            </vs-button>
                            <br>
                            <div class="form-group">
                                <table class="table table-striped table-bordered table-hover mt-3">
                                    <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>name</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
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
                            <h4 class="header large lighter blue">
                                <i class="fa fa-list" aria-hidden="true"></i>&nbsp; Semester/Section List
                                List</h4>
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
                                Semester/Section Record list on table. Filter Semester/Section using the filter.
                            </div>
                            <div class="dt-buttons btn-group action-group mt-3">
                                <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0"
                                        aria-controls="DataTables_Table_0">
                                    <span>Copy</span></button>
                                <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0"
                                        aria-controls="DataTables_Table_0">
                                    <span>PDF</span>
                                </button>
                                <button class="btn btn-secondary" tabindex="0" aria-controls="DataTables_Table_0">
                                    <span>JSON</span>
                                </button>
                                <button class="btn btn-secondary buttons-print" tabindex="0"
                                        aria-controls="DataTables_Table_0">
                                    <span>Print</span>
                                </button>
                            </div>
                            <data-table :headers="tableHeader"
                                        :url="'/student'"
                                        :no-data-message="'No Day data found. Please Filter Day to show.'"
                                        :searchField="searchData"
                                        :hasSearch="true"
                                        :has-multiple="true"
                            >
                                <template slot="items" slot-scope="props">
                                    <vs-td :data="props.data.username" class="pointer-none">
                                        {{props.data.email}}
                                    </vs-td>

                                    <vs-td :data="props.data.username">
                                        {{props.data.username}}
                                    </vs-td>

                                    <vs-td :data="props.data.id">
                                        {{props.data.website}}
                                    </vs-td>

                                    <vs-td :data="props.id">
                                        {{props.data.id}}
                                    </vs-td>
                                </template>
                            </data-table>
                        </div>
                    </div>

                </vs-card>
            </div>
        </div>
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
                    {name: 'Email', field: 'email', sort_key: 'email'},
                    {name: 'Name', field: 'name', sort_key: 'name'},
                    {name: 'Mobile', field: 'mobile'},
                    {name: 'PID'},
                ],
                semester: {},
                items: [],
                mainItem: [],
                staff: [],
                gradingScales: [],
                subjects: [],
                url: '/json/semester',
            }
        },
        created() {
            this.getData()
        },

        methods: {
            getData() {
                this.$http.get(this.url, {params: {id: this.$refs.searchCourse ? this.$refs.searchCourse.search : ''}}).then(res => {
                    this.items = res.data.semester;
                    this.mainItem = this.items;
                    this.staff = res.data.staff.map(staff => {
                        return {
                            id: staff.id,
                            name: (staff.first_name ? staff.first_name : '') + ' ' +
                                (staff.middle_name ? staff.middle_name : '') + ' ' +
                                (staff.last_name ? staff.last_name : ''),
                        }
                    });
                    this.gradingScales = res.data.gradingScales;
                    this.subjects = this.$root.objectToArray(res.data.subject);
                })
            },
            submit() {
                this.$validator.validateAll().then(value => {
                    if (value) {
                        // this.$http.post(this.url + '/store', {
                        //     semester: this.faculty.semester,
                        //     faculty: this.faculty.faculty,
                        //     faculty_code: this.faculty.faculty_code
                        // }).then(res => {
                        //     this.$root.notification.status = res.data[0];
                        //     this.$root.notification.message = res.data[1];
                        //     this.faculty = {faculty: '', faculty_code: '', semester: []};
                        //     this.getData()
                        // })
                    }
                })
            },
        }
    }
</script>

<style scoped>

</style>
