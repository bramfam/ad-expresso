@extends('layouts.app')

@section('title', 'Google Login')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card-body">
        <login inline-template> 
          <form action="{{ route('facebookLogin') }}" method="POST" class="bg-white p-4 col-md-offset-4">
           @csrf

           <h3 class="mb-4 uppercase">Login to your Facebook</h3>

           <div class="form-group">
             <!-- <label for="exampleInputEmail1">Email address</label> -->
             <input type="email" class="form-control p-4" id="inputEmail" aria-describedby="emailHelp" placeholder="Email Address">

             @error('email')
             <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
             </span>
             @enderror
           </div>

           <div class="form-group mb-4">
             <input type="password" class="form-control p-4" id="inputPassword" placeholder="Password">
           </div>   

           <div class="form-group mb-4">
             <div class="form-check">
               <input class="p-2 form-check-input" type="checkbox" id="autoSizingCheck2">
               <label class="form-check-label" for="autoSizingCheck2">
                 Remember me
               </label>
             </div>
           </div>
           
           <button type="submit" class="btn btn-lg btn-block text-2xl btn-success ">Login now 
           </button>  
           <button @click="this.$modal.show('')" type="submit" class="btn btn-lg btn-block text-2xl btn-primary">Facebook Login
           </button>
         </form>
       </login>
     </div>
   </div>
 </div>
</div>
</div>
@endsection
