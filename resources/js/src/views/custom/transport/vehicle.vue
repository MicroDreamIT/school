<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Vehicle Manager</h2>
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
                            <h4>{{buttonText}} Vehicle</h4><br>
                            <div class="form-group row mb-3">
                                <label class="col-sm-3">Number</label>
                                <vs-input class="col-sm-9" v-model="forms.number" :danger="error.number!==undefined" ref="number"></vs-input>
                                <p v-if="error.number!==undefined" class="text-danger">{{ error.number[0] }}</p>
                                <p></p>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-sm-3">Type</label>
                                <vs-input class="col-sm-9" v-model="forms.type" :danger="error.number!==undefined"></vs-input>
                                <p v-if="error.type!==undefined" class="text-danger">{{ error.type[0] }}</p>
                                <p></p>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-sm-3">Model</label>
                                <vs-input class="col-sm-9" v-model="forms.model" :danger="error.number!==undefined"></vs-input>
                                <p v-if="error.model!==undefined" class="text-danger">{{ error.model[0] }}</p>
                                <p></p>
                            </div>
                            <div class="form-group   mb-3">
                                <label >Desc</label>
                                <vs-textarea type="file" height="100px" v-model="forms.description"></vs-textarea>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-sm-3">Find Staff & Add</label>
                                <v-select class="col-sm-9"
                                          :options="staffs"
                                          :filterable="false"
                                          @search="searchStaff"
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
                                        <th>Designation</th>
                                    </tr>
                                </thead>
                               <tbody>
                                   <tr v-for="(item, index) in selected" :key="index">
                                       <td>{{item.fullname}}</td>
                                       <td>{{item.designations.title}}</td>
                                   </tr>
                               </tbody>
                            </table>
                            <vs-divider></vs-divider>
                            <vs-button @click="posting()">{{buttonText}}</vs-button>
                        </div>
                        <div class="col-md-8">
                            <data-table-final :headers="headers"
                                              :tableHeader="'Vehicle List'"
                                              :suggestText="'Vehicle Record list on table. Filter room type using the filter.'"
                                              :url="'/json/transport/vehicle'"
                                              :model="'vehicle'"
                                              :noDataMessage="'No Vehicle data found. Please Filter room type to show.'"
                                              :hasSearch="true"
                                              :has-multiple="true"
                                              :has-pagination="true"
                                              :filterSection="true"
                                              ref="dataTableVehicle"
                                              :ajaxVariableSet="['vehicle']"
                                              @get-return-value="GetReturnValue"
                                              :showAction="false"
                            >
                                <template slot="items" slot-scope="props">
                                    <vs-td>
                                        <table>
                                            <tr>
                                                <th>Number:</th>
                                                <td>{{props.data.number}}</td>
                                            </tr>
                                            <tr>
                                                <th>Type:</th>
                                                <td>{{props.data.type}}</td>
                                            </tr>
                                            <tr>
                                                <th>model:</th>
                                                <td>{{props.data.model}}</td>
                                            </tr>
                                        </table>
                                    </vs-td>
                                    <vs-td>
                                        <table v-for="staff in props.data.staffs">
                                            <tr>
                                                {{staff.fullname}}
                                            </tr>
                                            <tr>
                                                <th>Home Phone:</th>
                                                <td>{{staff.home_phone}}</td>
                                            </tr>
                                            <tr>
                                                <th>Mobile Phone:</th>
                                                <td>{{staff.mobile_1}}'</td>
                                            </tr>
                                            <tr>
                                                <th>Address:</th>
                                                <td>{{staff.address}}</td>
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
                staffs:[],
                selected:[],
                error:[],
                headers: [
                    {name:'detail', field:'detail'},
                    {name:'staffs', field:'staffs'},
                    {name: 'Action', sort_key: ''},
                    {name: 'status', field: 'status'},
                ],
                buttonText:'create'
            }
        },

        methods:{
            editItems(id){
                this.$refs['number'].$el.querySelector('input').focus()

                this.$http.get('/json/transport/vehicle' + '/' + id + '/edit')
                    .then(res=>{
                        this.forms = res.data.row
                        this.staffs = res.data.row.staff
                        this.selected = res.data.row.staff
                        this.buttonText = 'Update'
                    })
                    .catch(err=>{

                    })
            },
            deleteItems(id){
                let confirms = confirm('are you sure?')
                if(!confirms) return null
                this.$http.get('/json/transport/vehicle' + '/' + id + '/delete')
                    .then(res=>{
                        this.$refs.dataTableVehicle.getData()
                        this.$vs.notify({title:res.data[0],text:res.data[1],color:res.data[0],icon:'danger'})
                    })
                    .catch(err=>{

                    })
            },
            GetReturnValue(arg = null){
                let val =  arg.map(st => {
                    return{
                        id:st.id,
                        number:st.number,
                        type:st.type,
                        model:st.model,
                        staffs:st.staff,
                        status:st.status
                    }
                });
                this.$store.dispatch('updateTableData',val)
            },
            searchStaff(search, loading){
                loading(true)
                this.$http.get('/json/transport/staff-autocomplete?q='+search)
                    .then(res=>{
                        this.staffs = res.data
                        if(this.staffs.length>0) loading(false)
                    })
            },
            posting(){
                this.forms.staffs_id = []
                this.selected.map(st=>{
                    this.forms.staffs_id.push(st.id)
                })
                if(this.forms.id){
                    this.$http.post('/json/transport/vehicle/'+this.forms.id +'/update', this.forms)
                        .then(res=>{
                            if(res.status===200){
                                this.$vs.notify({title:res.data[0],text:res.data[1],color:res.data[0],icon:'verified_user'})
                                this.$refs.dataTableVehicle.getData()
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
                    this.$http.post('/json/transport/vehicle/store', this.forms)
                        .then(res=>{
                            if(res.status===200){
                                this.$vs.notify({title:res.data[0],text:res.data[1],color:res.data[0],icon:'verified_user'})
                                this.$refs.dataTableVehicle.getData()
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
    input#number{
        text-transform: uppercase;
    }
</style>
