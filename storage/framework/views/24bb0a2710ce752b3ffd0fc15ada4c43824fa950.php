<!-- Modal -->
<div class="modal fade" id="activeAgain" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <?php echo Form::open(['route' => 'hostel.resident.quick-resident', 'method' => 'GET', 'class' => 'form-horizontal',
                       'id' => 'validation-form', "enctype" => "multipart/form-data"]); ?>


        <div class="modal-content">
            <div class="modal-header">
                
            </div>
            <div class="modal-body pb0">
                <div class="form-horizontal">
                    <div class="box-body">
                        <input type="hidden" name="residentId" id="residentId" value=""/>
                        <input type="hidden" name="user_type" id="userType" value="1"/>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Hostel</label>
                                    <div class="col-sm-9">
                                        <?php echo Form::select('hostel_assign', $data['hostels'], null, ['class' => 'form-control', "onChange" => "loadRooms(this)"]); ?>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Room</label>
                                    <div class="col-sm-3">
                                        <select name="room_assign" class="form-control room_select" onChange="loadBeds(this)">
                                            <option value="0"> Select Room... </option>
                                        </select>
                                    </div>
                                    <label class="col-sm-3 control-label">Bed</label>
                                    <div class="col-sm-3">
                                        <select name="bed_assign" class="form-control bed_select">
                                            <option value="0"> Select Bed... </option>
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
                    <button type="submit" class="btn cfees save_button btn-success" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> <i class="fa fa-bed" aria-hidden="true"></i> Assign Bed </button>
                </div>
            </div>
        </div>
        <?php echo Form::close(); ?>


    </div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/student/includes/hostel_model.blade.php ENDPATH**/ ?>