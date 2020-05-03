<template>
    <div>
        
    </div>
</template>

<script>
    export default {
        name: "views",
        data(){
            return {
                views:''
            }
        },
        created() {
            this.getData()
        },
        methods:{
            getData(){
                this.$http.get('/json/account/fees/collection/'+ this.$route.params.id +'/view')
                    .then(res=>{
                        console.log(res.data)
                    })
            }
        }
    }
</script>

<style scoped>

</style>
