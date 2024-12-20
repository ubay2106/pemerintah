<?php

namespace App\Http\Controllers;

use App\Models\BidangModel;
use App\Models\JabatanModel;
use App\Models\PemerintahModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function index(){
    //     return view("dashboard");
    // }

    public function index()
    {
        $date = Carbon::now();
        $bidang = BidangModel::withCount('pemerintah')->get();
        $jabatan = JabatanModel::withCount('pemerintah')->get();
        $l = PemerintahModel::where('jk', 'laki-laki')->count();
        $p = PemerintahModel::where('jk', 'perempuan')->count();
        $pemerintah = PemerintahModel::all();

        return view('dashboard', compact('bidang', 'jabatan', 'pemerintah', 'date', 'l', 'p'));
    }
}
