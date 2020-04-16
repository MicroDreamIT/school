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
                    <div class="row p-4">
                        <h4 class="ml-4">Staff Documents Manager</h4>
                        <div class="col-md-12 row">
                            <div class="col-md-4">
                                <br>
                                <h4 class="header large lighter blue">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    Create Staff Documents
                                </h4><br>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Reg No</label>
                                    <div class="col-sm-9">
                                        <vs-input v-model="document.reg_no" class="w-100"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <vs-input v-model="document.title" class="w-100"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Select File</label>
                                    <div class="col-sm-9">
                                        <vs-input type="file" v-model="document.document_file" class="w-100">

                                        </vs-input>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <vs-textarea v-model="document.description"/>
                                    </div>
                                </div>
                                <hr>
                                <button class="btn btn-info waves-effect waves-light" type="submit">
                                    <i class="fa fa-save bigger-110"></i>
                                    upload
                                </button>
                            </div>
                            <div class="col-md-8"><br>

                                <data-table-final :headers="headers"
                                                  :tableHeader="'Document List'"
                                                  :suggestText="'Document list on table. Filter Document using the filter.'"
                                                  :url="'/json/staff/document'"
                                                  :model="'route'"
                                                  :noDataMessage="'No Document data found. Please Filter document to show.'"
                                                  :hasSearch="true"
                                                  :has-multiple="true"
                                                  :has-pagination="true"
                                                  :filterSection="true"
                                                  ref="dataTableDocument"
                                                  :ajaxVariableSet="['document']"
                                                  @get-return-value="GetReturnValue"
                                                  :showAction="false"
                                >
                                    <template slot="items" slot-scope="props">
                                        <vs-td :data="props.data.reg_no">
                                            <router-link class="pointer-all text-primary" :to="'/staff/'+props.data.member_id+'/details'">
                                                {{props.data.reg_no}}
                                            </router-link>

                                        </vs-td>
                                        <vs-td :data="props.data.file">
                                            <a :href="'/documents/staff/'+props.data.reg_no+'/'+props.data.file"
                                               class="pointer-all text-primary"
                                               target="_blank">
                                                {{props.data.file}}
                                            </a>
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
                    {name: 'reg no', sort_key: 'reg_no'},
                    {name: 'Staff Documents', field: 'file'},
                    {name: 'Action'},
                    {name: 'Status', field: 'status'},
                ],
                notification: '',
                document: {}
            }
        },
        created() {

        },
        methods: {
            GetReturnValue(arg = null) {
                let val = arg.map(st => {
                    return {
                        id: st.id,
                        reg_no: st.staffregno,
                        status: st.status,
                        file: st.file,
                        member_id:st.member_id
                    }
                });
                this.$store.dispatch('updateTableData', val)
            },
            getData() {

            },
            viewItems(id) {
                this.$router.push({name: 'studentView', params: {id: id}})
            },
            editItems(id) {
                alert("hey hasib im edit ")
            },
            deleteItems(id) {
                alert("hey hasib im delete ")
            },
            changeStatus() {

            },
        }

    }


</script>

<style scoped>

</style>
