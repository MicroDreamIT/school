<template>
	<div>
		<div class="row ">
			<div class="col-md-12">
				<h2 class="pageTitle">Payroll Head Manager</h2>
				<div class="p-2">
					<router-link :to="'/student'">
						<vs-button type="filled" class="smBtn">Student Fee</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn">Staff Payroll</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn">Ledger</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn">Transacrion</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn">Bank</vs-button>
					</router-link>
				
				</div>
				<hr class="own-hr">
				<div class="p-2">
					<router-link :to="'/student'">
						<vs-button type="filled" class="smBtn">
							<i class="fa fa-history" aria-hidden="true"></i>Create New Ledger
						</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn">
							<i class="fa fa-list" aria-hidden="true"></i>
						Serach
						</vs-button>
					</router-link>
				 
				</div>
				<hr class="own-hr">
				<br>
			</div>
			<div class="col-md-12">
				<vs-card>
					<div class="row p-4">
						<div class="col-md-12">
							<div class="p-2">
								<router-link :to="'/student'">
									<vs-button type="filled" class="smBtn">
										<i class="fa fa-list" aria-hidden="true"></i>Transaction Detail
									</vs-button>
								</router-link>
								<router-link :to="'/'">
									<vs-button type="filled" class="smBtn">
										<i class="fa fa-plus" aria-hidden="true"></i>
							       	 New Transaction
									</vs-button>
								</router-link>
								<router-link :to="'/'">
									<vs-button type="filled" class="smBtn">
										<i class="fa fa-users" aria-hidden="true"></i>
							       	Ledgers
									</vs-button>
								</router-link>
							
							</div>
							<hr class="own-hr">
							<br>
							<h4 class="header large lighter blue">
								<i class="fa fa-list" aria-hidden="true"></i>
								Transaction Ledger List
							</h4>
							<div class="clearfix mt-3">
								<div class="easy-link-menu">
									<a class="btn-success btn-sm bulk-action-btn">
										<i class="fa fa-check" aria-hidden="true"></i> Active</a>
									<a class="btn-warning btn-sm bulk-action-btn">
										<i class="fa fa-remove" aria-hidden="true"></i>
										In-Active</a>
									<a class="btn-danger btn-sm bulk-action-btn">
										<i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
								</div>
							</div>
							<br>
							<div class="table-header">
								Student Status Record list on table. Filter Student Status using the filter.
							</div>
							<div class="dt-buttons btn-group action-group mt-3">
								<button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0"
								        aria-controls="DataTables_Table_0">
									<span>Copy</span></button>
								<button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0"
								        aria-controls="DataTables_Table_0">
									<span>PDF</span>
								</button>
								<button class="btn btn-secondary" tabindex="0" aria-controls="DataTables_Table_0">
									<span>JSON</span>
								</button>
								<button class="btn btn-secondary buttons-print" tabindex="0"
								        aria-controls="DataTables_Table_0">
									<span>Print</span>
								</button>
							</div>
							<data-table :headers="tableHeader"
							            :url="'/student'"
							            :no-data-message="'No Day data found. Please Filter Day to show.'"
							            :searchField="searchData"
							            :hasSearch="true"
							            :has-multiple="true"
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
							</data-table>
						</div>
					</div>
				</vs-card>
			</div>
		</div>
	</div>
</template>

<script>

    export default {
        components: {

        },
        name: "payment-method",
        data() {
            return {
                searchData: {},
                tableHeader: [
                    {name: 'Email', field: 'email', sort_key: 'email'},
                    {name: 'Name', field: 'name', sort_key: 'name'},
                    {name: 'Mobile', field: 'mobile'},
                    {name: 'PID'},
                ],
            }
        }
    }
</script>

<style scoped>

</style>

