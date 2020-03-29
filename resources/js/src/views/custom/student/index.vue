<template>
    <div>
        <div class="row">
            <div class="col-md-12 mb-2">
                <h2 class="pageTitle">Student Manager</h2>
            </div>
            <div class="col-md-12">
                <div class="row mx-0">
                    <router-link :to="'/student'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            Detail
                        </vs-button>
                    </router-link>
                    <router-link :to="'/student/registration'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Registration
                        </vs-button>
                    </router-link>
                    <router-link :to="'/student/import'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-upload" aria-hidden="true"></i>
                            Bulk Registration
                        </vs-button>
                    </router-link>
                    <router-link :to="'/student/transfer'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-exchange" aria-hidden="true"></i>
                            Transfer
                        </vs-button>
                    </router-link>
                    <router-link :to="'/student/document'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-files-o" aria-hidden="true"></i>
                            Documents
                        </vs-button>
                    </router-link>
                    <router-link :to="'/student/note'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-sticky-note" aria-hidden="true"></i>
                            Notes
                        </vs-button>
                    </router-link>
                    <router-link :to="'/account/fees'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-calculator" aria-hidden="true"></i>
                            Balance Fees
                        </vs-button>
                    </router-link>
                    <router-link :to="'/library/student'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-calculator" aria-hidden="true"></i>
                            Library
                        </vs-button>
                    </router-link>
                    <router-link :to="'/attendance/student'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            Attendance
                        </vs-button>
                    </router-link>
                </div>
            </div>
            <notify-bar/>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">

                <vs-card>
                    <student-table :headers="studentHeader"
                                   :tableHeader="'Student List'"
                                   :suggestText="'Student Record list on table. Filter Students using the filter.'"
                                   :url="'/json/student/'"
                                   :noDataMessage="'No Student data found. Please Filter Student to show.'"
                                   :hasSearch="true"
                                   :has-multiple="true"
                                   :has-pagination="true"
                                   :filterSection="true"
                                   ref="studentTable"
                    >
                        <template slot="items" slot-scope="props">
                            <vs-td :data="props.data.faculty" class="pointer-none">
                                {{props.data.faculty}}
                            </vs-td>

                            <vs-td :data="props.data.semester">
                                {{props.data.semester}}
                            </vs-td>

                            <vs-td :data="props.data.reg_no">
                                {{props.data.reg_no}}
                            </vs-td>

                            <vs-td :data="props.data.first_name">
                                <a @click.stop="viewItems(props.data.id)"
                                   class="pointer-all text-primary"
                                   title="View"
                                >
                                    {{props.data.first_name+' '+props.data.middle_name+' '+props.data.last_name}}
                                </a>

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
                            <vs-td>
                                <div class="action-own">
                                    <a class="btn btn-primary btn-sm pointer-all"
                                       title="View"
                                       @click.stop="viewItems(props.data.id)"

                                    >
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-success btn-sm pointer-all"
                                       title="Edit"
                                       @click.stop="editItems(props.data.id)">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="btn btn-danger btn-sm pointer-all"
                                       title="Delete"
                                       @click.stop="deleteItems(props.data.id)">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </div>
                            </vs-td>
                            <vs-td>
                                <div class="action-own">
                                    <a class="icons-only pointer-all" @click.stop="quickMember(props.data)">
                                        <i class="fa fa-book "></i>
                                    </a>
                                    <a class="icons-only pointer-all" @click.stop="openResidentModal(props.data)">
                                        <i class="fa fa-bed"></i>
                                    </a>
                                    <a class="icons-only pointer-all" @click.stop="openTransportModal(props.data)">
                                        <i class="fa fa-car"></i>
                                    </a>
                                </div>
                            </vs-td>
                        </template>

                        <template slot="printSection" slot-scope="props" >
                            <div id="studentTableMain"  >
                                <div v-for="item in props"> {{item}} </div>
                                <br>
                            </div>
                        </template>
                    </student-table>
                </vs-card>
            </div>
        </div>

        <vs-popup class="holamundo"
                  :title="residentUser.reg_no+' | Manage Resident'"
                  :active.sync="residentModal">

            <div class="form-group mt-3">
                <label class="col-sm-12">Hostel</label>
                <v-select class="col-sm-12"
                          v-model="resident.hostel"
                          :options="hostels"
                >

                </v-select>
            </div>
            <div class="form-group">
                <label class="col-sm-12">Room</label>
                <v-select class="col-sm-12"
                          v-model="resident.room"
                          :options="rooms"
                >

                </v-select>
            </div>
            <div class="form-group">
                <label class="col-sm-12">Bed</label>
                <v-select class="col-sm-12"
                          v-model="resident.bed"
                          :options="beds"
                >

                </v-select>
            </div>
            <div class="footer-modal">
                <button type="button"
                        class="btn btn-default pull-right mr-1"
                        @click="residentModal=false">
                    Cancel
                </button>
                <button type="button" class="btn btn-success pull-right">
                    Assign Bed
                </button>
            </div>
        </vs-popup>
        <vs-popup class="holamundo"
                  :title="transportUser.reg_no+' | Manage Transport User'"
                  :active.sync="transportModal">
            <div class="form-group mt-3">
                <label class="col-sm-12">Route</label>
                <v-select class="col-sm-12"
                          v-model="transport.route"
                          :options="routes"
                >

                </v-select>
            </div>
            <div class="form-group">
                <label class="col-sm-12">Vehicle</label>
                <v-select class="col-sm-12"
                          v-model="transport.vehicle"
                          :options="vehicles">

                </v-select>
            </div>
            <div class="footer-modal">
                <button type="button"
                        class="btn btn-default pull-right mr-1"
                        @click="transportModal=false">
                    Cancel
                </button>
                <button type="button" class="btn btn-success pull-right">
                    Assign Transport
                </button>
            </div>
        </vs-popup>

    </div>
</template>

<script>
    export default {

        data() {
            return {
                studentHeader: [
                    {name: 'Faculty/Class', sort_key: 'faculty'},
                    {name: 'Sem', sort_key: ''},
                    {name: 'Reg.Num', sort_key: 'reg_no'},
                    {name: 'Student Name', sort_key: ''},
                    {name: 'Status', sort_key: ''},
                    {name: 'Action', sort_key: ''},
                    {name: 'Service Activation', sort_key: ''},
                ],
                notification: '',
                residentModal: false,
                transportModal: false,
                residentUser: {},
                transportUser: {},
                resident: {},
                transport: {},
                hostels: [],
                beds: [],
                routes: [],
                vehicles: [],
                rooms: []

            }
        },

        created() {

        },

        methods: {

            openResidentModal(user) {
                this.residentModal = true;
                this.residentUser = user
            },
            openTransportModal(user) {
                this.transportModal = true;
                this.transportUser = user
            },

            viewItems(id) {
                this.$router.push({name: 'studentView', params: {id: id}})
            },
            editItems() {
                alert("hey hasib im edit ")
            },
            deleteItems() {

            },
            changeStatus(id, status) {
                let stat = status === 'active' ? 'in-active' : 'active'
                let url = '/json/student/' + id + '/' + stat
                this.$http.get(url).then(res => {
                    this.$refs.studentTable.getData()
                    this.$root.notification.status = res.data[0]
                    this.$root.notification.message = res.data[1]
                })

            },
            quickMember(user) {
                //  params: {reg_no: user.reg_no,user_type:1,status:user.status}
            }
        }

    }


</script>

<style scoped>

</style>
