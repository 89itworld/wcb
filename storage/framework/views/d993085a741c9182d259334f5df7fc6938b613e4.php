
<div id="navmenu">
    <div class="container">
        <div class="sitemenu">
            <?php   $categories=MyFuncs::getCategories(); ?>
            <nav>
                <ul>
                    <li><?php echo Html::link('/','Home'); ?></li>
                    <li class="sub-menu-parent">
                        <a href="">CASHBACKS</a>
                        <ul class="sub-menu">
                            <li class="submhead"><i class="fa fa-cart-plus"></i>Shop By Category</li>
                            <li><?php echo e(HTML::link(Config::get('SITE_URL').'',"All Stores")); ?></li>
                            <?php foreach($categories as $category): ?>
                              <li> <?php echo link_to(Config::get('SITE_URL')."category/".$category->category_url, $category->name, ['class' => 'btn btn-default btn-xs']); ?></li>
                            <?php endforeach; ?>
                        </ul>

                    </li>
                    <li class="sub-menu-parent">
                        <?php echo Html::link('get_coupons','COUPONS'); ?>

                    </li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">HOW CASHBACK WORKS</a></li>
                    <li><a href="#">MY ACCOUNT</a></li>
                    <li><a href="#">CONTACT US</a></li>
                </ul>
            </nav>
            <div class="mobileMenu">
                <select onChange="window.location.href=this.value">
                    <option value="index.php">HOME</option>
                    <optgroup label="All STORES">
                        <option value="coupons.php">All Stores</option>
                        <option>Business</option>
                        <option>Gadeges</option>
                        <option>DVD's & Movies</option>
                        <option>Food & Drinks</option>
                        <option>Home & Garden</option>
                        <option>Online Gaming</option>
                        <option>Toys & Games</option>
                        <option>Accessories & Jewellery</option>
                        <option>Cellular Phones</option>
                        <option>Education</option>
                        <option>Gadeges</option>
                        <option>Internet Softwares</option>
                    </optgroup>
                    <optgroup label="COUPONS">
                        <option value="coupons.php">All Coupons</option>
                        <option>Business</option>
                        <option>Gadeges</option>
                        <option>DVD's & Movies</option>
                        <option>Food & Drinks</option>
                        <option>Home & Garden</option>
                        <option>Online Gaming</option>
                        <option>Toys & Games</option>
                        <option>Accessories & Jewellery</option>
                        <option>Cellular Phones</option>
                        <option>Education</option>
                        <option>Gadeges</option>
                        <option>Internet Softwares</option>
                    </optgroup>
                    <option value="aboutus.php">ABOUT US</option>
                    <option value="howcashbackworks.php">HOW CASHBACKWORKS</option>
                    <option value="userdashboard.php">MY ACCOUNT</option>
                    <option value="contactus.php">CONTACT US</option>
                </select>

            </div> <!-- mobileMenu -->
        </div> <!-- sitemenu -->
        <?php if(\Auth::user()): ?>
        <div class="userLogs">
            <div class="sitemenu">
                <nav>
                    <ul>
                        <li class="sub-menu-parent">
                            <a href="">
                                <h3><i class="fa fa-user wuser"></i> <?php echo \Auth::user()->username; ?><label> ( Wallet <i class="fa fa-rupee"></i>200 )</label></h3>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="">My Wallet</a></li>
                                <li><?php echo Html::link('myaccount','My Profile'); ?></li>
                                <li><a href="">Refer Friend</a></li>
                                <li><a href="">Payment Details</a></li>
                                <li><a href="">Withdraw</a></li>
                                <li><a href="">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div> <!-- sitemenu -->
        </div> <!-- userLogs -->
       <?php endif; ?>

    </div> <!-- container -->
</div> <!-- navmenu -->