<template>
    <div class="custom-table">
        <div class="row p-4">
            <div class="col-md-12 ">
                <h4 class="header large lighter blue">
                    <i class="fa fa-list" aria-hidden="true"></i>&nbsp;
                    {{tableHeader}}
                </h4>
                <div>
                    <div class="form-group   mb-3">
                        <label>Route</label>
                        <select class="form-control" v-model="route_bulk" @change="findVehicle(route_bulk)">
                            <option :value="route.id" v-for="route in routes">
                                {{route.value}}
                            </option>
                        </select>
                    </div>
                    <div class="form-group   mb-3">
                        <label>Vehicle</label>
                        <select class="form-control" v-model="vehicle_bulk">
                            <option :value="vehicle.vehicles_id" v-for="vehicle in vehicles">{{vehicle.number}}</option>
                        </select>
                    </div>
                </div>
                <div class="easy-link-menu d-flex flex-wrap"
                     v-if="actionBtn && vehicle_bulk && route_bulk && selected.length>0">
                    <a class="btn-success btn-sm bulk-action-btn  m-1" @click.prevent="doActive">
                        <i class="fa fa-check"></i>
                        Active
                    </a>
                    <a class="btn-success btn-sm bulk-action-btn  m-1" @click.prevent="doShift">
                        <i class="fa fa-check"></i>
                        Shift
                    </a>
                    <a class="btn-success btn-sm bulk-action-btn  m-1" @click.prevent="doLeave">
                        <i class="fa fa-check"></i>
                        Leave
                    </a>
                    <a class="btn-danger btn-sm bulk-action-btn m-1" @click.prevent="doDelete">
                        <i class="fa fa-trash"></i>
                        Delete
                    </a>
                </div>
                <br>
                <div class="table-header" v-if="headerSuggestion">
                    {{suggestText}}
                </div>
                <div class="dt-buttons btn-group action-group mt-3" v-if="printSection">
                    <button class="btn btn-secondary buttons-copy buttons-html5"

                            @click.prevent="doCopy"
                    >
                        <span>Copy</span>
                    </button>
                    <button class="btn btn-secondary buttons-pdf buttons-html5"
                            @click.prevent="doPdf"
                    >
                        <span>PDF</span>
                    </button>
                    <button class="btn btn-secondary"
                            @click.prevent="doJson"
                    >
                        <span>JSON</span>
                    </button>
                    <button class="btn btn-secondary buttons-print"
                            @click.prevent="doPrint"
                    >
                        <span>Print</span>
                    </button>
                </div>
                <vs-table
                        v-model="selected"
                        :pagination="hasPagination"
                        :multiple="hasMultiple"
                        :max-items="maxItem"
                        :search="hasSearch"
                        :data="$store.state.tableData"
                        :noDataText="noDataMessage"
                        description
                        description-title="Showing"
                >

                    <template slot="thead">
                        <vs-th>S.N.</vs-th>
                        <vs-th :sort-key="thead.sort_key?thead.sort_key:''" v-for="(thead,indx) in headers" :key="indx">
                            {{thead.name}}
                        </vs-th>
                    </template>
                    <template slot-scope="{data}">
                        <vs-tr :data="tr" :key="idx" v-for="(tr, idx) in $store.state.tableData">
                            <vs-td>{{idx+1}}</vs-td>
                            <slot name="items" v-bind:data="tr">
                            </slot>
                            <vs-td v-if="showStatus">
                                <div class="d-flex flex-wrap">
                                    {{tr.status}}
                                    <vs-switch color="success"
                                               :checked="tr.status==='active'"
                                               @click.stop="changeStatus(tr.id, tr.status)"
                                               class="pointer-all ml-2"
                                    >
                                        <span slot="on">Active</span>
                                        <span slot="off">In-Active</span>
                                    </vs-switch>
                                </div>
                            </vs-td>
                            <vs-td v-if="showAction">
                                <div class="action-own">
                                    <a class="btn btn-primary btn-sm pointer-all"
                                       title="View"
                                       @click.stop="viewItems(tr.id)"
                                    >
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-success btn-sm pointer-all"
                                       title="Edit"
                                       @click.stop="editItems(tr.id)">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="btn btn-danger btn-sm pointer-all"
                                       title="Delete"
                                       @click.stop="deleteItems(tr.id)">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </div>
                            </vs-td>
                        </vs-tr>

                    </template>


                </vs-table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            url: {
                type: String,
                default: () => ''
            },
            filterSection: {
                type: Boolean,
                default: () => false
            },
            ajaxVariableSet: {
                type: Array,
                default: () => []
            },
            tableHeader: {
                type: String,
                default: () => 'Data List'
            },
            actionBtn: {
                type: Boolean,
                default: () => true
            },
            headerSuggestion: {
                type: Boolean,
                default: () => true
            },
            printSection: {
                type: Boolean,
                default: () => true
            },
            suggestText: {
                type: String,
                default: () => 'Data Record list on table. Filter Data using the filter.'
            },
            headers: {
                type: Array,
                default: () => []
            },
            noDataMessage: {
                type: String,
                default: () => 'No Data Found'
            },
            hasSearch: {
                type: Boolean,
                default: () => true
            },
            hasPagination: {
                type: Boolean,
                default: () => false
            },
            hasMultiple: {
                type: Boolean,
                default: () => false
            },
            transferSection: {
                type: Boolean,
                default: () => false
            },
            returnedValue: {
                type: Array,
                default: () => []
            },
            showStatus: {
                type: Boolean,
                default: () => true
            },
            showAction: {
                type: Boolean,
                default: () => true
            },
            model: {
                type: String,
                default: () => ''
            },
            editLink: {},
            viewLink: {},
            deleteLink: {},
            searchData: {}
        },
        data() {
            return {
                route_id: null,
                routes: [],
                selected: [],
                maxItem: 10,
                item: [],
                designation: [],
                vehicles: [],
                route_bulk: null,
                vehicle_bulk: null
            }
        },
        created() {
            this.getData()
        },

        methods: {
            findVehicle(route_id) {
                this.$http.post('/json/transport/find-vehicles', {
                    route_id: route_id
                })
                    .then(res => {
                        this.vehicles = res.data.vehicles
                    })
            },
            changeStatus(id, status) {
                let stat = status === 'active' ? 'in-active' : 'active'
                this.$http.get(this.url + '/' + id + '/' + stat).then(res => {
                    this.getData()
                    this.$vs.notify({title: res.data[0], text: res.data[1], color: res.data[0], icon: 'verified_user'})
                })
            },
            viewItems(id) {
                let url = ''
                if (this.viewLink === undefined) {
                    url = '/' + this.model + '/' + id + '/' + 'view'
                } else {
                    url = this.viewLink
                }

                this.$router.push({path: url})
            },
            editItems(id) {
                let url = ''
                if (this.editLink === undefined) {
                    url = '/' + this.model + '/' + id + '/' + 'edit'
                } else {
                    url = this.editLink
                }

                this.$router.push({path: url})
            },
            deleteItems(id) {
                let confirms = confirm('are you sure?')
                if (!confirms) return null
                if (this.deleteLink !== undefined) this.url = this.deleteLink
                this.$http.get(this.url + '/' + id + '/delete')
                    .then(res => {
                        this.getData()
                        this.$vs.notify({title: res.data[0], text: res.data[1], color: res.data[0], icon: 'danger'})
                    })
                    .catch(err => {

                    })
            },
            getData() {
                this.$http.get(this.url, {params: this.searchData}).then(res => {
                    this.item = res.data[this.ajaxVariableSet[0]]
                    this.routes = this.$root.objectToArray(res.data.active_routes)
                    this.$emit('get-return-value', this.item, res.data)
                    if (!this.$store.state.tableData.length > 0) {
                        this.$store.dispatch('updateTableData', this.item)
                    }
                });

            },
            editItems(id) {
                this.$router.push({name: 'transport.userEdit', params: {id: id}})
            },
            deleteItems() {
                this.$http.get('/json/transport/user/' + this.promptDeleteId + '/delete')
                    .then(res => {
                        this.getData()
                        this.promptDelete = null
                        this.$vs.notify({title: res.data[0], text: res.data[1], color: res.data[0], icon: 'danger'})
                    })
                    .catch(err => {

                    })
            },
            doFilter() {
                this.getData()
            },
            doShift(){
                if (this.selected.length > 0) {
                    this.$dialog.alert('Are you sure, You Want To Active Using Bulk Action? Please, Be Sure When You Use Bulk Action. It Effects All The Selected Data.').then(dialog=> {
                        this.bulkAction('Active')
                    });
                } else {
                    this.$vs.notify({title: res.data[0], text: res.data[1], color: res.data[0], icon: 'verified_user'})
                }
            },
            doLeave(){
                if (this.selected.length > 0) {
                    this.$dialog.alert('Are you sure, You Want To Active Using Bulk Action? Please, Be Sure When You Use Bulk Action. It Effects All The Selected Data.').then(dialog=> {
                        this.bulkAction('Active')
                    });
                } else {
                    this.$vs.notify({title: res.data[0], text: res.data[1], color: res.data[0], icon: 'verified_user'})
                }
            },
            doActive() {
                if (this.selected.length > 0) {
                    this.$dialog.alert('Are you sure, You Want To Active Using Bulk Action? Please, Be Sure When You Use Bulk Action. It Effects All The Selected Data.').then(dialog=> {
                        this.bulkAction('Active')
                    });
                } else {
                    this.$vs.notify({title: res.data[0], text: res.data[1], color: res.data[0], icon: 'verified_user'})
                }
            },
            doDelete() {
                if (this.selected.length > 0) {
                    this.$dialog.alert('Are you sure, You Want To Active Using Bulk Action? Please, Be Sure When You Use Bulk Action. It Effects All The Selected Data.').then(dialog=> {
                        this.bulkAction('Active')
                    });
                } else {
                    this.$vs.notify({
                        title: 'error',
                        text: 'select at least one',
                        color: 'error',
                        icon: 'verified_user'
                    })
                }
            },
            bulkAction(action){
                if (this.selected.length > 0) {
                    this.$http.post(this.url + '/bulk-action', {
                        bulk_action: action,
                        route_bulk: parseInt(this.route_bulk),
                        vehicle_bulk: parseInt(this.vehicle_bulk),
                        chkIds: this.selected.map(val => {
                            return parseInt(val.id)
                        })
                    })
                        .then(res => {
                            this.$vs.notify({
                                title: 'success',
                                text: res.data[1],
                                color: res.data[0],
                                icon: 'verified_user'
                            })
                            this.selected = [];
                            this.getData()
                        })
                        .catch(err => {
                            alert(err.response.message)
                        })
                } else {
                    this.$vs.notify({title: res.data[0], text: res.data[1], color: res.data[0], icon: 'verified_user'})
                }
            },
            doCopy() {
                alert('doing copy')
            },
            doPdf() {
                alert('doing pdf')
            },
            doJson() {
                alert('doing json')
            },
            doPrint() {
                alert('doing print')
            }


        }
    }
</script>
