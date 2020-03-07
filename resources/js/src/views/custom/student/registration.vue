<template>
    <div class="row">
        <div class="col-md-12 mb-2">
            <h2 class="pageTitle">Details</h2>
        </div>
        <div class="col-md-12">
            <div class="row mx-0">
                <router-link :to="'/student'">
                    <vs-button type="filled" class="smBtn">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        Detail
                    </vs-button>
                </router-link>
                <router-link :to="'/student/registration'">
                    <vs-button type="filled" class="smBtn">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Registration
                    </vs-button>
                </router-link>
                <router-link :to="'/student/import'">
                    <vs-button type="filled" class="smBtn">
                        <i class="fa fa-upload" aria-hidden="true"></i>
                        Bulk Registration
                    </vs-button>
                </router-link>
                <router-link :to="'/student/transfer'">
                    <vs-button type="filled" class="smBtn">
                        <i class="fa fa-exchange" aria-hidden="true"></i>
                        Transfer
                    </vs-button>
                </router-link>
                <router-link :to="'/student/document'">
                    <vs-button type="filled" class="smBtn">
                        <i class="fa fa-files-o" aria-hidden="true"></i>
                        Documents
                    </vs-button>
                </router-link>
                <router-link :to="'/student/note'">
                    <vs-button type="filled" class="smBtn">
                        <i class="fa fa-sticky-note" aria-hidden="true"></i>
                        Notes
                    </vs-button>
                </router-link>
                <router-link :to="'/account/fees'">
                    <vs-button type="filled" class="smBtn">
                        <i class="fa fa-calculator" aria-hidden="true"></i>
                        Balance Fees
                    </vs-button>
                </router-link>
                <router-link :to="'/library/student'">
                    <vs-button type="filled" class="smBtn">
                        <i class="fa fa-calculator" aria-hidden="true"></i>
                        Library
                    </vs-button>
                </router-link>
                <router-link :to="'/attendance/student'">
                    <vs-button type="filled" class="smBtn">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        Attendance
                    </vs-button>
                </router-link>
            </div>
        </div>
        <div class="col-md-12" v-if="hasNotification">
            <div role="alert"
                 class="mt-2 alert alert-success alert-dismissible display-block"
            >
                <button type="button"
                        data-dismiss="alert"
                        aria-label="Close"
                        class="close"
                        @click="hasNotification=''"
                >
                    <span aria-hidden="true">×</span>
                </button>
                <i class="ace-icon fa fa-hand-o-right"></i>
                {{hasNotification}}
            </div>
        </div>
        <vs-divider class="mx-3"/>
        <div class="col-md-12 p-0">
            <vs-card class="p-3">
                <div class="row p-2">
                    <h4 class="card-title">Registration
                        <router-link class="btn-primary btn-sm ml-2 text-white"
                                     :to="'/student/import'">
                            <i class="fa fa-upload" aria-hidden="true"></i>
                            Bulk Student Registration
                        </router-link>
                    </h4>
                    <div class="col-md-12">
                        <vs-tabs class="custom-tab">
                            <vs-tab label="General Information">
                                <div class="tab-pane active">
                                                <span class="badge badge badge-danger badge-pill mr-2">
													Red mark input are required. </span>
                                    <vs-divider class="mx-3"/>
                                    <div class="row my-2">
                                        <div class="col-md-2">
                                            REG.NO.
                                        </div>
                                        <div class="col-md-4">
                                            <vs-input v-model="student.reg_no"/>
                                        </div>
                                        <div class="col-md-2">
                                            Date of Admission
                                        </div>
                                        <div class="col-md-4">
                                            <datepicker v-model="student.reg_date"/>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-md-2">
                                            UNIVERSITY REG.NO.
                                        </div>
                                        <div class="col-md-4">
                                            <vs-input v-model="student.university_reg"/>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-md-2">
                                            Faculty/Class
                                        </div>
                                        <div class="col-md-5">
                                            <v-select v-model="student.faculty" :options="faculties"/>
                                        </div>
                                        <div class="col-md-2">
                                            Sem./Sec.
                                        </div>
                                        <div class="col-md-3">
                                            <v-select v-model="student.semester" :options="semester"/>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-md-2">
                                            Batch
                                        </div>
                                        <div class="col-md-5">
                                            <v-select v-model="student.batch" :options="batch"/>
                                        </div>
                                        <div class="col-md-2">
                                            Status
                                        </div>
                                        <div class="col-md-3">
                                            <v-select v-model="student.academic_status" :options="academic_status"/>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-md-3">
                                            NAME OF STUDENT
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="student.first_name"/>
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="student.middile_name"/>
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="student.last_name"/>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-md-2">
                                            Date Of Birth
                                        </div>
                                        <div class="col-md-2">
                                            <vs-input
													v-model="student.date_of_birth"
													v-mask="'####-##-##'"
											/>
                                        </div>
                                        <div class="col-md-2">
                                            Gender
                                        </div>
                                        <div class="col-md-2">
                                            <v-select v-model="student.gender" :options="['MALE','FEMALE','OTHER']"/>
                                        </div>
                                        <div class="col-md-2">
                                           Blood Group
                                        </div>
                                        <div class="col-md-2">
                                           <v-select v-model="student.blood_group" :options="['A+','A-','B+','B-','AB+','AB-','O+','O-']"/>
                                        </div>

                                    </div>

                                    <!--                                        <div class="row" style="margin:15px;">-->
                                    <!--                                            <label for="first_name" class="col-sm-3 control-label">NAME OF-->
                                    <!--                                                STUDENT</label>-->
                                    <!--                                            <div class="col-sm-3">-->
                                    <!--                                                <input class="form-control border-form upper" required=""-->
                                    <!--                                                       name="first_name" type="text" id="first_name">-->
                                    <!--                                            </div>-->
                                    <!--                                            <div class="col-sm-3">-->
                                    <!--                                                <input class="form-control border-form upper"-->
                                    <!--                                                       name="middle_name" type="text">-->
                                    <!--                                            </div>-->
                                    <!--                                            <div class="col-sm-3">-->
                                    <!--                                                <input class="form-control border-form upper" required=""-->
                                    <!--                                                       name="last_name" type="text">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->

                                    <!--                                        <div class="row" style="margin:15px;">-->
                                    <!--                                            <label for="date_of_birth" class="col-sm-2 control-label">Date-->
                                    <!--                                                of Birth</label>-->
                                    <!--                                            <div class="col-sm-2">-->
                                    <!--                                                <input data-date-format="yyyy-mm-dd"-->
                                    <!--                                                       class="form-control border-form date-picker input-mask-date"-->
                                    <!--                                                       required="" name="date_of_birth" type="text"-->
                                    <!--                                                       id="date_of_birth">-->
                                    <!--                                            </div>-->

                                    <!--                                            <label for="gender"-->
                                    <!--                                                   class="col-sm-2 control-label">Gender</label>-->
                                    <!--                                            <div class="col-sm-2">-->
                                    <!--                                                <select class="form-control border-form" required=""-->
                                    <!--                                                        id="gender" name="gender">-->
                                    <!--                                                    <option value="" selected="selected"></option>-->
                                    <!--                                                    <option value="MALE">MALE</option>-->
                                    <!--                                                    <option value="FEMALE">FEMALE</option>-->
                                    <!--                                                    <option value="OTHER">OTHER</option>-->
                                    <!--                                                </select>-->
                                    <!--                                            </div>-->

                                    <!--                                            <label for="blood_group" class="col-sm-2 control-label">Blood-->
                                    <!--                                                Group</label>-->
                                    <!--                                            <div class="col-sm-2">-->
                                    <!--                                                <select class="form-control border-form" id="blood_group"-->
                                    <!--                                                        name="blood_group">-->
                                    <!--                                                    <option value="" selected="selected"></option>-->
                                    <!--                                                    <option value="A+">A+</option>-->
                                    <!--                                                    <option value="A-">A-</option>-->
                                    <!--                                                    <option value="B+">B+</option>-->
                                    <!--                                                    <option value="B-">B-</option>-->
                                    <!--                                                    <option value="AB+">AB+</option>-->
                                    <!--                                                    <option value="AB-">AB-</option>-->
                                    <!--                                                    <option value="O+">O+</option>-->
                                    <!--                                                    <option value="O-">O-</option>-->
                                    <!--                                                </select>-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->

                                    <!--                                        <div class="row" style="margin:15px;">-->
                                    <!--                                            <label for="religion"-->
                                    <!--                                                   class="col-sm-2 control-label">Religion</label>-->
                                    <!--                                            <div class="col-sm-3">-->
                                    <!--                                                <input placeholder="" class="form-control border-form upper"-->
                                    <!--                                                       name="religion" type="text" id="religion">-->
                                    <!--                                            </div>-->

                                    <!--                                            <label for="caste" class="col-sm-2 control-label">Caste</label>-->
                                    <!--                                            <div class="col-sm-5">-->
                                    <!--                                                <input class="form-control border-form upper" name="caste"-->
                                    <!--                                                       type="text" id="caste">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->

                                    <!--                                        <div class="row" style="margin:15px;">-->
                                    <!--                                            <label for="nationality"-->
                                    <!--                                                   class="col-sm-2 control-label">Nationality</label>-->
                                    <!--                                            <div class="col-sm-2">-->
                                    <!--                                                <input placeholder="" class="form-control border-form upper"-->
                                    <!--                                                       required="" name="nationality" type="text"-->
                                    <!--                                                       id="nationality">-->
                                    <!--                                            </div>-->

                                    <!--                                            <label for="mother_tongue" class="col-sm-2 control-label">Mother-->
                                    <!--                                                Tongue</label>-->
                                    <!--                                            <div class="col-sm-2">-->
                                    <!--                                                <input class="form-control border-form upper"-->
                                    <!--                                                       name="mother_tongue" type="text" id="mother_tongue">-->
                                    <!--                                            </div>-->

                                    <!--                                            <label for="email" class="col-sm-1 control-label">E-mail</label>-->
                                    <!--                                            <div class="col-sm-3">-->
                                    <!--                                                <input class="form-control border-form" name="email"-->
                                    <!--                                                       type="text" id="email">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="row" style="margin:15px;">-->
                                    <!--                                            <label for="extra_info" class="col-sm-2 control-label">Extra-->
                                    <!--                                                Info</label>-->
                                    <!--                                            <div class="col-sm-10">-->
                                    <!--															<textarea class="form-control border-form" rows="1"-->
                                    <!--                                                                      name="extra_info" cols="50"-->
                                    <!--                                                                      id="extra_info"></textarea>-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->

                                    <!--                                        <div class="badge badge badge-primary badge-pill  mr-2">Contact-->
                                    <!--                                        </div>-->
                                    <!--                                        <hr class="hr-8">-->
                                    <!--                                        <div class="row" style="margin:15px;">-->
                                    <!--                                            <label for="home_phone"-->
                                    <!--                                                   class="col-sm-1 control-label">Phone</label>-->
                                    <!--                                            <div class="col-sm-3">-->
                                    <!--                                                <input class="form-control border-form input-mask-phone"-->
                                    <!--                                                       name="home_phone" type="text" id="home_phone">-->
                                    <!--                                            </div>-->

                                    <!--                                            <label for="mobile_1" class="col-sm-1 control-label">Mobile-->
                                    <!--                                                1</label>-->
                                    <!--                                            <div class="col-sm-3">-->
                                    <!--                                                <input class="form-control border-form input-mask-mobile"-->
                                    <!--                                                       required="" name="mobile_1" type="text"-->
                                    <!--                                                       id="mobile_1">-->
                                    <!--                                            </div>-->

                                    <!--                                            <label for="mobile_2" class="col-sm-1 control-label">Mobile-->
                                    <!--                                                2</label>-->
                                    <!--                                            <div class="col-sm-3">-->
                                    <!--                                                <input class="form-control border-form input-mask-mobile"-->
                                    <!--                                                       name="mobile_2" type="text" id="mobile_2">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->


                                    <!--                                        <div class="badge badge badge-primary badge-pill  mr-2">Permanent-->
                                    <!--                                            Address-->
                                    <!--                                        </div>-->
                                    <!--                                        <hr class="hr-8">-->
                                    <!--                                        <div class="row" style="margin:15px;">-->
                                    <!--                                            <label for="address"-->
                                    <!--                                                   class="col-sm-1 control-label">Address</label>-->
                                    <!--                                            <div class="col-sm-3">-->
                                    <!--                                                <input class="form-control border-form upper" required=""-->
                                    <!--                                                       name="address" type="text" id="address">-->
                                    <!--                                            </div>-->

                                    <!--                                            <label for="state" class="col-sm-1 control-label">State</label>-->
                                    <!--                                            <div class="col-sm-3">-->
                                    <!--                                                <input class="form-control border-form upper" required=""-->
                                    <!--                                                       name="state" type="text" id="state">-->
                                    <!--                                            </div>-->

                                    <!--                                            <label for="country"-->
                                    <!--                                                   class="col-sm-1 control-label">Country</label>-->
                                    <!--                                            <div class="col-sm-3">-->
                                    <!--                                                <input class="form-control border-form upper" required=""-->
                                    <!--                                                       name="country" type="text" id="country">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->


                                    <!--                                        <div class="badge badge badge-primary badge-pill  mr-2">Temporary-->
                                    <!--                                            Address-->
                                    <!--                                        </div>-->
                                    <!--                                        <br>-->
                                    <!--                                        <div class="control-group col-sm-12">-->
                                    <!--                                            <div class="radio">-->
                                    <!--                                                <br>-->
                                    <!--                                                <label>-->
                                    <!--                                                    <input class="ace" onclick="CopyAddress(this.form)"-->
                                    <!--                                                           name="permanent_address_copier" type="checkbox"-->
                                    <!--                                                           value="">-->
                                    <!--                                                    <span class="lbl"> Temporary Address Same As Permanent Address</span>-->
                                    <!--                                                </label>-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->
                                    <!--                                        <hr>-->

                                    <!--                                        <div class="row" style="margin:15px;">-->
                                    <!--                                            <label for="temp_address"-->
                                    <!--                                                   class="col-sm-1 control-label">Address</label>-->
                                    <!--                                            <div class="col-sm-3">-->
                                    <!--                                                <input class="form-control border-form upper"-->
                                    <!--                                                       name="temp_address" type="text" id="temp_address">-->
                                    <!--                                            </div>-->

                                    <!--                                            <label for="temp_state"-->
                                    <!--                                                   class="col-sm-1 control-label">State</label>-->
                                    <!--                                            <div class="col-sm-3">-->
                                    <!--                                                <input class="form-control border-form upper"-->
                                    <!--                                                       name="temp_state" type="text" id="temp_state">-->
                                    <!--                                            </div>-->

                                    <!--                                            <label for="temp_country"-->
                                    <!--                                                   class="col-sm-1 control-label">Country</label>-->
                                    <!--                                            <div class="col-sm-3">-->
                                    <!--                                                <input class="form-control border-form upper"-->
                                    <!--                                                       name="temp_country" type="text" id="temp_country">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->

                                    <!--                                        <h4 class="header large lighter blue"><i-->
                                    <!--                                                class="ace-icon glyphicon glyphicon-plus my-2"></i>&nbsp;Parent-->
                                    <!--                                            Details</h4>-->

                                    <!--                                        <div class="badge badge badge-primary badge-pill  mr-2">Grand-->
                                    <!--                                            Father's Detail-->
                                    <!--                                        </div>-->
                                    <!--                                        <br>-->
                                    <!--                                        <hr class="hr-8">-->
                                    <!--                                        <br>-->
                                    <!--                                        <div class="row" style="margin:15px;">-->
                                    <!--                                            <label for="grandfather_name" class="col-sm-3 control-label">NAME-->
                                    <!--                                                OF GRAND FATHER</label>-->
                                    <!--                                            <div class="col-sm-3">-->
                                    <!--                                                <input class="form-control border-form upper"-->
                                    <!--                                                       name="grandfather_first_name" type="text">-->
                                    <!--                                            </div>-->
                                    <!--                                            <div class="col-sm-3">-->
                                    <!--                                                <input class="form-control border-form upper"-->
                                    <!--                                                       name="grandfather_middle_name" type="text">-->
                                    <!--                                            </div>-->
                                    <!--                                            <div class="col-sm-3">-->
                                    <!--                                                <input class="form-control border-form upper"-->
                                    <!--                                                       name="grandfather_last_name" type="text">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->

                                    <!--                                        <div class="badge badge badge-primary badge-pill  mr-2">Father's-->
                                    <!--                                            Detail-->
                                    <!--                                        </div>-->
                                    <!--                                        <hr class="hr-8">-->

                                    <!--                                        <div class="row" style="margin:15px;">-->
                                    <!--                                            <label for="father_name" class="col-sm-3 control-label">NAME OF-->
                                    <!--                                                FATHER</label>-->
                                    <!--                                            <div class="col-sm-3">-->
                                    <!--                                                <input class="form-control border-form upper" required=""-->
                                    <!--                                                       name="father_first_name" type="text">-->
                                    <!--                                            </div>-->
                                    <!--                                            <div class="col-sm-3">-->
                                    <!--                                                <input class="form-control border-form upper"-->
                                    <!--                                                       name="father_middle_name" type="text">-->
                                    <!--                                            </div>-->
                                    <!--                                            <div class="col-sm-3">-->
                                    <!--                                                <input class="form-control border-form upper" required=""-->
                                    <!--                                                       name="father_last_name" type="text">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->

                                    <!--                                        <div class="row" style="margin:15px;">-->
                                    <!--                                            <label for="father_eligibility"-->
                                    <!--                                                   class="col-sm-2 control-label">Eligibility</label>-->
                                    <!--                                            <div class="col-sm-4">-->
                                    <!--                                                <input placeholder="" class="form-control border-form upper"-->
                                    <!--                                                       name="father_eligibility" type="text"-->
                                    <!--                                                       id="father_eligibility">-->
                                    <!--                                            </div>-->

                                    <!--                                            <label for="father_occupation"-->
                                    <!--                                                   class="col-sm-2 control-label">Occupation</label>-->
                                    <!--                                            <div class="col-sm-4">-->
                                    <!--                                                <input placeholder="" class="form-control border-form upper"-->
                                    <!--                                                       name="father_occupation" type="text"-->
                                    <!--                                                       id="father_occupation">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->

                                    <!--                                        <div class="row" style="margin:15px;">-->
                                    <!--                                            <label for="father_office"-->
                                    <!--                                                   class="col-sm-2 control-label">Office</label>-->
                                    <!--                                            <div class="col-sm-4">-->
                                    <!--                                                <input placeholder="" class="form-control border-form upper"-->
                                    <!--                                                       name="father_office" type="text" id="father_office">-->
                                    <!--                                            </div>-->

                                    <!--                                            <label for="father_office_number"-->
                                    <!--                                                   class="col-sm-2 control-label">Office Number</label>-->
                                    <!--                                            <div class="col-sm-4">-->
                                    <!--                                                <input placeholder="" class="form-control border-form upper"-->
                                    <!--                                                       name="father_office_number" type="text"-->
                                    <!--                                                       id="father_office_number">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->

                                    <!--                                        <div class="row" style="margin:15px;">-->
                                    <!--                                            <label for="father_residence_number"-->
                                    <!--                                                   class="col-sm-2 control-label">Residence Number</label>-->
                                    <!--                                            <div class="col-sm-4">-->
                                    <!--                                                <input class="form-control border-form input-mask-mobile"-->
                                    <!--                                                       name="father_residence_number" type="text"-->
                                    <!--                                                       id="father_residence_number">-->
                                    <!--                                            </div>-->

                                    <!--                                            <label for="father_mobile_1" class="col-sm-2 control-label">Mobile-->
                                    <!--                                                1</label>-->
                                    <!--                                            <div class="col-sm-4">-->
                                    <!--                                                <input class="form-control border-form input-mask-mobile"-->
                                    <!--                                                       name="father_mobile_1" type="text"-->
                                    <!--                                                       id="father_mobile_1">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->

                                    <!--                                        <div class="row" style="margin:15px;">-->
                                    <!--                                            <label for="father_mobile_2" class="col-sm-2 control-label">Mobile-->
                                    <!--                                                2</label>-->
                                    <!--                                            <div class="col-sm-4">-->
                                    <!--                                                <input class="form-control border-form input-mask-mobile"-->
                                    <!--                                                       name="father_mobile_2" type="text"-->
                                    <!--                                                       id="father_mobile_2">-->
                                    <!--                                            </div>-->

                                    <!--                                            <label for="father_email"-->
                                    <!--                                                   class="col-sm-2 control-label">E-mail</label>-->
                                    <!--                                            <div class="col-sm-4">-->
                                    <!--                                                <input class="form-control border-form" name="father_email"-->
                                    <!--                                                       type="text" id="father_email">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->

                                    <!--                                        <div class="badge badge badge-primary badge-pill  mr-2">Mother’s-->
                                    <!--                                            Detail-->
                                    <!--                                        </div>-->
                                    <!--                                        <hr class="hr-8">-->

                                    <!--                                        <div class="row" style="margin:15px;">-->
                                    <!--                                            <label for="mother_name" class="col-sm-3 control-label">NAME OF-->
                                    <!--                                                MOTHER</label>-->
                                    <!--                                            <div class="col-sm-3">-->
                                    <!--                                                <input class="form-control border-form upper" required=""-->
                                    <!--                                                       name="mother_first_name" type="text">-->
                                    <!--                                            </div>-->
                                    <!--                                            <div class="col-sm-3">-->
                                    <!--                                                <input class="form-control border-form upper"-->
                                    <!--                                                       name="mother_middle_name" type="text">-->
                                    <!--                                            </div>-->
                                    <!--                                            <div class="col-sm-3">-->
                                    <!--                                                <input class="form-control border-form upper" required=""-->
                                    <!--                                                       name="mother_last_name" type="text">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->

                                    <!--                                        <div class="row" style="margin:15px;">-->
                                    <!--                                            <label for="mother_eligibility"-->
                                    <!--                                                   class="col-sm-2 control-label">Eligibility</label>-->
                                    <!--                                            <div class="col-sm-4">-->
                                    <!--                                                <input placeholder="" class="form-control border-form upper"-->
                                    <!--                                                       name="mother_eligibility" type="text"-->
                                    <!--                                                       id="mother_eligibility">-->
                                    <!--                                            </div>-->

                                    <!--                                            <label for="mother_occupation"-->
                                    <!--                                                   class="col-sm-2 control-label">Occupation</label>-->
                                    <!--                                            <div class="col-sm-4">-->
                                    <!--                                                <input placeholder="" class="form-control border-form upper"-->
                                    <!--                                                       name="mother_occupation" type="text"-->
                                    <!--                                                       id="mother_occupation">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->

                                    <!--                                        <div class="row" style="margin:15px;">-->
                                    <!--                                            <label for="mother_office"-->
                                    <!--                                                   class="col-sm-2 control-label">Office</label>-->
                                    <!--                                            <div class="col-sm-4">-->
                                    <!--                                                <input placeholder="" class="form-control border-form upper"-->
                                    <!--                                                       name="mother_office" type="text" id="mother_office">-->
                                    <!--                                            </div>-->

                                    <!--                                            <label for="mother_office_number"-->
                                    <!--                                                   class="col-sm-2 control-label">Office Number</label>-->
                                    <!--                                            <div class="col-sm-4">-->
                                    <!--                                                <input placeholder="" class="form-control border-form upper"-->
                                    <!--                                                       name="mother_office_number" type="text"-->
                                    <!--                                                       id="mother_office_number">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->

                                    <!--                                        <div class="row" style="margin:15px;">-->
                                    <!--                                            <label for="mother_residence_number"-->
                                    <!--                                                   class="col-sm-2 control-label">Residence Number</label>-->
                                    <!--                                            <div class="col-sm-4">-->
                                    <!--                                                <input class="form-control border-form input-mask-phone"-->
                                    <!--                                                       name="mother_residence_number" type="text"-->
                                    <!--                                                       id="mother_residence_number">-->
                                    <!--                                            </div>-->

                                    <!--                                            <label for="mother_mobile_1" class="col-sm-2 control-label">Mobile-->
                                    <!--                                                1</label>-->
                                    <!--                                            <div class="col-sm-4">-->
                                    <!--                                                <input class="form-control border-form input-mask-mobile"-->
                                    <!--                                                       name="mother_mobile_1" type="text"-->
                                    <!--                                                       id="mother_mobile_1">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->

                                    <!--                                        <div class="row" style="margin:15px;">-->
                                    <!--                                            <label for="mother_mobile_2" class="col-sm-2 control-label">Mobile-->
                                    <!--                                                2</label>-->
                                    <!--                                            <div class="col-sm-4">-->
                                    <!--                                                <input class="form-control border-form input-mask-mobile"-->
                                    <!--                                                       name="mother_mobile_2" type="text"-->
                                    <!--                                                       id="mother_mobile_2">-->
                                    <!--                                            </div>-->

                                    <!--                                            <label for="mother_email"-->
                                    <!--                                                   class="col-sm-2 control-label">E-mail</label>-->
                                    <!--                                            <div class="col-sm-4">-->
                                    <!--                                                <input class="form-control border-form" name="mother_email"-->
                                    <!--                                                       type="text" id="mother_email">-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->

                                    <!--                                        <hr class="hr-8">-->
                                    <!--                                        <div class="badge badge badge-primary badge-pill  mr-2">Guardian's-->
                                    <!--                                            Detail-->
                                    <!--                                        </div>-->

                                    <!--                                        <div class="control-group col-sm-12">-->
                                    <!--                                            <br>-->
                                    <!--                                            <div class="radio">-->
                                    <!--                                                <label>-->
                                    <!--                                                    <input class="ace" onclick="FatherAsGuardian(this.form)"-->
                                    <!--                                                           name="guardian_is" type="radio"-->
                                    <!--                                                           value="father_as_guardian">-->
                                    <!--                                                    <span class="lbl"> Father is Guardian</span>-->
                                    <!--                                                </label>-->
                                    <!--                                                <label>-->
                                    <!--                                                    <input class="ace" onclick="MotherAsGuardian(this.form)"-->
                                    <!--                                                           name="guardian_is" type="radio"-->
                                    <!--                                                           value="mother_as_guardian">-->
                                    <!--                                                    <span class="lbl"> Mother is Guardian</span>-->
                                    <!--                                                </label>-->
                                    <!--                                                <label>-->
                                    <!--                                                    <input class="ace" onclick="OtherGuardian(this.form)"-->
                                    <!--                                                           checked="checked" name="guardian_is" type="radio"-->
                                    <!--                                                           value="other_guardian">-->
                                    <!--                                                    <span class="lbl"> Other's</span>-->
                                    <!--                                                </label>-->
                                    <!--                                                <label>-->
                                    <!--                                                    <input class="ace" onclick="linkGuardian(this.form)"-->
                                    <!--                                                           name="guardian_is" type="radio"-->
                                    <!--                                                           value="link_guardian">-->
                                    <!--                                                    <span class="lbl"> Link Guardian</span>-->
                                    <!--                                                </label>-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->
                                    <!--                                        <hr>-->
                                    <!--                                        <div id="guardian-detail" style="display: block;">-->
                                    <!--                                            <hr class="hr-8">-->
                                    <!--                                            <div class="row" style="margin:15px;">-->
                                    <!--                                                <label for="guardian_name" class="col-sm-3 control-label">NAME-->
                                    <!--                                                    OF GUARDIAN</label>-->
                                    <!--                                                <div class="col-sm-3">-->
                                    <!--                                                    <input class="form-control border-form upper"-->
                                    <!--                                                           required="" name="guardian_first_name"-->
                                    <!--                                                           type="text">-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="col-sm-3">-->
                                    <!--                                                    <input class="form-control border-form upper"-->
                                    <!--                                                           name="guardian_middle_name" type="text">-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="col-sm-3">-->
                                    <!--                                                    <input class="form-control border-form upper"-->
                                    <!--                                                           required="" name="guardian_last_name"-->
                                    <!--                                                           type="text">-->
                                    <!--                                                </div>-->
                                    <!--                                            </div>-->

                                    <!--                                            <div class="row" style="margin:15px;">-->
                                    <!--                                                <label for="guardian_eligibility"-->
                                    <!--                                                       class="col-sm-2 control-label">Eligibility</label>-->
                                    <!--                                                <div class="col-sm-4">-->
                                    <!--                                                    <input placeholder=""-->
                                    <!--                                                           class="form-control border-form upper"-->
                                    <!--                                                           name="guardian_eligibility" type="text"-->
                                    <!--                                                           id="guardian_eligibility">-->
                                    <!--                                                </div>-->

                                    <!--                                                <label for="guardian_occupation"-->
                                    <!--                                                       class="col-sm-2 control-label">Occupation</label>-->
                                    <!--                                                <div class="col-sm-4">-->
                                    <!--                                                    <input placeholder=""-->
                                    <!--                                                           class="form-control border-form upper"-->
                                    <!--                                                           name="guardian_occupation" type="text"-->
                                    <!--                                                           id="guardian_occupation">-->
                                    <!--                                                </div>-->
                                    <!--                                            </div>-->

                                    <!--                                            <div class="row" style="margin:15px;">-->
                                    <!--                                                <label for="guardian_office"-->
                                    <!--                                                       class="col-sm-2 control-label">Office</label>-->
                                    <!--                                                <div class="col-sm-4">-->
                                    <!--                                                    <input placeholder=""-->
                                    <!--                                                           class="form-control border-form upper"-->
                                    <!--                                                           name="guardian_office" type="text"-->
                                    <!--                                                           id="guardian_office">-->
                                    <!--                                                </div>-->

                                    <!--                                                <label for="guardian_office_number"-->
                                    <!--                                                       class="col-sm-2 control-label">Office Number</label>-->
                                    <!--                                                <div class="col-sm-4">-->
                                    <!--                                                    <input placeholder=""-->
                                    <!--                                                           class="form-control border-form input-mask-mobile"-->
                                    <!--                                                           name="guardian_office_number" type="text"-->
                                    <!--                                                           id="guardian_office_number">-->
                                    <!--                                                </div>-->
                                    <!--                                            </div>-->

                                    <!--                                            <div class="row" style="margin:15px;">-->
                                    <!--                                                <label for="guardian_residence_number"-->
                                    <!--                                                       class="col-sm-2 control-label">Residence-->
                                    <!--                                                    Number</label>-->
                                    <!--                                                <div class="col-sm-4">-->
                                    <!--                                                    <input class="form-control border-form input-mask-phone"-->
                                    <!--                                                           name="guardian_residence_number" type="text"-->
                                    <!--                                                           id="guardian_residence_number">-->
                                    <!--                                                </div>-->

                                    <!--                                                <label for="guardian_mobile_1"-->
                                    <!--                                                       class="col-sm-2 control-label">Mobile 1</label>-->
                                    <!--                                                <div class="col-sm-4">-->
                                    <!--                                                    <input class="form-control border-form input-mask-mobile"-->
                                    <!--                                                           required="" name="guardian_mobile_1" type="text"-->
                                    <!--                                                           id="guardian_mobile_1">-->
                                    <!--                                                </div>-->
                                    <!--                                            </div>-->
                                    <!--                                            <div class="row" style="margin:15px;">-->
                                    <!--                                                <label for="guardian_mobile_2"-->
                                    <!--                                                       class="col-sm-2 control-label">Mobile 2</label>-->
                                    <!--                                                <div class="col-sm-4">-->
                                    <!--                                                    <input class="form-control border-form input-mask-mobile"-->
                                    <!--                                                           name="guardian_mobile_2" type="text"-->
                                    <!--                                                           id="guardian_mobile_2">-->
                                    <!--                                                </div>-->

                                    <!--                                                <label for="guardian_email"-->
                                    <!--                                                       class="col-sm-2 control-label">E-mail</label>-->
                                    <!--                                                <div class="col-sm-4">-->
                                    <!--                                                    <input class="form-control border-form"-->
                                    <!--                                                           name="guardian_email" type="text"-->
                                    <!--                                                           id="guardian_email">-->
                                    <!--                                                </div>-->
                                    <!--                                            </div>-->

                                    <!--                                            <div class="row" style="margin:15px;">-->
                                    <!--                                                <label for="guardian_relation"-->
                                    <!--                                                       class="col-sm-2 control-label">Relation</label>-->
                                    <!--                                                <div class="col-sm-4">-->
                                    <!--                                                    <input class="form-control border-form upper"-->
                                    <!--                                                           required="" name="guardian_relation" type="text"-->
                                    <!--                                                           id="guardian_relation">-->
                                    <!--                                                </div>-->

                                    <!--                                                <label for="guardian_address"-->
                                    <!--                                                       class="col-sm-2 control-label">Guardian-->
                                    <!--                                                    Address</label>-->
                                    <!--                                                <div class="col-sm-4">-->
                                    <!--                                                    <input class="form-control border-form upper"-->
                                    <!--                                                           required="" name="guardian_address" type="text"-->
                                    <!--                                                           id="guardian_address">-->
                                    <!--                                                </div>-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->
                                    <!--                                </div>-->

                                    <!--                                <div id="academicInfo" class="tab-pane">-->
                                    <!--                                    <h4 class="header large lighter blue"><i class="fa fa-university"-->
                                    <!--                                                                             aria-hidden="true"></i>Academic-->
                                    <!--                                        Info</h4>-->
                                    <!--                                    <div class="row">-->
                                    <!--                                        <table id="responsive"-->
                                    <!--                                               class="table table-striped table-bordered table-hover">-->
                                    <!--                                            <thead>-->
                                    <!--                                            <tr>-->
                                    <!--                                                <th width="10%">Sort</th>-->
                                    <!--                                                <th width="80%">Detail</th>-->
                                    <!--                                                <th width="10%">-->
                                    <!--                                                    <button type="button"-->
                                    <!--                                                            class="btn btn-xs btn-primary pull-right waves-effect waves-light"-->
                                    <!--                                                            id="load-academicinfo-html">-->
                                    <!--                                                        <i class="fa fa-plus" aria-hidden="true"></i>-->
                                    <!--                                                        New Academic Info-->
                                    <!--                                                    </button>-->
                                    <!--                                                </th>-->
                                    <!--                                            </tr>-->
                                    <!--                                            </thead>-->

                                    <!--                                            <tbody id="academicInfo_wrapper">-->


                                    <!--                                            </tbody>-->

                                    <!--                                        </table>-->
                                    <!--                                    </div>-->


                                    <!--                                </div>-->

                                    <!--                                <div id="profileimage" class="tab-pane">-->
                                    <!--                                    <h4 class="header large lighter blue"><i-->
                                    <!--                                            class="ace-icon glyphicon glyphicon-plus"></i>Profile-->
                                    <!--                                        Pictures</h4>-->
                                    <!--                                    <div class="row">-->
                                    <!--                                        <label for="student_main_image" class="col-md-2 control-label">Student-->
                                    <!--                                            Profile Picture</label>-->
                                    <!--                                        <div class="col-md-6">-->
                                    <!--                                            <input class="form-control border-form"-->
                                    <!--                                                   name="student_main_image" type="file"-->
                                    <!--                                                   id="student_main_image">-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="col-md-4 text-center">-->
                                    <!--                                            <img class="img-responsive" alt="Avatar"-->
                                    <!--                                                 src="http://viholdings.com.au/edu/public/assets/images/avatars/profile-pic.jpg"-->
                                    <!--                                                 width="100px">-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <!--                                    <br>-->
                                    <!--                                    <hr>-->
                                    <!--                                    <br>-->
                                    <!--                                    <div class="row">-->
                                    <!--                                        <label for="student_signature_main_image"-->
                                    <!--                                               class="col-md-2 control-label">Student Signature</label>-->
                                    <!--                                        <div class="col-md-6">-->
                                    <!--                                            <input class="form-control border-form"-->
                                    <!--                                                   name="student_signature_main_image" type="file"-->
                                    <!--                                                   id="student_signature_main_image">-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="col-md-4 text-center">-->
                                    <!--                                            <img class="img-responsive" alt="Avatar"-->
                                    <!--                                                 src="http://viholdings.com.au/edu/public/assets/images/avatars/profile-pic.jpg"-->
                                    <!--                                                 width="100px">-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <!--                                    <br>-->
                                    <!--                                    <hr>-->
                                    <!--                                    <br>-->
                                    <!--                                    <div class="row">-->
                                    <!--                                        <label for="father_main_image" class="col-md-2 control-label">Father-->
                                    <!--                                            Picture</label>-->
                                    <!--                                        <div class="col-md-6">-->
                                    <!--                                            <input class="form-control border-form"-->
                                    <!--                                                   name="father_main_image" type="file"-->
                                    <!--                                                   id="father_main_image">-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="col-md-4 text-center">-->
                                    <!--                                            <img id="" class="img-responsive" alt="Avatar"-->
                                    <!--                                                 src="http://viholdings.com.au/edu/public/assets/images/avatars/profile-pic.jpg"-->
                                    <!--                                                 width="100px">-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <!--                                    <br>-->
                                    <!--                                    <hr>-->
                                    <!--                                    <br>-->
                                    <!--                                    <div class="row">-->
                                    <!--                                        <label for="mother_main_image" class="col-md-2 control-label">Mother-->
                                    <!--                                            Picture</label>-->
                                    <!--                                        <div class="col-md-6">-->
                                    <!--                                            <input class="form-control border-form"-->
                                    <!--                                                   name="mother_main_image" type="file"-->
                                    <!--                                                   id="mother_main_image">-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="col-md-4 text-center">-->
                                    <!--                                            <img id="" class="img-responsive" alt="Avatar"-->
                                    <!--                                                 src="http://viholdings.com.au/edu/public/assets/images/avatars/profile-pic.jpg"-->
                                    <!--                                                 width="100px">-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <!--                                    <br>-->
                                    <!--                                    <hr>-->
                                    <!--                                    <br>-->
                                    <!--                                    <div class="row">-->
                                    <!--                                        <label for="guardian_main_image" class="col-md-2 control-label">Guardian-->
                                    <!--                                            Picture</label>-->
                                    <!--                                        <div class="col-md-6">-->
                                    <!--                                            <input class="form-control border-form"-->
                                    <!--                                                   name="guardian_main_image" type="file"-->
                                    <!--                                                   id="guardian_main_image">-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="col-md-4 text-center">-->
                                    <!--                                            <img id="" class="img-responsive" alt="Avatar"-->
                                    <!--                                                 src="http://viholdings.com.au/edu/public/assets/images/avatars/profile-pic.jpg"-->
                                    <!--                                                 width="100px">-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <!--                                    <br>-->
                                    <!--                                    <br></div>-->
                                    <!--                    </div>-->

                                    <!--                    <div class="space-4"></div>-->

                                    <!--                    <div class="hr hr-24"></div>-->
                                </div>
                            </vs-tab>
                        </vs-tabs>
                    </div>
                    <!--                <div class="clearfix form-actions">-->
                    <!--                    <div class="col-md-12 align-right">-->
                    <!--                        <button class="btn waves-effect waves-light" type="reset">-->
                    <!--                            <i class="fa fa-undo bigger-110"></i>-->
                    <!--                            Reset-->
                    <!--                        </button>-->

                    <!--                        <button class="btn btn-primary waves-effect waves-light" type="submit"-->
                    <!--                                value="Save" name="add_student" id="add-student">-->
                    <!--                            <i class="fa fa-save bigger-110"></i>-->
                    <!--                            Save-->
                    <!--                        </button>-->

                    <!--                        <button class="btn btn-success waves-effect waves-light" type="submit"-->
                    <!--                                value="Save" name="add_student_another"-->
                    <!--                                id="add-student-another">-->
                    <!--                            <i class="fa fa-save bigger-110"></i>-->
                    <!--                            <i class="fa fa-plus bigger-110"></i>-->
                    <!--                            Save And Add Another-->
                    <!--                        </button>-->
                    <!--                    </div>-->
                    <!--                </div>-->

                    <!--                <div class="hr hr-24"></div>-->

                </div>
            </vs-card>
        </div>
    </div>
</template>

<script>
    export default {
        name: "details",
        data() {
            return {
                student: {},
                faculties: [],
                semester: [],
                batch: [],
                academic_status: []
            }
        }
    }
</script>

<style scoped>

</style>
