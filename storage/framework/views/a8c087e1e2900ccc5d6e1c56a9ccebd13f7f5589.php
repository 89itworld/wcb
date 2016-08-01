<?php $__env->startSection('content'); ?>
    <div class="site_logo">
        <?php echo Html::image('public/images/logo.jpg','altText',['width'=>'180']); ?>

        <?php /*<img src="http://103.205.244.10/cs/public/images/LOGO.png" alt="SITE LOGO" width="180">*/ ?>
    </div>
    <h1>Login to Your Account</h1><br>
    <form action="<?php echo e(url('/admin')); ?>" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <?php echo e(csrf_field()); ?>

        <input type="submit" name="submit" class="login loginmodal-submit" value="Login">
    </form>

    <?php if( $msg ): ?>
        <center>
            <p style="color: crimson"><?php echo e($msg); ?></p>
        </center>
    <?php endif; ?>

    <span class="pull-right"><a href="<?php echo e(url('admin/password/reset')); ?>">forgot password</a></span>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminLogin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>