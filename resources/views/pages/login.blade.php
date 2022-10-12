@extends('layout.mahasiswa')

@section('title', 'create')

@section('content')

    <div class="col-4">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if (session('loginErrors'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginErrors') }}
            </div>
        @endif

        <form action="{{ route('storeLogin') }}" method="post">
            @csrf
        <div class="form-floating">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
            Login
        </button>
    </form>
    <button type="submit" class="btn btn-secondary btn-block my-2 px-3">
        <a href="{{ route('register') }}" class="text-white" style="text-decoration: none" >
            Register
        </a>
    </button>
    </div>
@endsection
