@extends('layout.mahasiswa')

@section('title', 'Edit')

@section('content')

    <div class="col-4">
        <a class="btn btn-primary" href="/mahasiswa">
            kembali
        </a>
        @foreach ($mahasiswa as $mhs)
        <form action="/mahasiswa/update" method="post">
            @csrf
        <input type="hidden" name="id" value="{{ $mhs->id }}">
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $mhs->nama }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $mhs->email }}">
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" value="{{ $mhs->jurusan }}">
        </div>
        <button type="submit" class="btn btn-primary btn-block my-2 px-3 ">
            Edit
        </button>
        </form>
        @endforeach
    </div>
@endsection
