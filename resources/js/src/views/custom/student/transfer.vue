<template>
    <div>
        <div class="row">
            <div class="col-md-12 mb-2">
                <h2 class="pageTitle">Details</h2>
            </div>
            <div class="col-md-12">
                <div class="row mx-0">
                    <router-link :to="'/student'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            Detail
                        </vs-button>
                    </router-link>
                    <router-link :to="'/student/registration'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Registration
                        </vs-button>
                    </router-link>
                    <router-link :to="'/student/import'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-upload" aria-hidden="true"></i>
                            Bulk Registration
                        </vs-button>
                    </router-link>
                    <router-link :to="'/student/transfer'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-exchange" aria-hidden="true"></i>
                            Transfer
                        </vs-button>
                    </router-link>
                    <router-link :to="'/student/document'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-files-o" aria-hidden="true"></i>
                            Documents
                        </vs-button>
                    </router-link>
                    <router-link :to="'/student/note'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-sticky-note" aria-hidden="true"></i>
                            Notes
                        </vs-button>
                    </router-link>
                    <router-link :to="'/account/fees'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-calculator" aria-hidden="true"></i>
                            Balance Fees
                        </vs-button>
                    </router-link>
                    <router-link :to="'/library/student'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-calculator" aria-hidden="true"></i>
                            Library
                        </vs-button>
                    </router-link>
                    <router-link :to="'/attendance/student'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            Attendance
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
            <div class="col-md-12">
                <vs-card>
                    <div class="row p-2">
                        <div class="col-md-12 ">
                            <h4>Transfer</h4>
                            <student-table :headers="studentHeader"
                                           :tableHeader="'Student List'"
                                           :suggestText="'Student Record list on table. Filter Students using the filter.'"
                                           :url="'/json/student/'"
                                           :noDataMessage="'No Student data found. Please Filter Student to show.'"
                                           :hasSearch="false"
                                           :has-multiple="true"
                                           :has-pagination="true"
                                           :filterSection="true"
                                           :printSection="false"
                                           :actionBtn="false"
                                           :transferSection="true"
                            >
                                <template slot="items" slot-scope="props">
                                    <vs-td :data="props.data.faculty" class="pointer-none">
                                        {{props.data.faculty}}
                                    </vs-td>

                                    <vs-td :data="props.data.semester">
                                        {{props.data.semester}}
                                    </vs-td>
                                    <vs-td :data="props.data.reg_date">
                                        {{$root.parseDate(props.data.reg_date)}}
                                    </vs-td>
                                    <vs-td :data="props.data.reg_date">
                                        {{props.data.reg_no}}
                                    </vs-td>

                                    <vs-td :data="props.data.first_name">
                                        <a @click.stop="viewItems(props.data.id)"
                                           class="pointer-all text-primary"
                                           title="View"
                                        >
                                            {{props.data.first_name+' '+props.data.middle_name+''+props.data.last_name}}
                                        </a>

                                    </vs-td>
                                    <vs-td>
                                        <div class="d-flex">
                                            {{props.data.academic_status}}
                                            <vs-switch color="success"
                                                       :checked="props.data.status=='active'?true:false"
                                                       @click.stop="changeStatus(props.data.id)"
                                                       class="pointer-all ml-2"
                                            >
                                                <span slot="on">Active</span>
                                                <span slot="off">In-Active</span>
                                            </vs-switch>
                                        </div>
                                    </vs-td>

                                </template>
                            </student-table>
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
                studentHeader: [
                    {name: 'Faculty/Class', sort_key: 'faculty'},
                    {name: 'Sem./Sec.', sort_key: 'semester'},
                    {name: 'Reg.Date', sort_key: 'reg_date'},
                    {name: 'Reg.Num.', sort_key: 'reg_no'},
                    {name: 'Name Of student', sort_key: 'first_name'},
                    {name: 'status', sort_key: ''},
                ],
                notification: '',
            }
        },
        methods: {
            viewItems(id) {
                this.$router.push({name: 'studentView', params: {id: id}})
            },

            changeStatus() {

            },
        }

    }


</script>

<style scoped>

</style>
