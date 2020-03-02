<template>
    <div>
        <div class="row mx-0">
            <div class="col-md-12">
                <h2 class="pageTitle">Resident Manager</h2>
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
            <vs-card>
                <div class="row mx-0">
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
                    <vs-divider class="mx-3"></vs-divider>
                    <div class="col-md-12"><h4>Create Hostel</h4></div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-between flex-wrap">
                            <p class="flex-1">Hostel</p>
                            <vs-input class="flex-2 "></vs-input>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap">
                            <p class="flex-1">Contact Detail</p>
                            <vs-textarea class="flex-2 " height="100px"></vs-textarea>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap">
                            <p class="flex-1">Warden</p>
                            <vs-input class="flex-2 "></vs-input>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap">
                            <p class="flex-1">Type</p>
                            <v-select class="flex-2 "></v-select>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap">
                            <p class="flex-1">Total Room</p>
                            <vs-input class="flex-2 "></vs-input>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-between flex-wrap">
                            <p class="flex-1">Address</p>
                            <vs-input class="flex-2 "></vs-input>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap">
                            <p class="flex-1">Description</p>
                            <vs-textarea class="flex-2 " height="100px"></vs-textarea>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap">
                            <p class="flex-1">Warden Contact</p>
                            <vs-input class="flex-2 "></vs-input>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap">
                            <p class="flex-1">Status</p>
                            <v-select class="flex-2 "></v-select>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap">
                            <p class="flex-1">Room Type</p>
                            <v-select class="flex-2 "></v-select>
                        </div>
                    </div>
                    <vs-divider class="mx-3"></vs-divider>
                    <div class="row mx-0">
                        <vs-button class="my-round mx-2" color="warning">Reset</vs-button>
                        <vs-button class="my-round mx-2">Save</vs-button>
                        <vs-button class="my-round mx-2" color="#28c76f">Save And Add Another</vs-button>
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

