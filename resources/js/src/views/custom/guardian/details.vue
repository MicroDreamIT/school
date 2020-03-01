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
                        <vs-button type="filled" class="smBtn" @click="currentView='login_access'">Login Access
                        </vs-button>
                    </div>
                    <div class="col-md-12">
                        <profile v-if="currentView=='profile'"/>
                        <login-access v-if="currentView=='login_access'"/>
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
                currentView: 'profile'
            }
        }
    }
</script>

<style scoped>

</style>
