<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Hostel Manager</h2>
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
                            <router-link :to="'/hostel'">
                                <vs-button type="filled" class="smBtn">Detail</vs-button>
                            </router-link>
                            <router-link :to="'/hostel/add'">
                                <vs-button type="filled" class="smBtn">Add Hostel</vs-button>
                            </router-link>
                            <router-link :to="'/hostel/room-type'">
                                <vs-button type="filled" class="smBtn">Room Type</vs-button>
                            </router-link>
                            <router-link :to="'/bed-status'">
                                <vs-button type="filled" class="smBtn">Bed status</vs-button>
                            </router-link>
                        </div>
                        <div class="col-md-12">
                            <h4 class="header large lighter blue">
                                <i class="fa fa-list" aria-hidden="true"></i>&nbsp;Hostel List</h4>
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
                                Hostel Record list on table. Filter Hostel using the filter.
                            </div>
                            <data-table-final :headers="headers"
                                            :tableHeader="'Room Type List'"
                                            :suggestText="'Room type Record list on table. Filter room type using the filter.'"
                                            :url="'/json/hostel'"
                                            :noDataMessage="'No room type data found. Please Filter room type to show.'"
                                            :hasSearch="true"
                                            :has-multiple="true"
                                            :has-pagination="true"
                                            :filterSection="true"
                                            ref="dataTable"
                                            :jsonVariableSet="['hostel']"
                                              @get-return-value="GetReturnValue"
                                              :returnedValue="returnedValue"
                            >
                                <template slot="items" slot-scope="props">
                                    <vs-td :data="props.data.title">
                                        {{props.data.title}}
                                    </vs-td>
                                    <vs-td>
                                        <div class="d-flex flex-wrap">
                                            {{props.data.status}}
                                            <vs-switch color="success"
                                                       :checked="props.data.status=='active'?true:false"
                                                       @click.stop="changeStatus(props.data.id,props.data.status)"
                                                       class="pointer-all ml-2"
                                            >
                                                <span slot="on">Active</span>
                                                <span slot="off">In-Active</span>
                                            </vs-switch>
                                        </div>
                                    </vs-td>
                                    <vs-td>
                                        <div class="action-own">
                                            <a class="btn btn-success btn-sm pointer-all"
                                               title="Edit"
                                               @click.stop="editItems(props.data.id, props.data.title)">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a class="btn btn-danger btn-sm pointer-all"
                                               title="Delete"
                                               @click.stop="deleteItems(props.data.id)">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </div>
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
                searchData: {},
                returnedValue:[],
                headers: [
                    {name: 'Name', field: 'name', sort_key: 'name'},
                    {name: 'Mobile', field: 'mobile'},
                    {name: 'PID'},
                ],
            }
        },

        methods:{
            GetReturnValue(arg=null){
                return arg.map(st=>{
                    console.log(st)
                });
            },

        }
    }
</script>

<style scoped>

</style>
