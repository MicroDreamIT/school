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
                        <div class="col-md-12 row">
                            <div class="col-md-8">
                                <p>Subject</p>
                                <vs-input
                                        v-model="sms.subject"
                                        v-validate="'required'"
                                        data-vv-name="subject"
                                        :danger="errors.first('subject')?true:false"
                                        :danger-text="errors.first('subject')"
                                        class="w-100"
                                >

                                </vs-input>
                                <p>Message</p>
                                <vs-textarea
                                        v-model="sms.message"
                                        v-validate="'required'"
                                        data-vv-name="message"
                                        :danger="errors.first('message')?true:false"
                                        :danger-text="errors.first('message')"
                                        class="w-100"
                                        height="100px"
                                >

                                </vs-textarea>
                                <span class="error-text" v-if="errors.first('message')">
                                    {{ errors.first('message') }}
                                </span>
                                <p>Email Message</p>
                                <vs-textarea
                                        v-model="sms.emailMessage"
                                        class="w-100"
                                        height="100px"
                                >

                                </vs-textarea>
                            </div>
                            <div class="col-md-4">
                                <p>Type</p>
                                <vs-radio v-model="sms.type"  vs-value="sms">Sms</vs-radio>
                                <vs-radio v-model="sms.type" vs-value="email">Email</vs-radio>
                                <p>Message Display Groups</p>
                                <vs-checkbox v-model="sms.role"
                                             class="my-2"
                                             v-for="role in roles"
                                             :vs-value="role.name"
                                             :key="role.id"
                                >
                                    {{role.display_name}}
                                </vs-checkbox>

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
                sms: {role: [],type:['sms']},
                roles: []
            }
        },
        created() {
            this.getData()
        },

        methods: {
            getData() {
                this.$http.get('/json/info/smsemail/create').then(res => {
                    this.roles = res.data.roles;
                })
            },
            reset() {
                this.sms = {role: [],type:['sms']};
                this.$validator.reset();
            },
            send() {
                this.$validator.validateAll().then(value => {
                    if (value) {
                        this.$http.post('/json/info/smsemail/send', this.sms).then(res => {
                            this.$vs.notify({
                                title: 'Send Status ',
                                text: res.data[1],
                                color: res.data[0],
                                position: 'top-right'
                            });
                            this.sms = {role: [],type:['sms']};
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
