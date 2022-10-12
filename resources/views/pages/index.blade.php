@extends('layout.mahasiswa')

@section('title','mahasiswa')

@section('content')
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="btn btn-primary px-2">
            Logout
        </button>
    </form>
    <div class="col-4">
        <a href="/mahasiswa/create" class="btn btn-primary px-2 mt-4">
            + Tambah data
        </a>
    </div>

      <div class="table-responsive mt-2">
            <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th>ID</th>
                        <th>Nama</th>
                        <th>email</th>
                        <th>Jurusan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="">
                    @foreach ($mahasiswa as $mhs)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->email }}</td>
                        <td>{{ $mhs->jurusan }}</td>
                        <td>
                            <a href="/mahasiswa/edit/{{ $mhs->id }}">Edit</a>
                                |
                            <a href="/mahasiswa/hapus/{{ $mhs->id }}">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
@endsection

