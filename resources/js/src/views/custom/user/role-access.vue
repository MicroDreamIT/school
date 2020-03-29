<template>
	<div>
		<div class="row ">
			<div class="col-md-12">
				<h2 class="pageTitle">
					User Manager
				</h2>
				<h4>
					Roles Manager <i class="ace-icon fa fa-angle-double-right"></i>  Detail
				</h4><br>
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
					<div class="p-2">
						<router-link :to="'/account/fees'">
							<vs-button type="filled" class="smBtn">
								<i class="fa fa-list" aria-hidden="true"></i>
								Detail
							</vs-button>
						</router-link>
						<router-link :to="'/account/fees/master'">
							<vs-button type="filled" class="smBtn">
								<i class="fa fa-plus" aria-hidden="true"></i>
								Create Role
							</vs-button>
						</router-link>
					</div>
					<hr class="own-hr py-2">
					<div class="row px-4">
						<div class="col-md-12 ">
							<ow-data-table :headers="tableHeader"
							               :tableHeader="'Role List'"
							               :suggestText="'Roles Record list on table. Roles User the filter.'"
							               :url="'/'"
							               :noDataMessage="'No Fees Head data found. Please Filter Fees Head to show.'"
							               :hasSearch="true"
							               :has-multiple="true"
							               :has-pagination="true"
							               class="mt-1"
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
