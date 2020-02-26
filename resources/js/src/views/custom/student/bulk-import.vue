<template>
    <div>
        <div class="row">
            <div class="col-md-12 mb-2">
                <h2 class="pageTitle">Details</h2>
            </div>
            <div class="col-md-12">
                <div class="row mx-0">
                    <router-link :to="'/student'">
                        <vs-button type="filled" class="smBtn" icon="list">Primary</vs-button>
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
                        <vs-button type="filled" class="smBtn">Primary</vs-button>
                    </router-link>

                </div>
            </div>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
                <vs-row vs-justify="center">
                    <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="17">
                        <vs-card>
                            <div>
                                <span>Import</span>
                                <hr>
                                <span>CSV Template for Bulk Student Import</span>
                                <hr>
                                <vs-input type="file"></vs-input>
                                <hr>
                                <vs-button color="primary" type="filled">Upload</vs-button>
                            </div>
                        </vs-card>
                    </vs-col>
                </vs-row>
            </div>
        </div>
    </div>

</template>

<script>
    import Button from "../../components/vuesax/button/Button";
    export default {
        name: "bulk-import",
        components: {Button}
    }
</script>

<style scoped>

</style>
