@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="small-10 small-offset-1 medium-8 medium-offset-2 columns">
            <h5><i class="fa fa-info-circle"></i> View Retailer </h5>
            <hr>
            <div class="row">
                <div class="row bottom-margin-5">
                    <div class="small-4 columns text-right">
                        <label for="text1">Title</label>
                    </div>
                    <div class="small-8 columns">
                        <h2 class="font-13"><strong>{{$retailer->title}} </strong></h2>
                    </div>
                </div>


                <div class="row bottom-margin-5">
                    <div class="small-4 columns text-right">
                        <label for="text1">Slug</label>
                    </div>
                    <div class="small-8 columns">
                        <h5 class="font-12">{{$retailer->slug}}</h5>
                    </div>
                </div>
                <div class="row bottom-margin-5">
                    <div class="small-4 columns text-right">
                        <label for="text1">Websites</label>
                    </div>
                    <div class="small-8 columns">
                        <h5 class="font-12 website">{{$retailer->url}}</h5>
                    </div>
                </div>

                <div class="row bottom-margin-5">
                    <div class="small-4 columns text-right">
                        <label for="text1">Image</label>
                    </div>
                    <div class="small-8 columns">
                        {!! Html::image('img/'.$retailer->image,'altText') !!}
                    </div>
                </div>

                <div class="row bottom-margin-5">
                    <div class="small-4 columns text-right">
                        <label for="text1" class="line-height-25">Image URL</label>
                    </div>
                    <div class="small-8 columns">
                        <p class="font-12">http://103.205.244.10/cs/public/images/retailers/</p>
                    </div>
                </div>

                <div class="row bottom-margin-5">
                    <div class="small-4 columns text-right">
                        <label for="text1" class="line-height-25">URL</label>
                    </div>
                    <div class="small-8 columns">
                        <a href="http://103.205.244.10/cs/view.php?slug=ebay-in.html">{{$retailer->url}}</a>
                    </div>
                </div>

                <div class="row bottom-margin-5">
                    <div class="small-4 columns text-right">
                        <label for="text1">Description:</label>
                    </div>
                    <div class="small-8 columns">
                        <p class="font-11 no-margin">{!!  $retailer->description!!}</p>
                    </div>
                </div>

                <div class="row bottom-margin-5">
                    <div class="small-4 columns text-right">
                        <label for="text1">Date Added:</label>
                    </div>
                    <div class="small-8 columns">
                        <p class="font-11 no-margin">
                            <?php $date = new DateTime($retailer->added); ?>
                            {{$date->format('d-m-Y')}}
                        </p>
                    </div>
                </div>

                <div class="row bottom-margin-5">
                    <div class="small-4 columns text-right">
                        <label for="text1" class="line-height-25">Status: </label>
                    </div>
                    <div class="small-8 columns">
                        @if($retailer->status =='active' )
                            <h6 class="font-14 active "><i class="fa fa-check-circle"></i> Active</h6>
                        @else
                            <h6 class="font-14 dective"><i class="fa fa-check-circle"></i>Inactive</h6>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="small-8 small-offset-4 columns">
                        <a href="javascript:history.go(-1)" class="button secondary"><i class="fa fa-arrow-left"></i>
                            Back</a>
                    </div>
                </div>


            </div>

        </div>
    </div>
@endsection