@extends('layout.master')
@extends('partials.sidebar')
@extends('partials.header')

@section('konten')
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
	<div class="clearfix mb-20">
		<div class="pull-left">
			<h5 class="text-blue">List Paket Absensi</h5>
		</div>
	</div>
	<div class="row">
		<table class="tabel stripe hover nowrap">
			<thead>
				<tr>
					<th class="table-plus datatable-nosort">No</th>
					<th>Nama Paket</th>
					<th>Kelas</th>
					<th class="datatable-nosort">Action</th>
				</tr>
			</thead>
			<tbody>
				@php $no = 1; $i=0; @endphp
                @foreach($data as $d)
				<tr>
					<td class="table-plus">{{$no++}}</td>
					<td>{{$d->nama_paket}}</td>
					<td>{{$d->nama_kelas}}</td>
					<td>
					<form method="POST" action="{{ route('listAbsen') }}">
						@csrf
						<input type="hidden" name="id_paket" value="{{$d->id_paket}}">
						<input type="hidden" name="id_kelas" value="{{$d->id_kelas}}">
						<button type="submit" class="btn btn-outline-primary">Absensi</button>
					</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection