<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Options;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TabelExport;
use App\Models\Laporan;
use Dompdf\Dompdf;
use Carbon\Carbon;

class PrintController extends Controller
{
    

    public function printPermohonan($id)
    {
        $laporan = Laporan::find($id);
        // Decode the JSON string in the "surat_permohonan" field
        $suratPermohonan = json_decode($laporan->surat_permohonan, true);

        // Parse the date string
        $date = Carbon::parse($suratPermohonan['tgl']);

        // Format the date as "30 April 2018"
        $formattedDate = $date->format('j F Y');

        $data = [
            "id" => $laporan->id,
            "surat_permohonan" => [
                "biro" => $suratPermohonan['biro'] ?? null,
                "tgl" => $formattedDate, // Formatted date
                "no_sppa" => $suratPermohonan['no_sppa'],
                "sifat_sppa" => $suratPermohonan['sifat_sppa'] ?? null,
                "lampiran_sppa" => $suratPermohonan['lampiran_sppa'] ?? null,
                "hal_sppa" => $suratPermohonan['hal_sppa'] ?? null,
                "nama_kb" => $suratPermohonan['nama_kb'] ?? null,
                "jabatan_kb" => $suratPermohonan['jabatan_kb'] ?? null,
                "nip_kb" => $suratPermohonan['nip_kb'] ?? null,
                "pangkat_kb" => $suratPermohonan['pangkat_kb'] ?? null
            ],
            "matriks_pergeseran" => $laporan->matriks_pergeseran,
            "sptjm" => $laporan->sptjm,
            "dokumen_pelaksanaan" => $laporan->dokumen_pelaksanaan,
            "created_at" => $laporan->created_at->format('d F Y'), // Format the date
        ];
        

        $options = new Options();
        $options->set('chroot', public_path());

        $dompdf = new Dompdf($options);
        $html = view('surat', compact('data'))->render();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        
        $pdfContent = $dompdf->output();

        return response()->streamDownload(function () use ($pdfContent) {
            echo $pdfContent;
        }, 'surat.pdf');
    }

    public function printSptjm($id)
    {
        $laporan = Laporan::find($id);
        // Decode the JSON string in the "surat_permohonan" field
        $suratPermohonan = json_decode($laporan->surat_permohonan, true);
        $Esptjm = json_decode($laporan->sptjm, true);

        // Parse the date string
        $date = Carbon::parse($Esptjm['tgl_sptjm']);
        
        // Format the date as "30 April 2018"
        $formattedDate = $date->format('j F Y');

        $data = [
            "id" => $laporan->id,
            "surat_permohonan" => [
                "biro" => $suratPermohonan['biro'] ?? null,
                "tgl" => $formattedDate, // Formatted date
                "no_sppa" => $suratPermohonan['no_sppa'],
                "sifat_sppa" => $suratPermohonan['sifat_sppa'] ?? null,
                "lampiran_sppa" => $suratPermohonan['lampiran_sppa'] ?? null,
                "hal_sppa" => $suratPermohonan['hal_sppa'] ?? null,
                "nama_kb" => $suratPermohonan['nama_kb'] ?? null,
                "jabatan_kb" => $suratPermohonan['jabatan_kb'] ?? null,
                "nip_kb" => $suratPermohonan['nip_kb'] ?? null,
                "pangkat_kb" => $suratPermohonan['pangkat_kb'] ?? null
            ],
            "sptjm" => [
                "no_sptjm" => $Esptjm['no_sptjm'] ?? null,
                "tgl_sptjm" => $formattedDate ?? null,
            ]
        ];
        // dd($Esptjm);
        $options = new Options();
        $options->set('chroot', public_path());

        $dompdf = new Dompdf($options);
        $html = view('sptjm', compact('data'))->render();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        
        $pdfContent = $dompdf->output();
        

        return response()->streamDownload(function () use ($pdfContent) {
            echo $pdfContent;
        }, 'sptjm.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new TabelExport(), 'table.xlsx');
    }
}
