<div class="row">
    <div class="col-md-12">
    <?php echo $__env->make('includes.data_table_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- div.table-responsive -->
        <div class="table-responsive">
            <?php echo Form::open(['route' => $base_route.'.bulk-action', 'id' => 'bulk_action_form']); ?>

            <table  class="table table-striped dataex-html5-selectors">
                <thead>
                <tr>
                    <th class="center">
                        <label class="pos-rel">
                            <input type="checkbox" class="ace" />
                            <span class="lbl"></span>
                        </label>
                    </th>
                    <th>S.N.</th>
                    <th>Year</th>
                    <th>Month</th>
                    <th>Reg.Num</th>
                    <th>Student Name</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                    <th>11</th>
                    <th>12</th>
                    <th>13</th>
                    <th>14</th>
                    <th>15</th>
                    <th>16</th>
                    <th>17</th>
                    <th>18</th>
                    <th>19</th>
                    <th>20</th>
                    <th>21</th>
                    <th>22</th>
                    <th>23</th>
                    <th>24</th>
                    <th>25</th>
                    <th>26</th>
                    <th>27</th>
                    <th>28</th>
                    <th>29</th>
                    <th>30</th>
                    <th>31</th>
                    <th>32</th>
                    <?php $__currentLoopData = $data['attendanceStatus']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attenStatus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <th><?php echo e($attenStatus->title, false); ?></th>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($data['student']) && $data['student']->count() > 0): ?>
                    <?php ($i=1); ?>
                    <?php $__currentLoopData = $data['student']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="center first-child">
                                <label>
                                    <input type="checkbox" name="chkIds[]" value="<?php echo e($student->id, false); ?>" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>
                            <td><?php echo e($i, false); ?></td>
                            <td><?php echo e(ViewHelper::getYearById($student->years_id), false); ?> </td>
                            <td><?php echo e(ViewHelper::getMonthById($student->months_id), false); ?> </td>
                            <td><a href="<?php echo e(route('student.view', ['id' => $student->link_id]), false); ?>"><?php echo e($student->reg_no, false); ?></a></td>
                            <td><a href="<?php echo e(route('student.view', ['id' => $student->link_id]), false); ?>"> <?php echo e($student->first_name.' '.$student->middle_name.' '. $student->last_name, false); ?></a></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_1), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_1), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_2), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_2), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_3), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_3), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_4), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_4), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_5), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_5), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_6), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_6), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_7), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_7), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_8), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_8), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_9), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_9), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_10), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_10), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_11), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_11), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_12), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_12), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_13), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_13), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_14), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_14), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_15), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_15), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_16), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_16), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_17), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_17), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_18), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_18), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_19), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_19), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_20), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_20), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_21), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_21), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_22), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_22), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_23), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_23), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_24), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_24), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_25), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_25), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_26), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_26), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_27), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_27), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_28), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_28), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_29), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_29), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_30), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_30), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_31), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_31), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($student->day_32), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($student->day_32), false); ?></td>
                            <td><?php echo e($student->PRESENT?$student->PRESENT:0, false); ?> </td>
                            <td><?php echo e($student->ABSENT?$student->ABSENT:0, false); ?> </td>
                            <td><?php echo e($student->LATE?$student->LATE:0, false); ?> </td>
                            <td><?php echo e($student->LEAVE?$student->LEAVE:0, false); ?> </td>
                            <td><?php echo e($student->HOLIDAY?$student->HOLIDAY:0, false); ?> </td>
                            <td>
                                <div class="hidden-sm hidden-xs action-buttons">
                                    <a href="<?php echo e(route($base_route.'.delete', ['id' => $student->id]), false); ?>" class="red bootbox-confirm">
                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                    </a>
                                </div>
                                <div class="hidden-md hidden-lg">
                                    <div class="inline pos-rel">
                                        <button class="btn btn-sm btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                            <li>
                                                <a href="<?php echo e(route($base_route.'.delete', ['id' => $student->id]), false); ?>" class="tooltip-error bootbox-confirm" data-rel="tooltip" title="Delete">
                                                            <span class="red ">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php ($i++); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <tr>
                        <td colspan="44">No <?php echo e($panel, false); ?> data found. Please Filter <?php echo e($panel, false); ?> to show. </td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
            <?php echo Form::close(); ?>

        </div>
    </div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/attendance/student/includes/table.blade.php ENDPATH**/ ?>