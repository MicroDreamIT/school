<div class="row">
    {!! Form::label('title', 'Title', ['class' => 'col-sm-12 control-label']) !!}
    <div class="col-sm-12">
        {!! Form::text('title', null, ["placeholder" => "", "class" => "form-control border-form upper","required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'title'])
    </div>
</div>

