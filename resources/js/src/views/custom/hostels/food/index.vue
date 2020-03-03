<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Food Schedule Manager</h2>
                <div class="mb-2">
                    <router-link :to="'/hostel/resident'">
                        <vs-button type="filled" class="smBtn">Resident</vs-button>
                    </router-link>
                    <router-link :to="'/hostel'">
                        <vs-button type="filled" class="smBtn">Hostel</vs-button>
                    </router-link>
                    <router-link :to="'/hostel/food'">
                        <vs-button type="filled" class="smBtn">Food & Meal</vs-button>
                    </router-link>
                </div>
                <vs-divider class="mx-3"></vs-divider>
            </div>
           <div class="col-md-12">
               <vs-card>
                   <div class="row p-4">
                       <div class="mb-2 col-md-12">
                           <router-link :to="'/hostel/food'">
                               <vs-button type="filled" class="smBtn">Food & Meal</vs-button>
                           </router-link>
                           <router-link :to="'/hostel/food/eating-time'">
                               <vs-button type="filled" class="smBtn">Eating Time</vs-button>
                           </router-link>
                           <router-link :to="'/hostel/food/category'">
                               <vs-button type="filled" class="smBtn">Food Category</vs-button>
                           </router-link>
                           <router-link :to="'/hostel/food/item'">
                               <vs-button type="filled" class="smBtn">Food Item</vs-button>
                           </router-link>
                       </div><br>
                       <div class="col-md-4"><br>
                           <h4>Create Food Schedule</h4><br>
                           <div class="forn-group row mb-3">
                               <label class="col-sm-3">Hostels</label>
                               <vs-select class="col-sm-9"></vs-select>
                           </div>
                           <div class="forn-group row mb-3">
                               <label class="col-sm-3">Day</label>
                               <vs-select class="col-sm-9"></vs-select>
                           </div>
                           <div class="forn-group row mb-3">
                               <label class="col-sm-3">Time</label>
                               <vs-select class="col-sm-9"></vs-select>
                           </div>
                           <div class="forn-group row mb-3">
                               <label class="col-sm-3">Find Food Item & Add</label>
                               <vs-select class="col-sm-9"></vs-select>
                           </div>
                           <br>
                           <vs-buttun class="smBtn">Add Food</vs-buttun>
                           <vs-divider></vs-divider>
                           <table class="table">
                               <thead>
                               <tr>
                                   <th>Item</th>
                               </tr>
                               </thead>
                              <tbody>
                                  <tr><td></td></tr>
                              </tbody>
                           </table>
                           <vs-divider></vs-divider>
                           <vs-button color="#00b8cf"
                                      type="filled"
                                      class="my-round">Create
                           </vs-button>
                       </div>
                       <div class="col-md-8">
                           <h4 class="header large lighter blue">
                               <i class="fa fa-list" aria-hidden="true"></i>&nbsp;Food Item List</h4>
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
                               Food Item Record list on table. Filter Food Item using the filter.
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
