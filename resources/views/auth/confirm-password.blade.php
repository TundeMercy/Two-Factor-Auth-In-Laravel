@extends('template.main')

@section('content')
    <h2>Confirm Your Password</h2>
    <div class="centered-container">
        <form method="POST" action="{{ url('user/confirm-password') }}">
            @csrf
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                       id="password">
                @error('password')
                {{ $message }}
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
