<template>
    <div>
        <h3>
            Dashboard
        </h3>
        <div class="row mt-2">
            <div class="col-md-10">
                <chartjs-component-line-chart :chartdata="collectionData.data"
                                              :options="collectionData.options" :style="myStyles">

                </chartjs-component-line-chart>
            </div>
            <div class="col-md-2">
                <chartjs-component-line-chart :chartdata="compareData.data" :style="myStyles"
                                              :options="compareData.options">
                </chartjs-component-line-chart>
            </div>
            <div class="col-md-12">
                <chartjs-component-line-chart :chartdata="transaction.data" :style="myStyles"
                                              :options="transaction.options">
                </chartjs-component-line-chart>
            </div>
            <div class="col-md-9">
                <div class="row mx-0">
                    <div class="col-md-12">
                        <div class="myTitle">Accounting</div>
                        <vs-tabs>
                            <vs-tab label="Fees Collection">
                                <div class="con-tab-ejemplo">
                                    <data-table :headers="tableHeader1"
                                                :url="'/student'"
                                                :no-data-message="'No matching records found'"
                                                :searchField="searchData"
                                                :hasSearch="false"
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
                            </vs-tab>
                            <vs-tab label="Staff Payroll">
                                <div class="con-tab-ejemplo">
                                    <data-table :headers="tableHeader1"
                                                :url="'/student'"
                                                :no-data-message="'No matching records found'"
                                                :searchField="searchData"
                                                :hasSearch="false"
                                    >
                                        <template slot="items" slot-scope="props">
                                            <vs-td :data="props.data.username">
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
                            </vs-tab>
                            <vs-tab label="Transaction">
                                <div class="con-tab-ejemplo">
                                    <data-table :headers="tableHeader1"
                                                :url="'/student'"
                                                :no-data-message="'No matching records found'"
                                                :searchField="searchData"
                                                :hasSearch="false"
                                    >
                                        <template slot="items" slot-scope="props">
                                            <vs-td :data="props.data.username">
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
                            </vs-tab>
                        </vs-tabs>

                    </div>
                    <div class="col-md-12">
                        <div class="myTitle">Library</div>
                        <vs-tabs>
                            <vs-tab label="Book Issue">
                                <div class="con-tab-ejemplo">
                                    <data-table :headers="tableHeader1"
                                                :url="'/student'"
                                                :no-data-message="'No matching records found'"
                                                :searchField="searchData"
                                                :hasSearch="false"
                                    >
                                        <template slot="items" slot-scope="props">
                                            <vs-td :data="props.data.username">
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
                            </vs-tab>
                            <vs-tab label="Return Period Over">
                                <div class="con-tab-ejemplo">
                                    <data-table :headers="tableHeader1"
                                                :url="'/student'"
                                                :no-data-message="'No matching records found'"
                                                :searchField="searchData"
                                                :hasSearch="false"
                                    >
                                        <template slot="items" slot-scope="props">
                                            <vs-td :data="props.data.username">
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
                            </vs-tab>
                        </vs-tabs>

                    </div>
                    <div class="col-md-12">
                        <div class="myTitle">Attendance</div>
                        <vs-tabs>
                            <vs-tab label="Booklet">
                                <div class="con-tab-ejemplo">
                                    <data-table :headers="tableHeader1"
                                                :url="'/student'"
                                                :no-data-message="'No matching records found'"
                                                :searchField="searchData"
                                                :hasSearch="false"
                                    >
                                        <template slot="items" slot-scope="props">
                                            <vs-td :data="props.data.username">
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
                            </vs-tab>
                        </vs-tabs>

                    </div>
                    <div class="col-md-12">
                        <div class="myTitle">Up Coming Birthday</div>
                        <vs-tabs>
                            <vs-tab label="Student Birthday">
                                <div class="con-tab-ejemplo">
                                    <data-table :headers="tableHeader1"
                                                :url="'/student'"
                                                :no-data-message="'No matching records found'"
                                                :searchField="searchData"
                                                :hasSearch="false"
                                    >
                                        <template slot="items" slot-scope="props">
                                            <vs-td :data="props.data.username">
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
                            </vs-tab>
                            <vs-tab label="Staff Birthday">
                                <div class="con-tab-ejemplo">
                                    <data-table :headers="tableHeader1"
                                                :url="'/student'"
                                                :no-data-message="'No matching records found'"
                                                :searchField="searchData"
                                                :hasSearch="false"
                                    >
                                        <template slot="items" slot-scope="props">
                                            <vs-td :data="props.data.username">
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
                            </vs-tab>
                        </vs-tabs>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="myTitle">Overall Summary</div>
                <div class="py-3">
                    <div class="miniTitle">Student Status</div>
                    <div class="mBox bg-light">
                        <div>Active</div>
                        <div>4</div>
                    </div>
                    <div class="mBox font-weight-bold">
                        <div>Total Student:</div>
                        <div>4</div>
                    </div>
                </div>
                <div class="py-3">
                    <div class="miniTitle">Student Status</div>
                    <div class="mBox bg-light">
                        <div>Active</div>
                        <div>4</div>
                    </div>
                    <div class="mBox font-weight-bold">
                        <div>Total Student:</div>
                        <div>4</div>
                    </div>
                </div>
                <vs-divider/>
                <div class="py-3">
                    <div class="miniTitle">Student Status</div>
                    <div class="mBox bg-light">
                        <div>Active</div>
                        <div>4</div>
                    </div>
                    <div class="mBox font-weight-bold">
                        <div>Total Student:</div>
                        <div>4</div>
                    </div>
                </div>
                <vs-divider/>
                <div class="py-3">
                    <div class="miniTitle">Student Status</div>
                    <div class="mBox bg-light">
                        <div>Active</div>
                        <div>4</div>
                    </div>
                    <div class="mBox font-weight-bold">
                        <div>Total Student:</div>
                        <div>4</div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</template>
