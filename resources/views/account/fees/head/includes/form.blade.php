{!! Form::open(['route' => $base_route.'.store', 'method' => 'POST', 'class' => 'form-horizontal',
    'id' => 'validation-form', "enctype" => "multipart/form-data"]) !!}
<div class="row">
   
    {!! Form::label('fee_head_title', 'Head', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-12">
        {!! Form::text('fee_head_title', null, ["placeholder" => "e.g. Monthly Fee", "class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'fee_head_title'])
    </div>
</div>
<br/>

<div class="row">
    
    {!! Form::label('fee_head_amount', 'Amount', ['class' => 'col-sm-4 control-label']) !!}

    <div class="col-sm-12">
        {!! Form::text('fee_head_amount', null, ["placeholder" => "e.g. 5000", "class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'fee_head_amount'])
    </div>
</div>
<br/>
<div class="clearfix form-actions align-right">
    <div class="col-md-12">
        <button class="btn btn-default" type="reset">
            <i class="fa fa-undo bigger-110"></i>
            Reset
        </button>
        <button class="btn btn-info" type="submit">
            <i class="fa fa-save bigger-110"></i>
            Create
        </button>
    </div>
</div>
<br/>
<div class="hr hr-24"></div>
{!! Form::close() !!}