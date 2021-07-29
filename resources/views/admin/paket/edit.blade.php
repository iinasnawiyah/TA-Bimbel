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
	<form method="POST" action="{{ route('paket.update',$data->id_paket) }}">
    @csrf
    @method('PUT')
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Nama Paket</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="nama_paket" value="{{$data->nama_paket}}">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-12 col-form-label">Kelas</label>
			
				@foreach($kelas as $k)
				<label class="col-sm-12 col-md-1 col-form-label">{{$k->nama_kelas}}</label>
				<div class="col-sm-12 col-md-1">
				<input <?php for ($i=0; $i <count($kat_kelas) ; $i++) { if($kat_kelas[$i]==$k->id_kelas){echo "checked";} }?>   class="form-control" type="checkbox" name="id_kelas[]" value="{{$k->id_kelas}}">
				</div>
				@endforeach
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Tarif Cash</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="number" name="tarif_cash" value="{{$data->tarif_cash}}">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Tarif Angsuran</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="number" name="tarif_angs" value="{{$data->tarif_angs}}">
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