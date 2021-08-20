<?php

namespace App\Http\Controllers\guru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kegiatan_M;
use App\Models\Siswa_M;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use Siswa;
use App\Models\Pelayanan_M;
use App\Models\Pengajar_M;

class DashboardguruController extends Controller
{
    public function index()
    {
        // $cari = Auth::user()->id_user;
        // $id = Pengajar_M::select('id_pengajar')->where('id_user', $cari)->first();
        // $data = [
        //     'data' => Pelayanan_M::where('id_pengajar', $id->id_pengajar)->where('pelayanan.status', 'aktif')->get(),
        // ];


        return view('guru.dashboard_guru');
    }
}
