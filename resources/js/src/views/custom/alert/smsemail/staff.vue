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
                        <div class="col-md-12 mb-2">
                            <vs-collapse class="custom-collapse">
                                <vs-collapse-item>
                                    <div slot="header">
                                        <vs-button type="filled"
                                                   color="primary"
                                                   icon="double_arrow"
                                                   class="rounded"
                                        >
                                            Filter Staffs
                                        </vs-button>
                                    </div>
                                    <div class="filterBox">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label>Reg:</label>
                                                        <vs-input v-model="searchData.reg_no"
                                                                  class="w-100">
                                                        </vs-input>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Designation</label>
                                                        <v-select :options="designation"
                                                                  label="value"
                                                                  v-model="searchData.designation"
                                                                  :reduce="a=>a.id"
                                                        >
                                                        </v-select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Join Date</label>
                                                        <div class="d-flex justify-content-between">
                                                            <datepicker v-model="searchData.fromDate" class="flex-1"/>
                                                            <label>To</label>
                                                            <datepicker v-model="searchData.toDate" class="flex-1"/>
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Status:</label>
                                                        <v-select v-model="searchData.status"
                                                                  :options="['active','in-active']"
                                                                  placeholder="Select Status"
                                                        >
                                                        </v-select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-2 pl-0">
                                            <vs-button type="filled"
                                                       color="#00b8cf"
                                                       icon="double_arrow"
                                                       @click.prevent="doFilter"
                                            >
                                                Filter
                                            </vs-button>
                                        </div>
                                    </div>
                                </vs-collapse-item>
                            </vs-collapse>
                        </div>
                        <div class="col-md-8">
                            <ow-data-table :headers="staffHeader"
                                           :tableHeader="'Staffs List'"
                                           :suggestText="'Staff Record list on table. Filter Staff using the filter.'"
                                           :url="'/json/info/smsemail/staff'"
                                           :noDataMessage="'No Staff data found. Please Filter Staff to show.'"
                                           :hasSearch="true"
                                           :action-btn="false"
                                           :print-section="false"
                                           :has-multiple="true"
                                           :has-pagination="true"
                                           :main-item="mainItem"
                                           :getData="getData"
                                           ref="staffSms"
                            >
                                <template slot="items" slot-scope="props">
                                    <vs-td :data="props.data.reg_no">
                                        {{props.data.reg_no}}
                                    </vs-td>

                                    <vs-td :data="props.data.fullname">

                                        {{props.data.fullname}}


                                    </vs-td>
                                    <vs-td :data="props.data.mobile_1">
                                        {{props.data.mobile_1}}
                                    </vs-td>
                                    <vs-td :data="props.data.designation">
                                        {{props.data.designation}}
                                    </vs-td>
                                </template>


                                <template slot="printSection" slot-scope="printData">
                                </template>
                            </ow-data-table>
                        </div>
                        <vs-divider class="mx-3"></vs-divider>
                        <div class="col-md-12 row">
                            <div class="col-md-8">
                                <p>Message</p>
                                <vs-textarea
                                        v-model="sms.message"
                                        v-validate="'required'"
                                        data-vv-name="message"
                                        :danger="errors.first('message')?true:false"
                                        :danger-text="errors.first('message')"
                                        class="w-100"
                                        height="200px"
                                >

                                </vs-textarea>
                                <span class="error-text" v-if="errors.first('message')">
                                    {{ errors.first('message') }}
                                </span>
                            </div>
                            <div class="col-md-4">
                                <p>Type</p>
                                <vs-radio v-model="sms.type" vs-value="sms">Sms</vs-radio>
                                <vs-radio v-model="sms.type" vs-value="email">Email</vs-radio>
                            </div>
                        </div>
                        <vs-divider></vs-divider>
                        <div class="row mx-0">
                            <vs-button class="my-round mx-2"
                                       color="warning"
                                       @click.prevent="reset"

                            >
                                Reset
                            </vs-button>
                            <vs-button class="my-round mx-2"
                                       @click.prevent="send">
                                Send
                            </vs-button>
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
                sms: {type: ['sms']},
                searchData: {},
                staffHeader: [
                    {name: 'Reg.Num', sort_key: 'reg_no'},
                    {name: 'Staff Name', sort_key: ''},
                    {name: 'Phone', sort_key: ''},
                    {name: 'Designation', sort_key: ''},
                ],
                item: [],
                mainItem: [],
                designation: [],
            }
        },
        created() {
            this.getData()
        },
        methods: {
            getData() {
                this.$http.get('/json/info/smsemail/staff').then(res => {
                    this.item = res.data.staff;
                    this.mainItem = this.item;
                    this.designation = this.$root.objectToArray(res.data.designation)
                });
            },
            doFilter() {
                this.$http.get('/json/info/smsemail/staff', {params: this.searchData}).then(res => {
                    this.item = res.data.staff;
                    this.mainItem = this.item;
                    this.designation = this.$root.objectToArray(res.data.designation)
                });
            },

            reset() {
                this.sms = {type: ['sms'], chkIds: []};
                this.$validator.reset();
            },
            send() {
                this.$refs.staffSms.getSelected();
                this.$nextTick(() => {
                    this.sms.chkIds = this.$root.selected;
                })


                this.$validator.validateAll().then(value => {
                    if (value) {
                        this.$http.post('/json/info/smsemail/staff/send', this.sms).then(res => {
                            this.$vs.notify({
                                title: 'Send Status ',
                                text: res.data[1],
                                color: res.data[0],
                                position: 'top-right'
                            });
                            this.sms = {type: ['sms'], chkIds: []};
                            this.$validator.reset();
                        })
                    }
                })
            },
        }

    }


</script>

<style scoped>

</style>
