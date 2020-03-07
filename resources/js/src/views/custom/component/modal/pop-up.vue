<template>
	<div class="own-modal">
		<div class="inner-content">
			 <div class="header">
				<h4>Modal title</h4>
				 <div class="close-modal"  @click="$emit('close')">X</div>
			 </div>
			 <div class="body"></div>
			 <div class="footer">
				 <button type="button"
				         class="btn btn-default pull-right mr-1"
				         @click="$emit('close')">
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
