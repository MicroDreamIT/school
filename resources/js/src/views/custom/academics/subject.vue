<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Course Manager</h2>
            </div>
            <notify-bar/>
            <div class="col-md-12">
                <vs-card>
                    <div class="row p-4">
                        <div class="col-md-5">
                            <h4><i class="fa fa-search"></i> Create Course</h4><br>
                            <div class="form-group  row">
                                <label class="col-md-2">Subject</label>
                                <vs-input class="col-md-10"
                                          v-model="subject.title"
                                          placeholder="e.g: English"
                                          v-validate="'required'"
                                          data-vv-name="title"
                                          :danger="errors.first('title')?true:false"
                                          :danger-text="errors.first('title')"
                                >

                                </vs-input>
                            </div>

                            <div class="form-group  row">
                                <label class="col-md-2">Code</label>
                                <vs-input class="col-md-10"
                                          v-model="subject.code"
                                          placeholder="e.g: E01"
                                          v-validate="'required'"
                                          data-vv-name="code"
                                          :danger="errors.first('code')?true:false"
                                          :danger-text="errors.first('code')"
                                >

                                </vs-input>
                            </div>
                            <div class="d-flex   justify-content-between  ">
                                <div class="form-group mx-1 flex-1  mdInput mb-3">
                                    <label>FM (T)</label>
                                    <vs-input
                                            type="number"
                                            min="0"
                                            v-model="subject.full_mark_theory"
                                    >

                                    </vs-input>
                                </div>

                                <div class="form-group  mx-1 flex-1 mdInput mb-3">
                                    <label>PM (T)</label>
                                    <vs-input
                                            type="number"
                                            min="0"
                                            v-model="subject.pass_mark_theory"
                                    >

                                    </vs-input>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="form-group mx-1 flex-1 mdInput mb-3">
                                    <label>FM (P)</label>
                                    <vs-input
                                            type="number"
                                            min="0"
                                            v-model="subject.full_mark_practical"

                                    >

                                    </vs-input>
                                </div>

                                <div class="form-group mx-1 flex-1 mdInput mb-3">
                                    <label>PM (P)</label>
                                    <vs-input
                                            type="number"
                                            min="0"
                                            v-model="subject.pass_mark_practical"
                                    >

                                    </vs-input>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-md-3">Credit Hour</label>
                                <vs-input class="col-md-9"
                                          type="number"
                                          min="0"
                                          v-model="subject.credit_hour"
                                >

                                </vs-input>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3">Subject Type</label>
                                <vs-select
                                        autocomplete
                                        class="col-md-9"
                                        v-model="subject.sub_type"
                                        v-validate="'required'"
                                        data-vv-name="sub_type"
                                        :danger="errors.first('sub_type')?true:false"
                                        :danger-text="errors.first('sub_type')"

                                >
                                    <vs-select-item :key="index" :value="item" :text="item"
                                                    v-for="(item,index) in ['Compulsory','Optional']"/>
                                </vs-select>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3">Class Type</label>
                                <vs-select
                                        autocomplete
                                        class="col-md-9"
                                        v-model="subject.class_type"
                                        v-validate="'required'"
                                        data-vv-name="class_type"
                                        :danger="errors.first('class_type')?true:false"
                                        :danger-text="errors.first('class_type')"
                                >
                                    <vs-select-item :key="index" :value="item" :text="item"
                                                    v-for="(item,index) in ['Theory','Practical','Both']"/>
                                </vs-select>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3">Teacher/Staff</label>
                                <vs-select
                                        autocomplete
                                        class="col-md-9"
                                        v-model="subject.staff_id"
                                        v-validate="'required'"
                                        data-vv-name="staff"
                                        :danger="errors.first('staff')?true:false"
                                        :danger-text="errors.first('staff')"
                                        placeholder="Select Teacher"
                                >
                                    <vs-select-item :key="index" :value="item.id" :text="item.value"
                                                    v-for="(item,index) in staff"/>
                                </vs-select>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3">Description</label>
                                <vs-textarea class="col-md-9"
                                             v-model="subject.description"
                                >

                                </vs-textarea>
                            </div>

                            <vs-divider></vs-divider>
                            <vs-button color="#00b8cf"
                                       type="filled"
                                       class="my-round"
                                       @click.prevent="submit"
                            >Create
                            </vs-button>
                        </div>
                        <div class="col-md-7">
                            <ow-data-table :headers="tableHeader"
                                           :tableHeader="'Course List'"
                                           :suggestText="'Course Record list on table. Filter Course using the filter.'"
                                           :url="url"
                                           :noDataMessage="'No Course data found. Please Filter Course to show.'"
                                           :hasSearch="true"
                                           :has-multiple="true"
                                           :has-pagination="true"
                                           :main-item="mainItem"
                                           :getData="getData"
                            >
                                <template slot="items" slot-scope="props">
                                    <vs-td :data="props.data.title">
                                        <div class="d-flex flex-column">
                                            <span class="p-2">
                                                {{props.data.title}}
                                            </span>
                                            <span
                                                    class="p-2 border-t">
                                                {{props.data.code}}
                                            </span>
                                        </div>
                                    </vs-td>
                                    <vs-td>
                                        <div class="d-flex flex-column">
                                            <span class="p-2">
                                                {{'FM(T) - '+props.data.full_mark_theory}}
                                            </span>
                                            <span
                                                    class="p-2 border-t">
                                                {{'PM(T) - '+props.data.pass_mark_theory}}
                                            </span>
                                            <span
                                                    class="p-2 border-t">
                                                {{'FM(P) - '+props.data.full_mark_practical}}
                                            </span>
                                            <span
                                                    class="p-2 border-t">
                                                {{'PM(P) - '+props.data.pass_mark_practical}}
                                            </span>
                                        </div>
                                    </vs-td>
                                    <vs-td>
                                        <div class="d-flex flex-column">
                                            <div class="p-2 d-flex">
                                                <span class="flex-1">Credit Hour- </span>
                                                <span class="flex-1 pl-3">{{props.data.credit_hour}}</span>

                                            </div>
                                            <div class="p-2 border-t d-flex">
                                                <span class="flex-1">Subject Type -</span>
                                                <span class="flex-1 pl-3">{{props.data.sub_type}}</span>
                                            </div>
                                            <div class="p-2 border-t d-flex">
                                                <span class="flex-1">Class Type -</span>
                                                <span class="flex-1 pl-3">{{props.data.class_type}}</span>
                                            </div>

                                            <div class="p-2 border-t d-flex">
                                                <span class="flex-1">Teacher/Staff -</span>
                                                <span class="flex-1 pl-3"> {{props.data.staff.first_name?props.data.staff.first_name:' '}}
                                                {{props.data.staff.middle_name?' '+props.data.staff.middle_name:' '+' '}}
                                                {{props.data.staff.last_name?' '+props.data.staff.last_name:' '}}</span>
                                            </div>

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
                                            Course
                                        </th>
                                        <th>
                                            Marking
                                        </th>
                                        <th>
                                            Info
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
                                            <div class="d-flex flex-column">
                                            <span class="p-2">
                                                {{tr.title}}
                                            </span>
                                                <span
                                                        class="p-2 border-t">
                                                {{tr.code}}
                                            </span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                            <span class="p-2">
                                                {{'FM(T) - '+tr.full_mark_theory}}
                                            </span>
                                                <span
                                                        class="p-2 border-t">
                                                {{'PM(T) - '+tr.pass_mark_theory}}
                                            </span>
                                                <span
                                                        class="p-2 border-t">
                                                {{'FM(P) - '+tr.full_mark_practical}}
                                            </span>
                                                <span
                                                        class="p-2 border-t">
                                                {{'PM(P) - '+tr.pass_mark_practical}}
                                            </span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <div class="p-2 d-flex">
                                                    <span class="flex-1">Credit Hour- </span>
                                                    <span class="flex-1 pl-3">{{tr.credit_hour}}</span>

                                                </div>
                                                <div class="p-2 border-t d-flex">
                                                    <span class="flex-1">Subject Type -</span>
                                                    <span class="flex-1 pl-3">{{tr.sub_type}}</span>
                                                </div>
                                                <div class="p-2 border-t d-flex">
                                                    <span class="flex-1">Class Type -</span>
                                                    <span class="flex-1 pl-3">{{tr.class_type}}</span>
                                                </div>

                                                <div class="p-2 border-t d-flex">
                                                    <span class="flex-1">Teacher/Staff -</span>
                                                    <span class="flex-1 pl-3"> {{tr.staff.first_name?tr.staff.first_name:' '}}
                                                {{tr.staff.middle_name?' '+tr.staff.middle_name:' '+' '}}
                                                {{tr.staff.last_name?' '+tr.staff.last_name:' '}}</span>
                                                </div>

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
                subject: {sub_type: 'Compulsory', class_type: 'Theory'},
                tableHeader: [
                    {name: 'Course', sort_key: 'title'},
                    {name: 'Marking', sort_key: ''},
                    {name: 'Info', sort_key: ''},
                    {name: 'Status'},
                    {name: 'Action'},
                ],
                items: [],
                mainItem: [],
                staff: [],
                deletePop: false,
                deleteItem: null,
                url: '/json/subject',
            }
        },
        created() {
            this.getData()
        },

        methods: {
            getData() {
                this.$http.get(this.url).then(res => {
                    this.items = res.data.subject;
                    this.mainItem = this.items;
                    this.staff = this.$root.objectToArray(res.data.staff);
                })
            },

            submit() {
                this.$validator.validateAll().then(value => {
                    if (value) {
                        this.$http.post(this.url + '/store', this.subject).then(res => {
                            this.$root.notification.status = res.data[0];
                            this.$root.notification.message = res.data[1];
                            this.subject = {};
                            this.subjects = [];
                            this.getData();
                            this.$validator.reset()
                        })
                    }
                })
            },

            changeStatus(id, status) {
                let stat = status === 'active' ? 'in-active' : 'active';
                let url = '/json/subject/' + id + '/' + stat;
                this.$http.get(url).then(res => {
                    this.getData();
                    this.$root.notification.status = res.data[0];
                    this.$root.notification.message = res.data[1]
                })

            },
            editItems(id) {
                this.$router.push({name: 'subjectEdit', params: {id: id}})
            },
            deletePopModal(id) {
                this.deleteItem = id;
                this.deletePop = true
            },
            deleteItems() {
                this.$http.get('/json/subject/' + this.deleteItem + '/delete').then(res => {
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

