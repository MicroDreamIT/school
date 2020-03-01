<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Faculty/Level/Class Manager</h2>
                <div role="alert" class="mt-2 alert alert-success alert-dismissible display-block">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <i class="ace-icon fa fa-hand-o-right"></i>
                    Please, Create Year and Active
                </div>
            </div>
            <div class="col-md-12">
                <vs-card>
                    <div class="row p-4">
                        <div class="col-md-4"><br>
                            <h4><i class="fa fa-search"></i> Create Faculty/Level/Class</h4><br>
                            <div class="form-group">
                                <label>Faculty/Class</label>
                                <vs-input class="w-100"></vs-input>
                            </div>
                            <div class="form-group">
                                <label>Faculty/ClassCode</label>
                                <vs-input class="w-100"></vs-input>
                            </div>
                            <div class="form-group">
                                <label>Semister/section</label>
                                <div class="d-flex">
                                    <vs-checkbox class="flex-1">1</vs-checkbox>
                                    <vs-checkbox class="flex-1">3</vs-checkbox>
                                </div>

                            </div>
                            <vs-divider></vs-divider>
                            <vs-button color="#00b8cf"
                                       type="filled"
                                       class="my-round">Create
                            </vs-button>
                        </div>
                        <div class="col-md-8"><br>
                            <ow-data-table :headers="tableHeader"
                                           :tableHeader="'Faculty/Level/Class List'"
                                           :suggestText="'Faculty/Level/Class Record list on table. Filter Faculty/Level/Class using the filter.'"
                                           :url="'/student'"
                                           :noDataMessage="'No Faculty data found. Please Filter Faculty to show.'"
                                           :searchField="searchData"
                                           :hasSearch="true"
                                           :has-multiple="true"
                                           :has-pagination="true"
                            >
                                <template slot="items" slot-scope="props">
                                    <vs-td :data="props.data.username" class="pointer-none">
                                        {{props.data.email}}
                                    </vs-td>

                                    <vs-td :data="props.data.username">
                                        {{props.data.username}}
                                    </vs-td>

                                    <vs-td :data="props.data.id">
                                        {{props.data.website}}
                                    </vs-td>

                                    <vs-td :data="props.id">
                                        {{props.data.id}}
                                    </vs-td>
                                </template>
                            </ow-data-table>
                        </div>
                    </div>

                </vs-card>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        components: {},
        name: "payment-method",
        data() {
            return {
                searchData: {},
                tableHeader: [
                    {name: 'Email', field: 'email', sort_key: 'email'},
                    {name: 'Name', field: 'name', sort_key: 'name'},
                    {name: 'Mobile', field: 'mobile'},
                    {name: 'PID'},
                ],
            }
        }
    }
</script>

<style scoped>

</style>
