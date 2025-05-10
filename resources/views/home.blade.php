@extends('layouts.main')
@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <h3>selamat datang {{Auth::user()->nama}}</h3>
                <p>di praktikum web 2 UNISKA MAB</p>
                <a href="" class="btn btn-primary"> buat postingan baru</a>
            </div>
        </div>
    </div>
@endsection