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
                            <data-table-final :headers="headers"
                                              :tableHeader="'Hostel List'"
                                              :suggestText="'Hostel Record list on table. Filter room type using the filter.'"
                                              :url="'/json/hostel'"
                                              :model="'hostel'"
                                              :noDataMessage="'No room type data found. Please Filter room type to show.'"
                                              :hasSearch="true"
                                              :has-multiple="true"
                                              :has-pagination="true"
                                              :filterSection="true"
                                              ref="dataTable"
                                              :ajaxVariableSet="['hostel']"
                                              @get-return-value="GetReturnValue"
                            >
                                <template slot="items" slot-scope="props">
                                    <vs-td :data="props.data.name">
                                        {{props.data.name}}
                                    </vs-td>
                                    <vs-td :data="props.data.rooms">
                                        {{props.data.rooms}}
                                    </vs-td>
                                    <vs-td :data="props.data.beds">
                                        {{props.data.beds}}
                                    </vs-td>
                                    <vs-td :data="props.data.available_bed">
                                        {{props.data.available_bed}}
                                    </vs-td>
                                    <vs-td :data="props.data.occupied_bed">
                                        {{props.data.occupied_bed}}
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
                returnedValue: [],
                headers: [
                    {name: 'Name', field: 'name', sort_key: 'name'},
                    {name: 'Rooms', field:'rooms', sort_key:''},
                    {name:'Beds', field:'beds', sort_key:''},
                    {name:'Available Bed', field:'available_bed', sort_key:''},
                    {name:'Occupied Bed', field:'occupied_bed', sort_key:''},
                    {name: 'status', field: 'status'},
                    {name: 'Action', sort_key: ''},
                ],
            }
        },

        methods: {
            GetReturnValue(arg = null) {
                let val =  arg.map(st => {
                    return{
                        id:st.id,
                        name: st.name,
                        rooms:st.rooms.length,
                        beds:st.beds.length,
                        available_bed:_.pullAllBy(st.beds,['bed_status',1]).length,
                        occupied_bed:_.pullAllBy(st.beds,['bed_status',2]).length,
                        status:st.status
                    }
                });

                this.$store.dispatch('updateTableData',val)
            },

        }
    }
</script>

<style scoped>

</style>
