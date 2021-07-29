<?php
namespace App\Http\Controllers\siswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;

class DashboardsiswaController extends Controller
{
    public function index()
    {
        return view('siswa.dashboard_siswa');
    }
    
}
