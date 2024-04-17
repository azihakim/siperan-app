<?php

namespace App\Livewire;

use Livewire\Component;
use Dompdf\Dompdf;
use App\Livewire\wire;
use Carbon\Carbon;
use Dompdf\Options;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TabelExport;

class CreateLaporan extends Component
{
    public $currentStep = 1;
    public $biro, $tgl, $no_sppa, $nama_kb, $jabatan_kb, $nip_kb;

    // Inisialisasi input dinamis dengan satu array kosong
    public $inputs = [];
    public $i = 1;


    public function render()
    {
        return view('livewire.create-laporan');
    }
    public function mount()
    {
        $this->nama_kb = 'Nama Kepala Biro';
        $this->jabatan_kb = 'Jabatan Kepala Biro';
        $this->nip_kb = 'NIP Kepala Biro';
        
        // Inisialisasi input pertama saat komponen dimuat
        $this->inputs[] = [
            'no_rekening' => '', 
            'uraian' => '', 
            'sebelum' => '', 
            'sesudah' => '', 
            'bertambah_berkurang' => ''
        ];
    }

    public function hydrate()
    {
        // Jalankan metode updateNoSp4() setiap kali komponen dihydrate untuk memastikan no_sp_4 selalu diperbarui
        // $this->updateNoSp4();
    }

    // public function updateNoSp4()
    // {
    //     // Perbarui nilai no_sp_4 sesuai dengan tgl yang dipilih
    //     $this->no_sp_4 = date('Y', strtotime($this->tgl));
    // }

    public function firstStepSubmit()
    {
        $this->validate([
            'biro' => 'required',
            'tgl' => 'required',
            'no_sppa' => 'required'
        ], [
            'biro.required' => 'Kolom biro harus diisi.',
            'tgl.required' => 'Kolom tanggal harus diisi.',
            'no_sppa.required' => 'Nomor harus diisi.'
        ]);

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

    public function remove($key)
    {
        unset($this->inputs[$key]);
        $this->inputs = array_values($this->inputs); // Reset array keys
    }

    protected $rules = [
        'inputs.*.no_rekening' => 'required',
        'inputs.*.uraian' => 'required',
        'inputs.*.sebelum' => 'required',
        'inputs.*.sesudah' => 'required',
        'inputs.*.bertambah_berkurang' => 'required'
    ];

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

        // dd($this->inputs);
        // Lanjutkan dengan langkah berikutnya
        $this->currentStep = 3;
    }


    public function printPermohonan()
    {
        $options = new Options();
        $options->set('chroot', public_path());

        $dompdf = new Dompdf($options);
        $html = view('surat')->render();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        
        $pdfContent = $dompdf->output();
        

        return response()->streamDownload(function () use ($pdfContent) {
            echo $pdfContent;
        }, 'surat.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new TabelExport(), 'table.xlsx');
    }
    
}

