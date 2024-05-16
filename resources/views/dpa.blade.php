<!DOCTYPE html>
<html>

<head>
				<style>
								table,
								th,
								td {
												border: 1px solid black;
												border-collapse: collapse;
								}
				</style>
				<style>
								table.custom-table {
												border: none;
												width: 100%;
								}

								.custom-table th,
								.custom-table td {
												border: none;
												padding: 8px;
												text-align: left;
								}

								.custom-table tr.dekat {
												margin: -10px;
								}
				</style>
				<style>
								table.dppa {
												width: 100%;
												border-collapse: collapse;
												/* Menggabungkan garis tepi sel */
								}

								.dppa th,
								.dppa td {
												border-top: 1px solid black;
												/* Tambahkan border-top pada sel */
								}

								.dppa td:first-child {
												border-left: none;
												/* Hapus border kiri untuk sel pertama dalam baris */
								}

								.dppa td:last-child {
												border-right: none;
												/* Hapus border kanan untuk sel terakhir dalam baris */
								}

								table.tabel2 {
												/* Atur properti untuk memulai Tabel 2 di halaman baru saat mencetak */
												page-break-before: always;
								}

								/* table.tabel3 {
												page-break-after: always;
								} */
								table.tabel4 {
												page-break-before: always;
								}
				</style>
				<style>
								/* Define a print style for the table */
								/* Hide unnecessary elements when printing */
								.tabel2,
								.tabel2 * {
												visibility: visible;
								}

								/* Adjust the font size for better readability on paper */
								table.tabel2 {
												font-size: 10pt;
								}

								/* Set the table width to fit within the paper size */
								table.tabel2 {
												width: 100%;
												border-collapse: collapse;
								}

								/* Set the column widths */
								table.tabel2 th,
								table.tabel2 td {
												width: auto;
												max-width: none;
								}

								/* Specify other styles as needed for printing */
								/* For example: */
								table.tabel2 th,
								table.tabel2 td {
												padding: 5px;
												border: 1px solid #000;
								}
				</style>
</head>

<body>
				<!-- Tabel 1 -->
				<table style="width: 100%;">
								<thead style="text-align: center">
												<tr>
																<th><strong>DOKUMEN PELAKSANAAN ANGGARAN <br> SATUAN KERJA PERANGKAT DAERAH</strong></th>
																<td rowspan="2">FORMULIR <br> DPPA RINCIAN BELANJA SKPD</td>
												</tr>
												<tr>
																<td>Provinsi Sumatera Selatan <br> TAHUN ANGGARAN {{ $year }}</td>
												</tr>
								</thead>
				</table>
				<table style="width: 100%;" class="dppa">
								<tbody>
												<tr>
																<td style="width: 250px;">Nomor DPPA</td>
																<td>: {{ $data['dokumen_pelaksanaan']['detail_surat']['nomor_dppa'] }}</td>
												</tr>
												<tr>
																<td>Urusan Pemerintahan</td>
																<td>: {{ $data['dokumen_pelaksanaan']['detail_surat']['urusan_pemerintahan'] }}</td>
												</tr>
												<tr>
																<td>Bidang Urusan</td>
																<td>: {{ $data['dokumen_pelaksanaan']['detail_surat']['bidang_urusan'] }}</td>
												</tr>
												<tr>
																<td>Program</td>
																<td>: {{ $data['dokumen_pelaksanaan']['detail_surat']['program'] }}</td>
												</tr>
												<tr>
																<td>Kegiatan</td>
																<td>: {{ $data['dokumen_pelaksanaan']['detail_surat']['kegiatan'] }}</td>
												</tr>
												<tr>
																<td>Organisasi</td>
																<td>: {{ $data['dokumen_pelaksanaan']['detail_surat']['organisasi'] }}</td>
												</tr>
												<tr>
																<td>Unit</td>
																<td>: {{ $data['dokumen_pelaksanaan']['detail_surat']['unit'] }}</td>
												</tr>
												<tr>
																<td>Alokasi Tahun -1</td>
																<td>: {{ $data['dokumen_pelaksanaan']['detail_surat']['alokasi_m1'] }}</td>
												</tr>
												<tr>
																<td>Alokasi Tahun</td>
																<td>: {{ $data['dokumen_pelaksanaan']['detail_surat']['alokasi_tahun'] }}</td>
												</tr>
												<tr>
																<td>Alokasi tahun +1</td>
																<td>: {{ $data['dokumen_pelaksanaan']['detail_surat']['alokasi_p1'] }}</td>
												</tr>
								</tbody>
				</table>
				<table style="width: 100%;">
								<thead style="text-align: center">
												<tr>
																<th colspan="5">Indikator dan Tolak Ukur Kinerja Kegiatan</th>
												</tr>
												<tr>
																<th rowspan="2" style="width: 140px; vertical-align: middle;">Indikator</th>
																<th colspan="2">Sebelum</th>
																<th colspan="2">Sesudah</th>
												</tr>
												<tr>
																<th>Tolak Ukur Kerja</th>
																<th>Target Kinerja</th>
																<th>Tolak Ukur Kerja</th>
																<th>Target Kinerja</th>
												</tr>
								</thead>
								<tbody>
												<tr>
																<td>
																				Capaian Kegiatan
																</td>
																<td>
																				{{ $data['dokumen_pelaksanaan']['indikator']['ck_tuk_sbm'] }} </td>
																<td>
																				{{ $data['dokumen_pelaksanaan']['indikator']['ck_tk_sbm'] }} </td>
																<td>
																				{{ $data['dokumen_pelaksanaan']['indikator']['ck_tuk_sth'] }} </td>
																<td>
																				{{ $data['dokumen_pelaksanaan']['indikator']['ck_tk_sth'] }} </td>
												</tr>
												<tr>
																<td>
																				Masukan
																</td>
																<td>
																				{{ $data['dokumen_pelaksanaan']['indikator']['m_tuk_sbm'] }}

																</td>
																<td>
																				{{ $data['dokumen_pelaksanaan']['indikator']['m_tk_sbm'] }}
																</td>
																<td>
																				{{ $data['dokumen_pelaksanaan']['indikator']['m_tuk_sth'] }}
																</td>
																<td>
																				{{ $data['dokumen_pelaksanaan']['indikator']['m_tk_sth'] }}
																</td>
												</tr>
												<tr>
																<td>
																				Keluaran
																</td>
																<td>
																				{{ $data['dokumen_pelaksanaan']['indikator']['k_tuk_sbm'] }}

																</td>
																<td>
																				{{ $data['dokumen_pelaksanaan']['indikator']['k_tk_sbm'] }}
																</td>
																<td>
																				{{ $data['dokumen_pelaksanaan']['indikator']['k_tuk_sth'] }}
																</td>
																<td>
																				{{ $data['dokumen_pelaksanaan']['indikator']['k_tk_sth'] }}
																</td>
												</tr>
												<tr>
																<td>
																				Hasil
																</td>
																<td>
																				{{ $data['dokumen_pelaksanaan']['indikator']['h_tuk_sbm'] }}
																</td>
																<td>
																				{{ $data['dokumen_pelaksanaan']['indikator']['h_tk_sbm'] }}
																</td>
																<td>
																				{{ $data['dokumen_pelaksanaan']['indikator']['h_tuk_sth'] }}
																</td>
																<td>
																				{{ $data['dokumen_pelaksanaan']['indikator']['h_tk_sth'] }}
																</td>
												</tr>

												<tr>
																<td colspan="5"></td>
												</tr>

												<tr>
																<td colspan="2">Sub Kegiatan</td>
																<td colspan="3">
																				{{ $data['dokumen_pelaksanaan']['indikator']['sk'] }}
																</td>
												</tr>
												<tr>
																<td colspan="2">Sumber Pendanaan</td>
																<td colspan="3">
																				{{ $data['dokumen_pelaksanaan']['indikator']['sp'] }}

																</td>
												</tr>
												<tr>
																<td colspan="2">Lokasi</td>
																<td colspan="3">
																				{{ $data['dokumen_pelaksanaan']['indikator']['lokasi'] }}
																</td>
												</tr>
												<tr>
																<td colspan="2">Keluaran Sub Kegiatan</td>
																<td colspan="3">
																				{{ $data['dokumen_pelaksanaan']['indikator']['ksk'] }}

																</td>
												</tr>
												<tr>
																<td colspan="2">Waktu Pelaksanaan</td>
																<td colspan="3">
																				{{ $data['dokumen_pelaksanaan']['indikator']['waktu'] }}
																</td>
												</tr>
												<tr>
																<td colspan="2">Keterangan</td>
																<td colspan="3">
																				{{ $data['dokumen_pelaksanaan']['indikator']['keterangan'] }}
																</td>
												</tr>
								</tbody>
				</table>

				<!-- Tabel 2 -->
				<table style="width: 100%;" class="tabel2">
								<thead style="text-align: center">
												<tr>
																<th rowspan="3" style="width: 50px; vertical-align: middle;">Kode Rekening
																</th>
																<th rowspan="3" style="width: 80px; vertical-align: middle;">Uraian</th>
																<th colspan="10">Rincian Perhitungan</th>
																<th rowspan="3" style="max-width: 150px; vertical-align: middle;">
																				Bertambah/<br>Berkurang</th>

												</tr>
												<tr>
																<th colspan="5">Sebelum</th>
																<th colspan="5">Sesudah</th>
												</tr>
												<tr>
																<th style="width: 10px;">Koefisien/<br>Volume</th>
																<th style="width: 80px;">Satuan</th>
																<th style="width: 150px;">Harga</th>
																<th style="width: 20px">PPN</th>
																<th style="width: 100px">Jumlah</th>

																<th style="width: 10px;">Koefisien/<br>Volume</th>
																<th style="width: 80px;">Satuan</th>
																<th style="width: 150px;">Harga</th>
																<th style="width: 20px">PPN</th>
																<th style="width: 100px">Jumlah</th>
												</tr>
								</thead>
								<tbody>
												@foreach ($data_rp as $item)
																<tr>
																				<td>{{ $item['kodeRekening'] }}</td>
																				<td>{{ $item['uraian'] }}</td>
																				<td>{{ $item['volume_sbm'] }}</td>
																				<td>{{ $item['satuan_sbm'] }}</td>
																				<td>{{ $item['harga_sbm'] }}</td>
																				<td>{{ $item['ppn_sbm'] }}</td>
																				<td>{{ $item['jumlah_sbm'] }}</td>
																				<td>{{ $item['volume_sth'] }}</td>
																				<td>{{ $item['satuan_sth'] }}</td>
																				<td>{{ $item['harga_sth'] }}</td>
																				<td>{{ $item['ppn_sth'] }}</td>
																				<td>{{ $item['jumlah_sth'] }}</td>
																				<td>{{ $item['bertambah_berkurang'] }}</td>
																</tr>
												@endforeach
								</tbody>
								<tfoot>
												@php
																$total_sbm = 0;
																$total_sth = 0;
																$total_bertambah_berkurang = 0;
																$rencana = $data['dokumen_pelaksanaan']['rencana'];
												@endphp
												@foreach ($data_rp as $item)
																@php
																				$total_sbm += intval($item['jumlah_sbm']);
																				$total_sth += intval($item['jumlah_sth']);
																				$total_bertambah_berkurang += intval($item['bertambah_berkurang']);
																@endphp
												@endforeach
												<tr>
																<td colspan="6" style="text-align: right;">Jumlah Anggaran Sub Kegiatan &nbsp;</td>
																<td>{{ $total_sbm }}</td>
																<td colspan="4" style="text-align: right;">Jumlah Anggaran Sub Kegiatan &nbsp;</td>
																<td>{{ $total_sth }}</td>
																<td>{{ $total_bertambah_berkurang }}</td>
												</tr>
								</tfoot>
				</table>

				<!-- Tabel 3 -->
				<table style="width: 100%;" class="tabel3">
								<tbody>
												<tr>
																<td style="text-align: center;" colspan="2">Rencana Realisasi Belanja per Bulan *) <br> (Rp)</td>
																<td rowspan="14">
																				<div style="text-align: center;">
																								<p>Palembang, {{ $date }}
																								</p>
																								<p style="padding: 0; margin: 0; margin-top: -10px;">Kepala SKPD</p>
																								<br><br><br><br><br><br>
																								<div>
																												<p style="text-decoration: underline;">
																																<strong>{{ $data['surat_permohonan']['nama_kb'] }}</strong>
																												</p>
																												<br>
																												<p style="padding: 0; margin: 0; margin-top: -35px;">
																																NIP: {{ $data['surat_permohonan']['nip_kb'] }}
																												</p>
																								</div>

																								<br><br><br>

																								<p>Mengesahkan,</p><br>
																								<p>PPKD</p>
																								<br><br><br><br><br><br>
																								<div>
																												<p style="text-decoration: underline;">
																																<strong>{{ $data['dokumen_pelaksanaan']['ppkd']['ppkd_nama'] }}</strong>
																												</p>
																												<br>
																												<p style="padding: 0; margin-bottom: 35; margin-top: -35px;">
																																NIP: {{ $data['dokumen_pelaksanaan']['ppkd']['ppkd_nip'] }}
																												</p>
																								</div>
																</td>
												</tr>
												<tr>
																<td style="width: 200px;">Januari</td>
																<td style="width: 30%;">
																				{{ $data['dokumen_pelaksanaan']['rencana']['dokPel_jan'] }}
																</td>
												</tr>
												<tr>
																<td style="width: 200px;">Februari</td>
																<td style="width: 30%;">
																				{{ $data['dokumen_pelaksanaan']['rencana']['dokPel_feb'] }}
																</td>
												</tr>
												<tr>
																<td style="width: 200px;">Maret</td>
																<td style="width: 30%;">
																				{{ $data['dokumen_pelaksanaan']['rencana']['dokPel_mar'] }}
																</td>
												</tr>
												<tr>
																<td style="width: 200px;">April</td>
																<td style="width: 30%;">
																				{{ $data['dokumen_pelaksanaan']['rencana']['dokPel_apr'] }}
																</td>
												</tr>
												<tr>
																<td style="width: 200px;">Mei</td>
																<td style="width: 30%;">
																				{{ $data['dokumen_pelaksanaan']['rencana']['dokPel_mei'] }}
																</td>
												</tr>
												<tr>
																<td style="width: 200px;">Juni</td>
																<td style="width: 30%;">
																				{{ $data['dokumen_pelaksanaan']['rencana']['dokPel_jun'] }}
																</td>
												</tr>
												<tr>
																<td style="width: 200px;">Juli</td>
																<td style="width: 30%;">
																				{{ $data['dokumen_pelaksanaan']['rencana']['dokPel_jul'] }}
																</td>
												</tr>
												<tr>
																<td style="width: 200px;">Agustus</td>
																<td style="width: 30%;">
																				{{ $data['dokumen_pelaksanaan']['rencana']['dokPel_agu'] }}
																</td>
												</tr>
												<tr>
																<td style="width: 200px;">September</td>
																<td style="width: 30%;">
																				{{ $data['dokumen_pelaksanaan']['rencana']['dokPel_sep'] }}
																</td>
												</tr>
												<tr>
																<td style="width: 200px;">Oktober</td>
																<td style="width: 30%;">
																				{{ $data['dokumen_pelaksanaan']['rencana']['dokPel_okt'] }}
																</td>
												</tr>
												<tr>
																<td style="width: 200px;">November</td>
																<td style="width: 30%;">
																				{{ $data['dokumen_pelaksanaan']['rencana']['dokPel_nov'] }}
																</td>
												</tr>
												<tr>
																<td style="width: 200px;">Desember</td>
																<td style="width: 30%;">
																				{{ $data['dokumen_pelaksanaan']['rencana']['dokPel_des'] }}
																</td>
												</tr>
												<tr>
																@php
																				$total = 0;
																				$rencana = $data['dokumen_pelaksanaan']['rencana'];
																@endphp
																@if (
																				$rencana['dokPel_jan'] != null &&
																								$rencana['dokPel_feb'] != null &&
																								$rencana['dokPel_mar'] != null &&
																								$rencana['dokPel_apr'] != null &&
																								$rencana['dokPel_mei'] != null &&
																								$rencana['dokPel_jun'] != null &&
																								$rencana['dokPel_jul'] != null &&
																								$rencana['dokPel_agu'] != null &&
																								$rencana['dokPel_sep'] != null &&
																								$rencana['dokPel_okt'] != null &&
																								$rencana['dokPel_nov'] != null &&
																								$rencana['dokPel_des'] != null)
																				@php
																								$total +=
																								    $rencana['dokPel_jan'] +
																								    $rencana['dokPel_feb'] +
																								    $rencana['dokPel_mar'] +
																								    $rencana['dokPel_apr'] +
																								    $rencana['dokPel_mei'] +
																								    $rencana['dokPel_jun'] +
																								    $rencana['dokPel_jul'] +
																								    $rencana['dokPel_agu'] +
																								    $rencana['dokPel_sep'] +
																								    $rencana['dokPel_okt'] +
																								    $rencana['dokPel_nov'] +
																								    $rencana['dokPel_des'];
																				@endphp
																@endif
																<td style="width: 200px;"><strong>Jumlah</strong></td>
																<td style="width: 30%;"><strong>{{ $total }}</strong></td>
												</tr>
								</tbody>
				</table>

				<!-- Tabel 4 -->
				<table style="width: 100%;" class="tabel4">
								<tbody>
												<tr>
																<th colspan="5" style="text-align: center;">Tim Anggaran Pemerintah Daerah</th>
												</tr>
												<tr>
																<th style="width: 50px;">No.</th>
																<th>Nama</th>
																<th>NIP</th>
																<th>Jabatan</th>
																<th>Tanda Tangan</th>
												</tr>
												@foreach ($data_tim as $item)
																<tr style="height: 40px;">
																				<td style="text-align: center;">{{ $loop->iteration }}</td>
																				<td>{{ $item['tim_nama'] }}</td>
																				<td>{{ $item['tim_nip'] }}</td>
																				<td>{{ $item['tim_jabatan'] }}</td>
																				<td style="width: 30%;"></td>
																</tr>
												@endforeach
								</tbody>
				</table>
</body>

</html>
