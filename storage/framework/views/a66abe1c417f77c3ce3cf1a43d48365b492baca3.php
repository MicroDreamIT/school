<div class="form-group">
    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>Designation</th>
            <th></th>
        </tr>
        </thead>

        <tbody id="staff_wrapper">

        <?php if(isset($data['html'])): ?>

            <?php echo $data['html']; ?>


        <?php endif; ?>

        </tbody>

    </table>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/transport/vehicle/includes/staff.blade.php ENDPATH**/ ?>