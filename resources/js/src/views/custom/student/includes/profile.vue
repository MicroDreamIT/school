<template>
    <div>
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
                        <img :src="`http://viholdings.com.au/edu/public/assets/images/avatars/profile-pic.jpg`" class="img-thumbnail mt-3 ">
                    </div>
                </div>
                <div class="col-md-9">
                    <br>
                   <p> <vs-button type="filled" class="smBtn"> Student Name Here  </vs-button></p>
                 <div class="data-table">
                        <div class="rows">
                            <div class="header">faculty:</div>
                            <div class="content">BTECH</div>
                            <div class="header">semester:</div>
                            <div class="content">1</div>
                        </div>
                        <div class="rows">
                            <div class="header">batch:</div>
                            <div class="content">ACT</div>
                            <div class="header"></div>
                            <div class="content"> </div>
                        </div>
                        <div class="rows">
                            <div class="header">Reg no:</div>
                            <div class="content">123</div>
                            <div class="header">reg date</div>
                            <div class="content"> 06/01/2020 </div>
                        </div>
                        <div class="rows">
                            <div class="header">univ.reg:</div>
                            <div class="content">1235</div>
                            <div class="header">Dob:</div>
                            <div class="content"> 06/01/2020 </div>
                        </div>
                        <div class="rows">
                            <div class="header">gender: </div>
                            <div class="content">male</div>
                            <div class="header">blood group:</div>
                            <div class="content"> a+ </div>
                        </div>
                        <div class="rows">
                            <div class="header">Religion: </div>
                            <div class="content">islam</div>
                            <div class="header">Caste: </div>
                            <div class="content"> G </div>
                        </div>
                        <div class="rows">
                            <div class="header">Nationality:</div>
                            <div class="content">indian</div>
                            <div class="header">Mother Tongue: </div>
                            <div class="content"> hindi </div>
                        </div>
                        <div class="rows">
                            <div class="header">E-mail: </div>
                            <div class="content text-lowercase">admin@gmail.com</div>
                            <div class="header">Mobile No : </div>
                            <div class="content">  65345345634,45634563456345</div>
                        </div>
                 </div>
                </div>
            </div>
            <!--per mamanent address -->
            <div class="row w-100 mt-4">
                <div class="col-md-12 mx-auto">
                    <vs-button type="filled" class="smBtn text-capitalize"> permanent address </vs-button>
                    <br>
                   <div class="data-table">
                       <div class="rows">
                           <div class="header">address:</div>
                           <div class="content">DEHRADUN</div>
                           <div class="header"></div>
                           <div class="content"></div>
                       </div>
                       <div class="rows">
                           <div class="header">state:</div>
                           <div class="content">uk</div>
                           <div class="header">country</div>
                           <div class="content">ind</div>
                       </div>
                   </div>
                   
                </div>
            </div>
            <!--temporary address-->
            <div class="row w-100 mt-4">
                <div class="col-md-12 mx-auto">
                    <vs-button type="filled" class="smBtn text-capitalize"> temporarry address </vs-button>
                    <br>
                    <div class="data-table">
                        <div class="rows">
                            <div class="header">address:</div>
                            <div class="content">DEHRADUN</div>
                            <div class="header"></div>
                            <div class="content"></div>
                        </div>
                        <div class="rows">
                            <div class="header">state:</div>
                            <div class="content">uk</div>
                            <div class="header">country</div>
                            <div class="content">ind</div>
                        </div>
                    </div>
        
                </div>
            </div>
            <!--parential info -->
            <div class="row w-100 mt-4">
                <div class="col-md-12 mx-auto">
                    <vs-button type="filled" class="smBtn text-capitalize">personal info</vs-button>
                    <br>
                    <div class="data-table">
                        <div class="rows">
                            <div class="header">grand father:</div>
                            <div class="content">loli makai</div>
                            <div class="header">father name:</div>
                            <div class="content">dsfdsf</div>
                            <div class="header">Eligibility </div>
                            <div class="content">dsfdsf</div>
                            <div class="header">Occupation  </div>
                            <div class="content">dsfdsf</div>
                        </div>
                        <div class="rows">
                            <div class="header">office:</div>
                            <div class="content">sadsad</div>
                            <div class="header">Office Num :</div>
                            <div class="content">020121</div>
                            <div class="header">Residence :</div>
                            <div class="content">sadsad</div>
                        </div>
                        <div class="rows">
                            <div class="header">mobile:</div>
                            <div class="content">34324324</div>
                            <div class="header">mobile 2 :</div>
                            <div class="content">020121</div>
                            <div class="header">email :</div>
                            <div class="content">admin@gmail.com</div>
                        </div>
                    </div>
        
                </div>
            </div>
            <!--guardian info  -->
            <div class="row w-100 mt-4">
                <div class="col-md-12 mx-auto">
                    <vs-button type="filled" class="smBtn text-capitalize">guardian info</vs-button>
                    <br>
                    <div class="data-table">
                        <div class="rows">
                            <div class="header">Guardian Name :</div>
                            <div class="content">loli makai sdf</div>
                            <div class="header">Eligibility :</div>
                            <div class="content">dsfdsf</div>
                            <div class="header">Occupation  </div>
                            <div class="content">dsfdsf</div>
                        </div>
                        <div class="rows">
                            <div class="header">Office:</div>
                            <div class="content">34324324</div>
                            <div class="header">office number 2 :</div>
                            <div class="content">020121</div>
                            <div class="header">Residence  :</div>
                            <div class="content">sasdsdd</div>
                        </div>
                        <div class="rows">
                            <div class="header">mobile:</div>
                            <div class="content">34324324</div>
                            <div class="header">mobile 2 :</div>
                            <div class="content">020121</div>
                            <div class="header">email :</div>
                            <div class="content">admin@gmail.com</div>
                        </div>
                        <div class="rows">
                            <div class="header">Relation :</div>
                            <div class="content">father</div>
                            <div class="header">Address :</div>
                            <div class="content">020121 sad  asdsad</div>
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
                        <img :src="`http://viholdings.com.au/edu/public/assets/images/avatars/profile-pic.jpg`" class="img-thumbnail my-3 ">
                    </div>
                </div>
                <div class="col-md-3">
                    <vs-button type="filled" class="smBtn text-capitalize">Father</vs-button>
                     <div class="d-flex justify-content-center align-items-center w-100 ">
                        <img :src="`http://viholdings.com.au/edu/public/assets/images/avatars/profile-pic.jpg`" class="img-thumbnail my-3 ">
                    </div>
                </div>
                <div class="col-md-3">
                    <vs-button type="filled" class="smBtn text-capitalize"> Mother</vs-button>
                     <div class="d-flex justify-content-center align-items-center w-100 ">
                        <img :src="`http://viholdings.com.au/edu/public/assets/images/avatars/profile-pic.jpg`" class="img-thumbnail my-3 ">
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: "profile"
    }
</script>

<style scoped>

</style>
