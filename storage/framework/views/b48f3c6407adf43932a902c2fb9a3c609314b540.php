
<?php $__env->startSection('content'); ?>
<div id="innerPage">
    <div class="container">
        <h3 class="inner-heading">Coupons</h3>
        <div class="row coupons">
            <div class="coupon-left">
                <div id="tabs-container">
                    <ul class="tabs-menu">
                        <li class="current"><a href="#tab-1">ALL COUPONS</a></li>
                        <li><a href="#tab-2">MOST POPULAR</a></li>
                        <?php if($exclusive_coupons_total>0): ?>
                        <li><a href="#tab-3">EXCLUSIVE</a></li>
                        <?php endif; ?>
                        <li><a href="#tab-4">LATEST</a></li>
                        <?php if($expiring_coupons_total>0): ?>
                        <li><a href="#tab-5">EXPIRING SOON</a></li>
                        <?php endif; ?>
                    </ul>
                    <div class="tab">
                        <div id="tab-1" class="tab-content">
                            <?php foreach($all_coupons as $coupon): ?>
                            <div class="sdcoupList widhalf">
                                <div class="sdc-left">
                                    <div class="sdc-expire">
                                        <i class="fa fa-clock-o"></i>
                                        <label><?php echo "Expires:".date('F d, Y', strtotime($coupon->coupon_end_date)); ?></label>
                                    </div> <!-- sdc-expire -->
                                    <p><?php echo $coupon->coupon_title; ?></p>
                                    <span><?php echo $coupon->description; ?>.</span>
                                    <a href="" class="vallcoup">View All Coupons</a>
                                </div> <!-- sdc-left -->
                                <div class="sdc-right">
                                    <?php echo Html::image($coupon->image,'whitecashback'); ?>

                                    <div class="sdc-ccode">
                                        <h4>Use Coupon Code</h4>
                                        <label>MOVIE</label>
                                    </div> <!-- sdc-ccode -->
                                    <a href="">USE COUPON</a>
                                </div> <!-- sdc-right -->
                            </div> <!-- sdcoupList -->
                      <?php endforeach; ?>
                                <?php echo $all_coupons->render(); ?>

                        </div> <!-- tab-1 -->
                        <div id="tab-2" class="tab-content">
                            <?php foreach($most_popular as $coupon): ?>
                                <div class="sdcoupList widhalf">
                                    <div class="sdc-left">
                                        <div class="sdc-expire">
                                            <i class="fa fa-clock-o"></i>
                                            <label><?php echo "Expires:".date('F d, Y', strtotime($coupon->coupon_end_date)); ?></label>
                                        </div> <!-- sdc-expire -->
                                        <p><?php echo $coupon->coupon_title; ?></p>
                                        <span><?php echo $coupon->description; ?>.</span>
                                        <a href="" class="vallcoup">View All Coupons</a>
                                    </div> <!-- sdc-left -->
                                    <div class="sdc-right">
                                        <?php echo Html::image($coupon->image,'whitecashback'); ?>

                                        <div class="sdc-ccode">
                                            <h4>Use Coupon Code</h4>
                                            <label>MOVIE</label>
                                        </div> <!-- sdc-ccode -->
                                        <a href="">USE COUPON</a>
                                    </div> <!-- sdc-right -->
                                </div> <!-- sdcoupList -->
                            <?php endforeach; ?>

                        </div> <!-- tab-2 -->

                        <div id="tab-3" class="tab-content">
                            <?php foreach($exclusive_coupons as $coupon): ?>
                                <div class="sdcoupList widhalf">
                                    <div class="sdc-left">
                                        <div class="sdc-expire">
                                            <i class="fa fa-clock-o"></i>
                                            <label><?php echo "Expires:".date('F d, Y', strtotime($coupon->coupon_end_date)); ?></label>
                                        </div> <!-- sdc-expire -->
                                        <p><?php echo $coupon->coupon_title; ?></p>
                                        <span><?php echo $coupon->description; ?>.</span>
                                        <a href="" class="vallcoup">View All Coupons</a>
                                    </div> <!-- sdc-left -->
                                    <div class="sdc-right">
                                        <?php echo Html::image($coupon->image,'whitecashback'); ?>

                                        <div class="sdc-ccode">
                                            <h4>Use Coupon Code</h4>
                                            <label>MOVIE</label>
                                        </div> <!-- sdc-ccode -->
                                        <a href="">USE COUPON</a>
                                    </div> <!-- sdc-right -->
                                </div> <!-- sdcoupList -->
                            <?php endforeach; ?>

                        </div> <!-- tab-3 -->

                        <div id="tab-4" class="tab-content">
                            <?php foreach($latest_coupons as $coupon): ?>
                                <div class="sdcoupList widhalf">
                                    <div class="sdc-left">
                                        <div class="sdc-expire">
                                            <i class="fa fa-clock-o"></i>
                                            <label><?php echo "Expires:".date('F d, Y', strtotime($coupon->coupon_end_date)); ?></label>
                                        </div> <!-- sdc-expire -->
                                        <p><?php echo $coupon->coupon_title; ?></p>
                                        <span><?php echo $coupon->description; ?>.</span>
                                        <a href="" class="vallcoup">View All Coupons</a>
                                    </div> <!-- sdc-left -->
                                    <div class="sdc-right">
                                        <?php echo Html::image($coupon->image,'whitecashback'); ?>

                                        <div class="sdc-ccode">
                                            <h4>Use Coupon Code</h4>
                                            <label>MOVIE</label>
                                        </div> <!-- sdc-ccode -->
                                        <a href="">USE COUPON</a>
                                    </div> <!-- sdc-right -->
                                </div> <!-- sdcoupList -->
                            <?php endforeach; ?>

                        </div> <!-- tab-4 -->

                        <div id="tab-5" class="tab-content">
                            <?php foreach($expiring_coupons as $coupon): ?>
                                <div class="sdcoupList widhalf">
                                    <div class="sdc-left">
                                        <div class="sdc-expire">
                                            <i class="fa fa-clock-o"></i>
                                            <label><?php echo "Expires:".date('F d, Y', strtotime($coupon->coupon_end_date)); ?></label>
                                        </div> <!-- sdc-expire -->
                                        <p><?php echo $coupon->coupon_title; ?></p>
                                        <span><?php echo $coupon->description; ?>.</span>
                                        <a href="" class="vallcoup">View All Coupons</a>
                                    </div> <!-- sdc-left -->
                                    <div class="sdc-right">
                                        <?php echo Html::image($coupon->image,'whitecashback'); ?>

                                        <div class="sdc-ccode">
                                            <h4>Use Coupon Code</h4>
                                            <label>MOVIE</label>
                                        </div> <!-- sdc-ccode -->
                                        <a href="">USE COUPON</a>
                                    </div> <!-- sdc-right -->
                                </div> <!-- sdcoupList -->
                            <?php endforeach; ?>

                        </div> <!-- tab-5 -->
                    </div> <!-- tab -->
                </div> <!-- tabs-container -->


                <div class="row couponSearch text-center">
                    <h3>Coupons By Stores</h3>
                    <div class="sorybyalpha">
                        <ul class="salpha text-center">
                            <li><a href="">All</a></li>
                            <li><a href="">A</a></li>
                            <li><a href="">B</a></li>
                            <li><a href="">C</a></li>
                            <li><a href="">D</a></li>
                            <li><a href="">E</a></li>
                            <li><a href="">F</a></li>
                            <li><a href="">G</a></li>
                            <li><a href="">H</a></li>
                            <li><a href="">I</a></li>
                            <li><a href="">J</a></li>
                            <li><a href="">K</a></li>
                            <li><a href="">L</a></li>
                            <li><a href="">M</a></li>
                            <li><a href="">N</a></li>
                            <li><a href="">O</a></li>
                            <li><a href="">P</a></li>
                            <li><a href="">Q</a></li>
                            <li><a href="">R</a></li>
                            <li><a href="">S</a></li>
                            <li><a href="">T</a></li>
                            <li><a href="">U</a></li>
                            <li><a href="">V</a></li>
                            <li><a href="">W</a></li>
                            <li><a href="">X</a></li>
                            <li><a href="">Y</a></li>
                            <li><a href="">Z</a></li>
                        </ul>
                    </div> <!-- sorybyalpha -->
                    <div class="row couprow">
                        <div class="couplist">
                            <h4>A</h4>
                            <ul>
                                <li><a href="#">Abof.com<b>(10)</b></a></li>
                                <li><a href="#">Adidas.com<b>(10)</b></a></li>
                                <li><a href="#">Agoda.com<b>(10)</b></a></li>
                                <li><a href="#">Airtel.in<b>(10)</b></a></li>
                                <li><a href="#">Abof.com<b>(10)</b></a></li>
                                <li><a href="#">Adidas.com<b>(10)</b></a></li>
                                <li><a href="#">Agoda.com<b>(10)</b></a></li>
                                <li><a href="#">Airtel.in<b>(10)</b></a></li>
                                <li><a href="#">Abof.com<b>(10)</b></a></li>
                                <li><a href="#">Adidas.com<b>(10)</b></a></li>
                                <li><a href="#">Agoda.com<b>(10)</b></a></li>
                                <li><a href="#">Airtel.in<b>(10)</b></a></li>
                                <li><a href="#">Abof.com<b>(10)</b></a></li>
                                <li><a href="#">Adidas.com<b>(10)</b></a></li>
                                <li><a href="#">Agoda.com<b>(10)</b></a></li>
                                <li><a href="#">Airtel.in<b>(10)</b></a></li>
                                <li><a href="#">Abof.com<b>(10)</b></a></li>
                                <li><a href="#">Adidas.com<b>(10)</b></a></li>
                                <li><a href="#">Agoda.com<b>(10)</b></a></li>
                                <li><a href="#">Airtel.in<b>(10)</b></a></li>
                                <li><a href="#">Abof.com<b>(10)</b></a></li>
                                <li><a href="#">Adidas.com<b>(10)</b></a></li>
                                <li><a href="#">Agoda.com<b>(10)</b></a></li>
                                <li><a href="#">Airtel.in<b>(10)</b></a></li>
                                <li><a href="#">Abof.com<b>(10)</b></a></li>
                                <li><a href="#">Adidas.com<b>(10)</b></a></li>
                                <li><a href="#">Agoda.com<b>(10)</b></a></li>
                                <li><a href="#">Airtel.in<b>(10)</b></a></li>
                                <li><a href="#">Abof.com<b>(10)</b></a></li>
                                <li><a href="#">Adidas.com<b>(10)</b></a></li>
                                <li><a href="#">Agoda.com<b>(10)</b></a></li>
                                <li><a href="#">Airtel.in<b>(10)</b></a></li>
                            </ul>
                        </div> <!-- couplist -->

                        <div class="couplist">
                            <h4>B</h4>
                            <ul>
                                <li><a href="#">Babyoye.com<b>(10)</b></a></li>
                                <li><a href="#">Bata.com<b>(10)</b></a></li>
                                <li><a href="#">Biba.in<b>(0)</b></a></li>
                                <li><a href="#">Bigrocks.in<b>(10)</b></a></li>
                                <li><a href="#">Bluehost.com<b>(10)</b></a></li>
                                <li><a href="#">Blackberry.com<b>(0)</b></a></li>
                                <li><a href="#">Babyoye.com<b>(9)</b></a></li>
                                <li><a href="#">Bata.com<b>(10)</b></a></li>
                                <li><a href="#">Biba.in<b>(10)</b></a></li>
                                <li><a href="#">Bigrocks.in<b>(10)</b></a></li>
                                <li><a href="#">Bluehost.com<b>(0)</b></a></li>
                                <li><a href="#">Blackberry.com<b>(10)</b></a></li>
                                <li><a href="#">Babyoye.com<b>(10)</b></a></li>
                                <li><a href="#">Bata.com<b>(0)</b></a></li>
                                <li><a href="#">Biba.in<b>(10)</b></a></li>
                                <li><a href="#">Bigrocks.in<b>(10)</b></a></li>
                                <li><a href="#">Bluehost.com<b>(10)</b></a></li>
                                <li><a href="#">Blackberry.com<b>(8)</b></a></li>
                                <li><a href="#">Babyoye.com<b>(10)</b></a></li>
                                <li><a href="#">Bata.com<b>(8)</b></a></li>
                                <li><a href="#">Biba.in<b>(10)</b></a></li>
                                <li><a href="#">Bigrocks.in<b>(9)</b></a></li>
                                <li><a href="#">Bluehost.com<b>(10)</b></a></li>
                                <li><a href="#">Blackberry.com<b>(10)</b></a></li>

                            </ul>
                        </div> <!-- couplist -->
                    </div> <!-- row couprow -->
                </div> <!-- couponSearch -->
            </div> <!-- coupon-left -->
        </div> <!-- indetail -->
    </div> <!-- container -->
</div> <!-- innerPage -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>