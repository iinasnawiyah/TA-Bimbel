<?php

namespace App\Http\Controllers\admin;

use App\Models\Siswa_M;
use App\Models\User_M;
use App\Models\Pengajar_M;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'label' => 'Kelola Siswa',
            'data' =>   Siswa_M::with('SiswaWithUser')->get()
        ];

        return view('admin.siswa.index', $data);
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
     * @param  \App\Models\Siswa_M  $siswa_M
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa_M $siswa_M)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa_M  $siswa_M
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'data' => Siswa_M::with('SiswaWithUser')->where('siswa.id_siswa', '=', $id)->first()
        ];
        return view('admin.siswa.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa_M  $siswa_M
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id_user = $request->id_user;
        $siswa = [
            'nama_siswa' => $request->nama_siswa,
            'telepon'       => $request->telepon,
            'alamat'        => $request->alamat
        ];
        $user = [
            'email'         => $request->email,
            'status'        => $request->status
        ];

        Siswa_M::find($id)->update($siswa);
        User_M::find($id_user)->update($user);

        return redirect()->route('siswa.index')
            ->with('success', 'Siswa Berhasil Di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa_M  $siswa_M
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Siswa_M::find($id);
        $data->delete();
        return redirect()->route('siswa.index')
            ->with('success', 'Siswa Berhasil Di hapus');
    }
}
