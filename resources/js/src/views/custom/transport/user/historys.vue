<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Transport User Manger</h2>
                <div class="mb-3">
                    <router-link :to="'/transport/user'">
                        <vs-button type="filled" class="smBtn">User</vs-button>
                    </router-link>
                    <router-link :to="'/transport/route'">
                        <vs-button type="filled" class="smBtn">Route</vs-button>
                    </router-link>
                    <router-link :to="'/transport/vehicle'">
                        <vs-button type="filled" class="smBtn">Vehicle</vs-button>
                    </router-link>
                </div>
            </div>
           <div class="col-md-12">
               <vs-card>
                   <div class="row mx-0">
                       <div class="col-md-12 p-4">
                           <h4 class=""><i class="fa fa-list"></i> Transport History List</h4>
                           <router-link :to="'/transport/user'">
                               <vs-button type="filled" class="smBtn">Detail</vs-button>
                           </router-link>
                           <router-link :to="'/transport/user/add'">
                               <vs-button type="filled" class="smBtn">Registration</vs-button>
                           </router-link>
                           <router-link :to="'/transport/user/history'">
                               <vs-button type="filled" class="smBtn">History</vs-button>
                           </router-link>
                       </div>
                       <br>
                       <div class="col-md-12 mb-2">
                           <vs-collapse class="custom-collapse">
                               <vs-collapse-item>
                                   <div slot="header">
                                       <vs-button type="filled"
                                                  color="primary"
                                                  icon="double_arrow"
                                                  class="rounded"
                                       >
                                           Filter Transport User
                                       </vs-button>
                                   </div>
                                   <div class="filterBox">
                                       <div class="col-md-12 row">
                                           <div class="col-md-3">
                                               <div class="form-group">
                                                   <label>Type:</label>
                                                   <v-select/>
                                               </div>
                                           </div>
                                           <div class="col-md-3">
                                               <div class="form-group">
                                                   <label>Reg No:</label>
                                                   <vs-input placeholder=""
                                                   />
                                               </div>
                                           </div>
                                           <div class="col-md-3">
                                               <div class="form-group">
                                                   <label>Year:</label>
                                                   <select v-model="searchData.year" class="form-control">
                                                       <option :value="year.id" v-for="year in years">{{year.value}}</option>
                                                   </select>
                                               </div>
                                           </div>
                                           <div class="col-md-3">
                                               <div class="form-group">
                                                   <label>History:</label>
                                                   <v-select/>
                                               </div>
                                           </div>
                                           <div class="col-md-6">
                                               <div class="form-group">
                                                   <label>Vehicle:</label>
                                                   <v-select/>
                                               </div>
                                           </div>
                                           <div class="col-md-6">
                                               <div class="form-group">
                                                   <label>Route:</label>
                                                   <v-select/>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-md-12 mb-2 pl-0">
                                       <vs-button type="filled"
                                                  color="#00b8cf"
                                                  icon="double_arrow"
                                                  @click="alert(searchData)"
                                       >
                                           Filter
                                       </vs-button>
                                   </div>
                               </vs-collapse-item>
                           </vs-collapse>
                       </div>
                     
                       <vs-divider></vs-divider>
                       <div class="col-md-12 p-4">
                           <h4 class="header large lighter blue">
                               <i class="fa fa-list" aria-hidden="true"></i>&nbsp;Transport History List
                           </h4>
        
                           <div class="table-header">
                               Transport User Record list on table. Filter Transport User using the filter.
                           </div>
                           <data-table-final :headers="headers"
                                             :tableHeader="'History List'"
                                             :suggestText="'History Record list on table. Filter room type using the filter.'"
                                             :url="'/json/transport/user/history'"
                                             :model="'vehicle'"
                                             :noDataMessage="'No history data found. Please Filter history to show.'"
                                             :hasSearch="true"
                                             :has-multiple="true"
                                             :has-pagination="true"
                                             :filterSection="true"
                                             :searchData="searchData"
                                             ref="dataTableHistory"
                                             :ajaxVariableSet="['history']"
                                             @get-return-value="GetReturnValue"
                           >
                               <template slot="items" slot-scope="props">
                                   <vs-td>

                                   </vs-td>
                                   <vs-td>

                                   </vs-td>
                               </template>
                           </data-table-final>
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
                // user_type=0&reg_no=&year=0&history_type=0&route=0&vehicle_select=0
                searchData: {
                    user_type:0,
                    reg_null:null,
                    year:0,
                    history_type:0,
                    route:0,
                    vehicle_select:0
                },
                headers: [
                    {name: 'Email', field: 'email', sort_key: 'email'},
                    {name: 'Name', field: 'name', sort_key: 'name'},
                    {name: 'Mobile', field: 'mobile'},
                    {name: 'PID'},
                ],
                years:[],
                routes:[]
            }
        },
        watch:{
            searchData:{
                deep:true,
                handler(val){
                    console.log(val)
                    this.$refs.dataTableHistory.getData()
                },
                immediate:true
            }
        },
        methods:{
            GetReturnValue(arg = null, total = null) {
                console.log(arg, total)
                let val = arg.map(st => {
                    return {
                        id:st.id
                    }
                });
                console.log(val)
                this.years = this.$root.objectToArray(total['years'])
                this.routes = this.$root.objectToArray(total['routes'])
                this.$store.dispatch('updateTableData', val)
            },
        }
    }
</script>

<style scoped>

</style>
