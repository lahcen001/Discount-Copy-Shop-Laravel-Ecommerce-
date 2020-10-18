@extends('layouts.app')

@section('content')


<div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
    <div class="card-body">
    <h4 class="card-title mb-4">Register</h4>
    <form method="POST" action="{{ route('register') }}">
      @csrf
        <div class="form-group">




           <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="name" autofocus>
        </div> <!-- form-group// -->
        @error('name')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
         </span>
          @enderror
        <div class="form-group">

          <input id="email" type="email"  placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

        </div> <!-- form-group// -->
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
         @enderror

         <div class="form-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

         </div> <!-- form-group// -->
         @error('password')
         <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
          </span>
           @enderror
           <div class="form-group">



            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"  placeholder="Password Confirmation">

         </div> <!-- form-group// -->
         @error('password')
         <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
          </span>
           @enderror


        <div class="form-group">







        </div> <!-- form-group form-check .// -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> {{ __('Register') }}</button>
        </div> <!-- form-group// -->
    </form>
    </div> <!-- card-body.// -->
  </div> <!-- card .// -->


   <br><br>







@endsection
