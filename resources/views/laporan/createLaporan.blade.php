@extends('layouts.master')
@section('title', 'Laporan')
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
				<div>
								<h1 id="namaBiroHeading"></h1>
				</div>
				<div>
								<livewire:create-laporan />
				</div>
@endsection

{{-- @section('scripts')
				<script>
								// Mendapatkan nilai parameter query 'namaBiro' dari URL
								var params = new URLSearchParams(window.location.search);
								var namaBiro = params.get("namaBiro");

								// Mengisi nilai 'namaBiro' ke dalam elemen <h1>
								document.getElementById("namaBiroHeading").textContent = namaBiro;
				</script>
@endsection --}}
