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
                <vs-card class="p-3">
                    <div class="p-2">
                        <router-link :to="'/library/book'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                Book Detail
                            </vs-button>
                        </router-link>
                        <router-link :to="'/library/book/add'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                New Book
                            </vs-button>
                        </router-link>
                        <router-link :to="'/library/book/import'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-upload" aria-hidden="true"></i>
                                Bulk Import
                            </vs-button>
                        </router-link>
                        <router-link :to="'/library/book/category'">
                            <vs-button type="filled" class="smBtn">
                                <i class="fa fa-pie-chart" aria-hidden="true"></i>
                                Book Category
                            </vs-button>
                        </router-link>
                    </div>
                    <vs-divider/>

                    <h4>Import</h4>
                    <vs-divider/>
                    <p class="md:text-xl sm:text-lg font-bold">
                        <i class="fa fa-download"></i> CSV Template for Book Import
                    </p>
                    <vs-divider/>
                    <vs-input type="file"
                              v-model="file"
                              class="w-100"></vs-input>
                    <vs-divider/>
                    <vs-button color="#00cfe8"
                               class="rounded"
                               type="filled"
                               @click="upload"
                    >
						<i class="fa fa-upload" ></i>
                        Import
                    </vs-button>
                </vs-card>
            </div>
		</div>

        </div>

</template>

<script>

    export default {
        name: "bulk-import",
        data() {
            return {
                notification: '',
                file: null
            }
        },
        methods: {
            upload() {

            }
        }
    }
</script>

<style scoped>

</style>

