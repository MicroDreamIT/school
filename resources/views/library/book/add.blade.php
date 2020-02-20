@extends('layouts.master_new')
@section('css')
    <!-- page specific plugin styles -->
@endsection
@section('content')

     <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Books Manager</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"> Detail</a>
                                    </li>
                                    <li class="breadcrumb-item active">  
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
           @include('library.includes.buttons')<br>
                    <!-- PAGE CONTENT BEGINS -->
                    @include('includes.flash_messages')
                    @include('includes.validation_error_messages')
                </div>
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                             
                                <div class="card-content" style="margin:20px;">
                                    
            
                <div class="row">
                    <div class="col-md-12 ">
                      
                 @include($view_path.'.includes.buttons')
                        <div class="form-horizontal">
                            {!! Form::open(['route' => $base_route.'.store', 'method' => 'POST', 'class' => 'form-horizontal',
                    'id' => 'validation-form', "enctype" => "multipart/form-data"]) !!}

                                @include($view_path.'.includes.form')

                            <div class="clearfix form-actions">
                                <div class="col-md-12 align-right">
                                    <button class="btn" type="reset">
                                        <i class="fa fa-undo bigger-110"></i>
                                        Reset
                                    </button>

                                    <button class="btn btn-primary" type="submit" value="Save" name="add_book" id="add-book">
                                        <i class="fa fa-save bigger-110"></i>
                                        Save
                                    </button>

                                    <button class="btn btn-success" type="submit" value="Save" name="add_book_another" id="add-book-another">
                                        <i class="fa fa-save bigger-110"></i>
                                        <i class="fa fa-plus bigger-110"></i>
                                        Save And Add Another
                                    </button>
                                </div>
                            </div>

                            <div class="hr hr-18 dotted hr-double"></div>
                            {!! Form::close() !!}
                        </div>
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
    
@endsection

    </div>
  <!-- inline scripts related to this page -->
    @section('js')
      @include('includes.scripts.inputMask_script')
    <script type="text/javascript">
       /* $(document).ready(function () {

            $('#filter-btn').click(function () {
                var url = '{{ $data['url'] }}';
                var flag = false;
                var report_type = $('select[name="report_type"]').val();
                var start_date = $('input[name="start_date"]').val();
                var end_date = $('input[name="end_date"]').val();

                if (report_type !== '') {
                    url += '?report_type=' + report_type;
                    flag = true;
                }

                if (start_date !== '') {

                    if (flag) {

                        url += '&start_date=' + start_date;

                    } else {

                        url += '?start_date=' + start_date;
                        flag = true;

                    }
                }

                if (end_date !== '') {

                    if (flag) {

                        url += '&end_date=' + end_date;

                    } else {

                        url += '?end_date=' + end_date;
                        flag = true;

                    }
                }

                location.href = url;

            });

        });
*/


        $(document).ready(function () {
            /*Change Field Value on Capital Letter When Keyup*/
            $(function() {
                $('.upper').keyup(function() {
                    this.value = this.value.toUpperCase();
                });
            });
            /*end capital function*/

            var url = '{{ $data['url'] }}';
            $('#add-book') || $('#add-book-another').click(function () {
                console.log('ok');
                if(start == 0 || end == 0){
                    toastr.warning('Attention!, Please Enter Value Greater Than 0','Warning:');
                    false;
                }
                if(start > end){
                    toastr.warning('Attention!, Yo have enter End Value is Less than Starting. Correct It.','Warning:');
                    false;
                }

                location.href = url;
            });

           /* $('#add-book-another').click(function () {

            });*/

        });

        function changeStartCode(){
            code =  $('input[name="code"]').val();
            start =  $('input[name="start"]').val();
            end =  $('input[name="end"]').val();

            if(start == 0 || end == 0){
                //toastr.warning('Attention!, Please Enter Value Greater Than 0','Warning:');
            }
            end = parseInt(start);
            if(start == end){
                totalCopy = 1;
            }else{
                totalCopy = (end - start) + 1;
            }
            $('input[name="start_preview"]').val(code+start);
        }

        function changeEndCode(){
            code =  $('input[name="code"]').val();
            start =  $('input[name="start"]').val();
            end =  $('input[name="end"]').val();

            if(start == 0 || end == 0){
                //alert('Attention!, Please Enter Value Greater Than 0');
                toastr.warning('Attention!, Please Enter Value Greater Than 0','Warning:');
            }
            //$('#errorShow').text('');
            if(start > end){
                //alert('Attention!, Yo have enter End Value is Less than Starting. Correct It.');
                toastr.warning('Attention!, Yo have enter End Value is Less than Starting. Correct It.','Warning:');
            }
            $('#errorShow').text('');

            $(':input[type="submit"]').prop('disabled', false);
            if(start == end){
                totalCopy = 1;
            }else{
                totalCopy = (end - start) + 1;
            }

            $('input[name="end_preview"]').val(code+end);
            $('input[name="total_copy"]').val(totalCopy);
        }
    </script>

  
    @include('includes.scripts.datepicker_script')
  @endsection