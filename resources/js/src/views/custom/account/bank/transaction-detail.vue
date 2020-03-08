<template>
	<div>
		<div class="row ">
			<div class="col-md-12">
				<h2 class="pageTitle">Bank Transaction Manager </h2>
				<div class="p-2">
					<router-link :to="'/student'">
						<vs-button type="filled" class="smBtn"><i class="fa fa-users "> </i> Student Fee</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn"><i class="fa fa-user-secret "> </i> Staff Payroll</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn"><i class="fa fa-list"> </i> Ledger</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn"> <i class="fa fa-list">  </i> Transacrion</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn"><i class="fa fa-bank"> </i> Bank</vs-button>
					</router-link>
				</div>
				<hr class="own-hr">
				<div class="mt-2 alert alert-success alert-dismissible display-block" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<i class="ace-icon fa fa-hand-o-right"></i>
					Please, Create Year and Active
				</div>
			</div>
			<div class="col-md-12">
				<vs-card>
					<div class="row p-4">
						<div class="col-md-12">
							<div class="p-2">
								<router-link :to="'/student'">
									<vs-button type="filled" class="smBtn">
										<i class="fa fa-bank" aria-hidden="true"></i> Manage Bank
									</vs-button>
								</router-link>
								<router-link :to="'/'">
									<vs-button type="filled" class="smBtn">
										<i class="fa fa-plus" aria-hidden="true"></i>
									 Add New Bank
									</vs-button>
								</router-link>
								<router-link :to="'/'">
									<vs-button type="filled" class="smBtn">
										<i class="fa fa-card" aria-hidden="true"></i>
										 Transaction Detail
									</vs-button>
								</router-link>
								<router-link :to="'/'">
									<vs-button type="filled" class="smBtn">
										<i class="fa fa-exchange" aria-hidden="true"></i>
										 Bank Transaction
									</vs-button>
								</router-link>
							</div>
							<hr class="own-hr">
							<br>
							<h4 class="header large lighter blue">
								<i class="fa fa-list" aria-hidden="true"></i>
								Bank Transaction List
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
							<p>Bank Transaction Record list on table. Filter Bank Transaction using the filter.</p>
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

