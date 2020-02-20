<style>

.profile-user-info {
    display: table;
    width: 98%;
    width: calc(100% - 24px);
    margin: 0 auto
}

.profile-info-row {
    display: table-row
}

.profile-info-name,
.profile-info-value {
    display: table-cell;
    border-top: 1px dotted #D5E4F1
}

.profile-info-name {
    text-align: right;
    padding: 6px 10px 6px 4px;
    font-weight: 400;
    color: #667E99;
    background-color: transparent;
    width: 150px;
    vertical-align: middle
}

.profile-info-value {
    padding: 6px 4px 6px 6px
}

.profile-info-value>span+span:before {
    display: inline;
    content: ",";
    margin-left: 1px;
    margin-right: 3px;
    color: #666;
    border-bottom: 1px solid #FFF
}

.profile-info-value>span+span.editable-container:before {
    display: none
}

.profile-info-row:first-child .profile-info-name,
.profile-info-row:first-child .profile-info-value {
    border-top: none
}

.profile-user-info-striped {
    border: 1px solid #DCEBF7
}

.profile-user-info-striped .profile-info-name {
    color: #336199;
    background-color: #EDF3F4;
    border-top: 1px solid #F7FBFF
}

.profile-user-info-striped .profile-info-value {
    border-top: 1px dotted #DCEBF7;
    padding-left: 12px
}

.profile-picture {
    border: 1px solid #CCC;
    background-color: #FFF;
    padding: 4px;
    display: inline-block;
    max-width: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    box-shadow: 1px 1px 1px rgba(0, 0, 0, .15)
}

.dd-empty,
.dd-handle,
.dd-placeholder,
.dd2-content {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box
}

.profile-activity {
    padding: 10px 4px;
    border-bottom: 1px dotted #D0D8E0;
    position: relative;
    border-left: 1px dotted #FFF;
    border-right: 1px dotted #FFF
}

.profile-activity:first-child {
    border-top: 1px dotted transparent
}

.profile-activity:first-child:hover {
    border-top-color: #D0D8E0
}

.profile-activity:hover {
    background-color: #F4F9FD;
    border-left: 1px dotted #D0D8E0;
    border-right: 1px dotted #D0D8E0
}

.profile-activity img {
    border: 2px solid #C9D6E5;
    border-radius: 100%;
    max-width: 40px;
    margin-right: 10px;
    margin-left: 0;
    box-shadow: none
}

.profile-activity .thumbicon {
    background-color: #74ABD7;
    display: inline-block;
    border-radius: 100%;
    width: 38px;
    height: 38px;
    color: #FFF;
    font-size: 18px;
    text-align: center;
    line-height: 38px;
    margin-right: 10px;
    margin-left: 0;
    text-shadow: none!important
}

.profile-activity .time {
    display: block;
    margin-top: 4px;
    color: #777
}

.profile-activity a.user {
    font-weight: 700;
    color: #9585BF
}

.profile-activity .tools {
    position: absolute;
    right: 12px;
    bottom: 8px;
    display: none
}

.profile-activity:hover .tools {
    display: block
}


.profile-contact-links {
    padding: 4px 2px 5px;
    border: 1px solid #E0E2E5;
    background-color: #F8FAFC
}

.btn-link:hover .ace-icon {
    text-decoration: none!important
}

.profile-social-links>a:hover>.ace-icon,
.profile-users .memberdiv .name a:hover .ace-icon,
.profile-users .memberdiv .tools>a:hover {
    text-decoration: none
}

.profile-social-links>a {
    text-decoration: none;
    margin: 0 1px
}

.profile-skills .progress {
    height: 26px;
    margin-bottom: 2px;
    background-color: transparent
}

.profile-skills .progress .progress-bar {
    line-height: 26px;
    font-size: 13px;
    font-weight: 700;
    font-family: "Open Sans";
    padding: 0 8px
}

.profile-users .user {
    display: block;
    position: static;
    text-align: center;
    width: auto
}

.profile-users .user img {
    padding: 2px;
    border-radius: 100%;
    border: 1px solid #AAA;
    max-width: none;
    width: 64px;
    -webkit-transition: all .1s;
    -o-transition: all .1s;
    transition: all .1s
}

