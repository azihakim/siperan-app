<!DOCTYPE html>
<html>

<head>
				<title>Matrik Pergeseran</title>
				<style type="text/css">
								body {
												font-family: 'Times New Roman', Times, serif;
								}

								.rangkasurat {
												width: 980px;
												margin: 0 auto;
												background-color: #fff;
												padding: 20px;
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

								.garis1 {
												border-top: 3px solid black;
												height: 2px;
												border-bottom: 1px solid black;
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
				<style>
								table.tabel,
								table.tabel th,
								table.tabel td {
												border: 1px solid black;
												border-collapse: collapse;
								}
				</style>

</head>

<body>

				<div class="rangkasurat">
								<table width="100%">

												<tr>
																<td class="tengah">

																				<h3 style="font-weight: lighter; text-decoration: underline;">
																								<strong>MATRIK PERGESERAN</strong>
																				</h3>
																</td>
												</tr>

								</table>

								<div class="container">
												<table style="width: 100%;" class="tabel">
																<thead>
																				<tr>
																								<th>No. Rekening</th>
																								<th>Uraian</th>
																								<th>SEBELUM (Rp)</th>
																								<th>SESUDAH (Rp)</th>
																								<th>BERTAMBAH/BERKURANG</th>
																				</tr>
																</thead>
																<tbody>
																				@foreach ($data_m as $item)
																								<tr>
																												<td>{{ $item['no_rekening'] }}</td>
																												<td>{{ $item['uraian'] }}</td>
																												<td>{{ $item['sebelum'] }}</td>
																												<td>{{ $item['sesudah'] }}</td>
																												<td>{{ $item['bertambah_berkurang'] }}</td>
																								</tr>
																				@endforeach

																				<tr>
																								<td colspan="2">Total</td>
																								<td>
																												<?php
																												$total_sebelum = 0;
																												foreach ($data_m as $item) {
																												    $total_sebelum += $item['sebelum'];
																												}
																												echo $total_sebelum;
																												?>
																								</td>
																								<td>
																												<?php
																												$total_sesudah = 0;
																												foreach ($data_m as $item) {
																												    $total_sesudah += $item['sesudah'];
																												}
																												echo $total_sesudah;
																												?>
																								</td>
																								<td>
																												<?php
																												$total_bb = 0;
																												foreach ($data_m as $item) {
																												    $total_bb += $item['bertambah_berkurang'];
																												}
																												echo $total_bb;
																												?>
																								</td>
																				</tr>

																</tbody>
												</table>

												<div class="row2" style="margin-left: 60%;">
																<div style="text-align: left;">
																				<p>Palembang, {{ $tgl_matriks }}</p>
																				<p>Plh. {{ $data['surat_permohonan']['biro'] }}</p>
																				<br><br><br><br><br><br>
																				<div><strong>{{ $data['surat_permohonan']['nama_kb'] }}</strong><br>
																								NIP {{ $data['surat_permohonan']['nip_kb'] }}</div>
																</div>
												</div>
								</div>
				</div>
</body>

</html>
