<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Laporan;
use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'password' => Hash::make('123')
        ]);

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

        Laporan::create([
            'surat_permohonan' => json_encode([
                "biro" => "Sekrekaris Daerah",
                "tgl" => null,
                "no_sppa" => null,
                "sifat_sppa" => null,
                "lampiran_sppa" => null,
                "hal_sppa" => null,
                "nama_kb" => "Ir. S.A. Supriono",
                "jabatan_kb" => "Pengguna Anggaran",
                "nip_kb" => "196406071990031007",
                "pangkat_kb" => "Pembina 1"
            ]),
            'matriks_pergeseran' => json_encode([
                "tgl_matriks" => null,
                "matriks_pergeseran" => [
                    ["no_rekening" => "758216512", "uraian" => "Perubahan", "sebelum" => "100", "sesudah" => "100", "bertambah_berkurang" => "100"],
                    ["no_rekening" => "842316856", "uraian" => "Pergeseran", "sebelum" => "200", "sesudah" => "220", "bertambah_berkurang" => "230"]
                ]
            ]),
            'sptjm' => json_encode(["no_sptjm" => "no sptjm", "tgl_sptjm" => "2004-08-05"]),
            'dokumen_pelaksanaan' => json_encode([
                "detail_surat" => [
                    "tahun_anggaran" => "2021-08-06",
                    "nomor_dppa" => "123",
                    "urusan_pemerintahan" => "Pendidikan",
                    "bidang_urusan" => "Pendidikan",
                    "program" => "Pendidikan",
                    "kegiatan" => "Pendidikan",
                    "organisasi" => "Pendidikan",
                    "unit" => "Pendidikan",
                    "alokasi_m1" => "Pendidikan",
                    "alokasi_tahun" => "Pendidikan",
                    "alokasi_p1" => "Pendidikan",
                ],
                "indikator" => [
                    "sk" => 'sk',
                    "sp" => 'sp',
                    "lokasi" => 'lokasi',
                    "ksk" => 'ksk',
                    "waktu" => 'waktu',
                    "keterangan" => 'keterangan',
                    "ck_tuk_sbm" => 'ck_tuk_sbm',
                    "ck_tk_sbm" => 'ck_tk_sbm',
                    "ck_tuk_sth" => 'ck_tuk_sth',
                    "ck_tk_sth" => 'ck_tk_sth',
                    "m_tuk_sbm" => 'm_tuk_sbm',
                    "m_tk_sbm" => 'm_tk_sbm',
                    "m_tuk_sth" => 'm_tuk_sth',
                    "m_tk_sth" => 'm_tk_sth',
                    "k_tuk_sbm" => 'k_tuk_sbm',
                    "k_tk_sbm" => 'k_tk_sbm',
                    "k_tuk_sth" => 'k_tuk_sth',
                    "k_tk_sth" => 'k_tk_sth',
                    "h_tuk_sbm" => 'h_tuk_sbm',
                    "h_tk_sbm" => 'h_tk_sbm',
                    "h_tuk_sth" => 'h_tuk_sth',
                    "h_tk_sth" => 'h_tk_sth',
                ],
                "rincian_perhitungan" => [
                    ["kodeRekening" => "rekening 1", "uraian" => "uraian 1", "volume_sbm" => "volume_sbm xxx", "satuan_sbm" => "satuan_sbm XXX", "harga_sbm" => "harga_sbm XXX", "ppn_sbm" => "10", "jumlah_sbm" => "100", "volume_sth" => "volume_sth XXX", "satuan_sth" => "satuan_sth XXX", "harga_sth" => "harga_sth XXX", "ppn_sth" => "20", "jumlah_sth" => "250", "bertambah_berkurang" => "100"],
                    ["kodeRekening" => "rekening 2", "uraian" => "uraian 2", "volume_sbm" => "volume_sbm 222", "satuan_sbm" => "satuan_sbm 222", "harga_sbm" => "harga_sbm 222", "ppn_sbm" => "10", "jumlah_sbm" => "300", "volume_sth" => "volume_sth 222", "satuan_sth" => "satuan_sth 222", "harga_sth" => "harga_sth 222", "ppn_sth" => "20", "jumlah_sth" => "333", "bertambah_berkurang" => "200"]
                ],
                "ppkd" => ["ppkd_nama" => "nama ppkd", "ppkd_nip" => "nip ppkd"],
                "rencana" => [
                    "dokPel_jan" => "1", "dokPel_feb" => "1", "dokPel_mar" => "1", "dokPel_apr" => "1",
                    "dokPel_mei" => "1", "dokPel_jun" => "1", "dokPel_jul" => "1", "dokPel_agu" => "1",
                    "dokPel_sep" => "1", "dokPel_okt" => "1", "dokPel_nov" => "1", "dokPel_des" => "1"
                ],
                "tim" => [
                    ["tim_nama" => "nama tim 1", "tim_nip" => "nip tim 1", "tim_jabatan" => "jabatan tim 1"],
                    ["tim_nama" => "nama tim 2", "tim_nip" => "nip tim 2", "tim_jabatan" => "jabatan tim 2"]
                ]
            ]),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
