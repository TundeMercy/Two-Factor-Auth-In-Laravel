@extends('template.main')

@section('content')

    @if(! auth()->user()->two_factor_secret)
        <p>Please enable Two Factor Authentication to proceed</p>
        <form method="POST" action="{{ url('user/two-factor-authentication') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Enable Two Factor Auth</button>
        </form>
    @elseif(session('status') == 'two-factor-authentication-enabled')
        <p>You just enabled two factor authentication, please scan the following QR Code below and then click on logout to re-authenticate</p>
        {!! auth()->user()->twoFactorQrCodeSvg() !!}
    @else
        <h5>Welcome {{ auth()->user()->name }}</h5>

        <div class="card">
            <div class="card-body">Dashboard</div>
        </div>
    @endif
@endsection
