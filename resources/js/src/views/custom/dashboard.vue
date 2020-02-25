<template>
    <div>
        <h1>
            Dashboard
        </h1>
        <div class="row">
            <div class="col-md-10">
                <chartjs-component-line-chart :chartdata="data"
                                              :options="options" :style="myStyles">

                </chartjs-component-line-chart>
            </div>
            <div class="col-md-2">
                <chartjs-component-line-chart :chartdata="data" :style="myStyles"
                                              :options="options">
                </chartjs-component-line-chart>
            </div>
            <div class="col-md-8">
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
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        data: [0.1, 0.3, 0.5, 0.1, 0.2, 0.1, 0.3, 0.2, 0.7, 0.9],
                        label: "Fee Collection",
                        borderColor: "#7367F0",
                        fill: false
                    }, {
                        data: [0.1, 0.3, 0.5, 0.1, 0.2, 0.1, 0.3, 0.2, 0.7, 0.9],
                        label: "Salary",
                        borderColor: "#28C76F",
                        fill: false
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
                tableHeader1: [
                    {name: 'Name', field: 'name',sort_key:'name'},
                    {name: 'Email', field: 'email',sort_key:'email'},
                    {name: 'Mobile', field: 'mobile'},
                    {name: 'PID'},
                    {name: 'File Number'},
                    {name: 'Status'},
                    {name: 'Action'},
                ],
                searchData:{}
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
