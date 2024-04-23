<?php

namespace App\Livewire;

use Livewire\Component;
use Dompdf\Dompdf;
use App\Livewire\wire;
use Carbon\Carbon;
use Dompdf\Options;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TabelExport;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class CreateLaporan extends Component
{
    public $currentStep = 4;
    public $biro, $tgl, $no_sppa, $sifat_sppa, $lampiran_sppa, $hal_sppa, $nama_kb, $jabatan_kb, $nip_kb;
    public $dokPel_tahun, $dokPel_noDppa, $dokPel_UrusanPemerintah, $dokPel_bidangUrusan, $dokPel_program, $dokPel_kegiatan, $dokPel_organisasi, $dokPel_unit, $dokPel_alokasiM1, $dokPel_alokasiTahun, $dokPel_alokasiP1, $ppp;
    public $inputs = [];
    public $inputs_dokPel = [];
    public $i = 1;
    public $options = [];

    public function render()
    {
        return view('livewire.create-laporan');
    }

    public function mount()
    {
        $this->options = Pegawai::select('biro')->distinct()->pluck('biro')->toArray();

        // Initialize first input when component is loaded
        $this->inputs[] = [
            'no_rekening' => '', 
            'uraian' => '', 
            'sebelum' => '', 
            'sesudah' => '', 
            'bertambah_berkurang' => ''
        ];

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
            'tgl' => 'required',
            'no_sppa' => 'required',
            'sifat_sppa' => 'required',
            'lampiran_sppa' => 'required',
            'hal_sppa' => 'required',
            'nama_kb' => 'required',
            'jabatan_kb' => 'required',
            'nip_kb' => 'required'

        ], [
            'biro.required' => 'Kolom biro harus diisi.',
            'tgl.required' => 'Kolom tanggal harus diisi.',
            'no_sppa.required' => 'Nomor harus diisi.',
            'sifat_sppa.required' => 'Kolom sifat harus diisi.',
            'lampiran_sppa.required' => 'Kolom lampiran harus diisi.',
            'hal_sppa.required' => 'Kolom hal harus diisi.',
            'nama_kb.required' => 'Kolom nama harus diisi.',
            'jabatan_kb.required' => 'Kolom jabatan harus diisi.',
            'nip_kb.required' => 'Kolom NIP harus diisi.'
        ]);

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
        foreach ($this->inputs as $key => $value) {
            $this->validate([
                'inputs.'.$key.'.no_rekening' => 'required',
                'inputs.'.$key.'.uraian' => 'required',
                'inputs.'.$key.'.sebelum' => 'required',
                'inputs.'.$key.'.sesudah' => 'required',
                'inputs.'.$key.'.bertambah_berkurang' => 'required'
            ], $this->messages);
        }

        dd($this->inputs);

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
    public function fourthStepSubmit(Request $request)
    {
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
        dd($this->dokPel_alokasiP1);
        dd($this->inputs_dokPel);
    }

    public function thirdStepSubmit()
    {
        // Simpan data
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