.profile-users .user img:hover {
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .33);
    box-shadow: 0 0 1px 1px rgba(0, 0, 0, .33)
}

.profile-users .memberdiv {
    background-color: #FFF;
    width: 100px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    border: none;
    text-align: center;
    margin: 0 8px 24px
}

.profile-users .memberdiv .body {
    display: inline-block;
    margin: 8px 0 0
}

.profile-users .memberdiv .popover {
    visibility: hidden;
    min-width: 0;
    max-height: 0;
    max-width: 0;
    margin-left: 0;
    margin-right: 0;
    top: -5%;
    left: auto;
    right: auto;
    opacity: 0;
    display: none;
    position: absolute;
    -webkit-transition: opacity .2s linear 0s, visibility 0s linear .2s, max-height 0s linear .2s, max-width 0s linear .2s, min-width 0s linear .2s;
    -o-transition: opacity .2s linear 0s, visibility 0s linear .2s, max-height 0s linear .2s, max-width 0s linear .2s, min-width 0s linear .2s;
    transition: opacity .2s linear 0s, visibility 0s linear .2s, max-height 0s linear .2s, max-width 0s linear .2s, min-width 0s linear .2s
}

.profile-users .memberdiv .popover.right {
    left: 100%;
    right: auto;
    display: block
}

.profile-users .memberdiv .popover.left {
    left: auto;
    right: 100%;
    display: block
}

.profile-users .memberdiv>:first-child:hover .popover {
    visibility: visible;
    opacity: 1;
    z-index: 1060;
    max-height: 250px;
    max-width: 250px;
    min-width: 150px;
    -webkit-transition-delay: 0s;
    -moz-transition-delay: 0s;
    -o-transition-delay: 0s;
    transition-delay: 0s
}

.profile-users .memberdiv .tools {
    position: static;
    display: block;
    width: 100%;
    margin-top: 2px
}

.profile-users .memberdiv .tools>a {
    margin: 0 2px
}

