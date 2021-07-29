@extends('layout.master')
@extends('partials.sidebar')
@extends('partials.header')

@section('konten')
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
	<div class="clearfix mb-20">
		<div class="pull-left">
			<h5 class="text-blue">Kelola Kategori Kelas</h5>
			<p class="font-14">Untuk <a class="text-primary" href="{{ route('kelas.create') }}">Tambah Data</a></p>
		</div>
	</div>
	<div class="row">
		<table class="tabel stripe hover nowrap">
			<thead>
				<tr>
					<th class="table-plus datatable-nosort">No</th>
					<th>Nama Kelas</th>
					<th class="datatable-nosort">Action</th>
				</tr>
			</thead>
			<tbody>
				@php $no = 1; @endphp
                @foreach($data as $d)
				<tr>
					<td class="table-plus">{{$no++}}</td>
					<td>{{$d->nama_kelas}}</td>
					<td>
						<div class="dropdown">
							<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
								<i class="fa fa-ellipsis-h"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<!-- <a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a> -->
								<form action="{{ route('kelas.destroy', $d->id_kelas) }}" method="POST">
									<a class="dropdown-item" href="{{route('kelas.edit', $d->id_kelas)}}"><i class="fa fa-pencil"></i> Edit</a>
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