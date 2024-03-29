<div class="row">
    <div class="col-md-12">
        @include('includes.data_table_header')
        <!-- div.table-responsive -->
        <div>
            {!! Form::open(['route' => $base_route.'.bulk-action', 'id' => 'bulk_action_form']) !!}

                <table  class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </th>
                            <th>S.N.</th>
                            <th>{{ $panel }}</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($data['designation']) && $data['designation']->count() > 0)
                            @php($i=1)
                            @foreach($data['designation'] as $designation)
                                <tr>
                                    <td class="center first-child">
                                        <label>
                                            <input type="checkbox" name="chkIds[]" value="{{ $designation->id }}" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>
                                    <td>{{ $i }}</td>
                                    <td>{{ $designation->title }}</td>
                                    <td class="hidden-480 ">
                                        <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle {{ $designation->status == 'active'?"btn-info":"btn-warning" }}" >
                                                {{ $designation->status == 'active'?"Active":"In Active" }}
                                                <span class="ace-icon fa fa-caret-down icon-on-right"></span>
                                            </button>

                                            <ul class="dropdown-menu">
                                                <li style="margin:10px">
                                                    <a href="{{ route($base_route.'.active', ['id' => $designation->id]) }}"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                </li>
<HR/>
                                                <li style="margin:10px">
                                                    <a href="{{ route($base_route.'.in-active', ['id' => $designation->id]) }}"><i class="fa fa-remove" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>

                                    </td>
                                    <td>
                                       
                                            <a class="green btn btn-success" href="{{ route($base_route.'.edit', ['id' => $designation->id]) }}">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a href="{{ route($base_route.'.delete', ['id' => $designation->id]) }}" class="red bootbox-confirm btn btn-danger">
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