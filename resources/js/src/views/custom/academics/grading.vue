<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Grading Scale Manager</h2>
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
                               <br>
                               <h4><i class="fa fa-search"></i>Create Grading Scale</h4><br>
                               <div class="form-group  row">
                                   <label class="col-sm-2">Title</label>
                                        <div class="col-sm-10">
                                            <vs-input class="w-100" placeholder="e.g. University Level"></vs-input>
                                        </div>
                               </div>
                               <div>
                                   <table class="table">
                                       <thead>
                                       <tr>
                                           <th>Name</th>
                                           <th>From(%)</th>
                                           <th>To(%)</th>
                                           <th>Point</th>
                                           <th>Desc.</th>
                                           <th>
                                               <vs-button type="filled"
                                                          size="medium"
                                                          class="my-round"
                                                          @click="addRow"
                                               >
                                                   <i class="fa fa-plus"></i>
                                                   <br>
                                                   Add</vs-button>
                                           </th>
                                       </tr>
                                       </thead>

                                       <tbody class="ui-sortable" v-if="gradeList.length>0">
                                       <tr v-for="(list,i) in gradeList" class="ow-tr" :key="i">
                                           <td><vs-input v-model="list.name"></vs-input></td>
                                           <td><vs-input v-model="list.from"></vs-input></td>
                                           <td><vs-input v-model="list.to"></vs-input></td>
                                           <td><vs-input v-model="list.point"></vs-input></td>
                                           <td><vs-textarea v-model="list.desc"></vs-textarea></td>
                                           <td><vs-button class="rounded" color="danger" @click="removeList(i)">
                                               <i class="fa fa-trash"></i>
                                           </vs-button></td>
                                       </tr>
                                       </tbody>
                                   </table>
                               </div>
                               <vs-divider></vs-divider>
                               <vs-button color="#00b8cf"
                                          type="filled"
                                          class="my-round"
                                          @click="create"
                               >
                                   <i class="fa fa-save bigger-110"></i> Create
                               </vs-button>
                           </div>
                           <div class="col-md-7">
                               <h4 class="header large lighter blue">
                                   <i class="fa fa-list" aria-hidden="true"></i>&nbsp;Grading Scale List
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
                                   Grading Scale Record list on table. Filter Grading Scale using the filter.
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
                gradeList:[]
            }
        },
        methods:{
            addRow(){
                this.gradeList.push({name:'',from:'',to:'',point:'',desc:''})
                console.log(this.gradeList)
            },
            removeList(idx){
                this.gradeList.splice(idx,1)
            },
            create(){
                console.log(this.gradeList)
            }
        }
    }
</script>

<style scoped>

</style>
