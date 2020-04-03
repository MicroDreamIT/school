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
                        <div class="row p-4 w-100">
                            <div class="col-md-12">
                                <h4>Transport User</h4><br>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Type:</label>
                                    <select v-model="forms.user_type" :class="{'form-control':true, 'border-danger':error.user_type!==undefined}">
                                        <option :value="1">Student</option>
                                        <option :value="2">staff</option>
                                    </select>
                                    <p v-if="error.user_type!==undefined" class="text-danger">{{ error.user_type[0] }}</p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Reg No:</label>
                                    <vs-input class="w-100" v-model="forms.reg_no" :danger="error.reg_no!==undefined"></vs-input>
                                    <p v-if="error.reg_no!==undefined" class="text-danger">{{ error.reg_no[0] }}</p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Status:</label>
                                    <select :class="{'form-control':true, 'border-danger':error.status!==undefined}" v-model="forms.status" >
                                        <option value="active">active</option>
                                        <option value="in-active">in active</option>
                                    </select>
                                    <p v-if="error.status!==undefined" class="text-danger">{{ error.status[0] }}</p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Route:</label>
                                    <select :class="{'form-control':true, 'border-danger':error.route!==undefined}" v-model="forms.route">
                                        <option :value="route.id" v-for="route in routes">{{route.value}}</option>
                                    </select>
                                    <p v-if="error.route!==undefined" class="text-danger">{{ error.route[0] }}</p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Vehicle:</label>
                                    <select v-model="forms.vehicle_select" :class="{'form-control':true, 'border-danger':error.vehicle_select!==undefined}">
                                        <option :value="vehicle.id" v-for="vehicle in vehicles">
                                            {{vehicle.number}}|{{vehicle.type}}
                                        </option>
                                    </select>
                                    <p v-if="error.vehicle_select!==undefined" class="text-danger">{{ error.vehicle_select[0] }}</p>
                                    <p></p>
                                </div>
                            </div>


                            <vs-divider class="mx-3"></vs-divider>
                            <div class="row mx-0 col-md-12">
                                <vs-button class="my-round mx-2" color="warning" @click="forms={}">Reset</vs-button>
                                <vs-button class="my-round mx-2" @click="posting()">Save</vs-button>
                                <vs-button class="my-round mx-2" color="#28c76f" @click="posting('reset')">Save And Add Another</vs-button>
                            </div>
                        </div>
                        <div>
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
                forms: {},
                routes: [],
                vehicles: [],
                error:[]
            }
        },
        watch: {
            'forms.route': {
                handler(val) {
                    if (val > 0) {
                        this.$http.post('/json/transport/find-vehicles', {
                            route_id: val
                        })
                            .then(res => {
                                this.vehicles = res.data.vehicles
                            })
                    }
                }
            }
        },
        created() {
            this.$http.get('/json/transport/user/add')
                .then(res => {
                    this.routes = this.$root.objectToArray(res.data.routes)
                })
        },
        methods: {
            posting(arg=null){
                console.log(arg)
                this.$http.post('/json/transport/user/store', this.forms)
                    .then(res=>{
                        this.$vs.notify({title:res.data[0],text:res.data[1],color:res.data[0],icon:'verified_user'})
                        if(arg){

                        }else{
                            this.forms={}
                        }
                    })
                    .catch(err=>{
                        if (err.response) {
                            this.error = err.response.data.errors
                        }
                    })
            }
        }
    }
</script>

<style scoped>

</style>
