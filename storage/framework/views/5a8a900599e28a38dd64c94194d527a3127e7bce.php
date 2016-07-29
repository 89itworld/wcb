<section id="footer">
    <div class="foot-overlay">
        <div class="container">
            <div class="row footblock">
                <div class="foot-item address">
                    <img src="images/logo.png" alt="whitecashback" style="width:100%" />
                    <h4>Whitecashback</h4>
                    <p>
                        Mohanpur, Prem Nagar <br />
                        Dehradun <br />
                        Uttarakhand 248007,<br />
                        India
                    </p>
                </div> <!-- foot-item -->
                <div class="foot-item">
                    <h3>About Us</h3>
                    <ul>
                        <li><a href="">Who we are</a></li>
                        <li><a href="">Support</a></li>
                        <li><a href="">How Cashback Works</a></li>
                        <li><a href="">What is cashback</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">Sitemap</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                    </ul>
                </div> <!-- foot-item -->
                <div class="foot-item">
                    <h3>Cashback</h3>
                    <ul>
                        <li><a href="">Accessories Jewellery</a></li>
                        <li><a href="">Automotive</a></li>
                        <li><a href="">Books Magazines</a></li>
                        <li><a href="">Business</a></li>
                        <li><a href="">Cellular Phones</a></li>
                        <li><a href="">Computer Shops</a></li>
                        <li><a href="">Clothes Fashion</a></li>
                        <li><a href="">Food Drink</a></li>
                    </ul>
                </div> <!-- foot-item -->
                <div class="foot-item">
                    <h3>Coupons</h3>
                    <ul>
                        <li><a href="">Who we are</a></li>
                        <li><a href="">Accessories & Jewellery</a></li>
                        <li><a href="">Automotive</a></li>
                        <li><a href="">Books & Magazines</a></li>
                        <li><a href="">Business</a></li>
                        <li><a href="">Cellular Phones</a></li>
                        <li><a href="">Computer Shops</a></li>
                        <li><a href="">Clothes & Fashion</a></li>
                    </ul>
                </div> <!-- foot-item -->
                <div class="foot-item">
                    <h3>Social Share</h3>
                    <div class="row sshare">
                        <i class="fa fa-facebook"></i>
                        <h4>8,000 fans</h4>
                    </div> <!-- row -->
                    <div class="row sshare">
                        <i class="fa fa-twitter"></i>
                        <h4>5,000 followers</h4>
                    </div> <!-- row -->
                    <div class="row subscribe">
                        <h4>Subscribe to newsletter</h4>
                        <input type="text" name="email" placeholder="Enter you valid Email" />
                        <input type="submit" value="Subscribe" />
                    </div> <!-- row -->
                </div> <!-- foot-item -->
            </div> <!-- footblock -->
            <div class="row mtop30">
                <div class="appext">
                    <div class="apps">
                        <img src="images/googleplay.png" alt="" />
                        <img src="images/appstore.png" alt="" />
                    </div> <!-- apps -->
                </div> <!-- appext -->
                <div class="credits">
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Disclaimer</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                    <p><span class="thcolor">&copy; 2016 Whitecashback </span>| All Rights Reserved</p>
                </div> <!-- credits -->
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- foot-overlay -->
</section>

<!-- JQUERY -->
<?php echo Html::script('public/js/jquery.min.js'); ?>

<?php echo Html::script('public/js/owl.carousel.js'); ?>

<?php echo Html::script('public/js/custom.js'); ?>

<?php echo Html::script('public/js/jquery-ui.min.js'); ?>

<script>
    $(function(){$(".search_textbox").autocomplete({source:"<?php echo Config('constants.SITE_URL'); ?>/coupons/get_search_coupons",minLength:1,create:function(e,a){$(this).data("ui-autocomplete")._renderItem=function(e,a){return $("<li>").append('<div class="autocompleteStore">'+a.key+'</div><div class="autocompleteCashback"><span class="cashback-icon"></span><span class="cashback-text"> <span class="ac_cashback">'+a.desc+"</span></span></div>").appendTo(e).css("position","static")}},select:function(e,a){var s=a.item.label;$("#searchtext").val(s);$("#searchfrm").attr("action",a.item.url),location.href=a.item.url},messages:{noResults:"",results:function(){}}}),$(".responsive-search_textbox").autocomplete({source:+"<?php echo Config('constants.SITE_URL'); ?>"+"/coupons/get_search_coupons",minLength:1,create:function(e,a){$(this).data("ui-autocomplete")._renderItem=function(e,a){return $("<li>").append('<div class="autocompleteStore">'+a.key+'</div><div class="autocompleteCashback"><span class="cashback-icon"></span><span class="cashback-text"> <span class="ac_cashback">'+a.desc+"</span></span></div>").appendTo(e).css("position","static")}},select:function(e,a){var s=a.item.label;$("#responsive-searchtext").val(s);$("#responsive_searchfrm").attr("action",a.item.url),location.href=a.item.url},messages:{noResults:"",results:function(){}}})});
</script>
<?php /*
<script type="text/javascript" src="<?php echo asset('assets/js/jquery.min.js'); ?>"></script>
*/ ?>
<?php /*<script type="text/javascript" src="<?php echo asset('assets/js/jquery.min.js'); ?>"></script>*/ ?>
<?php /*<script type="text/javascript" src="<?php echo asset('assets/js/owl.carousel.js'); ?>"></script>*/ ?>
<?php /*<script type="text/javascript" src="<?php echo asset('assets/js/custom.js'); ?>"></script>*/ ?>
