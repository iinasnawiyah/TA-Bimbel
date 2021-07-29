@extends('layout.master')
@extends('partials.sidebar')
@extends('partials.header')

@section('konten')
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
	<div class="clearfix mb-20">
		<div class="pull-left">
			<h5 class="text-blue">Riwayat Pembayaran Paket</h5>
			<form method="POST" action="{{ route('submitPengajar') }}">
					@csrf
				<div class="form-group row">
					<label class="col-sm-12 col-md-2 col-form-label">Pengajar</label>
					<div class="col-sm-12 col-md-8">
						<input type="hidden" name="id_pelayanan" value="{{$id_pelayanan}}">
						<?php if($id_pengajar==null){ ?>
						<select class="selectpicker show-tick form-control" name="id_pengajar" >
							<option selected disabled>--Pilih Pengajar--</option>
							<?php foreach ($pengajar as $peng) {?>
							<option value="{{$peng->id_pengajar}}">{{$peng->nama_pengajar}}</option>
							<?php } ?>
						</select>dd
						<?php }else{ ?>
						<select class="selectpicker show-tick form-control" name="id_pengajar" >
							<?php foreach ($pengajar as $peng) {?>
							<option <?php if($peng->id_pengajar==$id_pengajar){echo "selected";} ?> value="{{$peng->id_pengajar}}">{{$peng->nama_pengajar}}</option>
							<?php } ?>
						</select>
						<?php } ?>
					</div>
					<div class="col-sm-12 col-md-2">
						<button type="submit" class="btn btn-outline-primary">Submit</button>
					</div>
				</div>
			</form>
		<?php if($status_bayar!="lunas"){ ?>
			<form method="POST" action="{{ route('submitLunas') }}">
					@csrf
			<div class="form-group row">
					<label class="col-sm-12 col-md-8 col-form-label">Klik Jika Pembayaran Lunas</label>
					<div class="col-sm-12 col-md-8">
						<input type="hidden" name="id_pelayanan" value="{{$id_pelayanan}}">
						<button type="submit" class="btn btn-outline-success">Klik</button>
					</div>
				</div>
			</form>
		<?php }else{ ?>
			<div class="form-group row">
				<label class="col-sm-12 col-md-6 col-form-label">Status Pembayaran</label>
				<div class="col-sm-12 col-md-6">
					<button disabled class="btn btn-success">Lunas</button>
				</div>
			</div>
		<?php } ?>
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
						<?php if($d->status_cek=="Belum dicek"){ ?>
							<a href="{{route('editKelBayar', $d->id_pembayaran)}}">
								<button class="btn btn-outline-primary">Checked</button>
							</a>
						<?php }else{ ?>
							<button class="btn btn-success" disabled>Done</button>
						<?php } ?>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection