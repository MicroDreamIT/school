<template>
	<div>
		<div class="row ">
			<div class="col-md-12">
				<h2 class="pageTitle">
					Fees Head Manager
				</h2>
				<div class="p-2">
					<router-link :to="'/student'">
						<vs-button type="filled" class="smBtn"><i class="fa fa-users"></i> Student Fee</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn"> <i class="fa fa-user-secret"></i> Staff Payroll</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn"> <i class="fa fa-list"></i> Ledger</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn"> <i class="fa fa-list"></i> Transacrion</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn"> <i class="fa fa-bank"></i> Bank</vs-button>
					</router-link>
				</div>
				<hr class="own-hr">
				<div class="p-2">
					<router-link :to="'/student'">
						<vs-button type="filled" class="smBtn">
							<i class="fa fa-bank" aria-hidden="true"></i>Manage bank
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
			</div>
			<div class="col-md-12">
				<vs-card>
				
					<div class="col-md-12  p-4">
						<h4 class="header large lighter blue">
							Student Documents Manager
						</h4><br>
						<div class="row mt-5">
							<div class="col-md-4">
								<div class="form-group row">
									<label class="col-sm-3">Bank</label>
									<vs-input class="col-sm-9"></vs-input>
								</div>
								<div class="form-group row">
									<label class="col-sm-3">Account Number</label>
									<vs-input class="col-sm-9"></vs-input>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group row">
									<label class="col-sm-3">Account Name </label>
									<vs-input class="col-sm-9"></vs-input>
								</div>
								<div class="form-group row">
									<label class="col-sm-3">Branch</label>
									<vs-input class="col-sm-9"></vs-input>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<hr>
							<button class="btn btn-default " type="submit" >
								<i class="fa fa-history"></i>
								Reset
							</button>
							<button class="btn btn-primary " type="submit" >
								<i class="fa fa-save"></i>
								Save
							</button>
							<button class="btn btn-success " type="submit" >
								<i class="fa fa-save"></i>
								Save & Add Another
							</button>
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


