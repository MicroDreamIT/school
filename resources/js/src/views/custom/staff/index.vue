<template>
    <div>
        <div class="row">
            <div class="col-md-12 mb-2">
                <h2 class="pageTitle">Staff Manager</h2>
            </div>
            <staff-navigation></staff-navigation>

            <vs-divider class="mx-3"/>
            <div class="col-md-12">

                <vs-card>
                    <staff-table :headers="staffHeader"
                                 :tableHeader="'Staff List'"
                                 :suggestText="'Staff Record list on table. Filter Staffs using the filter.'"
                                 :url="'/json/staff/'"
                                 :noDataMessage="'No Staff data found. Please Filter Staff to show.'"
                                 :hasSearch="true"
                                 :has-multiple="true"
                                 :has-pagination="true"
                                 :filterSection="true"
                                 ref="staffTable"
                    >
                        <template slot="items" slot-scope="props">
                            <vs-td :data="props.data.reg_no">
                                {{props.data.reg_no}}
                            </vs-td>

                            <vs-td :data="props.data.fullname">
                                <a @click.stop="viewItems(props.data.id)"
                                   class="pointer-all text-primary"
                                   title="View"
                                >
                                    {{props.data.fullname}}
                                </a>

                            </vs-td>
                            <vs-td :data="props.data.mobile_1">
                                {{props.data.mobile_1}}
                            </vs-td>
                            <vs-td :data="props.data.designation">
                                {{props.data.designation}}
                            </vs-td>
                            <vs-td :data="props.data.qualification">
                                {{props.data.qualification}}
                            </vs-td>
                            <vs-td>
                                <div class="d-flex">
                                    <vs-switch color="success"
                                               :checked="props.data.status=='active'?true:false"
                                               @click.stop="changeStatus(props.data.id,props.data.status)"
                                               class="pointer-all ml-2"
                                    >
                                        <span slot="on">Active</span>
                                        <span slot="off">In-Active</span>
                                    </vs-switch>
                                </div>

                            </vs-td>
                            <vs-td>
                                <div class="action-own">
                                    <a class="btn btn-primary btn-sm pointer-all"
                                       title="View"
                                       @click.stop="viewItems(props.data.id)"

                                    >
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-success btn-sm pointer-all"
                                       title="Edit"
                                       @click.stop="editItems(props.data.id)">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="btn btn-danger btn-sm pointer-all"
                                       title="Delete"
                                       @click.stop="deleteItems(props.data.id)">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </div>
                            </vs-td>
                            <vs-td>
                                <div class="action-own">
                                    <a class="icons-only pointer-all" @click.stop="quickMember(props.data)">
                                        <i class="fa fa-book "></i>
                                    </a>
                                    <a class="icons-only pointer-all" @click.stop="openResidentModal(props.data)">
                                        <i class="fa fa-bed"></i>
                                    </a>
                                    <a class="icons-only pointer-all" @click.stop="openTransportModal(props.data)">
                                        <i class="fa fa-car"></i>
                                    </a>
                                </div>
                            </vs-td>
                        </template>
                    </staff-table>
                </vs-card>
            </div>
        </div>
        <vs-popup class="holamundo"
                  :title="residentUser.reg_no+' | Manage Resident'"
                  :active.sync="residentModal">

            <div class="form-group mt-3">
                <label class="col-sm-12">Hostel</label>
                <vs-select class="col-sm-12"></vs-select>
            </div>
            <div class="form-group">
                <label class="col-sm-12">Room</label>
                <vs-select class="col-sm-12"></vs-select>
            </div>
            <div class="form-group">
                <label class="col-sm-12">Bed</label>
                <vs-select class="col-sm-12"></vs-select>
            </div>
            <div class="footer-modal">
                <button type="button"
                        class="btn btn-default pull-right mr-1"
                        @click="$emit('close')">
                    Cancel
                </button>
                <button type="button" class="btn btn-success pull-right">
                    Assign Bed
                </button>
            </div>
        </vs-popup>
        <vs-popup class="holamundo"
                  :title="transportUser.reg_no+' | Manage Transport User'"
                  :active.sync="transportModal">

        </vs-popup>
    </div>
</template>

<script>
    import StaffNavigation from '../../components/navigation/staff-navigation.vue'

    export default {
        components: {
            'staff-navigation': StaffNavigation
        },
        data() {
            return {
                staffHeader: [
                    {name: 'Reg.Num', sort_key: 'reg_no'},
                    {name: 'Staff Name', sort_key: ''},
                    {name: 'Phone', sort_key: ''},
                    {name: 'Designation', sort_key: ''},
                    {name: 'Qualification', sort_key: ''},
                    {name: 'Status', sort_key: ''},
                    {name: 'Action', sort_key: ''},
                    {name: 'Service Activation', sort_key: ''},
                ],
                notification: '',
                residentModal: false,
                transportModal: false,
                residentUser: {},
                transportUser: {}

            }
        },

        created() {

        },

        methods: {

            openResidentModal(user) {
                this.residentModal = true;
                this.residentUser = user
            },
            openTransportModal(user) {
                this.transportModal = true;
                this.transportUser = user
            },

            viewItems(id) {
                this.$router.push({name: 'staff.view', params: {id: id}})
            },
            editItems(id) {
                this.$router.push({name:'staff.edit', params:{id:id}})
            },
            deleteItems(id) {
                this.$dialog.confirm('Are you sure? These items will be permanently deleted and cannot be recovered.').then(dialog => {
                    this.$http.get('/json/staff/' + id + '/delete').then(res => {
                        this.$refs.staffTable.getData()
                        this.$vs.notify({title: res.data[0], text: res.data[1], color: res.data[0], icon: 'verified'})
                    })
                })
            },
            changeStatus(id, status) {
                let stat = status === 'active' ? 'in-active' : 'active'
                let url = '/json/staff/' + id + '/' + stat
                this.$http.get(url).then(res => {
                    this.$refs.staffTable.getData()
                    this.$vs.notify({title:'Success',text:res.data[1],color:res.data[0],icon:'verified_user'})
                })
            },
            quickMember(user) {
                //  params: {reg_no: user.reg_no,user_type:1,status:user.status}
            }
        }

    }


</script>

<style scoped>

</style>
