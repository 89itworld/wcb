@extends('layouts.home')

@section('content')
    <div id="innerPage">
        <div class="container">
            <div class="row innertitle">
                <h3>All Stores</h3>
            </div> <!-- innertitle -->
            <div class="row">
                <div class="store-left">
                    <div class="sorybyalpha">
                        <ul class="salpha">
                            @include('layouts.common.alph_search')
                        </ul>
                    </div> <!-- sorybyalpha -->
                    <div class="sort-filter">
                        <div class="sortBy">
                            <label>Sort by</label>
                            <select>
                                <option>Popularity</option>
                                <option>Newest</option>
                                <option>Cashback</option>
                            </select>
                            <select>
                                <option>Ascending</option>
                                <option>Descending</option>
                            </select>
                        </div> <!-- sortBy -->
                        <div class="sortBy">
                            <label>Results</label>
                            <select>
                                <option>All</option>
                                <option>12</option>
                                <option>24</option>
                                <option>52</option>
                                <option>100</option>
                            </select>
                        </div> <!-- sortBy -->
                        <div class="resultcount">
                            <label>Showing 1-12 of 204</label>
                        </div> <!-- resultcount -->
                    </div> <!-- sort-filter -->

                    <div class="storeResult scroll">
                        @foreach($retailers as $key=>$retailer)
                            <div class="storeList">
                                <div class="storeImg">
                                    {!! Html::image("public/images/logos/".$retailer->image,$alt="whitecashback-".$retailer->slug) !!}
                                    <p>
                                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    </p>
                                </div> <!-- storeImg -->
                                <div class="storetxt">
                                    <h3><a href="<?php echo Config::get('SITE_URL')."view-retailer/".$retailer->slug; ?>">{!! $retailer->title !!}</a></h3>
                                    <p>{!! $retailer->description !!} </p>
                                    <ul>
                                        <li><a href="" class="like"><i class="fa fa-thumbs-up"></i><b>Like</b></a></li>
                                        <li><a href=""><i class="fa fa-file-text"></i><b>Cashback Terms</b></a></li>
                                    </ul>
                                </div> <!-- storetxt -->
                                <div class="storeBtn">
                                    <h3>Upto <b><i class="fa fa-rupee"></i>300</b> <br />Cashback</h3>
                                    <a href="">Grab Deal</a>
                                </div> <!-- storeBtn -->
                            </div> <!-- storeList -->
                    @endforeach
                    {{$retailers->links()}}
                    <!--                    {!! $retailers->render() !!}
                            -->
                    </div> <!-- storeResult -->
                </div> <!-- store-left -->
                <div class="store-right">
                    @include('layouts.common.right_categories')
                    <div class="srightBlk row">
                        <h3>New Stores</h3>
                        <div class="newStore">
                            <img src="images/shoplogos/myntra.jpg" alt="" />
                            <h4>Get Cashback<br /> Rs 500</h4>
                        </div> <!-- newStore -->
                        <div class="newStore">
                            <img src="images/shoplogos/snapdeal.jpg" alt="" />
                            <h4>Get Cashback<br /> Rs 500</h4>
                        </div> <!-- newStore -->
                        <div class="newStore">
                            <img src="images/shoplogos/shopclues.jpg" alt="" />
                            <h4>Get Cashback<br /> Rs 500</h4>
                        </div> <!-- newStore -->
                    </div> <!-- srightBlk -->
                </div> <!-- store-right -->
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- innerPage -->

@stop