<!DOCTYPE html>
<html>

<head>
    <style>
        table,
        td,
        th {
            border: 1px solid black;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

    </style>
</head>

<body>

    <h2>Laporan Absensi Bimbel</h2>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Jumlah Pertemuan</th>
            <th>Nama Pengajar</th>
        </tr>

        @php
            $no = 1;
            $i = 0;
        @endphp
        @foreach ($data as $d)
            <tr align="center">
                <td>{{ $no++ }}</td>
                <td>{{ $d->nama_siswa }}</td>
                <td>{{ $d->jumlah_pertemuan }}</td>
                <td>{{ $d->nama_pengajar }}</td>
            </tr>
        @endforeach
    </table>

</body>

</html>
