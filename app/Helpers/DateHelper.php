<?php

use App\Models\Closing;
use Carbon\Carbon;

if (!function_exists('get_months')) {
    function get_months()
    {
        return array(
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember',
        );
    }
}

if (!function_exists('get_month_simple')) {
    function get_month_simple($month)
    {
        $month = ((integer) $month) - 1;
        $array =  array(
            'JAN',
            'FEB',
            'MAR',
            'APR',
            'MEI',
            'JUN',
            'JUL',
            'AGU',
            'SEP',
            'OKT',
            'NOV',
            'DES',
        );

        return $array[$month];
    }
}

if (!function_exists('get_month_name')) {
    function get_month_name($month)
    {
        $m = $month - 1;
        return get_months()[$m] ?? 'Undefined';
    }
}

if (!function_exists('get_month_romawi')) {
    function get_month_roman()
    {
        switch (date('m')){
            case 1;
                return 'I';
            case 2;
                return 'II';
            case 3;
                return 'III';
            case 4;
                return 'IV';
            case 5;
                return 'V';
            case 6;
                return 'VI';
            case 7;
                return 'VII';
            case 8;
                return 'VIII';
            case 9;
                return 'IX';
            case 10;
                return 'X';
            case 11;
                return 'XI';
            case 12;
                return 'XII';
        }
    }
}

if (!function_exists('parse_date')) {
    function parse_date($date = null)
    {
        if($date == null){
            return '-';
        }
        \Carbon\Carbon::setLocale('id');
//        $date = \Carbon\Carbon::parse($date)->formatLocalized("%d %B %Y");
        $date = \Carbon\Carbon::parse($date);
        return $date->format('d').'-'.get_month_simple($date->format('m')).'-'.$date->format('Y');
    }
}

if (!function_exists('parse_date_full')) {
    function parse_date_full($date = null)
    {
        if($date == null){
            return '-';
        }
        \Carbon\Carbon::setLocale('id');
//        $date = \Carbon\Carbon::parse($date)->formatLocalized("%d %B %Y");
        $date = \Carbon\Carbon::parse($date);
        return $date->format('d').' '.get_month_name($date->format('m')).' '.$date->format('Y');
    }
}

if (!function_exists('parse_date_time')) {
    function parse_date_time($date = null)
    {
        if($date == null){
            return '-';
        }
        \Carbon\Carbon::setLocale('id');
//        $date = \Carbon\Carbon::parse($date)->formatLocalized("%d %B %Y, %I:%M:%S %p");
        $date = \Carbon\Carbon::parse($date);
        return $date->format('d').'-'.get_month_simple($date->format('m')).'-'.$date->format('Y'). ', '.\Carbon\Carbon::parse($date)->formatLocalized("%H:%M:%S");
//        return $date;
    }
}

if (!function_exists('parse_date_time_iso')) {
    function parse_date_time_iso($date = null)
    {
        if($date == null){
            return '-';
        }
        \Carbon\Carbon::setLocale('id');
        return \Carbon\Carbon::parse($date)->isoFormat('LLLL');
    }
}

if (!function_exists('parse_time')) {
    function parse_time($date = null)
    {
        if($date == null){
            return '-';
        }
        \Carbon\Carbon::setLocale('id');
        return \Carbon\Carbon::parse($date)->formatLocalized("%H:%M:%S");
    }
}

if (!function_exists('parse_time_hm')) {
    function parse_time_hm($date = null)
    {
        if($date == null){
            return '-';
        }
        \Carbon\Carbon::setLocale('id');
        return \Carbon\Carbon::parse($date)->formatLocalized("%H:%M");
    }
}

if (!function_exists('parse_month_year')) {
    function parse_month_year($date = null)
    {
        if ($date == null) {
            return '-';
        }

        \Carbon\Carbon::setLocale('id');

        $date = \Carbon\Carbon::parse($date);
        return get_month_name($date->format('m')).' '.$date->format('Y');
    }
}

if (!function_exists('parse_month')) {
    function parse_month($date = null)
    {
        if ($date == null) {
            return '-';
        }

        \Carbon\Carbon::setLocale('id');

        $date = \Carbon\Carbon::parse($date);
        return get_month_name($date->format('m'));
    }
}

if (!function_exists('parse_year')) {
    function parse_year($date = null)
    {
        if ($date == null) {
            return '-';
        }

        \Carbon\Carbon::setLocale('id');

        $date = \Carbon\Carbon::parse($date);
        return $date->format('Y');
    }
}

if (!function_exists('parse_start_and_end_date')) {
    function parse_start_and_end_date($start, $end)
    {
        $start = Carbon::parse($start)->format('m/d/Y');
        $end = Carbon::parse($end)->format('m/d/Y');

        return $start ." - ". $end;
    }
}

if (!function_exists('get_years')) {
    function get_years()
    {
        $year = collect();

        for($i = 2010; $i < 2050; $i ++){
            $year->push($i);
        }

        return $year->toArray();

    }
}

