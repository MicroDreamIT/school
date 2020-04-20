<template>
    <div class="row">
        <div class="col-md-12" v-if="item.staff_login">
            <h4 class="header large lighter blue"><i class="fa fa-key" aria-hidden="true"></i>&nbsp;Edit Staff Login Access</h4>
            <div>
                <a @click="userAction(item.staff_login.id, 'active')"  title="Active" class="btn-success btn-sm">
                    <i class="fa fa-unlock-alt" aria-hidden="true" ></i> Un-Lock User
                </a>

                <a @click="userAction(item.staff_login.id, 'in-active')"  title="In-Active" class="btn-warning btn-sm"><i class="fa fa-lock" aria-hidden="true" ></i> Lock User</a>

                <a @click="userAction(item.staff_login.id, 'delete')"  title="Delete" class="btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true" ></i> Delete User</a>

            </div>
            <br>
        </div>
        <div class="col-md-12">
            <h4 class="header large lighter blue" v-if="!item.staff_login"><i class="fa fa-key" aria-hidden="true" ></i>&nbsp;Create Staff Login Access</h4>
            <input type="hidden" v-model="login.id" v-if="item.staff_login">
            <input type="hidden" v-model="login.role_id">
            <input type="hidden" v-model="login.hook_id">
            <div class="form-group">
                <label>name:</label>
                <vs-input type="text" v-model="login.name" :danger="error.name!==undefined"></vs-input>
                <p v-if="error.name!==undefined" class="text-danger">
                    {{ error.name[0] }}
                </p>
            </div>
            <div class="form-group">
                <label>email</label>
                <vs-input type="email" v-model="login.email" :danger="error.email!==undefined"></vs-input>
                <p v-if="error.email!==undefined" class="text-danger">
                    {{ error.email[0] }}
                </p>
            </div>
            <div class="form-group">
                <label>password</label>
                <vs-input type="password" v-model="login.password" :danger="error.password!==undefined"/>
                <p v-if="error.password!==undefined" class="text-danger">
                    {{ error.password[0] }}
                </p>
            </div>
            <div class="form-group">
                <label>confirm password</label>
                <vs-input type="password" v-model="login.confirmPassword" :danger="error.confirmPassword!==undefined"/>
                <p v-if="error.confirmPassword!==undefined" class="text-danger">
                    {{ error.confirmPassword[0] }}
                </p>
            </div>
            <div class="form-group">
                <button class="btn" type="reset" @click="login.password, login.confirmPassword">
                    <i class="fa fa-undo bigger-110"></i>
                    Reset
                </button>

                <button class="btn btn-info" type="submit" @click="posting()">
                    <i class="fa fa-save bigger-110"></i>
                    {{buttonText}} Login Access
                </button>
            </div>
        </div>


    </div>
</template>

<script>
    export default {
        name: "login-access",
        props:[
            'item'
        ],
        data(){
            return{
                login:{
                    role_id:null,
                    hook_id:null,
                },
                buttonText:'create',
                error:[]
            }
        },
        created() {
            if (this.item.staff_login) {
                this.login.id = this.item.staff_login.id
                this.buttonText = 'update'
                this.login.name=this.item.staff_login.name
                this.login.email = this.item.staff_login.email
            }else{
                this.login.name=this.item.staff.fullname
                this.login.email = this.item.staff.email
            }

            this.login.hook_id = parseInt(this.item.staff.id)
            this.login.role_id = parseInt(5)

        },
        methods:{
            userAction(id, action){
                this.$http.get('/json/staff/' + id + '/user/' + action)
                    .then(res=>{
                        if(res.status===200){
                            this.$vs.notify({title:res.data[0],text:res.data[1],color:res.data[0],icon:'verified_user'})
                            this.$emit('getData')
                        }
                    })
            },
            posting(){
                let url = this.item.staff_login? '/json/staff/' + this.item.staff_login.id  + '/user/update' : '/json/staff/user/create'

                this.$http.post(url, this.login)
                    .then(res=>{
                        if(res.status===200){
                            this.$vs.notify({title:res.data[0],text:res.data[1],color:res.data[0],icon:'verified_user'})
                            this.$emit('getData')
                        }
                    })
                    .catch(err=>{
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
