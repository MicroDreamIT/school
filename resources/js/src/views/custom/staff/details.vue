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
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
                <vs-card>
                    <h2 class="pageTitle">Details</h2>
                    <div class="p-2">
                        <vs-button type="filled" class="smBtn" @click="currentView='profile'">Profile</vs-button>
                        <vs-button type="filled" class="smBtn" @click="currentView='payroll'">Payroll</vs-button>
                        <vs-button type="filled" class="smBtn" @click="currentView='library'">Library</vs-button>
                        <vs-button type="filled" class="smBtn" @click="currentView='attendance'">Attendance</vs-button>
                        <vs-button type="filled" class="smBtn" @click="currentView='hostel'">Hostel</vs-button>
                        <vs-button type="filled" class="smBtn" @click="currentView='transport'">Transport</vs-button>
                        <vs-button type="filled" class="smBtn" @click="currentView='docs'">Docs</vs-button>
                        <vs-button type="filled" class="smBtn" @click="currentView='notes'">Notes</vs-button>
                        <vs-button type="filled" class="smBtn" @click="currentView='login_access'">Login Access
                        </vs-button>
                    </div>
                    <div class="col-md-12">
                        <profile v-if="currentView=='profile'"/>
                        <payroll v-if="currentView=='payroll'"/>
                        <library v-else-if="currentView=='library'"/>
                        <attendance v-else-if="currentView=='attendance'"/>
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
    import payroll from "./includes/payroll";
    import library from './includes/library'
    import attendance from './includes/attendance'
    import hostel from './includes/hostel'
    import transport from './includes/transport'
    import docs from './includes/docs'
    import notes from './includes/notes'
    import loginAccess from './includes/login-access'

    export default {
        components: {
            payroll,
            profile, attendance, loginAccess, library, hostel, transport, docs, notes
        },
        data() {
            return {
                currentView: 'profile'
            }
        }
    }
</script>

<style scoped>

</style>
