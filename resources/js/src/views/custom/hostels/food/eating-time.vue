<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Eating Time Manager</h2>
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
            <vs-card>
                <div class="row mx-0">
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
                    </div>
                    <div class="col-md-4">
                        <h4>Create Eating Time</h4>
                        <div class="d-flex justify-content-between flex-wrap">
                            <p class="flex-1">Title</p>
                            <vs-input class="flex-2 text-uppercase"></vs-input>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap">
                            <p class="flex-1">Time</p>
                            <vs-input class="flex-2 text-uppercase"></vs-input>
                        </div>
                        <vs-divider></vs-divider>
                        <vs-button color="#00b8cf"
                                   type="filled"
                                   class="my-round">Create
                        </vs-button>
                    </div>
                    <div class="col-md-8">
                        <h4 class="header large lighter blue">
                            <i class="fa fa-list" aria-hidden="true"></i>&nbsp;Eating Time List</h4>
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
                            Eating Time Record list on table. Filter Eating Time using the filter.
                        </div>
                        <data-table :headers="tableHeader"
                                    :url="'/student'"
                                    :no-data-message="'No Eating Time data found. Please Filter Eating Time to show.'"
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