<script>
    import ChartjsComponentLineChart from "./component/chart/LineChart"
    import DataTable from './component/table/data-table'

    export default {
        components: {
            ChartjsComponentLineChart,
            DataTable
        },
        data() {
            return {
                collectionData: {
                    data: {
                        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                        datasets: [{
                            data: [0.1, 0.3, 0.5, 0.1, 0.2, 0.1, 0.3, 0.2, 0.7, 0.9, 1.1, 0],
                            label: "Fee Collection",
                            borderColor: "#7367F0",
                            fill: true
                        }, {
                            data: [0.1, 0.3, 0.5, 0.1, 0.2, 0.1, 0.3, 0.2, 0.7, 0.9, 0.2, 0.4],
                            label: "Salary",
                            borderColor: "#28C76F",
                            fill: true
                        }]
                    },
                    options: {
                        title: {
                            display: true,
                            text: 'Fees Collection',
                        },
                        responsive: true, maintainAspectRatio: false,
                        scales: {
                            xAxes: [{
                                gridLines: {
                                    offsetGridLines: true
                                }
                            }
                            ]

                        }
                    },
                },
                compareData: {
                    data: {
                        labels: [],
                        datasets: [{
                            data: [0.1, 0.3, 0.5, 0.1, 0.2, 0.1, 0.3, 0.2, 0.7, 0.9],
                            label: "Collected Fee",
                            borderColor: "#7367F0",
                            fill: true
                        }, {
                            data: [0.1, 0.3, 0.5, 0.1, 0.2, 0.1, 0.3, 0.2, 0.7, 0.9],
                            label: "Due Fee",
                            borderColor: "#28C76F",
                            fill: true
                        }]
                    },
                    options: {
                        title: {
                            display: true,
                            text: 'Fee Compare',
                        },
                        responsive: true, maintainAspectRatio: false,
                        scales: {
                            xAxes: [{
                                gridLines: {
                                    offsetGridLines: true
                                }
                            }
                            ]

                        }
                    },
                },
                transaction: {
                    data: {
                        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                        datasets: [{
                            data: [0.1, 0.3, 0.5, 0.1, 0.2, 0.1, 0.3, 0.2, 0.7, 0.9],
                            label: "Debit",
                            borderColor: "#7367F0",
                            fill: false
                        }, {
                            data: [0.1, 0.3, 0.5, 0.1, 0.2, 0.1, 0.3, 0.2, 0.7, 0.9],
                            label: "Credit",
                            borderColor: "#28C76F",
                            fill: false
                        }]
                    },
                    options: {
                        title: {
                            display: true,
                            text: 'Transaction',
                        },
                        responsive: true, maintainAspectRatio: false,
                    },
                },

                tableHeader1: [
                    {name: 'Name', field: 'name', sort_key: 'name'},
                    {name: 'Email', field: 'email', sort_key: 'email'},
                    {name: 'Mobile', field: 'mobile'},
                    {name: 'PID'},
                ],
                searchData: {}
            }
        },

        computed: {
            myStyles() {
                return {
                    height: `400px`,
                    position: 'relative'
                }
            }
        }
    }
</script>
