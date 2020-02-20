<!-- Modal -->
<div class="modal fade" id="activeAgain" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <?php echo Form::open(['route' => $base_route.'.renew', 'method' => 'POST', 'class' => 'form-horizontal',
                       'id' => 'validation-form', "enctype" => "multipart/form-data"]); ?>


        <div class="modal-content">
            <div class="modal-header">
                
            </div>
            <div class="modal-body pb0">
                <div class="form-horizontal">
                    <div class="box-body">
                        <input type="hidden" name="userId" id="userId" value=""/>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Route</label>
                                    <div class="col-sm-9">
                                        <?php echo Form::select('route_assign', $data['routes'], null, ['class' => 'form-control', "onChange" => "loadVehicle(this)"]); ?>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Vehicle</label>
                                    <div class="col-sm-9">
                                        <select name="vehicle_assign" class="form-control vehicle_select" onChange="loadBeds(this)">
                                            <option value="0"> Select Vehicle... </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="box-body">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn cfees save_button btn-success" id="renew-btn" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> <i class="fa fa-car" aria-hidden="true"></i> Assign Transport </button>
                </div>
            </div>
        </div>
        <?php echo Form::close(); ?>


    </div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/transport/user/includes/renew_model.blade.php ENDPATH**/ ?>