<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Faculty/Level/Class Manager</h2>
            </div>
            <notify-bar/>
            <vs-divider class="mx-3"></vs-divider>
            <div class="col-md-12">
                <vs-card>
                    <div class="row p-4">
                        <div class="col-md-4"><br>
                            <h4><i class="fa fa-search"></i> Create Faculty/Level/Class</h4><br>
                            <div class="form-group">
                                <label>Faculty/Class</label>
                                <vs-input
                                        class="w-100"
                                        placeholder="e.g. Class One/Bachelor of Business Admin.."
                                        v-validate="'required'"
                                        v-model="faculty.faculty"
                                        data-vv-name="faculty"
                                        :danger="errors.first('faculty')?true:false"
                                        :danger-text="errors.first('faculty')"
                                >

                                </vs-input>
                            </div>
                            <div class="form-group">
                                <label>Faculty/ClassCode</label>
                                <vs-input
                                        class="w-100"
                                        v-validate="'required'"
                                        v-model="faculty.faculty_code"
                                        data-vv-name="faculty_code"
                                        :danger="errors.first('faculty_code')?true:false"
                                        :danger-text="errors.first('faculty_code')"
                                >

                                </vs-input>
                            </div>
                            <div class="form-group">
                                <label>Semester/section</label>
                                <div class="d-flex">
                                    <vs-checkbox
                                            class="flex-1"
                                            v-model="faculty.semester"
                                            :vs-value="sem.id"
                                            v-for="sem in semester"
                                            :key="sem.id"
                                    >{{sem.semester}}
                                    </vs-checkbox>
                                </div>

                            </div>
                            <vs-divider></vs-divider>
                            <vs-button color="#00b8cf"
                                       type="filled"
                                       class="my-round"
                                       @click="submit"
                            >
                                Create
                            </vs-button>
                        </div>
                        <div class="col-md-8"><br>
                            <ow-data-table :headers="tableHeader"
                                           :tableHeader="'Faculty/Level/Class List'"
                                           :suggestText="'Faculty/Level/Class Record list on table. Filter Faculty/Level/Class using the filter.'"
                                           :url="url"
                                           :noDataMessage="'No Faculty data found. Please Filter Faculty to show.'"
                                           :hasSearch="true"
                                           :has-multiple="true"
                                           :has-pagination="true"
                                           :main-item="mainItem"
                                           :getData="getData"
                            >
                                <template slot="items" slot-scope="props">
                                    <vs-td :data="props.data.faculty">
                                        {{'['+props.data.id+']-'+props.data.faculty+'-[CODE-'+props.data.faculty_code+']'}}
                                    </vs-td>

                                    <vs-td>
                                        <div class="d-flex flex-column">
                                            <span v-for="(sem,idx) in props.data.semester"
                                                  :class="{'p-2':true ,'border-t':idx>0}">
                                                {{sem.id+'-['+sem.semester+']'}}
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
                                                Code-Faculty/Level/Class
                                            </th>
                                            <th>
                                                Sem./Sec.
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
                                                {{'['+tr.id+']-'+tr.faculty+'-[CODE-'+tr.faculty_code+']'}}
                                            </td>
                                            <td>
                                                <div>
                                                    <span v-for="(sem,idx) in tr.semester"
                                                          :class="{'p-2':true ,'border-t':idx>0}">
                                                        {{sem.id+'-['+sem.semester+']'}}
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
                faculty: {semester: []},
                tableHeader: [
                    {name: 'Code-Faculty/Level/Class', sort_key: 'faculty'},
                    {name: 'Sem./Sec.', sort_key: ''},
                    {name: 'Status', sort_key: ''},
                    {name: 'Action'},
                ],
                url: '/json/faculty',
                mainItem: [],
                items: [],
                semester: [],
                deletePop: false,
                deleteItem: null
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
                    this.semester = res.data.semester;
                })
            },
            submit() {
                this.$validator.validateAll().then(value => {
                    if (value) {
                        this.$http.post(this.url + '/store', {
                            semester: this.faculty.semester,
                            faculty: this.faculty.faculty,
                            faculty_code: this.faculty.faculty_code
                        }).then(res => {
                            this.$root.notification.status = res.data[0];
                            this.$root.notification.message = res.data[1];
                            this.faculty = {faculty: '', faculty_code: '', semester: []};
                            this.getData()
                        })
                    }
                })
            },

            changeStatus(id, status) {
                let stat = status === 'active' ? 'in-active' : 'active';
                let url = '/json/faculty/' + id + '/' + stat;
                this.$http.get(url).then(res => {
                    this.getData();
                    this.$root.notification.status = res.data[0];
                    this.$root.notification.message = res.data[1]
                })

            },
            editItems(id) {
                this.$router.push({name: 'facultyEdit', params: {id: id}})
            },
            deletePopModal(id) {
                this.deleteItem = id;
                this.deletePop = true
            },
            deleteItems() {
                this.$http.get('/json/faculty/' + this.deleteItem + '/delete').then(res => {
                    this.getData();
                    this.$root.notification.status = res.data[0];
                    this.$root.notification.message = res.data[1]
                })
            },
        }
    }
</script>

<style scoped>

</style>
