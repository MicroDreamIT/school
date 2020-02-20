@extends('layouts.master')

@section('css')
    <!-- page specific plugin styles -->
    <style>
        .main-content-inner {
            /*float: left;*/
            width: 210mm;
            height: 296mm;
            border: 15px #438eb9 solid;
        }
        @page {
            size: A4;
            margin: 0 auto;

        }

        .profile-info-name {
            width: 50% !important;
        }

        .profile-info-value {
            width: 50% !important;
        }

        .content-text {
            font-size: 16px;
            /*width: 190mm;*/
            float: left;
        }

        tr {
            height: 35px;
        }

        @media print {

            @page {
                size: A4;
                margin: 0 auto;
            }

            .main-content-inner {
                /*float: left;*/
                width: 210mm;
                height: 296mm;
            }

        }

    </style>
    <link href="https://fonts.googleapis.com/css?family=Holtwood+One+SC|Fugaz+One|Lobster|Merienda|Righteous|Black+Ops+One|Gilda+Display" rel="stylesheet">
@endsection

@section('content')
    @if($data['student'] && $data['student']->count() > 0)
        @foreach($data['student'] as $student)
            <div class="main-content" {{--style="page-break-after:always;"--}}>

                <div class="main-content-inner">
                    <div class="page-content">
                        <div class="col-sm-12 align-right hidden-print">
                            <a href="#" class="btn-primary btn-lg" onclick="window.print();">
                                <i class="ace-icon fa fa-print"></i> Print
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 align-center">
                                <!-- PAGE CONTENT BEGINS -->
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-print-12 align-center text-center">
                                        <div class="widget-box transparent">
                                            @include('print.includes.institution-detail')
                                            <div class="row">
                                                <h3 class="no-margin no-margin-top text-uppercase" style="font-family: 'Black Ops One', cursive;font-size: 30px">
                                                    <strong><u>{{$student->certificate}} Certificate </u></strong>
                                                </h3>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-xs-12 col-sm-12 col-print-12">
                                                    <div class="text-right">
                                                        <div class="space-10"></div>
                                                        <strong> Date of Issue : {{ \Carbon\Carbon::parse($student->date_of_issue)->format('d-m-Y') }}</strong >
                                                    </div>

                                                    <div class="space-10"></div>
                                                    <div class="text-center" style="padding: 5px 25px;">
                                                        {!! $student->certificate_template !!}

                                                        <div class="space-10"></div>
                                                        @if($student->student_image != '')
                                                            <img class="img-thumbnail"  alt="{{ $student->title }}" src="{{ asset('images'.DIRECTORY_SEPARATOR.'studentProfile'.DIRECTORY_SEPARATOR.$student->student_image) }}" width="200px" />
                                                        @endif
                                                        <div class="space-10"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-32"></div>
                                        <div class="row" style="padding-left: 30px;">
                                            <table width="90%">
                                                <tr>
                                                    <td class="text-left">
                                                        {{--<strong>Print Date:{{\Carbon\Carbon::now()->format('d-m-Y') }}</strong>--}}
                                                    </td>

                                                    <td width="30%">
                                                        <hr>
                                                        School/College Seal

                                                    </td>
                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

                                                    <td width="30%">
                                                        <hr>
                                                        PRINCIPAL
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        </div>
                                    </div><!-- /.col -->
                                </div><!-- /.row -->
                            </div><!-- /.page-content -->
                        </div>
                    </div>
                </div>
            </div><!-- /.main-content -->
            @if($data['student']->count() > 1)
                <div style="page-break-after:always;"></div>
            @endif
        @endforeach
    @endif
@endsection

@section('js')
    <!-- inline scripts related to this page -->
   @include('includes.scripts.print_script')
@endsection