<template>
	<div>
		<div class="row">
			<div class="col-md-12 mb-2">
				<h2 class="pageTitle"> Books Manager </h2>
			</div>
			<div class="col-md-12 ">
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
			<div class="col-md-12 mt-3">
				<vs-card>
					<div class="row p-4">
						<div>
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
						<vs-divider class="mx-1"/>
						<h4 class="d-inline-block mr-4"> <i class="fa fa-plus"></i> Books </h4>
						<router-link :to="'/'">
							<vs-button type="filled" class="smBtn">
								<i class="fa fa-upload" aria-hidden="true"></i>
								Bulk Import From CSV
							</vs-button>
						</router-link>
					</div>
					<div class="row px-4">
						<div class="col-md-4">
							<div class="form-group ">
								<label >ISBN Number</label>
								<vs-input class="w-100"></vs-input>
							</div>
							<div class="form-group ">
							<label >Code</label>
							<vs-input  class="w-100"></vs-input>
						   </div>
						
							<div class="form-group ">
								<label > Book Name</label>
								<vs-input  class="w-100"></vs-input>
							</div>
							<div class="form-group">
								<label >Category </label>
								<vs-select  class="w-100"></vs-select>
							</div>
							<div class="form-group ">
								<label >Language</label>
								<vs-input  class="w-100"></vs-input>
							</div>
							<div class="form-group ">
								<label >Book Status </label>
								<vs-select  class="w-100"></vs-select>
							</div>
							<div class="form-group ">
								<label >Book Image </label>
								<vs-input  class="w-100" type="file"></vs-input>
							</div>
							<div class="form-group ">
								<label >Notes </label>
								<vs-textarea  class="w-100"></vs-textarea>
							</div>
						</div>
						<div class="col-md-4">
							
							<div class="form-group ">
								<label >Start</label>
								<vs-input  class="w-100"></vs-input>
							</div>
							<div class="form-group ">
								<label >Start Code</label>
								<vs-input  class="w-100"></vs-input>
							</div>
							<div class="form-group ">
								<label >Sub Title</label>
								<vs-input  class="w-100"></vs-input>
							</div>
						
							<div class="form-group ">
								<label >Edition</label>
								<vs-input  class="w-100"></vs-input>
							</div>
						
							<div class="form-group ">
								<label >Series</label>
								<vs-input  class="w-100"></vs-input>
							</div>
							<div class="form-group ">
								<label >Rack Location </label>
								<vs-input  class="w-100"></vs-input>
							</div>
							<div class="form-group ">
								<label >Price  </label>
								<vs-input  class="w-100"></vs-input>
							</div>
							<div class="form-group ">
								<label >Page   </label>
								<vs-input  class="w-100"></vs-input>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group ">
								<label >End</label>
								<vs-input  class="w-100"></vs-input>
							</div>
							<div class="form-group ">
								<label >End Code</label>
								<vs-input  class="w-100"></vs-input>
							</div>
							<div class="form-group ">
								<label > Total Quantity </label>
								<vs-input  class="w-100"></vs-input>
							</div>
							
							<div class="form-group ">
								<label >Edition Year</label>
								<vs-input  class="w-100"></vs-input>
							</div>
							<div class="form-group ">
								<label >Publisher</label>
								<vs-input  class="w-100"></vs-input>
							</div>
							<div class="form-group ">
								<label >Author</label>
								<vs-input  class="w-100"></vs-input>
							</div>
							<div class="form-group ">
								<label >Publish Year</label>
								<vs-input class="w-100"></vs-input>
							</div>
						
							<div class="form-group ">
								<label >Source</label>
								<vs-input  class="w-100"></vs-input>
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
							<button class="btn btn-primary " type="submit"  >
								<i class="fa fa-save "></i>
								Save
							</button>
							<button class="btn btn-success " type="submit"  >
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