</style>
<div class="row">
    <div class="col-md-12 align-right hidden-print m-1">
        <a href="{{ route('user-student.profile.edit', ['id' => encrypt($data['student']->id)]) }}" class="btn-primary btn-sm" >
            <i class="ace-icon fa fa-pencil"></i> Edit
        </a>
        &nbsp;|&nbsp;
        <a href="#" class="btn-primary btn-sm" onclick="window.print();">
            <i class="ace-icon fa fa-print"></i> Print
        </a>
    </div>

    <div class="col-xs-12 col-md-3 col-print-3">
        <div >
            <span class="profile-picture">
               @if($data['student']->student_image != '')
                    <img id="avatar" class="editable img-responsive" alt="{{ $data['student']->title }}" src="{{ asset('images'.DIRECTORY_SEPARATOR.$folder_name.DIRECTORY_SEPARATOR.$data['student']->student_image) }}" width="250px" />
                @else
                    <img id="avatar" class="editable img-responsive" alt="{{ $data['student']->title }}" src="{{ asset('assets/images/avatars/profile-pic.jpg') }}" />
                @endif
            </span>

            @if($data['student']->student_signature != '')
                <span class="profile-picture align-center">
                        <img class="editable img-responsive" alt="{{ $data['student']->title }}" src="{{ asset('images'.DIRECTORY_SEPARATOR.$folder_name.DIRECTORY_SEPARATOR.$data['student']->student_signature) }}" width="150px" />
                </span>
            @else

            @endif

            <div class="space-4"></div>
            {{--<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                <div class="inline position-relative">
                    <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                        <i class="ace-icon fa fa-circle light-green"></i>
                        &nbsp;
                        <span class="white">Alex M. Doe</span>
                    </a>

                    <ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
                        <li class="dropdown-header"> Change Status </li>

                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-circle green"></i>
                                &nbsp;
                                <span class="green">Available</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-circle red"></i>
                                &nbsp;
                                <span class="red">Busy</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-circle grey"></i>
                                &nbsp;
                                <span class="grey">Invisible</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>--}}

        </div>
    </div>
    <div class="col-xs-12 col-md-9 col-print-9">
        {{--<div class="center">
            <span class="btn btn-app btn-md btn-light no-hover">
                <span class="line-height-1 bigger-170 blue"> 1,411 </span>
                <br>
                <span class="line-height-1 mdaller-90"> Views </span>
            </span>
            <span class="btn btn-app btn-md btn-yellow no-hover">
                <span class="line-height-1 bigger-170"> 32 </span>
                <br>
                <span class="line-height-1 mdaller-90"> Followers </span>
            </span>
            <span class="btn btn-app btn-md btn-pink no-hover">
                <span class="line-height-1 bigger-170"> 4 </span>
                <br>
                <span class="line-height-1 mdaller-90"> Projects </span>
            </span>
            <span class="btn btn-app btn-md btn-grey no-hover">
                <span class="line-height-1 bigger-170"> 23 </span>
                <br>
                <span class="line-height-1 mdaller-90"> Reviews </span>
            </span>
            <span class="btn btn-app btn-md btn-success no-hover">
                <span class="line-height-1 bigger-170"> 7 </span>
                <br>
                <span class="line-height-1 mdaller-90"> Albums </span>
            </span>
            <span class="btn btn-app btn-md btn-primary no-hover">
                <span class="line-height-1 bigger-170"> 55 </span>
                <br>
                <span class="line-height-1 mdaller-90"> Contacts </span>
            </span>
        </div>--}}

        <div class="space-3"></div>
        <div class="label label-info label-xlg arrowed-in arrowed-right arrowed  m-1">{{ $data['student']->first_name.' '.
                    $data['student']->middle_name.' '.$data['student']->last_name }}</div>
        <div class="space-6"></div>
        <div class="profile-user-info profile-user-info-striped">
            <div class="profile-info-row">
                @if($data['student']->faculty !="")
                    <div class="profile-info-name"> Faculty: </div>
                    <div class="profile-info-value">
                        <span class="editable" id="faculty">{{  ViewHelper::getFacultyTitle( $data['student']->faculty ) }}</span>
                    </div>
                @endif
                @if($data['student']->semester != "")
                    <div class="profile-info-name"> Semester :</div>
                    <div class="profile-info-value">
                        <span class="editable" id="semester">{{  ViewHelper::getSemesterTitle( $data['student']->semester ) }}</span>
                    </div>
                @endif
            </div>
            <div class="profile-info-row">
                @if($data['student']->batch !="")
                    <div class="profile-info-name"> Batch: </div>
                    <div class="profile-info-value">
                        <span class="editable" id="faculty">{{  ViewHelper::getStudentBatchId( $data['student']->batch ) }}</span>
                    </div>
                @endif
            </div>

            <div class="profile-info-row">
                @if($data['student']->reg_no != "")
                    <div class="profile-info-name"> Reg. No.: </div>
                    <div class="profile-info-value">
                        <span class="editable" id="reg_no">{{ $data['student']->reg_no }}</span>
                    </div>
                @endif
                @if($data['student']->reg_date !="")
                    <div class="profile-info-name"> Reg. Date :</div>
                    <div class="profile-info-value">
                        <span class="editable" id="reg_date">{{ \Carbon\Carbon::parse($data['student']->reg_date)->format('d/m/Y')}}</span>
                    </div>
                @endif
            </div>


            <div class="profile-info-row">
                @if($data['student']->university_reg != "")
                    <div class="profile-info-name"> Univ.Reg.: </div>
                    <div class="profile-info-value">
                        <span class="editable" id="university_reg">{{ $data['student']->university_reg }}</span>
                    </div>
                @endif
                @if($data['student']->date_of_birth != "")
                    <div class="profile-info-name"> DOB : </div>
                    <div class="profile-info-value">
                        <span class="editable" id="date_of_birth">{{ \Carbon\Carbon::parse($data['student']->date_of_birth)->format('d/m/Y')}}</span>
                    </div>
                @endif
            </div>

            <div class="profile-info-row">
                @if($data['student']->gender != "")
                    <div class="profile-info-name"> Gender : </div>
                    <div class="profile-info-value">
                        <span class="editable" id="gender">{{ $data['student']->gender }}</span>
                    </div>
                @endif
                @if($data['student']->blood_group != "")
                    <div class="profile-info-name"> Blood Group : </div>
                    <div class="profile-info-value">
                        <span class="editable" id="blood_group">{{ $data['student']->blood_group }}</span>
                    </div>
                @endif
            </div>

            <div class="profile-info-row">
                @if($data['student']->religion !="")
                    <div class="profile-info-name"> Religion:</div>
                    <div class="profile-info-value">
                        <span class="editable" id="religion">{{ $data['student']->religion }}</span>
                    </div>
                @endif
                @if($data['student']->caste !="")
                    <div class="profile-info-name"> Caste : </div>
                    <div class="profile-info-value">
                        <span class="editable" id="caste">{{ $data['student']->caste }}</span>
                    </div>
                @endif
            </div>

            <div class="profile-info-row">
                @if($data['student']->nationality)
                    <div class="profile-info-name"> Nationality : </div>
                    <div class="profile-info-value">
                        <span class="editable" id="nationality">{{ $data['student']->nationality }}</span>
                    </div>
                @endif
                @if($data['student']->mother_tongue !="")
                    <div class="profile-info-name"> Mother Tongue: </div>
                    <div class="profile-info-value">
                        <span class="editable" id="mother_tongue">{{ $data['student']->mother_tongue }}</span>
                    </div>
                @endif
            </div>

            <div class="profile-info-row">
                @if($data['student']->email !="")
                    <div class="profile-info-name"> E-mail : </div>
                    <div class="profile-info-value">
                        <span class="editable" id="email">{{ $data['student']->email }}</span>
                    </div>
                @endif
                @if($data['student']->mobile_1 !="")
                    <div class="profile-info-name"> Mobile No : </div>
                    <div class="profile-info-value">
                        <span class="editable" id="email">{{ $data['student']->mobile_1.','.$data['student']->mobile_2 }}</span>
                    </div>
                @endif
            </div>
        </div>

    </div>
