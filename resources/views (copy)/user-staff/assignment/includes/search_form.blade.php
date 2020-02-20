<h4 class="header large lighter blue" id="filterBox"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search Assignment</h4>
{!! Form::open(['route' => 'user-staff.assignment', 'method' => 'GET', 'class' => 'form-horizontal']) !!}
    <div class="form-horizontal" id="filterDiv">
    <div class="form-group">
        <label class="col-sm-1 control-label">Year</label>
        <div class="col-sm-2">
            {!! Form::select('year', $data['years'], null, ['class' => 'form-control', 'onChange' => 'loadSemesters(this);']) !!}
        </div>

        <label class="col-sm-1 control-label">Faculty/Class</label>
        <div class="col-sm-4">
            {!! Form::select('faculty', $data['faculties'], null, ['class' => 'form-control chosen-select', 'onChange' => 'loadSemesters(this);']) !!}
        </div>

        <label class="col-sm-1 control-label">Sem./Sec.</label>
        <div class="col-sm-3">
            <select name="semesters_id" class="form-control semesters_id" onChange="loadSubject(this)" >
                <option value=""> Select Sem./Sec. </option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Subject</label>
        <div class="col-sm-4">
            <select name="subjects_id" class="form-control semester_subject" >
                <option  value=""> Select Subject </option>
            </select>
        </div>


        {!! Form::label('publish_date', 'Publish Date', ['class' => 'col-sm-2 control-label']) !!}
        <div class=" col-sm-4">
            <div class="input-group ">
                {!! Form::text('publish_date_start', null, ["placeholder" => "YYYY-MM-DD", "class" => "input-sm form-control border-form input-mask-date date-picker", "data-date-format" => "yyyy-mm-dd"]) !!}
                <span class="input-group-addon">
                        <i class="fa fa-exchange"></i>
                    </span>
                {!! Form::text('publish_date_end', null, ["placeholder" => "YYYY-MM-DD", "class" => "input-sm form-control border-form input-mask-date date-picker", "data-date-format" => "yyyy-mm-dd"]) !!}
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
</div>

{!! Form::close() !!}