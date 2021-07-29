<?php

namespace App\Http\Controllers\admin;

use App\Models\Kelas_M;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'data' => Kelas_M::all()
        ];
        return view('admin.kelas.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kelas.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kelas_M::create($request->all());
        return redirect()->route('kelas.index')
            ->with('success', 'Kategori Kelas Berhasil Di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas_M  $kelas_M
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas_M $kelas_M)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas_M  $kelas_M
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'data' => Kelas_M::find($id)
        ];
        return view('admin.kelas.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas_M  $kelas_M
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Kelas_M::find($id)->update($request->all());
        return redirect()->route('kelas.index')
            ->with('success', 'Kategori Kelas Berhasil Di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas_M  $kelas_M
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kelas_M::find($id);
        $data->delete();
        return redirect()->route('kelas.index')
            ->with('success', 'Kategori Kelas Berhasil Di hapus');
    }
}
