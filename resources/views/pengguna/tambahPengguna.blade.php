@extends('layouts.master')
@section('title', 'Tambah Pengguna')
@section('content')
				<div class="row">
								<div class="col-4"></div>
								<div class="col-4">
												<div class="card card-info">
																@if (session('error'))
																				<div class="alert alert-danger">
																								{{ session('error') }}
																				</div>
																@endif

																<div class="card-header">
																				<h3 class="card-title">Tambah Pengguna</h3>
																</div>
																<div class="card-body">
																				<form action="{{ route('pengguna.store') }}" method="POST" enctype="multipart/form-data">
																								@csrf

																								<div class="form-group">
																												<label for="name">Nama</label>
																												<input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
																																value="{{ old('name') }}" required>
																												@error('name')
																																<div class="invalid-feedback">{{ $message }}</div>
																												@enderror
																								</div>

																								<div class="form-group">
																												<label for="biro">Biro</label>
																												<select class="form-control" style="width: 100%;" id="biro" name="biro">
																																<option value="">Pilih Biro</option>
																																@foreach ($biro as $option)
																																				<option value="{{ $option }}">{{ $option }}</option>
																																@endforeach
																												</select>
																								</div>

																								<div class="form-group">
																												<label for="username">Username</label>
																												<input type="text" name="username"
																																class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}"
																																required>
																												@error('username')
																																<div class="invalid-feedback">{{ $message }}</div>
																												@enderror
																								</div>

																								<div class="form-group">
																												<label for="password">Password</label>
																												<input type="password" name="password"
																																class="form-control @error('password') is-invalid @enderror" required>
																												@error('password')
																																<div class="invalid-feedback">{{ $message }}</div>
																												@enderror
																								</div>

																								<button type="submit" class="btn btn-block btn-info float-right">Simpan</button>
																				</form>

																</div>
												</div>
								</div>
								<div class="col-4"></div>
				</div>

@endsection
