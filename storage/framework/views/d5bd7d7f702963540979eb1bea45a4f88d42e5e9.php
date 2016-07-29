<?php $__env->startSection('content'); ?>
<div id="innerPage">
    <div class="container">
        <div class="userpanel">
            <?php echo $__env->make('layouts/common/user_sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="user-content">
                <h3>My Profile</h3>
                <div class="prof-left">
                    <h4>Profile Information</h4>
                    <div class="prof-info">
                        <div class="prof-cell contForm">
                            <label>First Name</label>
                            <input type="text" name="name" value="Naresh">
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>Last Name</label>
                            <input type="text" name="name" value="Chamola">
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>Email Address</label>
                            <input type="text" name="name" value="nareshchamola@gmail.com">
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>User Name</label>
                            <input type="text" name="name" value="Naresh">
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>Address Line1</label>
                            <input type="text" name="name" value="">
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>City</label>
                            <input type="text" name="name" value="Dehradun">
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>State/Province</label>
                            <input type="text" name="name" value="Dehradun">
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>Select Country</label>
                            <select>
                                <option>Select Country</option>
                            </select>
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>Phone Number</label>
                            <input type="text" name="name" value="">
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <input type="submit"  value="Update Profile" />
                        </div> <!-- prof-cell -->
                    </div> <!-- prof-info -->
                </div> <!-- prof-left -->

                <div class="prof-left">
                    <h4>Change Password</h4>
                    <div class="prof-info">
                        <div class="prof-cell contForm">
                            <label>Current Password</label>
                            <input type="password" name="name" value="">
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
                    </div> <!-- prof-info -->
                </div> <!-- prof-left -->





            </div> <!-- user-content -->
        </div> <!-- user panel -->
    </div> <!-- container -->
</div> <!-- innerPage -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>