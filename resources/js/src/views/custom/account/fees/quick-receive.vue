<template>
	<div>
		<div class="row ">
			<div class="col-md-12 px-4 pt-3">
				<h2 class="pageTitle">Fees Collection Manager
				</h2>
				<div class="p-2">
					<router-link :to="'/student'">
						<vs-button type="filled" class="smBtn"><i class="fa fa-users" aria-hidden="true"></i> Student Fee</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn"><i class="fa fa-user-secret" aria-hidden="true"></i> Staff Payroll</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn"><i class="fa fa-list" aria-hidden="true"></i> Ledger</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn"><i class="fa fa-list" aria-hidden="true"></i> Transacrion</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn"><i class="fa fa-bank" aria-hidden="true"></i> Bank</vs-button>
					</router-link>
				
				</div>
			</div>
			<vs-divider class="mx-3"/>
			
			<div class="col-md-12">
				<vs-card >
					<div class="col-md-12 p-4">
						<router-link :to="'/student'">
							<vs-button type="filled" class="smBtn">
								<i class="fa fa-history" aria-hidden="true"></i> Receive History
							</vs-button>
						</router-link>
						<router-link :to="'/'">
							<vs-button type="filled" class="smBtn">
								<i class="fa fa-list" aria-hidden="true"></i>
								Master Detail</vs-button>
						</router-link>
						<router-link :to="'/'">
							<vs-button type="filled" class="smBtn"><i class="fa fa-plus" aria-hidden="true"></i>Add Fees</vs-button>
						</router-link>
						<router-link :to="'/'">
							<vs-button type="filled" class="smBtn"><i class="fa fa-calculator" aria-hidden="true"></i>Quick Receive</vs-button>
						</router-link>
						<router-link :to="'/'">
							<vs-button type="filled" class="smBtn"><i class="fa fa-calculator" aria-hidden="true"></i>Collect Fees</vs-button>
						</router-link>
						<router-link :to="'/'">
							<vs-button type="filled" class="smBtn"><i class="fa fa-money" aria-hidden="true"></i>Balance Fees</vs-button>
						</router-link>
						<router-link :to="'/'">
							<vs-button type="filled" class="smBtn"> <i class="fa fa-header" aria-hidden="true"></i> Fees Head </vs-button>
						</router-link>
						<vs-divider  />
					</div>
					
					<div class="col-md-12 p-4">
						<h4 class="header large lighter blue">
							<i class="fa fa-search" aria-hidden="true"></i>
							Search & Verify Student Before Collect
						</h4>
						<vs-input icon="search" class="w-100 mt-3" placeholder="Search" />
					</div>
				</vs-card>
			</div>
		</div>
	
	</div>
</template>

<script>
    export default {
        components: {},
        data() {
            return {
            

            }
        },

        created() {

        },

        methods: {
       

        }

    }


</script>

<style scoped>

</style>
