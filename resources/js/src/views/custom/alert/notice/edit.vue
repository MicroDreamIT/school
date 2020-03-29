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
            <notify-bar/>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
                <vs-card>
                    <div class="row mx-0">
                        <div class="col-md-12">
                            <br>
                            <h4 class="header large lighter blue">
                                Create Notice
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
                        <div class="col-md-12 row">
                            <div class="col-md-8">
                                <p>Title</p>
                                <vs-input
                                        v-model="notice.title"
                                        v-validate="'required'"
                                        data-vv-name="title"
                                        :danger="errors.first('title')?true:false"
                                        :danger-text="errors.first('title')"
                                        class="w-100"
                                >

                                </vs-input>
                                <p>Message</p>
                                <quill-editor
                                        v-model="notice.message"
                                        v-validate="'required'"
                                        data-vv-name="message"
                                >

                                </quill-editor>
                                <span class="error-text" v-if="errors.first('message')">
                                    {{ errors.first('message') }}
                                </span>
                            </div>
                            <div class="col-md-4">
                                <p>Publish Date</p>
                                <datepicker v-model="notice.publish_date"
                                            :format="'yyyy-MM-dd'"
                                            @input="notice.publish_date=$root.formatPicker($event)"
                                            v-validate="'required'"
                                            data-vv-name="publish_date"

                                >

                                </datepicker>
                                <span class="error-text" v-if="errors.first('publish_date')">
                                    {{ errors.first('publish_date') }}
                                </span>
                                <p>End Date</p>
                                <datepicker
                                        v-model="notice.end_date"
                                        :format="'yyyy-MM-dd'"
                                        @input="notice.end_date=$root.formatPicker($event)"
                                        v-validate="'required'"
                                        data-vv-name="end_date"
                                >

                                </datepicker>
                                <span class="error-text" v-if="errors.first('end_date')">
                                    {{ errors.first('end_date') }}
                                </span>
                                <p>Message Display Groups</p>
                                <vs-checkbox v-model="notice.role"
                                             class="my-2"
                                             v-for="role in roles"
                                             :vs-value="role.id"
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
                                       @click.prevent="create">
                                Create
                            </vs-button>
                            <vs-button class="my-round mx-2"
                                       color="#28c76f"
                                       @click.prevent="save"
                            >
                                Create And Add Another
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
                notice: {role: []},
                roles: []
            }
        },
        created() {
            this.getData()
        },

        methods: {
            getData() {
                this.$http.get('/json/info/notice/add').then(res => {
                    this.roles = res.data.roles;
                })
            },
            reset() {
                this.notice = {role: []};
                this.$validator.reset();
            },
            create() {
                this.$validator.validateAll().then(value => {
                    if (value) {
                        console.log(this.notice)
                        this.$http.post('/json/info/notice/store', this.notice).then(res => {
                            this.$vs.notify({
                                title: 'Create Status ',
                                text: res.data[1],
                                color: res.data[0],
                                position: 'top-right'
                            });
                            this.$validator.reset();
                            this.$router.push('/info/notice')
                        })
                    }
                })
            },
            save() {
                this.$validator.validateAll().then(value => {
                    if (value) {
                        this.$http.post('/json/info/notice/store', this.notice).then(res => {
                            this.notice = {role: []};
                            this.$root.notification.status = res.data[0];
                            this.$root.notification.message = res.data[1];
                            this.getData();
                            this.$validator.reset()
                        })
                    }
                })
            }
        }

    }


</script>

<style scoped>

</style>
