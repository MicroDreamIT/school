<template>
	<div>
		<div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Books Manager
                </h2>
                <div class="p-2">
                    <router-link :to="'/library/book'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            Book Detail
                        </vs-button>
                    </router-link>
                    <router-link :to="'/library/issue-history'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-history" aria-hidden="true"></i>
                            Issue History
                        </vs-button>
                    </router-link>
                    <router-link :to="'/library/member'">

                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            Membership
                        </vs-button>
                    </router-link>
                    <router-link :to="'/library/student'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            Students Member
                        </vs-button>
                    </router-link>
                    <router-link :to="'/library/staff'">
                        <vs-button type="filled" class="smBtn">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            Staffs Member
                        </vs-button>
                    </router-link>
                    <router-link :to="'/library/return-over'">
                        <vs-button type="filled" class="smBtn" color="warning">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            Return Period Over
                        </vs-button>
                    </router-link>

                </div>
            </div>
            <vs-divider class="mx-3"/>
			<div class="col-md-12">
				<vs-card>
					<student-table :headers="studentHeader"
					               :tableHeader="'Library Member Student List'"
					               :suggestText="'Library Member Student Record list on table. Filter Library Member Student using the filter.'"
					               :url="'/json/library/student'"
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


        }

    }


</script>

<style scoped>

</style>


