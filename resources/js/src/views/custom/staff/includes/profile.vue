<template>
    <div>
        <span style="float:right">
        <router-link :to="'/staff/' + $route.params.id + '/edit' " class="btn-primary btn-sm">
            <i class="ace-icon fa fa-pencil"></i> Edit
        </router-link>
        &nbsp;|&nbsp;
        <a href="#" class="btn-primary btn-sm" onclick="window.print();">
            <i class="ace-icon fa fa-print"></i> Print
        </a>
    </span>
        <br/>
        <div class="row" v-if="fullname">
            <div class="col-xs-12 col-sm-3 center">
                <div>
            <span class="profile-picture">
<!--                @if(profile.staff_image != '')-->
<!--                                    <img id="avatar" class="editable img-responsive" alt="{{ profile.title }}"-->
<!--                                         :src="/images/"-->
<!--                                         src="{{ asset('images'.DIRECTORY_SEPARATOR.$folder_name.DIRECTORY_SEPARATOR.profile.staff_image) }}"-->
<!--                                         width="300px"/>-->
<!--                                @else-->
<!--                                    <img id="avatar" class="editable img-responsive" alt="{{ profile.title }}"-->
<!--                                         src="{{ asset('assets/images/avatars/profile-pic.jpg') }}"/>-->
<!--                                @endif-->
            </span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9">
                <div class="label label-info label-xlg arrowed-in arrowed-right arrowed mb-1 btn btn-warning btn-sm " v-if="profile.fullname!==undefined">
                    {{profile.fullname}}
                </div>
                <div class="space-6"></div>
                <div class="profile-user-info profile-user-info-striped">
                    <div class="profile-info-row">
                        <div class="profile-info-name"> Reg. No.:</div>
                        <div class="profile-info-value">
                            <span class="editable" id="reg_no">{{ profile.reg_no }}</span>
                        </div>
                        <div class="profile-info-name"> Join Date :</div>
                        <div class="profile-info-value">
                            <span class="editable" id="reg_date">
<!--                                {{ \Carbon\Carbon::parse(profile.join_date)->format('Y-m-d')}}-->
                            </span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> Name :</div>
                        <div class="profile-info-value">
                    <span class="editable" v-if="profile.fullname!==undefined">
                        {{ profile.fullname }}
                    </span>
                        </div>
                        <div class="profile-info-name"> DOB :</div>
                        <div class="profile-info-value">
                            <span class="editable">
