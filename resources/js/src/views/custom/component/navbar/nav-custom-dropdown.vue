<template>
    <div>
        <vs-dropdown vs-custom-content vs-trigger-click class="cursor-pointer my-dropdown">
            <div class="text-right leading-tight hidden sm:block">
                <p class="font-semibold inline-block">Admin Control</p>
                <i class="fa fa-angle-down"></i>
            </div>
            <vs-dropdown-menu class="vx-navbar-dropdown">
                <ul>
                    <li  class="flex py-2 px-4 cursor-pointer hover:bg-primary hover:text-white"
                            @click="$router.push('/user').catch(() => {})">
                        <feather-icon icon="UserIcon" svgClasses="w-4 h-4"/>
                        <small class="ml-2 ">User & Roles</small>
                    </li>
                    <li  class="flex py-2 px-4 cursor-pointer hover:bg-primary hover:text-white"
                            @click="$router.push('/super-suit/user-activity').catch(() => {})">
                        <feather-icon icon="ActivityIcon" svgClasses="w-4 h-4"/>
                        <small class="ml-2 ">User Activity</small>
                    </li>
                    <li  class="flex py-2 px-4 cursor-pointer hover:bg-primary hover:text-white"
                            @click="$router.push('/setting/general').catch(() => {})">
                        <feather-icon icon="SettingsIcon" svgClasses="w-4 h-4"/>
                        <small class="ml-2 ">General Setting</small>
                    </li>
                    <li  class="flex py-2 px-4 cursor-pointer hover:bg-primary hover:text-white"
                            @click="$router.push('/setting/sms').catch(() => {})">
                        <feather-icon icon="MessageCircleIcon" svgClasses="w-4 h-4"/>
                        <small class="ml-2 ">SMS Setting</small>
                    </li>
                    <li  class="flex py-2 px-4 cursor-pointer hover:bg-primary hover:text-white"
                            @click="$router.push('/setting/email').catch(() => {})">
                        <feather-icon icon="MailIcon" svgClasses="w-4 h-4"/>
                        <small class="ml-2 ">Email Setting</small>
                    </li>
                    <li  class="flex py-2 px-4 cursor-pointer hover:bg-primary hover:text-white"
                            @click="$router.push('/setting/alert').catch(() => {})">
                        <feather-icon icon="BellIcon" svgClasses="w-4 h-4"/>
                        <small class="ml-2 ">Alert Setting</small>
                    </li>
                    <li  class="flex py-2 px-4 cursor-pointer hover:bg-primary hover:text-white"
                            @click="$router.push('/setting/payment-gateway').catch(() => {})">
                        <feather-icon icon="CreditCardIcon" svgClasses="w-4 h-4"/>
                        <small class="ml-2 ">Payment Gateway</small>
                    </li>
                </ul>
            </vs-dropdown-menu>
        </vs-dropdown>
    </div>
</template>

<script>
    export default {
        name: "nav-custom-dropdown"
    }
</script>

<style scoped>

</style>
