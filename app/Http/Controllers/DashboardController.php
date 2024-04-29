<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $laporan = Laporan::all();
        // dd($laporan);
        $data = [];

        foreach ($laporan as $item) {
            $data[] = [
                "id" => $item->id,
                "surat_permohonan" => $item->surat_permohonan,
                "matriks_pergeseran" => $item->matriks_pergeseran,
                "sptjm" => $item->sptjm,
                "dokumen_pelaksanaan" => $item->dokumen_pelaksanaan,
                "created_at" => $item->created_at, // Menambahkan tanggal pembuatan laporan
            ];
        }

        // Mendekode data JSON menjadi array PHP
        foreach ($data as $key => $item) {
            foreach ($item as $field => $value) {
                if (is_string($value) && $this->is_json($value)) {
                    $data[$key][$field] = json_decode($value, true);
                }
            }
        }

        return view('dashboard', compact('data'));
    }

    // Fungsi untuk memeriksa apakah string adalah JSON
    protected function is_json($string) {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }


}
