<template>
    <div>
        <div class="row">
            <div class="col-md-12 mb-2">
                <h2 class="pageTitle">Staff Manager</h2>
            </div>
            <div class="col-md-12">
                <div class="row mx-0">
                    <router-link :to="'/staff'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            Detail
                        </vs-button>
                    </router-link>
                     <router-link :to="'/staff/add'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Registration
                        </vs-button>
                    </router-link>
                    <router-link :to="'/staff/import'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-upload" aria-hidden="true"></i>
                            Bulk Registration
                        </vs-button>
                    </router-link>

                    <router-link :to="'/staff/document'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-files-o" aria-hidden="true"></i>
                            Documents
                        </vs-button>
                    </router-link>
                    <router-link :to="'/staff/note'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-sticky-note" aria-hidden="true"></i>
                            Notes
                        </vs-button>
                    </router-link>
                    <router-link :to="'/staff/payroll'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-sticky-note" aria-hidden="true"></i>
                            Payroll
                        </vs-button>
                    </router-link>
                    <router-link :to="'/library/staff'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-calculator" aria-hidden="true"></i>
                            Library
                        </vs-button>
                    </router-link>
                    <router-link :to="'/attendance/staff'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            Attendance
                        </vs-button>
                    </router-link>
                    <router-link :to="'/staff/designation'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            Designation
                        </vs-button>
                    </router-link>
                </div>
            </div>
            <div class="col-md-12" v-if="notification">
                <div role="alert"
                     class="mt-2 alert alert-success alert-dismissible display-block"
                >
                    <button type="button"
                            data-dismiss="alert"
                            aria-label="Close"
                            class="close"
                            @click="notification=''"
                    >
                        <span aria-hidden="true">×</span>
                    </button>
                    <i class="ace-icon fa fa-hand-o-right"></i>
                    {{notification}}
                </div>
            </div>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
                <vs-card>
                    <div class="row p-2">
						<h4 class="ml-4">Designation</h4>
                        <div class="col-md-12 row">
                            <div class="col-md-4">
                                <br>
                                <h4 class="header large lighter blue">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    Create Designation
                                </h4><br>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Designation</label>
                                    <div class="col-sm-9">
                                        <vs-input v-model="designation" class="w-100"/>
                                    </div>
                                </div>

                                <vs-divider/>
                                <button class="btn btn-info waves-effect waves-light" @click.prevent="create">
                                    <i class="fa fa-save bigger-110"></i>
                                    Create
                                </button>
                            </div>
                            <div class="col-md-8"><br>

                                <ow-data-table :headers="tableHeader"
                                               :tableHeader="'Designation List'"
                                               :url="'/json/student/'"
                                               :noDataMessage="'No Designation data found. Please Filter Designation to show.'"
                                               :has-search="true"
                                               :has-multiple="true"
                                               :has-pagination="true"
                                               :print-section="false"
                                               :suggestText="'Designation Record list on table. Filter Designation using the filter.'"
                                >
                                    <template slot="items" slot-scope="props">
                                        <vs-td>

                                        </vs-td>


                                        <vs-td>
                                            <div class="d-flex">
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
                                        </vs-td>
                                    </template>
                                </ow-data-table>
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

                tableHeader: [
                    {name: 'Designation', sort_key: 'designation'},
                    {name: 'Status'},
                    {name: 'Action'},
                ],
				notification:'',
				designation:null
            }
        },
        methods: {
            editItems() {
                alert("hey hasib im edit ")
            },
            deleteItems() {
                alert("hey hasib im delete ")
            },
            changeStatus() {

            },
        }

    }


</script>

<style scoped>

</style>
