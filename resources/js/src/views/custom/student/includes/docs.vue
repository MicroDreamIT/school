<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                Notes List
            </div>
            <div class="col-md-12">
                <data-table :headers="tableHeader1"
                            :no-data-message="'No matching records found'"
                            :hasSearch="false"
                            :items="doc"
                >
                    <template slot="items" slot-scope="props">
                        <vs-td :data="props.data.title">
                            <a :href="'/documents/student/' + reg + '/' + props.data.file" target="_blank" class="pointer-all text-primary" v-if="reg">
                                {{props.data.title}}
                            </a>

                        </vs-td>
                        <vs-td :data="props.data.description">
                            {{props.data.description}}
                        </vs-td>
                    </template>
                </data-table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "docs",
        props:['doc', 'reg'],
        data(){
            return{
                tableHeader1: [
                    {name: 'link', field: 'link', sort_key: 'link'},
                    {name: 'Description', field: 'description', sort_key: 'description'},
                ],
            }
        }
    }
</script>

<style scoped>

</style>
