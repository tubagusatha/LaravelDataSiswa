@extends('layouts.app')

@section('title', 'Test')


@section('content')

<div class="container p-3">

<div class="p-5 text-center">


    <svg class="bd-placeholder-img rounded-circle text-center" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
    
    <form  class="btn btn-primary" action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="profile_image">

    </form>


    <div class="row">
    <div class="col-md-4 mx-auto p-3">
    <div class="card text-center">
    <h3 class="fw-normal p-2">{{ Auth::user()->name }}</h3>
    <h4 class="fw-normal">{{ Auth::user()->email }}</h4>
    </div>
</div>
</div>
<a href="{{ url("logout")}}" class="btn btn-outline-dark p-2 me-4">Logout</a>
</div>
    
</div>
@endsection