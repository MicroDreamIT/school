<template>
    <div>
        <div class="row">
            <div class="col-md-12 my-3">
                <h4 class="header large lighter blue"><i class="fa fa-key" aria-hidden="true"></i>
                    Edit Student Login Access
                </h4>
                <div class="row mx-0" v-if="item.student_login">
                    <a type="filled" class="btn-success btn-sm" @click="userAction(item.staff_login.id, 'active')">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        Un-Lock User
                    </a>
                    <a @click="userAction(item.staff_login.id, 'in-active')"  title="In-Active" class="btn-warning btn-sm"><i class="fa fa-lock" aria-hidden="true" ></i> Lock User</a>

                    <a @click="userAction(item.staff_login.id, 'delete')"  title="Delete" class="btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true" ></i> Delete User</a>


                </div>

                <form method="POST" class="form-horizontal mt-5">
                    <div class="row">
                        <label class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-4">
                            <vs-input class="w-100"
                                      v-model="student_login.name"></vs-input>
                        </div>
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-4">
                            <vs-input type="email" class="w-100"
                                      v-model="student_login.email"></vs-input>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <label class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-4">
                            <vs-input class="w-100" v-model="student_login.password"></vs-input>
                        </div>
                        <label class="col-sm-2 control-label">Confirm Password</label>
                        <div class="col-sm-4">
                            <vs-input class="w-100" v-model="student_login.confirmPassword"></vs-input>
                        </div>
                    </div>
                    <br>
                    <div class="col-sm-4">
                        <label>
                            Active User
                        </label>
                    </div>
                    <hr class="own-hr my-3">
                    <div class="col-md-12">
                        <button class="btn waves-effect waves-light" type="reset">
                            <i class="fa fa-undo bigger-110"></i>
                            Reset
                        </button>

                        <button class="btn btn-info waves-effect waves-light" type="submit">
                            <i class="fa fa-save bigger-110"></i>
                            {{studentButton}}
                        </button>
                    </div>


                    <div class="hr hr-24"></div>
                </form>
            </div>
            <div class="col-md-12 mt-3">
                <h4 class="header large lighter blue"><i class="fa fa-key" aria-hidden="true"></i>
                    Create Guardian Login Access
                </h4>

                <form method="POST" class="form-horizontal mt-5">
                    <div class="row">
                        <label class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-4">
                            <vs-input class="w-100"
                                      v-model="guardian_login.name"></vs-input>
                        </div>
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-4">
                            <vs-input type="email" class="w-100"
                                      v-model="guardian_login.email"></vs-input>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <label class="col-sm-2 control-label" v-model="guardian_login.password">Password</label>
                        <div class="col-sm-4">
                            <vs-input class="w-100"></vs-input>
                        </div>
                        <label class="col-sm-2 control-label" v-model="guardian_login.confirmPassword">Confirm Password</label>
                        <div class="col-sm-4">
                            <vs-input class="w-100"></vs-input>
                        </div>
                    </div>
                    <br>
                    <div class="col-sm-4">
                        <label>
                            Active User
                        </label>
                    </div>
                    <hr class="own-hr my-3">
                    <div class="col-md-12">
                        <button class="btn waves-effect waves-light" type="reset" @click="student_login.password='', student_login.confirmPassword=''">
                            <i class="fa fa-undo bigger-110"></i>
                            Reset
                        </button>

                        <button class="btn btn-info waves-effect waves-light" type="submit" @click="posting()">
                            <i class="fa fa-save bigger-110"></i>
                            {{studentButton}}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "login-access",
        props: [
            'item'
        ],
        data() {
            return {
                studentButton: 'create',
                guardianButton: 'create',
                student_login: {},
                guardian_login: {}
            }
        },
        created() {
            if (this.item.student_login) {
                this.student_login.id = this.item.student_login.id
                this.student_login.name = this.item.student_login.name
                this.student_login.email = this.item.student_login.email
                this.studentButton = 'update'

            } else {
                this.student_login.name = this.item.student.fullname
                this.student_login.email = this.item.student.email
            }

            if(this.item.guardian_login){
                this.guardian_login.id = this.item.guardian_login.id
                this.guardian_login.name = this.item.guardian_login.name
                this.guardian_login.email = this.item.guardian_login.email
                this.guardianButton='update'
            }else{
                this.guardian_login.name = this.$root.singleSpacing(this.item.student.guardian_first_name
                    + this.item.student.guardian_middle_name
                    + this.item.student.guardian_last_name)
                this.guardian_login.email = this.item.student.guardian_email
            }

            this.student_login.hook_id = parseInt(this.item.student.id)
            this.student_login.role_id = parseInt(6)

            this.guardian_login.hook_id = parseInt(this.item.student.id)
            this.guardian_login.role_id = parseInt(7)

        },
        methods: {
            userAction(id, action){
                this.$http.get('/json/student/' + id + '/user/' + action)
                    .then(res=>{
                        if(res.status===200){
                            this.$vs.notify({title:res.data[0],text:res.data[1],color:res.data[0],icon:'verified_user'})
                            this.$emit('getData')
                        }
                    })
            },
            posting() {

                let url = this.student.id !== undefined && this.student.id
                    ? '/json/student/user/' + this.student.id + '/update'
                    : '/json/student/user/create'

                this.$http.post(url, this.login)
                    .then(res => {
                        if (res.status === 200) {
                            this.$vs.notify({
                                title: res.data[0],
                                text: res.data[1],
                                color: res.data[0],
                                icon: 'verified_user'
                            })
                            this.$emit('getData')
                        }
                    })
                    .catch(err => {
                        if (err.response) {
                            this.error = err.response.data.errors
                        }
                    })

            }
        }
    }
</script>

<style scoped>

</style>
