<template>
  <div class="the-navbar__user-meta flex items-center" v-if="activeUserInfo.displayName">
    <vs-dropdown vs-custom-content vs-trigger-click class="cursor-pointer my-dropdown ">
    <div class="text-right leading-tight hidden sm:block">
      <p class="font-semibold mb-0">{{ activeUserInfo.displayName }}</p>
      <small>Available</small>
    </div>

     <div class="con-img ml-3">
        <img v-if="activeUserInfo.photoURL"
             key="onlineImg"
             :src="activeUserInfo.photoURL"
             alt="user-img"
             width="40"
             height="40"
             class="rounded-full shadow-md cursor-pointer block" />
      </div>

      <vs-dropdown-menu class="vx-navbar-dropdown">
        <ul style="min-width: 9rem">

          <li
            class="flex py-2 px-4 cursor-pointer hover:bg-primary hover:text-white"
            @click="$router.push('/user/profile').catch(() => {})">
            <feather-icon icon="UserIcon" svgClasses="w-4 h-4" />
            <small class="ml-2 ">Edit Profile</small>
          </li>

          <li
            class="flex py-2 px-4 cursor-pointer hover:bg-primary hover:text-white"
            @click="logout">
            <feather-icon icon="LogOutIcon" svgClasses="w-4 h-4" />
            <small class="ml-2">Logout</small>
          </li>
        </ul>
      </vs-dropdown-menu>
    </vs-dropdown>
  </div>
</template>

<script>
// import firebase from 'firebase/app'
// import 'firebase/auth'

export default {
  data() {
    return {
        // activeUserInfo:{
        // }
    }
  },
  computed: {
    activeUserInfo() {
      return this.$store.state.AppActiveUser
    }
  },
  methods: {
      logout(){

      }
    // logout() {
    //
    //     // if user is logged in via auth0
    //     if (this.$auth.profile) this.$auth.logOut();
    //
    //     // if user is logged in via firebase
    //     const firebaseCurrentUser = firebase.auth().currentUser
    //
    //     if (firebaseCurrentUser) {
    //         firebase.auth().signOut().then(() => {
    //             this.$router.push('/pages/login').catch(() => {})
    //         })
    //     }
    //     // If JWT login
    //     if(localStorage.getItem("accessToken")) {
    //       localStorage.removeItem("accessToken")
    //       this.$router.push('/pages/login').catch(() => {})
    //     }
    //
    //     // Change role on logout. Same value as initialRole of acj.js
    //     this.$acl.change('admin')
    //     localStorage.removeItem('userInfo')
    //
    //     // This is just for demo Purpose. If user clicks on logout -> redirect
    //     this.$router.push('/pages/login').catch(() => {})
    // },
  }
}
</script>
<style lang="scss">
  .my-dropdown{
    display: flex;
    align-items: center;
  }
</style>
