<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Hostel Bed Status Manager</h2>
                <div class="mb-2">
                    <router-link :to="'/hostel/resident'">
                        <vs-button type="filled" class="smBtn">Resident</vs-button>
                    </router-link>
                    <router-link :to="'/hostel'">
                        <vs-button type="filled" class="smBtn">Hostel</vs-button>
                    </router-link>
                    <router-link :to="'/hostel/food'">
                        <vs-button type="filled" class="smBtn">Food & Meal</vs-button>
                    </router-link>
                </div>
            </div>

            <notify-bar/>
            <vs-divider class="mx-3"></vs-divider>
            <div class="col-md-12">
                <vs-card>
                    <div class="row p-4">
                        <div class="mb-2 col-md-12">
                            <router-link :to="'/hostel'">
                                <vs-button type="filled" class="smBtn">Detail</vs-button>
                            </router-link>
                            <router-link :to="'/hostel/add'">
                                <vs-button type="filled" class="smBtn">Add Hostel</vs-button>
                            </router-link>
                            <router-link :to="'/hostel/room-type'">
                                <vs-button type="filled" class="smBtn">Room Type</vs-button>
                            </router-link>
                            <router-link :to="'/bed-status'">
                                <vs-button type="filled" class="smBtn">Bed status</vs-button>
                            </router-link>
                        </div>
                        <div class="col-md-4">
                            <h4>
                                <i class="fa fa-search"></i>
                                Create Hostel Bed Status
                            </h4>
                            <br>
                            <div class="form-group row">
                                <input type="hidden" v-model="id">
                                <label class="col-md-4">Title</label>
                                <vs-input class="col-md-8"
                                          v-model="title"
                                          placeholder=""
                                          v-validate="'required'"
                                          data-vv-name="title"
                                          :danger="errors.first('title')?true:false"
                                          :danger-text="errors.first('title')"
                                          ref="bedtitle"
                                >

                                </vs-input>
                            </div>
                            <div>
                                <vs-button color="#00b8cf"
                                           type="filled"
                                           class="my-round"
                                           @click.prevent="submit"
                                >{{submitText}}
                                </vs-button>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <ow-data-table :headers="tableHeader"
                                           :tableHeader="'Hostel Bed List'"
                                           :suggestText="'Hostel Bed Record list on table. Filter Hostel Bed using the filter.\n'"
                                           :url="url"
                                           :noDataMessage="'No Hostel Bed data found. Please Hostel Bed filter to show.'"
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
                                            Hostel Bed
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
                    {name: 'Hostel Bed', sort_key: 'title'},
                    {name: 'Status'},
                    {name: 'Action'},
                ],
                title: '',
                id: null,
                items: [],
                mainItem: [],
                deletePop: false,
                deleteItem: null,
                url: '/json/bed-status',
                submitText: 'Create'
            }
        },
        created() {
            this.getData()
        },

        methods: {
            getData() {
                this.$http.get(this.url).then(res => {
                    this.items = res.data.data;
                    this.mainItem = this.items;
                })
            },
            submit() {
                this.$validator.validateAll().then(value => {
                    if (value) {
                        if (this.id) {
                            this.$http.post(this.url + '/' + this.id + '/update', {title: this.title, id: this.id})
                                .then(res => {
                                    this.$vs.notify({
                                        title: res.data[0],
                                        text: res.data[1],
                                        color: res.data[0],
                                        icon: 'verified_user'
                                    })
                                    this.title = ''
                                    this.id = null
                                    this.getData()
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
                                this.title = '';
                                this.getData();
                                this.$validator.reset()
                            })
                        }

                    }
                })
            },
            changeStatus(id, status) {
                let stat = status === 'active' ? 'in-active' : 'active';
                let url = '/json/bed-status/' + id + '/' + stat;
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
                let item = this.mainItem.filter(it => {
                    return it.id === id
                })[0]

                this.title = item.title
                this.id = item.id
                this.submitText = 'update'
                this.$refs.bedtitle.$el.querySelector('input').focus()
            },
            deletePopModal(id) {
                this.deleteItem = id;
                this.deletePop = true
            },
            deleteItems() {
                this.$http.get('/json/bed-status/' + this.deleteItem + '/delete').then(res => {
                    this.getData();
                    this.$vs.notify({
                        title: res.data[0],
                        text: res.data[1],
                        color: res.data[0],
                        icon: 'verified_user'
                    })
                })
            },
        }
    }
</script>

<style scoped>

</style>
