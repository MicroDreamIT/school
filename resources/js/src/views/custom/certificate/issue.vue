<template>
    <div>
        <div class="row">
            <div class="col-md-12 mb-2">
                <h2 class="pageTitle">Issue Certificate Manager</h2>
            </div>
            <div class="col-md-12">
                <div class="row mx-0">
                    <router-link :to="'/certificate/issue'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                            Issue</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            Attendance</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-exchange" aria-hidden="true"></i>
                            Transfer</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            Bonafide</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-line-chart" aria-hidden="true"></i>
                            Course Completion
                        </vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-history" aria-hidden="true"></i>
                            History</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-certificate" aria-hidden="true"></i>
                            Custom</vs-button>
                    </router-link>
                    <router-link :to="'/'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-magic" aria-hidden="true"></i>
                            Template</vs-button>
                    </router-link>
                </div>
                <vs-divider></vs-divider>
            </div>
            <div class="col-md-12">
                <div class="mt-2 alert alert-success alert-dismissible display-block" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <i class="ace-icon fa fa-hand-o-right"></i>
                    Please, Create Year and Active
                </div>
            </div>
            <div class="col-md-12">
                <vs-row vs-justify="center">
                    <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="17">
                        <vs-card class="p-4">
                            <h4><i class="fa fa-search"></i> Search & Verify Student Before Issue Certificate</h4>
                            <br>
                            <vs-select
                                    class="selectExample"
                                    v-model="select2"
                                    width="100%"
                            >
                                <vs-select-item :key="index" :value="item.value" :text="item.text" v-for="item,index in options2" />
                            </vs-select>
                        </vs-card>
                    </vs-col>
                </vs-row>
            </div>
        </div>
        <vs-button color="primary" class="rounded" type="filled" style="float:right"><i class="fa fa-user"></i> Verify Student</vs-button>
    </div>
</template>

<script>
    export default {
        name: "issue",
        data(){
            return {
                select1:2,
                options2:[
                    {text: 'Square', value: 1},
                    {text: 'Rectangle', value: 2},
                ]
            }
        }
    }
</script>

<style scoped>

</style>
