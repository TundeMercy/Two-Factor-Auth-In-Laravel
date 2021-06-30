@extends('template.main')

@section('content')
    <h2>Login</h2>
    <div class="centered-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                       value="{{ old('email') }}">
                @error('email')
                {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                       id="password" value="{{ old('password') }}">
                @error('password')
                {{ $message }}
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
@endsection
