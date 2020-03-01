<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Download Manager</h2>
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
                            <div class="alert alert-warning alert-dismissible">
                                Info: Please, select target Faculty/Class, Sem./Sec. for download access. Other wise it show all the user.
                            </div>
                            <br>
                            <h4>Create Download</h4><br>
                            <div class="form-group row mb-3">
                                <label class="col-sm-3">Faculty</label>
                                <v-select class="col-sm-9"></v-select>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-sm-3">Sem./Sec.</label>
                                <v-select  class="col-sm-9"></v-select>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-sm-3">Title</label>
                                <vs-input class="col-sm-9"></vs-input>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-sm-3">Select File</label>
                                <vs-input type="file" class="col-sm-9"></vs-input>
                            </div>
                            <div class="form-group mb-3">
                                <label >Description</label>
                                <vs-textarea class="col-sm-12"></vs-textarea>
                            </div>
                            <vs-divider></vs-divider>
                            <vs-button color="#00b8cf"
                                       type="filled"
                                       class="my-round">Upload
                            </vs-button>
                        </div>
                        <div class="col-md-8">
                            <h4 class="header large lighter blue">
                                <i class="fa fa-list" aria-hidden="true"></i> Download List</h4>
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
                                Download Record list on table. Filter Download using the filter.
                            </div>
                            <data-table :headers="tableHeader"
                                        :url="'/student'"
                                        :no-data-message="'No Download data found. Please Filter Download to show.'"
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
