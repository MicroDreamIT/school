<template>
    <div class="row">
            <div class="col-md-12 mb-2">
                <h2 class="pageTitle">Guardian Manager</h2>
            </div>
            <div class="col-md-12">
                <div class="row mx-0">
                    <router-link :to="'/guardian'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            Detail
                        </vs-button>
                    </router-link>
                    <router-link :to="'/guardian/registration'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Registration
                        </vs-button>
                    </router-link>
                </div>
            </div>

            <vs-divider class="mx-3"/>
        <div class="col-md-12 p-0">
            <vs-card class="p-3">
                <div class="row p-2">
                    <h4 class="card-title">Guardian Registration
                    </h4>
                    <div class="col-md-12">
                        <vs-tabs class="custom-tab mt-2">
                            <vs-tab label="General Information">
                                <div>
                                                <span class="badge badge badge-danger badge-pill mr-2">
													Red mark input are required. </span>
                                    <vs-divider/>
                                        <div class="row my-2">
                                            <div class="col-md-3">
                                                NAME OF Guardian
                                            </div>
                                            <div class="col-md-3">
                                                <vs-input v-model="guardian.guardian_first_name" :danger="error.guardian_first_name!==undefined"/>
                                                <p v-if="error.guardian_first_name!==undefined" class="text-danger">{{ error.guardian_first_name[0] }}</p>
                                                <p></p>
                                            </div>
                                            <div class="col-md-3">
                                                <vs-input v-model="guardian.guardian_middle_name"/>
                                            </div>
                                            <div class="col-md-3">
                                                <vs-input v-model="guardian.guardian_last_name" :danger="error.guardian_last_name!==undefined"/>
                                                <p v-if="error.guardian_last_name!==undefined" class="text-danger">{{ error.guardian_last_name[0] }}</p>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-2">
                                                Eligibility
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="guardian.guardian_eligibility"/>
                                            </div>
                                            <div class="col-md-2">
                                                Occupation
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="guardian.guardian_occupation"/>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-2">
                                                Office
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="guardian.guardian_office"/>
                                            </div>
                                            <div class="col-md-2">
                                                Office Number
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="guardian.guardian_office_number"/>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-2">
                                                Residence Number
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="guardian.guardian_residence_number"/>
                                            </div>
                                            <div class="col-md-2">
                                                Mobile 1
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="guardian.guardian_mobile_1" :danger="error.guardian_mobile_1!==undefined"/>
                                                <p v-if="error.guardian_mobile_1!==undefined" class="text-danger">{{ error.guardian_mobile_1[0] }}</p>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-2">
                                                Mobile 2
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="guardian.guardian_mobile_2"/>
                                            </div>
                                            <div class="col-md-2">
                                                E-mail
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="guardian.guardian_email"/>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-2">
                                                Relation
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="guardian.guardian_relation" :danger="error.guardian_relation!==undefined"/>
                                                <p v-if="error.guardian_relation!==undefined" class="text-danger">{{ error.guardian_relation[0] }}</p>
                                                <p></p>
                                            </div>
                                            <div class="col-md-2">
                                                Guardian Address
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="guardian.guardian_address" :danger="error.guardian_address!==undefined"/>
                                                <p v-if="error.guardian_address!==undefined" class="text-danger">{{ error.guardian_address[0] }}</p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                            </vs-tab>
                            <vs-tab label="Profile Images">
                                <h4>Profile Pictures</h4>
                                <div class="row">
                                    <div class="col-md-3">Guardian Profile Picture</div>
                                    <div class="col-md-5">
                                        <vs-input type="file"
                                                  v-model="guardian.guardian_profile_picture">
                                        </vs-input>
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-center">
                                        <img  class="img-responsive"
                                             width="100px"
                                              :src="guardian.guardian_profile_picture"
                                              v-if="guardian.guardian_profile_picture"/>
                                        <img class="img-responsive"
                                             width="100px"
                                                src="../../../../../assets/images/profile-default.jpg"
                                                v-else />
                                    </div>
                                </div>
                            </vs-tab>
                        </vs-tabs>
                        <vs-divider></vs-divider>
                        <div class="row mx-0">
                            <vs-button class="my-round mx-2" color="warning" @click="guardian={}">Reset</vs-button>
                            <vs-button class="my-round mx-2" @click="posting">Save</vs-button>
                            <vs-button class="my-round mx-2" color="#28c76f" @click="posting('reset')">Save And Add Another</vs-button>
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
                guardian: {},
                error:[]
            }
        },
        created(){

        },
        methods: {
            posting(arg=null){
                this.$http.post('/json/guardian/register', this.guardian)
                    .then(res=>{
                        if(arg){
                            this.guardian={}
                            this.error = []
                            this.$vs.notify({title:res.data[0],text:res.data[1],color:res.data[0],icon:'verified_user'})
                            this.$router.push({path:'/guardian'})
                        }else{
                            this.guardian={}
                            this.error = []
                            this.$vs.notify({title:res.data[0],text:res.data[1],color:res.data[0],icon:'verified_user'})
                        }
                    })
                    .catch(err=>{
                        if(err.response){
                            this.error = err.response.data.errors

                        }
                    })

            }
        }
    }
</script>

<style scoped>

</style>
