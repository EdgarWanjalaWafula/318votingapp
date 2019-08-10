@extends('layouts.auth')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <h4>Password change</h4>
        <p>Please enter your email to reset your password. Check your email for the activation link.</p>
        <div class="form-group">
                <input placeholder="E-Mail Address" id="email" type="email" class="form-control rounded-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="form-group">
            <button type="submit" class="btn auth-submit w-75 rounded-0 text-white">
                {{ __('Send Password Reset Link') }}
            </button>
        </div>
    </form>
@endsection
