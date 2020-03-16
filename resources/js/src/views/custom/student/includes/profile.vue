<template>
    <div v-if="profile">
        <div class="row mx-0">
            <div class="d-flex justify-content-center flex-column align-items-center mt-4 w-100">
                <h2>Edu MIS</h2>
                <h5>Earth,12333</h5>
                <h4>Registration Details</h4>
            </div>
            <vs-divider class="mx-1"/>
            <div class="col-md-12 d-flex justify-content-end w-100">
                <vs-button class="smBtn"> <i class="fa fa-edit"> </i> Edit</vs-button> |
                <vs-button class="smBtn"> <i class="fa fa-print"> </i> Print</vs-button>
            </div>
            <div class="row w-100">
                <div class="col-md-3">
                    <div class="d-flex justify-content-center align-items-center w-100 ">
                        <img :src="profile.student_image" class="img-thumbnail mt-3 ">
                    </div>
                </div>
                <div class="col-md-9">
                    <br>
                   <p> <vs-button type="filled" class="smBtn">{{profile.first_name+' '+profile.middle_name+' '+ profile.last_name}}</vs-button></p>
                 <div class="data-table">
                        <div class="rows">
                            <div class="header">faculty:</div>
                            <div class="content">{{profile.faculty}}</div>
                            <div class="header">semester:</div>
                            <div class="content">{{profile.semester}}</div>
                        </div>
                        <div class="rows">
                            <div class="header">batch:</div>
                            <div class="content">{{profile.batch}}</div>
                            <div class="header"></div>
                            <div class="content"> </div>
                        </div>
                        <div class="rows">
                            <div class="header">Reg no:</div>
                            <div class="content">{{profile.reg_no}}</div>
                            <div class="header">reg date</div>
                            <div class="content"> {{profile.reg_date}} </div>
                        </div>
                        <div class="rows">
                            <div class="header">univ.reg:</div>
                            <div class="content">{{profile.university_reg}}</div>
                            <div class="header">Dob:</div>
                            <div class="content"> 06/01/2020 </div>
                        </div>
                        <div class="rows">
                            <div class="header">gender: </div>
                            <div class="content"> {{profile.gender}} </div>
                            <div class="header">blood group:</div>
                            <div class="content">  {{profile.blood_group}}  </div>
                        </div>
                        <div class="rows">
                            <div class="header">Religion: </div>
                            <div class="content"> {{profile.religion}} </div>
                            <div class="header">Caste: </div>
                            <div class="content">  {{profile.caste}}  </div>
                        </div>
                        <div class="rows">
                            <div class="header">Nationality:</div>
                            <div class="content"> {{profile.nationality}} </div>
                            <div class="header">Mother Tongue: </div>
                            <div class="content"> {{profile.mother_tongue}}  </div>
                        </div>
                        <div class="rows">
                            <div class="header">E-mail: </div>
                            <div class="content text-lowercase">{{profile.email}} </div>
                            <div class="header">Mobile No : </div>
                            <div class="content"> {{profile.mobile_1}} </div>
                        </div>
                 </div>
                </div>
            </div>
            <!--per mamanent address -->
            <div class="row w-100 mt-4">
                <div class="col-md-12 mx-auto">
                    <vs-button type="filled" class="smBtn text-capitalize"> Permanent Address </vs-button>
                    <br>
                   <div class="data-table">
                       <div class="rows">
                           <div class="header">address:</div>
                           <div class="content">{{profile.address}} </div>
                           <div class="header"></div>
                           <div class="content"></div>
                       </div>
                       <div class="rows">
                           <div class="header">state:</div>
                           <div class="content">{{profile.state}} </div>
                           <div class="header">country</div>
                           <div class="content">{{profile.country}} </div>
                       </div>
                   </div>
                   
                </div>
            </div>
            <!--temporary address-->
            <div class="row w-100 mt-4">
                <div class="col-md-12 mx-auto">
                    <vs-button type="filled" class="smBtn text-capitalize"> Temporary Address </vs-button>
                    <br>
                    <div class="data-table">
                        <div class="rows">
                            <div class="header">address:</div>
                            <div class="content">{{profile.temp_address}} </div>
                            <div class="header"></div>
                            <div class="content"></div>
                        </div>
                        <div class="rows">
                            <div class="header">state:</div>
                            <div class="content">{{profile.temp_state}} </div>
                            <div class="header">country</div>
                            <div class="content">{{profile.temp_country}} </div>
                        </div>
                    </div>
        
                </div>
            </div>
            <!--parential info -->
            <div class="row w-100 mt-4">
                <div class="col-md-12 mx-auto">
                    <vs-button type="filled" class="smBtn text-capitalize">Personal Info</vs-button>
                    <br>
                    <div class="data-table">
                        <div class="rows">
                            <div class="header">grand father:</div>
                            <div class="content"> {{profile.grandfather_first_name}} {{profile.grandfather_middle_name}} {{profile.grandfather_last_name}}  </div>
                            <div class="header">father name:</div>
                            <div class="content"> {{profile.father_first_name}} {{profile.father_middle_name}} {{profile.father_last_name}} </div>
                            <div class="header">Eligibility </div>
                            <div class="content">{{profile.father_eligibility}} </div>
                            <div class="header">Occupation  </div>
                            <div class="content">{{profile.father_occupation}}</div>
                        </div>
                        <div class="rows">
                            <div class="header">office:</div>
                            <div class="content">{{profile.father_office}} </div>
                            <div class="header">Office Num :</div>
                            <div class="content">{{profile.father_office_number}} </div>
                            <div class="header">Residence :</div>
                            <div class="content">{{profile.father_residence_number}} </div>
                        </div>
                        <div class="rows">
                            <div class="header">mobile:</div>
                            <div class="content">{{profile.father_mobile_1}} </div>
                            <div class="header">mobile 2 :</div>
                            <div class="content">{{profile.father_mobile_2}} </div>
                            <div class="header">email :</div>
                            <div class="content">{{profile.father_email}} </div>
                        </div>
                    </div>
        
                </div>
            </div>
            <!--guardian info  -->
            <div class="row w-100 mt-4">
                <div class="col-md-12 mx-auto">
                    <vs-button type="filled" class="smBtn text-capitalize">Guardian Info</vs-button>
                    <br>
                    <div class="data-table">
                        <div class="rows">
                            <div class="header">Guardian Name :</div>
                            <div class="content">{{profile.guardian_first_name}} {{profile.guardian_middle_name}} {{profile.guardian_last_name}} </div>
                            <div class="header">Eligibility :</div>
                            <div class="content">{{profile.guardian_eligibility}} </div>
                            <div class="header">Occupation  </div>
                            <div class="content">{{profile.guardian_occupation}} </div>
                        </div>
                        <div class="rows">
                            <div class="header">Office:</div>
                            <div class="content">{{profile.guardian_office}} </div>
                            <div class="header">office number 2 :</div>
                            <div class="content">{{profile.guardian_office_number}} </div>
                            <div class="header">Residence  :</div>
                            <div class="content"> {{profile.guardian_residence_number}}</div>
                        </div>
                        <div class="rows">
                            <div class="header">mobile:</div>
                            <div class="content">{{profile.guardian_mobile_1}}</div>
                            <div class="header">mobile 2 :</div>
                            <div class="content">{{profile.guardian_mobile_2}}</div>
                            <div class="header">email :</div>
                            <div class="content">{{profile.guardian_email}}</div>
                        </div>
                        <div class="rows">
                            <div class="header">Relation :</div>
                            <div class="content">{{profile.guardian_relation}}</div>
                            <div class="header">Address :</div>
                            <div class="content">{{profile.guardian_address}}</div>
                            <div class="header"> </div>
                            <div class="content"> </div>
                        </div>
                        
                    </div>
        
                </div>
            </div>
            <div class="row w-100 mt-4">
                <div class="col-md-3">
                    <br>
                    <div class="d-flex justify-content-center align-items-center w-100 ">
                        <img :src="`https://upload.wikimedia.org/wikipedia/commons/8/87/Sk.wikipedia.org_QR_Code.png`"
                             class="img-thumbnail mt-3 ">
                    </div>
                    <br>
                </div>
                <div class="col-md-3">
                    <vs-button type="filled" class="smBtn text-capitalize">Guardian </vs-button>
                    <div class="d-flex justify-content-center align-items-center w-100 ">
                        <img :src="profile.guardian_image" class="img-thumbnail my-3 ">
                    </div>
                </div>
                <div class="col-md-3">
                    <vs-button type="filled" class="smBtn text-capitalize">Father</vs-button>
                     <div class="d-flex justify-content-center align-items-center w-100 ">
                        <img :src="profile.father_image" class="img-thumbnail my-3 ">
                    </div>
                </div>
                <div class="col-md-3">
                    <vs-button type="filled" class="smBtn text-capitalize"> Mother</vs-button>
                     <div class="d-flex justify-content-center align-items-center w-100 ">
                        <img :src="profile.mother_image" class="img-thumbnail my-3 ">
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: "profile",
        props:['profile']
    }
</script>

<style scoped>

</style>
