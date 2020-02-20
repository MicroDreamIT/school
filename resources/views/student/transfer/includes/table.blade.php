<div class="row">
    <div class="col-md-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{ $panel }} List</h4>
        {!! Form::open(['route' => $base_route.'.transfering', 'id' => 'bulk_action_form']) !!}
        <div class="clearfix">
            <div class="row">
                    <label class="col-sm-2 control-label">Faculty/Class</label>
                    <div class="col-sm-4">
                        {!! Form::select('faculty', $data['faculties'], null, ['class' => 'form-control', 'onChange' => 'loadSemesters(this);','id'=>'transfer-faculty', "required"]) !!}

                    </div>

                    <label class="col-sm-2 control-label">Sem./Sec.</label>
                    <div class="col-sm-4">
                        <select name="semester_select" class="form-control semester_select" id='transfer-semester'  required>
                            <option> Select Sem./Sec. </option>
                        </select>
                    </div>
                </div>
                <br/>
                <div class="row">
                <label class="col-sm-2 control-label">Status</label>
                <div class="col-sm-4">
                    {!! Form::select('student_status', $data['academic_status'], null, ['class' => 'form-control','id'=>'transfer-status' , "required"]) !!}
                </div>
                <button type="submit" class="btn btn-success btn-sm m-1" id="student-transfer-btn"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Transfer</button>
                <button type="reset" class="btn btn-warning btn-sm m-1"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Reset</button>
            </div>
            <hr class="hr-8">
            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header">
            {{ $panel }}  Record list on table. Filter {{ $panel }} using the filter.
        </div>
        <!-- div.table-responsive -->
        <div class="table-responsive">
            <table  class="table table-striped dataex-html5-selectors">
                    <thead>
                        <tr>
                        <th class="center">
                            <label class="pos-rel">
                                <input type="checkbox" class="ace" />
                                <span class="lbl"></span>
                            </label>
                        </th>
                        <th>S.N.</th>
                        <th>Faculty/Class</th>
                        <th>Sem./Sec.</th>
                        <th>Reg. Date</th>
                        <th>Reg. Num.</th>
                        <th>Name of Student</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (isset($data['student']) && $data['student']->count() > 0)
                        @php($i=1)
                        @foreach($data['student'] as $student)
                            <tr>
                                <td class="center first-child">
                                    <label>
                                        <input type="checkbox" name="chkIds[]" value="{{ $student->id }}" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td>{{ $i }}</td>
                                <td> {{  ViewHelper::getFacultyTitle( $student->faculty ) }}</td>
                                <td> {{  ViewHelper::getSemesterTitle( $student->semester ) }}</td>
                                <td>{{ \Carbon\Carbon::parse($student->reg_date)->format('Y-m-d')}}
                                </td>
                                <td><a href="{{ route($base_route.'.view', ['id' => $student->id]) }}">{{ $student->reg_no }}</a></td>
                                <td> {{ $student->first_name.' '.$student->middle_name.' '. $student->last_name }}</td>
                                <td>
                                    {{ ViewHelper::getAcademicStatus($student->academic_status)}}
                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle {{ $student->status == 'active'?"btn-info":"btn-warning" }}" >
                                            {{ $student->status == 'active'?"Active":"In Active" }}
                                        </button>
                                    </div>
                                </td>

                            </tr>
                            @php($i++)
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10">No {{ $panel }} data found. Please Filter {{ $panel }} to show. </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
        </div>
        {!! Form::close() !!}
    </div>
</div>


