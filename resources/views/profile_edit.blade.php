@extends('layouts.main')
@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md">
                        <h3>Halaman Edit Profile</h3>
                    </div>
                    <div class="col-md">
                        <div class="float-end">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('profile.update',$user->id)}}" method="post"  enctype="multipart/form-data">
                @csrf
                @method('put')
                    <div class="mt-3">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama" 
                            id="nama" placeholder="Masukkan nama" value="{{$user->nama}}">
                             @error('nama')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="mt-3">
                        <label for="">Nomor Telepon</label>
                        <input type="text" class="form-control" name="nomor_telepon" 
                            id="nomor_telepon" placeholder="Masukkan nomor telepon" value="{{$user->nomor_telepon}}">
                             @error('nomor_telepon')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="mt-3">
                        <label for="">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                            <option value="">--Pilih Jenis Kelamin--</option>
                            <option value="Laki-laki" {{$user->jenis_kelamin == 'Laki-laki' ? 'selected' : ''}}>Laki-laki</option>
                            <option value="Perempuan" {{$user->jenis_kelamin == 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
                        </select>
                         @error('jenis_kelamin')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="">Alamat (optional)</label>
                        <textarea  class="form-control" name="alamat" 
                            id="alamat" placeholder="Masukkan Alamat">{{$user->alamat}}</textarea>
                        @error('alamat')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-2">
                            foto sebelumnya
                            <img src="{{url('uploads/users/'.$user->foto)}}" alt="" width="100%">
                        </div>
                        <div class="col-md">
                            <div class="mt-3">
                                <label for="">Foto (optional)</label>
                                <input type="file" class="form-control" name="foto" id="foto">
                                <small>isi jika ingin merubah foto</small>
                                 @error('foto')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="float-end">
                        <a href="{{route('profile')}}" class="mt-3 btn btn-light"> Kembali</a>
                        <button type="submit" class="mt-3 btn btn-primary"> Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection