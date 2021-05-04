@extends('layout.auth-admin')
@section('form')

<form action="" method="post">

    @csrf
    <div class="white-panel">
       <div class="register-show show-log-panel">
					<h2>REGISTER</h2>
					<input type="text" name="email" placeholder="Email">
					<input type="text" name="full_name" placeholder="Enter full name">

					<input type="password" name="password" placeholder="Password">
					<button type="submit" value="">Register</button>
		</div>
    </div>
</form>	
@endsection