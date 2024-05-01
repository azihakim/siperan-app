<!DOCTYPE html>
<html>

<head>
				<title>SURAT</title>
				<style type="text/css">
								body {
												font-family: arial;
								}

								.rangkasurat {
												width: 980px;
												margin: 0 auto;
												background-color: #fff;
												padding: 20px;
								}

								table {
												border-bottom: 10px solid #0000;
												padding: 2px
								}

								.tengah {
												text-align: center;
												line-height: 5px;
								}

								.garis1 {
												border-top: 3px solid black;
												height: 2px;
												border-bottom: 1px solid black;
								}

								/* Tambahkan gaya untuk garis tebal */
								.garis-tebal {
												border-top: 3px solid black;
												margin-top: 1px;
												/* Sesuaikan dengan jarak yang diinginkan */
								}

								.row {
												margin-top: 20px;
												text-align: justify;
								}

								#tls {
												text-align: right;
								}

								.alamat-tujuan {
												margin-left: 65%;
								}

								#logo {
												margin: auto;
												margin-left: 50%;
												margin-right: auto;
								}

								#tempat-tgl {
												margin-left: 120px;
								}

								#camat {
												text-align: center;
								}

								#nama-camat {
												margin-top: 100px;
												text-align: center;
								}

								.rata-kiri {
												text-align: left;
												width: 40%;
								}

								.row2 {
												display: flex;
												flex-wrap: wrap;
												margin: 0 -10px;
												/* margin to compensate for column padding */
								}

								/* Custom style for column */
								.col {
												flex: 1;
												/* take up available space */
												padding: 0 10px;
												/* add some space between columns */
								}

								/* Example usage of custom row and column */
								.container2 {
												max-width: 800px;
												margin: 0 auto;
												/* center the container */
												background-color: #f0f0f0;
												padding: 20px;
												border-radius: 5px;
								}

								/* Example content styles */
								.box2 {
												background-color: #3498db;
												color: #fff;
												padding: 20px;
												margin-bottom: 10px;
												border-radius: 5px;
								}
				</style>
</head>

<body>

				<div>

								<table width="100%">

												<tr>

																<td style="text-align: center;"> <img
																								src="{{ public_path('vendors/dist/img/Coat_of_arms_of_South_Sumatra.jpg') }}" width="95px">
																</td>

																<td class="tengah">

																				<h2 style="font-weight: lighter;">PEMERINTAH PROVINSI SUMATERA SELATAN</h2>

																				<h1><strong>SEKRETARIAT DAERAH</strong></h1>

																				<p>Jalan Kapten A. Rivai No. 3 Palembang, Provinsi Sumatera Selatan</p>

																				<p>Telepon : (0711) 352388, Faksimile : (0711) 357483 Kode Pos 30129</p>

																				<p>E-mail: sumsel@sumselprov.go.id, Website : www.sumselprov.go.id</p>
																</td>

												</tr>

								</table>
								<hr class="garis1" />

								<div class="container">
												<div id="tgl-srt" class="col-md-6">
																<p id="tls">Palembang, {{ $data['surat_permohonan']['tgl'] }}</p>

																<p class="alamat-tujuan">Kepada Yth. :<br />
																				Ketua TAPD Provinsi Sumatera Selatan</p>

																<p class="alamat-tujuan">di-<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Palembang
																</p>
												</div>
												<div id="alamat" class="row">
																<table>
																				<tr>
																								<td>Nomor</td>
																								<td>: {{ $data['surat_permohonan']['no_sppa'] }}</td>
																				</tr>
																				<tr>
																								<td>Sifat</td>
																								<td>: {{ $data['surat_permohonan']['sifat_sppa'] }}</td>
																				</tr>
																				<tr>
																								<td>Lampiran</td>
																								<td>: {{ $data['surat_permohonan']['lampiran_sppa'] }}</td>
																				</tr>
																				<tr>
																								<td>Hal</td>
																								<td>: {{ $data['surat_permohonan']['hal_sppa'] }}</td>
																				</tr>
																</table>
												</div>
												@php
																// Parse the date string into a Carbon instance
																$date = \Carbon\Carbon::parse($data['surat_permohonan']['tgl']);
												@endphp
												<div class="row" style="margin-left: 5%;"> &nbsp; &nbsp; &nbsp; &nbsp; Sehubungan pelaksanaan
																Anggaran
																Kegiatan
																Sekretariat
																Daerah Provinsi Sumatera Selatan Tahun anggaran {{ $date->format('Y') }},
																dengan ini
																kami mengajukan Pergeseran Anggaran
																pada Biro
																Umum
																dan Perlengkapan Sekretariat Daerah Provinsi Sumatera Selatan Tahun Anggaran
																{{ $date->format('Y') }} dengan rincian
																terlampir.
												</div>

												<div id="penutup" style="margin-left: 5%; margin-top: 10px;">&nbsp; &nbsp; &nbsp; &nbsp;
																&nbsp; Demikian disampaikan.
																atas
																perkenan
																dan kerjasamanya
																diucapkan
																terima kasih.
												</div>

												<div class="row2" style="margin-left: 60%;">
																<div>
																				<p id="camat">Kepala {{ $data['surat_permohonan']['biro'] }}</p>
																				<div id="nama-camat">
																								<strong>{{ $data['surat_permohonan']['nama_kb'] }}</strong><br>
																								{{ $data['surat_permohonan']['jabatan_kb'] }}<br>
																								NIP {{ $data['surat_permohonan']['nip_kb'] }}
																				</div>
																</div>
												</div>
								</div>
				</div>
</body>

</html>
