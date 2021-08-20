<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
// use Validator;
// use Hash;
// use Session;
use App\Models\User_M;
use App\Models\Siswa_M;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;





class AuthController extends Controller
{
    public function showFormLogin()
    {
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            if (Auth::user()->role == 'admin') {
                return redirect()->route('dashboardadmin');
            } elseif (Auth::user()->role == 'pengajar') {
                return redirect()->route('dashboardguru');
            } elseif (Auth::user()->role == 'siswa') {
                return redirect()->route('dashboardsiswa');
            }
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $rules = [
            'email'                 => 'required|email',
            'password'              => 'required|string'
        ];

        $messages = [
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'password.required'     => 'Password wajib diisi',
            'password.string'       => 'Password harus berupa string'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ];

        Auth::attempt($data);

        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            if (Auth::user()->status == 'on') {
                if (Auth::user()->role == 'admin') {
                    return redirect()->route('dashboardadmin');
                } elseif (Auth::user()->role == 'pengajar') {
                    return redirect()->route('dashboardguru');
                } elseif (Auth::user()->role == 'siswa') {
                    return redirect()->route('dashboardsiswa');
                }
            } elseif (Auth::user()->status == 'off') {
                return redirect()->route('logoutsession');
            }
        } else { // false

            //Login Fail
            Session::flash('error', 'Email atau password salah');
            return redirect()->route('login');
        }
    }

    public function showFormRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $rules = [
            'nama_siswa'            => 'required|min:3|max:35',
            'telepon'               => 'required|min:11|max:35',
            'alamat'                => 'required|min:5|max:255',
            'email'                 => 'required|email|unique:users,email',
            'password'              => 'required|confirmed'
        ];

        $messages = [
            'nama_siswa.required'         => 'Nama Lengkap wajib diisi',
            'nama_siswa.min'              => 'Nama lengkap minimal 3 karakter',
            'nama_siswa.max'              => 'Nama lengkap maksimal 35 karakter',

            'telepon.required'         => 'Nomer Telepon wajib diisi',
            'telepon.min'              => 'Nomer Telepon Tidak Valid Minimal 11 Angka',
            'telepon.max'              => 'Nomer Telepon Telpon Terlalu Panjang',

            'alamat.required'         => 'Alamat wajib diisi',
            'alamat.min'              => 'Alamat Terlalu Pendek',
            'alamat.max'              => 'Alamat Terlalu Panjang',

            'email.required'              => 'Email wajib diisi',
            'email.email'                 => 'Email tidak valid',
            'email.unique'                => 'Email sudah terdaftar',

            'password.required'           => 'Password wajib diisi',
            'password.confirmed'          => 'Password tidak sama dengan konfirmasi password'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        // User_M::create([
        //     'username' => strtolower($request->email),
        //     'email' => strtolower($request->email),
        //     'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'password' => Hash::make($request->password),
        //     'role' => 'siswa',
        //     'status' => 'off'
        // ]);


        $user = new User_M;
        $user->username = ucwords(strtolower($request->email));
        $user->email = strtolower($request->email);
        $user->email_verified_at = Carbon::now()->format('Y-m-d H:i:s');
        $user->password = Hash::make($request->password);
        $user->role = 'siswa';
        $user->status = 'off';
        $simpan = $user->save();
        // $user = new User_M;
        // $user->name = ucwords(strtolower($request->name));
        // $user->email = strtolower($request->email);
        // $user->password = Hash::make($request->password);
        // $user->email_verified_at = \Carbon\Carbon::now();
        // $simpan = $user->save();
        $id = User_M::max('id_user');
        Siswa_M::create([
            'id_user' => $id,
            'nama_siswa' => $request->nama_siswa,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'tanggal_masuk' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        if ($simpan) {
            Session::flash('success', 'Register berhasil! Silahkan hubungi admin untuk aktivasi akun');
            return redirect()->route('login');
        } else {
            Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
            return redirect()->route('register');
        }
    }

    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('login');
    }
    public function logoutwithsession()
    {
        Auth::logout(); // menghapus session yang aktif
        Session::flash('error', 'Akun Belum Aktif, silahkan hubungi admin');
        return redirect()->route('login');
    }

    public function showhub_admin()
    {
        // 
        return view('siswa.hubungi_admin');
    }
    public function hub_admin(Request $request)
    {

        // //data
        $email = $request->email;

        $data = array(
            'nama' => $request->nama,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'name' => $request->name,

        );


        //    //kirim email
        Mail::send('email_user', $data, function ($mail) use ($email) {
            $mail->to($email, 'no-replay')
                ->subject("Regitrasi Akun Siswa Baru");
            $mail->from('bimbeltamanbelajar@gmail.com', 'Bimbel Taman Belajar');
        });


        //cek kegagalan
        if (Mail::failures()) {
            return "Gagal Mengirim Email";
        }

        return redirect()->route('login')->with('status', 'pesan berhasil dikirim tunggu konfirmasi admin');
    }
}
