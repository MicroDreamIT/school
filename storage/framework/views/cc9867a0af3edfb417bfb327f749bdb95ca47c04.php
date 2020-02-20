<script type="text/javascript">
    function <?php echo e($chart->id, false); ?>_create(data) {
        <?php echo e($chart->id, false); ?>_rendered = true;
        var loader_element = document.getElementById("<?php echo e($chart->id, false); ?>_loader");
        loader_element.parentNode.removeChild(loader_element);
        document.getElementById("<?php echo e($chart->id, false); ?>").style.display = 'block';
        window.<?php echo e($chart->id, false); ?> = new Chart(document.getElementById("<?php echo e($chart->id, false); ?>").getContext("2d"), {
            type: <?php echo e($chart->type ? "'{$chart->type}'" : 'data[0].type', false); ?>,
            data: {
                labels: <?php echo $chart->formatLabels(); ?>,
                datasets: data
            },
            options: <?php echo $chart->formatOptions(true); ?>

        });
    }
    <?php echo $__env->make('charts::init', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</script>
<?php /**PATH /home/viholddep/public_html/edu/resources/views/vendor/charts/chartjs/script.blade.php ENDPATH**/ ?>