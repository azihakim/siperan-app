{{-- <div>
				<livewire:create-laporan />
</div> --}}
@extends('layouts.master')
@section('title', 'Laporan')
@section('content')
				<div>
								<h1 id="namaBiroHeading"></h1>
				</div>
				<div class="card">
								<div class="card-header ui-sortable-handle">
												<h3 class="card-title">
																<i class="fas fa-edit mr-1"></i>
																Pergeseran Anggaran
												</h3>
								</div><!-- /.card-header -->
								<div class="card-body">
												<div class="bs-stepper">
																<div class="bs-stepper-header" role="tablist">
																				<!-- your steps here -->
																				<div class="step">
																								<button type="button" class="step-trigger">
																												<span class="bs-stepper-circle" style="background-color: #3c8dbc;">1</span>
																												<span class="bs-stepper-label">Logins</span>
																								</button>
																				</div>
																				<div class="line"></div>
																				<div class="step">
																								<button type="button" class="step-trigger">
																												<span class="bs-stepper-circle" style="background-color: #3c8dbc;">2</span>
																												<span class="bs-stepper-label">Logins</span>
																								</button>
																				</div>
																				<div class="line"></div>
																				<div class="step">
																								<button type="button" class="step-trigger">
																												<span class="bs-stepper-circle" style="background-color: #3c8dbc;">2</span>
																												<span class="bs-stepper-label">Logins</span>
																								</button>
																				</div>
																</div>
																<div class="bs-stepper-content">
																				<!-- your steps content here -->
																				<div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
																								<div class="form-group">
																												<label for="exampleInputEmail1">Email address</label>
																												<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
																								</div>
																								<div class="form-group">
																												<label for="exampleInputPassword1">Password</label>
																												<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
																								</div>
																								<button class="btn btn-primary" onclick="stepper.next()">Next</button>
																				</div>
																				<div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
																								<div class="form-group">
																												<label for="exampleInputFile">File input</label>
																												<div class="input-group">
																																<div class="custom-file">
																																				<input type="file" class="custom-file-input" id="exampleInputFile">
																																				<label class="custom-file-label" for="exampleInputFile">Choose file</label>
																																</div>
																																<div class="input-group-append">
																																				<span class="input-group-text">Upload</span>
																																</div>
																												</div>
																								</div>
																								<button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
																								<button type="submit" class="btn btn-primary">Submit</button>
																				</div>
																</div>
												</div>
								</div><!-- /.card-body -->
				</div>
@endsection
@section('scripts')
				<script>
								// Mendapatkan nilai parameter query 'namaBiro' dari URL
								var params = new URLSearchParams(window.location.search);
								var namaBiro = params.get('namaBiro');

								// Mengisi nilai 'namaBiro' ke dalam elemen <h1>
								document.getElementById('namaBiroHeading').textContent = namaBiro;
				</script>

@endsection
