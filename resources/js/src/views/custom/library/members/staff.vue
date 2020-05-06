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
                            Staffs Member
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
            <div class="col-md-12 mb-2" v-if="filterSection">
                <vs-collapse class="custom-collapse">
                    <vs-collapse-item>
                        <div slot="header">
                            <vs-button type="filled"
                                       color="primary"
                                       icon="double_arrow"
                                       class="rounded"
                            >
                                Filter Staffs
                            </vs-button>
                        </div>
                        <div class="filterBox">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>designation:</label>
                                            <select v-model="searchData.designation" class="form-control">
                                                <option :value="as.id" v-for="as in designations">{{as.value}}</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Reg Date From</label>
                                            <datepicker
                                                    v-model="searchData.reg_start_date"
                                                    :format="'yyyy-MM-dd'"
                                                    @input="searchData.reg_start_date=$root.formatPicker($event)"
                                            />
                                            <label>To</label>
                                            <datepicker
                                                    v-model="searchData.reg_end_date"
                                                    :format="'yyyy-MM-dd'"
                                                    @input="searchData.reg_end_date=$root.formatPicker($event)"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Reg no:</label>
                                            <vs-input v-model="searchData.reg_no" class="w-100"></vs-input>
                                        </div>
                                        <div class="form-group">
                                            <label>Status:</label>
                                            <v-select v-model="searchData.status"
                                                      :options="['active','in-active']"
                                                      placeholder="Select Status"
                                            >
                                            </v-select>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </vs-collapse-item>
                </vs-collapse>
            </div>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
                <vs-card>
                    <data-table-final :headers="headers"
                                      :tableHeader="'Staff List'"
                                      :suggestText="'Staff Record list on table. Filter staff using the filter.'"
                                      :url="'/json/library/staff'"
                                      :model="'route'"
                                      :noDataMessage="'No Staff data found. Please Filter staff to show.'"
                                      :hasSearch="true"
                                      :searchData="searchData"
                                      :has-multiple="true"
                                      :has-pagination="true"
                                      :filterSection="true"
                                      ref="dataTableStaff"
                                      :ajaxVariableSet="['staff']"
                                      @get-return-value="GetReturnValue"
                                      :showAction="false"
                                      :showStatus="false"
                    >
                        <template slot="items" slot-scope="props">
                            <vs-td :data="props.data.designation">
                                {{props.data.designation}}
                            </vs-td>
                            <vs-td :data="props.data.reg_no">
                                {{props.data.reg_no}}
                            </vs-td>
                            <vs-td :data="props.data.fullname">
                                {{props.data.fullname}}
                            </vs-td>
                            <vs-td :data="props.data.taken">
                                {{props.data.taken}}
                            </vs-td>
                            <vs-td :data="props.data.eligible">
                                {{props.data.eligible}}
                            </vs-td>
                            <vs-td :data="props.data.status">
                                {{props.data.status}}
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

                filterSection:true,
                designations:[],
                searchData:{},
                headers: [
                    {name: 'designation', sort_key: 'designation'},
                    {name: 'Reg no', sort_key: 'reg_no'},
                    {name: 'staff name', sort_key: 'fullname'},
                    {name: 'book taken', sort_key: 'book_taken'},
                    {name: 'eligible', sort_key: 'eligible'},
                    {name: 'status'},
                ],

            }
        },

        watch:{
            searchData:{
                deep:true,
                handler(val){
                    this.$refs.dataTableStaff.getData()
                }
            }
        },
        created() {

        },

        methods: {

            GetReturnValue(arg = null, all) {
                this.designations = this.$root.objectToArray(all.designation)
                let val = arg.map(st => {
                    return {
                        id: st.id,
                        reg_no:st.memberdetail[2],
                        designation:this.designations.filter(f=>{
                            return f.id === st.designation
                        })[0].value,
                        fullname:st.fullname,
                        taken:st.taken,
                        eligible:st.eligible,
                        status:st.status,
                    }
                });
                this.$store.dispatch('updateTableData', val)
            },

        }

    }


</script>

<style scoped>

</style>


