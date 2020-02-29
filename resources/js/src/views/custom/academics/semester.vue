<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Semester/Section Manager</h2>
                <div  role="alert" class="mt-2 alert alert-success alert-dismissible display-block">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <i class="ace-icon fa fa-hand-o-right"></i>
                    Please, Create Year and Active
                </div>
            </div>
            <div class="col-md-12">
                <vs-card>
                    <div class="row p-4">
                        <div class="col-md-4">
                            <h4>
                                <i class="fa fa-search"></i>
                                Create Semester/Section</h4>
                            <br>
                            <div class="form-group row">
                                <label class="col-sm-3">Sem./Sec.</label>
                                <vs-input class="col-sm-7"></vs-input>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3">Grading Type</label>
                                <vs-select class="col-sm-7"></vs-select>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3">Course Fint and Add</label>
                                <vs-select class="col-sm-7"></vs-select>
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
                                           class="my-round">Create
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
        components: {

        },
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
            }
        }
    }
</script>

<style scoped>

</style>
