<template>
    <div>
        <div class="row">
            <div class="col-md-12 mb-2">
                <h2 class="pageTitle">Staff Manager</h2>
            </div>
            <staff-navigation></staff-navigation>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
                <vs-card>
                    <div class="row p-2">
						<h4 class="ml-4">Designation</h4>
                        <div class="col-md-12 row">
                            <div class="col-md-4">
                                <br>
                                <h4 class="header large lighter blue">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    Create Designation
                                </h4><br>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Designation</label>
                                    <div class="col-sm-9">
                                        <vs-input v-model="title"
                                                  v-validate="'required'"
                                                  data-vv-name="title"
                                                  :danger="errors.has('title')"
                                                  :danger-text="errors.first('title')"
                                                  ref="stafftitle"
                                                  class="w-100"/>
                                    </div>
                                </div>

                                <vs-divider/>
                                <button class="btn btn-info waves-effect waves-light" @click.prevent="submit">
                                    <i class="fa fa-save bigger-110"></i>
                                    {{buttonText}}
                                </button>
                            </div>
                            <div class="col-md-8"><br>

                                <ow-data-table :headers="tableHeader"
                                               :tableHeader="'Designation List'"
                                               :suggestText="'Designations Record list on table. Filter Years using the filter.\n'"
                                               :url="url"
                                               :noDataMessage="'No Designation data found. Please Designation filter to show.'"
                                               :hasSearch="true"
                                               :has-multiple="true"
                                               :has-pagination="true"
                                               :main-item="mainItem"
                                               :getData="getData"
                                >
                                    <template slot="items" slot-scope="props">
                                        <vs-td>
                                            {{props.data.title}}
                                        </vs-td>
                                        <vs-td>
                                            <div class="d-flex">
                                                <vs-switch color="success"
                                                           :checked="props.data.status=='active'?true:false"
                                                           @click.stop="changeStatus(props.data.id, props.data.status)"
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
                    </div>
                </vs-card>
            </div>
        </div>

    </div>
</template>

<script>
    import StaffNavigation from '../../components/navigation/staff-navigation.vue'
    export default {
        components:{
            'staff-navigation':StaffNavigation
        },
        data() {
            return {

                tableHeader: [
                    {name: 'Designation', sort_key: 'designation'},
                    {name: 'Status'},
                    {name: 'Action'},
                ],
                title: '',
                items: [],
                id: null,
                mainItem: [],
                deletePop: false,
                deleteItem: null,
                url: '/json/staff/designation',
                buttonText:'create'
            }
        },
        created() {
            this.getData()
        },
        methods: {
            getData() {
                this.$http.get(this.url).then(res => {
                    this.items = res.data.designation;
                    this.mainItem = this.items;
                })
            },
            editItems(id) {
                this.$refs.stafftitle.$el.querySelector('input').focus()
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
            changeStatus(id, status) {
                let stat = status === 'active' ? 'in-active' : 'active';
                let url = this.url + '/' + id + '/' + stat;
                this.$http.get(url).then(res => {
                    this.getData();
                    this.$vs.notify({title: res.data[0], text: res.data[1], color: res.data[0], icon: 'verified_user'})
                })
            },
            submit() {
                this.$validator.validateAll().then(value => {
                    if (value) {
                        if (this.id) {
                            this.$http.post(this.url + '/' + this.id + '/update',{title:this.title})
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
        }

    }


</script>

<style scoped>

</style>
