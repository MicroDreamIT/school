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
                            <h2 class="content-header-title float-left mb-0">Transaction Ledger Manager</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Detail
</a>
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
           @include('account.includes.buttons')
                    <!-- PAGE CONTENT BEGINS -->
                        @include('includes.flash_messages')
                        @include('includes.validation_error_messages')

                       @if (isset($data['row']) && $data['row']->count() > 0)
                                @include($view_path.'.edit')
                            @else
                                @include($view_path.'.add')
                            @endif
                       
                     
                </div>
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                             
                                <div class="card-content" style="margin:20px;">
                                    
            
                <div class="row">
                    <div class="col-md-12 ">
                      
                   @include('account.transaction.includes.buttons')
                        <div class="form-horizontal ">
                                
                            <div class="hr hr-18 dotted hr-double"></div>
                        
                       @include($view_path.'.includes.table')
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

   <!-- page specific plugin scripts -->
   @section('js')
    <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
    @include('includes.scripts.delete_confirm')
    @include('includes.scripts.bulkaction_confirm')
   {{{-- @include('includes.scripts.dataTable_scripts')--}}
    
    <script type="text/javascript">
        $(document).ready(function () {
            document.getElementById('create_ledger_form').style.display = 'none';
            document.getElementById('search_ledger_form').style.display = 'none';
            /*$(function() {
                $('.upper').keyup(function() {
                    this.value = this.value.toUpperCase();
                });
            });*/
        });

        $('#create_ledger_btn').click(function () {
            document.getElementById('create_ledger_form').style.display = 'block';
            document.getElementById('search_ledger_form').style.display = 'none';
        });

        $('#search_ledger_btn').click(function () {
            document.getElementById('search_ledger_form').style.display = 'block';
            document.getElementById('create_ledger_form').style.display = 'none';
        });

        $('#filter-btn').click(function () {

            var url = '{{ $data['url'] }}';
            var flag = false;
            var tr_head = $('input[name="tr_head"]').val();
            var acc_id = $('select[name="acc_id"]').val();

            if (tr_head !== '') {
                url += '?tr_head=' + tr_head;
                flag = true;
            }

            if (acc_id !== '' && acc_id > 0) {

                if (flag) {

                    url += '&acc_id=' + acc_id;

                } else {

                    url += '?acc_id=' + acc_id;
                    flag = true;

                }
            }

            location.href = url;

        });


    </script>
    @endsection