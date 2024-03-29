<div class="row">
    <div class="col-md-12">
        @include('includes.data_table_header')
        <!-- div.table-responsive -->
        <div class="table-responsive">
            {!! Form::open(['route' => $base_route.'.bulk-action', 'id' => 'bulk_action_form']) !!}
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
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Students</th>
                    <th>Status</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if (isset($data['guardian']) && $data['guardian']->count() > 0)
                    @php($i=1)
                    @foreach($data['guardian'] as $guardian)
                        <tr>
                            <td class="center first-child">
                                <label>
                                    <input type="checkbox" name="chkIds[]" value="{{ $guardian->id }}" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>
                            <td>{{ $i }}</td>
                            <td><a href="{{ route($base_route.'.view', ['id' => $guardian->id]) }}"> {{ $guardian->guardian_first_name.' '.$guardian->guardian_middle_name.' '. $guardian->guardian_last_name }}</a></td>
                            <td>{{ $guardian->guardian_address }}</td>
                            <td>{{ $guardian->guardian_residence_number.' | '.$guardian->guardian_mobile_1 }}</td>
                            <td>
                                @if($guardian->students()->get()->count() > 0 )
                                    <table>
                                    @foreach($guardian->students()->get() as $student)
                                        <tr>
                                            <td><a href="{{ route('student.view', ['id' => $student->id]) }}" target="_blank"> {{ '['.$student->reg_no .'] '. $student->first_name.' '.$student->middle_name.' '. $student->last_name }}</a></td>
                                        </tr>
                                    @endforeach
                                    </table>
                                @endif
                            </td>
                            <td class="hidden-480 ">
                                <div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle {{ $guardian->status == 'active'?"btn-info":"btn-warning" }}" >
                                        {{ $guardian->status == 'active'?"Active":"In Active" }}
                                        <span class="ace-icon fa fa-caret-down icon-on-right"></span>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li>
                                            &nbsp;&nbsp; <a href="{{ route($base_route.'.active', ['id' => $guardian->id]) }}" title="Active"><i class="fa fa-check" aria-hidden="true"></i></a>
                                        </li>
<hr/>
                                        <li>
                                           &nbsp;&nbsp; <a href="{{ route($base_route.'.in-active', ['id' => $guardian->id]) }}" title="In-Active"><i class="fa fa-remove" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="{{ route($base_route.'.view', ['id' => $guardian->id]) }}" class="btn btn-primary btn-sm">
                                        <i class="ace-icon fa fa-eye bigger-130"></i>
                                    </a>

                                    <a href="{{ route($base_route.'.edit', ['id' => $guardian->id]) }}" class="btn btn-success btn-sm">
                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                    </a>

                                    <a href="{{ route($base_route.'.delete', ['id' => $guardian->id]) }}" class="btn btn-danger btn-sm bootbox-confirm" >
                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                    </a>
                                </div>
                               
                            </td>
                        </tr>
                        @php($i++)
                    @endforeach
                @else
                    <tr>
                        <td colspan="11">No {{ $panel }} data found. Please Filter {{ $panel }} to show. </td>
                    </tr>
                @endif
                </tbody>
            </table>
            {!! Form::close() !!}

        </div>
    </div>
</div>