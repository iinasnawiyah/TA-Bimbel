@extends('layout.master')
@extends('partials.sidebar')
@extends('partials.header')

@section('konten')
    <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
        <div class="clearfix mb-20">
            <div class="pull-left">
                <h5 class="text-blue">List Absensi</h5>
                <p class="font-14">Klik untuk Export</p>
                <form action="{{ route('laporanAbsen') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id_paket" value="{{ $id_paket }}">
                    <input type="hidden" name="id_kelas" value="{{ $id_kelas }}">
                    <button type="submit" class="btn btn-outline-success">Export</button>
                </form>
            </div>
        </div>
        <div class="row">
            <table class="tabel stripe hover nowrap">
                <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">No</th>
                        <th>Nama Siswa</th>
                        <th>Jumlah Pertemuan</th>
                        <th>Pengajar</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                        $i = 0;
                    @endphp
                    @foreach ($data as $d)
                        <tr>
                            <td class="table-plus">{{ $no++ }}</td>
                            <td>{{ $d->nama_siswa }}</td>
                            <td>{{ $d->jumlah_pertemuan }}</td>
                            <td>{{ $d->nama_pengajar }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
