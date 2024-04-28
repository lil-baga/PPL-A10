<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
        $credentials = $request->validate([
            'email'=> 'required|email',
            'password'=> 'required',
            'kode_akses'=> 'required',
        ]);

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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
    }
}
