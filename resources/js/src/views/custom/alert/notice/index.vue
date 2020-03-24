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
            <div class="col-md-12" v-if="$root.notification.status">
                <div role="alert"
                     :class="`mt-2 alert alert-${$root.notification.status} alert-dismissible display-block`"
                >
                    <button type="button"
                            data-dismiss="alert"
                            aria-label="Close"
                            class="close"
                            @click="$root.emptyNotification()"
                    >
                        <span aria-hidden="true">×</span>
                    </button>
                    <i class="ace-icon fa fa-hand-o-right"></i>
                    {{$root.notification.message}}
                </div>
            </div>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
                <vs-card>
                    <div class="row mx-0">
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
                            <ow-data-table :headers="tableHeader"
                                           :tableHeader="'Notice List'"
                                           :suggestText="'Notice Record list on table. Filter Notice using the filter.'"
                                           :url="url"
                                           :noDataMessage="'No Notice data found. Please Filter Notice to show.'"
                                           :hasSearch="true"
                                           :action-btn="false"
                                           :has-multiple="true"
                                           :has-pagination="true"
                                           :main-item="mainItem"
                                           :getData="getData"
                            >
                                <template slot="items" slot-scope="props">
                                    <vs-td :data="props.data.title">
                                        {{props.data.title}}
                                    </vs-td>
                                    <vs-td :data="props.data.publish_date">
                                        {{$root.parseDate(props.data.publish_date)}}
                                    </vs-td>
                                    <vs-td :data="props.data.end_date">
                                        {{$root.parseDate(props.data.end_date)}}
                                    </vs-td>
                                    <vs-td>
                                        <span v-for="role in props.data.display_group?props.data.display_group.split(','):[]">
                                            {{roles.filter(d=>d.id==role)[0].display_name+' - '}}</span>
                                    </vs-td>

                                    <vs-td>
                                        <div class="action-own">
                                            <a class="btn btn-success btn-sm pointer-all"
                                               title="Edit"
                                               @click.stop="editItems(props.data.id)">
                                                <i class="fa fa-pencil"></i>
                                            </a>
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
                                        <th>
                                            Publish Date
                                        </th>
                                        <th>
                                            End Date
                                        </th>
                                        <th>
                                            Display Group
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="(tr, idx) in printData.data">
                                        <td>
                                            {{printData.data.indexOf(tr)+1}}
                                        </td>
                                        <td>
                                            {{tr.title}}
                                        </td>
                                        <td>
                                            {{$root.parseDate(tr.publish_date)}}
                                        </td>
                                        <td>
                                            {{$root.parseDate(tr.end_date)}}
                                        </td>
                                        <td>
                                            <span v-for="role in tr.display_group?tr.display_group.split(','):[]">
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
                    {name: 'Title', sort_key: 'title'},
                    {name: 'Publish Date', sort_key: 'publish_date'},
                    {name: 'End Date', sort_key: 'end_date'},
                    {name: 'Display Group', sort_key: ''},
                    {name: 'Action'},
                ],
                items: [],
                mainItem: [],
                deletePop: false,
                deleteItem: null,
                url: '/json/info/notice',
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
            editItems(id) {
                this.$router.push({name: 'noticeEdit', params: {id: id}})
            },
            deletePopModal(id) {
                this.deleteItem = id;
                this.deletePop = true
            },
            deleteItems() {
                this.$http.get('/json/info/notice/' + this.deleteItem + '/delete').then(res => {
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
