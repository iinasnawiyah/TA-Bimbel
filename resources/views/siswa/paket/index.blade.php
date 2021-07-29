@extends('layout.master')
@extends('partials.sidebar')
@extends('partials.header')

@section('konten')
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
	<div class="clearfix mb-20">
		<div class="pull-left">
			<h5 class="text-blue">Pilih Paket</h5>
		</div>
	</div>
	<div class="row">
		<table class="tabel stripe hover nowrap">
			<thead>
				<tr>
					<th class="table-plus datatable-nosort">No</th>
					<th>Nama Paket</th>
					<th>Kelas</th>
					<th>Tarif Cash</th>
					<th>Tarif Angsuran (6x)</th>
					<th class="datatable-nosort">Action</th>
				</tr>
			</thead>
			<tbody>
				@php $no = 1; $i=0; @endphp
                @foreach($data as $d)
				<tr>
					<td class="table-plus">{{$no++}}</td>
					<td>{{$d->nama_paket}}</td>
					<td>
						<?php $nama_kelas=implode(",", $kelas[$i++]); ?>
						<?php echo $nama_kelas; ?>
					</td>
					<td>{{$d->tarif_cash}}</td>
					<td><?php if($d->tarif_angs!=""){echo $d->tarif_angs;}else{echo "-";} ?></td>
					<td>
						<?php $cari_paket=DB::table('pelayanan')->select('*')
						->where([
						    ['id_siswa', '=', $id_siswa],
						    ['id_paket', '=', $d->id_paket],
						    ['status', '!=', 'selesai'],
						])->get(); ?>
						<?php if(isset($cari_paket[0])==""){ ?>
						<form method="POST" action="{{ route('pilihPaket') }}">
							@csrf
							<input type="hidden" name="id_siswa" value="<?= $id_siswa ?>">
							<input type="hidden" name="id_paket" value="<?= $d->id_paket ?>">
							<input type="hidden" name="nama_kelas" value="{{$nama_kelas}}">
							<button type="submit" class="btn btn-outline-primary">Pilih</button>
						</form>
							<?php }else{ ?>
							<a href="{{route('riwayatPaket')}}">
								<button class="btn btn-outline-primary">Sudah Dipilih</button>
							</a>
							<?php } ?>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection