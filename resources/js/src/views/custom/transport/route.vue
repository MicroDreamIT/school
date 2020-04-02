<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Student Documents Manager</h2>
                <div class="mb-3">
                    <router-link :to="'/transport/user'">
                        <vs-button type="filled" class="smBtn">User</vs-button>
                    </router-link>
                    <router-link :to="'/transport/route'">
                        <vs-button type="filled" class="smBtn">Route</vs-button>
                    </router-link>
                    <router-link :to="'/transport/vehicle'">
                        <vs-button type="filled" class="smBtn">Vehicle</vs-button>
                    </router-link>
                </div>
            </div>
            <div class="col-md-12">
                <vs-card>
                    <div class="row p-4">
                        <div class="col-md-4">
                            <h4>{{buttonText}} Route</h4><br>
                            <div class="form-group row mb-3">
                                <label class="col-sm-3">Route</label>
                                <vs-input class="col-sm-9" v-model="forms.title" :danger="error.title!==undefined" ref="title"></vs-input>
                                <p v-if="error.title!==undefined" class="text-danger">{{ error.title[0] }}</p>
                                <p></p>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-sm-3">Rent</label>
                                <vs-input class="col-sm-9" v-model="forms.rent" :danger="error.rent!==undefined" type="number" min="0"></vs-input>
                                <p v-if="error.rent!==undefined" class="text-danger">{{ error.rent[0] }}</p>
                                <p></p>
                            </div>
                            <div class="form-group   mb-3">
                                <label >Desc</label>
                                <vs-textarea type="file" height="100px" v-model="forms.description"></vs-textarea>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-sm-3">Find Vehicle & Add</label>
                                <v-select class="col-sm-9"
                                          :options="vehicles"
                                          :filterable="false"
                                          @search="searchVehicle"
                                          label="fullname"
                                          multiple
                                          v-model="selected"
                                >
                                </v-select>
                            </div>
                            <br>
                            <table class="table mt-4" v-if="selected.length>0">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Type</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(item, index) in selected" :key="index">
                                    <td>{{item.fullname}}</td>
                                    <td>{{item.type}}</td>
                                </tr>
                                </tbody>
                            </table>
                            <vs-divider></vs-divider>
                            <vs-button @click="posting()">{{buttonText}}</vs-button>
                        </div>
                        <div class="col-md-8">
                            <data-table-final :headers="headers"
                                              :tableHeader="'Route List'"
                                              :suggestText="'Route Record list on table. Filter room type using the filter.'"
                                              :url="'/json/transport/route'"
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
                                        <table>
                                            <tr>
                                                <th>title:</th>
                                                <td>{{props.data.title}}</td>
                                            </tr>
                                            <tr>
                                                <th>rent:</th>
                                                <td>{{props.data.rent}}</td>
                                            </tr>
                                            <tr>
                                                <th>description:</th>
                                                <td>{{props.data.description}}</td>
                                            </tr>
                                        </table>
                                    </vs-td>
                                    <vs-td>
                                        <table v-for="vehicle in props.data.vehicles">
                                            <tr>
                                                <th>number</th>
                                                <td>{{vehicle.number}}</td>
                                            </tr>
                                            <tr>
                                                <th>model</th>
                                                <td>{{vehicle.model}}</td>
                                            </tr>
                                            <tr>
                                                <th>type:</th>
                                                <td>{{vehicle.type}}'</td>
                                            </tr>
                                            <tr>
                                                <hr v-if="props.data.vehicles.length>0">
                                            </tr>
                                        </table>
                                    </vs-td>
                                    <vs-td :data="props.data.action">
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

                </vs-card>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        data() {
            return {
                searchData: {},
                forms:{},
                vehicles:[],
                selected:[],
                error:[],
                headers: [
                    {name:'detail', field:'detail'},
                    {name:'vehicles', field:'vehicles'},
                    {name: 'Action', sort_key: ''},
                    {name: 'status', field: 'status'},
                ],
                buttonText:'create'
            }
        },

        methods:{
            editItems(id){
                this.$refs['title'].$el.querySelector('input').focus()

                this.$http.get('/json/transport/route' + '/' + id + '/edit')
                    .then(res=>{
                        this.forms = res.data.row
                        this.vehicles = res.data.row.vehicle
                        this.selected = res.data.row.vehicle
                        this.buttonText = 'Update'
                    })
                    .catch(err=>{

                    })
            },
            deleteItems(id){
                let confirms = confirm('are you sure?')
                if(!confirms) return null
                this.$http.get('/json/transport/route' + '/' + id + '/delete')
                    .then(res=>{
                        this.$refs.dataTableRoute.getData()
                        this.$vs.notify({title:res.data[0],text:res.data[1],color:res.data[0],icon:'danger'})
                    })
                    .catch(err=>{

                    })
            },
            GetReturnValue(arg = null){
                let val =  arg.map(st => {
                    return{
                        id:st.id,
                        title:st.title,
                        rent:st.rent,
                        description:st.description,
                        vehicles:st.vehicle,
                        status:st.status
                    }
                });
                this.$store.dispatch('updateTableData',val)
            },
            searchVehicle(search, loading){
                loading(true)
                this.$http.get('/json/transport/vehicle-autocomplete?q='+search)
                    .then(res=>{
                        this.vehicles = res.data
                        if(this.vehicles.length>0) loading(false)
                    })
            },
            posting(){
                this.forms.vehicles_id = []
                this.selected.map(st=>{
                    this.forms.vehicles_id.push(st.id)
                })
                if(this.forms.id){
                    this.$http.post('/json/transport/route/'+this.forms.id +'/update', this.forms)
                        .then(res=>{
                            if(res.status===200){
                                this.$vs.notify({title:res.data[0],text:res.data[1],color:res.data[0],icon:'verified_user'})
                                this.$refs.dataTableRoute.getData()
                                this.forms={}
                                this.selected=[]
                            }
                        })
                        .catch(err=>{
                            if(err.response){
                                this.error = err.response.data.errors
                            }
                        })
                }else{
                    this.$http.post('/json/transport/route/store', this.forms)
                        .then(res=>{
                            if(res.status===200){
                                this.$vs.notify({title:res.data[0],text:res.data[1],color:res.data[0],icon:'verified_user'})
                                this.$refs.dataTableRoute.getData()
                                this.forms={}
                                this.selected=[]
                            }
                        })
                        .catch(err=>{
                            if(err.response){
                                this.error = err.response.data.errors
                            }
                        })
                }

            }
        }
    }
</script>

<style scoped>

</style>
