<div class="row">
    {!! Form::label('reg_date', 'Date', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('reg_date', null, ["data-date-format" => "yyyy-mm-dd", "class" => "form-control pickadate picker__input picker__input--active","readonly"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'reg_date'])
    </div>
    @if (!isset($data['row']))
        <label class="col-sm-2 control-label">Faculty/Class</label>
        <div class="col-sm-4">
            <select name="faculty" class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a Faculty/Class..."  onChange ="loadSemesters(this)" >
                <option value="">  </option>
                @foreach( $data['faculties'] as $key => $faculty)
                    <option value="{{ $key }}">{{ $faculty }}</option>
                @endforeach
            </select>
        </div>

        {{--<label class="col-sm-2 control-label">Sem./Sec.</label>
        <div class="col-sm-4">
            <select name="semester" class="form-control semester" required > </select>
            @include('includes.form_fields_validation_message', ['name' => 'semester'])
        </div>--}}
    @else
        <label class="col-sm-2 control-label">Faculty/Class</label>
        <div class="col-sm-4">
            {!! Form::select('faculty', $data['faculties'], null, ['class' => 'form-control',"disabled"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'faculty'])
        </div>

        <label class="col-sm-2 control-label">Sem./Sec.</label>
        <div class="col-sm-4">
            {!! Form::select('semester', $data['semester'], null, ['class' => 'form-control',"disabled"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'semester'])
        </div>
    @endif
</div>
<br/>
<div class="row">
    {!! Form::label('first_name', 'NAME OF STUDENT', ['class' => 'col-sm-2 control-label',]) !!}
    <div class="col-sm-3">
        {!! Form::text('first_name', null, ["class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'first_name'])
    </div>
    <div class="col-sm-3">
        {!! Form::text('middle_name', null, ["class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'middle_name'])
    </div>
    <div class="col-sm-3">
        {!! Form::text('last_name', null, ["class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'last_name'])
    </div>
</div>
<br/>
<div class="row">
    {!! Form::label('date_of_birth', 'Date of Birth', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('date_of_birth', null, ["data-date-format" => "yyyy-mm-dd", "class" => "form-control border-form date-picker input-mask-date","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'date_of_birth'])
    </div>

    {!! Form::label('gender', 'Gender', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::select('gender', ['' => '','MALE' => 'MALE', 'FEMALE' => 'FEMALE', 'OTHER' => 'OTHER'], null, ['class'=>'form-control border-form',"required"]); !!}
        @include('includes.form_fields_validation_message', ['name' => 'gender'])
    </div>
</div>
<br/>
<div class="row">
    {!! Form::label('mobile_1', 'Mobile 1', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('mobile_1', null, ["class" => "form-control border-form input-mask-mobile","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'mobile_1'])
    </div>
</div>
<br/>
<div class="row">
    {!! Form::label('email', 'E-mail', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('email', null, ["class" => "form-control border-form" ,"required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'email'])
    </div>

    {!! Form::label('password', 'Password', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::password('password',  ["placeholder" => "", "class" => "form-control border-form", "required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'password'])
    </div>
</div>
<br/>
<div class="row">
    {!! Form::label('confirmPassword', 'Confirm Password', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::password('confirmPassword',  ["placeholder" => "", "class" => "form-control border-form"/*,"onkeyup"=>"passCheck()"*/, "required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'confirmPassword'])
    </div>
</div>

