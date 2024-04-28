<?php

namespace App\Livewire;

use App\Models\Laporan;
use App\Models\Pegawai;
use Livewire\Component;

use Dompdf\Dompdf;
use Dompdf\Options;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TabelExport;
use Illuminate\Http\Request;


class EditLaporan extends Component
{
    public $currentStep = 1;
    public $options = [];
    public $itemId;
    public $surat_permohonan;
    public $matriks_pergeseran;
    public $dokumen_pelaksanaan;

    public $biro, $tgl, $no_sppa, $sifat_sppa, $lampiran_sppa, $hal_sppa, $nama_kb, $jabatan_kb, $nip_kb, $pangkat_kb;
    public $tgl_sptjm, $no_sptjm;
    public $dokPel_ck_tuk_sbm, $dokPel_ck_tk_sbm, $dokPel_ck_tuk_sth, $dokPel_ck_tk_sth, $dokPel_m_tuk_sbm, $dokPel_m_tk_sbm, $dokPel_m_tuk_sth, $dokPel_m_tk_sth, $dokPel_k_tuk_sbm, $dokPel_k_tk_sbm, $dokPel_k_tuk_sth, $dokPel_k_tk_sth, $dokPel_h_tuk_sbm, $dokPel_h_tk_sbm, $dokPel_h_tuk_sth, $dokPel_h_tk_sth;
    public $dokPel_tahun, $dokPel_noDppa, $dokPel_UrusanPemerintahan, $dokPel_bidangUrusan, $dokPel_program, $dokPel_kegiatan, $dokPel_organisasi, $dokPel_unit, $dokPel_alokasiM1, $dokPel_alokasiTahun, $dokPel_alokasiP1;
    public $dokPel_sk, $dokPel_sp, $dokPel_lokasi, $dokPel_ksk, $dokPel_waktu, $dokPel_keterangan;
    public $inputs = [];
    public $inputs_dokPel = [];
    public $i = 1;
    public $sppa, $matriks, $sptjm, $dokPel;



    public function render()
    {
        return view('livewire.edit-laporan');
    }
    
