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
                                                <select v-model="searchData.user_type" class="form-control">
                                                    <option value="1">student</option>
                                                    <option value="2">staff</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group " v-if="searchData.user_type">
                                                <label>REG. NO.</label>
                                                <vs-input v-model="searchData.reg_no" class="w-100">
                                                </vs-input>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group " v-if="searchData.user_type">
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
                            </div>
                        </vs-collapse-item>
                    </vs-collapse>

                    <br>

                    <data-table-final :headers="headers"
                                      :tableHeader="'member List'"
                                      :suggestText="'member Record list on table. Filter member using the filter.'"
                                      :url="'/json/library/member'"
                                      :model="'member'"
                                      :noDataMessage="'No member data found. Please Filter member to show.'"
                                      :hasSearch="true"
                                      :has-multiple="true"
                                      :has-pagination="true"
                                      :filterSection="true"
                                      :searchData="searchData"
                                      ref="dataTableMember"
                                      :ajaxVariableSet="['member']"
                                      @get-return-value="GetReturnValue"
                    >
                        <template slot="items" slot-scope="props">
                            <vs-td :data="props.data.user_type">
                                {{props.data.user_type}}
                            </vs-td>
                            <vs-td :data="props.data.reg_no">
                                {{props.data.reg_no}}
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
                    {name: 'user type', sort_key: 'user_type'},
                    {name: 'reg no', sort_key: 'reg_no'},
                    {name: 'status'},
                    {name: 'action'},
                ],
                searchData: {},
                mainItem: []

            }
        },
        watch:{
            searchData:{
                deep:true,
                handler(val){
                    this.$refs.dataTableMember.getData()
                }
            }
        },

        methods: {
            GetReturnValue(arg = null) {
                let val = arg.map(st => {
                    return {
                        id: st.id,
                        user_type: st.user_type===1?'student':'staff',
                        reg_no: st.memberdetail[2],
                        status: st.status,
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
