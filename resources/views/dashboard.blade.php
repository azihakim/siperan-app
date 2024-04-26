@extends('layouts.master')
@section('title', 'Dashboard')

@section('content')
				<div class="card">
								<div class="card-header">
												<h3 class="card-title">Data Pergeseran Anggaran</h3>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
												<table id="example1" class="table-bordered table-striped table">
																<thead>
																				<tr>
																								<th>Biro</th>
																								<th>Tanggal Pembuatan</th>
																								<th>Aksi</th>
																				</tr>
																</thead>
																<tbody>
																				@foreach ($data as $item)
																								<tr>
																												<td>
																																{{ $item['surat_permohonan']['biro'] }}
																												<td>
																																{{ $item['created_at']->format('d-m-Y') }}
																												</td>
																												<td style="text-align: center; width:20%">
																																<div class="row">
																																				<div class="col-md-6">
																																								<div class="btn-group">
																																												<button type="button" class="btn btn-block btn-outline-info dropdown-toggle"
																																																data-toggle="dropdown" aria-haspopup="true"
																																																aria-expanded="false">Unduh</button>
																																												<div class="dropdown-menu" x-placement="bottom-start"
																																																style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
																																																<a class="dropdown-item" href="#">Surat Permohonan</a>
																																																<a class="dropdown-item" href="#">SPTJM</a>
																																																<div class="dropdown-divider"></div>
																																																<a class="dropdown-item"><strong>Matriks
																																																								Pergeseran</strong></a>
																																																<a class="dropdown-item" href="#">PDF</a>
																																																<a class="dropdown-item" href="#">EXCEL</a>
																																																<div class="dropdown-divider"></div>
																																																<a class="dropdown-item"><strong>Dokumen
																																																								Pelaksanaan</strong></a>
																																																<a class="dropdown-item" href="#">PDF</a>
																																																<a class="dropdown-item" href="#">EXCEL</a>
																																												</div>
																																								</div>
																																				</div>
																																				<div class="col-md-6">
																																								<a href="{{ url('edit-laporan/' . $item['id']) }}"
																																												class="btn btn-block btn-outline-warning">Edit</a>
																																				</div>
																																</div>

																												</td>
																								</tr>
																				@endforeach
																</tbody>
																<tfoot>
																				<tr>
																								<th>Biro</th>
																								<th>Tanggal Pembuatan</th>
																								<th>Aksi</th>
																				</tr>
																</tfoot>
												</table>
								</div>
								<!-- /.card-body -->
				</div>
@endsection

@section('scripts')
				<script>
								document.getElementById('linkToNextPage').addEventListener('click', function(event) {
												// Mencegah perilaku bawaan dari tautan
												event.preventDefault();

												// Mendapatkan nilai dari input namaBiro
												var namaBiro = encodeURIComponent(document.querySelector('input[name="namaBiro"]').value);

												// Membuat URL dengan parameter query namaBiro
												var newUrl = "/laporan?namaBiro=" + namaBiro;

												// Pindah ke halaman dengan URL baru
												window.location.href = newUrl;
								});
				</script>

@endsection
