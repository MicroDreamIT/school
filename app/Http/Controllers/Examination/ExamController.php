<?php
//The Edu Mis

namespace App\Http\Controllers\Examination;

use App\Http\Controllers\CollegeBaseController;
use App\Http\Requests\Examination\Exam\AddValidation;
use App\Http\Requests\Examination\Exam\EditValidation;
use App\Models\Exam;
use App\Models\ExamMarkLedger;
use App\Models\ExamSchedule;
use App\Models\Faculty;
use App\Models\Month;
use App\Models\Student;
use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class ExamController extends CollegeBaseController
{
    protected $base_route = 'exam';
    protected $view_path = 'examination.exam';
    protected $panel = 'Exams';
    protected $filter_query = [];

    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $data = [];
        $data['exams'] = Exam::select('id', 'title', 'status')->get();
        return response()->json($data);
    }

    public function store(AddValidation $request)
    {
        $request->merge(['created_by' => auth()->user()->id]);

        Exam::create($request->all());

        return response()->json(['success', 'Created Successfully.']);
    }

    public function edit(Request $request, $id)
    {
        $data = [];
        if (!$data['row'] = Exam::find($id))
            return parent::invalidRequest();

        $data['exams'] = Exam::select('id', 'title', 'status')->orderBy('title')->get();

        $data['base_route'] = $this->base_route;
        return response()->json($data);
    }

    public function update(EditValidation $request, $id)
    {

        if (!$row = Exam::find($id)) return response()->json(['danger',' No Data.']);

        $request->merge(['last_updated_by' => auth()->user()->id]);

        $row->update($request->all());

        return response()->json(['success', $row->id . ' ' . $this->panel . ' Updated Successfully.']);
    }

    public function delete(Request $request, $id)
    {
        try {
            if (!$row = Exam::find($id))
                return response()->json(['danger', $row->id . ' ' . $this->panel . ' No Data.']);
            $row->delete();
            return response()->json(['success', $row->id . ' ' . $this->panel . ' Deleted Successfully.']);
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->errorInfo) return response()->json(['danger', 'Cant Delete. Other Data contain this semester as foreignKey']);
        }
    }

    public function bulkAction(Request $request)
    {
        if ($request->has('bulk_action') && in_array($request->get('bulk_action'), ['active', 'in-active', 'delete'])) {

            if ($request->has('chkIds')) {
                foreach ($request->get('chkIds') as $row_id) {
                    switch ($request->get('bulk_action')) {
                        case 'active':
                        case 'in-active':
                            $row = Exam::find($row_id);
                            if ($row) {
                                $row->status = $request->get('bulk_action') == 'active' ? 'active' : 'in-active';
                                $row->save();
                            }
                            break;
                        case 'delete':
                            try{
                                if (!$row = Exam::find($row_id))
                                    return response()->json(['danger', $row->id.' '.$this->panel.' No exam.']);
                                $row->delete();
                                return response()->json(['success', $row->id.' '.$this->panel.' Deleted Successfully.']);}
                            catch(\Illuminate\Database\QueryException $e){
                                if($e->errorInfo) return response()->json(['danger','Cant Delete. Other Data contain this semester as foreignKey']);
                            }
                            break;

                    }
                }

                if ($request->get('bulk_action') == 'active' || $request->get('bulk_action') == 'in-active')
                    return response()->json(['success', 'Action Successfully.']);
                else
                    return response()->json(['success', 'Deleted Successfully.']);

            } else {
                return response()->json(['danger', 'Please, Check at least one row.']);
            }


        } else return response()->json(['danger',' No Data.']);

    }

    public function active(request $request, $id)
    {
        if (!$row = Exam::find($id)) return response()->json(['danger',' No Data.']);

        $request->request->add(['status' => 'active']);

        $row->update($request->all());

        return response()->json(['success', $row->id.' '.$this->panel.' Active Successfully.']);
    }

    public function inActive(request $request, $id)
    {
        if (!$row = Exam::find($id)) return response()->json(['danger',' No Data.']);

        $request->request->add(['status' => 'in-active']);

        $row->update($request->all());

        return response()->json(['success', $row->id.' '.$this->panel.' In-Active Successfully.']);
    }

    public function admitCard(Request $request)
    {
        $data = [];
        if ($request->all()) {
            $data['student'] = Student::select('id', 'reg_no', 'reg_date', 'first_name', 'middle_name', 'last_name',
                'faculty', 'semester', 'academic_status', 'status')
                ->where(function ($query) use ($request) {
                    $this->commonStudentFilterCondition($query, $request);
                })
                ->get();
        }

        $data['faculties'] = $this->activeFaculties();
        $data['batch'] = $this->activeBatch();
        $data['academic_status'] = $this->activeStudentAcademicStatus();

        $data['years'] = [];
        $data['years'][0] = 'Select Year...';
        foreach (Year::select('id', 'title')->get() as $year) {
            $data['years'][$year->id] = $year->title;
        }

        $data['months'] = [];
        $data['months'][0] = 'Select Month...';
        foreach (Month::select('id', 'title')->orderBy('id')->get() as $month) {
            $data['months'][$month->id] = $month->title;
        }

        $data['exams'] = [];
        $data['exams'][0] = 'Select Exam...';
        foreach (Exam::select('id', 'title')->orderBy('title')->get() as $exam) {
            $data['exams'][$exam->id] = $exam->title;
        }

        $data['url'] = URL::current();
        $data['filter_query'] = $this->filter_query;

        return response()->json($data);
    }

    public function examRoutine(Request $request)
    {
        $data = [];
        $faculties = Faculty::select('id', 'faculty')->get();
        $faculties = array_pluck($faculties, 'faculty', 'id');
        $faculties = array_prepend($faculties, 'Select Faculty/Class', '0');
        $data['faculties'] = $faculties;

        $data['years'] = [];
        $data['years'][0] = 'Select Year...';
        foreach (Year::select('id', 'title')->get() as $year) {
            $data['years'][$year->id] = $year->title;
        }

        $data['months'] = [];
        $data['months'][0] = 'Select Month...';
        foreach (Month::select('id', 'title')->orderBy('id')->get() as $month) {
            $data['months'][$month->id] = $month->title;
        }

        $data['exams'] = [];
        $data['exams'][0] = 'Select Exam...';
        foreach (Exam::select('id', 'title')->orderBy('title')->get() as $exam) {
            $data['exams'][$exam->id] = $exam->title;
        }

        return response()->json($data);
    }

    public function markSheet(Request $request)
    {
        $data = [];
        if ($request->all()) {
            $year = $request->get('year');
            $month = $request->get('month');
            $exam = $request->get('exam');
            $faculty = $request->get('faculty');
            $semester = $request->get('semester');

            if ($year && $month && $exam && $faculty && $semester) {
                $examScheduleCondition = [
                    ['years_id', '=', $year],
                    ['months_id', '=', $month],
                    ['exams_id', '=', $exam],
                    ['faculty_id', '=', $faculty],
                    ['semesters_id', '=', $semester]
                ];

                /*Find Exam Schedule Id*/
                $examScheduleId = ExamSchedule::select('id')
                    ->where($examScheduleCondition)
                    ->get();
                $examScheduleId = array_pluck($examScheduleId, 'id');
                if (count($examScheduleId) > 0) {
                    $data['ledger_exist'] = ExamMarkLedger::select('exam_mark_ledgers.exam_schedule_id', 'exam_mark_ledgers.students_id',
                        'exam_mark_ledgers.obtain_mark_theory', 'exam_mark_ledgers.obtain_mark_practical', 'exam_mark_ledgers.absent_theory', 'exam_mark_ledgers.absent_practical',
                        'exam_mark_ledgers.status', 's.id as student_id', 's.reg_no', 's.first_name', 's.middle_name', 's.last_name',
                        's.last_name')
                        ->where('exam_mark_ledgers.exam_schedule_id', $examScheduleId)
                        ->join('students as s', 's.id', '=', 'exam_mark_ledgers.students_id')
                        ->orderBy('exam_mark_ledgers.students_id', 'asc')
                        ->get();
                } else {
                    return response()->json(['warning', 'No any Examination Scheduled. for Your Target Exam. Please Schedule First.']);
                }

            }

            if ($data['ledger_exist']) {
                $data['exam_schedule_id'] = implode(',', $examScheduleId);
            }

        } else {
            $data['exam_schedule_id'] = 0;
        }

        $data['exam'] = isset($exam) ? $exam : '';
        $data['year'] = isset($year) ? $year : '';
        $data['month'] = isset($month) ? $month : '';
        $data['faculty'] = isset($faculty) ? $faculty : '';
        $data['semester'] = isset($semester) ? $semester : '';

        $years = Year::select('id', 'title')->pluck('title', 'id')->toArray();
        $data['years'] = array_prepend($years, 'Select Year', '0');

        $months = Month::select('id', 'title')->orderBy('id')->pluck('title', 'id')->toArray();
        $data['months'] = array_prepend($months, 'Select Month', '0');

        $data['faculties'] = $this->activeFaculties();

        $exams = Exam::select('id', 'title')->orderBy('title')->Active()->pluck('title', 'id')->toArray();
        $data['exams'] = array_prepend($exams, 'Select Month', '0');

        $data['url'] = URL::current();
        $data['filter_query'] = $this->filter_query;

        return response()->json($data);
    }

    public function markLedger(Request $request)
    {
        $data = [];
        if ($request->all()) {
            $year = $request->get('year');
            $month = $request->get('month');
            $exam = $request->get('exam');
            $faculty = $request->get('faculty');
            $semester = $request->get('semester');

            if ($year && $month && $exam && $faculty && $semester) {
                $examScheduleCondition = [
                    ['years_id', '=', $year],
                    ['months_id', '=', $month],
                    ['exams_id', '=', $exam],
                    ['faculty_id', '=', $faculty],
                    ['semesters_id', '=', $semester]
                ];

                /*Find Exam Schedule Id*/
                $data['exam_schedule'] = ExamSchedule::where($examScheduleCondition)
                    ->get();

                /*
                 * "years_id" => 1
                    "months_id" => 1
                    "exams_id" => 1
                    "faculty_id" => 1
                    "semesters_id" => 1
                    "subjects_id" => 1
                    "date" => "2019-04-29 00:00:00"
                    "start_time" => "10:00:00"
                    "end_time" => "11:00:00"
                    "full_mark_theory" => 75
                    "pass_mark_theory" => 24
                    "full_mark_practical" => 25
                    "pass_mark_practical" => 11
                    "sorting_order" => 1
                    "publish_status" => 0
                    "status" => 1
                 * */

                $examScheduleId = array_pluck($data['exam_schedule'], 'id');
                if (count($examScheduleId) > 0) {
                    $data['ledger_exist'] = ExamMarkLedger::select('exam_mark_ledgers.exam_schedule_id', 'exam_mark_ledgers.students_id',
                        'exam_mark_ledgers.obtain_mark_theory', 'exam_mark_ledgers.obtain_mark_practical', 'exam_mark_ledgers.absent_theory', 'exam_mark_ledgers.absent_practical',
                        'exam_mark_ledgers.status', 's.id as student_id', 's.reg_no', 's.first_name', 's.middle_name', 's.last_name',
                        's.last_name')
                        ->where('exam_mark_ledgers.exam_schedule_id', $examScheduleId)
                        ->join('students as s', 's.id', '=', 'exam_mark_ledgers.students_id')
                        ->orderBy('exam_mark_ledgers.students_id', 'asc')
                        ->get();
                } else {
                    return response()->json(['warning', 'No any Examination Scheduled. for Your Target Exam. Please Schedule First.']);
                }

            }

            if ($data['ledger_exist']) {
                $data['exam_schedule_id'] = implode(',', $examScheduleId);
            }

        } else {
            $data['exam_schedule_id'] = 0;
        }

        $data['exam'] = isset($exam) ? $exam : '';
        $data['year'] = isset($year) ? $year : '';
        $data['faculty'] = isset($faculty) ? $faculty : '';
        $data['semester'] = isset($semester) ? $semester : '';

        $years = Year::select('id', 'title')->pluck('title', 'id')->toArray();
        $data['years'] = array_prepend($years, 'Select Year', '0');

        $months = Month::select('id', 'title')->orderBy('id')->pluck('title', 'id')->toArray();
        $data['months'] = array_prepend($months, 'Select Month', '0');

        $data['faculties'] = $this->activeFaculties();

        $exams = Exam::select('id', 'title')->orderBy('title')->Active()->pluck('title', 'id')->toArray();
        $data['exams'] = array_prepend($exams, 'Select Month', '0');

        $data['url'] = URL::current();
        $data['filter_query'] = $this->filter_query;

        return response()->json($data);
    }

}