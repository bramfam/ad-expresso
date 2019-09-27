@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
   {{--  <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group row">
            <label for="last_name" class="col-md-4 col-form-label text-md-right">First Name</label>

            <div class="col-md-6">
                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" last_name="last_name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Last Name</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form> --}}

    <form action="/register" method="POST" class="bg-white p-4 col-md-offset-4">

        @csrf
        
        <h3 class="mb-2 uppercase">Create a Free account</h3>
        <div class="form-group">
            <!-- <label for="exampleInputEmail1">Email address</label> -->
            <input type="email" class="form-control p-4" id="inputEmail" aria-describedby="emailHelp" placeholder="Email Address">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.
            </small>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>


        <div class="form-group">
            <input type="password" class="form-control p-4" id="inputPassword" placeholder="Password">
        </div>  
        <div class="form-group">
            <input type="password" class="form-control p-4" id="inputPassword2" name="confirm_password" placeholder="Confirm Password">
        </div>
        <div class="form-group">
            <input type="text" class="form-control p-4" id="firstName" aria-describedby="emailHelp" placeholder="First Name">
        </div>
        <div class="form-group">
            <input type="text" name="last_name" class="form-control p-4" id="lastName" aria-describedby="emailHelp" placeholder="Last Name">
        </div>
        <div class="form-group">
            <input type="text" name="company" class="form-control p-4" id="lastName" aria-describedby="emailHelp" placeholder="Company">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">


            <label for="country">Country</label>
            <select class="form-control" id="country_id">
                @foreach ($countries as $country)
                <option value="{{  $country->id }}">{{  $country->value }}
                </option>
                @endforeach
            </select>           
        </div>
        <button type="submit" class="btn btn-lg btn-block  btn-primary">Submit
        </button>
    </form>
</div>
</div>
</div>
</div>

</div>

@endsection
