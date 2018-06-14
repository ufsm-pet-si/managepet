@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div>
            <div class="card">
                <div class="card-content">
                    <span class="card-title">{{ __('Register') }}</span>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="input-field">
                                <input id="name" type="text" class="validate{{ $errors->has('name') ? ' invalid' : '' }}" name="name" value="{{ old('name') }}" required>
                                <label for="name">{{ __('Name') }}</label>
                                @if ($errors->has('name'))
                                    <span class="red-text">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
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
                                <input id="password" type="password" class="validate{{ $errors->has('password') ? ' invalid' : '' }}" name="password" required>
                                <label for="password">{{ __('Password') }}</label>
                                @if ($errors->has('password'))
                                    <span class="red-text">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field">
                                <input id="password-confirm" type="password" class="validate" name="password_confirmation" required>
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field">
                                <button class="btn waves-effect waves-light" type="submit">{{ __('Register') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
