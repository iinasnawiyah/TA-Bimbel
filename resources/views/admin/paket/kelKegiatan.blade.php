@extends('layout.master')
@extends('partials.sidebar')
@extends('partials.header')

@section('konten')
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
	<div class="clearfix mb-20">
		<div class="pull-left">
			<h5 class="text-blue">List Pelayanan</h5>
		</div>
	</div>
	<div class="row">
		<table class="tabel stripe hover nowrap">
			<thead>
				<tr>
					<th class="table-plus datatable-nosort">No</th>
					<th>Nama Siswa</th>
					<th>Paket | Kelas</th>
					<th>Pengajar</th>
					<th>Tarif Cash</th>
					<th>Tarif Angsuran (6x)</th>
					<th>Status</th>
					<th class="datatable-nosort">Action</th>
				</tr>
			</thead>
			<tbody>
				@php $no = 1; $i=0; @endphp
                @foreach($data as $d)
				<tr>
					<td class="table-plus">{{$no++}}</td>
					<td>{{$d->nama_siswa}}</td>
					<td>{{$d->nama_paket}} | {{$d->nama_kelas}}</td>
					<td>{{$d->nama_pengajar}}</td>
					<td>{{$d->tarif_cash}}</td>
					<td>{{$d->tarif_angs}}</td>
					<td>{{$d->status}} | {{$d->status_bayar}}</td>
					<td>
						<a href="{{route('dataKegiatan', $d->id_pelayanan)}}">
								<button class="btn btn-outline-primary">Kegiatan</button>
						</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection