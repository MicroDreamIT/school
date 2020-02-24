<template>
    <div>
        <h1>
            Dashboard
        </h1>
        <div class="row">
            <div class="col-md-10">

                <chartjs-component-line-chart :chartdata="data"
                                              :options="options" :style="myStyles"></chartjs-component-line-chart>
            </div>
            <div class="col-md-2">

                <chartjs-component-line-chart :chartdata="data" :style="myStyles"
                                              :options="options"></chartjs-component-line-chart>
            </div>

        </div>

    </div>
</template>
<script>
    import ChartjsComponentLineChart from "./component/chart/LineChart"

    export default {
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
                            }}
                        ]

                }
            }
        }
        },
        components: {
            ChartjsComponentLineChart
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
