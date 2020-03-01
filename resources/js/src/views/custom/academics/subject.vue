<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Course Manager</h2>
                <div class="mt-2 alert alert-success alert-dismissible display-block" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <i class="ace-icon fa fa-hand-o-right"></i>
                    Please, Create Year and Active
                </div>
            </div>
            <div class="col-md-12">
                <vs-card>
                    <div class="row p-4">
                        <div class="col-md-5">
                            <h4><i class="fa fa-search"></i> Create Course</h4><br>
                            <div class="form-group row mb-3">
                                <label class="col-sm-3">Subject</label>
                                <vs-input class="col-sm-9" placeholder="e.g. English"></vs-input>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-sm-3">Code</label>
                                <vs-input class="col-sm-9" placeholder="e.g. E01"></vs-input>
                            </div>
                            <div class="d-flex   justify-content-between  ">
                                <div class="form-group mx-1 flex-1  mdInput mb-3">
                                    <label >FM (T)</label>
                                    <vs-input></vs-input>
                                </div>

                                <div class="form-group  mx-1 flex-1 mdInput mb-3">
                                    <label >PM (T)</label>
                                    <vs-input > </vs-input>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="form-group mx-1 flex-1 mdInput mb-3">
                                    <label >FM (P)</label>
                                    <vs-input  ></vs-input>
                                </div>

                                <div class="form-group mx-1 flex-1 mdInput mb-3">
                                    <label >PM (P)</label>
                                    <vs-input > </vs-input>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-sm-3">Credit Hour</label>
                                <vs-input class="col-sm-9"></vs-input>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-sm-3">Subject Type</label>
                                <v-select class="col-sm-9"> </v-select>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-sm-3">Class Type</label>
                                <v-select class="col-sm-9"> </v-select>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-sm-3">Teacher/Staff</label>
                                <v-select class="col-sm-9"> </v-select>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-sm-3">Description</label>
                                <vs-input class="col-sm-9"> </vs-input>
                            </div>

                            <vs-divider></vs-divider>
                            <vs-button color="#00b8cf"
                                       type="filled"
                                       class="my-round"><i class="fa fa-save bigger-110"></i> Create
                            </vs-button>
                        </div>
                        <div class="col-md-7">
                            <h4 class="header large lighter blue">
                                <i class="fa fa-list" aria-hidden="true"></i>&nbsp;Create Course
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
                                Course Record list on table. Filter Course using the filter.
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
                                        :no-data-message="'No Month data found. Please Filter Month to show.'"
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
        data() {
            return {
                searchData: {},
                tableHeader: [
                    {name: 'Email', field: 'email', sort_key: 'email'},
                    {name: 'Name', field: 'name', sort_key: 'name'},
                    {name: 'Mobile', field: 'mobile'},
                    {name: 'PID'},
                ],
            }
        }
    }
</script>

<style scoped>

</style>
