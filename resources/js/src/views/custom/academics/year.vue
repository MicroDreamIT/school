<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Years Manager</h2>
            </div>
            <notify-bar/>
            <vs-divider class="mx-3"></vs-divider>
            <div class="col-md-12">
                <vs-card>
                    <div class="row p-4">
                        <div class="col-md-4">
                            <h4>
                                <i class="fa fa-search"></i>
                                Create Year</h4>
                            <br>
                            <div class="form-group row">
                                <label class="col-md-4">Title</label>
                                <vs-input class="col-md-8"
                                          v-model="title"
                                          placeholder=""
                                          v-validate="'required'"
                                          data-vv-name="title"
                                          :danger="errors.first('title')?true:false"
                                          :danger-text="errors.first('title')"
                                          ref="yeartitle"
                                >

                                </vs-input>
                            </div>
                            <div>
                                <vs-button color="#00b8cf"
                                           type="filled"
                                           class="my-round"
                                           @click.prevent="submit"
                                >
                                    {{buttonText}}
                                </vs-button>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <ow-data-table :headers="tableHeader"
                                           :tableHeader="'Years List'"
                                           :suggestText="'Years Record list on table. Filter Years using the filter.\n'"
                                           :url="url"
                                           :noDataMessage="'No Year data found. Please Years filter to show.'"
                                           :hasSearch="true"
                                           :has-multiple="true"
                                           :has-pagination="true"
                                           :main-item="mainItem"
                                           :getData="getData"
                            >
                                <template slot="items" slot-scope="props">
                                    <vs-td :data="props.data.title">
                                        {{props.data.title}}
                                    </vs-td>
                                    <vs-td>
                                        <a @click="changeActiveStatus(props.data.id)"
                                           v-if="props.data.active_status!==1"
                                           class="btn btn-danger btn-sm pointer-all">
                                            click to active
                                        </a>
                                        <a v-else>
                                            {{props.data.active_status===1?'active':''}}
                                        </a>
                                    </vs-td>
                                    <vs-td>
                                        <div class="d-flex flex-wrap">
                                            <vs-switch color="success"
                                                       :checked="props.data.status=='active'?true:false"
                                                       @click.stop="changeStatus(props.data.id,props.data.status)"
                                                       class="pointer-all ml-2"
                                            >
                                                <span slot="on">Active</span>
                                                <span slot="off">In-Active</span>
                                            </vs-switch>
                                        </div>
                                    </vs-td>

                                    <vs-td>
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


                                <template slot="printSection" slot-scope="printData">
                                    <thead>
                                    <tr>
                                        <th>SN.No.</th>
                                        <th>
                                            Years
                                        </th>
                                        <th>
                                            Active Status
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="(tr, idx) in printData.data">
                                        <td>
                                            {{printData.data.indexOf(tr)+1}}
                                        </td>
                                        <td>
                                            {{tr.title}}
                                        </td>
                                        <td>
                                            <div>
                                                <span v-if="tr.status=='active'" class="p-2 ">Active</span>
                                                <span v-else class="p-2">In-Active</span>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
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
                searchData: {},
                tableHeader: [
                    {name: 'Years', sort_key: 'title'},
                    {name: 'Active status', sort_key: 'active_status'},
                    {name: 'Status'},
                    {name: 'Action'},
                ],
                title: '',
                items: [],
                id: null,
                mainItem: [],
                deletePop: false,
                deleteItem: null,
                url: '/json/year',
                buttonText: 'create'
            }
        },
        created() {
            this.getData()
        },

        methods: {
            changeActiveStatus(id, status) {
                this.$http.get(this.url + '/' + id + '/' + '/active-status')
                    .then(res => {
                        if (res.status === 200) {
                            this.$vs.notify({
                                title: res.data[0],
                                text: res.data[1],
                                color: res.data[0],
                                icon: 'verified_user'
                            })
                            this.getData()
                        }
                    })
            },
            getData() {
                this.$http.get(this.url).then(res => {
                    this.items = res.data.years;
                    this.mainItem = this.items;
                })
            },
            submit() {
                this.$validator.validateAll().then(value => {
                    if (value) {
                        if (this.id) {
                            this.$http.post(this.url + '/' + this.id + '/update', {title: this.title})
                                .then(res => {
                                    this.$vs.notify({
                                        title: res.data[0],
                                        text: res.data[1],
                                        color: res.data[0],
                                        icon: 'verified_user'
                                    })
                                    this.title = ''
                                    this.id = null
                                    this.getData();
                                    this.$validator.reset()
                                })
                        } else {
                            this.$http.post(this.url + '/store', {
                                title: this.title,
                            }).then(res => {
                                this.$vs.notify({
                                    title: res.data[0],
                                    text: res.data[1],
                                    color: res.data[0],
                                    icon: 'verified_user'
                                })
                                this.title = ''
                                this.id = null
                                this.getData();
                                this.$validator.reset()
                            })
                        }

                    }
                })
            },
            changeStatus(id, status) {
                let stat = status === 'active' ? 'in-active' : 'active';
                let url = this.url + '/' + id + '/' + stat;
                this.$http.get(url).then(res => {
                    this.getData();
                    this.$vs.notify({title: res.data[0], text: res.data[1], color: res.data[0], icon: 'verified_user'})
                })

            },
            editItems(id) {
                this.$refs.yeartitle.$el.querySelector('input').focus()
                let item = this.items.filter(st => st.id === id)[0]
                this.title = item.title
                this.id = item.id
                this.buttonText = 'update'
            },

            deleteItems(id) {
                this.$dialog.confirm('Are you sure? These items will be permanently deleted and cannot be recovered.').then(dialog => {
                    this.$http.get(this.url + '/' + id + '/delete').then(res => {
                        this.getData();
                        this.$vs.notify({title: res.data[0], text: res.data[1], color: res.data[0], icon: 'verified'})
                    })
                })
            },
        }
    }
</script>

<style scoped>

</style>
