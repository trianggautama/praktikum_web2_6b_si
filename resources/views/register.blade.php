@extends('layouts.main')
@section('content')
    <div class="container mt-3">
        <div class="text-center">
            <h2>Halaman Register</h2>
            @forelse ($errors->all() as $error)
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
            @endforeach
        </div>
        <form action="{{route('register.post')}}" method="post"  enctype="multipart/form-data">
        @csrf
            <div class="mt-3">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="nama" 
                    id="nama" placeholder="Masukkan nama">
            </div>
            <div class="mt-3">
                <label for="">Nomor Telepon</label>
                <input type="text" class="form-control" name="nomor_telepon" 
                    id="nomor_telepon" placeholder="Masukkan nomor telepon">
            </div>
            <div class="mt-3">
                <label for="">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                    <option value="">--Pilih Jenis Kelamin--</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mt-3">
                <label for="">Alamat (optional)</label>
                <textarea  class="form-control" name="alamat" 
                    id="alamat" placeholder="Masukkan Alamat"></textarea>
            </div>
            <div class="mt-3">
                <label for="">Foto (optional)</label>
                <input type="file" class="form-control" name="foto" id="foto">
            </div>
            <div class="mt-3">
                <label for="">username</label>
                <input type="text" class="form-control" name="username" 
                    id="username" placeholder="Masukkan username">
            </div>
            <div class="mt-3">
                <label for="">password</label>
                <input type="text" class="form-control" name="password" 
                    id="password" placeholder="Masukkan password">
            </div>
            <a href="{{route('index')}}">Sudah punya akun ? login sekarang.</a> 
            <br>
            <button type="submit" class="mt-3 btn btn-primary"> Register</button>
        </form>
    </div>
@endsection