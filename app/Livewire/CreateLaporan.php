<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\wire;
class CreateLaporan extends Component
{
    public $currentStep = 1;
    public $biro, $tgl, $no_sp_1, $no_sp_2, $no_sp_3, $no_sp_4;

    public function mount()
    {
        // $this->tgl = '';
    }

    public function hydrate()
    {
        // Jalankan metode updateNoSp4() setiap kali komponen dihydrate untuk memastikan no_sp_4 selalu diperbarui
        $this->updateNoSp4();
    }

    public function updateNoSp4()
    {
        // Perbarui nilai no_sp_4 sesuai dengan tgl yang dipilih
        $this->no_sp_4 = date('Y', strtotime($this->tgl));
    }

    public function firstStepSubmit()
    {
        $this->validate([
            'biro' => 'required',
            'tgl' => 'required',
            'no_sp_1' => 'required',
            'no_sp_2' => 'required',
            'no_sp_3' => 'required',
            'no_sp_4' => 'required'
        ], [
            'biro.required' => 'Kolom Biro harus diisi.',
            'tgl.required' => 'Kolom Tanggal harus diisi.',
            'no_sp_1.required' => 'Harus diisi.',
            'no_sp_2.required' => 'Harus diisi.',
            'no_sp_3.required' => 'Harus diisi.',
            'no_sp_4.required' => 'Harus diisi.'
        ]);

        // Jika validasi berhasil, lanjut ke langkah berikutnya
        $this->currentStep = 2;
    }
    public function back($step)
    {
        $this->currentStep = $step;    
    }

    

    public function render()
    {
        return view('livewire.create-laporan');
    }
}
