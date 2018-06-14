@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div>
            <div class="card">
                <div class="card-content">
                    <span class="card-title">{{ __('Reset Password') }}</span>

                    @if (session('status'))
                        <div class="card-panel teal lighten-2 white-text">
                            {{ session('status') }}
                        </div>
                    @else
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="row">
                                <div class="input-field">
                                    <input id="email" type="email" class="validate{{ $errors->has('email') ? ' invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                    @if ($errors->has('email'))
                                        <span class="red-text">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field">
                                    <button class="btn waves-effect waves-light" type="submit">{{ __('Send Password Reset Link') }}</button>
                                </div>
                            </div>
                        </form>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
