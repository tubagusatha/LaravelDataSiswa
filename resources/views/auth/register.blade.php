@extends('layouts.app')

@section('title', 'Register')

@section('content')


<div class="row p-5">
    <div class="col-md-4 mx-auto">
    <div class="card">
  <div class="card-header text-header">
    Register
  </div>
  <div class="card-body">
  <form method="POST" action="{{ url('register') }}">
    @csrf

    @if(session()->has('error_massage'))
     <div class="alert alert-danger">{{ session()->get('error_massage') }}</div>
    @endif
    <div class="mb-3">
    <label for="name" class="form-label">User Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
    @if($errors->has('name'))
      <span class="text-danger">{{ $errors->first('name') }}</span>
    @endif
  </div>
  


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ old('name') }}">
    @if($errors->has('email'))
    <span class="text-danger">{{ $errors->first('email') }}</span>
  @endif

  </div>  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1 " name="password">
  </div>
  @if($errors->has('password'))
    <span class="text-danger">{{ $errors->first('password') }}</span>
  @endif

  <div class="mb-3">
    <label for="password_confirmation" class="form-label">Password Confirmation</label>
    <input type="password" class="form-control" id="password_confirmation " name="password_confirmation">
  </div>

  <div class="text-center">
      <button type="submit" class="btn btn-primary">Register</button>
  </div>
    </form>
  </div>
</div>
 
    </div>
</div>



@endsection