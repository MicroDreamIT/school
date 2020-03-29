<template>
	<div>
		<div class="row ">
			<div class="col-md-12">
				<h2 class="pageTitle">
					SMS Setting Manager
				
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
						<div class="col-md-12 p-0 w-100">
							<div class="col-md-12 px-3"><br><br>
								<h4><i class="fa fa-list"></i> SMS Setting List</h4>
							</div>
							<div class="dt-buttons btn-group action-group px-3">
								<button  class="btn btn-secondary buttons-copy ">
									<span>Copy</span></button>
								<button  class="btn btn-secondary buttons-pdf ">
									<span>PDF</span></button>
								<button  class="btn btn-secondary">
									<span>JSON</span></button>
								<button  class="btn btn-secondary buttons-print">
									<span>Print</span></button>
							</div>
							<div class="col-md-12 mt-4">
								<vs-table stripe>
									<template slot="header">
										<h3> </h3>
									</template>
									<template slot="thead">
										<vs-th> S.N </vs-th>
										<vs-th> Gateway </vs-th>
										<vs-th> Config </vs-th>
										<vs-th> Status </vs-th>
										<vs-th> Action </vs-th>
									</template>
									<template>
										  <vs-tr>
											<vs-td> 1 </vs-td>
											<vs-td>
												<img src="/images/smsgateway/msg91.png" class="gateway">
											</vs-td>
											<vs-td>
											   <div class="row py-2">
												   <div class="col-md-12">
													   <div class="form-group row">
														   <label>Authkey</label>
														   <vs-input class=" col-sm-9 w-100" disabled></vs-input>
													   </div>
													   <div class="form-group row">
														   <label>Sender</label>
														   <vs-input class=" col-sm-9 w-100" disabled></vs-input>
													   </div>
													   <div class="form-group row">
														   <label>Route </label>
														   <vs-input class=" col-sm-9 w-100" disabled></vs-input>
													   </div>
													   <div class="form-group row">
														   <label>Country</label>
														   <vs-input class=" col-sm-9 w-100" disabled></vs-input>
													   </div>
												   </div>
											   </div>
											</vs-td>
											<vs-td>
												<vs-switch color="success"  class="pointer-all ml-2" >
													<span slot="on">Active</span>
													<span slot="off">In-Active</span>
												</vs-switch>
											</vs-td>
											<vs-td>
												<button type="button" class="btn btn-success">
													<i class="fa fa-save"></i> Update
												</button>
											</vs-td>
										</vs-tr>
									</template>
								</vs-table>
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
