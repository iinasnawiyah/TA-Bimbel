@extends('layout.master')
@extends('partials.sidebar')
@extends('partials.header')

@section('konten')
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
	<div class="clearfix">
		<div class="pull-left">
			<h4 class="text-blue">Form Pilih Paket</h4>
			<p class="mb-30 font-14"></p>
		</div>
	</div>
	<form method="POST" action="{{ route('paket.store') }}">
		@csrf
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Nama Paket</label>
			<div class="col-sm-12 col-md-10">
				<input type="hidden" name="id_paket" value="{{$id_paket}}">
				<input type="hidden" name="id_siswa" value="{{$id_siswa}}">
				<input class="form-control" type="text" name="nama_paket" value="{{$nama_paket}}" disabled>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Kelas</label>
			<div class="col-sm-12 col-md-10">
				<select class="form-control" name="kelas" required>
					<option disabled selected>--Pilih Kelas--</option>
					@foreach($kelas as $k)
					<?php
					for ($i = 0; $i < count($nama_kelas); $i++) { ?>
						<?php if ($k->nama_kelas == $nama_kelas[$i]) { ?>

							<option value="{{$k->id_kelas}}">{{$k->nama_kelas}}</option>
						<?php } ?>
					<?php } ?>
					@endforeach
				</select>
			</div>
		</div>
		<!-- <div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Semester</label>
			<div class="col-sm-12 col-md-10">
				<select class="form-control" name="Semester" required>
					<option disabled selected>--Pilih Semester--</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
			</div>
		</div> -->
		<div class="form-group row">
			<div class="col-sm-12 col-md-12">
				<button type="submit" class="btn btn-primary px-4 float-left">Simpan</button>
			</div>
		</div>
	</form>
</div>
@endsection