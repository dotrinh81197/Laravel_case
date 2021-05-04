@extends('layout.auth-admin')
@section('auth-error')
<div class="card-header">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif       
</div>	
			
@endsection
@section('auth-body')
<div class="card-body">
    <form method="POST">
@csrf
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="email" name="email">
            
        </div>
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="password" name="password">
        </div>
        <div class="row align-items-center remember">
            <input type="checkbox">Remember Me
        </div>
        <div class="form-group">
            <input type="submit" value="Login" class="btn float-right login_btn">
        </div>
       
    </form>
</div>

@endsection

  