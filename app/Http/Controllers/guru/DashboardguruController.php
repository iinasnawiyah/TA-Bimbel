<?php
namespace App\Http\Controllers\guru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;

class DashboardguruController extends Controller
{
    public function index()
    {
        return view('guru.dashboard_guru');
    }
    
}
