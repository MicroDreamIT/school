<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Transport User Manger</h2>
                <div class="mb-2">
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
                <br>
            </div>
            <div class="col-md-12">
                <vs-card>
                    <div class="row p-4">
                        <div class="col-md-12">
                            <h4>Transport User List</h4>
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

                        <vs-divider></vs-divider>
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
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Type:</label>
                                                    <select v-model="searchData.user_type" class="form-control">
                                                        <option :value="1">student</option>
                                                        <option :value="2">staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Reg No:</label>
                                                    <vs-input class="w-100" v-model="searchData.reg_no"></vs-input>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Status:</label>
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
<!--                                    <div class="col-md-12 mb-2 pl-0">-->
<!--                                        <vs-button type="filled"-->
<!--                                                   color="#00b8cf"-->
<!--                                                   icon="double_arrow"-->
<!--                                                   @click="filterData(searchData)"-->
<!--                                        >-->
<!--                                            Filter-->
<!--                                        </vs-button>-->
<!--                                    </div>-->
                                </vs-collapse-item>
                            </vs-collapse>
                        </div>
                        <div class="col-md-12 p-4">
                            <h4 class="header large lighter blue">
                                <i class="fa fa-list" aria-hidden="true"></i>&nbsp;Transport User List
                            </h4><br>
                            <div class="col-md-4">
                                <div class="form-group   mb-3">
                                    <label>Route</label>
                                    <v-select></v-select>
                                </div>
                                <div class="form-group   mb-3">
                                    <label>Vehicle</label>
                                    <v-select></v-select>
                                </div>
                            </div>
                            <div class="clearfix mt-5">
                                <div class="easy-link-menu">
                                    <a class="btn-warning btn-sm bulk-action-btn">
                                        <i class="fa fa-compress" aria-hidden="true"></i>
                                        Shift Time
                                    </a>
                                </div>
                            </div>
                            <br>
                            <div class="table-header">
                                Route Record list on table. Filter Route using the filter.
                            </div>
                            <data-table-final :headers="headers"
                                              :tableHeader="'user List'"
                                              :suggestText="'user Record list on table. Filter room type using the filter.'"
                                              :url="'/json/transport/user'"
                                              :model="'route'"
                                              :noDataMessage="'No user data found. Please Filter room type to show.'"
                                              :hasSearch="true"
                                              :has-multiple="true"
                                              :has-pagination="true"
                                              :filterSection="true"
                                              ref="dataTableTransport"
                                              :ajaxVariableSet="['user']"
                                              @get-return-value="GetReturnValue"
                                              :showAction="false"
                                              :searchData="searchData"
                            >
                                <template slot="items" slot-scope="props">
                                    <vs-td>
                                        {{props.data.route}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.vehicle}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.type===1?'student':'staff'}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.memberreg}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.membername}}
                                    </vs-td>
                                    <vs-td :data="props.data.action">
                                        <div class="action-own">
                                            <a class="btn btn-success btn-sm pointer-all"
                                               title="Edit"
                                               @click.stop="editItems(props.data.id)">
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
                // user_type=1&reg_no=54564&route=3&vehicle_select=2&status=2
                searchData: {
                    user_type: null,
                    reg_no: null,
                    route: null,
                    vehicle_select: null,
                    status: null
                },
                headers: [
                    {name: 'route', field: 'route', sort_key: 'route'},
                    {name: 'vehicle', field: 'vehicle', sort_key: 'vehicle'},
                    {name: 'type', field: 'type', sort_key: 'type'},
                    {name: 'reg', field: 'memberreg', sort_key: 'memberreg'},
                    {name: 'name', field: 'membername', sort_key: 'membername'},
                    {name: 'Status', field: 'status', sort_key: 'status'},
                    {name: 'Action', field: 'action'}
                ],
            }
        },
        watch:{
            searchData:{
                deep:true,
                handler(val){
                    console.log(val)
                    this.$refs.dataTableTransport.getData()
                }
            }
        },
        methods: {
            editItems(id) {
                this.$router.push({name: 'transport.userEdit', params: {id: id}});
            },
            deleteItems() {
            },
            GetReturnValue(arg = null, total = null) {
                let val = arg.map(st => {
                    return {
                        id: st.id,
                        route: st.route.title,
                        vehicle: st.vehicle.fullname,
                        type: st.user_type,
                        membername: st.memberdetail[0],
                        memberreg: st.memberdetail[1],
                        status: st.status
                    }
                });
                this.$store.dispatch('updateTableData', val)
            },
        }
    }
</script>

<style scoped>

</style>
