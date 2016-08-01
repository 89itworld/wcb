<?php $__env->startSection('content'); ?>
<div id="innerPage">
    <div class="container">
        <div class="userpanel">
            <?php echo $__env->make('layouts/common/user_sidebar'  , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="user-content">
                <h3>My Profile</h3>
                <div class="prof-left">
                    <h4>Profile Information</h4>
                    <?php echo Form::open(['url'=>'updateUserInfo','method'=>'post']); ?>

                    <div class="prof-info">
                        <div class="prof-cell contForm">
                            <label>First Name</label>
                            <?php echo Form::text('fname',$user_data->fname,['id'=>'fname','placeholder'=>'First Name']); ?>

                            <span class="error"><?php echo $errors->first('fname'); ?></span>
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>Last Name</label>
                            <?php echo Form::text('lname',$user_data->lname,['id'=>'lname','placeholder'=>'Last Name']); ?>

                            <span class="error"><?php echo $errors->first('lname'); ?></span>
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>Email Address</label>
                            <?php echo Form::email('email',$user_data->email,['id'=>'email','placeholder'=>'Email']); ?>

                            <span class="error"><?php echo $errors->first('email'); ?></span>
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>User Name</label>
                            <?php echo Form::text('username',$user_data->username,['id'=>'username','placeholder'=>'Username']); ?>

                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>Address Line1</label>
                            <?php echo Form::text('address',$user_data->address,['id'=>'address','placeholder'=>'Address']); ?>

                            <span class="error"><?php echo $errors->first('address'); ?></span>
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>City</label>
                            <?php echo Form::text('city',$user_data->city,['id'=>'city','placeholder'=>'City']); ?>

                            <span class="error"><?php echo $errors->first('city'); ?></span>
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>State/Province</label>
                            <?php echo Form::text('state',$user_data->state,['id'=>'state','placeholder'=>'State']); ?>

                            <span class="error"><?php echo $errors->first('state'); ?></span>
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>Select Country</label>
                            <?php echo Form::select('country',$countries,['India','USA']); ?>

                            <span class="error"><?php echo $errors->first('country'); ?></span>
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>Phone Number</label>
                            <?php echo Form::text('phone',$user_data->phone,['id'=>'phone','placeholder'=>'Phone Number']); ?>

                            <span class="error"><?php echo $errors->first('phone'); ?></span>
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                             <?php echo Form::submit('Update Profile'); ?>

                        </div> <!-- prof-cell -->
                    </div> <!-- prof-info -->
                    <div class="clearfix"></div>
                    <?php if(session()->has('alert-success')): ?>
                        <?php echo $__env->make('partials/error', ['type' => 'success', 'message' => session('alert-success')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php endif; ?>
                    <?php echo Form::close(); ?>

                </div> <!-- prof-left -->

                <div class="prof-left">
                    <h4>Change Password</h4>
                    <div class="prof-info">
                       <?php echo Form::open(['url'=>'updatePassword','method'=>'post']); ?>

                        <div class="prof-cell contForm">
                            <label>Current Password</label>
                            <?php echo Form::password('old_password',['id'=>'old_password','placeholder'=>'Password']); ?>

                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>New Password</label>
                            <input type="password" name="name" value="">
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>Confirm Password</label>
                            <input type="password" name="name" value="">
                        </div> <!-- prof-cell -->

                        <div class="prof-cell contForm">
                            <input type="submit"  value="Change Password" />
                        </div> <!-- prof-cell -->
                        <?php echo Form::close(); ?>

                    </div> <!-- prof-info -->
                </div> <!-- prof-left -->





            </div> <!-- user-content -->
        </div> <!-- user panel -->
    </div> <!-- container -->
</div> <!-- innerPage -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>