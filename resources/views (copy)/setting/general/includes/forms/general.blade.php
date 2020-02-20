<div class="row">
    {!! Form::label('institute', 'Institute', ['class' => 'col-md-1 control-label']) !!}
    <div class="col-md-5">
        {!! Form::text('institute', null, ["class" => "form-control border-form", "required", "autofocus"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'institute'])
    </div>

    {!! Form::label('salogan', 'Salogan', ['class' => 'col-md-1 control-label']) !!}
    <div class="col-md-5">
        {!! Form::text('salogan', null, ["class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'salogan'])
    </div>
</div>
<br>
<div class="row">
    {!! Form::label('copyright', 'Copyright©', ['class' => 'col-md-1 control-label']) !!}
    <div class="col-md-11">
        {!! Form::text('copyright', null, ["class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'copyright'])
    </div>
</div>
<br>
<div class="row">
    {!! Form::label('address', 'Address', ['class' => 'col-md-1 control-label']) !!}
    <div class="col-md-5">
        {!! Form::text('address', null, ["class" => "form-control border-form", "required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'address'])
    </div>

    <!--<label class="col-md-1 control-label">
        <i class="fa fa-phone bigger-120 white" aria-hidden="true"></i>
    </label>-->
      {!! Form::label('phone', 'Phone', ['class' => 'col-md-1 control-label']) !!}
    <div class="col-md-5">
        {!! Form::text('phone', null, ["class" => "form-control border-form", "required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'phone'])
    </div>
</div>
<br>
<div class="row">
    <!--<label class="col-md-1 control-label">
        <i class="fa fa-envelope bigger-120 white" aria-hidden="true"></i>
    </label>-->
    {!! Form::label('email', 'Email', ['class' => 'col-md-1 control-label']) !!}
    <div class="col-md-5">
        {!! Form::email('email', null, ["class" => "form-control border-form" , "required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'email'])
    </div>

    <!--<label class="col-md-1 control-label">
        <i class="fa fa-globe bigger-120 white" aria-hidden="true"></i>
    </label>-->
    {!! Form::label('globe', 'Globe', ['class' => 'col-md-1 control-label']) !!}
    <div class="col-md-5">
        {!! Form::text('website', null, ["class" => "form-control border-form"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'website'])
    </div>
</div>
<br>
<div class="row">
        {!! Form::label('logo_image', 'Logo', ['class' => 'col-md-1 control-label']) !!}
        <div class="col-md-5">
            {!! Form::file('logo_image', ["class" => "form-control border-form"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'logo_image'])
        </div>

        @if (isset($data['row']))
            @if ($data['row']->logo)
                <img id="avatar"  src="{{ asset('images'.DIRECTORY_SEPARATOR.'setting'.DIRECTORY_SEPARATOR.'general'.DIRECTORY_SEPARATOR.$data['row']->logo) }}" class="img-responsive" >
            @endif
        @endif
  
        {!! Form::label('favicon_image', 'Favicon', ['class' => 'col-md-1 control-label']) !!}
        <div class="col-md-5">
            {!! Form::file('favicon_image', ["class" => "form-control border-form"]) !!}
            @include('includes.form_fields_validation_message', ['name' => 'favicon_image'])
        </div>

        @if (isset($data['row']))
            @if ($data['row']->favicon)
                <img id="avatar"  src="{{ asset('images'.DIRECTORY_SEPARATOR.'setting'.DIRECTORY_SEPARATOR.'general'.DIRECTORY_SEPARATOR.$data['row']->favicon) }}" class="img-responsive" >
            @endif
        @endif

</div>