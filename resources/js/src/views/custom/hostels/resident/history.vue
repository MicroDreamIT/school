<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Resident Manager </h2>
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
                <vs-divider></vs-divider>
            </div>
            <div class="col-md-12">
                <vs-card>
                    <div class="row p-4">
                        <div class="mb-2 col-md-12">
                            <router-link :to="'/hostel/resident'">
                                <vs-button type="filled" class="smBtn">Detail</vs-button>
                            </router-link>
                            <router-link :to="'/hostel/resident/add'">
                                <vs-button type="filled" class="smBtn">Registration</vs-button>
                            </router-link>
                            <router-link :to="'/hostel/resident/history'">
                                <vs-button type="filled" class="smBtn">History</vs-button>
                            </router-link>
                        </div>
                        <div class="col-md-12">
                            <vs-collapse class="custom-collapse">
                                <vs-collapse-item>
                                    <div slot="header">
                                        <vs-button type="filled"
                                                   color="primary"
                                                   icon="double_arrow"
                                                   class="rounded"
                                        >
                                            Filter Resident History
                                        </vs-button>
                                        <br>
                                    </div>
                                    <div class="filterBox">
                                        <div class="row ">
                                           <div class="col-md-4">
                                               <div class="form-group mb-3">
                                                   <label >Type</label>
                                                   <v-select ></v-select>
                                               </div>
                                           </div>
                                           <div class="col-md-4">
                                               <div class="form-group mb-3">
                                                   <label >Reg No</label>
                                                   <v-select ></v-select>
                                               </div>
                                           </div>
                                           <div class="col-md-4">
                                               <div class="form-group mb-3">
                                                   <label >Year</label>
                                                   <v-select ></v-select>
                                               </div>
                                           </div>
                                           <div class="col-md-4">
                                               <div class="form-group mb-3">
                                                   <label >History Type</label>
                                                   <v-select ></v-select>
                                               </div>
                                           </div>
                                           <div class="col-md-4">
                                               <div class="form-group mb-3">
                                                   <label >Hostel</label>
                                                   <v-select ></v-select>
                                               </div>
                                           </div>
                                           <div class="col-md-4">
                                               <div class="form-group mb-3">
                                                   <label >Room</label>
                                                   <v-select ></v-select>
                                               </div>
                                           </div>
                                           <div class="col-md-4">
                                               <div class="form-group   mb-3">
                                                   <label >Bed</label>
                                                   <v-select ></v-select>
                                               </div>
                                           </div>
                                        </div>
                                        <vs-divider></vs-divider>
                                        <div class="col-md-12 my-4 pl-0">
                                            <vs-button type="filled"
                                                       color="#00b8cf"
                                                       icon="double_arrow"
                                                       @click="alert(searchData)"
                                            >
                                                Filter
                                            </vs-button>
                                        </div>
                                    </div>
                                </vs-collapse-item>
                            </vs-collapse>
                        </div>
                        <div class="col-md-12">
                            <h4 class="header large lighter blue">
                                <i class="fa fa-list" aria-hidden="true"></i>&nbsp;Resident History List</h4>
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
                                Resident Record list on table. Filter Resident using the filter.
                            </div>
                            <data-table :headers="tableHeader"
                                        :url="'/student'"
                                        :no-data-message="'No Hostel data found. Please Filter Hostel to show.'"
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