</div><!-- /.row -->
<div class="row">
    <div class="space-6"></div>
    <div class="label label-info label-xlg arrowed-in arrowed-right arrowed btn-primary btn-sm m-1">Permanent Address</div>
    <div class="space-6"></div>
    <div class="profile-user-info profile-user-info-striped">
        <div class="profile-info-row">
            @if($data['student']->address !="")
                <div class="profile-info-name"> Address : </div>
                <div class="profile-info-value">
                    <span class="editable" id="permanent_place">{{ $data['student']->address }}</span>
                </div>
            @endif
        </div>
    </div>
    <div class="profile-user-info profile-user-info-striped">
        <div class="profile-info-row">
            @if($data['student']->state !="")
                <div class="profile-info-name"> State :</div>
                <div class="profile-info-value">
                    <span class="editable" id="permanent_district">{{ $data['student']->state }}</span>
                </div>
            @endif
            @if($data['student']->country !="")
                <div class="profile-info-name"> Country : </div>
                <div class="profile-info-value">
                    <span class="editable" id="permanent_zone">{{ $data['student']->country }}</span>
                </div>
            @endif
        </div>
    </div>

    <div class="space-6"></div>
    <div class="label label-info label-xlg arrowed-in arrowed-right arrowed btn-primary btn-sm m-1">Temporary Address</div>
    <div class="space-6"></div>
    <div class="profile-user-info profile-user-info-striped">
        <div class="profile-info-row">
            @if($data['student']->temp_address !="")
                <div class="profile-info-name"> Address : </div>
                <div class="profile-info-value">
                    <span class="editable" id="permanent_place">{{ $data['student']->temp_address }}</span>
                </div>
            @endif
        </div>
    </div>
    <div class="profile-user-info profile-user-info-striped">
        <div class="profile-info-row">
            @if($data['student']->temp_state !="")
                <div class="profile-info-name"> State :</div>
                <div class="profile-info-value">
                    <span class="editable" id="permanent_district">{{ $data['student']->temp_state }}</span>
                </div>
            @endif
            @if($data['student']->temp_country !="")
                <div class="profile-info-name"> Country : </div>
                <div class="profile-info-value">
                    <span class="editable" id="permanent_zone">{{ $data['student']->temp_country }}</span>
                </div>
            @endif
        </div>
    </div>

    <div class="space-6"></div>
    <div class="label label-info label-xlg arrowed-in arrowed-right arrowed btn-primary btn-sm m-1">Parential Info</div>
    @if($data['student']->grandfather_first_name !="")
        <div class="space-6"></div>
        <div class="profile-user-info profile-user-info-striped">
            <div class="profile-info-row">
                <div class="profile-info-name"> Grand Father :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="temporary_place">{{ $data['student']->grandfather_first_name.' '.$data['student']->grandfather_middle_name.' '.$data['student']->grandfather_last_name }}</span>
                </div>
            </div>
        </div>
    @endif
    <div class="space-6"></div>
    <div class="profile-user-info profile-user-info-striped">
        <div class="profile-info-row">
            @if($data['student']->father_first_name !="")
                <div class="profile-info-name"> Father Name :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="temporary_place">{{ $data['student']->father_first_name.' '.$data['student']->father_middle_name.' '.$data['student']->father_last_name }}</span>
                </div>
            @endif
            @if($data['student']->father_eligibility !="")
                <div class="profile-info-name"> Eligibility :</div>
                <div class="profile-info-value">
                    <span class="editable" id="father_eligibility">{{ $data['student']->father_eligibility }}</span>
                </div>
            @endif
            @if($data['student']->father_occupation !="")
                <div class="profile-info-name"> Occupation :</div>
                <div class="profile-info-value">
                    <span class="editable" id="father_occupation">{{ $data['student']->father_occupation }}</span>
                </div>
            @endif
        </div>
        <div class="profile-info-row">
            @if($data['student']->father_office !="")
                <div class="profile-info-name"> Office :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="father_office">{{ $data['student']->father_office }}</span>
                </div>
            @endif
            @if($data['student']->father_office_number !="")
                <div class="profile-info-name"> Office Num. :</div>
                <div class="profile-info-value">
                    <span class="editable" id="father_office_number">{{ $data['student']->father_office_number }}</span>
                </div>
            @endif
            @if($data['student']->father_residence_number !="")
                <div class="profile-info-name"> Residence : </div>
                <div class="profile-info-value">
                    <span class="editable" id="father_residence_number">{{ $data['student']->father_residence_number }}</span>
                </div>
            @endif
        </div>
        <div class="profile-info-row">
            @if($data['student']->father_mobile_1 !="")
                <div class="profile-info-name"> Mobile 1 :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="father_mobile_1">{{ $data['student']->father_mobile_1 }}</span>
                </div>
            @endif
            @if($data['student']->father_mobile_2 !="")
                <div class="profile-info-name"> Mobile 2 :</div>
                <div class="profile-info-value">
                    <span class="editable" id="father_mobile_2">{{ $data['student']->father_mobile_2 }}</span>
                </div>
            @endif
            @if($data['student']->father_email !="")
                <div class="profile-info-name"> E-mail : </div>
                <div class="profile-info-value">
                    <span class="editable" id="father_email">{{ $data['student']->father_email }}</span>
                </div>
            @endif
        </div>
    </div>

    <div class="space-6"></div>
    <div class="profile-user-info profile-user-info-striped">
        <div class="profile-info-row">
            @if($data['student']->mother_first_name !="")
                <div class="profile-info-name"> Mother Name :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="temporary_place">{{ $data['student']->mother_first_name.' '.$data['student']->mother_middle_name.' '.$data['student']->mother_last_name }}</span>
                </div>
            @endif
            @if($data['student']->mother_eligibility !="")
                <div class="profile-info-name"> Eligibility :</div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_eligibility">{{ $data['student']->mother_eligibility }}</span>
                </div>
            @endif
            @if($data['student']->mother_occupation !="")
                <div class="profile-info-name"> Occupation :</div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_occupation">{{ $data['student']->mother_occupation }}</span>
                </div>
            @endif
        </div>
        <div class="profile-info-row">
            @if($data['student']->mother_office !="")
                <div class="profile-info-name"> Office :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_office">{{ $data['student']->mother_office }}</span>
                </div>
            @endif
            @if($data['student']->mother_office_number !="")
                <div class="profile-info-name"> Office Num. :</div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_office_number">{{ $data['student']->mother_office_number }}</span>
                </div>
            @endif
            @if($data['student']->mother_residence_number !="")
                <div class="profile-info-name"> Residence : </div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_residence_number">{{ $data['student']->mother_residence_number }}</span>
                </div>
            @endif
        </div>
        <div class="profile-info-row">
            @if($data['student']->mother_mobile_1 !="")
                <div class="profile-info-name"> Mobile 1 :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_mobile_1">{{ $data['student']->mother_mobile_1 }}</span>
                </div>
            @endif
            @if($data['student']->mother_mobile_2 !="")
                <div class="profile-info-name"> Mobile 2 :</div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_mobile_2">{{ $data['student']->mother_mobile_2 }}</span>
                </div>
            @endif
            @if($data['student']->mother_email !="")
                <div class="profile-info-name"> E-mail : </div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_email">{{ $data['student']->mother_email }}</span>
                </div>
            @endif
        </div>
    </div>

    <div class="space-6"></div>
    <div class="label label-info label-xlg arrowed-in arrowed-right arrowed btn-primary btn-sm m-1">Guardian Info</div>
    <div class="space-6"></div>
    <div class="profile-user-info profile-user-info-striped">
        <div class="profile-info-row">
            @if($data['student']->guardian_first_name !="")
                <div class="profile-info-name"> Guardian Name :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="temporary_place">{{ $data['student']->guardian_first_name.' '.$data['student']->guardian_middle_name.' '.$data['student']->guardian_last_name }}</span>
                </div>
            @endif
            @if($data['student']->guardian_eligibility !="")
                <div class="profile-info-name"> Eligibility :</div>
                <div class="profile-info-value">
                    <span class="editable" id="guardian_eligibility">{{ $data['student']->guardian_eligibility }}</span>
                </div>
            @endif
            @if($data['student']->guardian_occupation !="")
                <div class="profile-info-name"> Occupation :</div>
                <div class="profile-info-value">
                    <span class="editable" id="guardian_occupation">{{ $data['student']->guardian_occupation }}</span>
                </div>
            @endif
        </div>
        <div class="profile-info-row">
            @if($data['student']->guardian_office !="")
                <div class="profile-info-name"> Office :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="guardian_office">{{ $data['student']->guardian_office }}</span>
                </div>
            @endif
            @if($data['student']->guardian_office_number !="")
                <div class="profile-info-name"> Office Num. :</div>
                <div class="profile-info-value">
                    <span class="editable" id="guardian_office_number">{{ $data['student']->guardian_office_number }}</span>
                </div>
            @endif
            @if($data['student']->guardian_residence_number !="")
                <div class="profile-info-name"> Residence : </div>
                <div class="profile-info-value">
                    <span class="editable" id="guardian_residence_number">{{ $data['student']->guardian_residence_number }}</span>
                </div>
            @endif
        </div>
        <div class="profile-info-row">
            @if($data['student']->guardian_mobile_1 !="")
                <div class="profile-info-name"> Mobile 1 :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="guardian_mobile_1">{{ $data['student']->guardian_mobile_1 }}</span>
                </div>
            @endif
            @if($data['student']->guardian_mobile_2 !="")
                <div class="profile-info-name"> Mobile 2 :</div>
                <div class="profile-info-value">
                    <span class="editable" id="guardian_mobile_2">{{ $data['student']->guardian_mobile_2 }}</span>
                </div>
            @endif
            @if($data['student']->guardian_email !="")
                <div class="profile-info-name"> E-mail : </div>
                <div class="profile-info-value">
                    <span class="editable" id="guardian_email">{{ $data['student']->guardian_email }}</span>
                </div>
            @endif
        </div>
        <div class="profile-info-row">
            @if($data['student']->guardian_relation !="")
                <div class="profile-info-name"> Relation :  </div>
                <div class="profile-info-value">
                    <span class="editable" id="guardian_relation">{{ $data['student']->guardian_relation }}</span>
                </div>
            @endif
            @if($data['student']->guardian_address !="")
                <div class="profile-info-name"> Address :</div>
                <div class="profile-info-value">
                    <span class="editable" id="mother_mobile_2">{{ $data['student']->guardian_address }}</span>
                </div>
            @endif
        </div>
    </div>
