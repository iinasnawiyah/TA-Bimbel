<?php

namespace App\Http\Controllers\siswa;

use App\Models\Paket_M;
use App\Models\Kelas_M;
use App\Models\Siswa_M;
use App\Models\Pelayanan_M;
use App\Models\Pembayaran_M;
use App\Models\Kegiatan_M;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User_M;
use Illuminate\Support\Facades\DB;
use DataTables;
use Session;
use Illuminate\Support\Facades\Auth;
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
        $siswa = Siswa_M::where('id_user', Auth::user()->id_user)->get();
        $data = [
            'data' => $paket,
            'kelas' => $nama_kelas,
            'id_siswa' => $siswa[0]->id_siswa,
        ];
        return view('siswa.paket.index', $data);
    }

    public function pilihPaket(Request $request)
    {
        // var_dump($request->id_kelas);die;
        $nama_kelas = explode(",", $request->nama_kelas);
        // var_dump($nama_kelas);die;
        $paket = Paket_M::where('id_paket', $request->id_paket)->get();
        // for ($i=0; $i <count($id_kelas) ; $i++) { 
        //     $id_kelas[$i]=$request->id_kelas[$i];
        //     $kelas=Kelas_M::where('id_kelas',$request->id_kelas[$i])->get();
        //     $nama_kelas[$i]=$kelas[0]->nama_kelas;
        // }

        // var_dump($paket[0]->nama_paket);die;
        // var_dump($nama_kelas);die;
        $kelas = Kelas_M::all();
        $data = [
            'nama_paket' => $paket[0]->nama_paket,
            'id_paket' => $request->id_paket,
            'id_siswa' => $request->id_siswa,
            'kelas' => $kelas,
            'nama_kelas' => $nama_kelas
        ];
        return view('siswa.paket.pilihPaket', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $data = [
    //         'kelas' => Kelas_M::all()
    //     ];
    //     return view('admin.paket.tambah',$data);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // var_dump($request->all());die;
        Pelayanan_M::create([
            'id_paket' => $request->id_paket,
            'id_siswa' => $request->id_siswa,
            'id_kelas' => $request->kelas
        ]);
        return redirect()->route('riwayatPaket')
            ->with('success', 'Kategori Paket Berhasil Di tambah');
    }
    public function riwayatPaket()
    {
        $siswa = Siswa_M::where('id_user', Auth::user()->id_user)->get();
        $pelayanan = Pelayanan_M::leftjoin('paket', 'paket.id_paket', '=', 'pelayanan.id_paket')->leftjoin('kelas', 'kelas.id_kelas', '=', 'pelayanan.id_kelas')->leftjoin('pengajar', 'pengajar.id_pengajar', '=', 'pelayanan.id_pengajar')->where('id_siswa', $siswa[0]->id_siswa)->get();
        $data = [
            'data' => $pelayanan,
        ];
        return view('siswa.paket.riwayatPaket', $data);
    }
    public function listPembayaran($id)
    {
        $pembayaran = Pembayaran_M::where('id_pelayanan', $id)->get();
        $data = [
            'data' => $pembayaran,
            'id_pelayanan' => $id
        ];
        return view('siswa.paket.pembayaranPaket', $data);
    }
    public function tambahBayar(Request $request)
    {

        $this->validate($request, [
            'photo' => ['required', 'mimes:jpg,png,jpeg']
        ]);
        // var_dump($request->all());die;
        $name = time() . '_' . $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('files', $name, 'public');
        // echo "wait";die;
        Pembayaran_M::create([
            'id_pelayanan' => $request->id_pelayanan,
            'bukti_pembayaran' => $name,
            'lokasi_foto' => '/storage/' . $path
        ]);

        return redirect()->route('listPembayaran', $request->id_pelayanan)
            ->with('success', 'Kategori Paket Berhasil Di tambah');
    }
    public function listKegiatan($id)
    {
        $kegiatan = Kegiatan_M::where('id_pelayanan', $id)->get();
        $data = [
            'data' => $kegiatan,
            'id_pelayanan' => $id
        ];
        return view('siswa.paket.listKegiatan', $data);
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
        return redirect()->route('paket.index')
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
        return redirect()->route('paket.index')
            ->with('success', 'Kategori Paket Berhasil Di hapus');
    }
}
