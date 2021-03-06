<?php
/**
 * Created by PhpStorm.
 * User: Mahipal
 * Date: 03-06-2016
 * Time: 16:25
 */
?>


<?php $__env->startSection('content'); ?>
    <div id="banner">
        <div class="row">
            <div class="owl-carousel owl-theme overflow">
                <div><?php echo Html::image('public/images/slider.jpg','WhiteCashback'); ?></div>
                <div><?php echo Html::image('public/images/slider2.jpg','WhiteCashback'); ?></div>
                <div><?php echo Html::image('public/images/slider3.jpg','WhiteCashback'); ?></div>
                <div><?php echo Html::image('public/images/slider4.jpg','WhiteCashback'); ?></div>
            </div>
        </div> <!-- row -->
    </div> <!-- banner -->
    <div class="clearfix"></div>
    <?php if(session()->has('alert-success')): ?>
        <?php echo $__env->make('partials/error', ['type' => 'success', 'message' => session('alert-success')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
    <div id="featuredStore">
        <div class="container overflow">
            <div class="row posrel"><h2 class="section-heading"><span>Featured Cashback Websites</span></h2></div>
            <div class="featuredlist">
                <div class="featureSlide owl-theme overflow">
                    <?php foreach($cashbacks as $cashback): ?>
                    <div class="fList-Block item fshadow">
                        <a class="btn btn-default btn-xs" href="<?php echo Config::get('SITE_URL').'view-retailer/'.$cashback->slug;  ?>">  <?php echo Html::image("public/images/logos/".$cashback->image,$alt="whitecashback-".$cashback->slug, $attributes = array()); ?>



                        </a>

                    </div>
                    <?php endforeach; ?>

                </div>	<!-- owl-carousel2 -->
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- featuredStore -->
    <div class="clearfix"></div>

   
    <div id="home-cats">
        <div class="container">
            <div class="row">
                <?php foreach($retailers as $key=>$retailer): ?>
                <div class="cat-block">
                    <h3><?php echo $key; ?></h3>
                    <div class="cat-item">
                        <?php foreach($retailer as $key=>$item): ?>
                        <div class="cat-list">
                           <a href="<?php echo Config('constants.SITE_URL')."view-retailer/".$item->slug; ?> ">
                            <?php echo Html::image("public/images/logos/".$item->image,$alt="whitecashback-".$item->slug); ?>

                            <div class="cat-detail">
                                <h2><span>Upto</span><?php echo $item->cashback; ?></h2>
                                <h4>Cashback</h4>
                                </a>
                            </div> <!-- cat-detail -->
                        </div> <!-- cat-list -->
                        <?php endforeach; ?>
                    </div> <!-- cat-item -->
                </div> <!-- cat-block -->
                <?php endforeach; ?>

            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- home-cats -->
    <div class="clearfix"></div>

    <div id="testimonials">
        <div class="container">
            <div class="row posrel">
                <h2 class="section-heading"><span>Customer's Voices On Whitecashback</span></h2>
            </div> <!-- row -->
            <div class="row cusReview">
                <div class="revBlock">
                    <div class="revImg">
                        <?php echo Html::image('public/images/default.jpg'); ?>

                    </div> <!-- revImg -->
                    <p>The Team at Whitecashback.in is very energetic, enthusiastic and very ambitious. I really loved Pennyful’s user
                        experience and user interface.</p>
                    <label>Karthi Easwaramoorthy</label>
                    <em>Student, New Delhi</em>
                </div> <!-- revBlock -->
                <div class="revBlock">
                    <div class="revImg">
                        <?php echo Html::image('public/images/default.jpg'); ?>

                    </div> <!-- revImg -->
                    <p>The Team at Whitecashback.in is very energetic, enthusiastic and very ambitious. I really loved Pennyful’s user
                        experience and user interface.</p>
                    <label>Karthi Easwaramoorthy</label>
                    <em>Student, New Delhi</em>
                </div> <!-- revBlock -->
                <div class="revBlock">
                    <div class="revImg">
                        <?php echo Html::image('public/images/default.jpg'); ?>

                    </div> <!-- revImg -->
                    <p>The Team at Whitecashback.in is very energetic, enthusiastic and very ambitious. I really loved Pennyful’s user
                        experience and user interface.</p>
                    <label>Karthi Easwaramoorthy</label>
                    <em>Student, New Delhi</em>
                </div> <!-- revBlock -->
            </div> <!-- cusReview  -->
        </div> <!-- container -->
    </div> <!-- testimonials -->

    <div id="benifits">
        <div class="container">
            <div class="row posrel"><h2 class="section-heading"><span>Why Should You Join Whitecashback</span></h2></div>

            <div class="row beni">
                <div class="beniBlock">
                    <?php echo Html::image('public/images/free.jpg'); ?>

                    <h3><strong  class="coll1">100% Free to</strong> <br />Join Whitecashback</h3>
                </div> <!-- beniBlock -->
                <div class="beniBlock">
                    <?php echo Html::image('public/images/coupons.jpg'); ?>

                    <h3><strong class="coll2">Exclusive Coupons</strong><br /> & Deals</h3>
                </div> <!-- beniBlock -->
                <div class="beniBlock">
                    <?php echo Html::image('public/images/cashback.jpg'); ?>

                    <h3><strong class="coll3">Extra CashBack On</strong><br /> Every Order</h3>
                </div> <!-- beniBlock -->
                <div class="beniBlock">
                    <?php echo Html::image('public/images/withdraw-money.jpg'); ?>

                    <h3><strong class="coll4">No Minimum </strong><br />Withdrawal Limit</h3>
                </div> <!-- beniBlock -->
                <div class="beniBlock">
                    <?php echo Html::image('public/images/www.jpg'); ?>

                    <h3><strong class="coll5">500+ Top <br /></strong>Shopping Brands</h3>
                </div> <!-- beniBlock -->
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- newsletter -->
    <div class="clearfix"></div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>