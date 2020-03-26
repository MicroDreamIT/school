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
                        <div class="row">
                            <div class="col-md-4">
                                <label>Hostel</label>
                            </div>
                            <div class="col-md-8">
                                <input v-model="forms.name" class="form-control" v-validator="'required'" >
                                <p>{{ errors.first('name') }}</p>
                                <p></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><label>Contact Detail</label></div>
                            <div class="col-md-8">
                                <textarea v-model="forms.contact_detail"
                                          class="form-control"></textarea>
                                <p></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><label>warden</label></div>
                            <div class="col-md-8">
                                <input v-model="forms.warden" class="form-control">
                                <p></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>type</label>
                            </div>
                            <div class="col-md-8">
                                <select v-model="forms.type">
                                    <option value="Boys">Boys</option>
                                    <option value="Girls">Girls</option>
                                    <option value="Both">Both</option>
                                </select>
                                <p></p>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Total Room</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" v-model="forms.rooms">
                                <p></p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <label>
                                    Address
                                </label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" v-model="forms.address">
                                <p></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>
                                    Description
                                </label>
                            </div>
                            <div class="col-md-8">
                                <textarea class="form-control" v-model="forms.description"></textarea>
                                <p></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Warden Contact</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" v-model="forms.warden_contact">
                                <p></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>status</label>
                            </div>
                            <div class="col-md-8">
                                <v-select class="flex-2 " :options="['active','in-active']"></v-select>
                                <p></p>
                            </div>
                        </div>
                        <div class="row">
                            <span class="col-md-4">Room Type</span>
                            <div class="col-md-8">
                                <select v-model="forms.room_type" class="form-control">
                                    <option :value="room.id" v-for="room in room_types">{{room.value}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <vs-divider class="mx-3"></vs-divider>
                    <div class="row mx-0">
                        <vs-button class="my-round mx-2" color="warning" @click="resetting()">Reset</vs-button>
                        <vs-button class="my-round mx-2" @click="posting()">Save</vs-button>
                        <vs-button class="my-round mx-2" color="#28c76f" @click="posting('reset')">Save Add Another</vs-button>
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
                forms: {},
                room_types: {},
                tableHeader: [
                    {name: 'Email', field: 'email', sort_key: 'email'},
                    {name: 'Name', field: 'name', sort_key: 'name'},
                    {name: 'Mobile', field: 'mobile'},
                    {name: 'PID'},
                ],
            }
        },
        created() {
            this.$http.get('/json/hostel/add')
                .then(res => {
                    this.room_types = this.$root.objectToArray(res.data.room_type)
                })
                .catch(err => {

                })
        },
        methods: {
            posting(arg=null){
                this.$http.post('/json/hostel/store',this.forms)
                    .then(res => {
                        console.log(res.data)

                    })
                    .catch(err => {
                        console.log(err)
                    })
            },
            resetting(){
                this.forms={}
            }
        }
    }
</script>

<style scoped>

</style>

