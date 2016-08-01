@extends('layouts.adminLogin')

        <!-- Main Content -->
@section('content')
    <h2>Please Enter Your Admin Email</h2><br>
    <form action="{{ url('/password/email') }}" method="post">
        {{ csrf_field() }}
        <input type="text" name="email" placeholder="Email"  value="{{ old('email') }}" required>
        <input type="submit" name="submit" class="login loginmodal-submit" value="Send mail">
    </form>
    <span class="pull-right">
        {!! Html::link('/admin','Back') !!}</span>
@endsection