<!--                                {{ \Carbon\Carbon::parse(profile.date_of_birth)->format('Y-m-d')}}-->
                            </span>
                        </div>
                    </div>
                    <div class="profile-info-row">
                        <div class="profile-info-name"> Gender :</div>
                        <div class="profile-info-value">
                            <span class="editable">{{ profile.gender }}</span>
                        </div>
                        <div class="profile-info-name"> Blood Group :</div>
                        <div class="profile-info-value">
                            <span class="editable">{{ profile.blood_group }}</span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> Nationality :</div>
                        <div class="profile-info-value">
                            <span class="editable">{{ profile.nationality }}</span>
                        </div>
                        <div class="profile-info-name"> MotherTong:</div>
                        <div class="profile-info-value">
                            <span class="editable">{{ profile.mother_tongue }}</span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> E-mail :</div>
                        <div class="profile-info-value">
                            <span class="editable">{{ profile.email }}</span>
                        </div>

                        <div class="profile-info-name"> Mobile No :</div>
                        <div class="profile-info-value">
                            <span class="editable">{{ profile.mobile_1 + ',' + profile.mobile_2 }}</span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <div class="profile-info-name"> Home Tel. :</div>
                        <div class="profile-info-value">
                            <span class="editable">{{ profile.home_phone }}</span>
                        </div>

                        <div class="profile-info-name"> Qualification:</div>
                        <div class="profile-info-value">
                            <span class="editable">{{ profile.qualification }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->
        <div class="row" v-if="profile && profile.address!==undefined">
            <div class="space-6"></div>
            <div class="label label-info label-xlg arrowed-in arrowed-right arrowed btn btn-primary btn-sm mt-1 mb-1">
                Permanent Address
            </div>
            <div class="space-6"></div>
            <div class="profile-user-info profile-user-info-striped">
                <div class="profile-info-row">
                    <div class="profile-info-name"> Address :</div>
                    <div class="profile-info-value">
                        <span class="editable">{{ profile.address }}</span>
                    </div>
                    <div class="profile-info-name"> State :</div>
                    <div class="profile-info-value">
                        <span class="editable">{{ profile.state }}</span>
                    </div>
                    <div class="profile-info-name"> Country :</div>
                    <div class="profile-info-value">
                        <span class="editable">{{ profile.country }}</span>
                    </div>
                </div>
            </div>

            <div class="space-6"></div>
            <div class="label label-info label-xlg arrowed-in arrowed-right arrowed btn btn-primary btn-sm mt-1 mb-1">
                Temporary Address
            </div>
            <div class="space-6"></div>
            <div class="profile-user-info profile-user-info-striped">
                <div class="profile-info-row">
                    <div class="profile-info-name"> Address :</div>
                    <div class="profile-info-value">
                        <span class="editable">{{ profile.temp_address }}</span>
                    </div>
                    <div class="profile-info-name"> State :</div>
                    <div class="profile-info-value">
                        <span class="editable" id="permanent_district">{{ profile.temp_state }}</span>
                    </div>
                    <div class="profile-info-name"> Country :</div>
                    <div class="profile-info-value">
                        <span class="editable" id="permanent_zone">{{ profile.temp_country }}</span>
                    </div>
                </div>
            </div>

            <div class="space-6"></div>
            <div class="label label-info label-xlg arrowed-in arrowed-right arrowed btn btn-primary btn-sm mt-1 mb-1">
                Parential Info
            </div>
            <div class="space-6"></div>
            <div class="profile-user-info profile-user-info-striped">
                <div class="profile-info-row">
                    <div class="profile-info-name">Father Name :</div>
                    <div class="profile-info-value">
                        <span class="editable">{{ profile.father_name }}</span>
                    </div>

                    <div class="profile-info-name"> Mother Name :</div>
                    <div class="profile-info-value">
                        <span class="editable">{{ profile.mother_name }}</span>
                    </div>
                </div>
            </div>
            <div class="space-6"></div>


            <div class="space-6"></div>
            <div class="label label-info label-xlg arrowed-in arrowed-right arrowed btn btn-primary btn-sm mt-1 mb-1">
                Qualification Detail
            </div>
            <div class="space-6"></div>
            <div class="profile-user-info profile-user-info-striped">
                <div class="profile-info-row">
                    <div class="profile-info-name"> Qualification :</div>
                    <div class="profile-info-value">
                        <span class="editable">{{ profile.qualification }}</span>
                    </div>
                    <div class="profile-info-name"> Experience :</div>
                    <div class="profile-info-value">
                        <span class="editable" id="guardian_eligibility">{{ profile.experience }}</span>
                    </div>
                </div>
                <div class="profile-info-row">
                    <div class="profile-info-name"> Experience Information :</div>
                    <div class="profile-info-value">
                        <span class="editable" id="guardian_office">{{ profile.experience_info }}</span>
                    </div>
                </div>
                <div class="profile-info-row">
                    <div class="profile-info-name"> Other Informaiton :</div>
                    <div class="profile-info-value">
                        <span class="editable" id="mother_mobile_1">{{ profile.other_info }}</span>
                    </div>
                </div>
            </div>

            <div class="space-4"></div>

            <div class=" align-center">
                <br/> <br/>
                <span class="profile-picture">
<!--        @if(profile.reg_no != '')-->
                    <!--            {!! QrCode::size(200)->generate(profile.first_name.' '.-->
                    <!--            profile.middle_name.' '.profile.last_name.'['.profile.reg_no.']'); !!}-->
                    <!--        @else-->
                    <!--        @endif-->
        </span>
            </div>
            <!--            {{&#45;&#45;$QRCodeReader = new Libern\QRCodeReader\QRCodeReader();-->
            <!--            $qrcode_text = $QRCodeReader->decode(base64_encode("image_stream"));-->
            <!--            echo $qrcode_text;&#45;&#45;}}-->

        </div>

    </div>
</template>

<script>
    export default {
        name: "profile",
        props: ['profile'],
        computed:{
            fullname(){
                return !! this.profile && this.profile.fullname!==undefined && this.profile.address!==undefined
            }
        }
    }
</script>


<style scoped>

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

    .profile-info-value > span + span:before {
        display: inline;
        content: ",";
        margin-left: 1px;
        margin-right: 3px;
        color: #666;
        border-bottom: 1px solid #FFF
    }

    .profile-info-value > span + span.editable-container:before {
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
        text-shadow: none !important
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
        text-decoration: none !important
    }

    .profile-social-links > a:hover > .ace-icon,
    .profile-users .memberdiv .name a:hover .ace-icon,
    .profile-users .memberdiv .tools > a:hover {
        text-decoration: none
    }

    .profile-social-links > a {
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

    .profile-users .memberdiv > :first-child:hover .popover {
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

    .profile-users .memberdiv .tools > a {
        margin: 0 2px
    }

</style>


