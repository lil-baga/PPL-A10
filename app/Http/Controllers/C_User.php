<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class C_User extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = Auth::user()->id;
        $roles_id = Auth::user()->roles_id;
        $currentuser = User::find($id);

        return view('profil.V_Profil', compact('currentuser'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $id = Auth::user()->id;
        $currentuser = User::find($id);

        return view('profil.V_editProfil', compact('currentuser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = Auth::user()->id;
        $currentuser = User::find($id);
        
        $validatedProfile= $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'kontak' => 'required',
        ]);

        $currentuser->update($validatedProfile);
        return redirect('/profilUser')->with('success', 'Profil Anda Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
