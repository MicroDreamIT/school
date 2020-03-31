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
                                <vs-input class="col-sm-9" v-model="forms.number" @input="upper"></vs-input>
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
                                <v-select class="col-sm-9"></v-select>
                            </div>
                            <vs-divider></vs-divider>
                            <vs-button class="vs-component vs-button smBtn vs-button-primary vs-button-filled">Add Staff</vs-button>
                            <br>
                            <table class="table mt-4">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Designation</th>
                                    </tr>
                                </thead>
                               <tbody>
                                   <tr>
                                       <td></td>
                                       <td></td>
                                   </tr>
                               </tbody>
                            </table>
                            <vs-divider></vs-divider>
                            <vs-button color="#00b8cf"
                                       type="filled"
                                       class="my-round">{{buttonText}}
                            </vs-button>
                        </div>
                        <div class="col-md-8">
                            <h4 class="header large lighter blue">
                                <i class="fa fa-list" aria-hidden="true"></i>&nbsp;Vehicle List</h4>
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
                                Vehicle Record list on table. Filter Vehicle using the filter.
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
    </div>
</template>

<script>

    export default {
        data() {
            return {
                searchData: {},
                forms:{},
                tableHeader: [
                    {name: 'Email', field: 'email', sort_key: 'email'},
                    {name: 'Name', field: 'name', sort_key: 'name'},
                    {name: 'Mobile', field: 'mobile'},
                    {name: 'PID'},
                ],
                buttonText:'create'
            }
        },
        watch:{
            'forms.number':{
                handler: function (val) {
                    return val.toUpperCase()
                },
                deep: true
            }
        },
        methods:{
            upper(){
                this.forms.number = this.forms.number.toUpperCase()
            },
            posting(){

            }
        }
    }
</script>

<style scoped>
    input#number{
        text-transform: uppercase;
    }
</style>