if (!function_exists('get_start_and_end_date')) {
    function get_start_and_end_date($dates)
    {
        try {
            $range = explode(' - ', $dates);

            $start = Carbon::createFromFormat('m/d/Y', $range[0])->toDateString();
            $end = Carbon::createFromFormat('m/d/Y', $range[1])->toDateString();
            return [
                'start_date' => $start,
                'end_date' => $end
            ];
        } catch (\Exception $e) {
            return [
                'start_date' => null,
                'end_date' => null
            ];
        }
    }
}

if (!function_exists('get_diff_date')) {
    function get_diff_date($start, $end)
    {
        $start = Carbon::parse($start);
        $end = Carbon::parse($end);

        $diff = $start->diff($end);
        $diffNegative = $start->diffInDays($end, false);
        if ($diffNegative >= 0) {
            $result = $diff->d.' Hari '.$diff->m.' Bulan '.$diff->y.' Tahun';
        }else {
            $day = $diffNegative >= 0 ? $diff->d : 0;
            $month = $diffNegative >= 0 ? $diff->m : 0;
            $year = $diffNegative >= 0 ? $diff->y : 0;
            $result = $day.' Hari '.$month.' Bulan '.$year.' Tahun';
        }

        return $result;
    }
}

if (!function_exists('get_diff_days')) {
    function get_diff_days($start, $end)
    {
        $start = Carbon::parse($start);
        $end = Carbon::parse($end);

        $diff = $start->diffInDays($end, false);
        return $diff;
    }
}

if (!function_exists('get_date_ranges')) {
    function get_date_ranges($dates)
    {
        $range = explode(' - ', $dates);
        $start = Carbon::createFromFormat('m/d/Y', $range[0]);
        $end = Carbon::createFromFormat('m/d/Y', $range[1]);

        $dates = [];

        for($date = $start; $date->lte($end); $date->addDay()) {
            $dates[] = $date->format('Y-m-d');
        }

        return $dates;
    }
}

if (!function_exists('get_date_array')) {
    function get_date_array($start, $end)
    {
        $start = Carbon::parse($start);
        $end = Carbon::parse($end);

        $dates = [];

        for($date = $start; $date->lte($end); $date->addDay()) {
            $dates[] = $date->format('Y-m-d');
        }

        return $dates;
    }
}



if (!function_exists('check_date_type')) {
    function check_date_type($date)
    {
        $weekMap = [
            0 => 'SU',
            1 => 'MO',
            2 => 'TU',
            3 => 'WE',
            4 => 'TH',
            5 => 'FR',
            6 => 'SA',
        ];

        $dayStart = Carbon::parse($date);
        $dayOfTheWeek = $dayStart->dayOfWeek;
        return $weekMap[$dayOfTheWeek];
    }
}

if (!function_exists('is_weekend')) {
    function is_weekend($date): bool
    {
        $dateType = check_date_type($date);
        if ($dateType == 'FR' || $dateType == 'SA' || $dateType == 'SU') {
            return true;
        }

        return false;
    }
}


if (!function_exists('parse_day')) {
    function parse_day($date) {
        return Carbon::parse($date)->format('d');
    }
}

if (!function_exists('parse_date_day')) {
    function parse_date_day($date) {
        \Carbon\Carbon::setLocale('id');

        $date = \Carbon\Carbon::parse($date);

        return $date->translatedFormat('l, ') . $date->format('d').'-'.get_month_simple($date->format('m')).'-'.$date->format('Y');
    }
}

if (!function_exists('parse_date_day_new')) {
    function parse_date_day_new($date) {
        \Carbon\Carbon::setLocale('id');

        $date = \Carbon\Carbon::parse($date);

        return $date->translatedFormat('l, ') . $date->format('d').' '.get_month_name($date->format('m')).' '.$date->format('Y');
    }
}

if (!function_exists('parse_date_export')) {
    function parse_date_export($date)
    {
        if($date == '-'){
            return '-';
        }
        return \PhpOffice\PhpSpreadsheet\Shared\Date::dateTimeToExcel(\Carbon\Carbon::parse($date));
    }
}

if (!function_exists('parse_date_format')) {
    function parse_date_format($date) {
        return Carbon::parse($date)->format('Y-m-d');
    }
}

if (!function_exists('week_of_month')) {
    function week_of_month($qDate){
        $dt = strtotime($qDate);
        $day  = date('j',$dt);
        $month = date('m',$dt);
        $year = date('Y',$dt);
        $totalDays = date('t',$dt);
        $weekCnt = 1;
        $retWeek = 0;
        for($i=1;$i <= $totalDays;$i++) {
            $curDay = date("N", mktime(0,0,0,$month,$i,$year));
            if($curDay==7) {
                if($i==$day) {
                    $retWeek = $weekCnt+1;
                }
                $weekCnt++;
            } else {
                if($i==$day) {
                    $retWeek = $weekCnt;
                }
            }
        }
        return $retWeek;
    }
}

if (!function_exists('get_day')) {
    function get_day($date) {
        \Carbon\Carbon::setLocale('id');

        $date = \Carbon\Carbon::parse($date);

        return $date->translatedFormat('l');
    }
}

if (!function_exists('get_days')) {
    function get_days() {
        return array(
            'senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'
        );
    }
}

