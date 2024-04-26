@extends('layouts.master')
@section('title', 'Laporan')
@section('content')
				<div>
								{{-- <livewire:edit-laporan /> --}}
								@livewire('edit-laporan', ['id' => $id])
				</div>
@endsection
