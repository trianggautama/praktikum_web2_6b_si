@extends('layouts.main')
@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <h3>Halamana Edit  Postingan</h3>
                       <div class="card mt-4">
            <div class="card-header">
                Edit Data Postingan
            </div>
            <div class="card-body">
                <form action="{{route('post.update', $post->id)}}" method="post">
                    @csrf
                    @method('put')
                    <input type="text" name="judul" id="" class="form-control" placeholder="judul postingan" value="{{$post->judul}}">
                    <br>
                    <textarea name="isi" id="" rows="4" class="form-control" placeholder="isi postingan">{{$post->isi}}</textarea>
                    <br>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
            </div>
        </div>
    </div>
@endsection