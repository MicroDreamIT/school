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
                                <vs-input class="col-sm-9" v-model="forms.number" ></vs-input>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-sm-3">Type</label>
                                <vs-input class="col-sm-9" v-model="forms.type"></vs-input>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-sm-3">Model</label>
                                <vs-input class="col-sm-9" v-model="forms.model"></vs-input>
                            </div>
                            <div class="form-group   mb-3">
                                <label >Desc</label>
                                <vs-textarea type="file" height="100px" v-model="forms.description"></vs-textarea>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-sm-3">Find Stuff & Add</label>
                                <v-select class="col-sm-9"
                                          :options="stuffs"
                                          :filterable="false"
                                          @search="searchStuff"
                                          label="fullname"
                                          multiple
                                          v-model="selected"
                                >
                                </v-select>
                            </div>
                            <vs-divider></vs-divider>
                            <br>
                            <table class="table mt-4">
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
                            <vs-button @click="posting()">submit</vs-button>
                        </div>
                        <div class="col-md-8">
                            <data-table-final :headers="headers"
                                              :tableHeader="'Vehicle List'"
                                              :suggestText="'Vehicle Record list on table. Filter room type using the filter.'"
                                              :url="'/json/transport/vehicle'"
                                              :model="'hostel'"
                                              :noDataMessage="'No Vehicle data found. Please Filter room type to show.'"
                                              :hasSearch="true"
                                              :has-multiple="true"
                                              :has-pagination="true"
                                              :filterSection="true"
                                              ref="dataTableVehicle"
                                              :ajaxVariableSet="['vehicle']"
                                              @get-return-value="GetReturnValue"
                            >
                                <template slot="items" slot-scope="props">
                                    <vs-td :data="props.data.detail">
                                        <table></table>
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
                stuffs:[],
                selected:[],
                headers: [
                    {name:'detail', field:'detail'},
                    {name: 'status', field: 'status'},
                    {name: 'Action', sort_key: ''},
                ],
                buttonText:'create'
            }
        },

        methods:{
            GetReturnValue(arg = null){
                let val =  arg.map(st => {
                    return{
                        id:st.id,
                        status:st.status
                    }
                });
                this.$store.dispatch('updateTableData',val)
            },
            searchStuff(search, loading){
                loading(true)
                this.$http.get('/json/transport/staff-autocomplete?q='+search)
                    .then(res=>{
                        this.stuffs = res.data
                        if(this.stuffs.length>0) loading(false)
                    })
            },
            posting(){
                this.forms.stuffs_id = []
                this.selected.map(st=>{
                    this.forms.stuffs_id.push(st.id)
                })
                this.$http.post('/json/transport/vehicle/store', this.forms)
                    .then(res=>{
                        console.log(res.data)
                    })
                    .catch(err=>{

                    })
            }
        }
    }
</script>

<style scoped>
    input#number{
        text-transform: uppercase;
    }
</style>
