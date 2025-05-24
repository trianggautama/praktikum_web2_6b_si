@extends('layouts.main')
@section('content')
    <div class="container mt-3">
        <div class="card bg-primary text-light">
            <div class="card-body">
                <h3>selamat datang {{Auth::user()->nama}}</h3>
                <p>di praktikum web 2 UNISKA MAB</p>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header">
                Tambah Data Postingan
            </div>
            <div class="card-body">
                <form action="{{route('post.store')}}" method="post">
                    @csrf
                    <input type="text" name="judul" id="" class="form-control" placeholder="judul postingan">
                    @error('judul')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <br>
                    <textarea name="isi" id="" rows="4" class="form-control" placeholder="isi postingan"></textarea>
                     @error('isi')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <br>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
         <hr>
         @foreach($posts as $post)
            <div class="card mt-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md">
                            {{$post->user->nama}} <br>
                            {{Carbon\carbon::parse($post->created_at)->diffForHumans()}}
                        </div>
                        <div class="col-md">
                            <div class="float-end">
                                @if ($post->user->id == Auth::user()->id)
                                    <form action="{{route('post.delete', $post->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('post.edit', $post->id)}}" class="btn btn-primary">Edit</a>
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="card-body">
                    <h3>{{$post->judul}}</h3>
                    <p>{{$post->isi}}</p>
                </div>
            </div>
         @endforeach
    </div>
@endsection