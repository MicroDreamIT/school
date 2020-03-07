<template>
    <div>
        <div class="row">
            <div class="col-md-12 mb-2">
                <h2 class="pageTitle">Details</h2>
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
            <div class="col-md-12">
                 <div role="alert"
                      class="mt-2 alert alert-success alert-dismissible display-block"
                     v-if="$root.hasNotification">
                    <button type="button"
                            data-dismiss="alert"
                            aria-label="Close"
                            class="close"
                            @click=""
                    >
                        <span aria-hidden="true">×</span>
                    </button>
                    <i class="ace-icon fa fa-hand-o-right"></i>
                    {{hasNotification}}
                </div>
            </div>
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
                                {{props.data.first_name+' '+props.data.middle_name+' '+props.data.last_name}}
                            </vs-td>
                            <vs-td>
                                <div class="d-flex">
                                    {{props.data.academic_status}}
                                    <vs-switch color="success"
                                               :checked="props.data.status=='active'?true:false"
                                               @click.stop="changeStatus(props.data.id)"
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
                                Service Activations
                            </vs-td>
                        </template>
                    </student-table>
                </vs-card>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        components: {},
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

            }
        },

        created() {

        },

        methods: {
            viewItems() {
                alert("hey hasib im view ")
            },
            editItems() {
                alert("hey hasib im edit ")
            },
            deleteItems() {
                alert("hey hasib im delete ")
            },
            changeStatus() {

            }
        }

    }


</script>

<style scoped>

</style>
