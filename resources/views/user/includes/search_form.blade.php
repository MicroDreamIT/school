<div class="row">
    {!! Form::label('name', 'Name or Email', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-3">
        {!! Form::text('name', null, ["placeholder" => "", "class" => "form-control border-form","autofocus"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'name'])
    </div>

    {!! Form::label('role', 'User Role', ['class' => 'col-md-1 control-label']) !!}
    <div class="col-md-3">
        {!! Form::select('role', $data['roles'], null, ['class' => 'form-control']) !!}
    </div>
    {!! Form::label('status', 'Status', ['class' => 'col-md-1 control-label']) !!}
    <div class="col-md-2">
        {!! Form::select('status', ["all"=>"Select Status","active"=>"Active", "in-active"=>"InActive"], null, ['class' => 'form-control']) !!}
    </div>

</div>
<div class="col-md-12 align-right clearfix form-actions">
    <button class="btn btn-info" type="submit" id="filter-btn">
                            <i class="fa fa-filter bigger-110"></i>
                            Filter
                        </button>
</div>


