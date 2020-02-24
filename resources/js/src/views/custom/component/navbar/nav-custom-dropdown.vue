<template>
    <div>
        <vs-dropdown vs-custom-content vs-trigger-click class="cursor-pointer my-dropdown">
            <div class="text-right leading-tight hidden sm:block">
                <p class="font-semibold">Admin Control</p>
                <i class="fa fa-angle-down"></i>
            </div>
            <vs-dropdown-menu class="vx-navbar-dropdown">
                <ul style="min-width: 9rem">

                    <li
                            class="flex py-2 px-4 cursor-pointer hover:bg-primary hover:text-white"
                            @click="$router.push('/pages/profile').catch(() => {})">
                        <feather-icon icon="UserIcon" svgClasses="w-4 h-4"/>
                        <small class="ml-2 ">Edit Profile</small>
                    </li>
                    <li
                            class="flex py-2 px-4 cursor-pointer hover:bg-primary hover:text-white"
                            @click="$router.push('/pages/profile').catch(() => {})">
                        <feather-icon icon="UserIcon" svgClasses="w-4 h-4"/>
                        <small class="ml-2 ">Edit Profile</small>
                    </li>
                    <li
                            class="flex py-2 px-4 cursor-pointer hover:bg-primary hover:text-white"
                            @click="$router.push('/pages/profile').catch(() => {})">
                        <feather-icon icon="UserIcon" svgClasses="w-4 h-4"/>
                        <small class="ml-2 ">Edit Profile</small>
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
