<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    public function edit($id)
    {
        // dd($id);
        return view('laporan.editLaporan', ['id' => $id]);
    }

}
