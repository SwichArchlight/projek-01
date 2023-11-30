@extends('adminlte::page')

@section('title','dashboard')

@section('content_header')
<h1>Change Password</h1>    
@endsection

@section('content')
<p>Lupa Password yh</p>    
    <div class="card">
        <div class="card-body">      
            <form method="post">
                <label for="" class="form-label">Username</label>
                <input type="text" class="form-control" name="name" placeholder="Username">
                <label for="" class="form-label">Password</label>
                <input type="password" class="form-control" name="pass" placeholder="Password">
                <button type="button" class="btn btn-success mt-4">Submit</button>
          </form>  
              </div>
    </div>

    
@stop
    
