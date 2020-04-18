<template>
    <div class="row">
        <div class="col-md-12 mb-2">
            <h2 class="pageTitle">Student Manager</h2>
        </div>
        <student-navigation></student-navigation>
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
                        <vs-tabs class="custom-tab mt-2">
                            <vs-tab label="General Information">
                                <div>
                                                <span class="badge badge badge-danger badge-pill mr-2">
													Red mark input are required. </span>
                                    <vs-divider/>
                                    <div class="row my-2">
                                        <div class="col-md-2">
                                            REG.NO.
                                        </div>
                                        <div class="col-md-4">
                                            <vs-input v-model="student.reg_no" :danger="error.reg_no!==undefined"/>
                                            <p v-if="error.reg_no!==undefined" class="text-danger">
                                                {{ error.reg_no[0] }}
                                            </p>
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
                                            <select v-model="student.faculty" class="form-control"
                                                    :danger="error.faculty!==undefined">
                                                <option :value="faculty.id" v-for="faculty in faculties">
                                                    {{faculty.value}}
                                                </option>
                                            </select>
                                            <p v-if="error.faculty!==undefined" class="text-danger">
                                                {{ error.faculty[0] }}
                                            </p>
                                        </div>
                                        <div class="col-md-2">
                                            Sem./Sec.
                                        </div>
                                        <div class="col-md-3">
                                            <select v-model="student.semester" class="form-control"
                                                    :danger="error.semester!==undefined">
                                                <option :value="semester.id" v-for="semester in semesters">
                                                    {{semester.value}}
                                                </option>
                                            </select>
                                            <p v-if="error.semester!==undefined" class="text-danger">
                                                {{ error.semester[0] }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-md-2">
                                            Batch
                                        </div>
                                        <div class="col-md-5">
                                            <select v-model="student.batch" class="form-control"
                                                    :danger="error.batch!==undefined">
                                                <option :value="batch.id" v-for="batch in batches">
                                                    {{batch.value}}
                                                </option>
                                            </select>

                                            <p v-if="error.batch!==undefined" class="text-danger">
                                                {{ error.batch[0] }}
                                            </p>
                                        </div>
                                        <div class="col-md-2">
                                            Status
                                        </div>
                                        <div class="col-md-3">
                                            <select v-model="student.academic_status" class="form-control">
                                                <option :value="academic_status.id"
                                                        v-for="academic_status in academic_statuses">
                                                    {{academic_status.value}}
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-md-3">
                                            NAME OF STUDENT
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="student.first_name"
                                                      :danger="error.first_name!==undefined"/>
                                            <p v-if="error.first_name!==undefined" class="text-danger">
                                                {{ error.first_name[0] }}
                                            </p>
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="student.middle_name"/>
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="student.last_name"
                                                      :danger="error.last_name!==undefined"/>
                                            <p v-if="error.last_name!==undefined" class="text-danger">
                                                {{ error.last_name[0] }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-md-2">
                                            Date Of Birth (yyyy-mm-dd)
                                        </div>
                                        <div class="col-md-2">
                                            <vs-input
                                                    v-model="student.date_of_birth"
                                                    v-mask="'####-##-##'"
                                                    :danger="error.date_of_birth!==undefined"/>
                                            <p v-if="error.date_of_birth!==undefined" class="text-danger">
                                                {{ error.date_of_birth[0] }}
                                            </p>
                                        </div>
                                        <div class="col-md-2">
                                            Gender
                                        </div>
                                        <div class="col-md-2">
                                            <v-select v-model="student.gender" :options="['MALE','FEMALE','OTHER']"
                                                      :danger="error.gender!==undefined"/>
                                            <p v-if="error.gender!==undefined" class="text-danger">
                                                {{ error.gender[0] }}
                                            </p>
                                        </div>
                                        <div class="col-md-2">
                                            Blood Group
                                        </div>
                                        <div class="col-md-2">
                                            <v-select v-model="student.blood_group"
                                                      :options="['A+','A-','B+','B-','AB+','AB-','O+','O-']"/>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-md-2">
                                            Religion
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="student.religion"/>
                                        </div>
                                        <div class="col-md-2">
                                            Caste
                                        </div>
                                        <div class="col-md-5">
                                            <vs-input v-model="student.caste"/>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-md-2">
                                            Nationality
                                        </div>
                                        <div class="col-md-2">
                                            <vs-input v-model="student.nationality"
                                                      :danger="error.nationality!==undefined"/>
                                            <p v-if="error.nationality!==undefined" class="text-danger">
                                                {{ error.nationality[0] }}
                                            </p>
                                        </div>
                                        <div class="col-md-2">
                                            Mother Tongue
                                        </div>
                                        <div class="col-md-2">
                                            <vs-input v-model="student.mother_tongue"/>
                                        </div>
                                        <div class="col-md-2">
                                            E-mail
                                        </div>
                                        <div class="col-md-2">
                                            <vs-input v-model="student.email"/>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-md-2">
                                            Extra Info
                                        </div>
                                        <div class="col-md-10">
                                            <vs-textarea v-model="student.extra_info"/>
                                        </div>
                                    </div>

                                    <div class="badge badge badge-primary badge-pill  mt-2">Contact
                                    </div>
                                    <vs-divider/>
                                    <div class="row my-2">
                                        <div class="col-md-1">
                                            Phone
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="student.home_phone"/>
                                        </div>
                                        <div class="col-md-1">
                                            Mobile1
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="student.mobile_1"/>
                                        </div>
                                        <div class="col-md-1">
                                            Mobile2
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="student.mobile_2"/>
                                        </div>
                                    </div>
                                    <div class="badge badge badge-primary badge-pill  mt-2">Permanent Address
                                    </div>
                                    <vs-divider/>
                                    <div class="row my-2">
                                        <div class="col-md-1">
                                            Address
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="student.address" :danger="error.address!==undefined"/>
                                            <p v-if="error.address!==undefined" class="text-danger">
                                                {{ error.address[0] }}
                                            </p>
                                        </div>
                                        <div class="col-md-1">
                                            State
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="student.state" :danger="error.state!==undefined"/>
                                            <p v-if="error.state!==undefined" class="text-danger">
                                                {{ error.state[0] }}
                                            </p>
                                        </div>
                                        <div class="col-md-1">
                                            Country
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="student.country" :danger="error.country!==undefined"/>
                                            <p v-if="error.country!==undefined" class="text-danger">
                                                {{ error.country[0] }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="badge badge badge-primary badge-pill  mt-2">Temporary Address
                                    </div>
                                    <vs-checkbox
                                            @change="copyPermanent()"
                                            v-model="copyPerm"
                                            class="mt-2"
                                    >
                                        Temporary Address Same As Permanent Address
                                    </vs-checkbox>
                                    <vs-divider/>
                                    <div class="row my-2">
                                        <div class="col-md-1">
                                            Address
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="student.temp_address"/>
                                        </div>
                                        <div class="col-md-1">
                                            State
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="student.temp_state"/>
                                        </div>
                                        <div class="col-md-1">
                                            Country
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="student.temp_country"/>
                                        </div>
                                    </div>
                                    <h4 class="mt-2">Parent Details</h4>
                                    <div class="badge badge badge-primary badge-pill  mt-2">Grand Father's Detail
                                    </div>
                                    <vs-divider/>

                                    <div class="row my-2">
                                        <div class="col-md-3">
                                            NAME OF GRAND FATHER
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="student.grandfather_first_name"/>
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="student.grandfather_middle_name"/>
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="student.grandfather_last_name"/>
                                        </div>
                                    </div>
                                    <div class="badge badge badge-primary badge-pill  mr-2">Father's Detail
                                    </div>
                                    <vs-divider class="mx-3"/>

                                    <div class="row my-2">
                                        <div class="col-md-3">
                                            NAME OF FATHER
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="student.father_first_name"/>
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="student.father_middle_name"/>
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="student.father_last_name"/>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-md-2">
                                            Eligibility
                                        </div>
                                        <div class="col-md-4">
                                            <vs-input v-model="student.father_eligibility"/>
                                        </div>
                                        <div class="col-md-2">
                                            Occupation
                                        </div>
                                        <div class="col-md-4">
                                            <vs-input v-model="student.father_occupation"/>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-md-2">
                                            Office
                                        </div>
                                        <div class="col-md-4">
                                            <vs-input v-model="student.father_office"/>
                                        </div>
                                        <div class="col-md-2">
                                            Office Number
                                        </div>
                                        <div class="col-md-4">
                                            <vs-input v-model="student.father_office_number"/>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-md-2">
                                            Residence Number
                                        </div>
                                        <div class="col-md-4">
                                            <vs-input v-model="student.father_residence_number"/>
                                        </div>
                                        <div class="col-md-2">
                                            Mobile 1
                                        </div>
                                        <div class="col-md-4">
                                            <vs-input v-model="student.father_mobile_1"/>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-md-2">
                                            Mobile 2
                                        </div>
                                        <div class="col-md-4">
                                            <vs-input v-model="student.father_mobile_2"/>
                                        </div>
                                        <div class="col-md-2">
                                            E-mail
                                        </div>
                                        <div class="col-md-4">
                                            <vs-input v-model="student.father_email"/>
                                        </div>
                                    </div>
                                    <div class="badge badge badge-primary badge-pill  mt-2">Mother's Detail
                                    </div>
                                    <vs-divider/>

                                    <div class="row my-2">
                                        <div class="col-md-3">
                                            NAME OF MOTHER
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="student.mother_first_name"/>
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="student.mother_middle_name"/>
                                        </div>
                                        <div class="col-md-3">
                                            <vs-input v-model="student.mother_last_name"/>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-md-2">
                                            Eligibility
                                        </div>
                                        <div class="col-md-4">
                                            <vs-input v-model="student.mother_eligibility"/>
                                        </div>
                                        <div class="col-md-2">
                                            Occupation
                                        </div>
                                        <div class="col-md-4">
                                            <vs-input v-model="student.mother_occupation"/>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-md-2">
                                            Office
                                        </div>
                                        <div class="col-md-4">
                                            <vs-input v-model="student.mother_office"/>
                                        </div>
                                        <div class="col-md-2">
                                            Office Number
                                        </div>
                                        <div class="col-md-4">
                                            <vs-input v-model="student.mother_office_number"/>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-md-2">
                                            Residence Number
                                        </div>
                                        <div class="col-md-4">
                                            <vs-input v-model="student.mother_residence_number"/>
                                        </div>
                                        <div class="col-md-2">
                                            Mobile 1
                                        </div>
                                        <div class="col-md-4">
                                            <vs-input v-model="student.mother_mobile_1"/>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-md-2">
                                            Mobile 2
                                        </div>
                                        <div class="col-md-4">
                                            <vs-input v-model="student.mother_mobile_2"/>
                                        </div>
                                        <div class="col-md-2">
                                            E-mail
                                        </div>
                                        <div class="col-md-4">
                                            <vs-input v-model="student.mother_email"/>
                                        </div>
                                    </div>
                                    <div class="badge badge badge-primary badge-pill  my-2">Guardian's Detail
                                    </div>
                                    <br>
                                    <vs-radio v-model="whoGuardian"
                                              vs-value="father"
                                              @input="assignGuardian">Father is Guardian
                                    </vs-radio>
                                    <vs-radio v-model="whoGuardian"
                                              vs-value="mother"
                                              @input="assignGuardian">Mother is Guardian
                                    </vs-radio>
                                    <vs-radio v-model="whoGuardian"
                                              vs-value="other"
                                              @input="assignGuardian">Other's
                                    </vs-radio>
                                    <vs-radio v-model="whoGuardian"
                                              vs-value="link"
                                              @input="assignGuardian">Link Guardian
                                    </vs-radio>
                                    <vs-divider/>
                                    <div v-if="whoGuardian!='link'">
                                        <div class="row my-2">
                                            <div class="col-md-3">
                                                NAME OF Guardian
                                            </div>
                                            <div class="col-md-3">
                                                <vs-input v-model="student.guardian_first_name"/>
                                            </div>
                                            <div class="col-md-3">
                                                <vs-input v-model="student.guardian_middle_name"/>
                                            </div>
                                            <div class="col-md-3">
                                                <vs-input v-model="student.guardian_last_name"/>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-2">
                                                Eligibility
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="student.guardian_eligibility"/>
                                            </div>
                                            <div class="col-md-2">
                                                Occupation
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="student.guardian_occupation"/>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-2">
                                                Office
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="student.guardian_office"/>
                                            </div>
                                            <div class="col-md-2">
                                                Office Number
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="student.guardian_office_number"/>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-2">
                                                Residence Number
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="student.guardian_residence_number"/>
                                            </div>
                                            <div class="col-md-2">
                                                Mobile 1
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="student.guardian_mobile_1"/>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-2">
                                                Mobile 2
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="student.guardian_mobile_2"/>
                                            </div>
                                            <div class="col-md-2">
                                                E-mail
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="student.guardian_email"/>
                                            </div>
                                        </div>
                                        <div class="row my-2">
                                            <div class="col-md-2">
                                                Relation
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="student.guardian_relation"/>
                                            </div>
                                            <div class="col-md-2">
                                                Guardian Address
                                            </div>
                                            <div class="col-md-4">
                                                <vs-input v-model="student.guardian_address"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div v-else class="row">
                                        <div class="col-md-6">
                                            Find Guardian Using Name | Mobile Number | Email & Click on Link Now
                                            <v-select v-model="student.guardian_link_id"
                                                      :options="guardians"
                                                      placeholder="Select Guardian"
                                            />
                                        </div>

                                    </div>

                                </div>
                            </vs-tab>
                            <vs-tab label="Academic Info">
                                <div>
                                    <h4>
                                        <i class="fa fa-university" aria-hidden="true"></i>
                                        Academic Info
                                    </h4>
                                    <div>
                                        <div class="table-responsive mt-4 ">
                                            <table class="table  table-striped">
                                                <thead>
                                                <tr>
                                                    <th class="w-16 align-top">
                                                        Sort
                                                    </th>
                                                    <th class="align-top">
                                                        Detail
                                                    </th>
                                                    <th class="w-16 align-top">
                                                        <vs-button @click="addRow" class="my-round">
                                                            New
                                                        </vs-button>
                                                    </th>
                                                </tr>

                                                </thead>
                                                <draggable v-model="student.academicList" tag="tbody">
                                                    <tr :key="i" v-for="(tr, i) in academicList">
                                                        <td class="w-16 align-middle text-center">
                                                            <vs-button class="my-round">
                                                                <i class="fa fa-arrows"></i>
                                                            </vs-button>
                                                        </td>

                                                        <td>
                                                            <div class="striped-td">
                                                                <div class="row">
                                                                    <div class="col-md-4">Institution</div>
                                                                    <div class="col-md-8">
                                                                        <vs-input v-model="tr.institution">
                                                                        </vs-input>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">Board/Training</div>
                                                                    <div class="col-md-8">
                                                                        <vs-input v-model="tr.board">
                                                                        </vs-input>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">Pass Year</div>
                                                                    <div class="col-md-8">
                                                                        <vs-input v-model="tr.pass_year">
                                                                        </vs-input>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">Symbol Number</div>
                                                                    <div class="col-md-8">
                                                                        <vs-input v-model="tr.symbol_no">
                                                                        </vs-input>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">Percentage</div>
                                                                    <div class="col-md-8">
                                                                        <vs-input v-model="tr.percentage">
                                                                        </vs-input>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">Division/Grade</div>
                                                                    <div class="col-md-8">
                                                                        <vs-input v-model="tr.division_grade">
                                                                        </vs-input>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">Major Subject</div>
                                                                    <div class="col-md-8">
                                                                        <vs-input v-model="tr.major_subject">
                                                                        </vs-input>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">Remark</div>
                                                                    <div class="col-md-8">
                                                                        <vs-input v-model="tr.remarks">
                                                                        </vs-input>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </td>
                                                        <td class="w-16 align-middle text-center">
                                                            <vs-button class="rounded"
                                                                       color="danger"
                                                                       @click="removeList(i)">
                                                                <i class="fa fa-trash"></i>
                                                            </vs-button>
                                                        </td>


                                                    </tr>
                                                </draggable>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </vs-tab>
                            <vs-tab label="Profile Images">
                                <h4>Profile Pictures</h4>
                                <div class="row">
                                    <div class="col-md-3">Student Profile Picture</div>
                                    <div class="col-md-5">
                                        <input type="file"
                                               id="student_main_image"
                                               ref="student_main_image"
                                               class="form-control">
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-center">
                                        <img class="img-responsive"
                                             width="100px"
                                             :src="student.student_main_image"
                                             v-if="student.student_main_image"/>
                                        <img class="img-responsive"
                                             width="100px"
                                             src="../../../../../assets/images/profile-default.jpg"
                                             v-else/>
                                    </div>
                                </div>
                                <vs-divider></vs-divider>
                                <div class="row">
                                    <div class="col-md-3">Student Signature</div>
                                    <div class="col-md-5">
                                        <input type="file"
                                               id="student_signature_main_image"
                                               ref="student_signature_main_image"
                                               class="form-control">
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-center">
                                        <img class="img-responsive"
                                             width="100px"
                                             :src="student.student_signature_main_image"
                                             v-if="student.student_signature_main_image"/>
                                        <img class="img-responsive"
                                             width="100px"
                                             src="../../../../../assets/images/profile-default.jpg"
                                             v-else/>
                                    </div>
                                </div>
                                <vs-divider></vs-divider>
                                <div class="row">
                                    <div class="col-md-3">Father Picture</div>
                                    <div class="col-md-5">
                                        <input type="file"
                                               id="father_main_image"
                                               class="form-control"
                                               ref="father_main_image">
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-center">
                                        <img class="img-responsive"
                                             width="100px"
                                             :src="student.father_main_image"
                                             v-if="student.father_main_image"/>
                                        <img class="img-responsive"
                                             width="100px"
                                             src="../../../../../assets/images/profile-default.jpg"
                                             v-else/>
                                    </div>
                                </div>
                                <vs-divider></vs-divider>
                                <div class="row">
                                    <div class="col-md-3">Mother Picture</div>
                                    <div class="col-md-5">
                                        <input type="file"
                                               class="form-control"
                                               id="mother_main_image"
                                               ref="mother_main_image">
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-center">
                                        <img class="img-responsive"
                                             width="100px"
                                             :src="student.mother_main_image"
                                             v-if="student.mother_main_image"/>
                                        <img class="img-responsive"
                                             width="100px"
                                             src="../../../../../assets/images/profile-default.jpg"
                                             v-else/>
                                    </div>
                                </div>
                                <vs-divider></vs-divider>
                                <div class="row">
                                    <div class="col-md-3">Guardian Picture</div>
                                    <div class="col-md-5">
                                        <input type="file"
                                                  id="guardian_main_image"
                                                  ref="guardian_main_image">
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-center">
                                        <img class="img-responsive"
                                             width="100px"
                                             :src="student.guardian_main_image"
                                             v-if="student.guardian_main_image"/>
                                        <img class="img-responsive"
                                             width="100px"
                                             src="../../../../../assets/images/profile-default.jpg"
                                             v-else/>
                                    </div>
                                </div>
                            </vs-tab>
                        </vs-tabs>
                        <vs-divider></vs-divider>
                        <div class="row mx-0">
                            <vs-button class="my-round mx-2" color="warning">Reset</vs-button>
                            <vs-button class="my-round mx-2" @click="postData()">Save</vs-button>
                            <vs-button class="my-round mx-2" color="#28c76f">Save And Add Another</vs-button>
                        </div>
                    </div>

                </div>
            </vs-card>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                student: {
                    reg_no: '',
                    first_name: '',
                    middle_name: '',
                    last_name: ''
                },
                faculties: [],
                semesters: [],
                batches: [],
                academic_statuses: [],
                copyPerm: false,
                notification: '',
                whoGuardian: '',
                guardian: null,
                guardians: [],
                academicList: [],
                error: []

            }
        },
        created() {
            this.$http.get('/json/student/registration').then(res => {
                this.academic_statuses = this.$root.objectToArray(res.data.academic_status)
                this.batches = this.$root.objectToArray(res.data.batch)
                this.faculties = this.$root.objectToArray(res.data.faculties)
                this.semesters = this.$root.objectToArray(res.data.semester)
            })
        },
        methods: {
            postData() {
                let data = new FormData();

                let student_main_image = document.querySelector('#student_main_image');
                if (student_main_image) {
                    data.append("student_main_image", student_main_image.files[0]);
                }
                let student_signature_main_image = document.querySelector('#student_signature_main_image');
                if (student_signature_main_image) {
                    data.append("student_signature_main_image", student_signature_main_image.files[0]);
                }
                let father_main_image = document.querySelector('#father_main_image');
                if (father_main_image) {
                    data.append("father_main_image", father_main_image.files[0]);
                }
                let mother_main_image = document.querySelector('#mother_main_image');
                if (mother_main_image) {
                    data.append("mother_main_image", mother_main_image.files[0]);
                }
                let guardian_main_image = document.querySelector('#guardian_main_image');
                if (guardian_main_image) {
                    data.append("guardian_main_image", guardian_main_image.files[0]);
                }

                for (let key in this.student) {
                    data.append(key, this.student[key])
                }
                this.$http.post('/json/student/register', this.student)
                    .then(res => {
                        console.log(res)
                    })
                    .catch(err => {
                        if (err.response) {
                            this.error = err.response.data.errors
                        }
                    })
            },
            copyPermanent() {
                if (this.copyPerm) {
                    this.student.temp_address = this.student.address,
                        this.student.temp_state = this.student.state,
                        this.student.temp_country = this.student.country
                } else {
                    this.student.temp_address = '',
                        this.student.temp_state = '',
                        this.student.temp_country = ''
                }

            },
            assignGuardian() {
                if (this.whoGuardian == 'father') {
                    this.student.guardian_first_name = this.student.father_first_name;
                    this.student.guardian_middle_name = this.student.father_middle_name;
                    this.student.guardian_last_name = this.student.father_last_name;
                    this.student.guardian_eligibility = this.student.father_eligibility;
                    this.student.guardian_occupation = this.student.father_occupation;
                    this.student.guardian_office = this.student.father_office;
                    this.student.guardian_office_number = this.student.father_office_number;
                    this.student.guardian_residence_number = this.student.father_residence_number;
                    this.student.guardian_mobile_1 = this.student.father_mobile_1;
                    this.student.guardian_mobile_2 = this.student.father_mobile_2;
                    this.student.guardian_email = this.student.father_email;
                    this.student.guardian_relation = 'Father'
                } else if (this.whoGuardian == 'mother') {
                    this.student.guardian_first_name = this.student.mother_first_name;
                    this.student.guardian_middle_name = this.student.mother_middle_name;
                    this.student.guardian_last_name = this.student.mother_last_name;
                    this.student.guardian_eligibility = this.student.mother_eligibility;
                    this.student.guardian_occupation = this.student.mother_occupation;
                    this.student.guardian_office = this.student.mother_office;
                    this.student.guardian_office_number = this.student.mother_office_number;
                    this.student.guardian_residence_number = this.student.mother_residence_number;
                    this.student.guardian_mobile_1 = this.student.mother_mobile_1;
                    this.student.guardian_mobile_2 = this.student.mother_mobile_2;
                    this.student.guardian_email = this.student.mother_email;
                    this.student.guardian_relation = 'MOTHER'
                } else {
                    this.student.guardian_first_name = '';
                    this.student.guardian_middle_name = '';
                    this.student.guardian_last_name = '';
                    this.student.guardian_eligibility = '';
                    this.student.guardian_occupation = '';
                    this.student.guardian_office = '';
                    this.student.guardian_office_number = '';
                    this.student.guardian_residence_number = '';
                    this.student.guardian_mobile_1 = '';
                    this.student.guardian_mobile_2 = '';
                    this.student.guardian_email = '';
                    this.student.guardian_relation = ''
                }
            },
            addRow() {
                this.academicList.push({
                    institution: '',
                    board: '',
                    pass_year: '',
                    symbol_no: '',
                    percentage: '',
                    division_grade: '',
                    major_subject: '',
                    remarks: ''
                })
            },
            removeList(idx) {
                this.academicList.splice(idx, 1)
            },
        }
    }
</script>

<style scoped>

</style>
