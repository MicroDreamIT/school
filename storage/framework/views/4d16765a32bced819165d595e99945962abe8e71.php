let <?php echo e($chart->id, false); ?>_rendered = false;
let <?php echo e($chart->id, false); ?>_load = function () {
    if (document.getElementById("<?php echo e($chart->id, false); ?>") && !<?php echo e($chart->id, false); ?>_rendered) {
        <?php if($chart->api_url): ?>
            fetch("<?php echo e($chart->api_url, false); ?>")
                .then(data => data.json())
                .then(data => { <?php echo e($chart->id, false); ?>_create(data) });
        <?php else: ?>
            <?php echo e($chart->id, false); ?>_create(<?php echo $chart->formatDatasets(); ?>)
        <?php endif; ?>
    }
};
window.addEventListener("load", <?php echo e($chart->id, false); ?>_load);
document.addEventListener("turbolinks:load", <?php echo e($chart->id, false); ?>_load);<?php /**PATH /home/viholddep/public_html/edu/resources/views/vendor/charts/init.blade.php ENDPATH**/ ?>