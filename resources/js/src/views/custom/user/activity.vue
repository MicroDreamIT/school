<template>
	<div>
		<div class="row ">
			<div class="col-md-12">
				<h2 class="pageTitle">
					User Activity Manager
				</h2><br>
			</div>
			<div class="col-md-12">
				<vs-card>
					<div class="p-2">
						<router-link :to="'/'">
							<vs-button type="filled" class="smBtn">
								<i class="fa fa-user" aria-hidden="true"></i>
								User
							</vs-button>
						</router-link>
						<router-link :to="'/account/payroll'">
							<vs-button type="filled" class="smBtn">
								<i class="fa fa-certificate"></i>
								Role Accessibility
							</vs-button>
						</router-link>
					
					</div>
					<hr class="own-hr">
					<div class="row px-4">
						<div class="col-md-12 row w-100">
							<div class="col-md-12 py-3"><br>
								<h4><i class="fa fa-search"></i> Filter User Activity </h4>
							</div>
							<div class="col-md-4">
								<div class="form-group ">
									<label>User</label>
									<vs-select class="w-100"></vs-select>
								</div>
								<div class="form-group ">
									<label>URL</label>
									<vs-input class="w-100"></vs-input>
								</div>
							</div>
							<div class="col-md-4"><br>
								<div class="form-group row">
									<label class="col-sm-3">Created From:</label>
									<datepicker class="col-sm-9"></datepicker>
								</div>
								<div class="form-group row">
									<label class="col-sm-3">Created To:</label>
									<datepicker class="col-sm-9"></datepicker>
								</div>
							</div>
							<div class="col-md-4"><br>
								<div class="form-group row">
									<label class="col-sm-3">Updated From</label>
									<datepicker class="col-sm-9"></datepicker>
								</div>
								<div class="form-group row">
									<label class="col-sm-3">Updated To</label>
									<datepicker class="col-sm-9"></datepicker>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group ">
									<label>IP Address</label>
									<vs-input class="w-100"></vs-input>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group ">
									<label>User Agent</label>
									<vs-input class="w-100"></vs-input>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group ">
									<label>Event</label>
									<vs-select class="w-100"></vs-select>
								</div>
							</div>
							<div class="col-md-12">
								<hr class="own-hr">
								<button class="btn btn-primary my-3">
									<i class="fa fa-filter "></i>
									Filter
								</button>
							</div>
						</div>
						<br>
						<br>
						<div class="col-md-12 ">
							<ow-data-table :headers="tableHeader"
							               :tableHeader="'User Activity List'"
							               :suggestText="'User Activity Record list on table. Filter User Activity using the filter.'"
							               :url="'/student'"
							               :noDataMessage="'No Fees Head data found. Please Filter Fees Head to show.'"
							               :hasSearch="true"
							               :has-multiple="true"
							               :has-pagination="true"
							               class="mt-3"
							>
								<template slot="items" slot-scope="props">
									<vs-td :data="props.data.username" class="pointer-none">
										{{props.data.email}}
									</vs-td>
									
									<vs-td :data="props.data.username">
										{{props.data.username}}
									</vs-td>
									
									<vs-td :data="props.data.id">
										{{props.data.website}}
									</vs-td>
									
									<vs-td :data="props.id">
										{{props.data.id}}
									</vs-td>
								</template>
							</ow-data-table>
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
