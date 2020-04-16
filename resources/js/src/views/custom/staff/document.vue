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

                                <ow-data-table :headers="tableHeader"
                                               :tableHeader="'Staff Documents List'"
                                               :url="'/json/student/'"
                                               :noDataMessage="'No Staff Document data found. Please Filter Staff Document to show.'"
                                               :has-search="true"
                                               :has-multiple="true"
                                               :has-pagination="true"
                                               :suggestText="'Staff Documents Record list on table. Filter Staff Documents using the filter.'"
                                >
                                    <template slot="items" slot-scope="props">
                                        <vs-td :data="props.data.reg_no">
                                            <a @click.stop="viewItems(props.data.id)"
                                               class="pointer-all text-primary"
                                               title="View"
                                            >
                                                {{props.data.reg_no}}
                                            </a>

                                        </vs-td>

                                        <vs-td>
                                            {{props.data.document}}
                                        </vs-td>

                                        <vs-td>
                                            <div class="d-flex">
                                                {{props.data.academic_status}}
                                                <vs-switch color="success"
                                                           :checked="props.data.status=='active'?true:false"
                                                           @click.stop="changeStatus(props.data.id)"
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
        components: {
            'staff-navigation': StaffNavigation
        },
        data() {
            return {

                tableHeader: [
                    {name: 'Reg. No.', sort_key: 'reg_no'},
                    {name: 'Staff Documents'},
                    {name: 'Status'},
                    {name: 'Action'},
                ],
				notification:'',
				document:{}
            }
        },
        created(){

        },
        methods: {
            getData(){

            },
            viewItems(id) {
                this.$router.push({name: 'studentView', params: {id: id}})
            },
            editItems() {
                alert("hey hasib im edit ")
            },
            deleteItems() {
                alert("hey hasib im delete ")
            },
            changeStatus() {

            },
        }

    }


</script>

<style scoped>

</style>