</div>

<div class="row">
    @if (isset($data['academicInfos']) && $data['academicInfos']->count() > 0)
        <div class="space-12"></div>
        <h3 class="text-uppercase text-center no-margin-top" style="font-family: 'Righteous', cursive; font-size: 16px">ACADEMIC QUALIFICATIONS</h3>
        <div class="space-6"></div>
        <table class="table-bordered" WIDTH="100%">
            <tr class="text-center">
                <th width="5%">S.N.</th>
                <th>EXAMINATION PASSED</th>
                <th>NAME OF COLLEGE/SCHOOL</th>
                <th>NAME OF BOARD/UNIVERSITY</th>
                <th>YEAR OF PASS</th>
                <th>PERCENTAGE/GRADE OF MARK</th>
            </tr>
            @php($i=1)
            @foreach($data['academicInfos'] as $academicInfo)
                <tr class="text-center">
                    <td>{{$i}}</td>
                    <td>
                        {{ $academicInfo->examination }}
                    </td>
                    <td>
                        {{ $academicInfo->institution }}
                    </td>
                    <td>
                        {{ $academicInfo->board_university }}
                    </td>
                    <td>
                        {{ $academicInfo->year_of_pass }}
                    </td>
                    <td>
                        {{ $academicInfo->percentage_grade }}
                    </td>
                </tr>
                @php($i++)
            @endforeach

        </table>
    @endif
