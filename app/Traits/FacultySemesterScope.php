<?php
namespace App\Traits;

use App\Models\Faculty;
use App\Models\Semester;
use App\Models\StudentBatch;
use App\Models\StudentStatus;

trait FacultySemesterScope{

    public function activeFaculties()
    {
        $faculty = Faculty::Active()->orderBy('faculty')->pluck('faculty','id')->toArray();
         return array_prepend($faculty,'Select Faculty/Class','0');
    }

    public function activeSemester()
    {
        $semester = Semester::select('id', 'semester')->Active()->pluck('semester','id')->toArray();
        return array_prepend($semester,'Select Semester',0);
    }

    public function activeBatch()
    {
        $studentBatch = StudentBatch::select('id', 'title')->Active()->pluck('title','id')->toArray();
        return array_prepend($studentBatch,'Select Batch',0);
    }

    public function activeStudentAcademicStatus()
    {
        $status = StudentStatus::Active()->orderBy('title')->pluck('title','id')->toArray();
        return array_prepend($status,'Select Academic Status','0');
    }

    public function getFacultyTitle($id)
    {
        $faculty = Faculty::find($id);
        if ($faculty) {
            return $faculty->faculty;
        }else{
            return "Unknown";
        }
    }

    public function getSemesterById($id)
    {
        $semester = Semester::find($id);
        if ($semester) {
            return $semester->semester;
        }else{
            return "";
        }
    }

    public function getSemesterTitle($id)
    {
        $semester = Semester::find($id);
        if ($semester) {
            return $semester->semester;
        }else{
            return "Unknown";
        }
    }

}