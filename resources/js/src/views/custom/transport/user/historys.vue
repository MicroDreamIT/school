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
                                                    <select v-model="searchData.user_type" class="form-control">
                                                        <option :value="1">student</option>
                                                        <option :value="2">staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Reg No:</label>
                                                    <vs-input placeholder="reg no" v-model="searchData.reg_no"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Year:</label>
                                                    <select v-model="searchData.year" class="form-control">
                                                        <option :value="year.id" v-for="year in years">{{year.value}}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>History:</label>
                                                    <select v-model="searchData.history_type" class="form-control">
                                                        <option value="Registration">Registration</option>
                                                        <option value="Shift">Shift</option>
                                                        <option value="Leave">Leave</option>
                                                        <option value="Renew">Renew</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Route:</label>
                                                    <select v-model="searchData.route" class="form-control" @change="findVehicle(searchData.route)">
                                                        <option :value="route.id" v-for="route in routes">{{route.value}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Vehicle:</label>
                                                    <select v-model="searchData.vehicle_select" class="form-control">
                                                        <option :value="vehicle.vehicles_id" v-for="vehicle in vehicles">{{vehicle.number}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2 pl-0">
                                        <vs-button type="filled"
                                                   color="#00b8cf"
                                                   icon="double_arrow"
                                                   @click="searchNull()"
                                        >
                                            reset
                                        </vs-button>
                                    </div>
                                </vs-collapse-item>
                            </vs-collapse>
                        </div>

                        <vs-divider></vs-divider>
                        <div class="col-md-12 p-4">

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
                                              :showAction="false"
                                              :showStatus="false"
                                              :actionBtn="false"
                            >
                                <template slot="items" slot-scope="props">
                                    <vs-td>
                                        {{props.data.year}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.route}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.vehicle}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.type}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.reg_no}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.name}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.history}}
                                    </vs-td>
                                    <vs-td>
                                        {{props.data.date}}
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
                    user_type: 0,
                    reg_no: null,
                    year: 0,
                    history_type: 0,
                    route: 0,
                    vehicle_select: 0
                },
                headers: [
                    {name: 'year', field: 'year', sort_key: 'year'},
                    {name: 'route', field: 'route', sort_key: 'route'},
                    {name: 'vehicle', field: 'vehicle', sort_key: 'vehicle'},
                    {name: 'type', field: 'user_type', sort_key: 'user_type'},
                    {name: 'reg no.', field: 'reg_no', sort_key: 'reg_no'},
                    {name: 'name', field: 'name', sort_key: 'name'},
                    {name: 'history', field: 'history_type', sort_key: 'history_type'},
                    {name: 'date', field: 'date', sort_key: 'date'},
                ],
                years: [],
                routes: [],
                vehicles:[]
            }
        },
        watch: {
            searchData: {
                deep: true,
                handler(val) {
                    console.log(val)
                    if (this.$refs.dataTableHistory) {
                        this.$refs.dataTableHistory.getData()
                    }
                },
                immediate: true
            }
        },
        methods: {
            findVehicle(route_id) {
                this.$http.post('/json/transport/find-vehicles', {
                    route_id: route_id
                })
                    .then(res => {
                        this.vehicles = res.data.vehicles
                    })
            },
            searchNull() {
                this.searchData.user_type = 0
                this.searchData.reg_no = null
                this.searchData.year = 0
                this.searchData.history_type = 0
                this.searchData.route = 0
                this.searchData.vehicle_select = 0
            },
            GetReturnValue(arg = null, total = null) {
                // console.log(arg, total)
                let val = arg.map(st => {
                    return {
                        id: st.id,
                        year: st.year.title,
                        route: st.route.title,
                        vehicle: st.vehicle.number,
                        type: st.user_type === 1 ? 'student' : 'staff',
                        reg_no: st.memberdetail[1],
                        name: st.memberdetail[0],
                        history: st.history_type,
                        date: this.$root.formatPicker(st.created_at)
                    }
                });
                // console.log(val)
                this.years = this.$root.objectToArray(total['years'])
                this.routes = this.$root.objectToArray(total['routes'])
                this.$store.dispatch('updateTableData', val)
            },
        }
    }
</script>

<style scoped>

</style>
