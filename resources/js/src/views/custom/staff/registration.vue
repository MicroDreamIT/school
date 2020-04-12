<template>
    <div class="row">
        <div class="col-md-12 mb-2">
            <h2 class="pageTitle">Staff Manager</h2>
        </div>
        <staff-navigation></staff-navigation>
        <vs-divider class="mx-3"/>
        <div class="col-md-12 p-0">
            <vs-card class="p-3">
                <div class="row p-2">
                    <h4 class="card-title">Staff Registration
                    </h4>
                    <div class="col-md-12">
                        <vs-tabs class="custom-tab mt-2">
                            <vs-tab label="General Information">
                                <div>
                                                <span class="badge badge badge-danger badge-pill mr-2">
													Red mark input are required. </span>
                                    <vs-divider/>
                                    <div class="row my-2">
                                        <div class="col-md-2">
                                            REG.NO.
                                        </div>
                                        <div class="col-md-2">
                                            <vs-input v-model="staff.reg_no" :danger="error.reg_no!==undefined"/>
                                            <p v-if="error.reg_no!==undefined" class="text-danger">{{ error.reg_no[0]
                                                }}</p>
                                        </div>
                                        <div class="col-md-2">
                                            Join Date
                                        </div>
                                        <div class="col-md-2">
                                            <datepicker v-model="staff.join_date"
                                                        :danger="error.join_date!==undefined"/>
                                            <p v-if="error.join_date!==undefined" class="text-danger">{{
                                                error.join_date[0] }}</p>
                                        </div>
                                        <div class="col-md-2">
                                            Designation
                                        </div>
                                        <div class="col-md-2">
                                            <select class="form-control" v-model="staff.designation"
                                                    :danger="error.designation!==undefined">
                                                <option :value="designation.id" v-for="designation in designations">
                                                    {{designation.value}}
                                                </option>
                                            </select>
                                            <p v-if="error.designation!==undefined" class="text-danger">{{
                                                error.designation[0] }}</p>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-md-3">
                                            NAME OF STAFF
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="staff.first_name"
                                                      :danger="error.first_name!==undefined"/>
                                            <p v-if="error.first_name!==undefined" class="text-danger">{{
                                                error.first_name[0] }}</p>
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="staff.middle_name"/>
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="staff.last_name" :danger="error.last_name!==undefined"/>
                                            <p v-if="error.last_name!==undefined" class="text-danger">{{
                                                error.last_name[0] }}</p>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-md-2">
                                            Father Name
                                        </div>
                                        <div class="col-md-4">
                                            <vs-input v-model="staff.father_name"/>
                                        </div>
                                        <div class="col-md-2">
                                            Mother Name
                                        </div>
                                        <div class="col-md-4">
                                            <vs-input v-model="staff.mother_name"/>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-md-2">
                                            Date Of Birth
                                        </div>
                                        <div class="col-md-2">
                                            <vs-input
                                                    v-model="staff.date_of_birth"
                                                    v-mask="'####-##-##'"
                                                    :danger="error.date_of_birth!==undefined"/>
                                            <p v-if="error.date_of_birth!==undefined" class="text-danger">
                                                {{error.date_of_birth[0]}}
                                            </p>

                                        </div>
                                        <div class="col-md-2">
                                            Gender
                                        </div>
                                        <div class="col-md-2">
                                            <vs-select v-model="staff.gender" :options="['MALE','FEMALE','OTHER']" :danger="error.gender!==undefined"/>
                                            <p v-if="error.gender!==undefined" class="text-danger">{{ error.gender[0] }}</p>
                                        </div>
                                        <div class="col-md-2">
                                            Blood Group
                                        </div>
                                        <div class="col-md-2">
                                            <v-select v-model="staff.blood_group"
                                                      :options="['A+','A-','B+','B-','AB+','AB-','O+','O-']"/>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-md-2">
                                            Nationality
                                        </div>
                                        <div class="col-md-2">
                                            <vs-input v-model="staff.nationality"/>
                                        </div>
                                        <div class="col-md-2">
                                            Mother Tongue
                                        </div>
                                        <div class="col-md-2">
                                            <vs-input v-model="staff.mother_tongue"/>
                                        </div>
                                        <div class="col-md-2">
                                            E-mail
                                        </div>
                                        <div class="col-md-2">
                                            <vs-input v-model="staff.email" :danger="error.email!==undefined"/>
                                            <p v-if="error.email!==undefined" class="text-danger">{{ error.email[0] }}</p>
                                        </div>
                                    </div>

                                    <div class="badge badge badge-primary badge-pill  mt-2">Contact
                                    </div>
                                    <vs-divider/>
                                    <div class="row my-2">
                                        <div class="col-md-1">
                                            Phone
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="staff.home_phone"/>
                                        </div>
                                        <div class="col-md-1">
                                            Mobile1
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="staff.mobile_1" :danger="error.mobile_1!==undefined"/>
                                            <p v-if="error.mobile_1!==undefined" class="text-danger">{{ error.mobile_1[0] }}</p>
                                        </div>
                                        <div class="col-md-1">
                                            Mobile2
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="staff.mobile_2"/>
                                        </div>
                                    </div>
                                    <div class="badge badge badge-primary badge-pill  mt-2">Permanent Address
                                    </div>
                                    <vs-divider/>
                                    <div class="row my-2">
                                        <div class="col-md-1">
                                            Address
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="staff.address"/>
                                        </div>
                                        <div class="col-md-1">
                                            State
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="staff.state"/>
                                        </div>
                                        <div class="col-md-1">
                                            Country
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="staff.country"/>
                                        </div>
                                    </div>
                                    <div class="badge badge badge-primary badge-pill  mt-2">Temporary Address
                                    </div>
                                    <vs-checkbox
                                            @change="copyPermanent()"
                                            v-model="copyPerm"
                                            class="mt-2"
                                    >
                                        Temporary Address Same As Permanent Address
                                    </vs-checkbox>
                                    <vs-divider/>
                                    <div class="row my-2">
                                        <div class="col-md-1">
                                            Address
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="staff.temp_address"/>
                                        </div>
                                        <div class="col-md-1">
                                            State
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="staff.temp_state"/>
                                        </div>
                                        <div class="col-md-1">
                                            Country
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="staff.temp_country"/>
                                        </div>
                                    </div>
                                    <div class="badge badge badge-primary badge-pill  mt-2">Qualification Detail
                                    </div>
                                    <vs-divider/>

                                    <div class="row my-2">
                                        <div class="col-md-2">
                                            Qualification
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="staff.qualification" :danger="error.qualification!==undefined"/>
                                            <p v-if="error.qualification!==undefined" class="text-danger">{{ error.qualification[0] }}</p>
                                        </div>
                                        <div class="col-md-2">
                                            Experience
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="staff.experience"/>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-md-2">
                                            Experience Info
                                        </div>
                                        <div class="col-md-4">
                                            <vs-input v-model="staff.experience_info"/>
                                        </div>
                                        <div class="col-md-2">
                                            Other Info
                                        </div>
                                        <div class="col-md-4">
                                            <vs-input v-model="staff.other_info"/>
                                        </div>
                                    </div>


                                </div>
                            </vs-tab>
                            <vs-tab label="Profile Images">
                                <h4>Profile Pictures</h4>
                                <div class="row">
                                    <div class="col-md-3">Staff Profile Picture</div>
                                    <div class="col-md-5">
                                        <vs-input type="file"
                                                  v-model="staff.profile_picture">

                                        </vs-input>
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-center">
                                        <img class="img-responsive"
                                             width="100px"
                                             :src="staff.profile_picture"
                                             v-if="staff.profile_picture"/>
                                        <img class="img-responsive"
                                             width="100px"
                                             src="../../../../../assets/images/profile-default.jpg"
                                             v-else/>
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
    import StaffNavigation from '../../components/navigation/staff-navigation.vue'

    export default {
        components: {
            'staff-navigation': StaffNavigation
        },
        data() {
            return {
                staff: {},
                faculties: [],
                semester: [],
                batch: [],
                academic_status: [],
                copyPerm: false,
                notification: '',
                whoGuardian: '',
                guardian: null,
                guardians: [],
                academicList: [],
                error: [],
                designations: []
            }
        },
        created() {
            this.$http.get('/json/staff/add')
                .then(res => {
                    this.designations = this.$root.objectToArray(res.data.designations)
                    console.log(this.designations)
                })
        },
        methods: {
            posting() {
                this.$http.post('/json/staff/store', this.staff)
                    .then(res => {

                    })
                    .catch(err => {
                        if (err.response) {
                            this.error = err.response.data.errors
                        }
                    })
            },
            copyPermanent() {
                if (this.copyPerm) {
                    this.staff.temp_address = this.staff.address,
                        this.staff.temp_state = this.staff.state,
                        this.staff.temp_country = this.staff.country
                } else {
                    this.staff.temp_address = '',
                        this.staff.temp_state = '',
                        this.staff.temp_country = ''
                }

            },

        }
    }
</script>

<style scoped>

</style>
