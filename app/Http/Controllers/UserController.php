<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Uang;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{

    // SUPER ADMIN
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::latest()->filter()->paginate(5);

        return view('superadmin.user.list-user', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.user.tambahkan-user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'alamat' => 'required',
            'nip_nisn' => 'required',
            'tanggal_lahir' => 'required',
            'no_telepon' => 'required',
            'role' => 'required',
            'jurusan' => 'required',
            'kelas' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->alamat = $request->alamat;
        $user->nip_nisn = $request->nip_nisn;
        $user->tanggal_lahir = date('Y-m-d', strtotime($request->tanggal_lahir));
        $user->no_telepon = $request->no_telepon;
        $user->role = Str::title($request->role);
        $user->role_id = $request->role;
        $user->jurusan = $request->jurusan;
        $user->kelas = $request->kelas;
        $user->image = $request->image;

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $user['image'] = "$profileImage";
        }
        $user->save();

        return redirect()->route('superadmin-list-user')->with('success', 'Akun berhasil di buat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('superadmin.user.check-user', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $users = User::where('id', $request->id)->first();
        return view('superadmin.form.edit-user', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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

        $user = User::find($id)->update($input);

        return redirect()->route('superadmin-list-user')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('superadmin-list-user')
            ->with('success', 'Akun berhasil di hapus!');
    }

    // ADMIN

    public function aindex(Request $request)
    {
        $users = User::latest()->filter()->paginate(5);

        return view('admin.user.list-user', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function acreate()
    {
        return view('admin.user.tambahkan-user');
    }

    public function astore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'alamat' => 'required',
            'nip_nisn' => 'required',
            'tanggal_lahir' => 'required',
            'no_telepon' => 'required',
            'role' => 'required',
            'jurusan' => 'required',
            'kelas' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->alamat = $request->alamat;
        $user->nip_nisn = $request->nip_nisn;
        $user->tanggal_lahir = date('Y-m-d', strtotime($request->tanggal_lahir));
        $user->no_telepon = $request->no_telepon;
        $user->role = $request->role;
        $user->jurusan = $request->jurusan;
        $user->kelas = $request->kelas;
        $user->image = $request->image;

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $user['image'] = "$profileImage";
        }

        $user->save();

        return redirect()->route('admin-list-user')->with('success', 'Akun berhasil di buat!');
    }

    public function ashow(User $user)
    {
        return view('admin.user.check-user', compact('user'));
    }

    public function aedit(Request $request)
    {
        $users = User::where('id', $request->id)->first();
        return view('admin.form.edit-user', compact('users'));
    }

    public function aupdate(Request $request, $id)
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

        $user = User::find($id)->update($input);

        return redirect()->route('admin-list-user')->with(['success' => 'Data Berhasil Diubah!']);
    }


    public function adestroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin-list-user')
            ->with('success', 'Akun berhasil di hapus!');
    }
}