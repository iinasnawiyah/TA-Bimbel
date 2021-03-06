<?php

namespace App\Http\Controllers\admin;

use App\Models\Paket_M;
use App\Models\Kelas_M;
use App\Models\Pelayanan_M;
use App\Models\Pembayaran_M;
use App\Models\Pengajar_M;
use App\Models\Kegiatan_M;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use DataTables;
use  PDF;
use App\Models\Siswa_M;
use App\Models\User_M;
use Illuminate\Support\Facades\Mail;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paket = Paket_M::all();
        for ($i = 0; $i < count($paket); $i++) {
            $kelas[$i] = explode(",", $paket[$i]->id_kelas);
            for ($x = 0; $x < count($kelas[$i]); $x++) {
                $get_kelas[$i][$x] = Kelas_M::select('nama_kelas')->where('id_kelas', '=', $kelas[$i][$x])->get();
                $nama_kelas[$i][$x] = $get_kelas[$i][$x][0]->nama_kelas;
            }
        }
        $data = [
            'data' => $paket,
            'kelas' => $nama_kelas
        ];
        return view('admin.paket.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'kelas' => Kelas_M::all()
        ];
        return view('admin.paket.tambah', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kelas = implode(",", $request->kelas);
        // var_dump($request->all());die;
        Paket_M::create([
            'nama_paket' => $request->nama_paket,
            'id_kelas' => $kelas,
            'tarif_cash' => $request->tarif_cash,
            'tarif_angs' => $request->tarif_angs,
        ]);
        return redirect()->route('kelpaket.index')
            ->with('success', 'Kategori Paket Berhasil Di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paket_M  $paket_M
     * @return \Illuminate\Http\Response
     */
    public function show(Paket_M $paket_M)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paket_M  $paket_M
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Paket_M::find($id);
        $kat_kelas = explode(",", $data->id_kelas);
        $data = [
            'data' => $data,
            'kelas' => Kelas_M::all(),
            'kat_kelas' => $kat_kelas
        ];
        return view('admin.paket.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paket_M  $paket_M
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id_kelas = implode(",", $request->id_kelas);
        DB::table('paket')
            ->where('id_paket', $id)
            ->update([
                'nama_paket' => $request->nama_paket,
                'id_kelas' => $id_kelas,
                'tarif_cash' => $request->tarif_cash,
                'tarif_angs' => $request->tarif_angs,
            ]);
        return redirect()->route('kelpaket.index')
            ->with('success', 'Kategori Paket Berhasil Di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paket_M  $paket_M
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Paket_M::find($id);
        $data->delete();
        return redirect()->route('kelpaket.index')
            ->with('success', 'Kategori Paket Berhasil Di hapus');
    }

    public function kelRiwayatPaket()
    {
        $pelayanan = Pelayanan_M::leftjoin('paket', 'paket.id_paket', '=', 'pelayanan.id_paket')->leftjoin('kelas', 'kelas.id_kelas', '=', 'pelayanan.id_kelas')->leftjoin('pengajar', 'pengajar.id_pengajar', '=', 'pelayanan.id_pengajar')->leftjoin('siswa', 'siswa.id_siswa', '=', 'pelayanan.id_siswa')->get();
        $data = [
            'data' => $pelayanan,
        ];
        return view('admin.paket.riwayatPaket', $data);
    }
    public function kelPembayaran($id)
    {
        $pembayaran = Pembayaran_M::where('pembayaran.id_pelayanan', $id)->leftJoin('pelayanan', 'pelayanan.id_pelayanan', '=', 'pembayaran.id_pelayanan')->get();
        $id_pengajar = $pembayaran[0]->id_pengajar;
        $status_bayar = $pembayaran[0]->status_bayar;
        $pengajar = Pengajar_M::all();
        $data = [
            'data' => $pembayaran,
            'id_pelayanan' => $id,
            'pengajar' => $pengajar,
            'id_pengajar' => $id_pengajar,
            'status_bayar' => $status_bayar
        ];
        return view('admin.paket.pembayaranPaket', $data);
    }
    public function editKelBayar(Request $request, $id)
    {
        Pembayaran_M::where('id_pembayaran', $id)
            ->update([
                'status_cek' => "Sudah dicek",
            ]);
        $pelayanan = Pembayaran_M::where('id_pembayaran', $id)->get();
        $id_pel = $pelayanan[0]->id_pelayanan;


        return redirect()->route('kelPembayaran', $id_pel)
            ->with('success', 'Kategori Paket Berhasil Di hapus');
    }
    public function submitPengajar(Request $request)
    {
        Pelayanan_M::where('id_pelayanan', $request->id_pelayanan)
            ->update([
                'status' => "aktif",
                'id_pengajar' => $request->id_pengajar,
            ]);

        return redirect()->route('kelPembayaran', $request->id_pelayanan)
            ->with('success', 'Kategori Paket Berhasil Di hapus');
    }
    public function submitLunas(Request $request)
    {
        Pelayanan_M::where('id_pelayanan', $request->id_pelayanan)
            ->update([
                'status_bayar' => "lunas"
            ]);
        return redirect()->route('kelPembayaran', $request->id_pelayanan)
            ->with('success', 'Kategori Paket Berhasil Di hapus');
    }
    public function kelKegiatan()
    {
        $pelayanan = Pelayanan_M::leftjoin('paket', 'paket.id_paket', '=', 'pelayanan.id_paket')->leftjoin('kelas', 'kelas.id_kelas', '=', 'pelayanan.id_kelas')->leftjoin('pengajar', 'pengajar.id_pengajar', '=', 'pelayanan.id_pengajar')->leftjoin('siswa', 'siswa.id_siswa', '=', 'pelayanan.id_siswa')->orderBy('pelayanan.status', 'asc')->orderBy('pelayanan.status_bayar', 'desc')->orderBy('pelayanan.id_paket', 'asc')->orderBy('pelayanan.id_kelas', 'asc')->orderBy('pengajar.nama_pengajar', 'asc')->where('pelayanan.status', '!=', 'perlu dibayar')->get();
        $data = [
            'data' => $pelayanan,
        ];
        return view('admin.paket.kelKegiatan', $data);
    }
    public function dataKegiatan($id)
    {
        $kegiatan = Kegiatan_M::where('kegiatan.id_pelayanan', $id)->leftJoin('pelayanan', 'pelayanan.id_pelayanan', '=', 'kegiatan.id_pelayanan')->orderBy('kegiatan.id_kegiatan', 'desc')->get();
        $data = [
            'data' => $kegiatan,
            'id_pelayanan' => $id,
        ];
        return view('admin.paket.dataKegiatan', $data);
    }
    public function listPaket()
    {
        $pelayanan = Pelayanan_M::select(DB::raw('pelayanan.id_paket,pelayanan.id_kelas,paket.nama_paket, kelas.nama_kelas'))->leftjoin('paket', 'paket.id_paket', '=', 'pelayanan.id_paket')->leftjoin('kelas', 'kelas.id_kelas', '=', 'pelayanan.id_kelas')->leftjoin('pengajar', 'pengajar.id_pengajar', '=', 'pelayanan.id_pengajar')->leftjoin('siswa', 'siswa.id_siswa', '=', 'pelayanan.id_siswa')->groupBy('pelayanan.id_paket')->groupBy('pelayanan.id_kelas')->orderBy('pelayanan.status', 'asc')->orderBy('pelayanan.status_bayar', 'desc')->orderBy('pelayanan.id_paket', 'asc')->orderBy('pelayanan.id_kelas', 'asc')->orderBy('pengajar.nama_pengajar', 'asc')->where('pelayanan.status', '=', 'aktif')->get();
        $data = [
            'data' => $pelayanan,
        ];
        return view('admin.paket.listPaket', $data);
    }
    public function listAbsen(Request $request)
    {
        $id_paket = $request->id_paket;
        $id_kelas = $request->id_kelas;
        $absensi = Kegiatan_M::select(DB::raw('siswa.nama_siswa, COUNT(*) as jumlah_pertemuan, pengajar.nama_pengajar'))->leftjoin('pelayanan', 'pelayanan.id_pelayanan', '=', 'kegiatan.id_pelayanan')->leftjoin('siswa', 'siswa.id_siswa', '=', 'pelayanan.id_siswa')->leftjoin('pengajar', 'pengajar.id_pengajar', '=', 'pelayanan.id_pengajar')->groupBy('pelayanan.id_paket')->groupBy('pelayanan.id_siswa')->orderBy('siswa.nama_siswa', 'asc')->orderBy('pelayanan.status_bayar', 'desc')->where('pelayanan.id_paket', $id_paket)->where('pelayanan.id_kelas', '=', $id_kelas)->where('pelayanan.status', '=', 'aktif')->get();
        $data = [
            'data' => $absensi,
            'id_paket' => $id_paket,
            'id_kelas' => $id_kelas,
        ];
        return view('admin.paket.listAbsen', $data);
    }
    public function exportAbsen(Request $request)

    {
        $id_paket = $request->id_paket;
        $id_kelas = $request->id_kelas;
        $absensi = Kegiatan_M::select(DB::raw('siswa.nama_siswa, COUNT(*) as jumlah_pertemuan, pengajar.nama_pengajar'))->leftjoin('pelayanan', 'pelayanan.id_pelayanan', '=', 'kegiatan.id_pelayanan')->leftjoin('siswa', 'siswa.id_siswa', '=', 'pelayanan.id_siswa')->leftjoin('pengajar', 'pengajar.id_pengajar', '=', 'pelayanan.id_pengajar')->groupBy('pelayanan.id_paket')->groupBy('pelayanan.id_siswa')->orderBy('siswa.nama_siswa', 'asc')->orderBy('pelayanan.status_bayar', 'desc')->where('pelayanan.id_paket', $id_paket)->where('pelayanan.id_kelas', '=', $id_kelas)->where('pelayanan.status', '=', 'aktif')->get();
        $data = [
            'data' => $absensi,
            'id_paket' => $id_paket,
            'id_kelas' => $id_kelas,
        ];
        $pdf = PDF::loadView('laporan.pdfexportlaporan', $data)->setPaper('a4', 'potrait');
        return $pdf->stream('laporan_report.pdf');
    }
}
