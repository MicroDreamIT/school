<template>
	<div>
		<div class="row">
			<div class="col-md-12 mb-2">
				<h2 class="pageTitle">Books Manager </h2>
			</div>
			<div class="col-md-12">
				<div class="row mx-0">
					<router-link :to="'/staff'">
						<vs-button type="filled" class="smBtn">
							<i class="fa fa-book" aria-hidden="true"></i>
							Book Detail
						</vs-button>
					</router-link>
					<router-link :to="'/staff/add'">
						<vs-button type="filled" class="smBtn">
							<i class="fa fa-history" aria-hidden="true"></i>
							Issue History
						</vs-button>
					</router-link>
					<router-link :to="'/staff/import'">
						<vs-button type="filled" class="smBtn">
							<i class="fa fa-usres" aria-hidden="true"></i>
							Membership
						</vs-button>
					</router-link>
					
					<router-link :to="'/staff/document'">
						<vs-button type="filled" class="smBtn">
							<i class="fa fa-files-o" aria-hidden="true"></i>
							Student Member
						</vs-button>
					</router-link>
					<router-link :to="'/staff/note'">
						<vs-button type="filled" class="smBtn">
							<i class="fa fa-sticky-note" aria-hidden="true"></i>
							Notes
						</vs-button>
					</router-link>
					<router-link :to="'/staff/payroll'">
						<vs-button type="filled" class="smBtn">
							<i class="fa fa-sticky-note" aria-hidden="true"></i>
							Staff Member
						</vs-button>
					</router-link>
				 
				</div>
			</div>
			<div class="col-md-12" >
				<div role="alert"
				     class="mt-2 alert alert-success alert-dismissible display-block"
				>
					<button type="button"
					        data-dismiss="alert"
					        aria-label="Close"
					        class="close"
					>
						<span aria-hidden="true">×</span>
					</button>
					<i class="ace-icon fa fa-hand-o-right"></i>
					{{notification}}
				</div>
			</div>
			<vs-divider class="mx-3"/>
			<div class="col-md-12">
				<vs-row vs-justify="center">
					<vs-col type="flex" vs-justify="center" vs-align="center" vs-w="17">
						<vs-card class="p-4">
							<h4>Import</h4>
							<hr>
							<p class="md:text-xl sm:text-lg font-bold">
								<i class="fa fa-download"></i> CSV Template for Bulk Staff Import
							</p>
							<hr>
							<vs-input type="file"
							          v-model="file"
							          class="w-100"></vs-input>
							<hr>
							<vs-button color="primary"
							           class="rounded"
							           type="filled"
							           @click="upload"
							>
								Upload
							</vs-button>
						
						</vs-card>
					</vs-col>
				</vs-row>
			</div>
		</div>
	</div>

</template>

<script>

    export default {
        name: "bulk-import",
        data() {
            return {
                notification: '',
                file: null
            }
        },
        methods: {
            upload() {

            }
        }
    }
</script>

<style scoped>

</style>

