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
                                                   <v-select/>
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
                           <data-table :headers="tableHeader"
                                       :url="'/student'"
                                       :no-data-message="'No Route data found. Please Filter Route to show.'"
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
