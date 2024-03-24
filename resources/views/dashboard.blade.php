@extends('layouts.master')
@section('title', 'Dashboard')
@section('styles')
				<style>
								/* CSS untuk elemen info-box */
								.info-box {
												transition: transform 0.3s;
												/* Efek transisi saat hover */
								}

								/* CSS untuk elemen info-box ketika dihover */
								.info-box:hover {
												transform: scale(1.05);
												/* Memperbesar elemen saat dihover */
								}
				</style>
@endsection
@section('content')
				<div class="card-body pb-0">
								<div class="row">
												<div class="col-12 col-sm-4">
																<a href="#" id="linkToNextPage">
																				<div class="info-box bg-light">
																								<div class="info-box-content">
																												<h5 class="info-box-number text-muted mb-0 text-center">
																																Surat keluar
																												</h5>
																												<input type="text" name="namaBiro"
																																value="Biro Pemerintahan dan Otonomi Daerah Setda Provinsi Sumsel">
																								</div>
																				</div>
																</a>
												</div>
								</div>
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
