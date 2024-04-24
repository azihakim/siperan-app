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
</head>

<body>
				<table style="width: 100%;" id="dataTable">
								<thead style="text-align: center">
												<tr>
																<th colspan="5">Indikator dan Tolak Ukur Kinerja Kegiatan</th>
												</tr>
												<tr>
																<th rowspan="2" style="width: 10px; vertical-align: middle;">Indikator</th>
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
																				<input type="text" class="form-control" wire:model="dokPel_ck_tuk_sbm" placeholder="tuk">
																</td>
																<td>
																				<input type="text" class="form-control" wire:model="dokPel_ck_tk_sbm" placeholder="tk">
																</td>
																<td>
																				<input type="text" class="form-control" wire:model="dokPel_ck_tuk_sth" placeholder="tuk">
																</td>
																<td>
																				<input type="text" class="form-control" wire:model="dokPel_ck_tk_sth" placeholder="tk">
																</td>
												</tr>
												<tr>
																<td>
																				Masukan
																</td>
																<td>
																				<input type="text" class="form-control" wire:model="dokPel_m_tuk_sbm" placeholder="tuk m">
																</td>
																<td>
																				<input type="text" class="form-control" wire:model="dokPel_m_tk_sbm" placeholder="tk m">
																</td>
																<td>
																				<input type="text" class="form-control" wire:model="dokPel_m_tuk_sth" placeholder="tuk m">
																</td>
																<td>
																				<input type="text" class="form-control" wire:model="dokPel_m_tk_sth" placeholder="tk m">
																</td>
												</tr>
												<tr>
																<td>
																				Keluaran
																</td>
																<td>
																				<input type="text" class="form-control" wire:model="dokPel_k_tuk_sbm" placeholder="tuk k">
																</td>
																<td>
																				<input type="text" class="form-control" wire:model="dokPel_k_tk_sbm" placeholder="tk k">
																</td>
																<td>
																				<input type="text" class="form-control" wire:model="dokPel_k_tuk_sth" placeholder="tuk k">
																</td>
																<td>
																				<input type="text" class="form-control" wire:model="dokPel_k_tk_sth" placeholder="tk k">
																</td>
												</tr>
												<tr>
																<td>
																				Hasil
																</td>
																<td>
																				<input type="text" class="form-control" wire:model="dokPel_h_tuk_sbm" placeholder="tuk h">
																</td>
																<td>
																				<input type="text" class="form-control" wire:model="dokPel_h_tk_sbm" placeholder="tk h">
																</td>
																<td>
																				<input type="text" class="form-control" wire:model="dokPel_h_tuk_sth" placeholder="tuk h">
																</td>
																<td>
																				<input type="text" class="form-control" wire:model="dokPel_h_tk_sth" placeholder="tk h">
																</td>
												</tr>

												<tr>
																<td colspan="5"></td>
												</tr>

												<tr>
																<td colspan="2">Sub Kegiatan</td>
																<td colspan="3">
																				<input type="text" class="form-control" wire:model="dokPel_sk" placeholder="Sub Kegiatan">
																</td>
												</tr>
												<tr>
																<td colspan="2">Sumber Pendanaan</td>
																<td colspan="3">
																				<input type="text" class="form-control" wire:model="dokPel_sp" placeholder="Sumber Pendanaan">
																</td>
												</tr>
												<tr>
																<td colspan="2">Lokasi</td>
																<td colspan="3">
																				<input type="text" class="form-control" wire:model="dokPel_lokasi" placeholder="Lokasi">
																</td>
												</tr>
												<tr>
																<td colspan="2">Keluaran Sub Kegiatan</td>
																<td colspan="3">
																				<input type="text" class="form-control" wire:model="dokPel_ksk"
																								placeholder="Keluaran Sub Kegiatan">
																</td>
												</tr>
												<tr>
																<td colspan="2">Waktu Pelaksanaan</td>
																<td colspan="3">
																				<input type="text" class="form-control" wire:model="dokPel_waktu"
																								placeholder="Waktu Pelaksanaan">
																</td>
												</tr>
												<tr>
																<td colspan="2">Keterangan</td>
																<td colspan="3">
																				<input type="text" class="form-control" wire:model="dokPel_keterangan"
																								placeholder="Keterangan">
																</td>
												</tr>
								</tbody>
				</table>
</body>

</html>
