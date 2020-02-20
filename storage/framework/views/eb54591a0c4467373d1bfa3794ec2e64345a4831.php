<script src="<?php echo e(asset('assets/js/bootstrap-datepicker.min.js'), false); ?>"></script>
<script src="<?php echo e(asset('assets/js/bootstrap-timepicker.min.js'), false); ?>"></script>
<script src="<?php echo e(asset('assets/js/moment.min.js'), false); ?>"></script>
<script src="<?php echo e(asset('assets/js/daterangepicker.min.js'), false); ?>"></script>
<script src="<?php echo e(asset('assets/js/bootstrap-datetimepicker.min.js'), false); ?>"></script>


<script>
    jQuery(function($) {
        //datepicker plugin
        //link
        $('.date-picker').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'yyyy-mm-dd',
            orientation: "bottom"

        })

        //set today date
        //$('.date-picker').datepicker('setDate', new Date())

        //show datepicker when clicking on the icon
            .next().on(ace.click_event, function(){
            $(this).prev().focus();
        });

        //$('.date-picker').datepicker('setDate', new Date());


        //to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
        $('input[name=date-range-picker]').daterangepicker({
            'applyClass' : 'btn-sm btn-success',
            'cancelClass' : 'btn-sm btn-default',
            locale: {
                applyLabel: 'Apply',
                cancelLabel: 'Cancel',
            }
        })
            .prev().on(ace.click_event, function(){
            $(this).next().focus();
        });

        $('#timepicker1').timepicker({
            minuteStep: 1,
            showSeconds: true,
            showMeridian: false,
            disableFocus: true,
            icons: {
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down'
            }
        }).on('focus', function() {
            $('#timepicker1').timepicker('showWidget');
        }).next().on(ace.click_event, function(){
            $(this).prev().focus();
        });

        if(!ace.vars['old_ie']) $('#date-timepicker1').datetimepicker({
            //format: 'MM/DD/YYYY h:mm:ss A',//use this option to display seconds
            format: 'YYYY/MM/DD',//use this option to display seconds
            icons: {
                time: 'fa fa-clock-o',
                date: 'fa fa-calendar',
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down',
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-arrows ',
                clear: 'fa fa-trash',
                close: 'fa fa-times'
            }
        }).next().on(ace.click_event, function(){
            $(this).prev().focus();
        });

    });

</script>



<?php /**PATH /home/viholddep/public_html/edu/resources/views/includes/scripts/datepicker_script.blade.php ENDPATH**/ ?>