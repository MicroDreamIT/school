<template>
	<div>
		<div class="row ">
			<div class="col-md-12">
				<h2 class="pageTitle">Certificate Template List</h2>
				<div class="p-2">
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn">
							<i class="fa fa-user" aria-hidden="true"></i>
							Issue
						</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn">
							<i class="fa fa-user-secret" aria-hidden="true"></i>
							Attendance
						</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn">
							<i class="fa fa-exchange" aria-hidden="true"></i>
							Transfer
						</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn">
							<i class="fa fa-user" aria-hidden="true"></i>
							Bonafide
						</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn">
							<i class="fa fa-bank" aria-hidden="true"></i>
							Course Completion
						</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn">
							<i class="fa fa-bank" aria-hidden="true"></i>
							History
						</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn">
							<i class="fa fa-bank" aria-hidden="true"></i>
							Custom
						</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn">
							<i class="fa fa-bank" aria-hidden="true"></i>
							Template
						</vs-button>
					</router-link>
				</div>
			</div>
			<hr class="own-hr">
			<div class="col-md-12">
				<vs-card>
					<div class="p-2">
						<h4>Course Completion Certificate List</h4>
						<router-link :to="'/account/fees'">
							<vs-button type="filled" class="smBtn">
								<i class="fa fa-history" aria-hidden="true"></i>
								Bonafide Certificate  Detail
							</vs-button>
						</router-link>
					</div>
					<hr class="own-hr">
					<student-table :headers="studentHeader"
					               :tableHeader="'Certificate Template List'"
					               :suggestText="'Course Completion Certificate Record list on table. Filter Course Completion Certificate using the filter.'"
					               :url="'/json/student/'"
					               :noDataMessage="'No Student data found. Please Filter Student to show.'"
					               :hasSearch="true"
					               :has-multiple="true"
					               :has-pagination="true"
					               :filterSection="true"
					               ref="studentTable"
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
							
							<vs-td :data="props.data.first_name">
								<a @click.stop="viewItems(props.data.id)"
								   class="pointer-all text-primary"
								   title="View"
								>
									{{props.data.first_name+' '+props.data.middle_name+' '+props.data.last_name}}
								</a>
							
							</vs-td>
							<vs-td></vs-td>
							<vs-td>
								<div class="d-flex">
									{{props.data.academic_status}}
									<vs-switch color="success"
									           :checked="props.data.status=='active'?true:false"
									           @click.stop="changeStatus(props.data.id)"
									           class="pointer-all ml-2"
									>
										<span slot="on">Active</span>
										<span slot="off">In-Active</span>
									</vs-switch>
								</div>
							
							</vs-td>
							<vs-td>
								<div class="action-own">
									<a class="btn btn-primary btn-sm pointer-all"
									   title="View"
									   @click.stop="viewItems(props.data.id)"
									
									>
										<i class="fa fa-calculator"></i>
									</a>
								</div>
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
                    {name: 'Faculty/Class', sort_key: 'faculty'},
                    {name: 'Sem./Sec.', sort_key: ''},
                    {name: 'Reg.No.', sort_key: 'reg_no'},
                    {name: 'Name', sort_key: ''},
                    {name: 'Contact. No.', sort_key: ''},
                    {name: 'Status', sort_key: ''},
                    {name: 'Action', sort_key: ''},
                ],
                notification: '',

            }
        },

        created() {

        },

        methods: {
            viewItems(id) {
                this.$router.push({name: 'feesView', params: {id: id}})
            },
            editItems() {
                alert("hey hasib im edit ")
            },
            deleteItems() {
                alert("hey hasib im delete ")
            },
            changeStatus() {
                // this.$http.get()
                this.$refs.studentTable.getData()
            },
        }

    }


</script>

<style scoped>

</style>
