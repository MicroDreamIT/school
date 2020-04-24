<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                transport history
            </div>
            <div class="col-md-12">
                <data-table :headers="tableHeader1"
                            :url="'/student'"
                            :no-data-message="'No matching records found'"
                            :hasSearch="false"
                            :items="transport"
                >
                    <template slot="items" slot-scope="props">
                        <vs-td :data="props.data.year">
                            {{props.data.year.title}}
                        </vs-td>
                        <vs-td :data="props.data.route">
                            {{props.data.route.title}}
                        </vs-td>
                        <vs-td :data="props.data.vehicle">
                            {{props.data.vehicle.fullname}}
                        </vs-td>
                        <vs-td :data="props.data.vehicle">
                            {{props.data.history_type}}
                        </vs-td>
                        <vs-td :data="props.data.date">
                            {{props.data.created_at | formatDate }}
                        </vs-td>

                    </template>
                </data-table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "transport",
        props:['transport'],
        data(){
            return{
                tableHeader1: [
                    {name: 'year', field: 'year', sort_key: 'year'},
                    {name: 'route', field: 'route', sort_key: 'route'},
                    {name: 'vehicle', field: 'vehicle', sort_key: 'vehicle'},
                    {name: 'history', field: 'history', sort_key: 'history'},
                    {name: 'date', field: 'date', sort_key: ''},
                ],
            }
        }
    }
</script>

<style scoped>

</style>
