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
                    <div class="col-md-12 row">
                        <div class="col-md-4">
                            <br>
                            <h4 class="header large lighter blue">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                Create Book Category
                            </h4><br>
                            <div class="form-group  ">
                                <label class="col-sm-3 ">Title</label>
                                <div class="col-sm-9">
                                    <vs-input v-model="document.reg_no" class="w-100"/>
                                </div>
                            </div>

                            <hr>
                            <button class="btn btn-primary " type="submit">
                                <i class="fa fa-save "></i>
                                Create
                            </button>
                        </div>
                        <div class="col-md-8"><br>

                            <ow-data-table :headers="tableHeader"
                                           :tableHeader="'Book Category List'"
                                           :url="'/json/student/'"
                                           :noDataMessage="'Book Category Record list on table. Filter Book Category using the filter.'"
                                           :has-search="true"
                                           :has-multiple="true"
                                           :has-pagination="true"
                                           :suggestText="'No Book Category data found. Please Filter Book Category to show.'"
                            >
                                <template slot="items" slot-scope="props">
                                    <vs-td :data="props.data.reg_no">
                                        <a @click.stop="viewItems(props.data.id)"
                                           class="pointer-all text-primary"
                                           title="View"
                                        >
                                            {{props.data.reg_no}}
                                        </a>

                                    </vs-td>

                                    <vs-td>
                                        {{props.data.document}}
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

                                    <vs-td>
                                        <a class="btn btn-success btn-sm pointer-all"
                                           title="Edit"
                                           @click.stop="editItems(props.data.id)">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a class="btn btn-danger btn-sm pointer-all"
                                           title="Delete"
                                           @click.stop="deleteItems(props.data.id)">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
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

        data() {
            return {

                tableHeader: [
                    {name: 'Reg. No.', sort_key: 'reg_no'},
                    {name: 'Staff Documents'},
                    {name: 'Status'},
                    {name: 'Action'},
                ],
                notification: '',
                document: {}
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
