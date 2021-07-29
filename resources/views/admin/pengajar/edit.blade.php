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
        <form method="POST" action="{{ route('pengajar.update', $data->id_pengajar) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="id_user" value="{{ $data->id_user }}">
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Pengajar</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" name="nama_pengajar" value="{{ $data->nama_pengajar }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">No Telpon</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" name="telepon" value="{{ $data->telepon }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Alamat</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" name="alamat" value="{{ $data->alamat }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">E-mail</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" name="email" value="{{ $data->email }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Status</label>
                <div class="col-sm-12 col-md-10">
                    <select name="status" class="form-control">
                        <option value="on" {{ $data->status == 'on' ? 'selected' : '' }}>Aktif</option>
                        <option value="off" {{ $data->status == 'off' ? 'selected' : '' }}>Tidak Aktif</option>
                    </select>
                </div>
            </div>
            <div class=" form-group row">
                <div class="col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-primary px-4 float-left">Simpan</button>
                </div>
            </div>
        </form>
    </div>
@endsection
