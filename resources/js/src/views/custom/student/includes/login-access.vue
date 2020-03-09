<template>
	<div>
		<div class="row">
			<div class="col-md-12 my-3">
				<h4 class="header large lighter blue"><i class="fa fa-key" aria-hidden="true"></i>
			        Edit Student Login Access
				</h4>
				<div role="alert"
				     class="mt-2 alert alert-success alert-dismissible display-block"
				>
					<button type="button"
					        data-dismiss="alert"
					        aria-label="Close"
					        class="close"
					>
						<span aria-hidden="true">×</span>
					</button>
					<i class="ace-icon fa fa-hand-o-right"></i>
					alert content
				</div>
				<div class="row mx-0">
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn btn-success">
							<i class="fa fa-book" aria-hidden="true"></i>
						Un-Lock User
						</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn btn-warning">
							<i class="fa fa-plus" aria-hidden="true"></i>
							Lock User
						</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn btn-danger">
							<i class="fa fa-users" aria-hidden="true"></i>
						Delete User
						</vs-button>
					</router-link>
				 
				</div>
				
				<form method="POST" class="form-horizontal mt-5">
					<div class="row">
						<label class="col-sm-2 control-label">Name</label>
						<div class="col-sm-4">
							<vs-input class="w-100"></vs-input>
						</div>
						<label class="col-sm-2 control-label">Email</label>
						<div class="col-sm-4">
							<vs-input type="email" class="w-100"></vs-input>
						</div>
					</div>
					<br>
					
					<div class="row">
						<label class="col-sm-2 control-label">Password</label>
						<div class="col-sm-4">
							<vs-input class="w-100"></vs-input>
						</div>
						<label class="col-sm-2 control-label">Confirm Password</label>
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
						<button class="btn waves-effect waves-light" type="reset">
							<i class="fa fa-undo bigger-110"></i>
							Reset
						</button>
						
						<button class="btn btn-info waves-effect waves-light" type="submit">
							<i class="fa fa-save bigger-110"></i>
							Update Detail
						</button>
					</div>
					
					
					<div class="hr hr-24"></div>
				</form>
			</div>
			<div class="col-md-12 mt-3">
				<h4 class="header large lighter blue"><i class="fa fa-key" aria-hidden="true"></i>
					Create Guardian Login Access
				</h4>
				<div role="alert"
				     class="mt-2 alert alert-success alert-dismissible display-block"
				>
					<button type="button"
					        data-dismiss="alert"
					        aria-label="Close"
					        class="close"
					>
						<span aria-hidden="true">×</span>
					</button>
					<i class="ace-icon fa fa-hand-o-right"></i>
					alert content
				</div>
				
				<form method="POST" class="form-horizontal mt-5">
					<div class="row">
						<label class="col-sm-2 control-label">Name</label>
						<div class="col-sm-4">
							<vs-input class="w-100"></vs-input>
						</div>
						<label class="col-sm-2 control-label">Email</label>
						<div class="col-sm-4">
							<vs-input type="email" class="w-100"></vs-input>
						</div>
					</div>
					<br>
					
					<div class="row">
						<label class="col-sm-2 control-label">Password</label>
						<div class="col-sm-4">
							<vs-input class="w-100"></vs-input>
						</div>
						<label class="col-sm-2 control-label">Confirm Password</label>
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
						<button class="btn waves-effect waves-light" type="reset">
							<i class="fa fa-undo bigger-110"></i>
							Reset
						</button>
						
						<button class="btn btn-info waves-effect waves-light" type="submit">
							<i class="fa fa-save bigger-110"></i>
							Update Detail
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</template>

<script>
    export default {
        name: "login-access"
    }
</script>

<style scoped>

</style>
