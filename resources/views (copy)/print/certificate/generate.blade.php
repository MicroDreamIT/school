@extends('layouts.master')

@section('css')
    <!-- page specific plugin styles -->
    <link href="https://fonts.googleapis.com/css?family=Fugaz+One|Lobster|Merienda|Righteous|Black+Ops+One|Gilda+Display" rel="stylesheet">
    <style>
        .page-content {
            padding: 20px 22px !important;
            border: 40px #438eb9 solid;
        }

        @media print {
            .main-content{
                 width: 297mm;
                 height: 210mm;
                padding: 15px 15px 5px 15px !important;
                border: 40px #438eb9 solid;
            }

            .page-content {
                padding: 0;
                border: none;
            }

            /* ... the rest of the rules ... */
        }

    </style>
@endsection

@section('content')
    @if($data['students'] && $data['students']->count() > 0)
        @foreach($data['students'] as $student)
            <div class="main-content " {{--style="page-break-after:always;"--}}>
                <div class="col-sm-12 align-right hidden-print">
                    <a href="#" class="btn btn-primary" onclick="window.print();">
                        <i class="ace-icon fa fa-print bigger-200"></i> Print Certificate
                    </a>
                </div>
                <div class="main-content-inner">
                    <div class="page-content">
                        <div class="row">
                            <div class="col-xs-12 align-center">
                                <!-- PAGE CONTENT BEGINS -->
                                <div class="row">
                                    <div class="col-sm-12 align-center text-center">
                                        <div class="widget-box transparent">
                                            <div class="row">
                                                <div class="col-md-2 col-print-2 align-left">
                                                    @if(isset($generalSetting->logo))
                                                        <img src="{{ asset('images'.DIRECTORY_SEPARATOR.'setting'.DIRECTORY_SEPARATOR.'general'.DIRECTORY_SEPARATOR.$generalSetting->logo) }}">
                                                    @endif
                                                </div>
                                                <div class="col-md-8 col-print-8 align-left">
                                                    <div class="text-center">
                                                        <h2 class="no-margin-top" style="font-family: 'Merienda', cursive; font-size: 24px">
                                                            <strong>{{$generalSetting->institute}}</strong>
                                                        </h2>
                                                        <h4 class="text-uppercase no-margin-top">{{$generalSetting->address}}</h4>
                                                        <h5 class="no-margin-top">
                                                            {{$generalSetting->phone.', '.$generalSetting->email}}
                                                        </h5>
                                                        <div class="space-4"></div>
                                                        <h2 class="no-margin text-uppercase" style="font-family: 'Black Ops One', cursive;font-size: 70px">
                                                            <strong><u>certificate</u></strong>
                                                        </h2>
                                                        <h3 class="no-margin-top" style="font-family: 'Righteous', cursive;">of</h3>
                                                        <h3 class="no-margin no-margin-top text-uppercase" style="font-family: 'Black Ops One', cursive;font-size: 35px">
                                                            <strong><u>{{$student->certificate}}</u></strong>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-print-2 align-right" style="margin-top: 50px;">
                                                    @if($student->student_image != '')
                                                        <img class="img-thumbnail"  alt="{{ $student->title }}" src="{{ asset('images'.DIRECTORY_SEPARATOR.'studentProfile'.DIRECTORY_SEPARATOR.$student->student_image) }}" width="300px" height="300px" />
                                                    @endif
                                                </div>
                                            </div>
                                            <div class=row" style="padding: 24px 50px;">
                                                <div class="text-center" style="font-size: 18px;">
                                                    {!! $student->certificate_template !!}
                                                </div>
                                                <div class="space-32"></div>
                                                <div class="row text-uppercase">
                                                    <div class="pull-left text-center" >
                                                        <span>
                                                            <strong style="border-bottom: 2px black solid"  >{{\Carbon\Carbon::now()}}</strong ><br>
                                                            Print Date/Time
                                                        </span>
                                                    </div>
                                                    <div class="pull-right text-center">
                                                        <br>
                                                        <span style="border-top: 2px black solid; padding: 0px 50px;">&nbsp;Signature&nbsp;</span >
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div><!-- /.col -->
                                </div><!-- /.row -->
                            </div><!-- /.page-content -->
                        </div>
                    </div>
                </div>
            </div><!-- /.main-content -->
            {{--<div style="page-break-after:always;"></div>--}}
        @endforeach
    @endif
@endsection

@section('js')
    <!-- inline scripts related to this page -->
   @include('includes.scripts.print_script')
@endsection