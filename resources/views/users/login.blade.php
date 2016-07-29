@extends('layouts.home')
@section('content')
	<div id="innerPage">
		<div class="container">
			<div class="row indetail">
				<div class="logRight">
					<h3>BEST CASHBACK & COUPONS SITE</h3>
					<div class="row signBLK">

						<div class="sign_left">
							<h4 class="signheding">STEPS TO GET CASHBACK</h4>
							<ul class="shdlist2">
								<li>Login & Browse our Retailer & Product Offers</li>
								<li>Click & Shop</li>
								<li>Cashback gets added</li>
								<li>Cashback gets Confirmed</li>
								<li>Transfer Cashback to Bank Account</li>
							</ul>
						</div> <!-- sign_right -->
					</div> <!-- row -->

				</div> <!-- logRight -->

				<div class="loginBlk floatR">
					<h3>Login & Start Earning</h3>
					<div class="row sociallogin">
						<a href="" class="facebook"><i class="fa fa-facebook"></i><b>Login With Facebook</b></a>
						<a href="" class=" google"><i class="fa fa-google"></i><b>Login With Google</b></a>
					</div> <!-- sociallogin -->
					<div class="row logmid">
						<h3>OR</h3>
						<label>Login With Whitecashback Account</label>
					</div> <!-- row -->
					<div class="row logform">
						{!! Form::open(['url' => 'user_login', 'method' => 'post', 'role' => 'form', 'class' => '']) !!}

						{!! Form::text('username','', ['class' => '','placeholder' => 'User Name']) !!}
						<span class="error">{!! $errors->first('username') !!}</span>

						{!! Form::password('password',['class' => '','placeholder' => 'Password']) !!}
						<div class="error">{{ $errors->first('password') }}</div>
						@if (Session::get('alert-fail'))
							@include('partials/error', ['type' => 'danger', 'message' => session('alert-fail')])
						@endif
						{!! Form::submit('Login',"", ['class' => '','placeholder' => '']) !!}
						{!! Form::close() !!}

						<a href="" style="margin-top:5px">Forgot your password?</a><br />
						<a href="" class="newuser">New User Signup Here</a>
					</div> <!-- logform -->
				</div> <!-- loginBlk -->

			</div> <!-- indetail -->
		</div> <!-- container -->
	</div> <!-- innerPage -->
@stop

