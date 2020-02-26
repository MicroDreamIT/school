<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                Hostel History
            </div>
            <div class="col-md-12">
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
    export default {
        name: "certificate",
        data(){
            return{
                tableHeader1: [
                    {name: 'Name', field: 'name', sort_key: 'name'},
                    {name: 'Email', field: 'email', sort_key: 'email'},
                    {name: 'Mobile', field: 'mobile'},
                    {name: 'PID'},
                ],
            }
        }
    }
</script>

<style scoped>

</style>
