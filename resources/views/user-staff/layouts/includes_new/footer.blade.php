<footer class="footer footer-static footer-light" style="text-align: center">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class=" d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2019<!--<a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent,</a>--> All rights Reserved</span><!--<span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>-->
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>

        <script src="{{url('/')}}/includes_new/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{url('/')}}/includes_new/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="{{url('/')}}/includes_new/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="{{url('/')}}/includes_new/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="{{url('/')}}/includes_new/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="{{url('/')}}/includes_new/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="{{url('/')}}/includes_new/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="{{url('/')}}/includes_new/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="{{url('/')}}/includes_new/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <!-- END: Page Vendor JS-->
 <script src="{{url('/')}}/includes_new/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="{{url('/')}}/includes_new/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="{{url('/')}}/includes_new/app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="{{url('/')}}/includes_new/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
    <!-- BEGIN: Theme JS-->
    <script src="{{url('/')}}/includes_new/app-assets/js/core/app-menu.js"></script>
    <script src="{{url('/')}}/includes_new/app-assets/js/core/app.js"></script>
    <script src="{{url('/')}}/includes_new/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{url('/')}}/includes_new/app-assets/js/scripts/datatables/datatable.js"></script>
       <script src="{{url('/')}}/includes_new/app-assets/js/scripts/toastr.min.js"></script>
    <!-- END: Page JS-->
  <script>

/*$('body').delegate('.page_nav_li','click',function(event) {


    event.preventDefault();
    $('.new-content-div').load($(this).attr('href'), function() {
  reload_datatable();
});

});
$('.main_nav_li').click(function (event) {
   
    event.preventDefault();
    $('.new-content-div').load($(this).attr('href'), function() {
  reload_datatable();
});

}); 
*/
function reload_datatable()
{

   $('.dataex-html5-selectors').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                text: 'JSON',
                action: function ( e, dt, button, config ) {
                    var data = dt.buttons.exportData();

                    $.fn.dataTable.fileSave(
                        new Blob( [ JSON.stringify( data ) ] ),
                        'Export.json'
                    );
                }
            },
            {
                extend: 'print',
                exportOptions: {
                    columns: ':visible'
                }
            }
        ]
    });


}
</script>
</body>
<!-- END: Body-->

</html>