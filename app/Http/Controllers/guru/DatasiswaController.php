<?php
namespace App\Http\Controllers\guru;

use Illuminate\Http\Request;
use App\Models\Pelayanan_M;
use App\Models\Pengajar_M;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class DatasiswaController extends Controller
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
            'data' =>   Pelayanan_M::with('PelayananWithPaket', 'PelayananWithSiswa', 'PelayananWithKelas', 'PelayananWithPengajar')->where('id_pengajar',$id->id_pengajar)->where('pelayanan.status','aktif')->get(),
        ];

        return view('guru.data_siswa', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
