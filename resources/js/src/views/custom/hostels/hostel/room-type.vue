<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Room Type Manager</h2>
                <div class="mb-2">
                    <router-link :to="'/hostel/resident'">
                        <vs-button type="filled" class="smBtn">Resident</vs-button>
                    </router-link>
                    <router-link :to="'/hostel'">
                        <vs-button type="filled" class="smBtn">Hostel</vs-button>
                    </router-link>
                    <router-link :to="'/hostel/food'">
                        <vs-button type="filled" class="smBtn">Food & Meal</vs-button>
                    </router-link>
                </div>
                <vs-divider></vs-divider>
            </div>
            <div class="col-md-12">
                <vs-card>
                    <div class="row p-4">
                        <div class="mb-2 col-md-12">
                            <router-link :to="'/hostel'">
                                <vs-button type="filled" class="smBtn">Detail</vs-button>
                            </router-link>
                            <router-link :to="'/hostel/add'">
                                <vs-button type="filled" class="smBtn">Add Hostel</vs-button>
                            </router-link>
                            <router-link :to="'/hostel/room-type'">
                                <vs-button type="filled" class="smBtn">Room Type</vs-button>
                            </router-link>
                            <router-link :to="'/bed-status'">
                                <vs-button type="filled" class="smBtn">Bed status</vs-button>
                            </router-link>
                        </div>
                    </div>
    
                </vs-card>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <h4>Create Room Type</h4>
                        <div class="form-group row mt-3">
                            <form>
                                <label class="col-sm-3">Room Type</label>
                                <vs-input v-model="forms.id" style="display: none" @keyup.enter="posting()"></vs-input>
                                <vs-input v-model="forms.title">
                                </vs-input>
                                <vs-divider></vs-divider>
                                <vs-button color="#00b8cf"
                                           type="filled"
                                           class="my-round"
                                           @click="posting"
                                >
                                    {{formType}}
                                </vs-button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <roomtype-table :headers="roomtypeHeader"
                                        :tableHeader="'Room Type List'"
                                        :suggestText="'Room type Record list on table. Filter room type using the filter.'"
                                        :url="'/json/hostel/room-type'"
                                        :noDataMessage="'No room type data found. Please Filter room type to show.'"
                                        :hasSearch="true"
                                        :has-multiple="true"
                                        :has-pagination="true"
                                        :filterSection="true"
                                        ref="roomtypeTable"
                        >
                            <template slot="items" slot-scope="props">
                                <vs-td :data="props.data.title">
                                    {{props.data.title}}
                                </vs-td>
                                <vs-td>
                                    <div class="d-flex flex-wrap">
                                        {{props.data.status}}
                                        <vs-switch color="success"
                                                   :checked="props.data.status=='active'?true:false"
                                                   @click.stop="changeStatus(props.data.id,props.data.status)"
                                                   class="pointer-all ml-2"
                                        >
                                            <span slot="on">Active</span>
                                            <span slot="off">In-Active</span>
                                        </vs-switch>
                                    </div>
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
                                           @click.stop="editItems(props.data.id, props.data.title)">
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
                        </roomtype-table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>

    export default {
        data() {
            return {
                searchData: {},
                forms: {id: null, title: null},
                formType: 'create',
                roomtypeHeader: [
                    {name: 'title', sort_key: 'title'},
                    {name: 'Status', sort_key: ''},
                    {name: 'Action', sort_key: ''},
                ],
            }
        },
        methods:{
            posting() {
                this.$http.post('/json/hostel/room-type/store', this.forms)
                    .then(res => {
                        if(res.status===200){
                            this.$vs.notify({title:'Success',text:res.data[1],color:res.data[0],icon:'verified_user'})
                            this.forms.id=null
                            this.forms.title=null
                            this.$refs.roomtypeTable.getData()
                        }else{
                            this.$vs.notify({title:'error',text:res.data[1],color:res.data[0],icon:'verified_user'})
                        }

                    })
                    .catch(err => {
                        this.$vs.notify({title:'error',text:err.response.data.message,color:'danger',icon:'verified_user'})
                    })
            },
            viewItems(id) {
                if(id) this.$router.push({name: 'guardian.details', params: {id: id}})
            },
            studentViewItems(id) {
                if(id) this.$router.push({name: 'studentView', params: {id: id}})
            },
            editItems(id, title) {
                alert("hey hasib im edit ")
            },
            deleteItems() {
                alert("hey hasib im delete ")
            },
            changeStatus(id, status) {
                let stat = status === 'active' ? 'in-active' : 'active'
                let url = '/json/hostel/room-type/' + id + '/' + stat
                this.$http.get(url).then(res => {
                    this.$refs.roomtypeTable.getData()
                    this.$vs.notify({title:'Success',text:res.data[1],color:res.data[0],icon:'verified_user'})
                })

            },
        }
    }
</script>

<style scoped>

</style>
