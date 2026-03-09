<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserMongo;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {

        UserMongo::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'gender' => $request->gender,
            'height' => $request->height,
            'weight' => $request->weight,
            'password' => Hash::make($request->password),
            'role' => 'user'
        ]);

        return redirect()->route('login')->with('success','Registrasi berhasil');
    }
}
