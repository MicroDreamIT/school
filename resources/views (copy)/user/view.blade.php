
     <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">User Manager</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active">Detail
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
             
                    <!-- PAGE CONTENT BEGINS -->
                </div>
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                             <div class="card-content" style="margin:20px;">
                                    
                    <div class="row">
                    <div class="col-md-12 ">
                        @include('includes.flash_messages')

                        <div class="table-responsive">
                            <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th width="20%">Column</th>
                                    <th>Value</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>Profile Image</td>
                                    <td>
                                        @if ($data['row']->profile_image)
                                            <img src="{{ asset('images/user/'.$data['row']->profile_image) }}" width="150px">
                                        @else
                                            <p>No image</p>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>{{ $data['row']->name }}</td>
                                </tr>

                                <tr>
                                    <td>Email</td>
                                    <td>{{ $data['row']->email }}</td>
                                </tr>

                                <tr>
                                    <td>Address</td>
                                    <td>{{ $data['row']->address }}</td>
                                </tr>
                                <tr>
                                    <td>Contact Number</td>
                                    <td>{{ $data['row']->contact_number }}</td>
                                </tr>

                                <tr>
                                    <td>Password</td>
                                    <td>
                                        <div id="show-password-change"><button class="btn btn-sm btn-primary">Change Password</button></div>
                                        <div id="change-password">
                                            <div id="cancel-password-change"><button class="btn btn-sm btn-warning">Cancel</button></div>
                                            <hr>
                                            {!! Form::model($data['row'], ['route' => ['user.password-change', encrypt($data['row']->id)], 'method' => 'POST', 'class' => 'form-horizontal',
                                                'id' => 'validation-form', "enctype" => "multipart/form-data"]) !!}

                                            {!! Form::hidden('id', encrypt($data['row']->id)) !!}

                                            <div class="form-group">
                                                {!! Form::label('password', 'Password', ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                    {!! Form::password('password',  ["placeholder" => "", "class" => "form-control border-form","autofocus","id"=>"pass", "required"]) !!}
                                                    @include('includes.form_fields_validation_message', ['name' => 'password'])
                                                </div>

                                                {!! Form::label('confirmPassword', 'Confirm Password', ['class' => 'col-sm-2 control-label']) !!}
                                                <div class="col-sm-4">
                                                    {!! Form::password('confirmPassword',  ["placeholder" => "", "class" => "form-control border-form"/*,"onkeyup"=>"passCheck()"*/,"id"=>"repatpass", "required"]) !!}
                                                    @include('includes.form_fields_validation_message', ['name' => 'confirmPassword'])
                                                </div>
                                            </div>

                                            <div class="clearfix form-actions">
                                                <div class="align-right">
                                                    <button class="btn btn-info" type="submit">
                                                        <i class="icon-ok bigger-110"></i>
                                                        Change
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="hr hr-24"></div>

                                            {!! Form::close() !!}
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Status</td>
                                    <td>{{ $data['row']->status?'Active':'Inactive' }}</td>
                                </tr>


                                </tbody>
                            </table>
                        </div><!-- /.table-responsive -->
                    </div><!-- /.col -->
                </div><!-- /.row -->






                                </div>
                            </div>
                        </div>
                    </div>
                </section>
              
                <!--/ Scroll - horizontal and vertical table -->

            </div>
        </div>
    
    </div>

   
     <!-- inline scripts related to this page -->
     {{--@include('includes.scripts.jquery_validation_scripts')
    @include('includes.scripts.delete_confirm')
    @include('includes.scripts.bulkaction_confirm')
    @include('includes.scripts.dataTable_scripts')--}}
    <script>

        /*
        * $("#hide").click(function(){
  $("p").hide();
});

$("#show").click(function(){
  $("p").show();
});
        * */
        $(document).ready(function () {
            $('#show-password-change').show();
            $('#change-password').hide();

            $('#show-password-change').click(function () {
                $('#show-password-change').hide();
                $('#change-password').show();
            });

            $('#cancel-password-change').click(function () {
                $('#show-password-change').show();
                $('#change-password').hide();
            });

        });
    </script>