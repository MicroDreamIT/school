<template>
    <div>
        <div class="row mx-0">
            <div class="col-md-12">
                <h2 class="pageTitle">Hostel Manager</h2>
                <div class="mb-2">
                    <router-link :to="'/hostel/resident'">
                        <vs-button type="filled" class="smBtn">Resident</vs-button>
                    </router-link>
                    <router-link :to="'/hostel'">
                        <vs-button type="filled" class="smBtn">Hostel</vs-button>
                    </router-link>
                    <router-link :to="'/hostel/food'">
                        <vs-button type="filled" class="smBtn">Food & Meal</vs-button>
                    </router-link>
                </div>
                <vs-divider></vs-divider>
                <div class="mb-4 col-md-12">
                    <router-link :to="'/hostel/resident'">
                        <vs-button type="filled" class="smBtn">Detail</vs-button>
                    </router-link>
                    <router-link :to="'/hostel/resident/add'">
                        <vs-button type="filled" class="smBtn">Registration</vs-button>
                    </router-link>
                    <router-link :to="'/hostel/resident/history'">
                        <vs-button type="filled" class="smBtn"> History </vs-button>
                    </router-link>
                </div>
            </div>
           <div class="col-md-12">
               <vs-card>
                   <div class="row p-4">
                       <div class="col-md-12">
                           <h4>Create Resident</h4>
                           <div class="row mt-4 w-100">
                               <div class="col-md-4">
                                   <div class="forn-group  ">
                                       <label>Type</label>
                                       <vs-select class="w-100"></vs-select>
                                   </div>
                               </div>
                               <div class="col-md-4">
                                   <div class="forn-group ">
                                       <label>Reg No</label>
                                       <vs-select class=w-100 ></vs-select>
                                   </div>
                               </div>
                               <div class="col-md-4">
                                   <div class="forn-group  ">
                                       <label>Hostel</label>
                                       <vs-select class="w-100"></vs-select>
                                   </div>
                               </div>
                               <div class="col-md-4">
                                   <div class="forn-group ">
                                       <label>Room</label>
                                       <vs-select class=w-100 ></vs-select>
                                   </div>
                               </div>
                               <div class="col-md-4">
                                   <div class="forn-group ">
                                       <label>Bed</label>
                                       <vs-select class=w-100 ></vs-select>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <vs-divider class="mx-3"></vs-divider>
                       <div class="row mx-0">
                           <vs-button class="my-round mx-2" color="warning">Reset</vs-button>
                           <vs-button class="my-round mx-2">Save</vs-button>
                           <vs-button class="my-round mx-2" color="#28c76f">Save And Add Another</vs-button>
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
                searchData: {},
                tableHeader: [
                    {name: 'Email', field: 'email', sort_key: 'email'},
                    {name: 'Name', field: 'name', sort_key: 'name'},
                    {name: 'Mobile', field: 'mobile'},
                    {name: 'PID'},
                ],
            }
        }
    }
</script>

<style scoped>

</style>

