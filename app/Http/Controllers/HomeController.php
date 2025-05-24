<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    // menampilkan halaman utama
    public function index()
    {
        return view('welcome');
    }

    // menampilkan halaman home
    public function home()
    {
        $posts =  Post::all();
        return view('home', compact('posts'));
    }
        
    // menampilkan halaman profile
    public function profile()
    {
        return view('profile');
    }

    public function profileEdit($id)
    {
        $user = User::find($id);
        return view('profile_edit', compact('user'));
    }

    public function profileUpdate(Request $request, $id)
    {
        $input = $request->all();
        $user = User::find($id);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/users'), $filename);
            $input['foto'] =  $filename;
        }
        $user->update($input);
        
        return redirect()->route('profile')->with('success','data berhasil diupdate');
    }
}
