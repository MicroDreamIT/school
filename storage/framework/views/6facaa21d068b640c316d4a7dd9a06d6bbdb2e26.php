<h4 class="header large lighter blue"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search & Verify Student Before Collect</h4>
<div class="row">
    <div class="col-sm-12">
        <?php echo Form::select('students_id', [], null, ["placeholder" => "Type Student Name | Reg.No. | Mobile | Email...", "class" => "col-xs-12 col-sm-12", "style" => "width: 100%;"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'students_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <hr>
        <div class="align-right">
            <button type="button" class="btn btn-sm btn-primary" id="load-html-btn">
                <i class="fa fa-user bigger-120"></i> Verify Student for Collect Fees
            </button>
        </div>
    </div>
</div>

<div class="space-4"></div>

<!-- Option Values -->
<?php echo $__env->make('account.fees.quickreceive.includes.student_detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<div id="fee-detail-form">
    <div class="clearfix form-actions">
        <br/>
        <div class="row">
            <label for="date" class="col-sm-2 control-label">Receive Date</label>
            <div class="col-sm-2">
                <input id="date" name="date" placeholder="" type="text" class="form-control date-mask date-picker" required>
            </div>

            <label for="receive_amount" class="col-sm-2 control-label">Receive Amount </label>
            <div class="col-sm-2">
                <input type="number" name="receive_amount" class="form-control modal_amount" id="receive_amount"  value="" required >

                <span class="text-danger" id="amount_error"></span>
            </div>

            <label for="discount_amount" class="col-sm-2 control-label">Discount Amount </label>
            <div class="col-sm-2">
                <input type="number" name="discount_amount" class="form-control modal_amount" id="discount_amount"  value="0" >

                <span class="text-danger" id="amount_error"></span>
            </div>
        </div>
         <br/>
        <div class="row">
            <label for="payment_mode" class="col-sm-2 control-label">Payment Method</label>
            <div class="col-sm-8">
                <div class="checkbox">
                    <?php if($data['payment_method']): ?>
                        <?php $__currentLoopData = $data['payment_method']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pmode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <label>
                                <?php if($pmode !=''): ?>
                                    <?php echo Form::radio('payment_mode', $pmode, ($pmode =='Cash')?true:false, ['class' => 'ace']); ?>

                                <?php endif; ?>
                                <span class="lbl"> <?php echo e($pmode, false); ?> </span>
                            </label>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
         <br/>
         <br/>
        <div class="row">
            <label for="inputPassword3" class="col-sm-1 control-label">Note</label>

            <div class="col-sm-11">
                <textarea name="note" class="form-control" rows="1" id="description" placeholder=""></textarea>
            </div>
        </div>
        <br/>
        <br/>

        <div class="row">
            <div class="col-sm-10 ml-5">
                <label class="radio-inline col-sm-3">
                    <input type="radio" name="print_receipt" value="none" checked="checked">No Print
                </label>
                <label class="radio-inline col-sm-3">
                    <input type="radio" name="print_receipt" value="short">Print Short Receipt
                </label>
                <label class="radio-inline col-sm-3">
                    <input type="radio" name="print_receipt" value="detail">Print Detail Receipt
                </label>
            </div>
        </div>
        <div class="clearfix form-actions">
            <div class="col-md-12 align-center">
            <button class="btn btn-block btn-success" type="submit" value="Save" name="add_collection" id="add-collection">
                <i class="fa fa-save bigger-110"></i>
                Quick Collect
            </button>
        </div>
    </div>
    </div>
</div>


<?php /**PATH /home/viholddep/public_html/edu/resources/views/account/fees/quickreceive/includes/form.blade.php ENDPATH**/ ?>