<template>
	<div>
		<div class="row ">
			<div class="col-md-12">
				<h2 class="pageTitle">
					Email Setting Manager
				</h2><br>
			</div>
			<div class="col-md-12">
				<vs-card>
					<div class="p-2">
						<router-link :to="'/'">
							<vs-button type="filled" class="smBtn">
								<i class="fa fa-cog" aria-hidden="true"></i>
								General Setting
							</vs-button>
						</router-link>
						<router-link :to="'/'">
							<vs-button type="filled" class="smBtn">
								<i class="fa fa-mail"></i>
								SMS Setting
							</vs-button>
						</router-link>
						<router-link :to="'/'">
							<vs-button type="filled" class="smBtn">
								<i class="fa fa-mail"></i>
								E-Mail Setting
							</vs-button>
						</router-link>
						<router-link :to="'/'">
							<vs-button type="filled" class="smBtn">
								<i class="fa fa-bell"></i>
								Alert Setting
							</vs-button>
						</router-link>
						<router-link :to="'/'">
							<vs-button type="filled" class="smBtn">
								<i class="fa fa-dollar"></i>
							Payment Getway
							</vs-button>
						</router-link>
					
					</div>
					<hr class="own-hr">
					<div class="row px-4">
						<div class="col-md-12 row w-100">
							<div class="col-md-12 py-3"><br>
								<h4><i class="fa fa-search"></i> Email Configuration </h4>
							</div>
							<div class="col-md-4"><br>
								<div class="form-group ">
									<label>Driver</label>
									<vs-select class="w-100"></vs-select>
								</div>
								<div class="form-group ">
									<label>Host</label>
									<vs-input class="w-100"></vs-input>
								</div>
							</div>
							<div class="col-md-4"><br>
								<div class="form-group">
									<label>Port</label>
									<vs-input class="w-100"></vs-input>
								</div>
								<div class="form-group">
									<label>Encryption</label>
									<vs-input class="w-100"></vs-input>
								</div>
							</div>
							<div class="col-md-4"><br>
								<div class="form-group">
									<label>User Name</label>
									<vs-input class="w-100"></vs-input>
								</div>
								<div class="form-group">
									<label>Password</label>
									<vs-input class="w-100"></vs-input>
								</div>
							</div>
							<div class="col-md-12">
								<hr class="own-hr">
								<button class="btn btn-warning my-3 mr-2">
									<i class="fa fa-history "></i>
									Reset
								</button>
								<button class="btn btn-success my-3">
									<i class="fa fa-save "></i>
									Save
								</button>
							</div>
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
        name: "payment-method",
        data() {
            return {
            
            }
        }
    }
</script>

<style scoped>

</style>
