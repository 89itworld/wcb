<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="description" content="description">
    <meta name="keywords" content="keywords">
    <meta name="author" content="author">
    <meta name="robots" content="index, follow">
    <link rel="icon" href="{{ url('img/favicon.png') }}" type="image/x-icon">
    {!! Html::style('public/css/foundation.min.css') !!}
    {!! Html::style('public/css/admin.css') !!}
    {!! Html::style('public/css/font-awesome.min.css') !!}
    {!! Html::script('public/js/jquery.min.js') !!}
    {!! Html::script('public/js/jquery.calendrical.js') !!}
    {!! Html::style('public/css/cashbackengine.css') !!}
</head>
<body>
<div class="max-width-960 bg-white relative">
    <header>
        <div class="row">
            <div class="small-12 columns ">
                <div class="top-header text-right top-margin-10">
                    <p class="no-margin font-12 "> Welcome, <strong>{{Session::get('adminName')}} </strong>
                        |
                        <a href="http://103.205.244.10/cs/admin/settings.php">
                            Settings
                        </a>
                        |
                        <a href="http://103.205.244.10/cs/" title="title" class="class" target="_blank">
                            View Site
                        </a>
                        |
                        {!! Html::link('admin/logout','Logout',['class'=>'class']) !!}
                        {{--                         <a href="http://103.205.244.10/cs/admin/logout.php" title="title" class="class">
                                                    Logout
                                                </a>--}}
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="small-12 columns ">
                <div class="small-6 columns no-padding">
                    <a href="#"><img src="http://103.205.244.10/cs/public/images/LOGO.png" alt="" width="180"></a>
                </div>
                <div class="small-6 columns no-padding">
                    <h2 class="text-right admin-panel-text">Admin Panel</h2>
                </div>
            </div>
        </div>
        <?php  $file = basename(__FILE__,'.PHP'); ?>

        <div class="row">
            <div class="small-12 columns no-padding top-margin-10">
                <div class="menu-list">

                    <ul class="inline-list font-14">
                        <li class =  {{ Request::path() == 'admin/dashboard' ? 'selected' : '' }}>
                            {!! Html::link('admin/dashboard','Home') !!}
                        </li>

                        <li class="{{Request::path() =='admin/website' ? 'selected' : ''}}">
                            {!! Html::link('admin/website','Websites') !!}
                        </li>


                        <li class ='{{Request::path() =='admin/retailers' ? 'selected' : '' }}' >
                            {!! Html::link('admin/retailers','Retailers') !!}
                            {{--<a href="retailers.php">Retailers</a>--}}
                        </li>
                        <li class="{{Request::path() =="admin/reviews" ? 'selected' : '' }}">
                            {!! Html::link('admin/reviews','Reviews') !!}
                        </li>
                        <li class ="{{Request::path()=='admin/pages' ? 'selected' : '' }}">
                            {!! Html::link('admin/pages','Pages') !!}
                        </li>

                        <li class = "{{Request::path() =="admin/templates" ? 'selected' : ''}}">
                            {!! Html::link('admin/templates','Templates') !!}
                        </li>

                        <li class = "{{Request::path() =="admin/sendmail" ? 'selected' : '' }}">
                            {!! Html::link('admin/sendmail','Send Mail') !!}
                        </li>

                        <li class = "{{Request::path()=="admin/network" ? 'selected' : ''}}">
                            {!! Html::link('admin/network','Affiliate Networks') !!}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    @yield('content')

    <footer class="admin-footer top-margin-20">
        <p class="no-margin font-11 text-center">© 2016 Cashback Comparision. All rights reserved. Powered by Cashback Comparision LLC</p>
    </footer>
</div><!-- Max width container with 960px max-width -->

{!! Html::script('public/js/foundation.min.js') !!}
<script type="text/javascript">

    $('.close').click( function(){
        $('.alert-box').css( {
            'top': -55
        } );
    });

    $(document).ready(function(){

        $('.alert-box').css({
            'top': 15
        });

        setTimeout(function(){
            $('.alert-box').css({
                'top': -55
            });
        },3000);

        $(document).foundation();
    });
</script>
</body>
</html>