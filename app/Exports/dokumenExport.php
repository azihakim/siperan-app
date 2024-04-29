<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class dokumenExport implements FromView
{
    protected $data, $data_rp, $data_tim, $date, $year;
    
    public function __construct($data, $data_rp, $data_tim, $date, $year)
    {
        $this->data = $data;
        $this->data_rp = $data_rp;
        $this->data_tim = $data_tim;
        $this->date = $date;
        $this->year = $year;
    }

    public function view(): View
    {
        return view('dpa', [
            'data' => $this->data,
            'data_rp' => $this->data_rp,
            'data_tim' => $this->data_tim,
            'date' => $this->date,
            'year' => $this->year]);
    }
}
