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
                            <h4><i class="fa fa-search"></i> Update Course</h4><br>
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
                            >Update
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
                this.$http.get(this.url+'/'+this.$route.params.id+'/edit').then(res => {
                    this.items = res.data.data;
                    this.mainItem = this.items;
                    this.subject = res.data.row
                    this.staff = this.$root.objectToArray(res.data.staff);
                })
            },

            submit() {
                this.$validator.validateAll().then(value => {
                    if (value) {
                        this.$http.post(this.url +'/'+this.$route.params.id+'/update', this.subject).then(res => {
                            this.$vs.notify({
                                title: res.data[0],
                                text: res.data[1],
                                color: res.data[0],
                                icon: 'verified_user'
                            })
                            this.subject = {};
                            this.subjects = [];
                            this.getData();
                            this.$validator.reset()
                            this.$router.push({path:'/subject'})
                        })
                    }
                })
            },

            changeStatus(id, status) {
                let stat = status === 'active' ? 'in-active' : 'active';
                let url = '/json/subject/' + id + '/' + stat;
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
                this.$router.push({name: 'subjectEdit', params: {id: id}})
            },
            deletePopModal(id) {
                this.deleteItem = id;
                this.deletePop = true
            },
            deleteItems() {
                this.$http.get('/json/subject/' + this.deleteItem + '/delete').then(res => {
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

