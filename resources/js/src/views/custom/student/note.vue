<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Notes </h2>
                <div class="p-2">
                    <router-link :to="'/student'">
                        <vs-button type="filled" class="smBtn">Primary</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">Primary</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">Primary</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">Primary</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">Primary</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">
                            Primary
                        </vs-button>
                    </router-link>
                
                </div>
            </div>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
                <vs-card>
                    <div class="row p-2">
                        <div class="col-md-12 row">
                            <div class="col-md-4">
                                <br>
                                <h4 class="header large lighter blue">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    Create Student Documents
                                </h4><br>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Reg No</label>
                                    <div class="col-sm-7">
                                        <vs-input/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-7">
                                        <vs-input/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Select File</label>
                                    <div class="col-sm-7">
                                        <vs-input type="file"></vs-input>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-7">
                                        <vs-textarea  />
                                    </div>
                                </div>
                                <hr>
                                <button class="btn btn-info waves-effect waves-light" type="submit">
                                    <i class="fa fa-save "></i>
                                    Create
                                </button>
                            </div>
                            <div class="col-md-8"><br>
                                <h4 class="header large lighter blue">
                                    <i class="fa fa-list" aria-hidden="true"></i> Students List</h4>
                                <div class="clearfix mt-1">
                                    <div class="easy-link-menu">
                                        <a class="btn-success btn-sm bulk-action-btn text-white">
                                            <i class="fa fa-check" aria-hidden="true"></i> Active</a>
                                        <a class="btn-warning btn-sm bulk-action-btn text-white">
                                            <i class="fa fa-remove" aria-hidden="true"></i>
                                            In-Active
                                        </a>
                                        <a class="btn-danger btn-sm bulk-action-btn text-white ml-2">
                                            <i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                                    </div>
                                </div>
                                <br>
                                <div class="table-header">
                                    Student Notes Record list on table. Filter Student Notes using the filter.
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
                                <student-table :headers="tableHeader"
                                               :url="url"
                                               :no-data-message="'No matching records found'"
                                               :searchField="searchData"
                                               :has-search="true"
                                               :has-multiple="true"
                                               :has-pagination="true"
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
                                </student-table>
                            </div>
                        </div>
                    </div>
                </vs-card>
            </div>
        </div>
    
    </div>
</template>

<script>
    import Datepicker from 'vuejs-datepicker';
    import StudentTable from '../component/table/student-table'

    export default {
        components: {
            StudentTable,
            Datepicker
        },
        data() {
            return {
                searchData: {
                    academic_status: null,
                    status: null
                },
                url: '/ajax/student/',
                tableHeader: [
                    {name: 'Email', field: 'email', sort_key: 'email'},
                    {name: 'Name', field: 'name', sort_key: 'name'},
                    {name: 'Mobile', field: 'mobile'},
                    {name: 'PID'},
                ],
                academic_status: ['Back Continue',
                    'Continue',
                    'Drop Out',
                    'New Admission',
                    'Online Registration',
                    'Pass Out</option',
                    'Transfer in',
                    'Transfer Out'],
                status: ['Active', 'In-Active'],
                filterBox: false,
            }
        },

    }


</script>

<style scoped>

</style>
