<template>
    <div>
        <div class="row">
            <div class="col-md-12 mb-2">
                <h2 class="pageTitle">Guardian Manager</h2>
            </div>
            <div class="col-md-12">
                <div class="row mx-0">
                    <router-link :to="'/guardian'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            Detail
                        </vs-button>
                    </router-link>
                    <router-link :to="'/guardian/registration'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Registration
                        </vs-button>
                    </router-link>
                </div>
            </div>
            <div class="col-md-12" v-if="notification">
                <div role="alert"
                     class="mt-2 alert alert-success alert-dismissible display-block"
                >
                    <button type="button"
                            data-dismiss="alert"
                            aria-label="Close"
                            class="close"
                            @click="notification=''"
                    >
                        <span aria-hidden="true">×</span>
                    </button>
                    <i class="ace-icon fa fa-hand-o-right"></i>
                    {{notification}}
                </div>
            </div>
            <vs-divider class="mx-3"/>
        <div class="col-md-12 p-0">
            <vs-card class="p-3">
                <div class="row p-2">
                    <h4 class="card-title">Details
                    </h4>
                    <div class="p-2">
                        <vs-button type="filled" class="smBtn" @click="currentView='profile'">Profile</vs-button>
                        <vs-button type="filled" class="smBtn" @click="currentView='login_access'">Login Access
                        </vs-button>
                    </div>
                    <div class="col-md-12">
                        <profile v-if="currentView=='profile'" :profile="datas.guardian"/>
                        <login-access v-if="currentView=='login_access'"/>
                    </div>
                </div>
                </vs-card>
            </div>
        </div>
    </div>
</template>


<script>
    import profile from './includes/profile'
    import loginAccess from './includes/login-access'

    export default {
        components: {
            profile, loginAccess
        },
        data() {
            return {
                datas:{},
                currentView: 'profile',
                notification:''
            }
        },
        created(){
            let url ='/json/guardian/' + this.$route.params.id + '/view'

            this.$http.get(url).then(res=>{
                this.datas = res.data
            })
        }
    }
</script>

<style scoped>

</style>
