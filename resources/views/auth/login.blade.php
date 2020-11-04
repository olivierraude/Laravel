@extends('template')

@section('content')

            <div class="card">
                <h3 class=" col l6">{{ __('Login') }}</h3>

                <div class="col l6">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class=" col l6">
                            <label for="email" class="col l6 col-form-label left-align">{{ __('E-Mail Address') }}</label>

                            <div class="col l6">
                                <input id="email" type="email" class="col l6 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" col l6">
                            <label for="password" class="col l6 col-form-label left-align">{{ __('Password') }}</label>

                            <div class="col l6">
                                <input id="password" type="password" class="col l6 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="center-align">
                            <div class="col-md-6 offset-md-4">
                                <!-- <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div> -->
                            </div>
                            <div class="col l6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>

                            <a class="btn-link" href="{{ route('register') }}">
                                {{ __('S\'enregistrer') }}
                            </a>
                        </div>

                    </form>
                </div>
            </div>
            

@endsection
