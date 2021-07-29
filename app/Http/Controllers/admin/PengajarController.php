<?php

namespace App\Http\Controllers\admin;

use App\Models\Pengajar_M;
use App\Models\User_M;
use App\Models\Kelas_M;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class PengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = [
            'label' => 'Kelola Pengajar',
            'data' =>   Pengajar_M::with('juserpengajar')->get()
        ];
        // dd($data);

        return view('admin.pengajar.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pengajar.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        User_M::create([
            'username' => $request->email,
            'email' => $request->email,
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'password' => Hash::make($request->password),
            'role' => 'pengajar',
            'status' => 'on'
        ]);

        $id = User_M::max('id_user');
        Pengajar_M::create([
            'id_user' => $id,
            'nama_pengajar' => $request->nama_pengajar,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'tanggal_masuk' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        // Pengajar_M::create($request->all());
        return redirect()->route('pengajar.index')
            ->with('success', 'Pengajar Berhasil Di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data = [
        //     'data' => Pengajar_M::find($id)
        // ];
        // return view('admin.pengajar.edit', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = [
            'data' => pengajar_M::join('users', 'pengajar.id_user', '=', 'users.id_user')->select('*')->where('pengajar.id_pengajar', '=', $id)->first()
        ];
        return view('admin.pengajar.edit', $data);
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
        $id_user = $request->id_user;
        $pengajar = [
            'nama_pengajar' => $request->nama_pengajar,
            'telepon'       => $request->telepon,
            'alamat'        => $request->alamat
        ];
        $user = [
            'email'         => $request->email,
            'status'        => $request->status
        ];

        Pengajar_M::find($id)->update($pengajar);
        User_M::find($id_user)->update($user);

        return redirect()->route('pengajar.index')
            ->with('success', 'Pengajar Berhasil Di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pengajar_M::find($id);
        $data->delete();
        return redirect()->route('pengajar.index')
            ->with('success', 'Pengajar Berhasil Di hapus');
    }
}
