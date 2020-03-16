<template>
    <div>
        <div class="row">
            <div class="col-md-12 mb-2">
                <h2 class="pageTitle">Exams Manager</h2>
            </div>
            <div class="col-md-12">
                <div class="row mx-0">
                    <router-link :to="'/exam'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            Exam Type
                        </vs-button>
                    </router-link>
                    <router-link :to="'/exam/schedule'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Schedule
                        </vs-button>
                    </router-link>
                    <router-link :to="'/exam/mark-ledger'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-upload" aria-hidden="true"></i>
                            Manage Mark Ledger
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
                    <div class="col-md-12">
                        <router-link :to="'/exam/schedule'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-history" aria-hidden="true"></i>
                                Schedule List
                            </vs-button>
                        </router-link>
                        <router-link :to="'/exam/schedule/add'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                Schedule/Modify
                            </vs-button>
                        </router-link>
                    </div>
                    <vs-divider/>
                    <div class="col-md-12 mb-2">
                        <vs-collapse class="custom-collapse">
                            <vs-collapse-item>
                                <div slot="header">
                                    <vs-button type="filled"
                                               color="primary"
                                               icon="double_arrow"
                                               class="rounded"
                                    >
                                        Filter Exam Schedule
                                    </vs-button>
                                </div>
                                <div class="filterBox">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label>Faculty/Class</label>
                                                    <vs-input v-model="searchData.reg_no" class="w-100">
                                                    </vs-input>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Sem./Sec.</label>
                                                    <v-select :options="designation"
                                                              v-model="searchData.designation">

                                                    </v-select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Year</label>
                                                    <v-select v-model="searchData.status"
                                                              :options="[]"
                                                              placeholder="Select Year"
                                                    >
                                                    </v-select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Month</label>
                                                    <v-select v-model="searchData.status"
                                                              :options="[]"
                                                              placeholder="Select Month"
                                                    >
                                                    </v-select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Exam</label>
                                                    <v-select/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2 pl-0">
                                        <vs-button type="filled"
                                                   color="#00b8cf"
                                                   icon="double_arrow"
                                                   @click.prevent="doFilter"
                                        >
                                            Filter
                                        </vs-button>
                                    </div>
                                </div>
                            </vs-collapse-item>
                        </vs-collapse>
                    </div>
                    <div class="col-md-12 ">
                        <h4 class="header large lighter blue">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            Exam Schedule List
                        </h4>

                        <div class="table-header">
                            Exam Schedule Record list on table. Filter Exam Schedule using the filter.
                        </div>
                    </div>
                    <div class="col-md-12 ">
                        <vs-table
                                pagination
                                :max-items="10"
                                :data="mainItem"
                                description
                                :noDataText="'No Exam Schedule data found. Please Filter Exam Schedule to show.'"
                                description-title="Showing"
                        >

                            <template slot="thead">
                                <vs-th>S.N.</vs-th>
                                <vs-th :sort-key="thead.sort_key?thead.sort_key:''"
                                       v-for="(thead,indx) in tableHeader"
                                       :key="indx">
                                    {{thead.name}}
                                </vs-th>
                            </template>
                            <template slot-scope="{data}">
                                <vs-tr :data="tr" :key="idx" v-for="(tr, idx) in data">
                                    <vs-td>{{mainItem.indexOf(tr)+1}}</vs-td>
                                    <vs-td></vs-td>
                                    <vs-td></vs-td>
                                    <vs-td></vs-td>
                                    <vs-td></vs-td>
                                    <vs-td></vs-td>
                                    <vs-td></vs-td>
                                    <vs-td></vs-td>
                                    <vs-td></vs-td>
                                    <vs-td></vs-td>
                                </vs-tr>
                            </template>

                        </vs-table>
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

                tableHeader: [
                    {name: 'Reg. No.', sort_key: 'reg_no'},
                    {name: 'Student Notes'},
                    {name: 'Status'},
                    {name: 'Action'},
                ],
                notification: '',
                note: {},
                mainItem: [],
                searchData: {}
            }
        },
        methods: {
            viewItems(id) {
                this.$router.push({name: 'studentView', params: {id: id}})
            },
            editItems() {
                alert("hey hasib im edit ")
            },
            deleteItems() {
                alert("hey hasib im delete ")
            },
            changeStatus() {

            },
        }

    }


</script>

<style scoped>

</style>
