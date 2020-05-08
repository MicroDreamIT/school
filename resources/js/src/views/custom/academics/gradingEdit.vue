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
                            <h4><i class="fa fa-search"></i>Update Grading Scale</h4><br>
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
                                <i class="fa fa-save bigger-110"></i> Update
                            </vs-button>
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
                this.$http.get(this.url+'/'+this.$route.params.id+'/edit').then(res => {
                    this.title=res.data.row.title
                    this.items = res.data.data;
                    this.mainItem = this.items;
                    this.gradeList = res.data.grade_scale
                })
            },

            submit() {
                this.$validator.validateAll().then(value => {
                    if (value) {
                        this.$http.post(this.url+'/'+this.$route.params.id+'/update', {
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
                            this.$root.notification.status = res.data[0];
                            this.$root.notification.message = res.data[1];
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
                    this.$root.notification.status = res.data[0];
                    this.$root.notification.message = res.data[1]
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
                    this.$root.notification.status = res.data[0];
                    this.$root.notification.message = res.data[1]
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
