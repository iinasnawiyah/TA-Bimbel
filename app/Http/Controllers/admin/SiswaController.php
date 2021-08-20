<?php

namespace App\Http\Controllers\admin;

use App\Models\Siswa_M;
use App\Models\User_M;
use App\Models\Pengajar_M;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

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
            'status'        => $request->status,
            'email_body' => $request->email_body,
            'nama_siswa' => $request->nama_siswa,
            'telepon'       => $request->telepon,
            'alamat'        => $request->alamat
        ];

        Siswa_M::find($id)->update($siswa);
        User_M::find($id_user)->update($user);


        //data
        $email = $request->email;


        //    //kirim email
        Mail::send('email', $user, function ($mail) use ($email) {
            $mail->to($email, 'no-replay')
                ->subject("Aktivasi Akun");
            $mail->from('bimbeltamanbelajar@gmail.com', 'Bimbel Taman Belajar');
        });


        //cek kegagalan
        if (Mail::failures()) {
            return "Gagal Mengirim Email";
        }

        return redirect()->route('siswa.index')
            ->with('success', 'Siswa Berhasil Di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa_M  $siswa_M
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // $data = Siswa_M::find($request->id_siswa);
        // $data->delete();
        Siswa_M::destroy($request->id_siswa);
        User_M::destroy($request->id_user);

        return redirect()->route('siswa.index')
            ->with('success', 'Siswa Berhasil Di hapus');
    }
}
