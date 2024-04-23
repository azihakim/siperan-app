<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Pegawai;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Daftar nama-nama biro
        $biros = [
            'Sekrekaris Daerah',
            'Biro Pemerintahan dan Otonomi Daerah',
            'Biro Hukum Setda Provinsi Sumsel',
            'Biro Perekonomian Setda Provinsi Sumsel',
            'Biro Administrasi Pembangunan Setda Provinsi Sumsel',
            'Biro Kesehjahteraan Rakyat Setda Provinsi Sumsel',
            'Biro Umum dan Perlengkapan Setda Provinsi Sumsel',
            'Biro Humas dan Protokol Setda Provinsi Sumsel',
            // Tambahkan nama biro lainnya sesuai kebutuhan
        ];

        // Memasukkan data biro ke dalam tabel
        foreach ($biros as $biro) {
            Pegawai::create([
                'biro' => $biro,
                'nama' => 'Nama ' . $biro,
                'nip' => 'NIP ' . $biro,
                'jabatan' => 'Jabatan ' . $biro,
            ]);
        }
    }
}
