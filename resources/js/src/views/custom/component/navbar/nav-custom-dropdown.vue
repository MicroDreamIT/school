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
                            @click="$router.push('/pages/profile').catch(() => {})">
                        <feather-icon icon="UserIcon" svgClasses="w-4 h-4"/>
                        <small class="ml-2 ">User & Roles</small>
                    </li>
                    <li  class="flex py-2 px-4 cursor-pointer hover:bg-primary hover:text-white"
                            @click="$router.push('/pages/profile').catch(() => {})">
                        <feather-icon icon="UserIcon" svgClasses="w-4 h-4"/>
                        <small class="ml-2 ">User Activity</small>
                    </li>
                    <li  class="flex py-2 px-4 cursor-pointer hover:bg-primary hover:text-white"
                            @click="$router.push('/pages/profile').catch(() => {})">
                        <feather-icon icon="UserIcon" svgClasses="w-4 h-4"/>
                        <small class="ml-2 ">General Setting</small>
                    </li>
                    <li  class="flex py-2 px-4 cursor-pointer hover:bg-primary hover:text-white"
                            @click="$router.push('/pages/profile').catch(() => {})">
                        <feather-icon icon="UserIcon" svgClasses="w-4 h-4"/>
                        <small class="ml-2 ">SMS Setting</small>
                    </li>
                    <li  class="flex py-2 px-4 cursor-pointer hover:bg-primary hover:text-white"
                            @click="$router.push('/pages/profile').catch(() => {})">
                        <feather-icon icon="UserIcon" svgClasses="w-4 h-4"/>
                        <small class="ml-2 ">Email Setting</small>
                    </li>
                    <li  class="flex py-2 px-4 cursor-pointer hover:bg-primary hover:text-white"
                            @click="$router.push('/pages/profile').catch(() => {})">
                        <feather-icon icon="UserIcon" svgClasses="w-4 h-4"/>
                        <small class="ml-2 ">Alert Setting</small>
                    </li>
                    <li  class="flex py-2 px-4 cursor-pointer hover:bg-primary hover:text-white"
                            @click="$router.push('/pages/profile').catch(() => {})">
                        <feather-icon icon="UserIcon" svgClasses="w-4 h-4"/>
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
