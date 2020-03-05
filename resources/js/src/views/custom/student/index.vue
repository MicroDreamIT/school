<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Details</h2>
                <div class="p-2">
                    <router-link :to="'/student'">
                        <vs-button type="filled" class="smBtn">Primary</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">Primary</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">Primary</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">Primary</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">Primary</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">
                            Primary
                        </vs-button>
                    </router-link>

                </div>
            </div>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
       
                <vs-card>
                    <student-table :headers="studentHeader"
                                   :tableHeader="'Student List'"
                                   :suggestText="'Student Record list on table. Filter Students using the filter.'"
                                   :url="'/json/student/'"
                                   :noDataMessage="'No Student data found. Please Filter Student to show.'"
                                   :hasSearch="true"
                                   :has-multiple="true"
                                   :has-pagination="true"
                                   :filterSection="true"
                    >
                        <template slot="items" slot-scope="props">
                            <vs-td :data="props.data.faculty" class="pointer-none">
                                {{props.data.faculty}}
                            </vs-td>

                            <vs-td :data="props.data.semester">
                                {{props.data.semester}}
                            </vs-td>

                            <vs-td :data="props.data.reg_no">
                                {{props.data.reg_no}}
                            </vs-td>

                            <vs-td :data="props.data.name">
                                {{props.data.first_name+' '+props.data.middle_name+' '+props.data.last_name}}
                            </vs-td>
                            <vs-td>
                                {{props.data.academic_status+' '+props.data.status}}
                            </vs-td>
                            <vs-td>
                             <div class="action-own">
                                 <a class="btn btn-primary btn-sm waves-effect waves-light" title="View" @click="viewItems()">
                                     <i class="fa fa-eye"></i>
                                 </a>
                                 <a class="btn btn-success btn-sm waves-effect waves-light"title="Edit"   @click="editItems()">
                                     <i class="fa fa-pencil"></i>
                                 </a>
                                 <a class="btn btn-danger btn-sm bootbox-confirm waves-effect waves-light"title="Delete"  @click="deleteItems()">
                                     <i class="fa fa-trash-o"></i>
                                 </a>
                             </div>
                            </vs-td>
                            <vs-td>
                                Service Activations
                            </vs-td>
                        </template>
                    </student-table>
                </vs-card>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        components: {},
        data() {
            return {
                studentHeader: [
                    {name: 'Faculty/Class', sort_key: 'name'},
                    {name: 'Sem', sort_key: ''},
                    {name: 'Reg.Num', sort_key: ''},
                    {name: 'Student Name', sort_key: ''},
                    {name: 'Status', sort_key: ''},
                    {name: 'Action', sort_key: ''},
                    {name: 'Service Activation', sort_key: ''},
                ],

            }
        },

        created() {

        },

        methods: {
            viewItems(){
                alert("hey hasib im view ")
            },
            editItems(){
                alert("hey hasib im edit ")
            },
            deleteItems(){
                alert("hey hasib im delete ")
            },
            
        }

    }


</script>

<style scoped>

</style>
