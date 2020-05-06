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
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>book:</label>
                                            <select v-model="searchData.book" class="form-control">
                                                <option :value="as.id" v-for="as in books">{{as.value}}</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>issued start</label>
                                            <datepicker
                                                    v-model="searchData.issued_start"
                                                    :format="'yyyy-MM-dd'"
                                                    @input="searchData.issued_start=$root.formatPicker($event)"
                                            />
                                            <label>issued end</label>
                                            <datepicker
                                                    v-model="searchData.issued_end"
                                                    :format="'yyyy-MM-dd'"
                                                    @input="searchData.issued_end=$root.formatPicker($event)"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Category:</label>
                                            <select v-model="searchData.category" class="form-control">
                                                <option :value="ca.id" v-for="ca in categories">{{ca.value}}</option>
                                            </select>
                                        </div>
                                        <label>due start</label>
                                        <datepicker
                                                v-model="searchData.due_start"
                                                :format="'yyyy-MM-dd'"
                                                @input="searchData.due_start=$root.formatPicker($event)"
                                        />
                                        <label>due end</label>
                                        <datepicker
                                                v-model="searchData.due_end"
                                                :format="'yyyy-MM-dd'"
                                                @input="searchData.return_end=$root.formatPicker($event)"
                                        />
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>designation:</label>
                                            <select v-model="searchData.status" class="form-control">
                                                <option value="issue">issued</option>
                                                <option value="return">Returned</option>
                                            </select>
                                        </div>
                                        <label>return start</label>
                                        <datepicker
                                                v-model="searchData.return_start"
                                                :format="'yyyy-MM-dd'"
                                                @input="searchData.return_start=$root.formatPicker($event)"
                                        />
                                        <label>return end</label>
                                        <datepicker
                                                v-model="searchData.return_end"
                                                :format="'yyyy-MM-dd'"
                                                @input="searchData.return_end=$root.formatPicker($event)"
                                        />
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
                                      :tableHeader="'History List'"
                                      :suggestText="'History Record list on table. Filter history using the filter.'"
                                      :url="'/json/library/issue-history'"
                                      :model="'route'"
                                      :noDataMessage="'No History data found. Please Filter history to show.'"
                                      :hasSearch="true"
                                      :searchData="searchData"
                                      :has-multiple="true"
                                      :has-pagination="true"
                                      :filterSection="true"
                                      ref="dataTableHistory"
                                      :ajaxVariableSet="['history']"
                                      @get-return-value="GetReturnValue"
                                      :showAction="false"
                                      :showStatus="false"
                    >
                        <template slot="items" slot-scope="props">

                            <vs-td :data="props.data.reg_no">
                                {{props.data.reg_no}}
                            </vs-td>
                            <vs-td :data="props.data.ref_no">
                                {{props.data.ref_no}}
                            </vs-td>
                            <vs-td :data="props.data.book">
                                {{props.data.book}}
                            </vs-td>
                            <vs-td :data="props.data.category">
                                {{props.data.category}}
                            </vs-td>
                            <vs-td :data="props.data.issue">
                                {{props.data.issue}}
                            </vs-td>
                            <vs-td :data="props.data.due">
                                {{props.data.due}}
                            </vs-td>
                            <vs-td :data="props.data.return">
                                {{props.data.return}}
                            </vs-td>
                            <vs-td :data="props.data.day">
                                {{props.data.day}}
                            </vs-td>
                        </template>
                    </data-table-final>

                </vs-card>
            </div>
        </div>

    </div>
</template>

<script>
    import moment from 'moment'
    export default {

        data() {
            return {

                filterSection: true,
                categories: [],
                books:[],
                searchData: {},
                headers: [
                    {name: 'Reg no', sort_key: 'reg_no'},
                    {name: 'Ref no', sort_key: 'ref_no'},
                    {name: 'book', sort_key: 'book'},
                    {name: 'category', sort_key: 'category'},
                    {name: 'issue no', sort_key: 'issue'},
                    {name: 'due date', sort_key: 'due'},
                    {name: 'return date', sort_key: 'return'},
                    {name: 'day', sort_key: 'day'},
                ],

            }
        },

        watch: {
            searchData: {
                deep: true,
                handler(val) {
                    this.$refs.dataTableHistory.getData()
                }
            }
        },
        created() {

        },

        methods: {
            regno(st){
                let type = st.lib_member.user_type === 2 ? ' staff' : ' student'
                return st.lib_member.memberdetail[2] + type
            },
            GetReturnValue(arg = null, all) {
                this.categories = this.$root.objectToArray(all.categories)
                this.books = this.$root.objectToArray(all.books)
                let val = arg.map(st => {
                    return {
                        id: st.id,
                        reg_no: this.regno(st),
                        ref_no: st.book_code,
                        book: st.title,
                        category: this.categories.filter(f => {
                            return f.id === st.categories
                        })[0].value,
                        issue: this.$root.formatPicker(st.issued_on),
                        due: this.$root.formatPicker(st.due_date),
                        return: this.$root.formatPicker(st.return_date),
                        day: st.diffday
                    }
                });
                this.$store.dispatch('updateTableData', val)
            },

        }

    }


</script>

<style scoped>

</style>


