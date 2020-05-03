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
                <vs-card>
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
                    <h4 class="d-inline-block mr-4"><i class="fa fa-plus"></i> Books </h4>
                    <router-link :to="'/library/book/import'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-upload" aria-hidden="true"></i>
                            Bulk Import From CSV
                        </vs-button>
                    </router-link>
                    <div class="row px-4">
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>ISBN Number</label>
                                <vs-input class="w-100"></vs-input>
                            </div>
                            <div class="form-group ">
                                <label>Code</label>
                                <vs-input class="w-100"></vs-input>
                            </div>

                            <div class="form-group ">
                                <label> Book Name</label>
                                <vs-input class="w-100"></vs-input>
                            </div>
                            <div class="form-group">
                                <label>Category </label>
                                <select v-model="forms.category" class="form-control">
                                    <option :value="c.id" v-for="c in $root.objectToArray(loadedData.categories)">{{c.value}}</option>
                                </select>
                            </div>
                            <div class="form-group ">
                                <label>Language</label>
                                <vs-input class="w-100"></vs-input>
                            </div>
                            <div class="form-group ">
                                <label>Book Status </label>
                                <select v-model="forms.status" class="form-control">
                                    <option :value="c.id" v-for="c in $root.objectToArray(loadedData.book_status)">{{c.value}}</option>
                                </select>
                            </div>
                            <div class="form-group ">
                                <label>Book Image </label>
                                <vs-input class="w-100" type="file"></vs-input>
                            </div>
                            <div class="form-group ">
                                <label>Notes </label>
                                <vs-textarea class="w-100"></vs-textarea>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="form-group ">
                                <label>Start</label>
                                <vs-input class="w-100"></vs-input>
                            </div>
                            <div class="form-group ">
                                <label>Start Code</label>
                                <vs-input class="w-100"></vs-input>
                            </div>
                            <div class="form-group ">
                                <label>Sub Title</label>
                                <vs-input class="w-100"></vs-input>
                            </div>

                            <div class="form-group ">
                                <label>Edition</label>
                                <vs-input class="w-100"></vs-input>
                            </div>

                            <div class="form-group ">
                                <label>Series</label>
                                <vs-input class="w-100"></vs-input>
                            </div>
                            <div class="form-group ">
                                <label>Rack Location </label>
                                <vs-input class="w-100"></vs-input>
                            </div>
                            <div class="form-group ">
                                <label>Price </label>
                                <vs-input class="w-100"></vs-input>
                            </div>
                            <div class="form-group ">
                                <label>Page </label>
                                <vs-input class="w-100"></vs-input>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>End</label>
                                <vs-input class="w-100"></vs-input>
                            </div>
                            <div class="form-group ">
                                <label>End Code</label>
                                <vs-input class="w-100"></vs-input>
                            </div>
                            <div class="form-group ">
                                <label> Total Quantity </label>
                                <vs-input class="w-100"></vs-input>
                            </div>

                            <div class="form-group ">
                                <label>Edition Year</label>
                                <vs-input class="w-100"></vs-input>
                            </div>
                            <div class="form-group ">
                                <label>Publisher</label>
                                <vs-input class="w-100"></vs-input>
                            </div>
                            <div class="form-group ">
                                <label>Author</label>
                                <vs-input class="w-100"></vs-input>
                            </div>
                            <div class="form-group ">
                                <label>Publish Year</label>
                                <vs-input class="w-100"></vs-input>
                            </div>

                            <div class="form-group ">
                                <label>Source</label>
                                <vs-input class="w-100"></vs-input>
                            </div>
                        </div>
                    </div>
                    <vs-divider class="mx-1"/>
                    <div class="row p-3">
                        <div class="col-md-12">
                            <button class="btn" type="reset">
                                <i class="fa fa-undo"></i>
                                Reset
                            </button>
                            <button class="btn btn-primary " type="submit">
                                <i class="fa fa-save "></i>
                                Save
                            </button>
                            <button class="btn btn-success " type="submit">
                                <i class="fa fa-save "></i>
                                <i class="fa fa-plus "></i>
                                Save And Add Another
                            </button>
                        </div>
                    </div>
                </vs-card>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        data(){
            return {
                forms:{},
                loadedData:{

                }
            }
        },
        created() {
            this.getData()
        },
        methods:{
            getData(){
                this.$http.get('/json/library/book/add')
                    .then(res=>{
                        this.loadedData = res.data
                    })
            }
        }
    }


</script>

<style scoped>

</style>


