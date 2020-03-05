<template>
	<div>
		<div class="center con-switch">
			<vs-switch v-model="active" />
		</div>
	</div>
</template>

<script>
    export default {
        data(){
           return{
            active:true
           }
        }
    }
</script>