<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Payment Method Manager</h2>
                <div role="alert" class="mt-2 alert alert-success alert-dismissible display-block"
                     v-if="hasNotification">
                    <button type="button"
                            data-dismiss="alert"
                            aria-label="Close"
                            class="close"
                            @click="hasNotification=''"
                    >
                        <span aria-hidden="true">×</span>
                    </button>
                    <i class="ace-icon fa fa-hand-o-right"></i>
                    {{hasNotification}}
                </div>
            </div>
            <vs-divider class="mx-3"></vs-divider>
            <div class="col-md-12">
                <vs-card>
                    <div class="row p-4">
                        <div class="col-md-4">
                            <h4> Create Payment Method</h4><br>
                            <div class="form-group row mb-3">
                                <label class="col-sm-3"> Status</label>
                                <vs-input
                                        class="col-sm-9"
                                        v-model="status"

                                ></vs-input>
                            </div>
                            <vs-divider></vs-divider>
                            <vs-button color="#00b8cf"
                                       type="filled"
                                       class="my-round"
                                       @click.prevent="create"
                            >
                                Create
                            </vs-button>
                        </div>
                        <div class="col-md-8">
                            <ow-data-table :headers="tableHeader"
                                           :tableHeader="'Payment Method List'"
                                           :suggestText="'Payment Method Record list on table. Filter Payment Method using the filter.'"
                                           :url="'/json/payment-method'"
                                           :noDataMessage="'No Payment Method data found. Please Filter Payment Method to show.'"
                                           :hasSearch="true"
                                           :has-multiple="true"
                                           :has-pagination="true"
                            >
                                <template slot="items" slot-scope="props">
                                    <vs-td>

                                    </vs-td>

                                    <vs-td>
                                        <vs-switch color="success"
                                                   :checked="props.data.status=='Active'?true:false"
                                                   @click.stop="changeStatus(props.data.id)"
                                                   class="pointer-all"
                                        >
                                            <span slot="on">Active</span>
                                            <span slot="off">In-Active</span>
                                        </vs-switch>
                                    </vs-td>


                                    <vs-td>

                                    </vs-td>

                                </template>
                            </ow-data-table>
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
                tableHeader: [
                    {name: 'Payment Method', sort_key: 'payment_method'},
                    {name: 'Status', sort_key: ''},
                    {name: 'Action', sort_key: ''},
                ],
                hasNotification: 'Please, Create Year and Active',
                status: '',
                status2: [],
                button: ''
            }
        },
        methods: {
            create() {
                alert(this.status)
            },
            edit() {

            },
            delete() {
            },
            changeStatus() {
                alert(this.status2)
            }
        }
    }
</script>

<style scoped>

</style>
