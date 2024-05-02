<?php

namespace App\Http\Controllers;

use App\Exports\dokumenExport;
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

        $biro = $data['surat_permohonan']['biro'];
        return response()->streamDownload(function () use ($pdfContent) {
            echo $pdfContent;
        },  'Surat Permohonan-'.$biro.'.pdf');
    }

    public function printSptjm($id)
    {
        $laporan = Laporan::find($id);
        // Decode the JSON string in the "surat_permohonan" field
        $suratPermohonan = json_decode($laporan->surat_permohonan, true);
        $Esptjm = json_decode($laporan->sptjm, true);

        // Parse the date string
        $date = Carbon::parse($Esptjm['tgl_sptjm'] ?? null);
        
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
        
        $biro = $data['surat_permohonan']['biro'];

        return response()->streamDownload(function () use ($pdfContent) {
            echo $pdfContent;
        },  'SPTJM-'.$biro.'.pdf');
    }

    public function printMatriks($id)
    {
        $laporan = Laporan::find($id);
        // Decode the JSON string in the "surat_permohonan" field
        $suratPermohonan = json_decode($laporan->surat_permohonan, true);
        $matrikPegeseran = json_decode($laporan->matriks_pergeseran, true);

        // Parse the date string
        $date = Carbon::parse($matrikPegeseran['tgl_matriks'] ?? null);
        
        // Format the date as "30 April 2018"
        $formattedDate = $date->format('j F Y');
        $inputs = [];

        $data = [
            "id" => $laporan->id,
            "surat_permohonan" => [
                "biro" => $suratPermohonan['biro'] ?? null,
                "no_sppa" => $suratPermohonan['no_sppa'],
                "sifat_sppa" => $suratPermohonan['sifat_sppa'] ?? null,
                "lampiran_sppa" => $suratPermohonan['lampiran_sppa'] ?? null,
                "hal_sppa" => $suratPermohonan['hal_sppa'] ?? null,
                "nama_kb" => $suratPermohonan['nama_kb'] ?? null,
                "jabatan_kb" => $suratPermohonan['jabatan_kb'] ?? null,
                "nip_kb" => $suratPermohonan['nip_kb'] ?? null,
                "pangkat_kb" => $suratPermohonan['pangkat_kb'] ?? null
            ],
            "matriks_pergeseran" => [
                "tgl_matriks" => $formattedDate ?? null,
                "matriks_pergeseran" => $matrikPegeseran['matriks_pergeseran'] ?? null
            ]
        ];
        // Mengakses data matriks_pergeseran
        $matriks_pergeseran = $data['matriks_pergeseran']['matriks_pergeseran'];

        // Mengakses tgl_matriks
        $tgl_matriks = $data['matriks_pergeseran']['tgl_matriks'];

        $data_m = [];
        // Melakukan foreach untuk matriks_pergeseran
        foreach ($matriks_pergeseran ?? [] as $matriks) {
            $no_rekening = $matriks['no_rekening'] ?? null;
            $uraian = $matriks['uraian'] ?? null;
            $sebelum = $matriks['sebelum'] ?? null;
            $sesudah = $matriks['sesudah'] ?? null;
            $bertambah_berkurang = $matriks['bertambah_berkurang'] ?? null;

            // Lakukan sesuatu dengan data ini, misalnya tambahkan ke dalam array atau lakukan operasi lainnya
            // Contoh:
            $data_m[] = [
                'tgl_matriks' => $tgl_matriks,
                'no_rekening' => $no_rekening,
                'uraian' => $uraian,
                'sebelum' => $sebelum,
                'sesudah' => $sesudah,
                'bertambah_berkurang' => $bertambah_berkurang
            ];
        }
        $options = new Options();
        $options->set('chroot', public_path());

        $dompdf = new Dompdf($options);
        $html = view('matrik', compact('data_m', 'data', 'tgl_matriks'))->render();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        
        $pdfContent = $dompdf->output();
        
        $biro = $data['surat_permohonan']['biro'];
        return response()->streamDownload(function () use ($pdfContent) {
            echo $pdfContent;
        }, 'Matriks Pergeseran-'.$biro.'.pdf');
    }
    public function exportMatriks($id)
    {
        $laporan = Laporan::find($id);
        $suratPermohonan = json_decode($laporan->surat_permohonan, true);
        $matrikPegeseran = json_decode($laporan->matriks_pergeseran, true);
        $date = Carbon::parse($matrikPegeseran['tgl_matriks'] ?? null);
        $formattedDate = $date->format('j F Y');
        $data = [
            "id" => $laporan->id,
            "surat_permohonan" => [
                "biro" => $suratPermohonan['biro'] ?? null,
                "no_sppa" => $suratPermohonan['no_sppa'],
                "sifat_sppa" => $suratPermohonan['sifat_sppa'] ?? null,
                "lampiran_sppa" => $suratPermohonan['lampiran_sppa'] ?? null,
                "hal_sppa" => $suratPermohonan['hal_sppa'] ?? null,
                "nama_kb" => $suratPermohonan['nama_kb'] ?? null,
                "jabatan_kb" => $suratPermohonan['jabatan_kb'] ?? null,
                "nip_kb" => $suratPermohonan['nip_kb'] ?? null,
                "pangkat_kb" => $suratPermohonan['pangkat_kb'] ?? null
            ],
            "matriks_pergeseran" => [
                "tgl_matriks" => $formattedDate ?? null,
                "matriks_pergeseran" => $matrikPegeseran['matriks_pergeseran'] ?? null
            ]
        ];
        $data_m = [];

        $matriks_pergeseran = $matrikPegeseran['matriks_pergeseran'] ?? [];

        foreach ($matriks_pergeseran  ?? null as $matriks) {
            $no_rekening = $matriks['no_rekening'];
            $uraian = $matriks['uraian'];
            $sebelum = $matriks['sebelum'];
            $sesudah = $matriks['sesudah'];
            $bertambah_berkurang = $matriks['bertambah_berkurang'];

            $data_m[] = [
                'tgl_matriks' => $formattedDate,
                'no_rekening' => $no_rekening,
                'uraian' => $uraian,
                'sebelum' => $sebelum,
                'sesudah' => $sesudah,
                'bertambah_berkurang' => $bertambah_berkurang
            ];
        }
        $biro = $data['surat_permohonan']['biro'];

        return Excel::download(new TabelExport($data_m), 'Matriks Pergeseran-'.$biro.'.xlsx');
    }

    public function printDpa($id)
    {
        $laporan = Laporan::find($id);
        // Decode the JSON string in the "surat_permohonan" field
        $suratPermohonan = json_decode($laporan->surat_permohonan, true);
        $dokumenPelaksanaan = json_decode($laporan->dokumen_pelaksanaan, true);
        
        // Parse the date string
        $formattedDate = null;
        if (!empty($dokumenPelaksanaan['detail_surat']['tahun_anggaran'])) {
            $formattedDate = Carbon::parse($dokumenPelaksanaan['detail_surat']['tahun_anggaran']);
        }

        // Check if the date is valid before formatting
        $date = $formattedDate ? $formattedDate->format('j F Y') : null;
        $year = $formattedDate ? $formattedDate->format('Y') : null;

        $inputs = [];

        $data = [
            "id" => $laporan->id,
            "surat_permohonan" => [
                "biro" => $suratPermohonan['biro'] ?? null,
                "no_sppa" => $suratPermohonan['no_sppa'],
                "sifat_sppa" => $suratPermohonan['sifat_sppa'] ?? null,
                "lampiran_sppa" => $suratPermohonan['lampiran_sppa'] ?? null,
                "hal_sppa" => $suratPermohonan['hal_sppa'] ?? null,
                "nama_kb" => $suratPermohonan['nama_kb'] ?? null,
                "jabatan_kb" => $suratPermohonan['jabatan_kb'] ?? null,
                "nip_kb" => $suratPermohonan['nip_kb'] ?? null,
                "pangkat_kb" => $suratPermohonan['pangkat_kb'] ?? null
            ],
            "dokumen_pelaksanaan" => [
                "detail_surat" => $dokumenPelaksanaan['detail_surat'] ?? null,
                "indikator" => $dokumenPelaksanaan['indikator'] ?? null,
                "rincian_perhitungan" => $dokumenPelaksanaan['rincian_perhitungan'] ?? null,
                "ppkd" => $dokumenPelaksanaan['ppkd'] ?? null,
                "rencana" => $dokumenPelaksanaan['rencana'] ?? null,
                "tim" => $dokumenPelaksanaan['tim'] ?? null,
            ]
            
        ];
        // dd($data['surat_permohonan']);
        $rincian_perhitungan = $data['dokumen_pelaksanaan']['rincian_perhitungan'];
        foreach ($rincian_perhitungan as $rp){
            $kodeRekening = $rp['kodeRekening'] ?? null;
            $uraian = $rp['uraian'] ?? null;
            $volume_sbm = $rp['volume_sbm'] ?? null;
            $satuan_sbm = $rp['satuan_sbm'] ?? null;
            $harga_sbm = $rp['harga_sbm'] ?? null;
            $ppn_sbm = $rp['ppn_sbm'] ?? null;
            $jumlah_sbm = $rp['jumlah_sbm'] ?? null;
            $volume_sth = $rp['volume_sth'] ?? null;
            $satuan_sth = $rp['satuan_sth'] ?? null;
            $harga_sth = $rp['harga_sth'] ?? null;
            $ppn_sth = $rp['ppn_sth'] ?? null;
            $jumlah_sth = $rp['jumlah_sth'] ?? null;
            $bertambah_berkurang = $rp['bertambah_berkurang'] ?? null;

            $data_rp[] = [
                'kodeRekening' => $kodeRekening,
                'uraian' => $uraian,
                'volume_sbm' => $volume_sbm,
                'satuan_sbm' => $satuan_sbm,
                'harga_sbm' => $harga_sbm,
                'ppn_sbm' => $ppn_sbm,
                'jumlah_sbm' => $jumlah_sbm,
                'volume_sth' => $volume_sth,
                'satuan_sth' => $satuan_sth,
                'harga_sth' => $harga_sth,
                'ppn_sth' => $ppn_sth,
                'jumlah_sth' => $jumlah_sth,
                'bertambah_berkurang' => $bertambah_berkurang
            ];
        }

        $tim = $data['dokumen_pelaksanaan']['tim'];
        foreach ($tim as $t){
            $tim_nama = $t['tim_nama'] ?? null;
            $tim_nip = $t['tim_nip'] ?? null;
            $tim_jabatan = $t['tim_jabatan'] ?? null;

            $data_tim[] = [
                'tim_nama' => $tim_nama,
                'tim_nip' => $tim_nip,
                'tim_jabatan' => $tim_jabatan
            ];
        }
        // dd($data_tim);
        // dd($data_rp);
        $options = new Options();
        $options->set('chroot', public_path());

        $dompdf = new Dompdf($options);
        $html = view('dpa', compact('data', 'data_rp', 'data_tim', 'date', 'year' ))->render();
        // return $html;
        $dompdf->loadHtml($html);
        $dompdf->setPaper('legal', 'landscape');
        $dompdf->render();
        
        $pdfContent = $dompdf->output();
        
        $biro = $data['surat_permohonan']['biro'];
        return response()->streamDownload(function () use ($pdfContent) {
            echo $pdfContent;
        }, 'DPA-'.$biro.'.pdf');
    }

    public function exportDpa($id)
    {
        $laporan = Laporan::find($id);
        // Decode the JSON string in the "surat_permohonan" field
        $suratPermohonan = json_decode($laporan->surat_permohonan, true);
        $dokumenPelaksanaan = json_decode($laporan->dokumen_pelaksanaan, true);
        
        // Parse the date string
        $formattedDate = null;
        if (!empty($dokumenPelaksanaan['detail_surat']['tahun_anggaran'])) {
            $formattedDate = Carbon::parse($dokumenPelaksanaan['detail_surat']['tahun_anggaran']);
        }

        // Check if the date is valid before formatting
        $date = $formattedDate ? $formattedDate->format('j F Y') : null;
        $year = $formattedDate ? $formattedDate->format('Y') : null;

        $inputs = [];

        $data = [
            "id" => $laporan->id,
            "surat_permohonan" => [
                "biro" => $suratPermohonan['biro'] ?? null,
                "no_sppa" => $suratPermohonan['no_sppa'],
                "sifat_sppa" => $suratPermohonan['sifat_sppa'] ?? null,
                "lampiran_sppa" => $suratPermohonan['lampiran_sppa'] ?? null,
                "hal_sppa" => $suratPermohonan['hal_sppa'] ?? null,
                "nama_kb" => $suratPermohonan['nama_kb'] ?? null,
                "jabatan_kb" => $suratPermohonan['jabatan_kb'] ?? null,
                "nip_kb" => $suratPermohonan['nip_kb'] ?? null,
                "pangkat_kb" => $suratPermohonan['pangkat_kb'] ?? null
            ],
            "dokumen_pelaksanaan" => [
                "detail_surat" => $dokumenPelaksanaan['detail_surat'] ?? null,
                "indikator" => $dokumenPelaksanaan['indikator'] ?? null,
                "rincian_perhitungan" => $dokumenPelaksanaan['rincian_perhitungan'] ?? null,
                "ppkd" => $dokumenPelaksanaan['ppkd'] ?? null,
                "rencana" => $dokumenPelaksanaan['rencana'] ?? null,
                "tim" => $dokumenPelaksanaan['tim'] ?? null,
            ]
            
        ];
        // dd($data['surat_permohonan']);
        $rincian_perhitungan = $data['dokumen_pelaksanaan']['rincian_perhitungan'];
        foreach ($rincian_perhitungan as $rp){
            $kodeRekening = $rp['kodeRekening'] ?? null;
            $uraian = $rp['uraian'] ?? null;
            $volume_sbm = $rp['volume_sbm'] ?? null;
            $satuan_sbm = $rp['satuan_sbm'] ?? null;
            $harga_sbm = $rp['harga_sbm'] ?? null;
            $ppn_sbm = $rp['ppn_sbm'] ?? null;
            $jumlah_sbm = $rp['jumlah_sbm'] ?? null;
            $volume_sth = $rp['volume_sth'] ?? null;
            $satuan_sth = $rp['satuan_sth'] ?? null;
            $harga_sth = $rp['harga_sth'] ?? null;
            $ppn_sth = $rp['ppn_sth'] ?? null;
            $jumlah_sth = $rp['jumlah_sth'] ?? null;
            $bertambah_berkurang = $rp['bertambah_berkurang'] ?? null;

            $data_rp[] = [
                'kodeRekening' => $kodeRekening,
                'uraian' => $uraian,
                'volume_sbm' => $volume_sbm,
                'satuan_sbm' => $satuan_sbm,
                'harga_sbm' => $harga_sbm,
                'ppn_sbm' => $ppn_sbm,
                'jumlah_sbm' => $jumlah_sbm,
                'volume_sth' => $volume_sth,
                'satuan_sth' => $satuan_sth,
                'harga_sth' => $harga_sth,
                'ppn_sth' => $ppn_sth,
                'jumlah_sth' => $jumlah_sth,
                'bertambah_berkurang' => $bertambah_berkurang
            ];
        }

        $tim = $data['dokumen_pelaksanaan']['tim'];
        foreach ($tim as $t){
            $tim_nama = $t['tim_nama'] ?? null;
            $tim_nip = $t['tim_nip'] ?? null;
            $tim_jabatan = $t['tim_jabatan'] ?? null;

            $data_tim[] = [
                'tim_nama' => $tim_nama,
                'tim_nip' => $tim_nip,
                'tim_jabatan' => $tim_jabatan
            ];
        }
        $biro = $data['surat_permohonan']['biro'];
        return Excel::download(new dokumenExport($data, $data_rp, $data_tim, $date, $year), 'DPA-'.$biro.'.xlsx');
    }

    
}
