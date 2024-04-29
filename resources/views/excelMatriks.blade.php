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
</body>

</html>
