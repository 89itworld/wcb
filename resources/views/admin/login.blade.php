@extends('layouts.adminLogin')

@section('content')
    <div class="site_logo">
        {!! Html::image('public/images/logo.jpg','altText',['width'=>'180']) !!}
        {{--<img src="http://103.205.244.10/cs/public/images/LOGO.png" alt="SITE LOGO" width="180">--}}
    </div>
    <h1>Login to Your Account</h1><br>
    <form action="{{ url('/admin') }}" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        {{ csrf_field() }}
        <input type="submit" name="submit" class="login loginmodal-submit" value="Login">
    </form>

    @if( $msg )
        <center>
            <p style="color: crimson">{{$msg}}</p>
        </center>
    @endif

    <span class="pull-right"><a href="{{ url('admin/password/reset') }}">forgot password</a></span>
@endsection