</div>

<div class="row hidden-print mt-2">
    <div class="space-8"></div>
    <div class="col-xs-12 col-md-3 center mt-2">
        <div  class=" align-center">
        <span class="profile-picture">
        @if($data['student']->reg_no != '')
                {!! QrCode::size(200)->generate($data['student']->first_name.' '.
                $data['student']->middle_name.' '.$data['student']->last_name.'['.$data['student']->reg_no.']'); !!}
            @else
            @endif
        </span>
        </div>
    </div>
    <div class="col-xs-12 col-md-3 center">
        <div>
            <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                <div class="inline position-relative">
                    <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                        <span class="white">Guardian</span>
                    </a>
                </div>
            </div>
            <div class="space-4"></div>

            <span class="profile-picture">
                    @if($data['student']->guardian_image != '')
                    <img id="avatar" class="editable img-responsive" alt="Guardian" src="{{ asset('images'.DIRECTORY_SEPARATOR.'parents'.DIRECTORY_SEPARATOR.$data['student']->guardian_image) }}" width="300px" />
                @else
                    <img id="avatar" class="editable img-responsive" alt="" src="{{ asset('assets/images/avatars/profile-pic.jpg') }}" />
                @endif
            </span>
        </div>
    </div>


    <div class="col-xs-12 col-md-3 center">
        <div>
            <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                <div class="inline position-relative">
                    <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                        <span class="white">Father</span>
                    </a>
                </div>
            </div>
            <div class="space-4"></div>

            <span class="profile-picture">
               @if($data['student']->father_image != '')
                    <img id="avatar" class="editable img-responsive" alt="Guardian" src="{{ asset('images'.DIRECTORY_SEPARATOR.'parents'.DIRECTORY_SEPARATOR.$data['student']->father_image) }}" width="300px" />
                @else
                    <img id="avatar" class="editable img-responsive" alt="" src="{{ asset('assets/images/avatars/profile-pic.jpg') }}" />
                @endif
            </span>
        </div>
    </div>


    <div class="col-xs-12 col-md-3 center">
        <div>
            <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                <div class="inline position-relative">
                    <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                        <span class="white">Mother</span>
                    </a>
                </div>
            </div>
            <div class="space-4"></div>

            <span class="profile-picture">
                @if($data['student']->mother_image != '')
                    <img id="avatar" class="editable img-responsive" alt="Guardian" src="{{ asset('images'.DIRECTORY_SEPARATOR.'parents'.DIRECTORY_SEPARATOR.$data['student']->mother_image) }}" width="300px" />
                @else
                    <img id="avatar" class="editable img-responsive" alt="" src="{{ asset('assets/images/avatars/profile-pic.jpg') }}" />
                @endif
            </span>
        </div>
    </div>


</div>


