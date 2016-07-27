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
                        {!! Form::open(['url' => 'retailer', 'method' => 'get', 'role' => 'form', 'class' => '','id'=>'search_criteria','name'=>'search_criteria']) !!}
                        <div class="sortBy">
                            <label>Sort by</label>
                            {!! Input::old('sort_by') !!}
                            @var  $sort_by_sources=array('title'=>'Name','visits'=>'Popularity','added'=>'Newest','cashback'=>'Cashback')
                            {!!  Form::select('sort_by', $sort_by_sources, Input::get('sort_by'), ['id' => 'sort_by', 'class' => 'form-control','onChange'=>'document.search_criteria.submit()']) !!}
                        </div> <!-- sortBy -->
                        <div class="sortBy">
                        @var  $show_type_sources=array('ASC'=>'Ascending','DESC'=>'Descending');
                        {!!  Form::select('show_type', $show_type_sources, Input::get('show_type'), ['id' => 'show_type', 'class' => 'form-control','onChange'=>'document.search_criteria.submit()']) !!}
                        </div>
                        <div class="sortBy">
                            {{ Form::Label('show','City:') }}
                            @var  $show_sources=array('All'=>'All','12'=>'12','24'=>'24','52'=>'52','100'=>'100');
                            {!!  Form::select('show', $show_sources, Input::get('show'), ['id' => 'show', 'class' => 'form-control','onChange'=>'document.search_criteria.submit()']) !!}
                        </div> <!-- sortBy -->
                        <div class="resultcount">

                            <label>Showing {!! $page_data['first_item'] !!}-{!! $page_data['last_item'] !!} of {!! $page_data['total_items']!!}</label>
                        </div> <!-- resultcount -->
                        {!! Form::close() !!}
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
{{--
                     {!! $retailers->render() !!}
--}}
                    <!--
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