    public function mount($id)
    {
        $this->itemId = $id;

        $laporan = Laporan::findOrFail($id);
        $this->surat_permohonan = json_decode($laporan->surat_permohonan, true) ?? [];
        $this->matriks_pergeseran = json_decode($laporan->matriks_pergeseran, true) ?? [];
        $this->sptjm = json_decode($laporan->sptjm, true) ?? [];
        $this->dokumen_pelaksanaan = json_decode($laporan->dokumen_pelaksanaan, true) ?? [];
        $this->options = Pegawai::select('biro')->distinct()->pluck('biro')->toArray();
        // dd($laporan);
        // Mengambil nilai dari surat_permohonan
        $this->biro = $this->surat_permohonan['biro'];
        $this->tgl = $this->surat_permohonan['tgl'];
        $this->no_sppa = $this->surat_permohonan['no_sppa'];
        $this->sifat_sppa = $this->surat_permohonan['sifat_sppa'];
        $this->lampiran_sppa = $this->surat_permohonan['lampiran_sppa'];
        $this->hal_sppa = $this->surat_permohonan['hal_sppa'];
        $this->nama_kb = $this->surat_permohonan['nama_kb'];
        $this->jabatan_kb = $this->surat_permohonan['jabatan_kb'];
        $this->nip_kb = $this->surat_permohonan['nip_kb'];
        $this->pangkat_kb = $this->surat_permohonan['pangkat_kb'];

        // Mengambil nilai dari matriks_pergeseran\
        $this->matriks = $this->matriks_pergeseran;
        
        foreach ($this->matriks as $key => $value) {
            $this->inputs[] = [
                'no_rekening' => $value['no_rekening'],
                'uraian' => $value['uraian'],
                'sebelum' => $value['sebelum'],
                'sesudah' => $value['sesudah'],
                'bertambah_berkurang' => $value['bertambah_berkurang']
            ];
        }

        // Mengambil nilai dari sptjm
        $this->no_sptjm = $this->sptjm['no_sptjm'];
        $this->tgl_sptjm = $this->sptjm['tgl_sptjm'];

        // Mengambil nilai dari dokumen_pelaksanaan
        $this->dokPel_tahun = $this->dokumen_pelaksanaan
        ['detail_surat']['tahun_anggaran'];
        $this->dokPel_noDppa = $this->dokumen_pelaksanaan
        ['detail_surat']['nomor_dppa'];
        $this->dokPel_UrusanPemerintahan = $this->dokumen_pelaksanaan
        ['detail_surat']['urusan_pemerintahan'];
        $this->dokPel_bidangUrusan = $this->dokumen_pelaksanaan
        ['detail_surat']['bidang_urusan'];
        $this->dokPel_program = $this->dokumen_pelaksanaan
        ['detail_surat']['program'];
        $this->dokPel_kegiatan = $this->dokumen_pelaksanaan
        ['detail_surat']['kegiatan'];
        $this->dokPel_organisasi = $this->dokumen_pelaksanaan
        ['detail_surat']['organisasi'];
        $this->dokPel_unit = $this->dokumen_pelaksanaan
        ['detail_surat']['unit'];
        $this->dokPel_alokasiM1 = $this->dokumen_pelaksanaan
        ['detail_surat']['alokasi_m1'];
        $this->dokPel_alokasiTahun = $this->dokumen_pelaksanaan
        ['detail_surat']['alokasi_tahun'];
        $this->dokPel_alokasiP1 = $this->dokumen_pelaksanaan
        ['detail_surat']['alokasi_p1'];
        $this->dokPel_sk = $this->dokumen_pelaksanaan
        ['indikator']['sk'];
        $this->dokPel_sp = $this->dokumen_pelaksanaan
        ['indikator']['sp'];
        $this->dokPel_lokasi = $this->dokumen_pelaksanaan
        ['indikator']['lokasi'];
        $this->dokPel_ksk = $this->dokumen_pelaksanaan
        ['indikator']['ksk'];
        $this->dokPel_waktu = $this->dokumen_pelaksanaan
        ['indikator']['waktu'];
        $this->dokPel_keterangan = $this->dokumen_pelaksanaan
        ['indikator']['keterangan'];
        


        $this->dokPel_ck_tuk_sbm = $this->dokumen_pelaksanaan
        ['indikator']['ck_tuk_sbm'];
        $this->dokPel_ck_tk_sbm = $this->dokumen_pelaksanaan
        ['indikator']['ck_tk_sbm'];
        $this->dokPel_ck_tuk_sth = $this->dokumen_pelaksanaan
        ['indikator']['ck_tuk_sth'];
        $this->dokPel_ck_tk_sth = $this->dokumen_pelaksanaan
        ['indikator']['ck_tk_sth'];
        $this->dokPel_m_tuk_sbm = $this->dokumen_pelaksanaan
        ['indikator']['m_tuk_sbm'];
        $this->dokPel_m_tk_sbm = $this->dokumen_pelaksanaan
        ['indikator']['m_tk_sbm'];
        $this->dokPel_m_tuk_sth = $this->dokumen_pelaksanaan
        ['indikator']['m_tuk_sth'];
        $this->dokPel_m_tk_sth = $this->dokumen_pelaksanaan
        ['indikator']['m_tk_sth'];
        $this->dokPel_k_tuk_sbm = $this->dokumen_pelaksanaan
        ['indikator']['k_tuk_sbm'];
        $this->dokPel_k_tk_sbm = $this->dokumen_pelaksanaan
        ['indikator']['k_tk_sbm'];
        $this->dokPel_k_tuk_sth = $this->dokumen_pelaksanaan
        ['indikator']['k_tuk_sth'];
        $this->dokPel_k_tk_sth = $this->dokumen_pelaksanaan
        ['indikator']['k_tk_sth'];
        $this->dokPel_h_tuk_sbm = $this->dokumen_pelaksanaan
        ['indikator']['h_tuk_sbm'];
        $this->dokPel_h_tk_sbm = $this->dokumen_pelaksanaan
        ['indikator']['h_tk_sbm'];
        $this->dokPel_h_tuk_sth = $this->dokumen_pelaksanaan
        ['indikator']['h_tuk_sth'];
        $this->dokPel_h_tk_sth = $this->dokumen_pelaksanaan
        ['indikator']['h_tk_sth'];



        $this->inputs_dokPel = $this->dokumen_pelaksanaan
        ['rincian_perhitungan'];
        
    
    }



    public function fillEmployeeData()
    {
        // Retrieve employee data from the database based on selected department
        $pegawai = Pegawai::where('biro', $this->biro)->first();

        // If employee data is found, fill in the name, NIP, and position properties
        if ($pegawai) {
            $this->nama_kb = $pegawai->nama;
            $this->nip_kb = $pegawai->nip;
            $this->jabatan_kb = $pegawai->jabatan;
        } else {
            // If employee data is not found, empty the name, NIP, and position properties
            $this->nama_kb = null;
            $this->nip_kb = null;
            $this->jabatan_kb = null;
        }
    }


    public function firstStepSubmit()
    {
        $this->validate([
            'biro' => 'required',
            // 'tgl' => 'required',
            // 'no_sppa' => 'required',
            // 'sifat_sppa' => 'required',
            // 'lampiran_sppa' => 'required',
            // 'hal_sppa' => 'required',
            // 'nama_kb' => 'required',
            // 'jabatan_kb' => 'required',
            // 'nip_kb' => 'required',
            // 'pangkat_kb' => 'required'

        ], [
            'biro.required' => 'Kolom biro harus diisi.',
            // 'tgl.required' => 'Kolom tanggal harus diisi.',
            // 'no_sppa.required' => 'Nomor harus diisi.',
            // 'sifat_sppa.required' => 'Kolom sifat harus diisi.',
            // 'lampiran_sppa.required' => 'Kolom lampiran harus diisi.',
            // 'hal_sppa.required' => 'Kolom hal harus diisi.',
            // 'nama_kb.required' => 'Kolom nama harus diisi.',
            // 'jabatan_kb.required' => 'Kolom jabatan harus diisi.',
            // 'nip_kb.required' => 'Kolom NIP harus diisi.',
            // 'pangkat_kb.required' => 'Kolom Pangkat harus diisi.'
        ]);

        $this->sppa = [
            'biro' => $this->biro,
            'tgl' => $this->tgl,
            'no_sppa' => $this->no_sppa,
            'sifat_sppa' => $this->sifat_sppa,
            'lampiran_sppa' => $this->lampiran_sppa,
            'hal_sppa' => $this->hal_sppa,
            'nama_kb' => $this->nama_kb,
            'jabatan_kb' => $this->jabatan_kb,
            'nip_kb' => $this->nip_kb,
            'pangkat_kb' => $this->pangkat_kb
        ];
        // dd($this->biro, $this->tgl, $this->no_sppa, $this->sifat_sppa, $this->lampiran_sppa, $this->hal_sppa, $this->nama_kb, $this->jabatan_kb, $this->nip_kb);
        // Jika validasi berhasil, lanjut ke langkah berikutnya
        $this->currentStep = 2;
    }
    
    public function back($step)
    {
        $this->currentStep = $step;    
    }
    
    public function addInput()
    {
        $this->i++;
        $this->inputs[] = [
            'no_rekening' => '', 
            'uraian' => '', 
            'sebelum' => '', 
            'sesudah' => '', 
            'bertambah_berkurang' => ''
        ];
    }

    public function addInputDokPel()
    {
        $this->i++;
        $this->inputs_dokPel[] = [
            'kodeRekening' => '', 
            'uraian' => '', 
            'volume_sbm' => '', 
            'satuan_sbm' => '', 
            'harga_sbm' => '', 
            'jumlah_sbm' => '',

            'volume_sth' => '', 
            'satuan_sth' => '', 
            'harga_sth' => '', 
            'jumlah_sth' => ''
        ];
    }

    public function remove($key)
    {
        unset($this->inputs[$key]);
        $this->inputs = array_values($this->inputs); // Reset array keys
    }

    public function remove_dokPel($i)
    {
        unset($this->inputs_dokPel[$i]);
        $this->inputs_dokPel = array_values($this->inputs_dokPel); // Reset array keys
    }

    protected $messages = [
        'inputs.*.no_rekening.required' => 'Kolom No. Rekening harus diisi.',
        'inputs.*.uraian.required' => 'Kolom Uraian harus diisi.',
        'inputs.*.sebelum.required' => 'Kolom Sebelum harus diisi.',
        'inputs.*.sesudah.required' => 'Kolom Sesudah harus diisi.',
        'inputs.*.bertambah_berkurang.required' => 'Kolom Bertambah/Berkurang harus diisi.'
    ];

