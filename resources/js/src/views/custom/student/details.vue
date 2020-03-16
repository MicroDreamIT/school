<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Student Manager</h2>
                <div class="p-2">
                    <router-link :to="'/student'">
                        <vs-button type="filled" class="smBtn">Primary</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">Primary</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">Primary</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">Primary</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">Primary</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">
                            Primary
                        </vs-button>
                    </router-link>

                </div>
            </div>
            <div class="col-md-12" v-if="$root.notification">
                <div role="alert"
                     class="mt-2 alert alert-success alert-dismissible display-block"
                >
                    <button type="button"
                            data-dismiss="alert"
                            aria-label="Close"
                            class="close"
                            @click="$root.notification=''"
                    >
                        <span aria-hidden="true">×</span>
                    </button>
                    <i class="ace-icon fa fa-hand-o-right"></i>
                    {{$root.notification}}
                </div>
            </div>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
                   <vs-card class="p-4">
                       <h2 class="pageTitle">Details</h2>
                       <div class="p-2">
                           <vs-button type="filled" class="smBtn" @click="currentView='profile'">Profile</vs-button>
                           <vs-button type="filled" class="smBtn" @click="currentView='academic'">Academic</vs-button>
                           <vs-button type="filled" class="smBtn" @click="currentView='fees'">Fees</vs-button>
                           <vs-button type="filled" class="smBtn" @click="currentView='library'">Library</vs-button>
                           <vs-button type="filled" class="smBtn" @click="currentView='attendance'">Attendance</vs-button>
                           <vs-button type="filled" class="smBtn" @click="currentView='exam'">Exam</vs-button>
                           <vs-button type="filled" class="smBtn" @click="currentView='certificate'">Certificate
                           </vs-button>
                           <vs-button type="filled" class="smBtn" @click="currentView='hostel'">Hostel</vs-button>
                           <vs-button type="filled" class="smBtn" @click="currentView='transport'">Transport</vs-button>
                           <vs-button type="filled" class="smBtn" @click="currentView='docs'">Docs</vs-button>
                           <vs-button type="filled" class="smBtn" @click="currentView='notes'">Notes</vs-button>
                           <vs-button type="filled" class="smBtn" @click="currentView='login_access'">Login Access
                           </vs-button>
                       </div>
                       <div class="col-md-12">
                           <profile v-if="currentView=='profile'"/>
                           <academic v-else-if="currentView=='academic'"/>
                           <fees v-else-if="currentView=='fees'"/>
                           <library v-else-if="currentView=='library'"/>
                           <attendance v-else-if="currentView=='attendance'"/>
                           <exam v-else-if="currentView=='exam'"/>
                           <certificate v-else-if="currentView=='certificate'"/>
                           <hostel v-else-if="currentView=='hostel'"/>
                           <transport v-else-if="currentView=='transport'"/>
                           <docs v-else-if="currentView=='docs'"/>
                           <notes v-else-if="currentView=='notes'"/>
                           <login-access v-if="currentView=='login_access'"/>
                       </div>
                   </vs-card>
            </div>
        </div>
    </div>
</template>


<script>
    import profile from './includes/profile'
    import academic from './includes/academic'
    import fees from './includes/fees'
    import library from './includes/library'
    import attendance from './includes/attendance'
    import exam from './includes/exam'
    import certificate from './includes/certificate'
    import hostel from './includes/hostel'
    import transport from './includes/transport'
    import docs from './includes/docs'
    import notes from './includes/notes'
    import loginAccess from './includes/login-access'

    export default {
        components: {
            profile, attendance, academic, loginAccess, library, exam, fees, certificate, hostel, transport, docs, notes
        },
        data() {
            return {
                currentView: 'profile',
                datas:null
            }
        },
        created() {
            this.$http.get('/json/student/4/view').then(res=>{
                this.datas = res.data
            })
        }
    }
</script>

<style scoped>

</style>
