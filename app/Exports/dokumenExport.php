<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class TabelExport implements FromView
{
    protected $data_m;

    public function __construct($data_m)
    {
        $this->data_m = $data_m;
    }

    public function view(): View
    {
        return view('excelMatriks', ['data_m' => $this->data_m]);
    }
}
