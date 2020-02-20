<div class="row">
    {!! Form::label('certificate', 'Certificate Title', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('certificate', null, ["placeholder" => "", "class" => "form-control border-form upper","autofocus"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'certificate'])
    </div>
</div><br>

<div class="row">
     {!! Form::label('student_photo', 'StudentPhoto', ['class' => 'col-sm-2 control-label']) !!}
       <div class="col-sm-2">
           {!! Form::select('student_photo', ["1"=>"Required","0"=>"NotRequired"], null, ['class' => 'form-control']) !!}
           @include('includes.form_fields_validation_message', ['name' => 'student_photo'])
       </div>

    {!! Form::label('status', 'Status', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-2">
        {!! Form::select('status', ["active"=>"Active","in-active"=>"In-Active"], null, ['class' => 'form-control']) !!}
        @include('includes.form_fields_validation_message', ['name' => 'status'])
    </div>
</div><br>

<div class="row">
    {!! Form::label('template', 'Template', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-10">
        {!! Form::textarea('template', null, ["class" => "form-control border-form", "id"=>"summernote","rows"=>"10"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'template'])
    </div>
</div><br>

<div id="accordion" class="accordion-style1 panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false">
                    <h5 class="header large lighter blue">
                        <i class="bigger-110 ace-icon fa fa-angle-double-right" data-icon-hide="ace-icon fa fa-angle-double-down" data-icon-show="ace-icon fa fa-angle-double-right"></i>
                        Use these variable in template to generate dynamic result.e.g. if you need Full Name of Student simply add {!! '&#123;&#123;' .'student_name'. '&#125;&#125;' !!}
                    </h5>
                </a>
            </h4>
        </div>

        <div class="panel-collapse collapse" id="collapseOne" aria-expanded="false" style="height: 0px;">
            <div class="panel-body">

                @include('certificate.template.includes.template')
            </div>
        </div>
    </div>
</div>



