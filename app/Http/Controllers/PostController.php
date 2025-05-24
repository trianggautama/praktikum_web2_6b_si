<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required'
        ]);
        
        $input              = $request->all();
        $input['user_id']   = auth()->user()->id;

        Post::create($input);

        return redirect()->route('home')->with('success','data berhasil disimpan');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $post = Post::find($id);
        $post->update($input);

        return redirect()->route('home')->with('success','data berhasil diupdate');
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('home')->with('success','data berhasil dihapus');
    }
}
