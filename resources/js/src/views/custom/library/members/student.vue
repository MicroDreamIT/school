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
                    <data-table-final :headers="headers"
                                      :tableHeader="'Student List'"
                                      :suggestText="'Student Record list on table. Filter student using the filter.'"
                                      :url="'/json/library/student'"
                                      :model="'route'"
                                      :noDataMessage="'No Student data found. Please Filter student to show.'"
                                      :hasSearch="true"
                                      :has-multiple="true"
                                      :has-pagination="true"
                                      :filterSection="true"
                                      ref="dataTableStudent"
                                      :ajaxVariableSet="['student']"
                                      @get-return-value="GetReturnValue"
                                      :showAction="false"
                    >
                        <template slot="items" slot-scope="props">
                            <vs-td :data="props.data.faculty">
                                {{props.data.faculty}}
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
                headers: [
                    {name: 'Faculty/Class', sort_key: 'faculty'},
                    {name: 'Sem/Sec', sort_key: 'sem_sec'},
                    {name: 'Reg no', sort_key: 'reg_no'},
                    {name: 'student name', sort_key: 'fullname'},
                    {name: 'book taken', sort_key: 'book_taken'},
                    {name: 'eligible', sort_key: 'eligible'},
                    {name: 'status'},
                ],

            }
        },

        created() {

        },

        methods: {
            GetReturnValue(arg = null, all) {
                let faculty = this.$root.objectToArray(all.faculties)
                let val = arg.map(st => {
                    return {
                        id: st.id,
                        faculty:faculty.filter(f=>{
                            return f.id === st.faculty
                        })[0].value
                    }
                });
                this.$store.dispatch('updateTableData', val)
            },

        }

    }


</script>

<style scoped>

</style>


