<template>
    <div>
        <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Bank Manager
                </h2>
                <div class="p-2">
                    <bank-navigation></bank-navigation>

                </div>
            </div>
            <vs-divider class="mx-3"/>
            <div class="col-md-12">
                <vs-card>
                    <div class="p-2">
                        <bank-navigation2></bank-navigation2>
                    </div>
                    <vs-divider/>
                    <div class="p-2">
						<h4 >Create New Transaction</h4>
                    <div class="row my-2 ">
						<div class="col-md-4">Date</div>
						<div class="col-md-5">
							<datepicker/>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-md-4">Bank Name</div>
						<div class="col-md-5">
							<v-select/>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-md-4">Account Type</div>
						<div class="col-md-5">
							<v-select/>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-md-4">Withdraw/Deposit ID</div>
						<div class="col-md-5">
							<vs-input class="w-100"></vs-input>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-md-4">Amount</div>
						<div class="col-md-5">
							<vs-input type="number" class="w-100"/>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-md-4">Description</div>
						<div class="col-md-5">
							<vs-textarea></vs-textarea>
						</div>
                    </div>
					</div>
                    <div class="col-md-12">
                        <hr>
                        <button class="btn btn-default " type="submit">
                            <i class="fa fa-history"></i>
                            Reset
                        </button>
                        <button class="btn btn-primary " type="submit">
                            <i class="fa fa-save"></i>
                            Save
                        </button>
                        <button class="btn btn-success " type="submit">
                            <i class="fa fa-save"></i>
                            Save & Add Another
                        </button>
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


