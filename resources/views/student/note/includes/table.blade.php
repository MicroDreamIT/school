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
                            <th>Reg.No.</th>
                            <th>{{ $panel }}</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($data['note']) && $data['note']->count() > 0)
                            @php($i=1)
                            @foreach($data['note'] as $note)
                                <tr>
                                    <td class="center first-child">
                                        <label>
                                            <input type="checkbox" name="chkIds[]" value="{{ $note->id }}" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>
                                    <td>{{ $i }}</td>
                                    <td><a href="{{ route('student.view', ['id' => $note->member_id]) }}"> {{  ViewHelper::getStudentById( $note->member_id ) }}</a></td>
                                    <td>{{ $note->subject }}</td>
                                    <td class="hidden-480 ">
                                        <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle {{ $note->status == 'active'?"btn-info":"btn-warning" }}" >
                                                {{ $note->status == 'active'?"Active":"In Active" }}
                                                <span class="ace-icon fa fa-caret-down icon-on-right"></span>
                                            </button>

                                            <ul class="dropdown-menu">
                                                <li style="margin:5px">
                                                    <a href="{{ route($base_route.'.active', ['id' => $note->id]) }}"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                </li>
<hr/>
                                                <li style="margin:5px">
                                                    <a href="{{ route($base_route.'.in-active', ['id' => $note->id]) }}"><i class="fa fa-remove" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                       

                                            <a href="{{ route($base_route.'.edit', ['id' => $note->id]) }}" class="btn btn-success btn-sm">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a href="{{ route($base_route.'.delete', ['id' => $note->id]) }}" class="btn btn-danger btn-sm bootbox-confirm" >
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                    
                                      
                                    </td>
                                </tr>
                                @php($i++)
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6">No {{ $panel }} data found. Please Filter {{ $panel }} to show. </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            {!! Form::close() !!}
        </div>
    </div>
</div>