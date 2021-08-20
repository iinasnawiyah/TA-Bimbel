@extends('layout.master')
@extends('partials.sidebar')
@extends('partials.header')

@section('konten')
<div class="page-header">
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="title">
				<h4 style="text-transform: capitalize;">Kegiatan</h4>
			</div>
			<nav aria-label="breadcrumb" role="navigation">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php" style="text-transform: capitalize;">{{Request::segment(1)}}</a></li>
					@if(Request::segment(2) == 'manajemen')
					<li class="breadcrumb-item active" aria-current="page" style="text-transform: capitalize;">Manajemen Kegiatan</li>
					@endif
				</ol>
			</nav>
		</div>
	</div>
</div>
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
	<div class="clearfix mb-20">
		<div class="pull-left">
			<h5 class="text-blue">List Kegiatan</h5>
			<p class="font-14 mt-3">Tabel dibawah merupakan list kegiatan yang guru lakukan dan guru/pengajar dapat menambahkan log kegiatan di tombol <b>'Tambah Data Kegiatan'</b></p> <a class="btn btn-sm btn-success" href="{{ route('tambahKegiatan') }}" type="button">Tambah Data Kegiatan</a>
		</div>
	</div>
	<div class="row">
		<table class="tabel stripe hover nowrap">
			<thead>
				<tr>
					<th>No</th>
					<th class="table-plus datatable-nosort">Nama Siswa</th>
					<th>Kelas</th>
					<th>Tanggal</th>
					<th>Deskripsi</th>
					<th>Foto Kegiatan</th>
					<th class="datatable-nosort">Aksi</th>
				</tr>
			</thead>
			<tbody>
				@php $no = 1; @endphp
				@foreach($data as $kegiatan)
				<tr>
					<td>{{ $no++ }}</td>
					<td class="table-plus">{{ $kegiatan->nama_siswa }}</td>
					<td>{{ $kegiatan->nama_kelas }}</td>
					<td>{{ date('Y-m-d', strtotime($kegiatan->created_at)) }}</td>
					<td>{{ $kegiatan->deskripsi }}</td>
					<td>
						<a href="{{ url('/storage/files/'.$kegiatan->bukti_kegiatan) }}" target="_blank">
							<img width="150px" src="{{ url('/storage/files/'.$kegiatan->bukti_kegiatan) }}">
						</a>
					</td>
					<td>
						<!-- <a href="#" class="btn btn-sm btn-primary btn-block">Lihat</a> -->
						<!-- <a href="#" class="btn btn-sm btn-info ">Edit</a>
						<a href="#" class="btn btn-sm btn-danger ">Hapus</a> -->
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection