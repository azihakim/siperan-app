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
        // // Daftar nama-nama biro
        // $biros = [
        //     'Sekrekaris Daerah',
        //     'Biro Pemerintahan dan Otonomi Daerah',
        //     'Biro Hukum Setda Provinsi Sumsel',
        //     'Biro Perekonomian Setda Provinsi Sumsel',
        //     'Biro Administrasi Pembangunan Setda Provinsi Sumsel',
        //     'Biro Kesehjahteraan Rakyat Setda Provinsi Sumsel',
        //     'Biro Umum dan Perlengkapan Setda Provinsi Sumsel',
        //     'Biro Humas dan Protokol Setda Provinsi Sumsel',
        //     // Tambahkan nama biro lainnya sesuai kebutuhan
        // ];

        // // Memasukkan data biro ke dalam tabel
        // foreach ($biros as $biro) {
        //     Pegawai::create([
        //         'biro' => $biro,
        //         'nama' => 'Nama ' . $biro,
        //         'nip' => 'NIP ' . $biro,
        //         'jabatan' => 'Jabatan ' . $biro,
        //     ]);
        // }

        $pegawai = [
            [
                'biro' => 'Sekrekaris Daerah',
                'nama' => 'Ir. S.A. Supriono',
                'nip' => '196406071990031007',
                'jabatan' => 'Pengguna Anggaran',
            ],
            [
                'biro' => 'Biro Pemerintahan dan Otonomi Daerah',
                'nama' => 'Dr. Sri Sulastri, SH, M.Si',
                'nip' => '196602161995032001',
                'jabatan' => 'Kuasa Pengguna Anggaran',
            ],
            [
                'biro' => 'Biro Hukum Setda Provinsi Sumsel',
                'nama' => 'Windri Marlenny, SH, MM',
                'nip' => '197603262005012006',
                'jabatan' => 'Kuasa Pengguna Anggaran',
            ],
            [
                'biro' => 'Biro Perekonomian Setda Provinsi Sumsel',
                'nama' => 'Hengki Putrawan, S.Pt, M.Si',
                'nip' => '197905162005011008',
                'jabatan' => 'Kuasa Pengguna Anggaran',
            ],
            [
                'biro' => 'Biro Administrasi Pembangunan Setda Provinsi Sumsel',
                'nama' => 'Ir. H. Iskandar Zulkarnain, M.Si',
                'nip' => '196412081993031002',
                'jabatan' => 'Kuasa Pengguna Anggaran',
            ],
            [
                'biro' => 'Biro Kesehjahteraan Rakyat Setda Provinsi Sumsel',
                'nama' => 'Dr. Drs. H. Sunarto, M.Si',
                'nip' => '196906081990031006',
                'jabatan' => 'Kuasa Pengguna Anggaran',
            ],
            [
                'biro' => 'Biro Organisasi Setda Provinsi Sumsel',
                'nama' => 'Muhammad Zaki Aslam, S.IP, M.Si',
                'nip' => '197306261993111001',
                'jabatan' => 'Kuasa Pengguna Anggaran',
            ],
            [
                'biro' => 'Biro Umum dan Perlengkapan Setda Provinsi Sumsel',
                'nama' => 'Sandi Fahlepi, SP, M.Si',
                'nip' => '198001152008031001',
                'jabatan' => 'Kuasa Pengguna Anggaran',
            ],
            [
                'biro' => 'Biro Humas dan Protokol Setda Provinsi Sumsel',
                'nama' => 'Tony Kurniawan, S.S, MM',
                'nip' => '198510082011011006',
                'jabatan' => 'Kuasa Pengguna Anggaran',
            ],
            [
                'biro' => 'Biro pengadaan Barang dan Jasa Setda Provinsi Sumsel',
                'nama' => 'Muzzakir, ST, MT',
                'nip' => '196709291998031005',
                'jabatan' => 'Kuasa Pengguna Anggaran',
            ]

        ];

        foreach ($pegawai as $data) {
            Pegawai::create($data);
        }
    }
}
