@extends('layouts.main')
@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md">
                        <h3>Halaman profile</h3>
                    </div>
                    <div class="col-md">
                        <div class="float-end">
                            <a href="{{route('profile.edit', Auth::user()->id)}}" class="btn btn-primary"> Edit data</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{url('uploads/users/'.Auth::user()->foto)}}" alt="" class="img-thumbnail">
                    </div>
                    <div class="col-md">
                        <table class="table table-striped">
                            <tr>
                                <td width="20%">Nama User</td>
                                <td width="2%">:</td>
                                <td>{{Auth::user()->nama}}</td>
                            </tr>
                            <tr>
                                <td width="20%">Nomor Telepon</td>
                                <td width="2%">:</td>
                                <td>{{Auth::user()->nomor_telepon}}</td>
                            </tr>
                            <tr>
                                <td width="20%">Jenis Kelamin</td>
                                <td width="2%">:</td>
                                <td>{{Auth::user()->jenis_kelamin}}</td>
                            </tr>
                            <tr>
                                <td width="20%">alamat</td>
                                <td width="2%">:</td>
                                <td>{{Auth::user()->alamat}}</td>
                            </tr>
                            <tr>
                                <td width="20%">username</td>
                                <td width="2%">:</td>
                                <td>{{Auth::user()->username}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection