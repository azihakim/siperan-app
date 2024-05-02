<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $userRole = Auth::user()->biro;
        $laporan = Laporan::all();
        $data = [];

        foreach ($laporan as $item) {
            $surat_permohonan = json_decode($item->surat_permohonan, true);
            
            // Menyesuaikan logika filterisasi berdasarkan peran pengguna
            if ($userRole == 'admin' || ($userRole !== 'admin' && isset($surat_permohonan['biro']) && $surat_permohonan['biro'] === $userRole)) {
                $data[] = [
                    "id" => $item->id,
                    "surat_permohonan" => $surat_permohonan,
                    "matriks_pergeseran" => $item->matriks_pergeseran,
                    "sptjm" => $item->sptjm,
                    "dokumen_pelaksanaan" => $item->dokumen_pelaksanaan,
                    "created_at" => $item->created_at,
                ];
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
