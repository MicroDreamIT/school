<div class="row">
    <div class="col-md-12">
        @include('includes.data_table_header')
        <!-- div.table-responsive -->
        <div>
            {!! Form::open(['route' => $base_route.'.bulk-action', 'id' => 'bulk_action_form']) !!}
                <table class="table table-striped dataex-html5-selectors">
                    <thead>
                        <tr>
                            <th class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </th>
                            <th>S.N.</th>
                            <th>{{ $panel }} <i class="ace-icon fa fa-download bigger-120"></i> &nbsp;</th>
                            <th>Semester/Public</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($data['download']) && $data['download']->count() > 0)
                            @php($i=1)
                            @foreach($data['download'] as $download)
                                <tr>
                                    <td class="center first-child">
                                        <label>
                                            <input type="checkbox" name="chkIds[]" value="{{ $download->id }}" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>
                                    <td>{{ $i }}</td>
                                    <td>
                                        <a href="{{ asset('downloads'.DIRECTORY_SEPARATOR.$download->file) }}" target="_blank">
                                           {{ $download->title }}
                                        </a>
                                    </td>
                                    <td>{{ $download->semesters_id?ViewHelper::getSemesterById($download->semesters_id):'Public' }}</td>
                                    <td class="hidden-480 ">
                                        <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle {{ $download->status == 'active'?"btn-info":"btn-warning" }}" >
                                                {{ $download->status == 'active'?"Active":"In Active" }}
                                                <span class="ace-icon fa fa-caret-down icon-on-right"></span>
                                            </button>

                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="{{ route($base_route.'.active', ['id' => $download->id]) }}"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                </li>

                                                <li>
                                                    <a href="{{ route($base_route.'.in-active', ['id' => $download->id]) }}"><i class="fa fa-remove" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a href="{{ asset('downloads'.DIRECTORY_SEPARATOR.$download->file) }}" target="_blank" class="btn btn-primary btn-sm">
                                                <i class="ace-icon fa fa-eye bigger-130"></i>
                                            </a>

                                            <a href="{{ route($base_route.'.edit', ['id' => $download->id]) }}" class="btn btn-success btn-sm">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a href="{{ route($base_route.'.delete', ['id' => $download->id]) }}" class="btn btn-danger btn-sm bootbox-confirm" >
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>
                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-sm btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="{{ route($base_route.'.edit', ['id' => $download->id]) }}" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route($base_route.'.delete', ['id' => $download->id]) }}" class="tooltip-error bootbox-confirm" data-rel="tooltip" title="Delete">
                                                            <span class="red ">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
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