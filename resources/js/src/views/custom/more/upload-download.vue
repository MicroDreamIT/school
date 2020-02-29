<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Download Manager</h2>
            </div>
            <vs-card>
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            Info: Please, select target Faculty/Class, Sem./Sec. for download access. Other wise it show all the user.
                        </div>
                        <div>Create Download</div>
                        <div class="d-flex justify-content-between flex-wrap">
                            <p class="flex-1">Faculty</p>
                            <v-select class="flex-1"></v-select>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap">
                            <p class="flex-1">Sem./Sec.</p>
                           <v-select class="flex-1"></v-select>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap">
                            <p class="flex-1">Title</p>
                            <v-select class="flex-1"></v-select>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap">
                            <p class="flex-1">Select File</p>
                            <vs-input type="file" class="flex-1"></vs-input>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap">
                            <p class="flex-1">Description</p>
                            <vs-textarea class="flex-1"></vs-textarea>
                        </div>
                        <vs-divider></vs-divider>
                        <vs-button color="#00b8cf"
                                   type="filled"
                                   class="my-round">Create
                        </vs-button>
                    </div>
                    <div class="col-md-8">
                        <h4 class="header large lighter blue">
                            <i class="fa fa-list" aria-hidden="true"></i>&nbsp;Download List</h4>
                        <div class="clearfix mt-3">
                            <div class="easy-link-menu">
                                <a class="btn-success btn-sm bulk-action-btn">
                                    <i class="fa fa-check" aria-hidden="true"></i> Active</a>
                                <a class="btn-warning btn-sm bulk-action-btn">
                                    <i class="fa fa-remove" aria-hidden="true"></i>
                                    In-Active</a>
                                <a class="btn-danger btn-sm bulk-action-btn">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                            </div>
                        </div>
                        <br>
                        <div class="table-header">
                           Download Record list on table. Filter Download using the filter.
                        </div>
                        <data-table :headers="tableHeader"
                                    :url="'/student'"
                                    :no-data-message="'No Download data found. Please Filter Download to show.'"
                                    :searchField="searchData"
                                    :hasSearch="true"
                                    :has-multiple="true"
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
                        </data-table>
                    </div>
                </div>

            </vs-card>
        </div>
    </div>
</template>

<script>

    export default {
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
