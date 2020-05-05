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
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label>ISBN Number</label>
                                <vs-input class="w-100" v-model="forms.isbn_number"></vs-input>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Code</label>
                                <vs-input class="w-100" v-model="forms.code" :danger="error.code!==undefined"/>
                                <p v-if="error.code!==undefined" class="text-danger">
                                    {{ error.code[0] }}
                                </p>
                            </div>

                            <div class="form-group ">
                                <label> Book Name</label>
                                <vs-input class="w-100" v-model="forms.title" :danger="error.title!==undefined"/>
                                <p v-if="error.title!==undefined" class="text-danger">
                                    {{ error.title[0] }}
                                </p>
                            </div>
                            <div class="form-group">
                                <label>Category </label>
                                <select v-model="forms.categories" class="form-control" :danger="error.categories!==undefined">
                                    <option :value="c.id" v-for="c in $root.objectToArray(loadedData.categories)">
                                        {{c.value}}
                                    </option>
                                </select>
                                <p v-if="error.categories!==undefined" class="text-danger">
                                    {{ error.categories[0] }}
                                </p>
                            </div>
                            <div class="form-group ">
                                <label>Language</label>
                                <vs-input class="w-100" v-model="forms.language"></vs-input>
                            </div>
                            <div class="form-group ">
                                <label>Book Status </label>
                                <select v-model="forms.book_status" class="form-control">
                                    <option :value="c.id" v-for="c in $root.objectToArray(loadedData.book_status)">
                                        {{c.value}}
                                    </option>
                                </select>
                            </div>
                            <div class="form-group ">
                                <label>Book Image </label>
                                <vs-input class="w-100" type="file" id="main_image" name="main_image"></vs-input>
                            </div>
                            <div class="form-group ">
                                <label>Notes </label>
                                <vs-textarea class="w-100" v-model="forms.notes"></vs-textarea>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="form-group ">
                                <label>Start</label>
                                <vs-input class="w-100" v-model="forms.start" type="number" :danger="error.start!==undefined"/>
                                <p v-if="error.start!==undefined" class="text-danger">
                                    {{ error.start[0] }}
                                </p>
                            </div>
                            <div class="form-group ">
                                <label>Start Code</label>
                                <vs-input class="w-100" v-model="forms.start_preview" readonly></vs-input>
                            </div>
                            <div class="form-group ">
                                <label>Sub Title</label>
                                <vs-input class="w-100" v-model="forms.sub_title"></vs-input>
                            </div>

                            <div class="form-group ">
                                <label>Edition</label>
                                <vs-input class="w-100" v-model="forms.edition"></vs-input>
                            </div>

                            <div class="form-group ">
                                <label>Series</label>
                                <vs-input class="w-100" v-model="forms.series"></vs-input>
                            </div>
                            <div class="form-group ">
                                <label>Rack Location </label>
                                <vs-input class="w-100" v-model="forms.rack_location"></vs-input>
                            </div>
                            <div class="form-group ">
                                <label>Price </label>
                                <vs-input class="w-100" v-model="forms.price" type="number" :danger="error.price!==undefined"/>
                                <p v-if="error.price!==undefined" class="text-danger">
                                    {{ error.price[0] }}
                                </p>
                            </div>
                            <div class="form-group ">
                                <label>Total Page </label>
                                <vs-input class="w-100" v-model="forms.total_pages" type="number"></vs-input>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>End</label>
                                <vs-input class="w-100" v-model="forms.end" type="number" :danger="error.end!==undefined"/>
                                <p v-if="error.end!==undefined" class="text-danger">
                                    {{ error.end[0] }}
                                </p>
                            </div>
                            <div class="form-group ">
                                <label>End Code</label>
                                <vs-input class="w-100" v-model="forms.end_preview" readonly></vs-input>
                            </div>
                            <div class="form-group ">
                                <label> Total Quantity </label>
                                <vs-input class="w-100" v-model="forms.total_copy" readonly=""></vs-input>
                            </div>

                            <div class="form-group ">
                                <label>Edition Year</label>
                                <vs-input class="w-100" v-model="forms.edition_year" type="number" v-mask="'####'"/>
                            </div>
                            <div class="form-group ">
                                <label>Publisher</label>
                                <vs-input class="w-100" v-model="forms.publisher"></vs-input>
                            </div>
                            <div class="form-group ">
                                <label>Author</label>
                                <vs-input class="w-100" v-model="forms.author"></vs-input>
                            </div>
                            <div class="form-group ">
                                <label>Publish Year</label>
                                <vs-input class="w-100" v-model="forms.publish_year" type="number" v-mask="'####'"/>
                            </div>

                            <div class="form-group ">
                                <label>Source</label>
                                <vs-input class="w-100" v-model="forms.source"></vs-input>
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
                            <button class="btn btn-primary " type="submit" @click="posting()">
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
        data() {
            return {
                forms: {},
                loadedData: {},
                error:[]
            }
        },
        watch: {
            forms: {
                deep: true,
                handler(val) {
                    if (val.code !== undefined && val.code) {
                        let startcode = val.start ? val.start : ''
                        val.start_preview = val.code + startcode
                    }
                    if (val.code !== undefined && val.code) {
                        let endcode = val.end ? val.end : ''
                        val.end_preview = val.code + endcode
                    }

                    if (val.code !== undefined && val.code) {
                        if (val.start && val.end) {
                            if (val.code && parseInt(val.start) <= parseInt(val.end))
                                val.total_copy = parseInt(val.end) - parseInt(val.start) + 1
                            else
                                this.$vs.notify({
                                    title: 'warning',
                                    text: 'Attention!, Yo have enter End Value is Less than Starting. Correct It.',
                                    color: 'warning',
                                    icon: 'verified_user'
                                })
                        }

                    }
                }
            }
        },
        created() {
            this.getData()
        },
        methods: {
            posting(){
                let data = new FormData()
                let main_image = document.querySelector('#main_image')
                if (main_image) {
                    data.append("main_image", main_image.files[0])
                }
                for (let key in this.forms) {
                    data.append(key, this.forms[key])
                }
                this.$http.post('/json/library/book/store', data)
                    .then(res=>{
                        this.$vs.notify({
                            title: res.data[0],
                            text: res.data[1],
                            color: res.data[0],
                            icon: 'verified_user'
                        })
                        this.forms={}
                    })
                    .catch(err=>{
                        if (err.response) {
                            this.error = err.response.data.errors
                        }
                    })
            },
            getData() {
                this.$http.get('/json/library/book/add')
                    .then(res => {
                        this.loadedData = res.data
                    })
            }
        }
    }


</script>

<style scoped>

</style>


