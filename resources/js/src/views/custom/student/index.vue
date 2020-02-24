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
                            <vs-button type="filled"
                                       color="primary"
                                       icon="double_arrow">
                                Filter Students
                            </vs-button>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-1">REG. NO.</div>
                                <div class="col-md-2">
                                    <vs-input class="inputx" v-model="searchData.reg_no"/>
                                </div>
                                <div class="col-md-1">REG. Date.</div>
                                <div class="col-md-2">
                                    <datepicker v-model="searchData.fromRegDate"/>
                                    <i class="fa fa-compress"></i>
                                    <datepicker v-model="searchData.toRegDate"/>
                                </div>
                                <div class="col-md-1">
                                    Status
                                </div>
                                <div class="col-md-2">
                                    <select class="custom-select" >
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select class="custom-select" >
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-12">
                            <student-table :searchData="searchData"/>
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
                    academic_status: 'Back Continue'
                },
                academic_status: ['Back Continue', 'Continue', 'Drop Out'],
                status: ['Active', 'In-Active'],
            }
        }
    }
</script>

<style scoped>

</style>
