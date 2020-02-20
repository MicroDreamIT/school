<table class="tab-content">
    <tr>
        <td class="text-right">Name</td>
        <td> : </td>
        <th>{{ $data['student']->first_name.' '.$data['student']->middle_name.' '.$data['student']->last_name }}</th>

        <td class="text-right">Reg No.</td>
        <td> : </td>
        <th>{{ $data['student']->reg_no }}</th>
    </tr>
    <tr>
        <td colspan="6">
            <hr class="hr hr-2">
        </td>
    </tr>
    <tr>
        <td class="text-right">Faculty/Class</td>
        <td> : </td>
        <th>{{ ViewHelper::getFacultyTitle($data['student']->faculty) }}</th>
        <td class="text-right">Sem./Sec.</td>
        <td> : </td>
        <th>{{ ViewHelper::getSemesterTitle($data['student']->semester) }}</th>
    </tr>
</table>