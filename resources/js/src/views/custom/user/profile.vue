<template>
	<div>
		<div class="row ">
			<div class="col-md-12">
				<h2 class="pageTitle">User Manager </h2>
			</div>
			<hr class="own-hr">
			<div class="col-md-12">
				<vs-card>
				 <div class="row px-4">
				    <div class="col-md-12">
					    <vs-table stripe>
						    <template slot="header">
							    <h5 class="py-2 text-primary">Profile Details </h5>
						    </template>
						    <template slot="thead">
							    <vs-th> Column </vs-th>
							    <vs-th> Value </vs-th>
						    </template>
						    <template>
							    <vs-tr>
								    <vs-td class="text-bold">
									   Profile image:
								    </vs-td>
								    <vs-td>
									    no images
								    </vs-td>
							    </vs-tr>
							    <vs-tr>
								    <vs-td>Name</vs-td>
								    <vs-td class="text-bold">
									   Super Admin
								    </vs-td>
							    </vs-tr>
							    <vs-tr>
								    <vs-td class="text-bold">Email</vs-td>
								    <vs-td>
									    superadmin@gmail.com
								    </vs-td>
							    </vs-tr>
							    <vs-tr>
								    <vs-td class="text-bold">Contact Number</vs-td>
								    <vs-td>
									   021215454
								    </vs-td>
							    </vs-tr>
							    <vs-tr>
								    <vs-td>Password</vs-td>
								    <vs-td>
									    <button class="btn btn-sm btn-primary mt-1"  @click.prevent="changePass =! changePass">Change Password</button>
									    <div class="p-3 mt-3- jumbotron" v-if="changePass">
										   <div class="form-group ">
											   <label>Password</label>
											   <vs-input type="number"></vs-input>
										   </div>
										   <div class="form-group">
											   <label>Conform Password</label>
											   <vs-input type="number"></vs-input>
											   <button class="btn btn-md btn-success mt-2" >Change</button>
										   </div>
									    </div>
								    </vs-td>
							    </vs-tr>
							    <vs-tr>
								    <vs-td>Status</vs-td>
								    <vs-td>
									  Active
								    </vs-td>
							    </vs-tr>
						    </template>
					    </vs-table>
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
                 changePass:false,
            }
        },

        created() {

        },

        methods: {
        
        }

    }


</script>

<style scoped>

</style>
