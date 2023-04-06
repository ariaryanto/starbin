<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Uang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BerandaController extends Controller
{
    public function sindex(Request $request)
    {
        $nip_nisn = $request->nip_nisn;
        $uangs = Uang::has('user')->latest()->limit(5)->get();
        $total_uang = Uang::has('user')->latest()->get();
        $pemasukan = $total_uang->sum('pemasukan');
        $pengeluaran = $total_uang->sum('pengeluaran');
        $total = $pemasukan - $pengeluaran;
        $nasabah = User::count();
        $nama_bulan = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
        $chart_pemasukan = [];
        $chart_pengeluaran = [];

        foreach ($nama_bulan as $key => $bulan) {

            $chart_pemasukan[] =
                Uang::where('tanggal', "like", "%" . date('Y') . '-' . sprintf("%02s", $key + 1) . '%')->sum('pemasukan');

            $chart_pengeluaran[] =
                Uang::where('tanggal', "like", "%" . date('Y') . '-' . sprintf("%02s", $key + 1) . '%')->sum('pengeluaran');
        }
        return view('superadmin.beranda', compact('nasabah', 'uangs', 'pemasukan', 'pengeluaran', 'total', 'chart_pemasukan', 'chart_pengeluaran', 'nama_bulan'));
    }

    public function nindex(Request $request)
    {
        $nip_nisn = $request->nip_nisn;
        $uangs = Uang::where('nip_nisn', Auth::user()->nip_nisn)->limit(5)->get();
        $pemasukan = $uangs->sum('pemasukan');
        $pengeluaran = $uangs->sum('pengeluaran');
        $total = $pemasukan - $pengeluaran;
        $nasabah = User::count();
        $nama_bulan = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
        $chart_pemasukan = [];
        $chart_pengeluaran = [];


        foreach ($nama_bulan as $key => $bulan) {

            $chart_pemasukan[] =
                Uang::where('nip_nisn', Auth::user()->nip_nisn)->where('tanggal', "like", "%" . date('Y') . '-' . sprintf("%02s", $key + 1) . '%')->sum('pemasukan');

            $chart_pengeluaran[] =
                Uang::where('nip_nisn', Auth::user()->nip_nisn)->where('tanggal', "like", "%" . date('Y') . '-' . sprintf("%02s", $key + 1) . '%')->sum('pengeluaran');
        }
        return view('nasabah.beranda', compact('nasabah', 'uangs', 'pemasukan', 'pengeluaran', 'total', 'chart_pemasukan', 'chart_pengeluaran', 'nama_bulan'));
    }

    public function aindex(Request $request)
    {
        $nip_nisn = $request->nip_nisn;
        $uangs = Uang::has('user')->latest()->limit(5)->get();
        $total_uang = Uang::has('user')->latest()->get();
        $pemasukan = $total_uang->sum('pemasukan');
        $pengeluaran = $total_uang->sum('pengeluaran');
        $total = $pemasukan - $pengeluaran;
        $nasabah = User::count();
        $nama_bulan = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
        $chart_pemasukan = [];
        $chart_pengeluaran = [];

        foreach ($nama_bulan as $key => $bulan) {

            $chart_pemasukan[] =
                Uang::where('tanggal', "like", "%" . date('Y') . '-' . sprintf("%02s", $key + 1) . '%')->sum('pemasukan');

            $chart_pengeluaran[] =
                Uang::where('tanggal', "like", "%" . date('Y') . '-' . sprintf("%02s", $key + 1) . '%')->sum('pengeluaran');
        }
        return view('admin.beranda', compact('nasabah', 'uangs', 'pemasukan', 'pengeluaran', 'total', 'chart_pemasukan', 'chart_pengeluaran', 'nama_bulan'));
    }
}