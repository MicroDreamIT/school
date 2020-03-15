<template>
	<div>
		<div class="row ">
			<div class="col-md-12">
				<h2 class="pageTitle">
					General Setting Manager
				</h2>
				<div class="p-2">
					<router-link :to="'/setting/general'">
						<vs-button type="filled" class="smBtn">
							<i class="fa fa-cogs" aria-hidden="true"></i>
							General setting
						</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn">
							<i class="fa fa-cog"></i>
							SMS setting
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
							<i class="fa fa-mail"></i>
							Alert Setting
						</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn">
							<i class="fa fa-dollar"></i>
						    Payment Gateway
						</vs-button>
					</router-link>
				
				</div>
				<hr class="own-hr">
				<br>
			</div>
			<div class="col-md-12">
				<vs-card>
					<div class="row px-4">
						<div class="col-md-12 row w-100">
							<div class="col-md-12 py-1"><br>
								<h4><i class="fa fa-search"></i> Filter User Activity </h4>
							</div>
							<div class="col-md-12">
								<vs-tabs class="mt-3">
									<vs-tab label="General Information & Branding">
										<div class="row mt-3">
											<div class="col-md-3">
												<div class="form-group ">
													<label>Institute</label>
													<vs-input class="w-100"> </vs-input>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group ">
													<label>Slogan</label>
													<vs-input class="w-100"> </vs-input>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group ">
													<label>Copyright©</label>
													<vs-input class="w-100"> </vs-input>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label>Address</label>
													<vs-textarea class="w-100"> </vs-textarea>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label>Phone</label>
													<vs-input type="number" class="w-100"> </vs-input>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label>Email</label>
													<vs-input type="email" class="w-100"> </vs-input>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label>Globe</label>
													<vs-input type="email" class="w-100"> </vs-input>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label>Logo</label>
													<vs-input type="file" class="w-100"> </vs-input>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label>Favicon</label>
													<vs-input type="file" class="w-100"> </vs-input>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label>Timezone</label>
													<vs-select class="w-100"> </vs-select>
												</div>
											</div>
										
										</div>
									</vs-tab>
									<vs-tab label="Print">
										<div class="row mt-3">
											<div class="col-md-12">
												<h6>Header Text</h6>
												<quill-editor ></quill-editor>
											</div>
											<div class="col-md-12 mt-4">
												<h6>Footer Text</h6>
												<quill-editor ></quill-editor>
											</div>
										</div>
									</vs-tab>
									<vs-tab label="Social Media">
										<div class="row mt-3">
											 <div class="col-md-10 mx-auto">
												 <div class="row">
													 <div class="col-md-6">
														<div class="form-group w-100">
															<label class="text-secondary" >
																<i class="fa fa-facebook"> </i> Facebook
															</label>
															<div>
																<vs-input class="w-100"></vs-input>
															</div>
														</div>
														<div class="form-group w-100">
															<label class="text-secondary">
																<i class="fa fa-linkedin"> </i> LinkedIn
															</label>
															<div>
																<vs-input class="w-100"></vs-input>
															</div>
														</div>
														<div class="form-group w-100">
															<label class="text-secondary">
																<i class="fa fa-google-plus"> </i> Google Plus
															</label>
															<div>
																<vs-input class="w-100"></vs-input>
															</div>
														</div>
														<div class="form-group w-100">
															<label class="text-secondary">
																<i class="fa fa-whatsapp"> </i> Whats App
															</label>
															<div>
																<vs-input class="w-100"></vs-input>
															</div>
														</div>
														<div class="form-group w-100">
															<label class="text-secondary">
																<i class="fa fa-pinterest"> </i> Pinterest
															</label>
															<div>
																<vs-input class="w-100"></vs-input>
															</div>
														</div>
												
													 </div>
													 <div class="col-md-6">
														 <div class="form-group w-100">
															 <label class="text-secondary">
																 <i class="fa fa-wordpress"> </i> Wordpress
															 </label>
															 <div>
																 <vs-input class="w-100"></vs-input>
															 </div>
														 </div>
														 <div class="form-group w-100">
															 <label class="text-secondary">
																 <i class="fa fa-skype"> </i> Skype
															 </label>
															 <div>
																 <vs-input class="w-100"></vs-input>
															 </div>
														 </div>
														 <div class="form-group w-100">
															 <label class="text-secondary">
																 <i class="fa fa-instagram"> </i> Instagram
															 </label>
															 <div>
																 <vs-input class="w-100"></vs-input>
															 </div>
														 </div>
														 <div class="form-group w-100">
															 <label class="text-secondary">
																 <i class="fa fa-youtube"> </i> Youtube
															 </label>
															 <div>
																 <vs-input class="w-100"></vs-input>
															 </div>
														 </div>
														 <div class="form-group w-100">
															 <label class="text-secondary">
																 <i class="fa fa-twitter"> </i> Twitter
															 </label>
															 <div>
																 <vs-input class="w-100"></vs-input>
															 </div>
														 </div>
													 </div>
												 </div>
											 </div>
										</div>
									</vs-tab>
								</vs-tabs>
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
                tableHeader: [
                    {name: 'Email', field: 'email', sort_key: 'email'},
                    {name: 'Name', field: 'name', sort_key: 'name'},
                    {name: 'Mobile', field: 'mobile'},
                    {name: 'PID'},
                ],
                notification: '',
                createFeesHead: true,
                importFeesHead: false
            }
        }
    }
</script>

<style scoped>

</style>
