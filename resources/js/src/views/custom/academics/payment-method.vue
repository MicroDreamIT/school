<template>
    <div>
       <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Details</h2>
                <h2 class="pageTitle">notification bar</h2>
            </div>
           <vs-card>
               <div class="row">
                   <div class="col-md-4">
                       <div>create payment method</div>
                       <div class="d-flex justify-content-between">
                           <p>status</p>
                           <vs-input></vs-input>
                       </div>
                       <vs-divider></vs-divider>
                       <vs-button color="#00b8cf"
                                  type="filled"
                                  class="my-round">Create
                       </vs-button>
                   </div>
                   <div class="col-md-8">
                       <h4 class="header large lighter blue">
                                <i class="fa fa-list" aria-hidden="true"></i>&nbsp;Students
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
                                Students Record list on table. Filter Students using the filter.
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

           </vs-card>
       </div>
    </div>
</template>

<script>
    import studentTable from '../component/table/student-table'
    export default {
        components:{
          studentTable
        },
        name: "payment-method",
        data(){
            return{
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
