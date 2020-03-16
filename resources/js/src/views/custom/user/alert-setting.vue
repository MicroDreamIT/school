<template>
	<div>
		<div class="row ">
			<div class="col-md-12">
				<h2 class="pageTitle">
					Alert Template Manager
				</h2><br>
			</div>
			<div class="col-md-12">
				<vs-card>
					<div class="p-2">
						<router-link :to="'/'">
							<vs-button type="filled" class="smBtn">
								<i class="fa fa-cog" aria-hidden="true"></i>
								General Setting
							</vs-button>
						</router-link>
						<router-link :to="'/'">
							<vs-button type="filled" class="smBtn">
								<i class="fa fa-mail"></i>
								SMS Setting
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
								<i class="fa fa-bell"></i>
								Alert Setting
							</vs-button>
						</router-link>
						<router-link :to="'/'">
							<vs-button type="filled" class="smBtn">
								<i class="fa fa-dollar"></i>
								Payment Getway
							</vs-button>
						</router-link>
					
					</div>
					<hr class="own-hr">
					<div class="row px-4">
						<div class="col-md-12 ">
							<ow-data-table :headers="tableHeader"
							               :tableHeader="' Alert Template List'"
							               :suggestText="'Alert Template Record list on table. Filter Alert Template using the filter.'"
							               :url="'/student'"
							               :noDataMessage="'No Fees Head data found. Please Filter Fees Head to show.'"
							               :hasSearch="true"
							               :has-multiple="true"
							               :has-pagination="true"
							               class="mt-3"
							>
								<template slot="items" slot-scope="props">
									<vs-td class="pointer-none">
										BirthdayWish
									</vs-td>
									
									<vs-td >
										activate
									</vs-td>
									
									<vs-td>
										Wish Your Birthday Dear
										Dear user Sending you smiles for every moment of your special day…Have a
										wonderful time and a very happy birthday!
									</vs-td>
									
									<vs-td >
										<vs-switch color="success"  class="pointer-all ml-2" >
											<span slot="on">Active</span>
											<span slot="off">In-Active</span>
										</vs-switch>
									</vs-td>
									<vs-td style="min-width: 100px;">
										<button class="btn btn-primary my-3">
											<i class="fa fa-pencil"></i>
											Edit
										</button>
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
                    {name: 'Event', field: 'Event', sort_key: 'Event'},
                    {name: 'Alert', field: 'Alert', sort_key: 'Alert'},
                    {name: 'Template', field: 'Template',sort_key:'Template'},
                    {name: 'Status', field: 'Status'},
                    {name: 'Action', field: 'Action'},
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
