<template>
	<div>
		<div class="row ">
			<div class="col-md-12">
				<h2 class="pageTitle">Receive Detail
				</h2>
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
			</div>
			<vs-divider class="mx-3"/>
			
			<div class="col-md-12">
				<vs-card>
					<div class="p-2">
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
					</div>
					<vs-divider  />
					<student-table :headers="studentHeader"
					               :tableHeader="' Fees Receive History'"
					               :suggestText="'Fees Collection Record list on table. Filter Fees Collection using the filter.'"
					               :url="'/json/student/'"
					               :noDataMessage="'No Student data found. Please Filter Student to show.'"
					               :hasSearch="true"
					               :has-multiple="true"
					               :has-pagination="true"
					               :filterSection="true"
					>
						<template slot="items" slot-scope="props">
							<vs-td :data="props.data.faculty" class="pointer-none">
								{{props.data.faculty}}
							</vs-td>
							
							<vs-td :data="props.data.semester">
								{{props.data.semester}}
							</vs-td>
							
							<vs-td :data="props.data.reg_no">
								{{props.data.reg_no}}
							</vs-td>
							
							<vs-td :data="props.data.name">
								{{props.data.first_name+' '+props.data.middle_name+' '+props.data.last_name}}
							</vs-td>
							<vs-td>
								{{props.data.academic_status+' '+props.data.status}}
							</vs-td>
							<vs-td>
							   status
							</vs-td>
							<vs-td>
								Service Activations
							</vs-td>
						</template>
					</student-table>
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
                studentHeader: [
                    {name: 'Faculty/Class', sort_key: 'name'},
                    {name: 'Sem', sort_key: ''},
                    {name: 'Reg.Num', sort_key: ''},
                    {name: 'Student Name', sort_key: ''},
                    {name: 'Status', sort_key: ''},
                    {name: 'Action', sort_key: ''},
                    {name: 'Service Activation', sort_key: ''},
                ],

            }
        },

        created() {

        },

        methods: {
            viewItems(){
                alert("hey hasib im view ")
            },
            editItems(){
                alert("hey hasib im edit ")
            },
            deleteItems(){
                alert("hey hasib im delete ")
            },

        }

    }


</script>

<style scoped>

</style>
