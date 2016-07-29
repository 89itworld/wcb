
<?php $__env->startSection('content'); ?>
    <div id="innerPage">
        <div class="container">
            <div class="row indetail">
                <div class="id-left">
                    <div class="sdHead">
                    <h3><?php echo Html::link("http://www.".$retailers->website,$retailers->website,['style=text-decoration:none;color:#F57D20;']); ?> </h3>
                        <h4>FLIPKART COUPONS - <?php echo $retailers->total_coupons; ?> OFFERS</h4>
                        <?php   $description=MyFuncs::getTruncateText(html_entity_decode($retailers->description),300, 1); ?>
                        <div style="color: #565353;
                          font-size: 14px;"><?php echo $description; ?></div>
                    </div> <!-- sdHead -->
                    <div class="sdshare">
                        <div class="sdrevicon">
                            <label><?php echo $retailers->reviews; ?> Reviews</label>
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div> <!-- sdrevicon -->
                        <div class="sdrevicon">
                            <label>Add to Favorites</label>
                            <i class="fa fa-heart"></i>
                        </div> <!-- sdrevicon -->
                        <div class="sdrevicon">
                            <label>Report</label>
                            <i class="fa fa-flag"></i>
                        </div> <!-- sdrevicon -->
                    </div> <!-- sdshare -->

                    <div class="row">
                        <div class="storedetail owl-theme overflow">
                            <div><?php echo Html::image('public/images/flipkart-banner.jpg','WhiteCashback'); ?></div>
                            <div><?php echo Html::image('public/images/flipkart-banner.jpg','WhiteCashback'); ?></div>
                            <div><?php echo Html::image('public/images/flipkart-banner.jpg','WhiteCashback'); ?></div>
                            <div><?php echo Html::image('public/images/flipkart-banner.jpg','WhiteCashback'); ?></div>
                        </div>
                    </div> <!-- row -->

                    <div class="sdcoupons">
                        <h3>Coupons / Deals</h3>

                        <?php if(isset($coupons[0])): ?>

                            <?php foreach($coupons as $coupon): ?>
                        <div class="sdcoupList">
                            <div class="sdc-left">
                                <div class="sdc-expire">
                                    <i class="fa fa-clock-o"></i>
                                    <label>Expires:<?php echo date('F d, Y', strtotime($coupon->end_date)); ?></label>
                                </div> <!-- sdc-expire -->
                                <p><?php echo $coupon->title; ?></p>
                                <span>MyFuncs::getTruncateText(html_entity_decode(<?php echo $coupon->description; ?>),70, 1)</span>
                            </div> <!-- sdc-left -->
                            <div class="sdc-right">
                                <div class="sdc-ccode">
                                    <h4>Use Coupon Code</h4>
                                    <label>MOVIE</label>
                                </div> <!-- sdc-ccode -->
                                <a href="">USE COUPON</a>
                            </div> <!-- sdc-right -->
                        </div> <!-- sdcoupList -->

                    <?php endforeach; ?>
                    <?php else: ?>
                        <div>No Offers</div>
                    <?php endif; ?>
                    </div> <!-- sdcoupons -->
                    <?php echo $coupons->render(); ?>

                </div> <!-- id-left -->
                <div class="id-right">
                    <div class="row id-about">
                        <div class="idab-left">
                            <h3>About Flipkart.com</h3>
                            <?php echo Html::image('public/images/shoplogos/flipkart.jpg','WhiteCashback'); ?>


                        </div> <!-- idab-left -->
                        <p><?php echo $retailers->meta_description; ?></p>
                        <a href="">Go to store and earn cashback</a>
                    </div> <!-- id-about -->
                    <div class="row retTable">
                        <h3>Cashback Rates</h3>
                        <div class="id-table">
                           <?php echo $retailers->cashback_rates; ?>

                        </div> <!-- id-table -->
                    </div> <!-- row -->
                    <div class="row retTable">
                        <h3>Guidelines To Earn Cashback</h3>
                        <ul>
                            <?php echo $retailers->guidelines_to_earn; ?>

                            <?php /*li> Always access the store site using your Whitecashback link only, to enable tracking your cash back.	</li>
                            <li> Do not type the online store’s name on your browser or search bar to access the page.</li>
                            <li> Using certain coupons may lead to no cashback. Cashback will be eligible for coupons when explicitly mentioned so.</li>
                            <li> Always make sure the browser cookies are enabled and the pop up blocker is disabled.</li>
                            <li> Do not visit any other coupon, deal or price comparison site while you exit Whitecashback to go the online store to shop.</li>
                            <li> If you did visit another site, then do remember to clear old cookies from the browser before clicking through a link via Whitecashback.</li>
                            <li> Add products in your cart at the store site only AFTER you land on the store page via Whitecashback link/Whitecashback offers & not before.</li>
                            <li> Certain stores will not pay cashback on purchase of a gift certificate and/or using store credits.</li>
                            <li> Complete the transaction in one online sitting on a single tab. Some stores do provide service of placing order through phone – in such cases, no cashback is paid by the store.</li>*/ ?>
                        </ul>
                    </div> <!-- retTable -->
                </div> <!-- id-right -->
            </div> <!-- indetail -->
        </div> <!-- container -->
    </div> <!-- innerPage -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>