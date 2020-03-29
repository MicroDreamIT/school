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
                                            Filter Staff Report
                                        </vs-button>
                                    </div>
                                    <div class="filterBox">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label>Reg:</label>
                                                        <vs-input v-model="searchData.reg_no"
                                                                  class="w-100">
                                                        </vs-input>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Designation</label>
                                                        <v-select :options="designation"
                                                                  label="value"
                                                                  v-model="searchData.designation"
                                                                  :reduce="a => a.id"
                                                        >
                                                        </v-select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Join Date</label>
                                                        <div class="d-flex justify-content-between">
                                                            <datepicker
                                                                    v-model="searchData.fromDate"
                                                                    :format="'yyyy-MM-dd'"
                                                                    @input="searchData.fromDate=$root.formatPicker($event)"
                                                                    class="flex-1"
                                                            />
                                                            <label>To</label>
                                                            <datepicker
                                                                    v-model="searchData.toDate"
                                                                    :format="'yyyy-MM-dd'"
                                                                    @input="searchData.toDate=$root.formatPicker($event)"
                                                                    class="flex-1"/>
                                                        </div>

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

                                    <vs-td :data="props.data.reg_no">
                                        {{props.data.reg_no}}
                                    </vs-td>
                                    <vs-td :data="props.data.full_name">
                                        <a @click.stop="viewItems(props.data.id)"
                                           class="pointer-all text-primary"
                                           title="View"
                                        >
                                            {{props.data.full_name}}
                                        </a>

                                    </vs-td>
                                    <vs-td>
                                        {{props.data.join_date?$root.parseDate(props.data.join_date):''}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.designations.title}}
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
                                        {{props.data.mobile_1 + ' '}}{{props.data.mobile_2}}
                                    </vs-td>

                                    <vs-td>
                                        {{props.data.father_name}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.mother_name}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.qualification}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.experience}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.experience_info}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.other_info}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.status}}
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
                    {name: 'Reg. Num', sort_key: 'reg_no'},
                    {name: 'Staff Name', sort_key: ''},
                    {name: 'Join. Date', sort_key: ''},
                    {name: 'Designation', sort_key: ''},
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
                    {name: 'Father Name', sort_key: ''},
                    {name: 'Mother Name', sort_key: ''},
                    {name: 'Qualification', sort_key: ''},
                    {name: 'Experience', sort_key: ''},
                    {name: 'Experience Info', sort_key: ''},
                    {name: 'Other Info', sort_key: ''},
                    {name: 'Status', sort_key: ''},

                ],
                item: [],
                mainItem: [],
                designation: [],
            }
        },
        created() {
            this.getData()
        },
        methods: {
            getData() {
                this.$http.get('/json/report/staff').then(res => {
                    this.item = res.data.staff;
                    this.mainItem = this.item;
                    this.designation = this.$root.objectToArray(res.data.designation)
                });
            },
            doFilter() {
                this.$http.get('/json/report/staff', {params: this.searchData}).then(res => {
                    this.item = res.data.staff;
                    this.mainItem = this.item
                });
            },
        }

    }
</script>
