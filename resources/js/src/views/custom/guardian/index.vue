<template>
    <div>
        <div class="row">
            <div class="col-md-12 mb-2">
                <h2 class="pageTitle">Guardian Manager</h2>
            </div>
            <div class="col-md-12">
                <div class="row mx-0">
                    <router-link :to="'/guardian'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            Detail
                        </vs-button>
                    </router-link>
                    <router-link :to="'/guardian/registration'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Registration
                        </vs-button>
                    </router-link>
                </div>
            </div>
            <div class="col-md-12" v-if="notification">
                <div role="alert"
                     class="mt-2 alert alert-success alert-dismissible display-block"
                >
                    <button type="button"
                            data-dismiss="alert"
                            aria-label="Close"
                            class="close"
                            @click="notification=''"
                    >
                        <span aria-hidden="true">×</span>
                    </button>
                    <i class="ace-icon fa fa-hand-o-right"></i>
                    {{notification}}
                </div>
            </div>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">

                <vs-card>
                    <guardian-table :headers="guardianHeader"
                                   :tableHeader="'Guardian List'"
                                   :suggestText="'Guardian Record list on table. Filter Guardians using the filter.'"
                                   :url="'/json/guardian/'"
                                   :noDataMessage="'No Guardian data found. Please Filter Guardian to show.'"
                                   :hasSearch="true"
                                   :has-multiple="true"
                                   :has-pagination="true"
                                   :filterSection="true"
                    >
                        <template slot="items" slot-scope="props">
                            <vs-td>
                                {{props.data.guardian_first_name }}
                            </vs-td>
                            <vs-td >
                                <a @click.stop="viewItems(props.data.id)"
                                   class="pointer-all text-primary"
                                   title="View"
                                >
                                    {{props.data.guardian_address}}
                                </a>

                            </vs-td>
                            <vs-td>
                                {{props.data.guardian_mobile_1}}
                            </vs-td>
                           
                            <vs-td>
                                {{props.data.status}}
                            </vs-td>
                            <vs-td>
                                sdf
                            </vs-td>
                            <vs-td>
                            <div class="action-own">
                            <a class="btn btn-primary btn-sm pointer-all"
                            title="View"
                            @click.stop="viewItems(props.data.id)"
    
                            >
                            <i class="fa fa-eye"></i>
                            </a>
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
                    </guardian-table>
                </vs-card>
            </div>
        </div>
    </div>
</template>

<script>
    import GuardianTable from "../component/table/guardian-table";
    export default {
        components: {GuardianTable},
        data() {
            return {
                guardianHeader: [
                    {name: 'Name', sort_key: 'faculty'},
                    {name: 'Address', sort_key: ''},
                    {name: 'Contact', sort_key: 'guardian_mobile_1'},
                    {name: 'Students', sort_key: ''},
                    {name: 'Status', sort_key: ''},
                    {name: 'Action', sort_key: ''},
                ],
                notification: '',

            }
        },

        created() {

        },

        methods: {


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