    public function secondStepSubmit()
    {
        // Validasi setiap elemen array secara manual
        // foreach ($this->inputs as $key => $value) {
        //     $this->validate([
        //         'inputs.'.$key.'.no_rekening' => 'required',
        //         'inputs.'.$key.'.uraian' => 'required',
        //         'inputs.'.$key.'.sebelum' => 'required',
        //         'inputs.'.$key.'.sesudah' => 'required',
        //         'inputs.'.$key.'.bertambah_berkurang' => 'required'
        //     ], $this->messages);
        // }

        $this->matriks = $this->inputs;
        // Lanjutkan dengan langkah berikutnya
        $this->currentStep = 3;
    }

    protected $messages_dokPel = [
        'inputs_dokPel.*.kodeRekening.required' => 'Kolom Kode Rekening harus diisi.',
        'inputs_dokPel.*.uraian.required' => 'Kolom Uraian harus diisi.',
        'inputs_dokPel.*.satuan_sbm.required' => 'Kolom Satuan harus diisi.',
        'inputs_dokPel.*.ppn_sbm.required' => 'Kolom PPN harus diisi.',
        'inputs_dokPel.*.volume_sbm.required' => 'Kolom Volume harus diisi.',
        'inputs_dokPel.*.harga_sbm.required' => 'Kolom Harga harus diisi.',
        'inputs_dokPel.*.jumlah_sbm.required' => 'Kolom Jumlah harus diisi.',

        'inputs_dokPel.*.volume_sth.required' => 'Kolom Volume harus diisi.',
        'inputs_dokPel.*.satuan_sth.required' => 'Kolom Satuan harus diisi.',
        'inputs_dokPel.*.harga_sth.required' => 'Kolom Harga harus diisi.',
        'inputs_dokPel.*.ppn_sth.required' => 'Kolom PPN harus diisi.',
        'inputs_dokPel.*.jumlah_sth.required' => 'Kolom Jumlah harus diisi.',

        'inputs_dokPel.*.bertambah_berkurang.required' => 'Kolom Bertambah/Berkurang harus diisi.',

    ];

    
    public function thirdStepSubmit()
    {
        // $this->validate(
        //     ['no_sptjm' => 'required',
        //     'tgl_sptjm' => 'required'],
        //     ['no_sptjm.required' => 'Nomor harus diisi.',
        //     'tgl_sptjm.required' => 'Tanggal harus diisi.']
        // );

        $this->sptjm = [
            'no_sptjm' => $this->no_sptjm,
            'tgl_sptjm' => $this->tgl_sptjm
        ];
        $this->currentStep = 4;
    }

