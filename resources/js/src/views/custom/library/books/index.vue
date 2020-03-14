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
                        <router-link :to="'/library/book'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                Book Detail
                            </vs-button>
                        </router-link>
                        <router-link :to="'/library/book/add'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                New Book
                            </vs-button>
                        </router-link>
                        <router-link :to="'/library/book/import'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-upload" aria-hidden="true"></i>
                                Bulk Import
                            </vs-button>
                        </router-link>
                        <router-link :to="'/library/book/category'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-pie-chart" aria-hidden="true"></i>
                                Book Category
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
                                    Filter Books
                                </vs-button>
                            </div>
                            <div class="filterBox">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group ">
                                                <label>ISBN Number</label>
                                                <vs-input v-model="searchData.isbn_number" class="w-100">
                                                </vs-input>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group ">
                                                <label>Code</label>
                                                <vs-input v-model="searchData.name" class="w-100">
                                                </vs-input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group ">
                                                <label>Category</label>
                                                <v-select v-model="searchData.account_No">
                                                </v-select>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group ">
                                                <label>Book Name</label>
                                                <vs-input v-model="searchData.bank" class="w-100">
                                                </vs-input>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group ">
                                                <label>Author</label>
                                                <vs-input v-model="searchData.account_name" class="w-100">
                                                </vs-input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group ">
                                                <label>Rack Location</label>
                                                <vs-input v-model="searchData.account_No" class="w-100">
                                                </vs-input>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group ">
                                                <label>Language</label>
                                                <vs-input v-model="searchData.bank" class="w-100">
                                                </vs-input>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group ">
                                                <label>Publisher</label>
                                                <vs-input v-model="searchData.account_name" class="w-100">
                                                </vs-input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group ">
                                                <label>Publish Year</label>
                                                <vs-input v-model="searchData.account_No" class="w-100">
                                                </vs-input>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group ">
                                                <label>Edition</label>
                                                <vs-input v-model="searchData.bank" class="w-100">
                                                </vs-input>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group ">
                                                <label>Series</label>
                                                <vs-input v-model="searchData.account_name" class="w-100">
                                                </vs-input>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group ">
                                                <label>Edition Year</label>
                                                <vs-input v-model="searchData.account_No" class="w-100">
                                                </vs-input>
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
                        Books List
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
                        Books Record list on table. Filter Books using the filter.
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
                    <vs-table
                            v-model="selected"
                            pagination
                            :max-items="10"
                            :data="mainItem"
                            description
                            search
                            :multiple="true"
                            :noDataText="'No Book data found. Please Filter Book to show.'"
                            description-title="Showing"
                    >

                        <template slot="thead">
                            <vs-th>S.N.</vs-th>
                            <vs-th :sort-key="thead.sort_key?thead.sort_key:''" v-for="(thead,indx) in tableHeader"
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
                            </vs-tr>
                        </template>

                    </vs-table>
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
                    {name: 'Date', sort_key: ''},
                    {name: 'Ledger/Head', sort_key: ''},
                    {name: 'Dr Amount', sort_key: ''},
                    {name: 'Cr Amount', sort_key: ''},
                    {name: 'Description', sort_key: ''},
                    {name: 'Action', sort_key: ''},
                ],
                searchData: {},
                mainItem: []

            }
        },
        methods: {
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
