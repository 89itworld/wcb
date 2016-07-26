@extends('layouts.home')
@section('content')
    <div id="innerPage">
        <div class="container">
            <div class="row indetail">
                <div class="id-left">
                    <div class="sdHead">
                    <h3>{!! Html::link("http://www.".$retailers->website,$retailers->website,['style=text-decoration:none;color:#F57D20;'])  !!} </h3>
                        <h4>FLIPKART COUPONS - {!! $retailers->total_coupons !!} OFFERS</h4>
                        <label>{!! $retailers->description !!}</label>
                    </div> <!-- sdHead -->
                    <div class="sdshare">
                        <div class="sdrevicon">
                            <label>{!!  $retailers->reviews  !!} Reviews</label>
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
                            <div>{!! Html::image($retailers->image,'WhiteCashback') !!}</div>
                            <div>{!! Html::image($retailers->image,'WhiteCashback') !!}</div>
                            <div>{!! Html::image($retailers->image,'WhiteCashback') !!}</div>
                            <div>{!! Html::image($retailers->image,'WhiteCashback') !!}</div>
                        </div>
                    </div> <!-- row -->

                    <div class="sdcoupons">
                        <h3>Coupons / Deals</h3>

                        @if(isset($coupons[0]))

                            @foreach($coupons as $coupon)
                        <div class="sdcoupList">
                            <div class="sdc-left">
                                <div class="sdc-expire">
                                    <i class="fa fa-clock-o"></i>
                                    <label>Expires:{!! date('F d, Y', strtotime($coupon->end_date)) !!}</label>
                                </div> <!-- sdc-expire -->
                                <p>{!! $coupon->title !!}</p>
                                <span>{!! $coupon->description !!}</span>
                            </div> <!-- sdc-left -->
                            <div class="sdc-right">
                                <div class="sdc-ccode">
                                    <h4>Use Coupon Code</h4>
                                    <label>MOVIE</label>
                                </div> <!-- sdc-ccode -->
                                <a href="">USE COUPON</a>
                            </div> <!-- sdc-right -->
                        </div> <!-- sdcoupList -->

                    @endforeach
                    @else
                        <div>No Offers</div>
                    @endif
                    </div> <!-- sdcoupons -->
                    <?php echo $coupons->render(); ?>

                </div> <!-- id-left -->
                <div class="id-right">
                    <div class="row id-about">
                        <div class="idab-left">
                            <h3>About Flipkart.com</h3>
                            <img src="images/shoplogos/flipkart.jpg" alt="" />

                        </div> <!-- idab-left -->
                        <p>One of the biggest e-commerce stores of India, Flipkart had started off as an online book store. Today, it has expanded to offer its customers a wide range of products across various categories including movies, music, games, mobiles, cameras, computers, healthcare and personal products, home appliances and electronics, stationery, perfumes, toys, apparels, shoes and more</p>
                        <a href="">Go to store and earn cashback</a>
                    </div> <!-- id-about -->
                    <div class="row retTable">
                        <h3>Cashback Rates</h3>
                        <div class="id-table">
                            <div class="row">
                                <div class="idcell1">
                                    New Desktop/Mobile Site User
                                </div> <!-- idcell1 -->
                                <div class="idcell2">
                                    Cashback
                                </div> <!-- idcell1 -->
                            </div> <!-- row -->
                            <div class="row trvcell">
                                <div class="idtdcell1">
                                    Electronics - (Storage,Computer Accessories,Laptop,Camera,Large Appliances,Computer Components,Camera Accessories,Media Player,Gaming,Media,Security Systems)
                                </div> <!-- idtdcell1 -->
                                <div class="idtdcell2">
                                    0.0% / Sale
                                </div> <!-- idtdcell2 -->
                            </div> <!-- row -->
                            <div class="row trvcell udtdbg">
                                <div class="idtdcell1">
                                    Others (Fashion,Home & Kitchen,Automotive,Baby,Kinds & Toys,Books & Stationary ,Sports & Health)
                                </div> <!-- idtdcell1 -->
                                <div class="idtdcell2">
                                    0.0% / Sale
                                </div> <!-- idtdcell2 -->
                            </div> <!-- row -->
                            <div class="row trvcell">
                                <div class="idtdcell1">
                                    Addition of money to PayTM Wallet, Gift Cards, Exclusive & Bank Coupon Codes
                                </div> <!-- idtdcell1 -->
                                <div class="idtdcell2">
                                    0.0% / Sale
                                </div> <!-- idtdcell2 -->
                            </div> <!-- row -->
                        </div> <!-- id-table -->
                    </div> <!-- row -->
                    <div class="row retTable">
                        <h3>Guidelines To Earn Cashback</h3>
                        <ul>
                            <li> Always access the store site using your Whitecashback link only, to enable tracking your cash back.	</li>
                            <li> Do not type the online store’s name on your browser or search bar to access the page.</li>
                            <li> Using certain coupons may lead to no cashback. Cashback will be eligible for coupons when explicitly mentioned so.</li>
                            <li> Always make sure the browser cookies are enabled and the pop up blocker is disabled.</li>
                            <li> Do not visit any other coupon, deal or price comparison site while you exit Whitecashback to go the online store to shop.</li>
                            <li> If you did visit another site, then do remember to clear old cookies from the browser before clicking through a link via Whitecashback.</li>
                            <li> Add products in your cart at the store site only AFTER you land on the store page via Whitecashback link/Whitecashback offers & not before.</li>
                            <li> Certain stores will not pay cashback on purchase of a gift certificate and/or using store credits.</li>
                            <li> Complete the transaction in one online sitting on a single tab. Some stores do provide service of placing order through phone – in such cases, no cashback is paid by the store.</li>
                        </ul>
                    </div> <!-- retTable -->
                </div> <!-- id-right -->
            </div> <!-- indetail -->
        </div> <!-- container -->
    </div> <!-- innerPage -->
@stop