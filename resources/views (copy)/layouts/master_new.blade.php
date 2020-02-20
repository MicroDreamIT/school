

@include('layouts.includes_new.header')

<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
   
  
    @include('layouts.includes_new.nav')
    @include('layouts.includes_new.sidebar')

<div class="new-content-div">
         @yield('content')
</div>
    <!-- BEGIN: Vendor JS-->
   
 @include('layouts.includes_new.footer')
   @yield('js')