    public function printPermohonan()
    {
        $nama_kb = $this->nama_kb;
        $jabatan_kb = $this->jabatan_kb;
        $nip_kb = $this->nip_kb;
        $biro = $this->biro;
        $tgl = $this->tgl;
        $no_sppa = $this->no_sppa;
        $sifat_sppa = $this->sifat_sppa;
        $lampiran_sppa = $this->lampiran_sppa;
        $hal_sppa = $this->hal_sppa;

        $options = new Options();
        $options->set('chroot', public_path());

        $dompdf = new Dompdf($options);
        $html = view('surat', compact('biro', 'nama_kb', 'jabatan_kb', 'nip_kb', 'tgl', 'no_sppa', 'sifat_sppa', 'lampiran_sppa', 'hal_sppa'))->render();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        
        $pdfContent = $dompdf->output();

        return response()->streamDownload(function () use ($pdfContent) {
            echo $pdfContent;
        }, 'surat.pdf');
    }
    public function fourthStepSubmit(Request $request)
    {
        $surat = [
            'biro' => $this->biro,
            'tgl' => $this->tgl,
            'no_sppa' => $this->no_sppa,
            'sifat_sppa' => $this->sifat_sppa,
            'lampiran_sppa' => $this->lampiran_sppa,
            'hal_sppa' => $this->hal_sppa,
            'nama_kb' => $this->nama_kb,
            'jabatan_kb' => $this->jabatan_kb,
            'nip_kb' => $this->nip_kb,
            'pangkat_kb' => $this->pangkat_kb
        ];

        // Validasi setiap elemen array secara manual
        // foreach ($this->inputs_dokPel as $i => $value) {
        //     $this->validate([
        //         'inputs_dokPel.'.$i.'.kodeRekening' => 'required',
        //         'inputs_dokPel.'.$i.'.uraian' => 'required',
        //         'inputs_dokPel.'.$i.'.volume_sbm' => 'required',
        //         'inputs_dokPel.'.$i.'.satuan_sbm' => 'required',
        //         'inputs_dokPel.'.$i.'.ppn_sbm' => 'required',
        //         'inputs_dokPel.'.$i.'.harga_sbm' => 'required',
        //         'inputs_dokPel.'.$i.'.jumlah_sbm' => 'required',
        //         'inputs_dokPel.'.$i.'.ppn_sth' => 'required',
        //         'inputs_dokPel.'.$i.'.volume_sth' => 'required',
        //         'inputs_dokPel.'.$i.'.satuan_sth' => 'required',
        //         'inputs_dokPel.'.$i.'.harga_sth' => 'required',
        //         'inputs_dokPel.'.$i.'.jumlah_sth' => 'required',
        //         'inputs_dokPel.'.$i.'.bertambah_berkurang' => 'required'
        //     ], $this->messages_dokPel); // Gunakan variable messages_dokPel untuk menampilkan pesan error
        // }

        $detailSurat = [
            'tahun_anggaran' => $this->dokPel_tahun,
            'nomor_dppa' => $this->dokPel_noDppa,
            'urusan_pemerintahan' => $this->dokPel_UrusanPemerintahan,
            'bidang_urusan' => $this->dokPel_bidangUrusan,
            'program' => $this->dokPel_program,
            'kegiatan' => $this->dokPel_kegiatan,
            'organisasi' => $this->dokPel_organisasi,
            'unit' => $this->dokPel_unit,
            'alokasi_m1' => $this->dokPel_alokasiM1,
            'alokasi_tahun' => $this->dokPel_alokasiTahun,
            'alokasi_p1' => $this->dokPel_alokasiP1,
        ];

        $indikator =[
            'sk' => $this->dokPel_sk,
            'sp' => $this->dokPel_sp,
            'lokasi' => $this->dokPel_lokasi,
            'ksk' => $this->dokPel_ksk,
            'waktu' => $this->dokPel_waktu,
            'keterangan' => $this->dokPel_keterangan,
            'ck_tuk_sbm' => $this->dokPel_ck_tuk_sbm,
            'ck_tk_sbm' => $this->dokPel_ck_tk_sbm,
            'ck_tuk_sth' => $this->dokPel_ck_tuk_sth,
            'ck_tk_sth' => $this->dokPel_ck_tk_sth,
            'm_tuk_sbm' => $this->dokPel_m_tuk_sbm,
            'm_tk_sbm' => $this->dokPel_m_tk_sbm,
            'm_tuk_sth' => $this->dokPel_m_tuk_sth,
            'm_tk_sth' => $this->dokPel_m_tk_sth,
            'k_tuk_sbm' => $this->dokPel_k_tuk_sbm,
            'k_tk_sbm' => $this->dokPel_k_tk_sbm,
            'k_tuk_sth' => $this->dokPel_k_tuk_sth,
            'k_tk_sth' => $this->dokPel_k_tk_sth,
            'h_tuk_sbm' => $this->dokPel_h_tuk_sbm,
            'h_tk_sbm' => $this->dokPel_h_tk_sbm,
            'h_tuk_sth' => $this->dokPel_h_tuk_sth,
            'h_tk_sth' => $this->dokPel_h_tk_sth,
        ];
    
        $dokumen_pelaksanaan = [
            'detail_surat' => $detailSurat,
            'indikator' => $indikator,
            'rincian_perhitungan' => $this->inputs_dokPel,
        ];
        // dd($dokumen_pelaksanaan);

        $laporan = Laporan::findOrFail($this->itemId);
        $laporan-> surat_permohonan = json_encode($surat);
        $laporan-> matriks_pergeseran = json_encode($this->matriks);
        $laporan-> sptjm = json_encode($this->sptjm);
        $laporan-> dokumen_pelaksanaan = json_encode($dokumen_pelaksanaan);
        // dd($laporan);
        $laporan->save();

        return redirect('/');
    }

    

    public function printSptjm()
    {
        $nama_kb = $this->nama_kb;
        $jabatan_kb = $this->jabatan_kb;
        $nip_kb = $this->nip_kb;
        $biro = $this->biro;

        $options = new Options();
        $options->set('chroot', public_path());

        $dompdf = new Dompdf($options);
        $html = view('sptjm', compact('biro'))->render();
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