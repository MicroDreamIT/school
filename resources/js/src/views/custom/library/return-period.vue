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
                    <div class="row mx-4 align-items-center">
                        <p class="mb-0 mr-4">To</p>
                        <vs-checkbox>Student</vs-checkbox>
                        <vs-checkbox>Staff</vs-checkbox>
                        <vs-button class=" ml-2 smBtn">
                            <i class="fa fa-envelope"></i>
                            Send Reminder
                        </vs-button>
                    </div>
                    <div class="row mx-2 p-2">
                        <vs-button @click="activeTab='student'" class="my-round m-3">
                            <i class="fa fa-user"></i>
                            Student Return Period Over
                            <span class="count-number">0</span>
                        </vs-button>
                        <vs-button @click="activeTab='staff'" class="my-round m-3">
                            <i class="fa fa-user"></i>
                            Staff Return Period Over
                            <span class="count-number">0</span>
                        </vs-button>
                    </div>
                    <div v-if="activeTab=='student'" class="mx-2">
                        <h4 class="header large lighter blue mt-4">
                            <i class="fa fa-list" aria-hidden="true"></i>&nbsp;
                            Student Book Return Over Period List
                        </h4>
                        <vs-table
                                v-model="selected"
                                pagination
                                :max-items="10"
                                :data="mainItem"
                                description
                                search
                                :multiple="true"
                                :noDataText="'Book Issued History Not Found.'"
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
                    </div>
                    <div v-if="activeTab=='staff'" class="mx-2">
                        <h4 class="header large lighter blue mt-4">
                            <i class="fa fa-list" aria-hidden="true"></i>&nbsp;
                            Staff Book Return Over Period List
                        </h4>
                        <vs-table
                                v-model="selected"
                                pagination
                                :max-items="10"
                                :data="mainItem"
                                description
                                search
                                :multiple="true"
                                :noDataText="'Book Issued History Not Found.'"
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
                activeTab: 'student',
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
