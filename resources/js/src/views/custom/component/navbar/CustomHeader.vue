<!-- =========================================================================================
  File Name: TheNavbar.vue
  Description: Navbar component
  Component Name: TheNavbar
  ----------------------------------------------------------------------------------------
  Item Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
  Author: Pixinvent
  Author URL: http://www.themeforest.net/user/pixinvent
========================================================================================== -->


<template>
    <div class="relative">

        <div class="vx-navbar-wrapper" :class="classObj">

            <vs-navbar class="vx-navbar navbar-custom navbar-skelton" :color="navbarColorLocal" :class="textColor">

                <vs-spacer/>
                <div class="nav-item d-none d-lg-block cursor-pointer mx-3" @click="$root.toggleMaximize">
                    <a class="nav-link nav-link-expand">
                    <i class="ficon feather" :class="$root.isMaximized?'icon-minimize':'icon-maximize'"></i></a>
                </div>
                <nav-custom-dropdown class="mx-3 px-3"></nav-custom-dropdown>
                <profile-drop-down class="ml-3"/>

            </vs-navbar>
        </div>
    </div>
</template>


<script>

    import ProfileDropDown from "./custom-profile.vue"
    import NavCustomDropdown from "./nav-custom-dropdown.vue"

    export default {
        name: "custom-navbar",
        props: {
            navbarColor: {
                type: String,
                default: "#fff",
            },
        },
        components: {
            ProfileDropDown, NavCustomDropdown
        },
        computed: {
            navbarColorLocal() {
                return this.$store.state.theme === "dark" && this.navbarColor === "#fff" ? "#10163a" : this.navbarColor
            },
            verticalNavMenuWidth() {
                return this.$store.state.verticalNavMenuWidth
            },
            textColor() {
                return {'text-white': (this.navbarColor != '#10163a' && this.$store.state.theme === 'dark') || (this.navbarColor != '#fff' && this.$store.state.theme !== 'dark')}
            },
            windowWidth() {
                return this.$store.state.windowWidth
            },

            // NAVBAR STYLE
            classObj() {
                if (this.verticalNavMenuWidth == "default") return "navbar-default"
                else if (this.verticalNavMenuWidth == "reduced") return "navbar-reduced"
                else if (this.verticalNavMenuWidth) return "navbar-full"
            },
        },
        methods: {
            showSidebar() {
                this.$store.commit('TOGGLE_IS_VERTICAL_NAV_MENU_ACTIVE', true);
            }
        }
    }
</script>
<style lang="scss">
    .icon-minimize:before {
        content: "\e88d";
    }

    .ficon {
        font-size: 1.5rem;
        color: #626262;
    }
</style>

