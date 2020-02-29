<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">User Notice Manager</h2>
                <div>
                    <router-link :to="'/info/notice'">
                        <vs-button type="filled" class="smBtn">Notice</vs-button>
                    </router-link>
                    <router-link :to="'/info/sms-email'">
                        <vs-button type="filled" class="smBtn">Sms/Email</vs-button>
                    </router-link>
                </div>
            </div>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
                <vs-card>
                    <div class="row mx-0">
                        <div class="col-md-12">
                            <br>
                            <h4 class="header large lighter blue">
                                Notice List
                            </h4><br>
                        </div>
                        <div class="col-md-12">
                            <router-link :to="'/info/notice'">
                                <vs-button type="filled" class="smBtn">Notice</vs-button>
                            </router-link>
                            <router-link :to="'/info/notice/add'">
                                <vs-button type="filled" class="smBtn">Create Notice</vs-button>
                            </router-link>
                        </div>
                        <vs-divider class="mx-3"></vs-divider>
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
                </vs-card>
            </div>
        </div>

    </div>
</template>

<script>


    export default {

        data() {
            return {
                tableHeader1: [
                    {name: 'Email', field: 'email', sort_key: 'email'},
                    {name: 'Name', field: 'name', sort_key: 'name'},
                    {name: 'Mobile', field: 'mobile'},
                    {name: 'PID'},
                ],
            }
        },

    }


</script>

<style scoped>

</style>
