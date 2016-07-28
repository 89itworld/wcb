<?php
/**
 * Created by PhpStorm.
 * User: Mahipal Singh
 * Date: 03-06-2016
 */
?>
<html lang="en">
<head>
    <title>WhiteCashback</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {!! Html::style('public/css/layout.css') !!}
    {!! Html::style('public/css/home.css') !!}
    {!! Html::style('public/css/common.css') !!}
    {!! Html::style('public/css/font-awesome.min.css') !!}
    {!! Html::style('public/css/jquery-ui-custom.css') !!}


    {{--<link rel="stylesheet" type="text/css" href="{!! asset('assets/css/layout.css') !!}" />--}}

</head>

 <body>
  <div id="main-body">
        <!-- Navbar Contents -->
        <header> @include('layouts.common.header') </header>

        <div class="contents"> @yield('content') </div>

        <footer> @include('layouts.common.footer') </footer>

{{--@yield('content')--}}
 </body>
</html>
