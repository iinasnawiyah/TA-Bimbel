@extends('layout.master')
@extends('partials.sidebar')
@extends('partials.header')

@section('konten')
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
	<div class="clearfix">
		<div class="pull-left">
			<h4 class="text-blue">Form Edit Kategori Kelas</h4>
			<p class="mb-30 font-14"></p>
		</div>
	</div>
	<form method="POST" action="{{ route('kelas.update',$data->id_kelas) }}">
    @csrf
    @method('PUT')
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Nama Kelas</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="nama_kelas" value="{{$data->nama_kelas}}">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-12 col-md-12">
			<button  type="submit" class="btn btn-primary px-4 float-left">Simpan</button>
		</div>
		</div>
	</form>
</div>
@endsection