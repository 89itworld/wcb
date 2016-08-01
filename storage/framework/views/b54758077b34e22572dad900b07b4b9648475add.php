        <!-- Main Content -->
<?php $__env->startSection('content'); ?>
    <h2>Please Enter Your Admin Email</h2><br>
    <form action="<?php echo e(url('/password/email')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <input type="text" name="email" placeholder="Email"  value="<?php echo e(old('email')); ?>" required>
        <input type="submit" name="submit" class="login loginmodal-submit" value="Send mail">
    </form>
    <span class="pull-right">
        <?php echo Html::link('/admin','Back'); ?></span>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminLogin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>