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
            <div class="col-md-12" v-if="notification">
                <div role="alert"
                     class="mt-2 alert alert-success alert-dismissible display-block"
                >
                    <button type="button"
                            data-dismiss="alert"
                            aria-label="Close"
                            class="close"
                            @click="notification=''"
                    >
                        <span aria-hidden="true">×</span>
                    </button>
                    <i class="ace-icon fa fa-hand-o-right"></i>
                    {{notification}}
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
                                                <vs-input v-model="guardian.first_name"/>
                                            </div>
                                            <div class="col-md-3">
                                                <vs-input v-model="guardian.middle_name"/>
                                            </div>
                                            <div class="col-md-3">
                                                <vs-input v-model="guardian.last_name"/>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-2">
                                                Eligibility
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="guardian.eligibility"/>
                                            </div>
                                            <div class="col-md-2">
                                                Occupation
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="guardian.occupation"/>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-2">
                                                Office
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="guardian.office"/>
                                            </div>
                                            <div class="col-md-2">
                                                Office Number
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="guardian.office_number"/>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-2">
                                                Residence Number
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="guardian.residence_number"/>
                                            </div>
                                            <div class="col-md-2">
                                                Mobile 1
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="guardian.mobile_1"/>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-2">
                                                Mobile 2
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="guardian.mobile_2"/>
                                            </div>
                                            <div class="col-md-2">
                                                E-mail
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="guardian.email"/>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-2">
                                                Relation
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="guardian.relation"/>
                                            </div>
                                            <div class="col-md-2">
                                                Guardian Address
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="guardian.address"/>
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
                                                  v-model="guardian.profile_picture">
                                        </vs-input>
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-center">
                                        <img  class="img-responsive"
                                             width="100px"
                                              :src="guardian.profile_picture"
                                              v-if="guardian.profile_picture"/>
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
                            <vs-button class="my-round mx-2" color="warning">Reset</vs-button>
                            <vs-button class="my-round mx-2">Save</vs-button>
                            <vs-button class="my-round mx-2" color="#28c76f">Save And Add Another</vs-button>
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
                notification: '',

            }
        },
        methods: {

        }
    }
</script>

<style scoped>

</style>
