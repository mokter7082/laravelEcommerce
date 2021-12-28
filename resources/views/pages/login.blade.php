@extends('welcome')
@section('content')
<div class="col-sm-9 padding-right">
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						@if(Session::has('message'))
						<p class="alert alert-danger">{{ Session::get('message') }}</p>
						@endif
						<h2>Login to your account</h2>
						<form  method="post" action="{{route('log-payment')}}">
							@csrf
							<input type="email" name="email"  placeholder="Email" />
							<input type="password" name="password" placeholder="Password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-5">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="{{ route('customar-save') }}" method="post">
						@csrf
							<input type="text" name="customar_name" placeholder="Full Name"/>
							<input type="email" name="customar_email" placeholder="Email Address"/>
							<input type="password" name="customar_pass" placeholder="Password"/>
							<input type="number" name="customar_mobail_num" placeholder="Contact Number"/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><
</div>
@endsection
