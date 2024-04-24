<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
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
        return view('signup', compact('roles_id'));
    }

    public function government()
    {
        $roles_id = 3;
        return view('signup', compact('roles_id'));
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
    public function registerFarmer(Request $request)
    {
        $validatedRegister = $request->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:8',
            'address'=> 'required',
            'phone_number'=> 'required|min:12',
        ]);

        $validatedRegister['password'] = bcrypt($validatedRegister['password']);
        $validatedRegister['roles_id'] = '2';
        User::create($validatedRegister);

        $roles_id = 2;
        return view('/login', compact('roles_id'));
    }

    public function registerGovernment(Request $request)
    {
        $accessCode = mt_rand(1000, 9999);

        $validatedRegister = $request->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:8',
            'address'=> 'required',
            'phone_number'=> 'required|min:12',
            'access_code',
            'roles_id',

        ]);

        $validatedRegister['password'] = bcrypt($validatedRegister['password']);
        $validatedRegister['access_code'] = $accessCode;
        $validatedRegister['roles_id'] = '3';

        User::create($validatedRegister);

        $roles_id = 3;
        return view('/login', compact('roles_id'));
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
