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
                            >
                                <template slot="items" slot-scope="props">
                                    <vs-td :data="props.data.faculty" class="pointer-none">
                                        {{props.data.faculty}}
                                    </vs-td>

                                    <vs-td :data="props.data.sem">
                                        {{props.data.username}}
                                    </vs-td>

                                    <vs-td :data="props.data.id">
                                        {{props.data.website}}
                                    </vs-td>

                                    <vs-td :data="props.id">
                                        {{props.data.id}}
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
        components: {
        },
        data() {
            return {
                searchData: {
                    academic_status: null,
                    status: null
                },
                url: '/json/student/',
                studentHeader: [
                    {name: 'S.N.', sort_key: 'id'},
                    {name: 'Faculty/Class',  sort_key: 'name'},
                    {name: 'Sem',sort_key:''},
                    {name: 'Reg.Num',sort_key:''},
                    {name: 'Student Name',sort_key:''},
                    {name: 'Status',sort_key:''},
                    {name: 'Action',sort_key:''},
                    {name: 'Service Activation',sort_key:''},
                ],

            }
        },

        created() {
            this.getList()
        },

        methods:{
            getList(){
                this.$http.get(this.url)
                    .then(res=>{
                        console.log(res.data)
                    })
            }
        }

    }


</script>

<style scoped>

</style>
