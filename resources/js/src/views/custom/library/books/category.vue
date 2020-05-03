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
                                    <vs-input v-model="forms.title" class="w-100" :danger="error.title!==undefined"
                                              ref="title"></vs-input>
                                    <p v-if="error.title!==undefined" class="text-danger">{{ error.title[0] }}</p>
                                </div>
                            </div>

                            <hr>
                            <button class="btn btn-primary " type="submit" @click="posting()">
                                <i class="fa fa-save "></i>
                                {{buttonText}}
                            </button>
                        </div>
                        <div class="col-md-8"><br>

                            <data-table-final :headers="headers"
                                              :tableHeader="'Category List'"
                                              :suggestText="'Category Record list on table. Filter category using the filter.'"
                                              :url="'/json/library/book/category'"
                                              :model="'route'"
                                              :noDataMessage="'No Category data found. Please Filter category to show.'"
                                              :hasSearch="true"
                                              :has-multiple="true"
                                              :has-pagination="true"
                                              :filterSection="true"
                                              ref="dataTableCategory"
                                              :ajaxVariableSet="['categories']"
                                              @get-return-value="GetReturnValue"
                                              :showAction="false"
                            >
                                <template slot="items" slot-scope="props">
                                    <vs-td :data="props.data.title">
                                        {{props.data.title}}
                                    </vs-td>
                                    <vs-td :data="props.data.slug">
                                        {{props.data.slug}}
                                    </vs-td>
                                    <vs-td :data="props.data.action">
                                        <div class="action-own">
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

                headers: [
                    {name: 'book category.', sort_key: 'title', field: 'title'},
                    {name: 'slug', sort_key: 'slug', field: 'slug'},
                    {name: 'Action'},
                    {name: 'status'},
                ],
                notification: '',
                forms: {
                    title:''
                },
                buttonText: 'create',
                error:[]
            }
        },
        methods: {
            posting() {
                this.$http.post(this.forms.id ? '/json/library/book/category/' + this.forms.id + '/update' : '/json/library/book/category/store', this.forms)
                    .then(res => {
                        if (res.status === 200) {
                            this.$vs.notify({
                                title: res.data[0],
                                text: res.data[1],
                                color: res.data[0],
                                icon: 'verified_user'
                            })
                            this.$refs.dataTableCategory.getData()
                            this.forms = {}
                            this.selected = []
                        }
                    })
                    .catch(err => {
                        if (err.response) {
                            this.error = err.response.data.errors
                        }
                    })
            },
            GetReturnValue(arg = null) {
                let val = arg.map(st => {
                    return {
                        id: st.id,
                        title: st.title,
                        slug: st.slug,
                        status: st.status
                    }
                });
                this.$store.dispatch('updateTableData', val)
            },
            viewItems(id) {
                this.$router.push({name: 'studentView', params: {id: id}})
            },
            editItems(id) {
                this.$refs['title'].$el.querySelector('input').focus()

                this.$http.get('/json/library/book/category/' + id + '/edit')
                    .then(res => {
                        this.forms = res.data.row
                        this.buttonText = 'Update'
                    })
                    .catch(err => {

                    })
            },
            deleteItems(id) {
                this.$dialog.confirm('Are you sure? These items will be permanently deleted and cannot be recovered.').then(dialog => {
                    this.$http.get('/json/library/book/category/' + id + '/delete').then(res => {
                        this.$refs.dataTableCategory.getData()
                        this.$vs.notify({title: res.data[0], text: res.data[1], color: res.data[0], icon: 'verified'})
                    })
                })
            },
            changeStatus() {

            },
        }

    }


</script>

<style scoped>

</style>
