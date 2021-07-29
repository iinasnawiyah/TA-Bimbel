@extends('layout.master')
@extends('partials.sidebar')
@extends('partials.header')

@section('konten')
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
	<div class="clearfix mb-20">
		<div class="pull-left">
			<h5 class="text-blue">List Kegiatan</h5>
		</div>
	</div>
	<div class="row">
		<table class="tabel stripe hover nowrap">
			<thead>
				<tr>
					<th class="table-plus datatable-nosort">No</th>
					<th>Deskripsi</th>
					<th>Bukti Kegiatan</th>
				</tr>
			</thead>
			<tbody>
				@php $no = 1; $i=0; @endphp
                @foreach($data as $d)
				<tr>
					<td class="table-plus">{{$no++}}</td>
					<td>{{$d->deskripsi}}</td>
					<td>
						<a href="{{ url('/storage/files/'.$d->bukti_kegiatan) }}" target="_blank">
							<img width="150px" src="{{ url('/storage/files/'.$d->bukti_kegiatan) }}">
						</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection