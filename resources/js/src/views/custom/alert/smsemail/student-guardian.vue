<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">SMS / Email Manager</h2>
                <div>
                    <router-link :to="'/info/notice'">
                        <vs-button type="filled" class="smBtn">Notice</vs-button>
                    </router-link>
                    <router-link :to="'/info/sms-email'">
                        <vs-button type="filled" class="smBtn">Sms/Email</vs-button>
                    </router-link>
                </div>
            </div>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
                <vs-card>
                    <div class="row mx-0">
                        <div class="col-md-12">
                            <br>
                            <h4 class="header large lighter blue">
                                SMS / Email
                            </h4><br>
                        </div>
                        <div class="col-md-12">
                            <router-link :to="'/info/sms-email'">
                                <vs-button type="filled" class="smBtn">Detail</vs-button>
                            </router-link>
                            <router-link :to="'/info/sms-email/add'">
                                <vs-button type="filled" class="smBtn">Group Message</vs-button>
                            </router-link>
                            <router-link :to="'/info/sms-email/student-guardian'">
                                <vs-button type="filled" class="smBtn">Student & Guardian</vs-button>
                            </router-link>
                            <router-link :to="'/info/sms-email/staff'">
                                <vs-button type="filled" class="smBtn">Staff</vs-button>
                            </router-link>
                            <router-link :to="'/info/sms-email/individual'">
                                <vs-button type="filled" class="smBtn">Individual</vs-button>
                            </router-link>
                        </div>
                        <vs-divider class="mx-3"></vs-divider>
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
                        <vs-divider class="mx-3"></vs-divider>
                        <div class="col-md-12 row">
                            <div class="col-md-8">
                                <p>Type</p>
                                <vs-radio v-model="type"  vs-value="sms">Sms</vs-radio>
                                <vs-radio v-model="type" vs-value="email">Email</vs-radio>
                                <p>Message</p>
                                <vs-textarea v-model="message" height="200px"/>
                            </div>
                            <div class="col-md-4">
                                <p>Message Send Groups</p>
                                <vs-checkbox v-model="send_group" class="my-2">Student</vs-checkbox>
                                <vs-checkbox v-model="send_group" class="my-2">Guardian</vs-checkbox>
                                <vs-checkbox v-model="send_group" class="my-2">Father</vs-checkbox>
                                <vs-checkbox v-model="send_group" class="my-2">Mother</vs-checkbox>
                            </div>
                        </div>
                        <vs-divider></vs-divider>
                        <div class="row mx-0 mb-4">
                            <vs-button class="my-round mx-2" color="warning">Reset</vs-button>
                            <vs-button class="my-round mx-2">Send</vs-button>
                        </div>
                        <div class="col-md-12">
                            <h4 class="header large lighter blue">
                                <i class="fa fa-list" aria-hidden="true"></i>&nbsp; SMS / Email List
                             </h4>
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
                                SMS / Email Record list on table. Filter SMS / Email using the filter.
                            </div>
                            <data-table :headers="tableHeader1"
                                        :url="'/student'"
                                        :no-data-message="'No matching records found'"
                                        :searchField="searchData"
                                        :hasSearch="false"
                            >
                                <template slot="items" slot-scope="props">
                                    <vs-td :data="props.data.username">
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

    </div>
</template>

<script>

    export default {
        data() {
            return {
                send_group: null,
                type:'sms',
                message:'',
                searchData:{},
                tableHeader1: [
                    {name: 'Email', field: 'email', sort_key: 'email'},
                    {name: 'Name', field: 'name', sort_key: 'name'},
                    {name: 'Mobile', field: 'mobile'},
                    {name: 'PID'},
                ],
            }
        },

    }


</script>

<style scoped>

</style>
