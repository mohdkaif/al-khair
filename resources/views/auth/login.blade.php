@extends('layouts.app')

@section('content')
<!-- BEGIN BODY -->
<body class="page-md login">
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="{{ url('/') }}">
		<!-- <img src="../../assets/admin/layout4/img/logo-big.png" alt=""/> -->
		<h1>Food Delivery</h1>
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="{{ route('login') }}" aria-label="{{ __('Login') }}" method="POST">
		@csrf
		<h3 class="form-title">Login to your account</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
			Enter any username and password. </span>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">{{ __('E-Mail Address') }}</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input id="email" type="email" class="form-control placeholder-no-fix{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" autocomplete="off" placeholder="Email" required autofocus>
				@if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" autocomplete="off" placeholder="Password" name="password" id="password" required/>
				@if ($errors->has('password'))
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $errors->first('password') }}</strong>
	                </span>
	            @endif
			</div>
		</div>
		<div class="form-actions">
			<label class="checkbox">
			<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me </label>
			<button type="submit" class="btn blue pull-right">
			Login <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
		<div class="login-options">
			<h4>Or login with</h4>
			<ul class="social-icons">
				<li>
					<a class="facebook" data-original-title="facebook" href="javascript:;">
					</a>
				</li>
				<li>
					<a class="twitter" data-original-title="Twitter" href="javascript:;">
					</a>
				</li>
				<li>
					<a class="googleplus" data-original-title="Goole Plus" href="javascript:;">
					</a>
				</li>
				<li>
					<a class="linkedin" data-original-title="Linkedin" href="javascript:;">
					</a>
				</li>
			</ul>
		</div>
		<div class="forget-password">
			<a href="{{ route('password.request') }}" class="btn btn-link">Forgot your password ?</a>
			
		</div>
		<!-- <div class="create-account">
			<p>
				 Don't have an account yet ?&nbsp; <a href="javascript:;" id="register-btn">
				Create an account </a>
			</p>
		</div> -->
	</form>
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM -->
	<form class="forget-form" action="index.html" method="post">
		<h3>Forget Password ?</h3>
		<p>
			 Enter your e-mail address below to reset your password.
		</p>
		<div class="form-group">
			<div class="input-icon">
				<i class="fa fa-envelope"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
			</div>
		</div>
		<div class="form-actions">
			<button type="button" id="back-btn" class="btn">
			<i class="m-icon-swapleft"></i> Back </button>
			<button type="submit" class="btn blue pull-right">
			Submit <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
	</form>
	<!-- END FORGOT PASSWORD FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	 2018 &copy; fooddelivery - A venture of lucknow.
</div>
<!-- END COPYRIGHT -->
@endsection