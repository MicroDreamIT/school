<template>
    <div>
        <div class="row">
            <div class="col-md-12 mb-2">
                <h2 class="pageTitle">Details</h2>
            </div>
            <div class="col-md-12">
                <div class="row mx-0">
                    <router-link :to="'/student'">
                        <vs-button type="filled" class="smBtn" icon="list">Primary</vs-button>
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
                        <vs-button type="filled" class="smBtn">Primary</vs-button>
                    </router-link>

                </div>
            </div>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
                <vs-card>
                    <div class="row">
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
                                                <div class="col-md-1">REG. NO.</div>
                                                <div class="col-md-2">
                                                    <vs-input class="inputx" v-model="searchData.reg_no"/>
                                                </div>
                                                <div class="col-md-1">REG. Date.</div>
                                                <div class="col-md-3">
                                                    <datepicker v-model="searchData.fromRegDate"/>
                                                    <i class="fa fa-compress"></i>
                                                    <datepicker v-model="searchData.toRegDate"/>
                                                </div>
                                                <div class="col-md-1">
                                                    Status
                                                </div>
                                                <div class="col-md-2 px-0">
                                                    <v-select v-model="searchData.academic_status"
                                                              :options="academic_status"
                                                              :placeholder="'Select Academic Status'"
                                                    >
                                                    </v-select>
                                                </div>
                                                <div class="col-md-2 px-0">
                                                     <v-select v-model="searchData.status"
                                                               :options="status"
                                                               :placeholder="'Select Status'"
                                                     >
                                                    </v-select>
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
                        <div class="col-md-12">
                            <student-table :searchData="searchData" :url="url" :columns="columns"/>
                        </div>
                    </div>
                </vs-card>
            </div>
        </div>

    </div>
</template>

<script>
    import Datepicker from 'vuejs-datepicker';
    import StudentTable from '../component/table/student-table'

    export default {
        components: {
            StudentTable,
            Datepicker
        },
        data() {
            return {
                searchData: {
                    academic_status: null,
                    status:null
                },
                url: '/ajax/student/',
                columns: [
                    {name: 'Name', field: 'name',sort_key:'name'},
                    {name: 'Email', field: 'email',sort_key:'email'},
                    {name: 'Mobile', field: 'mobile'},
                    {name: 'PID'},
                    {name: 'File Number'},
                    {name: 'Status'},
                    {name: 'Action'},
                ],
                academic_status: ['Back Continue', 'Continue', 'Drop Out'],
                status: ['Active', 'In-Active'],
                filterBox: false,
            }
        }
    }
</script>

<style scoped>

</style>
