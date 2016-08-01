<?php $__env->startSection('content'); ?>
    <link href="<?php echo e(captcha_layout_stylesheet_url()); ?>" type="text/css" rel="stylesheet">
<div id="innerPage">
    <div class="container">
        <div class="row indetail">
            <div class="logRight">
                <h3>BEST CASHBACK & COUPONS SITE</h3>
                <div class="row signBLK">
                    <div class="sign_left">
                        <h4 class="signheding">WHY JOIN CASHBACK SITE</h4>
                        <ul class="shdlist">
                            <li>FREE to Join</li>
                            <li>Rs.10.00 bonus when you sign up</li>
                            <li>Refer your friends earn Rs.5.00 each</li>
                            <li>Earn up to 35% Cashback offers Coupon codes to help you save more Shop online at your favorite stores</li>
                            <li>Easy transfer of cash into your bank account</li>
                        </ul>
                    </div> <!-- sign_left -->

                </div> <!-- row -->
                <div class="row signlogo">
                    <img src="images/shoplogos/snapdeal.jpg" alt="" />
                    <img src="images/shoplogos/shopclues.jpg" alt="" />
                    <img src="images/shoplogos/myntra.jpg" alt="" />
                    <img src="images/shoplogos/ebay.jpg" alt="" />
                    <img src="images/shoplogos/flipkart.jpg" alt="" />
                    <img src="images/shoplogos/shopclues.jpg" alt="" />
                    <img src="images/shoplogos/amazon.jpg" alt="" />
                </div>
            </div> <!-- logRight -->

            <div class="loginBlk floatR">
                <h3>Join Now For Signup Bonus</h3>
                <div class="row sociallogin">
                    <a href="" class="facebook"><i class="fa fa-facebook"></i><b>Join With Facebook</b></a>
                    <a href="" class=" google"><i class="fa fa-google"></i><b>Join With Google</b></a>
                </div> <!-- sociallogin -->
                <div class="row logmid">
                    <h3>OR</h3>
                    <label>Register To Whitecashback Account</label>
                </div> <!-- row -->
                <p>
                </p>
                <div class="row logform">

                    <?php echo Form::open(['url' => 'registration', 'method' => 'post', 'role' => 'form', 'class' => '']); ?>

                    <?php echo Form::text('username',"", ['placeholder' => 'Fullname']); ?>

                    <span class="error"><?php echo $errors->first('username'); ?></span>


                    <?php echo Form::email('email',"", ['class' => '','placeholder' => 'Email']); ?>

                    <span class="error"><?php echo e($errors->first('email')); ?></span>

                    <?php echo Form::password('password',['class' => '','placeholder' => 'Password']); ?>

                    <span class="error"><?php echo e($errors->first('password')); ?></span>

                    <?php echo Form::password('password_confirmation',['class' => '','placeholder' => 'Password']); ?>


                    <?php echo captcha_image_html('SignUpCaptcha'); ?>

                    <?php echo Form::text('CaptchaCode',"", ['placeholder' => 'Captcha','CaptchaCode']); ?>

                    <span class="error"><?php echo e($errors->first('captcha')); ?></span>

                    <div class="accpter">
                        <?php echo Form::checkbox('terms', 1, null, ['class' => 'field']); ?>

                        <label>I agree with the <a href="">Terms & Conditions</a></label>
                        <div class="error"><?php echo e($errors->first('terms')); ?></div>

                    </div>
                    <?php echo Form::submit('Join For Free',"", ['class' => '','placeholder' => '']); ?>

                    <?php echo Form::close(); ?>

                  <?php if(!empty($message)): ?>
                      <?php echo $message; ?>

                    <?php endif; ?>
                  <?php /*  <form action="" method="post" autocomplete="off">
                        <input type="text" name="username" placeholder="Fullname"   />
                        <input type="text" name="username" placeholder="Email"   />
                        <input type="password" name="username" placeholder="Password"   />
                        <input type="text" name="captcha" placeholder="Enter Captcha" />
                        <div class="accpter">
                            <input type="checkbox" name="terms" />
                            <label>I agree with the <a href="">Terms & Conditions</a></label>
                        </div> <!-- accpter -->
                        <input type="submit" value="JOIN FOR FREE" /><br />
                    </form>*/ ?>
                </div> <!-- logform -->
            </div> <!-- loginBlk -->

        </div> <!-- indetail -->
    </div> <!-- container -->
</div> <!-- innerPage -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>