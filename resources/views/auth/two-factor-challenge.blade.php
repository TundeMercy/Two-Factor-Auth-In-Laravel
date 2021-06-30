@extends('template.main')

@section('content')
    <h4>Enter your 2F-Authentication Code</h4>
    <div class="centered-container">
        <form method="POST" action="{{ url('/two-factor-challenge') }}">
            @csrf
            <div class="mb-3">
                <label for="code" class="form-label">Auth Code</label>
                <input type="password" name="code" class="form-control @error('password') @enderror" id="code">
                @error('password')
                {{ $message }}
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
