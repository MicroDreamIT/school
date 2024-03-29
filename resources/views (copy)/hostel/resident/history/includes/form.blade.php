<div id="accordion" class="accordion-style1 panel-group hidden-print">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false">
                    <h3 class="header large lighter blue btn btn-primary">
                        <i class="bigger-110 ace-icon fa fa-angle-double-right" data-icon-hide="ace-icon fa fa-angle-double-down" data-icon-show="ace-icon fa fa-angle-double-right"></i>
                        Filter {{$panel}} History
                        <i class="fa fa-filter" aria-hidden="true"></i>&nbsp;
                    </h3>
                </a>
            </h4>
        </div>

        <div class="panel-collapse collapse" id="collapseOne" aria-expanded="false" style="height: 0px;">
            <div class="panel-body">
                {{--{!! Form::open(['route' => $base_route,'method' => 'GET', 'class' => 'form-horizontal', "enctype" => "multipart/form-data"]) !!}--}}
                <div class="clearfix form-horizontal">
                    <div class="row">
                        {!! Form::label('user_type', 'Type', ['class' => 'col-sm-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::select('user_type', ["0"=>"Select Type","1"=>"Student","2"=>"Staff"], null, ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::label('reg_no', 'REG No.', ['class' => 'col-sm-1 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::text('reg_no', null, ["placeholder" => "", "class" => "form-control border-form","autofocus"]) !!}
                        </div>

                        {!! Form::label('year', 'Year', ['class' => 'col-sm-1 control-label']) !!}
                        <div class="col-md-1">
                            {!! Form::select('year', $data['years'], null, ['class' => 'form-control']) !!}
                            @include('includes.form_fields_validation_message', ['name' => 'year'])
                        </div>

                        {!! Form::label('history_type', 'History Type', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-md-2">
                            {!! Form::select('history_type', ["0"=>"Select History...", "Registration"=>"Registration", "Shift"=>"Shift","Leave"=>"Leave", "Renew"=>"Renew"], null, ['class' => 'form-control']) !!}
                            @include('includes.form_fields_validation_message', ['name' => 'history_type'])
                        </div>
                    </div>
                    <br/>
                    <div class="row">

                        {!! Form::label('hostel', 'Hostel', ['class' => 'col-sm-1 control-label']) !!}
                        <div class="col-md-4">
                            {!! Form::select('hostel', $data['hostels'], null, ['class' => 'form-control', "onChange" => "loadAllRooms(this)"]) !!}
                            @include('includes.form_fields_validation_message', ['name' => 'hostel'])
                        </div>

                        <label class="col-md-1 control-label">Room</label>
                        <div class="col-md-3">
                            <select name="room_select" class="form-control room_select" onChange="loadAllBeds(this)">
                                <option value="0"> Select Room </option>
                            </select>
                        </div>

                        <label class="col-md-1 control-label">Bed</label>
                        <div class="col-md-2">
                            <select name="bed_select" class="form-control bed_select">
                                <option value="0"> Select Bed </option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="clearfix form-actions">
                    <div class="align-right">
                        <button class="btn btn-info" type="submit" id="filter-btn">
                            <i class="fa fa-filter bigger-110"></i>
                            Filter
                        </button>
                    </div>
                </div>
                {{--{!! Form::close() !!}--}}

            </div>
        </div>
    </div>
</div>