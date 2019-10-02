@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                    <input type="text" name="company_name" class="form-control p-4" id="lastName" aria-describedby="emailHelp" placeholder="Company">
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
