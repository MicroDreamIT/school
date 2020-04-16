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
                                                  :tableHeader="'Route List'"
                                                  :suggestText="'Route Record list on table. Filter room type using the filter.'"
                                                  :url="'/json/staff/document'"
                                                  :model="'route'"
                                                  :noDataMessage="'No Route data found. Please Filter room type to show.'"
                                                  :hasSearch="true"
                                                  :has-multiple="true"
                                                  :has-pagination="true"
                                                  :filterSection="true"
                                                  ref="dataTableRoute"
                                                  :ajaxVariableSet="['route']"
                                                  @get-return-value="GetReturnValue"
                                                  :showAction="false"
                                >
                                    <template slot="items" slot-scope="props">
                                        <vs-td>

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
