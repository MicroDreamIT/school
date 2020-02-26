<template>
    <div>
       <div class="row ">
            <div class="col-md-12">
                <h2 class="pageTitle">Details</h2>
                <h2 class="pageTitle">notification bar</h2>
            </div>
           <vs-card>
               <div class="row">
                   <div class="col-md-4">
                       <div>create payment method</div>
                       <div class="d-flex justify-content-between">
                           <p>status</p>
                           <vs-input></vs-input>
                       </div>
                       <vs-divider></vs-divider>
                       <vs-button color="#00b8cf" type="filled" class="rounded-md">Create</vs-button>
                   </div>
                   <div class="col-md-8">

                   </div>
               </div>

           </vs-card>
       </div>
    </div>
</template>

<script>
    export default {
        name: "payment-method"
    }
</script>

<style scoped>

</style>
