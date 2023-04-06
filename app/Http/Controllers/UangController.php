<?php

namespace App\Http\Controllers;

use App\Models\Uang;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class UangController extends Controller
{

    public function checktabungan(Request $request)
    {
        $nip_nisn = $request->nip_nisn;
        $users = User::with(['uangs'])->where('nip_nisn', $nip_nisn)->first();
        $pemasukan = $users->uangs->sum('pemasukan');
        $pengeluaran = $users->uangs->sum('pengeluaran');
        $total = $pemasukan - $pengeluaran;
        $data_uang = Uang::has('user')->where('nip_nisn', $nip_nisn)->where('pemasukan', '!=', 0)->latest()->paginate(5);



        return view('superadmin.tabungan.check-tabungan', compact('users', 'data_uang', 'pemasukan', 'pengeluaran', 'total'));
    }

    public function listtabungan(Request $request)
    {
        $users = User::latest()->filter()->paginate(5);

        return view('superadmin.tabungan.list-tabungan', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function tambahtab(Request $request)
    {

        $request->validate([
            'pemasukan' => 'required',
            'nip_nisn' => 'required',
        ]);

        $uangs = new Uang();
        $uangs->pemasukan = $request->pemasukan;
        $uangs->nip_nisn = $request->nip_nisn;
        $uangs->tanggal = date('Y-m-d');
        $uangs->pengeluaran = 0;
        $uangs->admin = Auth::user()->name;
        $uangs->save();

        return redirect()->back();
    }

    public function tabungan(Request $request)
    {
        $nip_nisn = $request->nip_nisn;
        $uangs = Uang::where('nip_nisn', Auth::user()->nip_nisn)->limit(5)->get();
        $pemasukan = $uangs->sum('pemasukan');
        $pengeluaran = $uangs->sum('pengeluaran');
        $total = $pemasukan - $pengeluaran;


        return view('nasabah.tabungan.tabungan', compact('uangs', 'pemasukan', 'pengeluaran', 'total'));
    }

    // Tarik Tunai

    public function checktarik(Request $request)
    {
        $nip_nisn = $request->nip_nisn;
        $users = User::with(['uangs'])->where('nip_nisn', $nip_nisn)->first();
        $pemasukan = $users->uangs->sum('pemasukan');
        $pengeluaran = $users->uangs->sum('pengeluaran');
        $total = $pemasukan - $pengeluaran;
        $data_uang = Uang::has('user')->where('nip_nisn', $nip_nisn)->where('pengeluaran', '!=', 0)->latest()->paginate(5);

        return view('superadmin.tarik-tunai.check-tarik-tunai', compact('data_uang', 'users', 'pengeluaran', 'total', 'pemasukan'));
    }

    public function listtarik(Request $request)
    {
        $users = User::latest()->filter()->paginate(5);

        return view('superadmin.tarik-tunai.list-tarik-tunai', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function tambahtar(Request $request)
    {
        $request->validate([
            'pengeluaran' => 'required',
            'nip_nisn' => 'required',
        ]);

        $users = User::with(['uangs'])->where('nip_nisn', $request->nip_nisn)->first();
        $pemasukan = $users->uangs->sum('pemasukan');
        $pengeluaran = $users->uangs->sum('pengeluaran');
        $total = $pemasukan - $pengeluaran;

        if ($request->pengeluaran > $total) {
            return redirect()->back()->with('error', 'Saldo tidak cukup.');
        }






        $uangs = new Uang();
        $uangs->pemasukan = 0;
        $uangs->nip_nisn = $request->nip_nisn;
        $uangs->tanggal = date('Y-m-d');
        $uangs->pengeluaran = $request->pengeluaran;
        $uangs->admin = Auth::user()->name;
        $uangs->save();



        return redirect()->back();
    }

    public function tarik(Request $request)
    {
        $nip_nisn = $request->nip_nisn;
        $uangs = Uang::where('nip_nisn', Auth::user()->nip_nisn)->limit(5)->get();
        $pemasukan = $uangs->sum('pemasukan');
        $pengeluaran = $uangs->sum('pengeluaran');
        $total = $pemasukan - $pengeluaran;


        return view('nasabah.tarik-tunai.tarik-tunai', compact('uangs', 'pemasukan', 'pengeluaran', 'total'));
    }

    public function achecktabungan(Request $request)
    {
        $nip_nisn = $request->nip_nisn;
        $users = User::with(['uangs'])->where('nip_nisn', $nip_nisn)->first();
        $pemasukan = $users->uangs->sum('pemasukan');
        $pengeluaran = $users->uangs->sum('pengeluaran');
        $total = $pemasukan - $pengeluaran;
        $data_uang = Uang::has('user')->where('nip_nisn', $nip_nisn)->where('pemasukan', '!=', 0)->latest()->paginate(5);

        return view('admin.tabungan.check-tabungan', compact('users', 'data_uang', 'pemasukan', 'pengeluaran', 'total'));
    }

    public function alisttabungan(Request $request)
    {
        $users = User::latest()->filter()->paginate(5);

        return view('admin.tabungan.list-tabungan', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function atambahtab(Request $request)
    {

        $request->validate([
            'pemasukan' => 'required',
            'nip_nisn' => 'required',
        ]);

        $uangs = new Uang();
        $uangs->pemasukan = $request->pemasukan;
        $uangs->nip_nisn = $request->nip_nisn;
        $uangs->tanggal = date('Y-m-d');
        $uangs->pengeluaran = 0;
        $uangs->admin = Auth::user()->name;
        $uangs->save();

        return redirect()->back();
    }

    // Tarik Tunai

    public function achecktarik(Request $request)
    {
        $nip_nisn = $request->nip_nisn;
        $users = User::with(['uangs'])->where('nip_nisn', $nip_nisn)->first();
        $pemasukan = $users->uangs->sum('pemasukan');
        $pengeluaran = $users->uangs->sum('pengeluaran');
        $total = $pemasukan - $pengeluaran;
        $data_uang = Uang::has('user')->where('nip_nisn', $nip_nisn)->where('pengeluaran', '!=', 0)->latest()->paginate(5);

        return view('admin.tarik-tunai.check-tarik-tunai', compact('data_uang', 'users', 'pengeluaran', 'total', 'pemasukan'));
    }

    public function alisttarik(Request $request)
    {
        $users = User::latest()->filter()->paginate(5);

        return view('admin.tarik-tunai.list-tarik-tunai', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function atambahtar(Request $request)
    {

        $request->validate([
            'pengeluaran' => 'required',
            'nip_nisn' => 'required',
        ]);

        $users = User::with(['uangs'])->where('nip_nisn', $request->nip_nisn)->first();
        $pemasukan = $users->uangs->sum('pemasukan');
        $pengeluaran = $users->uangs->sum('pengeluaran');
        $total = $pemasukan - $pengeluaran;

        if ($request->pengeluaran > $total) {
            return redirect()->back()->with('error', 'Saldo tidak cukup.');
        }

        $uangs = new Uang();
        $uangs->pemasukan = 0;
        $uangs->nip_nisn = $request->nip_nisn;
        $uangs->tanggal = date('Y-m-d');
        $uangs->pengeluaran = $request->pengeluaran;
        $uangs->admin = Auth::user()->name;
        $uangs->save();

        return redirect()->back();
    }
}