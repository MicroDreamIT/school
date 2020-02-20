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
                            <h2 class="content-header-title float-left mb-0">Resident Manager</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Hotel</a>
                                    </li>
                                    <li class="breadcrumb-item active">History
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
             @include('hostel.includes.buttons')
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
                        <div class="form-horizontal ">
                                  @include($view_path.'.history.includes.form')
                            <div class="hr hr-18 dotted hr-double"></div>
                               @include($view_path.'.history.includes.table')
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
    
    </div>

   @endsection
     <!-- inline scripts related to this page -->
    @section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#filter-btn').click(function () {
                var url = '{{ $data['url'] }}';
                var flag = false;
                var user_type = $('select[name="user_type"]').val();
                var reg_no = $('input[name="reg_no"]').val();
                var status = $('select[name="status"]').val();
                var hostel = $('select[name="hostel"]').val();
                var room = $('select[name="room_select"]').val();
                var bed = $('select[name="bed_select"]').val();

                if (reg_no !== '') {
                    url += '?reg_no=' + reg_no;
                    flag = true;
                }


                if (user_type > 0) {
                    if (flag) {
                        url += '&user_type=' + user_type;
                    } else {
                        url += '?user_type=' + user_type;
                        flag = true;
                    }
                }else{
                    toastr.warning('Please Select user Type', 'Warning:');
                    return false;
                }

                if (status !== ''  && status > 0) {
                    if (flag) {
                        url += '&status=' + status;
                    } else {
                        url += '?status=' + status;
                        flag = true;
                    }
                }

                if (hostel !== ''  && hostel > 0) {
                    if (flag) {
                        url += '&hostel=' + hostel;
                    } else {
                        url += '?hostel=' + hostel;
                        flag = true;
                    }
                }

                if (room !== ''  && room > 0) {
                    if (flag) {
                        url += '&room=' + room;
                    } else {
                        url += '?room=' + room;
                        flag = true;
                    }
                }


                if (bed !== ''  && bed > 0) {
                    if (flag) {
                        url += '&bed=' + bed;
                    } else {
                        url += '?bed=' + bed;
                        flag = true;
                    }
                }

                if(flag){
                    location.href = url;
                }else{
                    toastr.warning('No any Target to Search', 'Warning:');
                    return false;
                }

            });

            $('#shift-btn').click(function () {
                var flag = false;
                var hostel = $('select[name="hostel_bulk"]').val();
                if (hostel > 0 ) {
                    return true;
                }else{
                    toastr.info('Please Select Hostel', 'Info:');
                    return false;
                }
            });

        });

        function loadAllRooms($this) {
            $.ajax({
                type: 'POST',
                url: '{{ route('hostel.resident.find-rooms') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    hostel_id: $this.value
                },
                success: function (response) {
                    var data = $.parseJSON(response);
                    if (data.error) {
                        $.notify(data.message, "warning");
                    } else {
                        $('.room_select').html('').append('<option value="0">Select Room...</option>');
                        $.each(data.rooms, function(key,valueObj){
                            $('.room_select').append('<option value="'+valueObj.id+'">'+valueObj.room_number+'</option>');
                        });
                    }
                }
            });

        }

        function loadAllBeds($this) {
            $.ajax({
                type: 'POST',
                url: '{{ route('hostel.resident.find-beds') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    room_id: $this.value
                },
                success: function (response) {
                    var data = $.parseJSON(response);
                    if (data.error) {
                        $.notify(data.message, "warning");
                    } else {
                        $('.bed_select').html('').append('<option value="0">Select Beds...</option>');
                        $.each(data.beds, function(key,valueObj){
                            $('.bed_select').append('<option value="'+valueObj.id+'">'+valueObj.bed_number+'</option>');
                        });
                    }
                }
            });

        }

        function loadRooms($this) {
            $.ajax({
                type: 'POST',
                url: '{{ route('hostel.find-rooms') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    hostel_id: $this.value
                },
                success: function (response) {
                    var data = $.parseJSON(response);
                    if (data.error) {
                        $.notify(data.message, "warning");
                    } else {
                        $('.room_select').html('').append('<option value="0">Select Room...</option>');
                        $.each(data.rooms, function(key,valueObj){
                            $('.room_select').append('<option value="'+valueObj.id+'">'+valueObj.room_number+'</option>');
                        });
                    }
                }
            });

        }

        function loadBeds($this) {
            $.ajax({
                type: 'POST',
                url: '{{ route('hostel.find-beds') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    room_id: $this.value
                },
                success: function (response) {
                    var data = $.parseJSON(response);
                    if (data.error) {
                        $.notify(data.message, "warning");
                    } else {
                        $('.bed_select').html('').append('<option value="0">Select Beds...</option>');
                        $.each(data.beds, function(key,valueObj){
                            $('.bed_select').append('<option value="'+valueObj.id+'">'+valueObj.bed_number+'</option>');
                        });
                    }
                }
            });

        }
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#filter-btn').click(function () {
                var url = '{{ $data['url'] }}';
                var flag = false;
                var user_type = $('select[name="user_type"]').val();
                var reg_no = $('input[name="reg_no"]').val();
                var status = $('select[name="status"]').val();
                var hostel = $('select[name="hostel"]').val();
                var room = $('select[name="room_select"]').val();
                var bed = $('select[name="bed_select"]').val();

                if (reg_no !== '') {
                    url += '?reg_no=' + reg_no;
                    flag = true;
                }


                if (user_type > 0) {
                    if (flag) {
                        url += '&user_type=' + user_type;
                    } else {
                        url += '?user_type=' + user_type;
                        flag = true;
                    }
                }else{
                    toastr.warning('Please Select user Type', 'Warning:');
                    return false;
                }

                if (status > 0) {
                    if (flag) {
                        url += '&status=' + status;
                    } else {
                        url += '?status=' + status;
                        flag = true;
                    }
                }

                if (hostel > 0) {
                    if (flag) {
                        url += '&hostel=' + hostel;
                    } else {
                        url += '?hostel=' + hostel;
                        flag = true;
                    }
                }

                if (room > 0) {
                    if (flag) {
                        url += '&room=' + room;
                    } else {
                        url += '?room=' + room;
                        flag = true;
                    }
                }


                if (bed > 0) {
                    if (flag) {
                        url += '&bed=' + bed;
                    } else {
                        url += '?bed=' + bed;
                        flag = true;
                    }
                }

                var year = $('select[name="year"]').val();
                var history_type = $('select[name="history_type"]').val();


                if (year > 0) {
                    if (flag) {
                        url += '&year=' + year;
                    } else {
                        url += '?year=' + year;
                        flag = true;
                    }
                }

                if (history_type !=="" && history_type !== '0') {
                    if (flag) {
                        url += '&history_type=' + history_type;
                    } else {
                        url += '?history_type=' + history_type;
                        flag = true;
                    }
                }


                if(flag){
                    location.href = url;
                }else{
                    toastr.warning('No any Target to Search', 'Warning:');
                    return false;
                }

            });
        });

        function loadAllRooms($this) {
            $.ajax({
                type: 'POST',
                url: '{{ route('hostel.resident.find-rooms') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    hostel_id: $this.value
                },
                success: function (response) {
                    var data = $.parseJSON(response);
                    if (data.error) {
                        $.notify(data.message, "warning");
                    } else {
                        $('.room_select').html('').append('<option value="0">Select Room...</option>');
                        $.each(data.rooms, function(key,valueObj){
                            $('.room_select').append('<option value="'+valueObj.id+'">'+valueObj.room_number+'</option>');
                        });
                    }
                }
            });

        }

        function loadAllBeds($this) {
            $.ajax({
                type: 'POST',
                url: '{{ route('hostel.resident.find-beds') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    room_id: $this.value
                },
                success: function (response) {
                    var data = $.parseJSON(response);
                    if (data.error) {
                        $.notify(data.message, "warning");
                    } else {
                        $('.bed_select').html('').append('<option value="0">Select Beds...</option>');
                        $.each(data.beds, function(key,valueObj){
                            $('.bed_select').append('<option value="'+valueObj.id+'">'+valueObj.bed_number+'</option>');
                        });
                    }
                }
            });

        }
    </script>


    @include('includes.scripts.dataTable_scripts')
@endsection