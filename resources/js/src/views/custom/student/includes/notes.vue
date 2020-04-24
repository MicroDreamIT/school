<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                Notes List
            </div>
            <div class="col-md-12">
                <data-table :headers="tableHeader1"
                            :url="'/student'"
                            :no-data-message="'No matching records found'"
                            :hasSearch="false"
                            :items="note"
                >
                    <template slot="items" slot-scope="props">
                        <vs-td :data="props.data.subject">
                            {{props.data.subject}}
                        </vs-td>
                        <vs-td :data="props.data.note">
                            {{props.data.note}}
                        </vs-td>
                    </template>
                </data-table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "notes",
        props:['note'],
        data(){
            return{
                tableHeader1: [
                    {name: 'Subject', field: 'subject', sort_key: 'subject'},
                    {name: 'Description', field: 'description', sort_key: 'description'},
                ],
            }
        }
    }
</script>

<style scoped>

</style>
