<br/>
<div class="row">
    {!! Form::label('title', "Route", ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('title', null, ["class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'title'])
    </div>
</div>
<br/>
<div class="row">
    {!! Form::label('rent', "Rent", ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::number('rent', null, ["class" => "form-control border-form", "min"=>"0","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'rent'])
    </div>
</div>
<br/>
<div class="row">
    {!! Form::label('description', "Desc.", ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::textarea('description', null, ["class" => "form-control border-form","rows"=>"2"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'description'])
    </div>
</div>
<br/>
<div class="row">
    {!! Form::label('find_vehicles', 'Find Vehicle & Add', ['class' => 'col-sm-4 control-label align-center']) !!}
    <div class="col-sm-8">
        {!! Form::select('find_vehicles', [], null, ["placeholder" => "Type Vehicle Number...", "class" => "col-xs-12 col-sm-12", "style" => "width: 100%;"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'find_vehicles'])

        <hr>
        <div class="align-right">
            <button type="button" class="btn btn-sm btn-primary" id="load-html-btn">
                <i class="fa fa-plus bigger-120"></i> Add Vehicle
            </button>
        </div>
    </div>
</div>
<br/>
<div class="space-4"></div>
<!-- Option Values -->
@include($view_path.'.includes.vehicle')