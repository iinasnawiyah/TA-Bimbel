<?php

namespace App\Http\Controllers\guru;

use App\Models\Siswa_M;
use App\Models\Kegiatan_M;
use App\Models\Pengajar_M;
use App\Models\Pelayanan_M;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Storage;

class ManajemenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cari = Auth::user()->id_user;
        $id = Pengajar_M::select('id_pengajar')->where('id_user',$cari)->first();
        $data = [
            'data' => Kegiatan_M::select('siswa.nama_siswa','kelas.nama_kelas','id_kegiatan','kegiatan.created_at','deskripsi','bukti_kegiatan')
                ->join('pelayanan','kegiatan.id_pelayanan','=','pelayanan.id_pelayanan')
                ->join('siswa','pelayanan.id_siswa','=','siswa.id_siswa')
                ->join('paket','pelayanan.id_paket','=','paket.id_paket')
                ->join('kelas','pelayanan.id_kelas','=','kelas.id_kelas')
                ->where('pelayanan.id_pengajar',$id->id_pengajar)
                ->get(),
            'storage' => Storage::disk('public')->get('files/'),
        ];

        return view('guru.manajemen_kegiatan',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function form()
    {
        return view('guru.tambah_kegiatan');
    }

    public function autosiswa(Request $request)
    {
        $pengajar=Pengajar_M::where('id_user',Auth::user()->id_user)->get();
        $id_pengajar=$pengajar[0]->id_pengajar;
        if ($request->has('q')) {
            $search = $request->q;
            $pelayanan = Pelayanan_M::select("*")
            ->join('siswa','pelayanan.id_siswa','=','siswa.id_siswa')
            ->join('pengajar','pelayanan.id_pengajar','=','pengajar.id_pengajar')
            ->where('nama_siswa', 'LIKE', "%$search%")->where('pelayanan.id_pengajar',$id_pengajar)
            ->get();
        }else{
            $search = $request->q;
            $pelayanan = Pelayanan_M::select("*")
            ->join('siswa','pelayanan.id_siswa','=','siswa.id_siswa')
            ->join('pengajar','pelayanan.id_pengajar','=','pengajar.id_pengajar')
            ->where('pelayanan.id_pengajar',$id_pengajar)
            ->get();
        }

        return response()->json($pelayanan);
    }

    public function getsiswa(Request $request)
    {
        $id = $request->id;

        $info = Pelayanan_M::select("*")
        ->join('siswa','pelayanan.id_siswa','=','siswa.id_siswa')
        ->join('pengajar','pelayanan.id_pengajar','=','pengajar.id_pengajar')
        ->join('kelas','pelayanan.id_kelas','=','kelas.id_kelas')
        ->join('paket','pelayanan.id_paket','=','paket.id_paket')
        ->where('pelayanan.id_siswa', $id)
        ->first();
        // $info = DB::table('r_pasiens')->where('id_pasien', $id)->first();

        echo json_encode($info);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'deskripsi' => ['required'],
            'photo' => ['required', 'mimes:jpq,png,jpeg']
        ]);

        $name = time().'_'.$request->file('photo')->getClientOriginalName(); 
        $path = $request->file('photo')->storeAs('files', $name, 'public');

        Kegiatan_M::create([
            'id_pelayanan' => $request->id_pelayanan,
            'deskripsi' => $request->deskripsi,
            'bukti_kegiatan' => $name,
            'lokasi_foto' => '/storage/' . $path,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);



        return redirect()->route('manajemenKegiatan')
        ->with('success', 'Bukti Kegiatan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
