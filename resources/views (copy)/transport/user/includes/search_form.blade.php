<div id="accordion" class="accordion-style1 panel-group hidden-print">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false">
                    <h3 class="header large lighter blue btn btn-primary">
                        <i class="bigger-110 ace-icon fa fa-angle-double-right" data-icon-hide="ace-icon fa fa-angle-double-down" data-icon-show="ace-icon fa fa-angle-double-right"></i>
                        Filter {{$panel}}
                        <i class="fa fa-filter" aria-hidden="true"></i>&nbsp;
                    </h3>
                </a>
            </h4>
        </div>

        <div class="panel-collapse collapse" id="collapseOne" aria-expanded="false" style="height: 0px;">
            <div class="panel-body">
                {{--{!! Form::open(['route' => $base_route,'method' => 'GET', 'class' => 'form-horizontal', "enctype" => "multipart/form-data"]) !!}--}}
                <div class="clearfix form-horizontal">
                    <br/>
                    <div class="row">
                        {!! Form::label('user_type', 'Type', ['class' => 'col-sm-1 control-label']) !!}
                        <div class="col-sm-2">
                            {!! Form::select('user_type', ["0"=>"Select Type","1"=>"Student","2"=>"Staff"], null, ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::label('reg_no', 'REG No.', ['class' => 'col-sm-1 control-label']) !!}
                        <div class="col-sm-2">
                            {!! Form::text('reg_no', null, ["placeholder" => "", "class" => "form-control border-form","autofocus"]) !!}
                        </div>


                        {!! Form::label('route', 'Route', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-4">
                            {!! Form::select('route', $data['routes'], null, ['class' => 'form-control', "onChange" => "loadAllVehicles(this)"]) !!}
                            @include('includes.form_fields_validation_message', ['name' => 'route'])
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <label class="col-sm-2 control-label">Vehicle</label>
                        <div class="col-sm-4">
                            <select name="vehicle_select" class="form-control vehicle_select">
                                <option value="0"> Select Vehicle </option>
                            </select>
                        </div>

                        {!! Form::label('status', 'Status', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-4">
                            {!! Form::select('status', ["0"=>"Select Status...", "1"=>"Active","2"=>"In-Active"], null, ['class' => 'form-control']) !!}
                            @include('includes.form_fields_validation_message', ['name' => 'status'])
                        </div>
                    </div>
                    <br/>
                </div>
                <div class="clearfix form-actions">
                    <div class="align-right">
                        <button class="btn btn-info" type="submit" id="filter-btn">
                            <i class="fa fa-filter bigger-110"></i>
                            Filter
                        </button>
                    </div>
                </div>
                <br/>
                {{--{!! Form::close() !!}--}}

            </div>
        </div>
    </div>
</div>