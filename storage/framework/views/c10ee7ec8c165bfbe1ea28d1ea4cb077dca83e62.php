<div class="user-sidebar">
				<div class="profileImg">
					<div class="pimg">
                        <?php echo Html::image('public/images/'.(\Auth::user()->image),'My Image'); ?>

					</div> <!-- pimg -->
					<label><?php echo \Auth::user()->username; ?></label>
					<?php   $amount=MyFuncs::GetUserBalance( \Auth::user()->id ); ?>
					<span>In Wallet <i class="fa fa-rupee"></i><?php echo $amount; ?></span>
				</div> <!-- profileImg -->
				<div class="proLinks">
					<ul>
						<li><a href="userdashboard.php"><i class="fa fa-google-wallet"></i> My Wallet</a></li>
						<li><a href="<?php echo URL::to('myaccount'); ?>"><i class="fa fa-user"></i> My Profile</a></li>
						<li><a href="userrefer.php"><i class="fa fa-user-plus"></i> Refer Friends</a></li>
						<li><a href="userpayment.php"><i class="fa fa-clone"></i> Payment Details</a></li>
						<li><a href="userpawithdraw.php"><i class="fa fa-money"></i> Withdraw</a></li>
					</ul>
				</div> <!-- proLinks -->
			</div> <!-- user-sidebar -->