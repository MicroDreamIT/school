{{--
{!! Form::label('reg_no', 'REG. NO.', ['class' => 'col-sm-1 control-label']) !!}
<div class="col-sm-2">
    {!! Form::text('reg_no', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration", "autofocus"]) !!}
    @include('includes.form_fields_validation_message', ['name' => 'reg_no'])
</div>

{!! Form::label('designation', 'Designation', ['class' => 'col-sm-2 control-label']) !!}
<div class="col-sm-4">
    {!! Form::select('designation', $data['designations'], null, ['class' => 'form-control chosen-select', "required"]) !!}
    @include('includes.form_fields_validation_message', ['name' => 'designation'])
</div>
<label class="col-sm-1 control-label">Status</label>
<div class="col-sm-2">
    <select class="form-control border-form" name="status" id="cat_id">
        <option value="all"> Select Status </option>
        <option value="active" >Active</option>
        <option value="in-active" >In-Active</option>
    </select>
</div>--}}

<div class="row">
    {!! Form::label('reg_no', 'REG. NO.', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('reg_no', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration", "autofocus"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'reg_no'])
    </div>

    {!! Form::label('join_date', 'Join Date', ['class' => 'col-sm-2 control-label']) !!}
    <div class=" col-sm-4">
        <div class="input-group ">
            {!! Form::text('join_date_start', null, ["placeholder" => "", "class" => "input-sm form-control border-form input-mask-date date-picker  pickadate picker__input picker__input--active ", "data-date-format" => "yyyy-mm-dd"]) !!}
            <span class="input-group-addon">
                    <i class="fa fa-exchange"></i>
                </span>
            {!! Form::text('join_date_end', null, ["placeholder" => "", "class" => "input-sm form-control border-form input-mask-date date-picker", "data-date-format" => "yyyy-mm-dd"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'join_date_start'])
            @include('includes.form_fields_validation_message', ['name' => 'join_date_end'])
        </div>
    </div>
</div>
<br/>
<div class="row">
    <label class="col-sm-2 control-label">Designation</label>
    <div class="col-sm-4">
        {!! Form::select('designation', $data['designation'], null, ['class' => 'form-control chosen-select']) !!}

    </div>

    <label class="col-sm-2 control-label">Status</label>
    <div class="col-sm-4">
        <select class="form-control border-form" name="status" id="cat_id">
            <option value="all"> Select Status </option>
            <option value="active" >Active</option>
            <option value="in-active" >In-Active</option>
        </select>
    </div>
</div>