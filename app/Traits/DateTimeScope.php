<?php
namespace App\Traits;

use App\Models\Day;
use App\Models\Month;
use App\Models\Year;
use Carbon\Carbon;

trait DateTimeScope{

    public function getActiveYear()
    {
        $year = Year::where('active_status',1)->first();
        if ($year) {
            return $year->title;
        }else{
            return Carbon::now()->format('Y');
        }
    }

    public function getYearById($id)
    {
        $year = Year::find($id);
        if ($year) {
            return $year->title;
        }else{
            return "Unknown";
        }
    }

    public function getMonthById($id)
    {
        $month = Month::find($id);
        if ($month) {
            return $month->title;
        }else{
            return "Unknown";
        }
    }

    public function getDayById($id)
    {
        $day = Day::find($id);
        if ($day) {
            return $day->title;
        }else{
            return "Unknown";
        }
    }

    public function activeYears()
    {
        $years = Year::Active()->orderBy('title')->pluck('title','id')->toArray();
        return array_prepend($years,'Select Year','0');
    }

    public function activeMonths()
    {
        $years = Month::Active()->pluck('title','id')->toArray();
        return array_prepend($years,'Select Year','0');
    }
}