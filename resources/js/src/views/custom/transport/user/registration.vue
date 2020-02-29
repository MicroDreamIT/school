<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Transport User Manger</h2>
                <div class="mb-2">
                    <router-link :to="'/transport/user'">
                        <vs-button type="filled" class="smBtn">User</vs-button>
                    </router-link>
                    <router-link :to="'/transport/route'">
                        <vs-button type="filled" class="smBtn">Route</vs-button>
                    </router-link>
                    <router-link :to="'/transport/vehicle'">
                        <vs-button type="filled" class="smBtn">Vehicle</vs-button>
                    </router-link>
                </div>
            </div>
            <vs-card>
                <div class="row mx-0">
                    <div class="col-md-12">
                        <h4>Transport User List</h4>
                        <router-link :to="'/transport/user'">
                            <vs-button type="filled" class="smBtn">Detail</vs-button>
                        </router-link>
                        <router-link :to="'/transport/user/add'">
                            <vs-button type="filled" class="smBtn">Registration</vs-button>
                        </router-link>
                        <router-link :to="'/transport/user/history'">
                            <vs-button type="filled" class="smBtn">History</vs-button>
                        </router-link>
                    </div>
                    <vs-divider></vs-divider>
                    <div class="row w-100">
                        <div class="col-md-12">
                            <h4>Transport User</h4>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Type:</label>
                                <v-select/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Reg No:</label>
                                <vs-input placeholder=""
                                />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Status:</label>
                                <v-select/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Vehicle:</label>
                                <v-select/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Route:</label>
                                <v-select/>
                            </div>
                        </div>
                        <vs-divider class="mx-3"></vs-divider>
                        <div class="row mx-0 col-md-12">
                            <vs-button class="my-round mx-2" color="warning">Reset</vs-button>
                            <vs-button class="my-round mx-2">Save</vs-button>
                            <vs-button class="my-round mx-2" color="#28c76f">Save And Add Another</vs-button>
                        </div>
                    </div>
                    <div>
                    </div>
                </div>
            </vs-card>
        </div>
    </div>
</template>

<script>

    export default {
        data() {
            return {}
        }
    }
</script>

<style scoped>

</style>
