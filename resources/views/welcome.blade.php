@extends('layouts.main')
@section('content')
    <div class="container mt-3">
        <div class="text-center">
            <h2>Halaman Login</h2>
        </div>
        <form action="{{route('login.post')}}" method="post"  enctype="multipart/form-data">
        @csrf
            <div class="mt-3">
                <label for="">username</label>
                <input type="text" class="form-control" name="username" 
                    id="username" placeholder="Masukkan username">
            </div>
            <div class="mt-3">
                <label for="">password</label>
                <input type="password" class="form-control" name="password" 
                    id="password" placeholder="Masukkan password">
            </div>
            <a href="{{route('register')}}">Belum punya akun ? register sekarang.</a> 
            <br>
            <button type="submit" class="mt-3 btn btn-primary"> Login</button>
        </form>
    </div>
@endsection