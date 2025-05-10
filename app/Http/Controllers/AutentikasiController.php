<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AutentikasiController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        $input = $request->all();
        $input['password']  = Hash::make($request->password);
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/users'), $filename);
            $input['foto'] =  $filename;
        }
        User::create($input);

        return redirect()->route('index');
    }

    public function loginPost()
    {
        $credentials = request()->only('username', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->route('home');
        }

        return redirect()->back()->with(
            'error',
            'Username atau password salah'
        );
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('index');
    }

}
