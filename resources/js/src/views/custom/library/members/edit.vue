<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Books Manager
                </h2>
                <div class="p-2">
                    <router-link :to="'/library/book'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            Book Detail
                        </vs-button>
                    </router-link>
                    <router-link :to="'/library/issue-history'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-history" aria-hidden="true"></i>
                            Issue History
                        </vs-button>
                    </router-link>
                    <router-link :to="'/library/member'">

                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            Membership
                        </vs-button>
                    </router-link>
                    <router-link :to="'/library/student'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            Students Member
                        </vs-button>
                    </router-link>
                    <router-link :to="'/library/staff'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            Staffs Member
                        </vs-button>
                    </router-link>
                    <router-link :to="'/library/return-over'">
                        <vs-button type="filled" class="smBtn" color="warning">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            Return Period Over
                        </vs-button>
                    </router-link>

                </div>
            </div>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
                <vs-card>
                    <div class="p-2">
                        <router-link :to="'/library/member'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                Member Detail
                            </vs-button>
                        </router-link>
                        <router-link :to="'/library/member/add'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                New Member
                            </vs-button>
                        </router-link>
                    </div>
                    <vs-divider/>
                    <div>
                        <h4><i class="fa fa-plus"></i>
                            Members
                        </h4>
                    </div>
                    <div class="row">
                        <div class="col-md-2">Member Type</div>
                        <div class="col-md-2">
                            <select v-model="forms.user_type" class="form-control" :danger="error.user_type!==undefined">
                                <option value="1">student</option>
                                <option value="2">staff</option>
                            </select>
                            <p v-if="error.user_type!==undefined" class="text-danger">
                                {{ error.user_type[0] }}
                            </p>
                        </div>
                        <div class="col-md-2">Reg No.</div>
                        <div class="col-md-2">
                            <vs-input class="w-100" v-model="forms.reg_no" :danger="error.reg_no!==undefined"/>
                            <p v-if="error.reg_no!==undefined" class="text-danger">
                                {{ error.reg_no[0] }}
                            </p>
                        </div>
                        <div class="col-md-2">Status</div>
                        <div class="col-md-2">
                            <select v-model="forms.status" class="form-control" :danger="error.status!==undefined">
                                <option value="active">active</option>
                                <option value="in-active">in active</option>
                            </select>
                            <p v-if="error.status!==undefined" class="text-danger">
                                {{ error.status[0] }}
                            </p>
                        </div>
                    </div>
                    <vs-divider></vs-divider>
                    <div class="row mx-0">
                        <vs-button class="my-round mx-2" color="warning">Reset</vs-button>
                        <vs-button class="my-round mx-2" @click="posting()">Save</vs-button>
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
                selected: [],
                searchData: {},
                mainItem: [],
                forms:{},
                error:[]

            }
        },
        created(){
            this.getData()
        },
        methods: {
            getData(){
                this.$http.get('/json/library/member/' + this.$route.params.id + '/edit')
                    .then(res=>{
                        this.forms = res.data.row
                        this.forms.reg_no = this.forms.memberdetail[2]
                    })
            },
            posting(){
                this.$http.post('/json/library/member/' + this.$route.params.id + '/update' , this.forms)
                    .then(res=>{
                        this.$vs.notify({
                            title: res.data[0],
                            text: res.data[1],
                            color: res.data[0],
                            icon: 'verified_user'
                        })
                        this.forms={}
                        this.$router.push({path:'/library/member'})
                    })
                    .catch(err=>{
                        if (err.response) {
                            this.error = err.response.data.errors
                        }
                    })
            },
            doFilter() {

            },
            doActive() {

            },
            doInActive() {

            },
            doDelete() {

            },
            doCopy() {
                alert('doing copy')
            },
            doPdf() {
                alert('doing pdf')
            },
            doJson() {
                alert('doing json')
            },
            doPrint() {
                alert('doing print')
            },
        }
    }
</script>

<style scoped>

</style>
