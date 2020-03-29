<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">SMS / Email Manager</h2>
                <div>
                    <router-link :to="'/info/notice'">
                        <vs-button type="filled" class="smBtn">Notice</vs-button>
                    </router-link>
                    <router-link :to="'/info/sms-email'">
                        <vs-button type="filled" class="smBtn">Sms/Email</vs-button>
                    </router-link>
                </div>
            </div>
            <notify-bar/>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
                <vs-card>
                    <div class="row mx-0">
                        <div class="col-md-12">
                            <router-link :to="'/info/sms-email'">
                                <vs-button type="filled" class="smBtn">Detail</vs-button>
                            </router-link>
                            <router-link :to="'/info/sms-email/add'">
                                <vs-button type="filled" class="smBtn">Group Message</vs-button>
                            </router-link>
                            <router-link :to="'/info/sms-email/student-guardian'">
                                <vs-button type="filled" class="smBtn">Student & Guardian</vs-button>
                            </router-link>
                            <router-link :to="'/info/sms-email/staff'">
                                <vs-button type="filled" class="smBtn">Staff</vs-button>
                            </router-link>
                            <router-link :to="'/info/sms-email/individual'">
                                <vs-button type="filled" class="smBtn">Individual</vs-button>
                            </router-link>
                        </div>
                        <vs-divider class="mx-3"></vs-divider>
                        <div class="col-md-12">
                            <ow-data-table :headers="tableHeader"
                                           :tableHeader="'SMS / Email List'"
                                           :suggestText="'SMS / Email Record list on table. Filter SMS / Email using the filter.'"
                                           :url="url"
                                           :noDataMessage="'No SMS / Email data found. Please Filter SMS / Email to show.'"
                                           :hasSearch="true"
                                           :action-btn="true"
                                           :has-multiple="true"
                                           :has-pagination="true"
                                           :main-item="mainItem"
                                           :getData="getData"
                            >
                                <template slot="items" slot-scope="props">
                                    <vs-td :data="props.data.title">
                                        {{props.data.subject}}
                                    </vs-td>
                                    <vs-td :data="props.data.message">
                                        {{props.data.message.trunc(25,props.data.message)}}
                                    </vs-td>
                                    <vs-td >
                                        {{'Type : '+(props.data.sms==1?'sms':'email')}}
                                    </vs-td>
                                    <vs-td>
                                        <span v-for="role in props.data.group?props.data.group.split(','):[]">
                                            {{roles.filter(d=>d.id==role)[0].display_name+' - '}}</span>
                                    </vs-td>

                                    <vs-td>
                                        <div class="action-own">
                                            <a class="btn btn-danger btn-sm pointer-all"
                                               title="Delete"
                                               @click.stop="deletePopModal(props.data.id)">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </div>
                                    </vs-td>
                                </template>


                                <template slot="printSection" slot-scope="printData">
                                    <thead>
                                    <tr>
                                        <th>SN.No.</th>
                                        <th>Subject</th>
                                        <th>
                                           Message
                                        </th>
                                        <th>
                                            Type
                                        </th>
                                        <th>
                                            Send To
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="(tr, idx) in printData.data">
                                        <td>
                                            {{printData.data.indexOf(tr)+1}}
                                        </td>
                                        <td>
                                            {{tr.subject}}
                                        </td>
                                        <td>
                                            {{tr.message.trunc(25,tr.message)}}
                                        </td>
                                        <td>
                                            {{'Type : '+(tr.sms==1?'sms':'email')}}
                                        </td>
                                        <td>
                                            <span v-for="role in tr.group?tr.group.split(','):[]">
                                            {{roles.filter(d=>d.id==role)[0].display_name+' - '}}</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </template>
                            </ow-data-table>
                        </div>
                    </div>
                </vs-card>
            </div>
        </div>
        <vs-popup class="holamundo"
                  :title="'Delete Confirmation'"
                  :active.sync="deletePop">
            <div class="mt-3">
                <p class="p-2 my-round delete-pop-text">These items will be permanently deleted and cannot be
                    recovered.</p>

                <p><i class="p-2 ace-icon fa fa-hand-o-right"></i>Are you sure?</p>
            </div>

            <div class="footer-modal">
                <vs-button class="smBtn"
                           @click="deletePop=false, deleteItem= null">
                    <i class="fa fa-close"></i>
                    Cancel
                </vs-button>
                <vs-button class="smBtn" color="danger" @click="deletePop=false, deleteItems()">
                    <i class="fa fa-trash"></i>
                    Yes,Delete Now!
                </vs-button>
            </div>
        </vs-popup>

    </div>
</template>

<script>

    export default {
        data() {
            return {
                tableHeader: [
                    {name: 'Subject', sort_key: 'title'},
                    {name: 'Message', sort_key: 'publish_date'},
                    {name: 'Type', sort_key: 'end_date'},
                    {name: 'Send To', sort_key: ''},
                    {name: 'Action'},
                ],
                items: [],
                mainItem: [],
                deletePop: false,
                deleteItem: null,
                url: '/json/info/smsemail',
                roles: []

            }
        },
        created() {
            this.getData()
        },

        methods: {
            getData() {
                this.$http.get(this.url).then(res => {
                    this.items = res.data.rows;
                    this.mainItem = this.items;
                    this.roles = res.data.roles;
                })
            },
            deletePopModal(id) {
                this.deleteItem = id;
                this.deletePop = true
            },
            deleteItems() {
                this.$http.get('/json/info/smsemail/' + this.deleteItem + '/delete').then(res => {
                    this.getData();
                    this.$root.notification.status = res.data[0];
                    this.$root.notification.message = res.data[1]
                })
            },

        }

    }


</script>

<style scoped>

</style>
