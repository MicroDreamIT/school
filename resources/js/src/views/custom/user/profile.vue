<template>
	<div>
		<div class="row ">
			<div class="col-md-12">
				<h2 class="pageTitle">User Manager </h2>
			</div>
			<hr class="own-hr">
			<div class="col-md-12">
				<vs-card>
				 <div class="row px-4">
				    <div class="col-md-12">
					    <vs-table stripe>
						    <template slot="header">
							    <h3> </h3>
						    </template>
						    <template slot="thead">
							    <vs-th> S.N </vs-th>
							    <vs-th> Gateway </vs-th>
							    <vs-th> Config </vs-th>
							    <vs-th> Status </vs-th>
							    <vs-th> Action </vs-th>
						    </template>
						    <template>
							    <vs-tr>
								    <vs-td> profile image </vs-td>
								    <vs-td>
									    no images
								    </vs-td>
							    </vs-tr>
							    
						    </template>
					    </vs-table>
				    </div>
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
                studentHeader: [
                    {name: 'Column', sort_key: 'Column'},
                    {name: 'Value', sort_key: 'Value'},
                 
                ],
                notification: '',

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
