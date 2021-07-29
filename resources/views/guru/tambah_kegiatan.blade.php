@extends('layout.master')
@extends('partials.sidebar')
@extends('partials.header')

@section('konten')
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
	<div class="clearfix">
		<div class="pull-left">
			<h4 class="text-blue">Form Upload Kegiatan</h4>
			<p class="mb-30 font-14">Form dibawah merupakan form yang digunakan untuk meng-upload bukti kegiatan pengajar </p>
		</div>
	</div>
	<form method="post" enctype="multipart/form-data" action="{{ route('prosesTambahKegiatan') }}">
		@csrf
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Pilih Siswa</label>
			<div class="col-sm-12 col-md-10">
				<select required class="livesearch form-control" id="livesearch" name="livesearch" style="width: 100%; height: 38px;" onChange="get_data(this.value)">
					<option selected="" disabled="">pilih siswa</option>
				</select>
			</div>
		</div>
		<br>
		<br>

		<input type="hidden" name="id_pelayanan">
		<div class="form-group row mt-2">
			<label class="col-sm-12 col-md-2 col-form-label">Nama Siswa</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" name="nama_siswa" type="text" readonly>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Kelas</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="search" name="kelas" readonly>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Paket</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="email" name="paket" readonly>
			</div>
		</div>
		<!-- <div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Pelajaran</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" value="https://getbootstrap.com" type="url" name="pelajaran" readonly>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Jam</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control datetimepicker" placeholder="Choose Date anf time" type="text" name="jam" readonly>
			</div>
		</div>
		<input type="hidden" name="id_pelayanan" value="4"> -->

		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Deskripsi</label>
			<div class="col-sm-12 col-md-10">
				<textarea required class="form-control" name="deskripsi"></textarea>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Upload Bukti Kegiatan</label>
			<div class="col-sm-12 col-md-10">
				<div class="custom-file">
					<input required type="file" name="photo" class="custom-file-input" accept=".jpg,.png,.jpeg">
					<label class="custom-file-label">Pilih Foto</label>
				</div>
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>

<script type="text/javascript">
	$('.livesearch').select2({
		placeholder: 'Pilih Siswa',
		ajax: {
			url: '/autosiswa',
			dataType: 'json',
			delay: 250,
			processResults: function(data) {
				$(this).prev('input').val("hello world");
				return {
					results: $.map(data, function(item) {
						return {
							text: item.nama_siswa,
							id: item.id_siswa

						}
					})
				};

			},
			cache: true,
		}
	}); 

	function format(x) {
		return x.text;
	}

	function get_data(v_id) {
		$.ajax({
			url: '/getsiswa',
			data: {
				id: v_id
			},
			success: function(data) {
				var dt = JSON.parse(data);
				console.log(data);
				$("input[name=id_pelayanan]").val(dt.id_pelayanan);
				$("input[name=nama_siswa]").val(dt.nama_siswa);
				$("input[name=kelas]").val(dt.nama_kelas);
				$("input[name=paket]").val(dt.nama_paket);
			}
		});
	} 


</script>
@endsection