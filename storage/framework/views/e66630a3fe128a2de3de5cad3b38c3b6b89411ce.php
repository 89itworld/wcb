<?php $__env->startSection('content'); ?>
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
						<?php echo Form::open(['url' => 'user_login', 'method' => 'post', 'role' => 'form', 'class' => '']); ?>


						<?php echo Form::text('username','', ['class' => '','placeholder' => 'User Name']); ?>

						<span class="error"><?php echo $errors->first('username'); ?></span>

						<?php echo Form::password('password',['class' => '','placeholder' => 'Password']); ?>

						<div class="error"><?php echo e($errors->first('password')); ?></div>
						<?php if(Session::get('alert-fail')): ?>
							<?php echo $__env->make('partials/error', ['type' => 'danger', 'message' => session('alert-fail')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<?php endif; ?>
						<?php echo Form::submit('Login',"", ['class' => '','placeholder' => '']); ?>

						<?php echo Form::close(); ?>


						<a href="" style="margin-top:5px">Forgot your password?</a><br />
						<a href="" class="newuser">New User Signup Here</a>
					</div> <!-- logform -->
				</div> <!-- loginBlk -->

			</div> <!-- indetail -->
		</div> <!-- container -->
	</div> <!-- innerPage -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>