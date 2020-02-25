<template>
	<div>
		<div class="row ">

			<div class="col-md-12">
				<h2 class="pageTitle">Details</h2>
				<div class="p-2">
					<router-link :to="'/student'">
						<vs-button type="filled" class="smBtn">Primary</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn">Primary</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn">Primary</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn">Primary</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn">Primary</vs-button>
					</router-link>
					<router-link :to="'/'">
						<vs-button type="filled" class="smBtn">
							Primary
						</vs-button>
					</router-link>

				</div>
			</div>
			<vs-divider class="mx-3"/>
			<div class="col-md-12">
				<vs-card>
					<div class="row p-2">
						<div class="col-md-12 mb-2">
							<vs-collapse class="custom-collapse">
								<vs-collapse-item>
									<div slot="header">
										<vs-button type="filled"
										           color="primary"
										           icon="double_arrow"
										>
											Filter Students
										</vs-button>
									</div>
									<div class="filterBox">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-3">
													<div class="form-group">
														<label>Reg:</label>
														<input placeholder=""
														       class="form-control border-form input-mask-registration"
														       autofocus="" name="" type="text"
														>
													</div>
													<div class="form-group">
														<label>Reg:</label>
														<input placeholder=""
														       class="form-control border-form input-mask-registration"
														       autofocus="" name="" type="text"
														>
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Reg Date From</label>
														<datepicker v-model="searchData.fromRegDate"/>
														<label>To</label>
														<datepicker v-model="searchData.toRegDate"/>
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Status:</label>
														<select class="form-control" name="academic_status">
															<option value="0">Select Academic Status</option>
															<option value="4">Back Continue</option>
															<option value="2">Continue</option>
															<option value="5">Drop Out</option>
															<option value="1">New Admission</option>
															<option value="8">Online Registration</option>
															<option value="3">Pass Out</option>
															<option value="6">Transfer in</option>
															<option value="7">Transfer Out</option>
														</select>
													</div>
													<div class="form-group">
														<label>Select Status:</label>
														<select class="form-control border-form" name="status"
														        id="cat_id">
															<option value="all"> Select Status</option>
															<option value="active">Active</option>
															<option value="in-active">In-Active</option>
														</select>
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Faculty/Class</label>
														<select class="form-control chosen-select" name="faculty">
															<option value="0">Select Faculty/Class</option>
															<option value="1">BTECH</option>
														</select>

													</div>
													<div class="form-group">
														<label>Sem./Sec.</label>
														<select name="semester_select"
														        class="form-control semester_select">
															<option value="0"> Select Sem./Sec.</option>
														</select>
													</div>
													<div class="form-group">
														<label>Batch</label>
														<select class="form-control" name="batch">
															<option value="0">Select Batch</option>
															<option value="1">ACT</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row  mb-3">
												<div class="col-md-3">
													<div class="form-group">
														<label>Religion:</label>
														<input placeholder=""
														       class="form-control border-form input-mask-registration"
														       autofocus="" name="" type="text"
														>
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Caste:</label>
														<input placeholder=""
														       class="form-control border-form input-mask-registration"
														       autofocus="" name="" type="text"
														>
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Nationality:</label>
														<input placeholder=""
														       class="form-control border-form input-mask-registration"
														       autofocus="" name="" type="text"
														>
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Mot.Tongue:</label>
														<input placeholder=""
														       class="form-control border-form input-mask-registration"
														       autofocus="" name="" type="text"
														>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12 mb-2 pl-0">
											<vs-button type="filled"
											           color="#00b8cf"
											           icon="double_arrow"
											           @click="alert(searchData)"
											>
												Filter
											</vs-button>
										</div>
									</div>
								</vs-collapse-item>
							</vs-collapse>
						</div>
						<div class="col-md-12">
							<h4 class="header large lighter blue">
                                <i class="fa fa-list" aria-hidden="true"></i>&nbsp;Students
								List</h4>
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
								Students Record list on table. Filter Students using the filter.
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
							<student-table :searchData="searchData" :url="url" :columns="columns"/>
						</div>
					</div>
				</vs-card>
			</div>
		</div>

	</div>
</template>

<script>
    import Datepicker from 'vuejs-datepicker';
    import StudentTable from '../component/table/student-table'

    export default {
        components: {
            StudentTable,
            Datepicker
        },
        data() {
            return {
                searchData: {
                    academic_status: null,
                    status: null
                },
                url: '/ajax/student/',
                columns: [
                    {name: 'Email', field: 'email',sort_key:'email'},
                    {name: 'Name', field: 'name',sort_key:'name'},
                    {name: 'Mobile', field: 'mobile'},
                    {name: 'PID'},
                ],
                academic_status: ['Back Continue', 'Continue', 'Drop Out'],
                status: ['Active', 'In-Active'],
                filterBox: false,
            }
        },

    }


</script>

<style scoped>

</style>
