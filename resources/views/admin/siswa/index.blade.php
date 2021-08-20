@extends('layout.master')
@extends('partials.sidebar')
@extends('partials.header')

@section('konten')
    <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
        <div class="clearfix mb-20">
            <div class="pull-left">
                <h5 class="text-blue">{{ $label }}</h5>
                <br>
                {{-- <a href="{{ route('pengajar.create') }}" class="btn btn-success">Tambah Data Siswa</a> --}}
                {{-- <p class="font-14">Untuk <a class="text-primary" href="{{ route('kelas.create') }}">Tamba      h Data</a></p> --}}
            </div>
        </div>
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (Session::has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ Session::get('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="row">
            <table class="tabel stripe hover nowrap">
                <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">No</th>
                        <th>Nama Siswa</th>
                        <th>Telepon</th>
                        <th>Alamat</th>
                        <th>E-mail</th>
                        <th>Status</th>
                        <th>Tanggal Masuk</th>
                        <th class="datatable-nosort">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($data as $d)
                        <tr>
                            <td class="table-plus">{{ $no++ }}</td>
                            <td>{{ $d->nama_siswa }}</td>
                            <td>{{ $d->telepon }}</td>
                            <td>{{ $d->alamat }}</td>
                            <td>{{ $d->SiswaWithUser->email }}</td>
                            <td>
                                @if ($d->SiswaWithUser->status == 'on')
                                    <button type="button" class="btn btn-success btn-sm">Aktif</button>
                                @elseif ($d->SiswaWithUser->status == 'off')

                                    <button type="button" class="btn btn-danger btn-sm">Tidak Aktif</button>
                                @endif
                            </td>
                            <td>{{ $d->tanggal_masuk }}</td>
                            <td>

                                <form action="{{ route('siswa.destroy', $d->id_siswa) }}" method="POST">
                                    <input type="hidden" name="id_siswa" value="{{ $d->id_siswa }}">
                                    <input type="hidden" name="id_user" value="{{ $d->id_user }}">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="{{ route('siswa.edit', $d->id_siswa) }}"
                                                class="btn btn-sm btn-primary btn-block">edit</a>
                                        </div>
                                        <div class="col-md-6">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-sm btn-danger btn-block">Hapus</button>
                                        </div>
                                    </div>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
