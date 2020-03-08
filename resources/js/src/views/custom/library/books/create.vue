<template>
	<div>
		<div class="row">
			<div class="col-md-12 mb-2">
				<h2 class="pageTitle"> Books Manager </h2>
			</div>
			<div class="col-md-12">
				<div class="row mx-0">
					<router-link :to="'/student'">
						<vs-button type="filled" class="smBtn">
							<i class="fa fa-book" aria-hidden="true"></i>
							Book Detail
						</vs-button>
					</router-link>
					<router-link :to="'/student/registration'">
						<vs-button type="filled" class="smBtn">
							<i class="fa fa-plus" aria-hidden="true"></i>
							Issue History
						</vs-button>
					</router-link>
					<router-link :to="'/student/import'">
						<vs-button type="filled" class="smBtn">
							<i class="fa fa-users" aria-hidden="true"></i>
							Membership
						</vs-button>
					</router-link>
					<router-link :to="'/student/transfer'">
						<vs-button type="filled" class="smBtn">
							<i class="fa fa-users" aria-hidden="true"></i>
							Student Member
						</vs-button>
					</router-link>
					<router-link :to="'/student/document'">
						<vs-button type="filled" class="smBtn">
							<i class="fa fa-users" aria-hidden="true"></i>
							Staffs Member
						</vs-button>
					</router-link>
					<router-link :to="'/student/note'">
						<vs-button type="filled" class="smBtn">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
							Return Period offer
						</vs-button>
					</router-link>
				</div>
			</div>
			<div class="col-md-12" v-if="hasNotification">
				<div role="alert"
				     class="mt-2 alert alert-success alert-dismissible display-block"
				>
					<button type="button"
					        data-dismiss="alert"
					        aria-label="Close"
					        class="close"
					        @click="hasNotification=''"
					>
						<span aria-hidden="true">×</span>
					</button>
					<i class="ace-icon fa fa-hand-o-right"></i>
					{{hasNotification}}
				</div>
			</div>
			<vs-divider class="mx-3"/>
			<div class="col-md-12">
				<vs-card>
					<div class="row p-4">
						<router-link :to="'/student'">
							<vs-button type="filled" class="smBtn">
								<i class="fa fa-book" aria-hidden="true"></i>
								Book Detail
							</vs-button>
						</router-link>
						<router-link :to="'/student/registration'">
							<vs-button type="filled" class="smBtn">
								<i class="fa fa-plus" aria-hidden="true"></i>
								New Book
							</vs-button>
						</router-link>
						<router-link :to="'/student/import'">
							<vs-button type="filled" class="smBtn">
								<i class="fa fa-upload" aria-hidden="true"></i>
								Bulk Import
							</vs-button>
						</router-link>
						<router-link :to="'/student/transfer'">
							<vs-button type="filled" class="smBtn">
								<i class="fa fa-exchange" aria-hidden="true"></i>
								Book Category
							</vs-button>
						</router-link>
					</div>
					<hr class="own-hr">
					<div class="row">
					
					</div>
				</vs-card>
			</div>
		</div>
		<vs-popup class="holamundo"
		          :title="residentUser.reg_no+' | Manage Resident'"
		          :active.sync="residentModal">
			
			<div class="form-group mt-3">
				<label class="col-sm-12">Hostel</label>
				<vs-select class="col-sm-12"></vs-select>
			</div>
			<div class="form-group">
				<label class="col-sm-12">Room</label>
				<vs-select class="col-sm-12"></vs-select>
			</div>
			<div class="form-group">
				<label class="col-sm-12">Bed</label>
				<vs-select class="col-sm-12"></vs-select>
			</div>
			<div class="footer-modal">
				<button type="button"
				        class="btn btn-default pull-right mr-1"
				        @click="$emit('close')">
					Cancel
				</button>
				<button type="button" class="btn btn-success pull-right">
					Assign Bed
				</button>
			</div>
		</vs-popup>
		<vs-popup class="holamundo"
		          :title="transportUser.reg_no+' | Manage Transport User'"
		          :active.sync="transportModal">
		
		</vs-popup>
	</div>
</template>

<script>
    export default {
        components: {},
        data() {
            return {
                studentHeader: [
                    {name: 'Faculty/Class', sort_key: 'faculty'},
                    {name: 'Sem', sort_key: ''},
                    {name: 'Reg.Num', sort_key: 'reg_no'},
                    {name: 'Student Name', sort_key: ''},
                    {name: 'Status', sort_key: ''},
                    {name: 'Action', sort_key: ''},
                    {name: 'Service Activation', sort_key: ''},
                ],
                hasNotification: '',
                residentModal:false,
                transportModal:false,
                residentUser:{},
                transportUser:{}

            }
        },

        created() {

        },

        methods: {

            openResidentModal(user) {
                this.residentModal=true;
                this.residentUser=user
            },
            openTransportModal(user) {
                this.transportModal=true;
                this.transportUser=user
            },

            viewItems(id) {
                this.$router.push({name: 'studentView', params: {id: id}})
            },
            editItems() {
                alert("hey hasib im edit ")
            },
            deleteItems() {
                alert("hey hasib im delete ")
            },
            changeStatus() {

            },
            quickMember(user){
                //  params: {reg_no: user.reg_no,user_type:1,status:user.status}
            }
        }

    }


</script>

<style scoped>

</style>


