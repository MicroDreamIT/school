<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Books Manager
                </h2>
                <div class="p-2">
                    <router-link :to="'/library/book'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            Book Detail
                        </vs-button>
                    </router-link>
                    <router-link :to="'/library/issue-history'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-history" aria-hidden="true"></i>
                            Issue History
                        </vs-button>
                    </router-link>
                    <router-link :to="'/library/member'">

                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            Membership
                        </vs-button>
                    </router-link>
                    <router-link :to="'/library/student'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            Students Member
                        </vs-button>
                    </router-link>
                    <router-link :to="'/library/staff'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            Staffs Member
                        </vs-button>
                    </router-link>
                    <router-link :to="'/library/return-over'">
                        <vs-button type="filled" class="smBtn" color="warning">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            Return Period Over
                        </vs-button>
                    </router-link>

                </div>
            </div>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
                <vs-card>
                    <div class="p-2">
                        <router-link :to="'/library/member'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                Member Detail
                            </vs-button>
                        </router-link>
                        <router-link :to="'/library/member/add'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                New Member
                            </vs-button>
                        </router-link>
                    </div>
                    <vs-divider/>

                    <vs-collapse class="custom-collapse">
                        <vs-collapse-item>
                            <div slot="header">
                                <vs-button type="filled"
                                           color="primary"
                                           icon="double_arrow"
                                           class="rounded"
                                >
                                    Filter Members
                                </vs-button>
                            </div>
                            <div class="filterBox">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group ">
                                                <label>Member Type</label>
                                                <v-select v-model="searchData.isbn_number" >
                                                </v-select>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group ">
                                                <label>REG. NO.</label>
                                                <vs-input v-model="searchData.name" class="w-100">
                                                </vs-input>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group ">
                                                <label>Status</label>
                                                <v-select v-model="searchData.status"
                                                          :options="['active','in-active']"
                                                          placeholder="Select Status"
                                                          class="status-select">
                                                </v-select>
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
                    <h4 class="header large lighter blue mt-4">
                        <i class="fa fa-list" aria-hidden="true"></i>&nbsp;
                        Members List
                    </h4>
                    <div class="easy-link-menu d-flex flex-wrap">
                        <a class="btn-success btn-sm bulk-action-btn  m-1" @click.prevent="doActive">
                            <i class="fa fa-check"></i>
                            Active
                        </a>
                        <a class="btn-warning btn-sm bulk-action-btn m-1" @click.prevent="doInActive">
                            <i class="fa fa-remove"></i>
                            In-Active
                        </a>
                        <a class="btn-danger btn-sm bulk-action-btn m-1" @click.prevent="doDelete">
                            <i class="fa fa-trash"></i>
                            Delete
                        </a>
                    </div>
                    <br>
                    <div class="table-header">
                        Members Record list on table. Filter Members using the filter.
                    </div>
                    <div class="dt-buttons btn-group action-group my-3">
                        <button class="btn btn-secondary buttons-copy "

                                @click.prevent="doCopy"
                        >
                            <span>Copy</span>
                        </button>
                        <button class="btn btn-secondary buttons-pdf "
                                @click.prevent="doPdf"
                        >
                            <span>PDF</span>
                        </button>
                        <button class="btn btn-secondary"
                                @click.prevent="doJson"
                        >
                            <span>JSON</span>
                        </button>
                        <button class="btn btn-secondary buttons-print"
                                @click.prevent="doPrint"
                        >
                            <span>Print</span>
                        </button>
                    </div>
                    <data-table-final :headers="headers"
                                      :tableHeader="'Book List'"
                                      :suggestText="'Book Record list on table. Filter book using the filter.'"
                                      :url="'/json/library/member'"
                                      :model="'book'"
                                      :noDataMessage="'No Book data found. Please Filter book to show.'"
                                      :hasSearch="true"
                                      :has-multiple="true"
                                      :has-pagination="true"
                                      :filterSection="true"
                                      ref="dataTableBook"
                                      :ajaxVariableSet="['books']"
                                      @get-return-value="GetReturnValue"
                    >
                        <template slot="items" slot-scope="props">
                            <vs-td :data="props.data.user_type">
                                {{props.data.user_type}}
                            </vs-td>
                        </template>
                    </data-table-final>
                </vs-card>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        data() {
            return {
                selected: [],
                tableHeader: [
                    {name: 'user type', sort_key: 'user_type'},
                ],
                searchData: {},
                mainItem: []

            }
        },

        methods: {
            GetReturnValue(arg = null) {
                let val = arg.map(st => {
                    return {
                        id: st.id,
                    }
                });
                this.$store.dispatch('updateTableData', val)
            },
            doFilter() {

            },
            doActive() {

            },
            doInActive() {

            },
            doDelete() {

            },
            doCopy() {
                alert('doing copy')
            },
            doPdf() {
                alert('doing pdf')
            },
            doJson() {
                alert('doing json')
            },
            doPrint() {
                alert('doing print')
            },
        }
    }
</script>

<style scoped>

</style>
