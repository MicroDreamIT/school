<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Vehicle Manager</h2>
                <div>
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
                    <div class="col-md-4">
                        <h4>Create Vehicle</h4>
                        <div class="d-flex justify-content-between flex-wrap">
                            <p class="flex-1">Number</p>
                            <vs-input class="flex-1 text-uppercase"></vs-input>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap">
                            <p class="flex-1">Type</p>
                           <vs-input class="flex-1 text-uppercase"></vs-input>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap">
                            <p class="flex-1">Model</p>
                            <vs-input class="flex-1 text-uppercase"></vs-input>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap">
                            <p class="flex-1">Desc.</p>
                            <vs-textarea type="file" class="flex-1" height="100px"></vs-textarea>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap">
                            <p class="flex-1">Find Stuff & Add</p>
                            <v-select class="flex-1"></v-select>
                        </div>
                        <vs-divider></vs-divider>
                        <vs-buttun class="smBtn">Add Staff</vs-buttun>
                        <table>
                            <tr>
                                <th>Name</th>
                                <th>Designation</th>
                            </tr>
                            <tr></tr>
                        </table>
                        <vs-divider></vs-divider>
                        <vs-button color="#00b8cf"
                                   type="filled"
                                   class="my-round">Create
                        </vs-button>
                    </div>
                    <div class="col-md-8">
                        <h4 class="header large lighter blue">
                            <i class="fa fa-list" aria-hidden="true"></i>&nbsp;Vehicle List</h4>
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
                           Vehicle Record list on table. Filter Vehicle using the filter.
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
