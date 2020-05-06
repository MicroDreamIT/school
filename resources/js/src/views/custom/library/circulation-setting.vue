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
                    <div class="row p-4">
                        <div class="col-md-4">
                            <h4>{{buttonText}} Route</h4><br>
                            <div class="form-group">
                                <label>user type</label>
                                <select v-model="forms.user_type" class="form-control" ref="user_type" :readonly="forms.id" :disabled="forms.id"
                                        :danger="error.user_type!==undefined">
                                    <option value="Student">Student</option>
                                    <option value="Staff">Staff</option>
                                </select>
                                <p v-if="error.user_type!==undefined" class="text-danger">{{ error.user_type[0] }}</p>
                                <p></p>
                            </div>
                            <div class="form-group">
                                <label>Use Code Prefix</label>
                                <vs-input class="w-100" v-model="forms.code_prefix"
                                          :readonly="forms.id"
                                          :danger="error.code_prefix!==undefined"></vs-input>
                                <p v-if="error.code_prefix!==undefined" class="text-danger">{{ error.code_prefix[0]
                                    }}</p>
                                <p></p>
                            </div>
                            <div class="form-group">
                                <label>Issue Limit Days</label>
                                <vs-input class="w-100" v-model="forms.issue_limit_days"
                                          :danger="error.issue_limit_days!==undefined"
                                          type="number" min="0"></vs-input>
                                <p v-if="error.issue_limit_days!==undefined" class="text-danger">{{
                                    error.issue_limit_days[0] }}</p>
                                <p></p>
                            </div>
                            <div class="form-group">
                                <label>Issue Limit Book</label>
                                <vs-input class="w-100" v-model="forms.issue_limit_books"
                                          :danger="error.issue_limit_books!==undefined"
                                          type="number" min="0"></vs-input>
                                <p v-if="error.issue_limit_books!==undefined" class="text-danger">{{
                                    error.issue_limit_books[0] }}</p>
                                <p></p>
                            </div>
                            <div class="form-group">
                                <label>fine per day</label>
                                <vs-input class="w-100" v-model="forms.fine_per_day"
                                          :danger="error.fine_per_day!==undefined"
                                          type="number" min="0"></vs-input>
                                <p v-if="error.fine_per_day!==undefined" class="text-danger">{{ error.fine_per_day[0]
                                    }}</p>
                                <p></p>
                            </div>
                            <br>
                            <vs-divider></vs-divider>
                            <vs-button @click="posting()">{{buttonText}}</vs-button>
                        </div>
                        <div class="col-md-8">
                            <data-table-final :headers="headers"
                                              :tableHeader="'Circulation List'"
                                              :suggestText="'Circulation Record list on table. Filter Circulation using the filter.'"
                                              :url="'/json/library/circulation'"
                                              :model="'route'"
                                              :noDataMessage="'No Circulation data found. Please Filter Circulation to show.'"
                                              :hasSearch="true"
                                              :has-multiple="true"
                                              :has-pagination="true"
                                              :filterSection="true"
                                              ref="dataTableCirculation"
                                              :ajaxVariableSet="['circulation']"
                                              @get-return-value="GetReturnValue"
                                              :showAction="false"
                            >
                                <template slot="items" slot-scope="props">
                                    <vs-td :data="props.data.user_type">
                                        {{props.data.user_type}}
                                    </vs-td>
                                    <vs-td :data="props.data.code_prefix">
                                        {{props.data.code_prefix}}
                                    </vs-td>
                                    <vs-td :data="props.data.issue_limit_days">
                                        {{props.data.issue_limit_days}}
                                    </vs-td>
                                    <vs-td :data="props.data.issue_limit_books">
                                        {{props.data.issue_limit_books}}
                                    </vs-td>
                                    <vs-td :data="props.data.fine_per_day">
                                        {{props.data.fine_per_day}}
                                    </vs-td>

                                    <vs-td :data="props.data.action">
                                        <div class="action-own">
                                            <a class="btn btn-success btn-sm pointer-all"
                                               title="Edit"
                                               @click.stop="editItems(props.data.id)">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                        </div>
                                    </vs-td>
                                </template>
                            </data-table-final>

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
                searchData: {},
                forms: {},
                vehicles: [],
                selected: [],
                error: [],
                headers: [
                    {name: 'user type', field: 'user_type'},
                    {name: 'code prefix', field: 'code_prefix'},
                    {name: 'issue limit days', field: 'issue_limit_days'},
                    {name: 'issue limit books', field: 'issue_limit_books'},
                    {name: 'fine per day', field: 'fine_per_day'},
                    {name: 'action'},
                    {name: 'status'},
                ],
                buttonText: 'create'
            }
        },

        methods: {
            editItems(id) {
                this.$refs['user_type'].focus()

                this.$http.get('/json/library/circulation' + '/' + id + '/edit')
                    .then(res => {
                        this.forms = res.data.row
                        this.vehicles = res.data.row.vehicle
                        this.selected = res.data.row.vehicle
                        this.buttonText = 'Update'
                    })
                    .catch(err => {

                    })
            },
            deleteItems(id) {
                let confirms = confirm('are you sure?')
                if (!confirms) return null
                this.$http.get('/json/library/circulation' + '/' + id + '/delete')
                    .then(res => {
                        this.$refs.dataTableCirculation.getData()
                        this.$vs.notify({title: res.data[0], text: res.data[1], color: res.data[0], icon: 'danger'})
                    })
                    .catch(err => {

                    })
            },
            GetReturnValue(arg = null) {
                let val = arg.map(st => {
                    return {
                        id: st.id,
                        user_type: st.user_type,
                        code_prefix: st.code_prefix,
                        issue_limit_days: st.issue_limit_days,
                        issue_limit_books: st.issue_limit_books,
                        fine_per_day: st.fine_per_day,
                        status:st.status
                    }
                });
                this.$store.dispatch('updateTableData', val)
            },
            searchVehicle(search, loading) {
                loading(true)
                this.$http.get('/json/transport/vehicle-autocomplete?q=' + search)
                    .then(res => {
                        this.vehicles = res.data
                        if (this.vehicles.length > 0) loading(false)
                    })
            },
            posting() {
                this.forms.slug=this.forms.user_type
                if (this.forms.id) {
                    this.$http.post('/json/library/circulation/' + this.forms.id + '/update', this.forms)
                        .then(res => {
                            if (res.status === 200) {
                                this.$vs.notify({
                                    title: res.data[0],
                                    text: res.data[1],
                                    color: res.data[0],
                                    icon: 'verified_user'
                                })
                                this.$refs.dataTableCirculation.getData()
                                this.forms = {}
                                this.selected = []
                            }
                        })
                        .catch(err => {
                            if (err.response) {
                                this.error = err.response.data.errors
                            }
                        })
                } else {
                    this.$http.post('/json/library/circulation/store', this.forms)
                        .then(res => {
                            if (res.status === 200) {
                                this.$vs.notify({
                                    title: res.data[0],
                                    text: res.data[1],
                                    color: res.data[0],
                                    icon: 'verified_user'
                                })
                                this.$refs.dataTableCirculation.getData()
                                this.forms = {}
                                this.selected = []
                            }
                        })
                        .catch(err => {
                            if (err.response) {
                                this.error = err.response.data.errors
                            }
                        })
                }

            }
        }
    }
</script>

<style scoped>

</style>
