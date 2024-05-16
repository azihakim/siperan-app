<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Biro;
use App\Models\Laporan;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
            'biro' => 'admin',
            'password' => Hash::make('123')
        ]);

        Laporan::create([
            'pptk' => '',
            'opd' => 'Ir. S.A. Supriono',
            'surat_permohonan' => json_encode([
                "biro" => "Biro Pemerintahan dan Otonomi Daerah",
                "tgl" => null,
                "no_sppa" => null,
                "sifat_sppa" => null,
                "lampiran_sppa" => null,
                "hal_sppa" => null,
                "nama_kb" => "Dr. Sri Sulastri, SH, M.Si",
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


        Laporan::create([
            'pptk' => '',
            'opd' => 'Ir. S.A. Supriono',
            'surat_permohonan' => json_encode([
                "biro" => "Biro Umum dan Perlengkapan",
                "tgl" => null,
                "no_sppa" => null,
                "sifat_sppa" => null,
                "lampiran_sppa" => null,
                "hal_sppa" => null,
                "nama_kb" => "Sandi Fahlepi, SP, M.Si",
                "jabatan_kb" => "Kuasa Pengguna Anggaran",
                "nip_kb" => "198001152008031001",
                "pangkat_kb" => "Pembina TK.I (IV/B)"
            ]),
            'matriks_pergeseran' => json_encode([
                "tgl_matriks" => null,
                "matriks_pergeseran" => [
                    ["no_rekening" => "", "uraian" => "", "sebelum" => "", "sesudah" => "", "bertambah_berkurang" => ""],
                ]
            ]),
            'sptjm' => json_encode(["no_sptjm" => "", "tgl_sptjm" => ""]),
            'dokumen_pelaksanaan' => json_encode([
                "detail_surat" => [
                    "tahun_anggaran" => "2021-08-06",
                    "nomor_dppa" => "DPA/A.1/4.01.0.00.0.00.06.0000/001/2024",
                    "urusan_pemerintahan" => "4 - UNSUR PENDUKUNG URUSAN PEMERINTAHAN",
                    "bidang_urusan" => "4.01 - SEKRETARIAT DAERAH",
                    "program" => "PROGRAM PENUNJANG URUSAN PEMERINTAHAN DAERAH PROVINSI",
                    "kegiatan" => "PERENCANAAN, PENGANGGARAN, DAN EVALUASI KINERJA PERANGKAT DAERAH",
                    "organisasi" => "Sekretariat Daerah",
                    "unit" => "Biro Umum",
                    "alokasi_m1" => "0",
                    "alokasi_tahun" => "93800000",
                    "alokasi_p1" => "107180000",
                ],
                "indikator" => [
                    "sk" => 'Penyusunan Dokumen Perencanaan Perangkat Daerah',
                    "sp" => '',
                    "lokasi" => 'Provinsi Sumatera Selatan, Semua Kecamatan, Semua Kelurahan',
                    "ksk" => 'Jumlah Dokumen Perencanaan Perangkat Daerah',
                    "waktu" => 'Mulai Januari Sampai Februari',
                    "keterangan" => '',
                    "ck_tuk_sbm" => '',
                    "ck_tk_sbm" => '',
                    "ck_tuk_sth" => '',
                    "ck_tk_sth" => '',
                    "m_tuk_sbm" => 'Dana Yang Dibutuhkan',
                    "m_tk_sbm" => '',
                    "m_tuk_sth" => '93800000',
                    "m_tk_sth" => '',
                    "k_tuk_sbm" => 'Jumlah Dokumen Perencanaan Perangkat Daerah',
                    "k_tk_sbm" => '',
                    "k_tuk_sth" => '1 Dokumen',
                    "k_tk_sth" => '',
                    "h_tuk_sbm" => '',
                    "h_tk_sbm" => '',
                    "h_tuk_sth" => '',
                    "h_tk_sth" => '',
                ],
                "rincian_perhitungan" => [
                    ["kodeRekening" => "5", "uraian" => "BELANJA DAERAH", "volume_sbm" => "", "satuan_sbm" => "", "harga_sbm" => "", "ppn_sbm" => "", "jumlah_sbm" => "", "volume_sth" => "", "satuan_sth" => "", "harga_sth" => "", "ppn_sth" => "", "jumlah_sth" => "", "bertambah_berkurang" => "93800000"],
                    ["kodeRekening" => "5.1", "uraian" => "BELANJA OPERASI", "volume_sbm" => "", "satuan_sbm" => "", "harga_sbm" => "", "ppn_sbm" => "", "jumlah_sbm" => "", "volume_sth" => "", "satuan_sth" => "", "harga_sth" => "", "ppn_sth" => "", "jumlah_sth" => "", "bertambah_berkurang" => "93800000"],
                    ["kodeRekening" => "5.1", "uraian" => "Belanja Barang dan Jasa", "volume_sbm" => "", "satuan_sbm" => "", "harga_sbm" => "", "ppn_sbm" => "", "jumlah_sbm" => "", "volume_sth" => "", "satuan_sth" => "", "harga_sth" => "", "ppn_sth" => "", "jumlah_sth" => "", "bertambah_berkurang" => "93800000"],
                    ["kodeRekening" => "5.1.02", "uraian" => "Belanja Barang", "volume_sbm" => "", "satuan_sbm" => "", "harga_sbm" => "", "ppn_sbm" => "", "jumlah_sbm" => "", "volume_sth" => "", "satuan_sth" => "", "harga_sth" => "", "ppn_sth" => "", "jumlah_sth" => "", "bertambah_berkurang" => "18700000"],
                    ["kodeRekening" => "5.1.02", "uraian" => "Belanja Barang Pakai Habis", "volume_sbm" => "", "satuan_sbm" => "", "harga_sbm" => "", "ppn_sbm" => "", "jumlah_sbm" => "", "volume_sth" => "", "satuan_sth" => "", "harga_sth" => "", "ppn_sth" => "", "jumlah_sth" => "", "bertambah_berkurang" => "18700000"],
                    ["kodeRekening" => "5.1.02.01.01.0024", "uraian" => "Belanja Alat/Bahan untuk Kegiatan Kantor-Alat Tulis Kantor", "volume_sbm" => "", "satuan_sbm" => "", "harga_sbm" => "", "ppn_sbm" => "", "jumlah_sbm" => "", "volume_sth" => "", "satuan_sth" => "", "harga_sth" => "", "ppn_sth" => "", "jumlah_sth" => "", "bertambah_berkurang" => "10000000"],
                    ["kodeRekening" => "", "uraian" => "[#] Alat Tulis Kantor Sumber Dana: PENDAPATAN ASLI DAERAH (PAD)", "volume_sbm" => "", "satuan_sbm" => "", "harga_sbm" => "", "ppn_sbm" => "", "jumlah_sbm" => "", "volume_sth" => "", "satuan_sth" => "", "harga_sth" => "", "ppn_sth" => "", "jumlah_sth" => "", "bertambah_berkurang" => "10000000"],
                    ["kodeRekening" => "", "uraian" => "[-] Alat Tulis Kantor", "volume_sbm" => "", "satuan_sbm" => "", "harga_sbm" => "", "ppn_sbm" => "", "jumlah_sbm" => "", "volume_sth" => "", "satuan_sth" => "", "harga_sth" => "", "ppn_sth" => "", "jumlah_sth" => "", "bertambah_berkurang" => "10000000"],
                    ["kodeRekening" => "", "uraian" => "Belanja Alat/Bahan untuk Kegiatan Kantor-Alat Tulis Kantor. Spesifikasi: Belanja Alat Tulis Kantor Kegiatan", "volume_sbm" => "", "satuan_sbm" => "", "harga_sbm" => "", "ppn_sbm" => "", "jumlah_sbm" => "", "volume_sth" => "1", "satuan_sth" => "Kegiatan", "harga_sth" => "10000000", "ppn_sth" => "10%", "jumlah_sth" => "", "bertambah_berkurang" => "10000000"],
                    ["kodeRekening" => "5.1.02.01.01.0026", "uraian" => "Belanja Alat/Bahan Untuk Kegiatan Kantor-Bahan Cetak", "volume_sbm" => "", "satuan_sbm" => "", "harga_sbm" => "", "ppn_sbm" => "", "jumlah_sbm" => "", "volume_sth" => "", "satuan_sth" => "", "harga_sth" => "", "ppn_sth" => "", "jumlah_sth" => "", "bertambah_berkurang" => "8700000"],
                    ["kodeRekening" => "", "uraian" => "[#] Belanja Cetak. Sumber Dana: PENDAPATAN ASLI DAERAH(PAD)", "volume_sbm" => "", "satuan_sbm" => "", "harga_sbm" => "", "ppn_sbm" => "", "jumlah_sbm" => "", "volume_sth" => "", "satuan_sth" => "", "harga_sth" => "", "ppn_sth" => "", "jumlah_sth" => "", "bertambah_berkurang" => "8700000"],
                    ["kodeRekening" => "", "uraian" => "[-] Belanja Cetak", "volume_sbm" => "", "satuan_sbm" => "", "harga_sbm" => "", "ppn_sbm" => "", "jumlah_sbm" => "", "volume_sth" => "", "satuan_sth" => "", "harga_sth" => "", "ppn_sth" => "", "jumlah_sth" => "", "bertambah_berkurang" => "8700000"],
                    ["kodeRekening" => "", "uraian" => "Belanja alat atau bahan untuk kegiatan kantor - Bahan Cetak. Spesifikasi: Bahan Cetak/Pengadaan", "volume_sbm" => "", "satuan_sbm" => "", "harga_sbm" => "", "ppn_sbm" => "", "jumlah_sbm" => "", "volume_sth" => "1", "satuan_sth" => "Kegiatan", "harga_sth" => "8700000", "ppn_sth" => "0%", "jumlah_sth" => "", "bertambah_berkurang" => "8700000"],
                ],
                "ppkd" => ["ppkd_nama" => "H. AKHMAD MUKHLIS, S.E., M.SI", "ppkd_nip" => "196406211993031004"],
                "rencana" => [
                    "dokPel_jan" => "", "dokPel_feb" => "", "dokPel_mar" => "", "dokPel_apr" => "",
                    "dokPel_mei" => "", "dokPel_jun" => "", "dokPel_jul" => "", "dokPel_agu" => "",
                    "dokPel_sep" => "", "dokPel_okt" => "", "dokPel_nov" => "", "dokPel_des" => ""
                ],
                "tim" => [
                    ["tim_nama" => "REGINA ARIYANTI, ST", "tim_nip" => "196712042002122003", "tim_jabatan" => "KEPALA BAPPEDA"],
                    ["tim_nama" => "H. AKHMAD MUKHLIS, S.E., M.SI", "tim_nip" => "196406211993031004", "tim_jabatan" => "KEPALA BPKAD"],
                    ["tim_nama" => "H. ACHMAD RIZWAN S.STP., M.M", "tim_nip" => "198109232000121001", "tim_jabatan" => "KEPALA BAPENDA"]
                ]
            ]),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        
        $biroData = [
            [
                'biro' => 'Biro Pemerintahan dan Otonomi Daerah',
                'programs' => [
                    [
                        'program' => 'Program Penunjang Urusan Pemerintahan Daerah Provinsi',
                        'kegiatan' => [
                            [
                                'kegiatan' => 'Administrasi Keuangan Perangkat Daerah',
                                'sub_kegiatan' => [
                                    'Penyediaan Administrasi Pelaksanaan Tugas ASN',
                                ],
                            ],
                            [
                                'kegiatan' => 'Administrasi Umum Perangkat Daerah',
                                'sub_kegiatan' => [
                                    'Penyediaan Bahan Logistik Kantor',
                                    'Penyelenggaraan Rapat Koordinasi dan Konsultasi SKPD',
                                ],
                            ],
                            [
                                'kegiatan' => 'Penyediaan Jasa Penunjang Urusan Pemerintahan Daerah',
                                'sub_kegiatan' => [
                                    'Penyediaan Jasa Pelayanan Umum Kantor',
                                ],
                            ],
                        ],
                    ],
                    [
                        'program' => 'Program Pemerintahan dan Otonomi Daerah',
                        'kegiatan' => [
                            [
                                'kegiatan' => 'Pelaksanaan Tugas Pemerintahan',
                                'sub_kegiatan' => [
                                    'Fasilitasi Pelaksanaan Pemerintahan Umum',
                                    'Fasilitasi Penataan Wilayah',
                                ],
                            ],
                            [
                                'kegiatan' => 'Pelaksanaan Otonomi Daerah',
                                'sub_kegiatan' => [
                                    'Fasilitasi Administrasi Kepala Daerah dan DPRD',
                                    'Evaluasi dan Penyelenggaraan Pemerintahan',
                                ],
                            ],
                            [
                                'kegiatan' => 'Fasilitasi Kerja Sama Daerah',
                                'sub_kegiatan' => [
                                    'Fasilitasi Kerja Sama Antar Pemerintah',
                                ],
                            ],
                        ],
                    ],
                ],
                'nama' => 'Dr. Sri Sulastri, SH, M.Si',
                'nip' => '196602161995032001',
                'jabatan' => 'Kuasa Pengguna Anggaran',
                'pangkat' => 'Pembina Utama Muda (IV/C)',
            ],

            [
                'biro' => 'Biro Hukum & Hak Asasi Manusia',
                'programs' => [
                    [
                        'program' => 'Kegiatan Fasilitasi Penyusunan Perundang-Undangan',
                        'sub_program' => [
                            'Sub kegiatan Fasilitasi Penyusunan Produk Hukum Pengaturan',
                            'Sub Kegiatan Fasilitasi Penyusunan Produk Hukum Penetapan',
                            'Sub Kegiatan Pendokumentasian Produk Hukum dan Naskah Hukum',
                            'Sub Kegiatan Fasilitasi dan Evaluasi Produk Hukum Kabupaten/Kota',
                        ],
                    ],
                    [
                        'program' => 'Kegiatan Fasilitasi Bantuan Hukum ',
                        'sub_program' => [
                            'Sub Kegiatan Fasilitasi Penyelesaian Masalah Hukum',
                            'Sub Kegiatan Fasilitasi Penyelesaian Masalah Non Litigasi dan HAM',
                        ],
                    ]
                ],
                'nama' => 'Windri Marlenny, SH, MM',
                'nip' => '197603262005012006',
                'jabatan' => 'Kuasa Pengguna Anggaran',
                'pangkat' => 'Pembina TK.I (IV/B)'
            ],
            [
                'biro' => 'Biro Perekonomian',
                'programs' => [
                    [
                        'program' => 'Pengelolaan Kebijakan Ekonomi Makro',
                        'sub_program' => [
                            'Fasilitasi Pengelolaan Kebijakan Ekonomi Makro',
                            'Fasilitasi Pengelolaan Kebijakan Ekonomi Mikro',
                        ],
                        [
                            'program' => 'Pengelolaan Kebijakan dan Koordinasi Sumber Daya Alam',
                            'sub_program' => [
                                'Koordinasi, Sinkronisasi dan Evaluasi Kebijakan Pertanian, Kehutanan, Kelautan dan Perikanan',
                                'Koordinasi, Sinkronisasi dan Evaluasi Kebijakan Pertambangan dan Linkungan Hidup',
                            ],
                        ],
                        [
                            'program' => 'Pengelolaan Kebijakan dan Koordinasi BUMD dan BLUD',
                            'sub_program' => [
                                'Koordinasi, Sinkronisasi Monitoring dan Evaluasi Kebijakan Pengelolaan BUMD Jasa Keuangan dan Aneka Usaha',
                                'Koordinasi, Sinkronisasi dan Evaluasi Kebijakan Pendirian BUMD',
                                'Koordinasi, Sinkronisasi dan Evaluasi Kebijakan Pendirian BLUD'
                            ],
                        ],

                    ],
                ],
                'nama' => 'Hengki Putrawan, S.Pt, M.Si',
                'nip' => '197905162005011008',
                'jabatan' => 'Kuasa Pengguna Anggaran',
                'pangkat' => 'Pembina Utama Muda (IV/C)'
            ],
            [
                'biro' => 'Biro Administrasi Pembangunan',
                'programs' => [
                    [
                        'program' => 'Pengendalian Administrasi Pelaksanaan Pembangunan Daerah',
                        'sub_program' => [
                            'Pengendalian Administrasi Pelaksanaan Pembangunan APBD',
                            'Pengendalian Administrasi Pelaksanaan Pembangunan APBN',
                            'Pengendalian Administrasi Pelaksanaan Pembangunan Wilayah'
                        ],
                    ],
                    [
                        'program' => 'Pelaporan Pelaksanaan Pembangunan Daerah',
                        'sub_program' => [
                            'Analisi Capaian Kinerja Pembangunan',
                            'Pelaporan Pelaksanaan Pembangunan Daerah',
                            'Fasilitasi Perumusan Kebijakan Teknis Pembangunan Daerah'
                        ],
                    ],
                    
                ],
                'nama' => 'Ir. H. Iskandar Zulkarnain, M.Si',
                'nip' => '196412081993031002',
                'jabatan' => 'Kuasa Pengguna Anggaran',
                'pangkat' => 'Pembina Utama Muda (IV/C)'
            ],
            [
                'biro' => 'Biro Kesehjahteraan Rakyat',
                'programs' => [
                    [
                        'program' => 'Kegiatan Fasilitasi Pembinaan Mental Spiritual',
                        'sub_program' => [
                            'Sub Kegiatan Pengelolaan Sarana dan Prasarana Spiritual',
                            'Sub Kegiatan Fasilitasi  Kelembagaan Bina Spiritual',
                        ],
                    ],
                    [
                        'program' => 'Kegiatan Fasilitasi Pengembanagan Kesejahteraan Rakyat Non Pelayanan Dasar',
                        'sub_program' => [
                            'Sub Kegiatan Koordinasi dan Sinkronisasi Kebijakan Kesejahteraan Rakyat Bidang Kepemudaan, Olahraga, Kebudayaan dan Pariwisata',
                            'Sub Kegiatan Koordinasi dan Sinkronisasi Kebijakan Kesejahteraan Rakyat Bidang Pemberdayaan Perempuan dan Perlindungan Anak, Pengendalian Penduduk dan Keluarga Berencana, Administrasi Kependudukan dan Pencatatan Sipil, Pemberdayaan Masyarakat dan Desa, Transmigrasi dan Tenaga Kerja',
                            'Sub Kegiatan Fasilitasi, Koordinasi dan Sinkronisasi, Evaluasi dan Capaian Kinerja di Bidang Kesehatan Rakyat Bidang Pendidikan'
                        ],
                    ],
                    [
                        'program' => 'Kegiatan Fasilitasi Pengembangan Kesejahteraan Rakyat Pelayanan Dasar',
                        'sub_program' => [
                            'Sub Kegiatan Fasilitasi, Koordinasi dan Sinkronisasi, Evaluasi dan Capaian Kinerja Kebijakan Kesejahteraan Rakyat Bidang Sosial',
                            'Sub Kegiatan Fasilitasi, Koordinasi dan Sinkronisasi, Evaluasi dan Capaian Kinerja Kebijakan Kesejahteraan Rakyat di Bidang Kesehatan',
                            'Sub Kegiatan Koordinasi dan Sinkronisasi Kesejahteraan Rakyat Bidang Komunikasi Informatika, Statistik, Persandian dan Perhubungan'
                        ],
                    ],
                ],
                'nama' => 'Dr. Drs. H. Sunarto, M.Si',
                'nip' => '196906081990031006',
                'jabatan' => 'Kuasa Pengguna Anggaran',
                'pangkat' => ''
            ],
            [
                'biro' => 'Biro Organisasi',
                'programs' => [
                    [
                        'program' => 'Kegiatan Administrasi Kepegawaian Perangkat Daerah',
                        'sub_program' => [
                            'Sub Kegiatan Pendataan dan Pengelolaan Administrasi Kepegawaian',
                        ],
                    ],
                    [
                        'program' => 'Kegiatan Fasilitasi Kelembagaan dan Analisis Jabatan',
                        'sub_program' => [
                            'Sub Kegiatan Fasilitasi Penataan Kelembagaan Provinsi',
                            'Sub Kegiatan Fasilitasi Penataan Kelembagaan Kab/Kota',
                            'Sub Kegiatan Penataan Analisis Jabatan'
                        ],
                    ],
                    [
                        'program' => 'Kegiatan Fasilitasi Reformasi Birokrasi dan Akuntabilitas Kinerja',
                        'sub_program' => [
                            'Sub Kegiatan Pembinaan Pelaksanaan Reformasi Birokrasi',
                            'Sub Kegiatan Monitoring dan Evaluasi Akuntanbilitas Kinerja',
                            'Sub Kegiatan Pengelolaan Tatalaksana Pemerintahan',
                            'Sub Kegiatan Fasilitasi Peningkatan Pelayanan Publik'
                        ],
                    ],
                ],
                'nama' => 'Muhammad Zaki Aslam, S.IP, M.Si',
                'nip' => '197306261993111001',
                'jabatan' => 'Kuasa Pengguna Anggaran',
            ],
            [
                'biro' => 'Biro Umum dan Perlengkapan',
                'programs' => [
                    [
                        'program' => 'Program Penunjang Urusan Pemerintahan Daerah Provinsi',
                        'kegiatan' => [
                            [
                                'kegiatan' => 'Perencanaan, Penganggaran, dan Evaluasi Kinerja Perangkat Daerah',
                                'sub_kegiatan' => [
                                    'Penyusunan Dokumen Perencanaan Perangkat Daerah',
                                    'Koordinasi dan Penyusunan Dokumen RKA-SKPD',
                                    'Koordinasi dan Penyusunan Dokumen Perubahan RKA-SKPD',
                                    'Koordinasi dan Penyusunan DPA-SKPD',
                                    'Koordinasi dan Penyusunan Perubahan DPA-SKPD',
                                    'Koordinasi dan Penyusunan Laporan Capaian Kinerja dan Ikhtisar Realisasi Kinerja SKPD',
                                    'Evaluasi Kinerja Perangkat Daerah',
                                    'Penyediaan Kebuutuhan Rumah Tangga Kepala Daerah',
                                    'Penyediaan Kebutuhan Rumah Tangga Sekretariat Daerah'
                                ],
                            ],
                            [
                                'kegiatan' => 'Administrasi Keuangan Perangkat Daerah',
                                'sub_kegiatan' => [
                                    'Penyediaan Gaji dan Tunjangan ASN',
                                    'Penyediaan Administrasi Pelaksanaan Tugas ASN',
                                    'Pelaksanaan Penatausahaan dan Pengujian/Verifikasi Keuangan SKPD'
                                ],
                            ],
                        ],
                    ],
                ],
                'nama' => 'Sandi Fahlepi, SP, M.Si',
                'nip' => '198001152008031001',
                'jabatan' => 'Kuasa Pengguna Anggaran',
                'pangkat' => 'Pembina TK.I (IV/B)'
            ],
            [
                'biro' => 'Biro Humas dan Protokol',
                'programs' => [
                    [
                        'program' => 'Kegiatan Administrasi Umum Perangkat Daerah',
                        'sub_program' => [
                            'Sub Penyediaan Bahan Bacaan dan Peraturan Perundang-Undangan',
                        ],
                    ],
                    [
                        'program' => 'Kegiatan Fasilitasi Materi dan Komunikasi Pimpinan',
                        'sub_program' => [
                            'Sub Penyiapan Materi Pimpinan',
                            'Sub Fasilitasi Komunikasi Pimpinan',
                            'Sub Pengelolaan Dokumentasi Pimpinan'
                        ],
                    ],
                    [
                        'program' => 'Kegiatan Fasilitasi Keprotokolan',
                        'sub_program' => [
                            'Sub Fasilitasi dan Koordinasi Pelaksa Acara',
                            'Sub Fasilitasi Kunjungan Tamu Kepala Daerah dan Wakil Kepala Daerah',
                            'Sub Pengelolaan Hubungan Keprotokolan'
                        ],
                    ],
                ],
                'nama' => 'Tony Kurniawan, S.S, MM',
                'nip' => '198510082011011006',
                'jabatan' => 'Kuasa Pengguna Anggaran',
            ],
            [
                'biro' => 'Biro pengadaan Barang dan Jasa',
                'programs' => [
                    [
                        'program' => 'Pengelolaan Pengadaan Barang dan Jasa',
                        'sub_program' => [
                            'Pengelolaan Strategi Pengadaan Barang dan Jasa',
                            'Pelaksanaan Pengadaan Barang dan Jasa',
                            'Pemantauan dan Evaluasi Pengadaan Barang dan Jasa',
                        ],
                    ],
                    [
                        'program' => 'Pengelolaan Layanan Pengadaan Secara Elektronik',
                        'sub_program' => [
                            'Pengelolaan Sistem Pengadaan Secara Elektronik',
                            'Pengembangan Sistem Informasi Pengadaan Barang dan Jasa',
                            'Pemantauan dan Evaluasi Pengadaan Barang dan Jasa'
                        ],
                    ],
                    [
                        'program' => 'Pembinaan Advokasi Pengadaan Barang dan Jasa',
                        'sub_program' => [
                            'Pembinaan Sumber Daya Manusia Pengadaan Barang dan Jasa',
                            'Pembinaan Kelembagaan Pengadaan Barang dan Jasa',
                            'Pendampingan Konsultasi dan/atau Bimbingan Teknis Pengadaan Barang dan Jasa'
                        ],
                    ]
                ],
                'nama' => 'Muzzakir, ST, MT',
                'nip' => '196709291998031005',
                'jabatan' => 'Kuasa Pengguna Anggaran',
            ]

        ];

        foreach ($biroData as $data) {
            // Jika ada programs, konversi menjadi JSON
            if (isset($data['programs'])) {
                $data['programs'] = json_encode($data['programs']);
            }
            
            // Simpan data biro ke dalam database
            Biro::create($data);
        }
    }
}
