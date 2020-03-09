<template>
	<div>
		<div class="row ">
			<div class="col-md-12">
				<h2 class="pageTitle">Bank Transaction Manager</h2>
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
				<vs-divider></vs-divider>
			</div>
			<div class="col-md-12">
				<vs-card>
					<div class="row p-4">
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
					 <div class="col-md-12 mt-5">
							 <div class="col-md-9">
								 <div class="form-group row mt-3">
									 <label class="col-sm-3 "> Date </label>
									 <datepicker class="w-100 col-sm-9 p-0"></datepicker>
								 </div>
								 <div class="form-group row mt-3">
									 <label class="col-sm-3 "> Bank Name </label>
									 <v-select class="w-100 col-sm-9 p-0"></v-select>
								 </div>
								 <div class="form-group row mt-3">
									 <label class="col-sm-3 ">Account Type</label>
									 <v-select class="w-100 col-sm-9 p-0"></v-select>
								 </div>
								 <div class="form-group row mt-3">
									 <label class="col-sm-3 ">Withdraw / Deposite ID *</label>
									 <vs-input class="w-100 col-sm-9 p-0"></vs-input>
								 </div>
								 <div class="form-group row mt-3">
									 <label class="col-sm-3 ">Amount*</label>
									 <vs-input class="w-100 col-sm-9 p-0"></vs-input>
								 </div>
								 <div class="form-group row mt-3">
									 <label class="col-sm-3">Description</label>
									 <vs-textarea class="w-100 col-sm-9"></vs-textarea>
								 </div>
							 </div>
							
					 </div>
						<div class="col-md-12">
							<button class="btn btn-warning " type="reset">
								<i class="fa fa-undo"></i>
								Reset
							</button>
							<button class="btn btn-primary " type="submit">
								<i class="fa fa-save"></i>
								Save
							</button>
							
							<button class="btn btn-success " type="submit">
								<i class="fa fa-plus "></i>
								Save And Add Another
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
        name: "attendence",
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
