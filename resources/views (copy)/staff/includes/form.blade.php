<div class="tabbable">
    <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
        <li class="active">
            <a data-toggle="tab" href="#registrationinfo" class="btn btn-primary">
                <i class="fa fa-user bigger-110"></i>  {{ $panel }} General Information
            </a>
        </li>
        <li class="" style="margin-left:10px">
            <a data-toggle="tab" href="#profileimage" class="btn btn-primary"><i class="fa fa-image bigger-110"></i> Profile Images</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="registrationinfo" class="tab-pane active">
            <span class="label label-info arrowed-in arrowed-right arrowed responsive">Red mark input are required. </span>
            <hr class="hr-16">
            <div class="row">
                {!! Form::label('reg_no', 'REG. NO.', ['class' => 'col-sm-1 control-label']) !!}
                <div class="col-sm-2">
                    {!! Form::text('reg_no', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration", "required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'reg_no'])
                </div>

                {!! Form::label('join_date', 'Join Date', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-2">
                    {!! Form::text('join_date', null, ["data-date-format" => "yyyy-mm-dd", "class" => "form-control date-picker border-form input-mask-date","required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'join_date'])
                </div>

                {!! Form::label('designation', 'Designation', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::select('designation', $data['designations'], null, ['class' => 'form-control chosen-select', "required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'designation'])
                </div>
            </div>
<br/>
            <div class="row">
                {!! Form::label('first_name', 'NAME OF STAFF', ['class' => 'col-sm-2 control-label',]) !!}
                <div class="col-sm-3">
                    {!! Form::text('first_name', null, ["placeholder" => "FIRST NAME", "class" => "form-control border-form upper","required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'first_name'])
                </div>
                <div class="col-sm-3">
                    {!! Form::text('middle_name', null, ["placeholder" => "MIDDLE NAME", "class" => "form-control border-form upper"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'middle_name'])
                </div>
                <div class="col-sm-3">
                    {!! Form::text('last_name', null, ["placeholder" => "LAST NAME", "class" => "form-control border-form upper","required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'last_name'])
                </div>
            </div>
<br/>
            <div class="br">
                {!! Form::label('father_name', 'Father Name', ['class' => 'col-sm-2 control-label',]) !!}
                <div class="col-sm-4">
                    {!! Form::text('father_name', null, ["placeholder" => " ", "class" => "form-control border-form upper"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'father_name'])
                </div>
                {!! Form::label('mother_name', 'Mother Name', ['class' => 'col-sm-2 control-label',]) !!}
                <div class="col-sm-4">
                    {!! Form::text('mother_name', null, ["placeholder" => " ", "class" => "form-control border-form upper"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'mother_name'])
                </div>
            </div>
<br/>
            <div class="row">
                {!! Form::label('date_of_birth', 'Date of Birth', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-2">
                    {!! Form::text('date_of_birth', null, ["data-date-format" => "yyyy-mm-dd", "placeholder" => "", "class" => "form-control date-picker border-form input-mask-date","required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'date_of_birth'])
                </div>

                {!! Form::label('gender', 'Gender', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-2">
                    {!! Form::select('gender', ['' => '','MALE' => 'MALE', 'FEMALE' => 'FEMALE', 'OTHER' => 'OTHER'], null, ['class'=>'form-control border-form',"required"]); !!}
                    @include('includes.form_fields_validation_message', ['name' => 'gender'])
                </div>

                {!! Form::label('blood_group', 'Blood Group', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-2">
                    {!! Form::select('blood_group', ['' => '','A+' => 'A+', 'A-' => 'A-', 'B+' => 'B+','B-' => 'B-','AB+' => 'AB+', 'AB-' => 'AB-', 'O+' => 'O+','O-' => 'O-', ], null,
                    [ 'class'=>'form-control border-form']); !!}
                    @include('includes.form_fields_validation_message', ['name' => 'blood_group'])
                </div>
            </div>

   <br/>         <div class="row">
                {!! Form::label('nationality', 'Nationality', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-2">
                    {!! Form::text('nationality', null, ["placeholder" => "", "class" => "form-control border-form upper","required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'nationality'])
                </div>

                {!! Form::label('mother_tongue', 'Mother Tongue', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-2">
                    {!! Form::text('mother_tongue', null, ["class" => "form-control border-form upper"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'mother_tongue'])
                </div>

                {!! Form::label('email', 'E-mail', ['class' => 'col-sm-1 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::text('email', null, ["class" => "form-control border-form"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'email'])
                </div>
            </div>
<br/>
            <div class="label label-warning arrowed-in arrowed-right arrowed">Contact Detail</div>
            <hr class="hr-8">
            <div class="row">
                {!! Form::label('home_phone', 'Home Phone', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-2">
                    {!! Form::text('home_phone', null, ["class" => "form-control border-form input-mask-phone"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'home_phone'])
                </div>

                {!! Form::label('mobile_1', 'Mobile 1', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-2">
                    {!! Form::text('mobile_1', null, ["class" => "form-control border-form input-mask-mobile","required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'mobile_1'])
                </div>

                {!! Form::label('mobile_2', 'Mobile 2', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-2">
                    {!! Form::text('mobile_2', null, ["class" => "form-control border-form input-mask-mobile"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'mobile_2'])
                </div>
            </div>

     <br/>
            <div class="label label-warning arrowed-in arrowed-right arrowed">Permanent Address</div>
            <hr class="hr-8">
                <br/> <div class="row">
                {!! Form::label('address', 'Address', ['class' => 'col-sm-1 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::text('address', null, ["class" => "form-control border-form upper","required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'address'])
                </div>

                {!! Form::label('state', 'State', ['class' => 'col-sm-1 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::text('state', null, ["class" => "form-control border-form upper","required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'state'])
                </div>

                {!! Form::label('country', 'Country', ['class' => 'col-sm-1 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::text('country', null, ["class" => "form-control border-form upper","required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'country'])
                </div>
            </div>

     <br/>
            <div class="label label-warning arrowed-in arrowed-right arrowed">Temporary Address</div>

            <div class="control-group col-sm-12">
                <div class="radio">
                    <label>
                        {!! Form::checkbox('permanent_address_copier', '', false, ['class' => 'ace', "onclick"=>"CopyAddress(this.form)"]) !!}
                        <span class="lbl"> Temporary Address Same As Permanent Address</span>
                    </label>
                </div>
            </div>

            <hr>
            <hr class="hr-8">
     <br/>
            <div class="row">
                {!! Form::label('temp_address', 'Address', ['class' => 'col-sm-1 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::text('temp_address', null, ["class" => "form-control border-form upper"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'temp_address'])
                </div>

                {!! Form::label('temp_state', 'State', ['class' => 'col-sm-1 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::text('temp_state', null, ["class" => "form-control border-form upper"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'temp_state'])
                </div>

                {!! Form::label('temp_country', 'Country', ['class' => 'col-sm-1 control-label']) !!}
                <div class="col-sm-3">
                    {!! Form::text('temp_country', null, ["class" => "form-control border-form upper"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'temp_country'])
                </div>
            </div>
     <br/>
            <div class="label label-warning arrowed-in arrowed-right arrowed">Qualification Detail</div>
            <hr class="hr-8">
              <br/>   <div class="row">
                {!! Form::label('qualification', 'Qualification', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-4">
                    {!! Form::text('qualification', null, ["class" => "form-control border-form upper","required"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'qualification'])
                </div>

                {!! Form::label('experience', 'Experience', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-4">
                    {!! Form::text('experience', null, ["class" => "form-control border-form upper",]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'experience'])
                </div>
            </div>
     <br/>
            <div class="row">
                {!! Form::label('experience_info', 'Experience Info', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-4">
                    {!! Form::textarea('experience_info', null, ["class" => "form-control border-form ", "rows"=>"3"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'experience_info'])
                </div>

                {!! Form::label('other_info', 'Other Info', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-4">
                    {!! Form::textarea('other_info', null, ["class" => "form-control border-form", "rows"=>"3"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'other_info'])
                </div>
            </div>
        </div>
     <br/>
        <div id="profileimage" class="tab-pane">
            <h4 class="header large lighter blue"><i class="ace-icon glyphicon glyphicon-plus"></i>Profile Pictures</h4>
            <br/>     <div class="row">
                {!! Form::label('main_image', 'Staff Profile Picture', ['class' => 'col-sm-2 control-label']) !!}
                <div class="col-sm-10">
                    {!! Form::file('main_image', ["class" => "form-control border-form"]) !!}
                    @include('includes.form_fields_validation_message', ['name' => 'main_image'])
                </div>
            </div>

            @if (isset($data['row']))

               <br/>

                <div class="row">
                    <label class="col-sm-2 control-label">Existing Image</label>
                    <div class="col-sm-10">
                        @if ($data['row']->staff_image)
                            <img id="avatar"  src="{{ asset('images/'.$folder_name.'/'.$data['row']->staff_image) }}" class="img-responsive" width="100">
                        @else
                            <p>No image.</p>
                        @endif

                    </div>
                </div>
            @endif
        </div>


    </div>
    <div class="hr hr-24"></div>
</div>