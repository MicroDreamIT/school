<template>
    <div class="custom-table">
        <div class="row p-4">
            <div class="col-md-12 mb-2">
                <vs-collapse class="custom-collapse">
                    <vs-collapse-item>
                        <div slot="header">
                            <vs-button type="filled"
                                       color="primary"
                                       icon="double_arrow"
                            >
                                Filter Students
                            </vs-button>
                        </div>
                        <div class="filterBox">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Reg:</label>
                                            <input placeholder=""
                                                   class="form-control border-form input-mask-registration"
                                                   autofocus="" name="" type="text"
                                            >
                                        </div>
                                        <div class="form-group">
                                            <label>Batch</label>
                                            <select class="form-control" name="batch">
                                                <option value="0">Select Batch</option>
                                                <option value="1">ACT</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Reg Date From</label>
                                            <datepicker v-model="searchData.fromRegDate"/>
                                            <label>To</label>
                                            <datepicker v-model="searchData.toRegDate"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Academic Status:</label>
                                            <v-select v-model="searchData.academic_status"
                                                      :options="academic_status"
                                                      placeholder="Select Academic Status"
                                            >
                                            </v-select>
                                        </div>
                                        <div class="form-group">
                                            <label>Status:</label>
                                            <v-select v-model="searchData.status"
                                                      :options="status"
                                                      placeholder="Select Status"
                                            >
                                            </v-select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Faculty/Class</label>
                                            <v-select v-model="searchData.class"
                                                      :options="['BTECH']"
                                                      placeholder="Select Faculty/Class"
                                            >
                                            </v-select>

                                        </div>
                                        <div class="form-group">
                                            <label>Sem./Sec.</label>
                                            <v-select v-model="searchData.sem"
                                                      :options="['BTECH']"
                                                      placeholder="Select Sem./Sec."
                                            >
                                            </v-select>
                                        </div>

                                    </div>
                                </div>
                                <div class="row  mb-3">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Religion:</label>
                                            <input placeholder=""
                                                   class="form-control border-form input-mask-registration"
                                                   autofocus="" name="" type="text"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Caste:</label>
                                            <input placeholder=""
                                                   class="form-control border-form input-mask-registration"
                                                   autofocus="" name="" type="text"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Nationality:</label>
                                            <input placeholder=""
                                                   class="form-control border-form input-mask-registration"
                                                   autofocus="" name="" type="text"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Mot.Tongue:</label>
                                            <input placeholder=""
                                                   class="form-control border-form input-mask-registration"
                                                   autofocus="" name="" type="text"
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-2 pl-0">
                                <vs-button type="filled"
                                           color="#00b8cf"
                                           icon="double_arrow"
                                           @click="alert(searchData)"
                                >
                                    Filter
                                </vs-button>
                            </div>
                        </div>
                    </vs-collapse-item>
                </vs-collapse>
            </div>
            <div class="col-md-12 ">
                <h4 class="header large lighter blue">
                    <i class="fa fa-list" aria-hidden="true"></i>&nbsp;
                    {{tableHeader}}
                </h4>
                <div class="easy-link-menu" v-if="actionBtn">
                    <a class="btn-success btn-sm bulk-action-btn  mr-1" @click.prevent="doActive">
                        <i class="fa fa-check"></i>
                        Active
                    </a>
                    <a class="btn-warning btn-sm bulk-action-btn mr-1" @click.prevent="doInActive">
                        <i class="fa fa-remove"></i>
                        In-Active
                    </a>
                    <a class="btn-danger btn-sm bulk-action-btn mr-1" @click.prevent="doDelete">
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
                        :data="item"
                        :noDataText="noDataMessage"
                        description
                >

                    <template slot="thead">
                        <vs-th>S.N.</vs-th>
                        <vs-th :sort-key="thead.sort_key?thead.sort_key:''" v-for="(thead,indx) in headers" :key="indx">
                            {{thead.name}}
                        </vs-th>
                    </template>
                    <template slot-scope="{data}">

                        <vs-tr :data="tr" :key="idx" v-for="(tr, idx) in data">
                            <vs-td>{{totalData.indexOf(tr)+1}}</vs-td>
                            <slot name="items" v-bind:data="tr">
                            </slot>
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
            }
        },

        data() {
            return {
                selected: [],
                maxItem: 5,
                searchData: {},
                item: [],
                totalData:[],
                academic_status:[],
                status:[]
            }
        },
        created() {
            this.getData()
        },

        methods: {
            getData() {
                this.$http.get(this.url)
                    .then(res => {
                        this.totalData=res.data.student
                        this.item = res.data.student
                    })
            },
            handleSearch(searching) {
                console.log(searching)
            },
            handleChangePage(page) {
                console.log(page)
            },
            handleSort(key, active) {
                console.log(key, active)
            },
            doActive() {
                alert('doing active')
            },
            doInActive() {
                alert('doing Inactive')
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
            },
            doDelete() {
                alert('doing Delete')
            },
            doSerialize(){

            }

        }
    }
</script>
