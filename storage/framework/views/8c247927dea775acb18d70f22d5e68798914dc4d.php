<div class="row">
    <div class="col-md-12">
        
        <!-- div.table-responsive -->
        <div class="table-responsive">
             <table  class="table table-striped dataex-html5-selectors">
                <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Year</th>
                    <th>Month</th>
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
                </tr>
                </thead>
                <tbody class="text-center">
                <?php if(isset($data['attendance']) && $data['attendance']->count() > 0): ?>
                    <?php ($i=1); ?>
                    <?php $__currentLoopData = $data['attendance']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attendance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i, false); ?></td>
                           <td><?php echo e(ViewHelper::getYearById($attendance->years_id), false); ?> </td>
                            <td><?php echo e(ViewHelper::getMonthById($attendance->months_id), false); ?> </td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_1), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_1), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_2), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_2), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_3), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_3), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_4), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_4), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_5), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_5), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_6), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_6), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_7), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_7), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_8), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_8), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_9), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_9), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_10), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_10), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_11), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_11), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_12), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_12), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_13), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_13), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_14), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_14), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_15), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_15), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_16), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_16), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_17), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_17), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_18), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_18), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_19), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_19), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_20), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_20), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_21), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_21), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_22), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_22), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_23), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_23), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_24), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_24), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_25), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_25), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_26), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_26), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_27), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_27), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_28), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_28), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_29), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_29), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_30), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_30), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_31), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_31), false); ?></td>
                            <td class="<?php echo e(ViewHelper::getAttendanceDisplayClass($attendance->day_32), false); ?>"><?php echo e(ViewHelper::getAttendanceStatus($attendance->day_32), false); ?></td>
                            <td><?php echo e($attendance->PRESENT?$attendance->PRESENT:0, false); ?> </td>
                            <td><?php echo e($attendance->ABSENT?$attendance->ABSENT:0, false); ?> </td>
                            <td><?php echo e($attendance->LATE?$attendance->LATE:0, false); ?> </td>
                            <td><?php echo e($attendance->LEAVE?$attendance->LEAVE:0, false); ?> </td>
                            <td><?php echo e($attendance->HOLIDAY?$attendance->HOLIDAY:0, false); ?> </td>
                        </tr>
                        <?php ($i++); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <tr>
                        <td colspan="40"  class="align-left">No attendance data found.</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/user-student/attendance/includes/attendance/regular-attendance.blade.php ENDPATH**/ ?>