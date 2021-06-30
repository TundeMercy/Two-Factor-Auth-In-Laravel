@extends('template.main')

@section('content')
    <h4>Enter your 2F-Authentication Code</h4>
    <form method="POST" action="{{ url('/two-factor-challenge') }}">
        @csrf
        <div class="mb-3">
            <label for="code" class="form-label">Password</label>
            <input type="password" name="code" class="form-control" id="code">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
