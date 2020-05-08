<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Grading Scale Manager</h2>
            </div>
            <notify-bar/>
            <vs-divider class="mx-3"></vs-divider>
            <div class="col-md-12">
                <vs-card>
                    <div class="row p-4">
                        <div class="col-md-5">
                            <br>
                            <h4><i class="fa fa-search"></i>Create Grading Scale</h4><br>
                            <div class="form-group  row">
                                <label class="col-md-2">Title</label>
                                <vs-input class="col-md-10"
                                          v-model="title"
                                          placeholder="e.g: University level"
                                          v-validate="'required'"
                                          data-vv-name="title"
                                          :danger="errors.first('title')?true:false"
                                          :danger-text="errors.first('title')"
                                >

                                </vs-input>
                            </div>
                            <div>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>From(%)</th>
                                        <th>To(%)</th>
                                        <th>Point</th>
                                        <th>Desc.</th>
                                        <th>
                                            <vs-button type="filled"
                                                       size="medium"
                                                       class="my-round"
                                                       @click="addRow"
                                            >
                                                <i class="fa fa-plus"></i>
                                                <br>
                                                Add
                                            </vs-button>
                                        </th>
                                    </tr>
                                    </thead>
                                    <draggable v-model="gradeList" tag="tbody">
                                        <tr v-for="(list,i) in gradeList" class="ow-tr" :key="i">
                                            <td>
                                                <vs-input v-model="list.name"
                                                          v-validate="'required'"
                                                          data-vv-name="name"
                                                          :danger="errors.first('name')?true:false"
                                                          :danger-text="errors.first('name')">

                                                </vs-input>
                                            </td>
                                            <td>
                                                <vs-input v-model="list.percentage_from"
                                                          v-validate="'required'"
                                                          data-vv-name="percentage_from"
                                                          :danger="errors.first('percentage_from')?true:false"
                                                          :danger-text="errors.first('percentage_from')">

                                                </vs-input>
                                            </td>
                                            <td>
                                                <vs-input v-model="list.percentage_to"
                                                          v-validate="'required'"
                                                          data-vv-name="percentage_to"
                                                          :danger="errors.first('percentage_to')?true:false"
                                                          :danger-text="errors.first('percentage_to')">

                                                </vs-input>
                                            </td>
                                            <td>
                                                <vs-input v-model="list.grade_point"
                                                          v-validate="'required'"
                                                          data-vv-name="percentage_to"
                                                          :danger="errors.first('percentage_to')?true:false"
                                                          :danger-text="errors.first('percentage_to')">

                                                </vs-input>
                                            </td>
                                            <td>
                                                <vs-textarea v-model="list.description">

                                                </vs-textarea>
                                            </td>
                                            <td>
                                                <vs-button class="rounded" color="danger" @click="removeList(i)">
                                                    <i class="fa fa-trash"></i>
                                                </vs-button>
                                            </td>
                                        </tr>
                                    </draggable>
                                </table>
                            </div>
                            <vs-divider></vs-divider>
                            <vs-button color="#00b8cf"
                                       type="filled"
                                       class="my-round"
                                       @click="submit"
                            >
                                <i class="fa fa-save bigger-110"></i> Create
                            </vs-button>
                        </div>
                        <div class="col-md-7">
                            <ow-data-table :headers="tableHeader"
                                           :tableHeader="'Grading Scale List'"
                                           :suggestText="'Grading Scale Record list on table. Filter Grading Scale using the filter.'"
                                           :url="url"
                                           :noDataMessage="'No Grading data found. Please Grading filter to show.'"
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
                                        <div class="d-flex flex-column">
                                            <span v-for="(sub,idx) in props.data.grading_scale"
                                                  :class="{'p-2':true ,'border-t':idx>0}">
                                                {{sub.name+'-['+sub.percentage_from+'% To '+sub.percentage_to+']-'+sub.grade_point}}
                                            </span>
                                        </div>
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
                                            Group
                                        </th>
                                        <th>
                                            Grade-From-To-Score
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
                                            <div class="d-flex flex-column">
                                            <span v-for="(sub,idx) in tr.grading_scale"
                                                  :class="{'p-2':true ,'border-t':idx>0}">
                                                {{sub.name+'-['+sub.percentage_from+'% To '+sub.percentage_to+']-'+sub.grade_point}}
                                            </span>
                                            </div>
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
                title: '',
                tableHeader: [
                    {name: 'Group', sort_key: 'title'},
                    {name: 'Grade-From-To-Score', sort_key: ''},
                    {name: 'Status'},
                    {name: 'Action'},
                ],
                gradeList: [],
                items: [],
                mainItem: [],
                deletePop: false,
                deleteItem: null,
                url: '/json/grading',
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
                        this.$http.post(this.url + '/store', {
                            title: this.title,
                            name: this.gradeList.map(d => {
                                return d.name
                            }),
                            percentage_from: this.gradeList.map(d => {
                                return d.percentage_from
                            }),
                            percentage_to: this.gradeList.map(d => {
                                return d.percentage_to
                            }),
                            grade_point: this.gradeList.map(d => {
                                return d.grade_point
                            }),
                            description: this.gradeList.map(d => {
                                return d.description
                            })
                        }).then(res => {
                            this.$vs.notify({
                                title: res.data[0],
                                text: res.data[1],
                                color: res.data[0],
                                icon: 'verified_user'
                            })
                            this.title = '';
                            this.gradeList = [];
                            this.getData();
                            this.$validator.reset()
                        })
                    }
                })
            },
            changeStatus(id, status) {
                let stat = status === 'active' ? 'in-active' : 'active';
                let url = '/json/grading/' + id + '/' + stat;
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
                this.$router.push({name: 'gradingEdit', params: {id: id}})
            },
            deletePopModal(id) {
                this.deleteItem = id;
                this.deletePop = true
            },
            deleteItems() {
                this.$http.get('/json/grading/' + this.deleteItem + '/delete').then(res => {
                    this.getData();
                    this.$vs.notify({
                        title: res.data[0],
                        text: res.data[1],
                        color: res.data[0],
                        icon: 'verified_user'
                    })
                })
            },
            addRow() {
                this.gradeList.push({
                    name: '',
                    percentage_from: '',
                    percentage_to: '',
                    grade_point: '',
                    description: ''
                });
                console.log(this.gradeList)
            },
            removeList(idx) {
                this.gradeList.splice(idx, 1)
            },
        }
    }
</script>

<style scoped>

</style>
