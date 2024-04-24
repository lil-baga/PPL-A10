<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreFarmerRequest;
use App\Http\Requests\UpdateFarmerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FarmerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = Auth::user()->id;
        $currentuser = User::find($id);

        return view('peternak.profilPeternak', compact('currentuser'));
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
        $validatedRegister = $request->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:8',
            'address'=> 'required',
            'phone_number'=> 'required',
        ]);

        $validatedRegister['password'] = bcrypt($validatedRegister['password']);
        $validatedRegister['roles_id'] = '2';
        User::create($validatedRegister);

        return redirect('/loginPeternak');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/subsidiPeternak');
        } else {
            return redirect('/loginPeternak')->with('failed', 'Username atau Password Salah!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
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

        return view('peternak.editProfilPeternak', compact('currentuser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = Auth::user()->id;
        $currentuser = User::find($id);
        
        $validated= $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
        ]);

        $validatedProfile = [
            'name'=> $request->name,
            'email'=> $request->email,
            'address'=> $request->address,
            'phone_number'=> $request->phone_number,
        ];

        $currentuser->update($validatedProfile);
        return redirect('/profilPeternak')->with('success', 'Profil Anda Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
    }
}
