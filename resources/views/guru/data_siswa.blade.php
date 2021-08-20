@extends('layout.master')
@extends('partials.sidebar')
@extends('partials.header')

@section('konten')
<div class="page-header">
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="title">
				<h4 style="text-transform: capitalize;">Data Siswa</h4>
			</div>
			<nav aria-label="breadcrumb" role="navigation">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php" style="text-transform: capitalize;">{{Request::segment(1)}}</a></li>
					@if(Request::segment(2) == 'datasiswa')
					<li class="breadcrumb-item active" aria-current="page" style="text-transform: capitalize;">Data Siswa</li>
					@endif
				</ol>
			</nav>
		</div>
	</div>
</div>
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
	<div class="clearfix mb-20">
		<div class="pull-left">
			<h5 class="text-blue">List Data Siswa</h5>
			<p class="font-14 mt-3">Tabel dibawah merupakan list siswa yang akan diajar oleh guru.</p>
		</div>
	</div>
	<div class="row">
		<table class="tabel stripe hover nowrap">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Siswa</th>
					<th>Kelas</th>
					<th>Paket</th>
				</tr>
			</thead>
			<tbody>
				@php $no=1; @endphp
				@foreach ($data as $siswa)
				<tr>
					<td class="table-plus">{{ $no++ }}</td>
					<td>{{ $siswa->PelayananWithSiswa->nama_siswa }}</td>
					<td>{{ $siswa->PelayananWithKelas->nama_kelas }}</td>
					<td>{{ $siswa->PelayananWithPaket->nama_paket }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection