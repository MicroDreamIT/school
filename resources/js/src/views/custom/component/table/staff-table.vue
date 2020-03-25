<template>
    <div class="custom-table">
        <div class="row p-4">
            <div class="col-md-12 mb-2" v-if="filterSection">
                <vs-collapse class="custom-collapse">
                    <vs-collapse-item>
                        <div slot="header">
                            <vs-button type="filled"
                                       color="primary"
                                       icon="double_arrow"
                                       class="rounded"
                            >
                                Filter Staffs
                            </vs-button>
                        </div>
                        <div class="filterBox">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label>Reg:</label>
                                            <vs-input v-model="searchData.reg_no"
                                                      class="w-100">
                                            </vs-input>
                                        </div>
                                        <div class="form-group">
                                            <label>Designation</label>
                                            <v-select :options="designation"
                                                      label="value"
                                                      v-model="searchData.designation">
                                            </v-select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Join Date</label>
                                            <div class="d-flex justify-content-between">
                                                <datepicker v-model="searchData.fromDate" class="flex-1"/>
                                                <label>To</label>
                                                <datepicker v-model="searchData.toDate" class="flex-1"/>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label>Status:</label>
                                            <v-select v-model="searchData.status"
                                                      :options="['active','in-active']"
                                                      placeholder="Select Status"
                                            >
                                            </v-select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-2 pl-0">
                                <vs-button type="filled"
                                           color="#00b8cf"
                                           icon="double_arrow"
                                           @click.prevent="doFilter"
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
                <div class="easy-link-menu d-flex flex-wrap" v-if="actionBtn">
                    <a class="btn-success btn-sm bulk-action-btn  m-1" @click.prevent="doActive">
                        <i class="fa fa-check"></i>
                        Active
                    </a>
                    <a class="btn-warning btn-sm bulk-action-btn m-1" @click.prevent="doInActive">
                        <i class="fa fa-remove"></i>
                        In-Active
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
                        :data="mainItem"
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
                        <vs-tr :data="tr" :key="idx" v-for="(tr, idx) in data">
                            <vs-td>{{mainItem.indexOf(tr)+1}}</vs-td>
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
            filterSection: {
                type: Boolean,
                default: () => false
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
            }
        },

        data() {
            return {
                selected: [],
                maxItem: 10,
                searchData: {},
                item: [],
                designation: [],
                mainItem: [],
            }
        },
        created() {
            this.getData()
        },

        methods: {
            getData() {
                this.$http.get(this.url, {params: this.searchData}).then(res => {
                    this.item = res.data;
                    this.designation = this.$root.objectToArray(res.data.designation)
                    this.doSerialize()
                });

            },
            doFilter() {
                if (this.searchData.designation) {
                    if (this.searchData.designation.id !== undefined) {
                        this.searchData.designation = this.searchData.designation.id
                    }
                }
                this.getData()
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
            doSerialize() {
                this.mainItem = this.item.staff.map(st => {
                    return {
                        id: st.id,
                        reg_no: st.reg_no,
                        mobile_1: st.mobile_1,
                        designation: this.designation[st.designation].value,
                        qualification: st.qualification,
                        status: st.status,
                        fullname: st.fullName
                    }
                })
            },


        }
    }
</script>
