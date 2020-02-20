@extends('layouts.master_new')
@section('content')


    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Staff Manager</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Import</a>
                                    </li>
                                    
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
            <div class="content-body">
              @include($view_path.'.includes.buttons')
                    <!-- PAGE CONTENT BEGINS -->
                         @include('includes.flash_messages')
                            @include('includes.validation_error_messages')
                </div>
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Import</h4>
                                </div>
                                <div class="card-content" style="margin:20px;">
                                    
                    <div class="col-xs-12 ">
                
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="form-horizontal">
                            {!! Form::open(['route' => $base_route.'.bulk.import', 'method' => 'POST', 'class' => 'form-horizontal',
                             'id' => 'validation-form', "enctype" => "multipart/form-data"]) !!}
                                <hr>
                                <a href="{{ asset('assets/csv-template/staff-import.csv') }}" target="_blank" class="easy-link-menu"><h3><i class="fa fa-download"></i> CSV Template for Bulk Staff Import</h3></a>
                                <hr>
                                <div class="form-group">
                                    {!! Form::label('file', 'File', ['class' => 'col-sm-2 control-label']) !!}
                                    <div class="col-sm-4">
                                        {!! Form::file('file', null, ["class" => "form-control border-form", "required"]) !!}
                                        @include('includes.form_fields_validation_message', ['name' => 'file'])
                                    </div>
                                </div>

                                <div class="clearfix form-actions">
                                    <div class="col-md-12 align-right">
                                        <button class="btn btn-info" type="submit" id="filter-btn">
                                            <i class="fa fa-upload"></i>
                                            Import
                                        </button>
                                    </div>
                                </div>

                                <div class="hr hr-18 dotted hr-double"></div>
                            {!! Form::close() !!}
                        </div>
                        </div><!-- /.col -->
                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
              
                <!--/ Scroll - horizontal and vertical table -->

            </div>
        </div>
    
    </div>


    <!-- page specific plugin scripts -->
@endsection
@section('js')

    @include('includes.scripts.jquery_validation_scripts')
    @include('student.registration.includes.student-comman-script')
    @include('includes.scripts.inputMask_script')
  @endsection




