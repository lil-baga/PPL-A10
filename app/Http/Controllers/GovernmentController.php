<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreFarmerRequest;
use App\Http\Requests\UpdateFarmerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GovernmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = Auth::user()->id;
        $currentuser = User::find($id);

        return view('Dinas.profilDinas', compact('currentuser'));
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
        $accessCode = mt_rand(1000, 9999);

        $validatedRegister = $request->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:8',
            'address'=> 'required',
            'phone_number'=> 'required',
            'access_code',
            'roles_id',

        ]);

        $validatedRegister['password'] = bcrypt($validatedRegister['password']);
        $validatedRegister['access_code'] = $accessCode;
        $validatedRegister['roles_id'] = '3';

        User::create($validatedRegister);

        return redirect('/loginDinas');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password', 'access_code');
        if (Auth::attempt($credentials)) {
            return redirect('/subsidiDinas');
        } else {
            return redirect('/loginDinas')->with('failed', 'Username atau Password Salah!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('status', 'You have been logged out successfully.');
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
    public function edit()
    {
        $id = Auth::user()->id;
        $currentuser = User::find($id);

        return view('dinas.editProfilDinas', compact('currentuser'));
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
        return redirect('/profilDinas')->with('success', 'Profil Anda Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
    }
}
