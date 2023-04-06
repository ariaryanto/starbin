<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{

    // SUPER ADMIN

    public function sprofile(Request $request)
    {
        $users = Auth::user();
        return view('superadmin.profile.profile', compact('users'));
    }

    public function sedit(Request $request)
    {
        $users = Auth::user();
        return view('superadmin.form.edit-profile', compact('users'));
    }

    public function supdate(Request $request, User $users)
    {
        $input =
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'alamat' => 'required',
                'nip_nisn' => 'required',
                'tanggal_lahir' => 'required',
                'no_telepon' => 'required',
                'role' => 'required',
                'jurusan' => 'required',
                'kelas' => 'required',
            ]);
        if ($request->password) {
            $input['password'] = bcrypt($request->password);
        }

        $input['tanggal_lahir'] = date('Y-m-d', strtotime($request->tanggal_lahir));

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        Auth::user()->update($input);

        return redirect()->route('superadmin-profile')->with(['success' => 'Data Berhasil Diubah!']);
    }

    // ADMIN

    public function aprofile(Request $request)
    {
        $users = Auth::user();
        return view('admin.profile.profile', compact('users'));
    }

    public function aedit(Request $request)
    {
        $users = Auth::user();
        return view('admin.form.edit-profile', compact('users'));
    }

    public function aupdate(Request $request, User $users)
    {
        $input =
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'alamat' => 'required',
                'nip_nisn' => 'required',
                'tanggal_lahir' => 'required',
                'no_telepon' => 'required',
                'role' => 'required',
                'jurusan' => 'required',
                'kelas' => 'required',
            ]);
        if ($request->password) {
            $input['password'] = bcrypt($request->password);
        }

        $input['tanggal_lahir'] = date('Y-m-d', strtotime($request->tanggal_lahir));

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        Auth::user()->update($input);

        return redirect()->route('admin-profile')->with(['success' => 'Data Berhasil Diubah!']);
    }

    // NASABAH

    public function nprofile(Request $request)
    {
        $users = Auth::user();
        return view('nasabah.profile.profile', compact('users'));
    }
    public function nedit(Request $request)
    {
        $users = Auth::user();
        return view('nasabah.component.edit-profile', compact('users'));
    }

    public function nupdate(Request $request, User $users)
    {
        $input =
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'alamat' => 'required',
                'nip_nisn' => 'required',
                'tanggal_lahir' => 'required',
                'no_telepon' => 'required',
                'role' => 'required',
                'jurusan' => 'required',
                'kelas' => 'required',
            ]);
        if ($request->password) {
            $input['password'] = bcrypt($request->password);
        }

        $input['tanggal_lahir'] = date('Y-m-d', strtotime($request->tanggal_lahir));

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        Auth::user()->update($input);

        return redirect()->route('nasabah-profile')->with(['success' => 'Data Berhasil Diubah!']);
    }
}