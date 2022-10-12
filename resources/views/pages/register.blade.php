@extends('layout.mahasiswa')

@section('title', 'create')

@section('content')

    <div class="col-4">
        <a class="btn btn-primary" href="/">
            kembali
        </a>

        <form action="{{ route('storeRegister') }}" method="post">
            @csrf
        <div class="form-floating">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
         </div>

        <div class="form-floating my-3">
            <input type="text" name="name" class="form-control
            @error('name')
                is-invalid
            @enderror"
            name="name" required value="{{ old('name') }}">
            <label for="name" class="form-label">name</label>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="email" class="form-control
            @error('email')
                is-invalid
            @enderror"
            name="email" required value="{{ old('email') }}">
            <label for="name" class="form-label">Email address</label>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control
            @error('password')
                is-invalid
            @enderror"
            name="password" required value="{{ old('password') }}">
            <label for="name" class="form-label">Password address</label>
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary btn-block my-2 px-3 ">
            Register
        </button>
        </form>
    </div>
@endsection
