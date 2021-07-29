<?php
namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\Models\Kelas_M;
use App\Models\Siswa_M;
use App\Models\Paket_M;
use App\Models\Pengajar_M;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'kelas' => Kelas_M::All()->count(),
            'siswa' => Siswa_M::All()->count(),
            'paket' => Paket_M::All()->count(),
            'pengajar' => Pengajar_M::All()->count(),
        ];
        return view('admin.dashboard',$data);
    }
    
}
