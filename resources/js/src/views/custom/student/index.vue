<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Details</h2>
                <div class="p-2">
                    <router-link :to="'/student'">
                        <vs-button type="filled" class="smBtn">Primary</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">Primary</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">Primary</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">Primary</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">Primary</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">
                            Primary
                        </vs-button>
                    </router-link>

                </div>
            </div>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
                <vs-card>
                    <div class="row p-4">
                        <div class="col-md-12 mb-2">
                            <vs-collapse class="custom-collapse">
                                <vs-collapse-item>
                                    <div slot="header">
                                        <vs-button type="filled"
                                                   color="primary"
                                                   icon="double_arrow"
                                        >
                                            Filter Students
                                        </vs-button>
                                    </div>
                                    <div class="filterBox">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Reg:</label>
                                                        <input placeholder=""
                                                               class="form-control border-form input-mask-registration"
                                                               autofocus="" name="" type="text"
                                                        >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Batch</label>
                                                        <select class="form-control" name="batch">
                                                            <option value="0">Select Batch</option>
                                                            <option value="1">ACT</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Reg Date From</label>
                                                        <datepicker v-model="searchData.fromRegDate"/>
                                                        <label>To</label>
                                                        <datepicker v-model="searchData.toRegDate"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                       <label>Academic Status:</label>
                                                        <v-select v-model="searchData.academic_status"
																  :options="academic_status"
																  placeholder="Select Academic Status"
														>
                                                        </v-select>
                                                    </div>
                                                    <div class="form-group">
														 <label>Status:</label>
                                                        <v-select v-model="searchData.status"
																  :options="status"
																  placeholder="Select Status"
														>
                                                        </v-select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Faculty/Class</label>
														<v-select v-model="searchData.class"
																  :options="['BTECH']"
																  placeholder="Select Faculty/Class"
														>
                                                        </v-select>

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Sem./Sec.</label>
														<v-select v-model="searchData.sem"
																  :options="['BTECH']"
																  placeholder="Select Sem./Sec."
														>
                                                        </v-select>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row  mb-3">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Religion:</label>
                                                        <input placeholder=""
                                                               class="form-control border-form input-mask-registration"
                                                               autofocus="" name="" type="text"
                                                        >
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Caste:</label>
                                                        <input placeholder=""
                                                               class="form-control border-form input-mask-registration"
                                                               autofocus="" name="" type="text"
                                                        >
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Nationality:</label>
                                                        <input placeholder=""
                                                               class="form-control border-form input-mask-registration"
                                                               autofocus="" name="" type="text"
                                                        >
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Mot.Tongue:</label>
                                                        <input placeholder=""
                                                               class="form-control border-form input-mask-registration"
                                                               autofocus="" name="" type="text"
                                                        >
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
                                    </div>
                                </vs-collapse-item>
                            </vs-collapse>
                        </div>
                        <div class="col-md-12 ">
                            <ow-data-table :headers="tableHeader"
                                           :tableHeader="'Student List'"
                                           :suggestText="'Student Record list on table. Filter Students using the filter.'"
                                           :url="'/student'"
                                           :noDataMessage="'No Student data found. Please Filter Student to show.'"
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
                            </ow-data-table>
                        </div>
                    </div>
                </vs-card>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        components: {
        },
        data() {
            return {
                searchData: {
                    academic_status: null,
                    status: null
                },
                url: '/ajax/student/',
                tableHeader: [
                    {name: 'Email', field: 'email', sort_key: 'email'},
                    {name: 'Name', field: 'name', sort_key: 'name'},
                    {name: 'Mobile', field: 'mobile'},
                    {name: 'PID'},
                ],
                academic_status: ['Back Continue',
                    'Continue',
                    'Drop Out',
                    'New Admission',
                    'Online Registration',
                    'Pass Out</option',
                    'Transfer in',
                    'Transfer Out'],
                status: ['Active', 'In-Active'],
                filterBox: false,
            }
        },

    }


</script>

<style scoped>

</style>
