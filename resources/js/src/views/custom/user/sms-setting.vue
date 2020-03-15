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
						<div class="col-md-12 row w-100">
							<div class="col-md-12 py-1"><br>
								<h4><i class="fa fa-list"></i> SMS Setting List</h4>
							</div>
							<div class="dt-buttons btn-group action-group my-1">
								<button  class="btn btn-secondary buttons-copy ">
									<span>Copy</span></button>
								<button  class="btn btn-secondary buttons-pdf ">
									<span>PDF</span></button>
								<button  class="btn btn-secondary">
									<span>JSON</span></button>
								<button  class="btn btn-secondary buttons-print">
									<span>Print</span></button>
							</div>
							<div class="col-md-12">
								<vs-table stripe>
									<template slot="header">
										<h3>
											Users
										</h3>
									</template>
									<template slot="thead">
										<vs-th>
											Email
										</vs-th>
										<vs-th>
											Name
										</vs-th>
										<vs-th>
											Website
										</vs-th>
										<vs-th>
											Nro
										</vs-th>
									</template>
									
									<template slot-scope="{data}">
										<vs-tr >
											<vs-tdindextr].email">
												fdgfd
											</vs-td>
											
											<vs-tdindextr].username">
												dfgd
											</vs-td>
											
											<vs-tdindextr].id">
												dfg
											</vs-td>
											
											<vs-tdindextr].id">
												dfg
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
