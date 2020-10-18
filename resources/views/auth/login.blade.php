@extends('layouts.app')

@section('content')

	<div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
      <div class="card-body">
      <h4 class="card-title mb-4">Sign in</h4>
      <form method="POST" action="{{ route('login') }}">
        @csrf
          <div class="form-group">

             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Username" required autocomplete="email" autofocus>
          </div> <!-- form-group// -->
          @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          <div class="form-group">

            <input id="password" type="password"  placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          </div> <!-- form-group// -->
          @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
           @enderror
          <div class="form-group">



            @if (Route::has('password.request'))
            <a class="float-right" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif


            <label class="float-left custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked=""> <div class="custom-control-label">  {{ __('Remember Me') }}</div> </label>
          </div> <!-- form-group form-check .// -->
          <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block"> {{ __('Login') }}</button>
          </div> <!-- form-group// -->
      </form>
      </div> <!-- card-body.// -->
    </div> <!-- card .// -->

     <p class="text-center mt-4">Don't have account? <a href="{{ route('register') }}">Sign up</a></p>
     <br><br>
@endsection
