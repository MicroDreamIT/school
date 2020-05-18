<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Bank Manager
                </h2>
                <div class="p-2">
                    <bank-navigation></bank-navigation>

                </div>
            </div>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
                <vs-card>
                    <div class="p-2">
                        <bank-navigation2></bank-navigation2>
                    </div>
                    <vs-divider/>

                    <vs-collapse class="custom-collapse">
                        <vs-collapse-item>
                            <div slot="header">
                                <vs-button type="filled"
                                           color="primary"
                                           icon="double_arrow"
                                           class="rounded"
                                >
                                    Filter Bank Transaction
                                </vs-button>
                            </div>
                            <div class="filterBox">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label>Bank:</label>
                                                <vs-input v-model="searchData.bank" class="w-100">
                                                </vs-input>
                                            </div>
                                        </div>
										<div class="col-md-6">
                                            <div class="form-group ">
                                                <label>Date Range:</label>
                                               <div class="d-flex justify-content-between">
                                                <datepicker v-model="searchData.fromDate" class="flex-1"/>
                                                <label>To</label>
                                                <datepicker v-model="searchData.toDate" class="flex-1"/>
                                            </div>
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
                    <h4 class="header large lighter blue mt-4">
                        <i class="fa fa-list" aria-hidden="true"></i>&nbsp;
                        Bank Transaction List
                    </h4>
                    <div class="easy-link-menu d-flex flex-wrap">
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
                    <div class="table-header">
                        Bank Record list on table. Filter Bank using the filter.
                    </div>
					<vs-table
                            v-model="selected"
                            pagination
                            :max-items="10"
                            :data="mainItem"
                            description
                            :noDataText="'No Bank Transaction data found. Please Filter Bank Transaction to show.'"
                            description-title="Showing"
                    >

                        <template slot="thead">
                            <vs-th>S.N.</vs-th>
                            <vs-th :sort-key="thead.sort_key?thead.sort_key:''" v-for="(thead,indx) in tableHeader"
                                   :key="indx">
                                {{thead.name}}
                            </vs-th>
                        </template>
                        <template slot-scope="{data}">
                            <vs-tr :data="tr" :key="idx" v-for="(tr, idx) in data">
                                <vs-td>{{mainItem.indexOf(tr)+1}}</vs-td>
                                <vs-td></vs-td>
                                <vs-td></vs-td>
                                <vs-td></vs-td>
                                <vs-td></vs-td>
                                <vs-td></vs-td>
                                <vs-td></vs-td>
                            </vs-tr>
							<vs-tr class="totalSection">
                                <vs-td colspan="10">Total {{getTotal}}</vs-td>
                            </vs-tr>
                        </template>

                    </vs-table>
                </vs-card>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        data() {
            return {
            	selected:[],
                tableHeader: [
                    {name: 'Date', sort_key: ''},
                    {name: 'Ledger/Head', sort_key: ''},
                    {name: 'Dr Amount', sort_key: ''},
                    {name: 'Cr Amount', sort_key: ''},
                    {name: 'Description', sort_key: ''},
                    {name: 'Action', sort_key: ''},
                ],
                searchData: {},
				mainItem:[]

            }
        },
        methods: {
            doFilter() {

            },
            doActive() {

            },
            doInActive() {

            },
            doDelete() {

            }
        }
    }
</script>

<style scoped>

</style>
