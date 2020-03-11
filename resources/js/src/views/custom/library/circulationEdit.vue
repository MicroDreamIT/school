<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Library Circulation Manager
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
                    <div class="row mx-3">
                        <div class="col-md-4">
                            <h4 class="header large lighter blue">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                Create Circulation
                            </h4><br>
                            <div class="form-group">
                                <label>User Type</label>

                                    <vs-input class="w-100"/>

                            </div>
                            <div class="form-group">
                                <label>Use Code Prefix</label>

                                    <vs-input class="w-100"/>

                            </div>
                            <div class="form-group">
                                <label>Issue Limit Days</label>

                                    <vs-input type="number"/>

                            </div>
                            <div class="form-group">
                                <label>Issue Limit Book</label>

                                    <vs-input  type="number"/>

                            </div>
                            <div class="form-group">
                                <label>Fine Per days</label>

                                    <vs-input type="number"/>

                            </div>
                            <vs-divider></vs-divider>
                            <button class="btn btn-info waves-effect waves-light">
                                <i class="fa fa-save bigger-110"></i>
                                Create
                            </button>

                        </div>
                        <div class="col-md-8">
                            <h4 class="header large lighter blue mt-4">
                                <i class="fa fa-list" aria-hidden="true"></i>&nbsp;
                                Library Circulation List
                            </h4>
                            <div class="table-header">
                                Library Circulation Record list on table. Filter Library Circulation using the filter.
                            </div>
                            <vs-table
                                    v-model="selected"
                                    pagination
                                    :max-items="10"
                                    :data="mainItem"
                                    description
                                    search
                                    :multiple="true"
                                    :noDataText="'Library Circulation Record Not Found.'"
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
                                    </vs-tr>
                                </template>

                            </vs-table>
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
