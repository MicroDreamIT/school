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
                    <data-table-final :headers="headers"
                                      :tableHeader="'Book List'"
                                      :suggestText="'Book Record list on table. Filter book using the filter.'"
                                      :url="'/json/library/book'"
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
                            <vs-td :data="props.data.category">
                                {{props.data.category}}
                            </vs-td>
                            <vs-td :data="props.data.title">
                                {{props.data.title}}
                            </vs-td>
                            <vs-td :data="props.data.image">
                                <img :src="'/images/book/' + props.data.image" alt="" width="40px" v-if="props.data.image">
                            </vs-td>
                            <vs-td :data="props.data.author">
                                {{props.data.author}}
                            </vs-td>
                            <vs-td :data="props.data.publisher">
                                {{props.data.publisher}}
                            </vs-td>
                            <vs-td :data="props.data.total">
                                {{props.data.total}}
                            </vs-td>
                            <vs-td :data="props.data.issued">
                                {{props.data.issued}}
                            </vs-td>
                            <vs-td :data="props.data.available">
                                {{props.data.available}}
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
                headers: [
                    {name:'category', sort_key: 'category'},
                    {name: 'name', sort_key: 'title'},
                    {name: 'image', sort_key: 'image'},
                    {name: 'author', sort_key: 'author'},
                    {name: 'publisher', sort_key: 'publisher'},
                    {name: 'total', sort_key: 'total'},
                    {name: 'issued', sort_key: 'issued'},
                    {name: 'available', sort_key: 'available'},
                    {name: 'status'},
                    {name: 'action'},
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
                        category:st.categories_rel.title,
                        title:st.title,
                        image:st.image,
                        author:st.author,
                        publisher:st.publisher,
                        total:st.book_collection.length,
                        issued:_.dropRightWhile(st.book_collection, ['book_status', 2]).length,
                        available:_.dropRightWhile(st.book_collection, ['book_status', 1]).length,
                        status:st.status
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
