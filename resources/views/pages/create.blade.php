@extends('layout.mahasiswa')

@section('title', 'create')

@section('content')

    <div class="col-4">
        <a class="btn btn-primary" href="/mahasiswa">
            kembali
        </a>
        <form action="/mahasiswa/store" method="post">
            @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" name="jurusan" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary btn-block my-2 px-3 ">
            Tambahkan
        </button>
        </form>
    </div>
@endsection
