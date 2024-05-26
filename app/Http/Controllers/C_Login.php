<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class C_Login extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    
    public function farmer()
    {
        $roles_id = 2;
        return view('V_Login', compact('roles_id'));
    }

    public function government()
    {
        $roles_id = 3;
        return view('V_Login', compact('roles_id'));
    }

    public function admin()
    {
        $roles_id = 1;
        return view('V_Login', compact('roles_id'));
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

    public function login(Request $request)
    {
        $message = [
            'required_if'  => 'kode akses wajib diisi.',
        ];

        $request->validate([
            'email'=> 'required|email',
            'password'=> 'required|min:8',
            'kode_akses'=> 'required_if:roles_id,==,3',
            'roles_id'=>'required',
        ], $message);

        $credentials = [
            'email'=> $request->email,
            'password'=> $request->password,
            'kode_akses'=> $request->kode_akses,
            'roles_id'=> $request->roles_id,
        ];

        if (Auth::attempt($credentials)) {
            return redirect('/subsidiPakan');
        } 
        else {
            return redirect('/loginRole')->with('failed', 'Username atau Password Salah!');
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
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
    }
}
