@extends('layout.master')
@extends('partials.sidebar')
@extends('partials.header')

@section('konten')
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
	<div class="clearfix mb-20">
		<div class="pull-left">
			<h5 class="text-blue">Riwayat Pembayaran Paket</h5>
			<p class="font-14">Upload Bukti Pembayaran </p>
				<form method="POST" enctype="multipart/form-data" action="{{ route('tambahBayar') }}">
					@csrf
					<input type="hidden" name="id_pelayanan" value="{{$id_pelayanan}}">
					<input type="file" name="bukti_pembayaran" accept=".jpg, .png, .jpeg" required>
					<button type="submit" class="btn btn-outline-primary">Upload</button>
				</form>
				
				<!-- <a class="text-primary" href="{{ route('tambahBayar', $id_pelayanan) }}">Tambah Data</a> -->
			<!-- </p> -->
		</div>
	</div>
	<div class="row">
		<table class="tabel stripe hover nowrap">
			<thead>
				<tr>
					<th class="table-plus datatable-nosort">No</th>
					<th>Bukti Pembayaran</th>
					<th>Status</th>
					<th class="datatable-nosort">Action</th>
				</tr>
			</thead>
			<tbody>
				@php $no = 1; $i=0; @endphp
                @foreach($data as $d)
				<tr>
					<td class="table-plus">{{$no++}}</td>
					<td>
						<a href="{{ url('/storage/files/'.$d->bukti_pembayaran) }}" target="_blank">
							<img width="150px" src="{{ url('/storage/files/'.$d->bukti_pembayaran) }}">
						</a>
					</td>
					<td>{{$d->status_cek}}</td>
					<td>
						<div class="dropdown">
							<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
								<i class="fa fa-ellipsis-h"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<form action="#" method="POST">
									<a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
									{{ method_field('DELETE') }}
                                    {{ csrf_field() }}
									<button type="submit" class="dropdown-item"><i class="fa fa-trash"></i> Delete</button>
								</form>
							</div>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection