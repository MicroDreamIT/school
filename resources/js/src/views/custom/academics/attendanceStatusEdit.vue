<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Attendance Status Manager</h2>
            </div>
            <notify-bar/>
            <vs-divider class="mx-3"></vs-divider>
            <div class="col-md-12">
                <vs-card>
                    <div class="row p-4">
                        <div class="col-md-4">
                            <h4>
                                <i class="fa fa-search"></i>
                                Update Attendance Status</h4>
                            <br>
                            <div class="form-group row">
                                <label class="col-md-4">Attendance Status</label>
                                <vs-input class="col-md-8"
                                          v-model="title"
                                          placeholder=""
                                          v-validate="'required'"
                                          data-vv-name="title"
                                          :danger="errors.first('title')?true:false"
                                          :danger-text="errors.first('title')"
                                >

                                </vs-input>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4">Display Color</label>
                                <vs-input class="col-md-8"
                                          v-model="display_class"
                                          placeholder=""
                                >

                                </vs-input>
                            </div>
                            <div>
                                <vs-button color="#00b8cf"
                                           type="filled"
                                           class="my-round"
                                           @click.prevent="submit"
                                >Update
                                </vs-button>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <ow-data-table :headers="tableHeader"
                                           :tableHeader="'Attendance Status List'"
                                           :suggestText="'Attendance Status Record list on table. Filter Attendance Status using the filter.\n'"
                                           :url="url"
                                           :noDataMessage="'No Attendance Status data found. Please Attendance Status filter to show.'"
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
                                    <vs-td :data="props.data.title">
                                        {{props.data.display_color}}
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
                                               @click.stop="deletePopModal(props.data.id)">
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
                                            Student Batch
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
        <vs-popup class="holamundo"
                  :title="'Delete Confirmation'"
                  :active.sync="deletePop">
            <div class="mt-3">
                <p class="p-2 my-round delete-pop-text">These items will be permanently deleted and cannot be
                    recovered.</p>

                <p><i class="p-2 ace-icon fa fa-hand-o-right"></i>Are you sure?</p>
            </div>

            <div class="footer-modal">
                <vs-button class="smBtn"
                           @click="deletePop=false, deleteItem= null">
                    <i class="fa fa-close"></i>
                    Cancel
                </vs-button>
                <vs-button class="smBtn" color="danger" @click="deletePop=false, deleteItems()">
                    <i class="fa fa-trash"></i>
                    Yes,Delete Now!
                </vs-button>
            </div>
        </vs-popup>
    </div>
</template>

<script>

    export default {


        data() {
            return {
                searchData: {},
                tableHeader: [
                    {name: 'Attendance Status', sort_key: 'title'},
                    {name: 'Color', sort_key: 'display_color'},
                    {name: 'Status'},
                    {name: 'Action'},
                ],
                title: '',
                display_class:'',
                items: [],
                mainItem: [],
                deletePop: false,
                deleteItem: null,
                url: '/json/attendance-status',
            }
        },
        created() {
            this.getData()
        },

        methods: {
            getData() {
                this.$http.get(this.url+'/'+this.$route.params.id+'/edit').then(res => {
                    this.title=res.data.row.title;
                    this.display_class=res.data.row.display_class
                    this.items = res.data.data;
                    this.mainItem = this.items;
                })
            },
            submit() {
                this.$validator.validateAll().then(value => {
                    if (value) {
                        this.$http.post(this.url +'/'+this.$route.params.id+'/update', {
                            title: this.title,
                            display_class:this.display_class
                        }).then(res => {
                            this.$vs.notify({
                                title: res.data[0],
                                text: res.data[1],
                                color: res.data[0],
                                icon: 'verified_user'
                            })
                            this.title = '';
                            this.display_class = '';
                            this.getData();
                            this.$validator.reset()
                            this.$router.push({path:'/attendance-status'})
                        })
                    }
                })
            },
            changeStatus(id, status) {
                let stat = status === 'active' ? 'in-active' : 'active';
                let url = '/json/attendance-status/' + id + '/' + stat;
                this.$http.get(url).then(res => {
                    this.getData();
                    this.$vs.notify({
                        title: res.data[0],
                        text: res.data[1],
                        color: res.data[0],
                        icon: 'verified_user'
                    })
                })

            },
            editItems(id) {
                this.$router.push({name: 'attendanceStatusEdit', params: {id: id}})
            },
            deletePopModal(id) {
                this.deleteItem = id;
                this.deletePop = true
            },
            deleteItems() {
                this.$http.get('/json/attendance-status/' + this.deleteItem + '/delete').then(res => {
                    this.getData();
                    this.$vs.notify({
                        title: res.data[0],
                        text: res.data[1],
                        color: res.data[0],
                        icon: 'verified_user'
                    })
                    this.$router.push({path:'/attendance-status'})
                })
            },
        }
    }
</script>

<style scoped>

</style>
