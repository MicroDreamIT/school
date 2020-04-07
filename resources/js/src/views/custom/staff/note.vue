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
                        <h4 class="ml-4">Staff Notes Manager</h4>
                        <div class="col-md-12 row">
                            <div class="col-md-4">
                                <br>
                                <h4 class="header large lighter blue">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    Create Staff Notes
                                </h4><br>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Reg No</label>
                                    <div class="col-sm-9">
                                        <vs-input v-model="forms.reg_no" class="w-100"
                                                  :danger="error.reg_no!==undefined" ref="staffnote"/>
                                        <p v-if="error.reg_no!==undefined" class="text-danger">{{ error.reg_no[0] }}</p>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Sub</label>
                                    <div class="col-sm-9">
                                        <vs-input v-model="forms.subject" class="w-100"
                                                  :danger="error.subject!==undefined"/>
                                        <p v-if="error.subject!==undefined" class="text-danger">{{ error.subject[0]
                                            }}</p>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Note</label>
                                    <div class="col-sm-9">
                                        <textarea v-model="forms.note" class="form-control" :danger="error.note!==undefined"></textarea>
                                        <p v-if="error.note!==undefined" class="text-danger">{{ error.note[0] }}</p>
                                    </div>
                                </div>
                                <hr>
                                <button class="btn btn-info waves-effect waves-light" @click="posting">
                                    <i class="fa fa-save bigger-110"></i>
                                    {{buttonText}}
                                </button>
                            </div>
                            <div class="col-md-8"><br>

                                <data-table-final :headers="headers"
                                                  :tableHeader="'Note List'"
                                                  :suggestText="'Note Record list on table. Filter history using the filter.'"
                                                  :url="url"
                                                  :model="'vehicle'"
                                                  :noDataMessage="'No Note data found. Please Filter history to show.'"
                                                  :hasSearch="true"
                                                  :has-multiple="true"
                                                  :has-pagination="true"
                                                  :filterSection="true"
                                                  ref="dataTableNote"
                                                  :ajaxVariableSet="['note']"
                                                  @get-return-value="GetReturnValue"
                                                  :showAction="false"
                                >
                                    <template slot="items" slot-scope="props">
                                        <vs-td :data="props.data.reg_no">
                                            {{props.data.reg_no}}
                                        </vs-td>
                                        <vs-td :data="props.data.subject">
                                            {{props.data.subject}}
                                        </vs-td>
                                        <vs-td :data="props.data.action">
                                            <div class="action-own">
                                                <a class="btn btn-success btn-sm pointer-all"
                                                   title="Edit"
                                                   @click.stop="editItems(props.data.all)">
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
                    </div>
                </vs-card>
            </div>
        </div>

    </div>
</template>

<script>
    import StaffNavigation from '../../components/navigation/staff-navigation.vue'

    export default {
        components: {
            'staff-navigation': StaffNavigation
        },
        data() {
            return {

                headers: [
                    {name: 'Reg. No.', sort_key: 'reg_no'},
                    {name: 'N.subject', sort_key: 'subject'},
                    {name: 'Action'},
                    {name: 'Status'},
                ],
                notification: '',
                forms: {
                    id: null,
                    subject: '',
                    note: '',
                    reg_no: ''

                },
                error: [],
                buttonText: 'create',
                url: '/json/staff/note'
            }
        },
        methods: {
            GetReturnValue(arg = null, total) {
                let val = arg.map(st => {
                    return {
                        id: st.id,
                        reg_no: st.staff.reg_no,
                        subject: st.subject,
                        status: st.status,
                        all: st
                    }
                });
                this.$store.dispatch('updateTableData', val)
            },
            posting() {
                if (this.forms.id) {
                    this.$http.post(this.url + '/' + this.forms.id + '/update', this.forms)
                        .then(res => {
                            if (res.status === 200) {
                                this.$vs.notify({
                                    title: res.data[0],
                                    text: res.data[1],
                                    color: res.data[0],
                                    icon: 'verified_user'
                                })
                                this.$refs.dataTableNote.getData()
                                this.forms.id = null
                                this.forms.subject = ''
                                this.forms.note = ''
                                this.forms.reg_no = ''
                                this.buttonText = 'Create'
                                this.error = []
                            }
                        })
                        .catch(err => {
                            if (err.response) {
                                this.error = err.response.data.errors
                            }
                        })
                } else {
                    this.$http.post(this.url + '/store', this.forms)
                        .then(res => {
                            if (res.status === 200) {
                                this.$vs.notify({
                                    title: res.data[0],
                                    text: res.data[1],
                                    color: res.data[0],
                                    icon: 'verified_user'
                                })
                                this.$refs.dataTableNote.getData()
                                this.forms.id = null
                                this.forms.subject = ''
                                this.forms.note = ''
                                this.forms.reg_no = ''
                                this.selected = []
                                this.error = []
                            }
                        })
                        .catch(err => {
                            if (err.response) {
                                this.error = err.response.data.errors
                            }
                        })
                }
            },
            viewItems(id) {
                this.$router.push({name: 'staff.note', params: {id: id}})
            },
            editItems(item) {
                this.forms.id = item.id
                this.forms.subject = item.subject
                this.forms.reg_no = item.staff.reg_no
                this.forms.note = item.note
                this.buttonText = 'update'
                this.$refs.staffnote.$el.querySelector('input').focus()
            },
            deleteItems(id) {
                this.$dialog.confirm('Are you sure? These items will be permanently deleted and cannot be recovered.').then(dialog => {
                    this.$http.get(this.url + '/' + id + '/delete').then(res => {
                        this.$refs.dataTableNote.getData()
                        this.$vs.notify({title: res.data[0], text: res.data[1], color: res.data[0], icon: 'verified'})
                    })
                })
            },
            changeStatus(id) {
                let stat = status === 'active' ? 'in-active' : 'active';
                let url = this.url + '/' + id + '/' + stat;
                this.$http.get(url).then(res => {
                    this.$refs.dataTableNote.getData()
                    this.$vs.notify({title: res.data[0], text: res.data[1], color: res.data[0], icon: 'verified_user'})
                })
            },
        }

    }


</script>

<style scoped>

</style>
