<template>
	<div class="own-modal">
		<div class="inner-content">
			 <div class="header">
				<h4>Modal title</h4>
				 <div class="close-modal" @click.prevent="closeModal()">X</div>
			 </div>
			 <div class="body"></div>
			 <div class="footer">
				 <button type="button"
				         class="btn btn-default pull-right mr-1"
				         @click.prevent="closeModal()">
					 Cancel
				 </button>
				 <button type="button" class="btn btn-success pull-right">
					 Assign Bed
				 </button>
			 </div>
		</div>
	</div>
</template>

<script>
	export default{
	    data(){
	        return{
	        
	        }
	    },
		methods:{
  
		},
	}
</script>