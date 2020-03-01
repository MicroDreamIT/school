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
            </div>
            <vs-card>
                <div class="row mx-0">
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
                    <div class="row w-100">
                        <div class="col-md-12 mb-2">
                            <vs-collapse class="custom-collapse">
                                <vs-collapse-item>
                                    <div slot="header">
                                        <vs-button type="filled"
                                                   color="primary"
                                                   icon="double_arrow"
                                        >
                                            Filter Transport User
                                        </vs-button>
                                    </div>
                                    <div class="filterBox">
                                        <div class="col-md-12 row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Type:</label>
                                                        <v-select/>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Reg No:</label>
                                                        <vs-input placeholder=""
                                                        />
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
                        <div class="col-md-12">
                            <h4 class="header large lighter blue">
                                <i class="fa fa-list" aria-hidden="true"></i>&nbsp;Transport User List
                            </h4>
                            <p>Route</p>
                            <v-select/>
                            <p>Vehicle</p>
                            <v-select/>

                            <div class="clearfix mt-3">
                                <div class="easy-link-menu">
                                    <a class="btn-warning btn-sm bulk-action-btn">
                                        <i class="fa fa-compress" aria-hidden="true"></i>
                                        Shift Time</a>
                                    <a class="btn-success btn-sm bulk-action-btn">
                                        <i class="fa fa-check" aria-hidden="true"></i> Active</a>
                                    <a class="btn-warning btn-sm bulk-action-btn">
                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                        Leave</a>
                                    <a class="btn-danger btn-sm bulk-action-btn">
                                        <i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                                </div>
                            </div>
                            <br>
                            <div class="table-header">
                                Route Record list on table. Filter Route using the filter.
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
                </div>
            </vs-card>
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
