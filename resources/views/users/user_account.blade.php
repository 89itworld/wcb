@extends('layouts.home')
@section('content')
<div id="innerPage">
    <div class="container">
        <div class="userpanel">
            @include('layouts/common/user_sidebar'  )

            <div class="user-content">
                <h3>My Profile</h3>
                <div class="prof-left">
                    <h4>Profile Information</h4>
                    {!! Form::open(['url'=>'updateUserInfo','method'=>'post']) !!}
                    <div class="prof-info">
                        <div class="prof-cell contForm">
                            <label>First Name</label>
                            {!! Form::text('fname',$user_data->fname,['id'=>'fname','placeholder'=>'Firat Name']) !!}
                            <span class="error">{!! $errors->first('fname') !!}</span>
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>Last Name</label>
                            {!! Form::text('lname',$user_data->lname,['id'=>'lname','placeholder'=>'Last Name']) !!}
                            <span class="error">{!! $errors->first('lname') !!}</span>
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>Email Address</label>
                            {!! Form::email('email',$user_data->email,['id'=>'email','placeholder'=>'Email']) !!}
                            <span class="error">{!! $errors->first('email') !!}</span>
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>User Name</label>
                            {!! Form::text('username',$user_data->username,['id'=>'username','placeholder'=>'Username']) !!}
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>Address Line1</label>
                            {!! Form::text('address',$user_data->address,['id'=>'address','placeholder'=>'Address']) !!}
                            <span class="error">{!! $errors->first('address') !!}</span>
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>City</label>
                            {!! Form::text('city',$user_data->city,['id'=>'city','placeholder'=>'City']) !!}
                            <span class="error">{!! $errors->first('city') !!}</span>
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>State/Province</label>
                            {!! Form::text('state',$user_data->state,['id'=>'state','placeholder'=>'State']) !!}
                            <span class="error">{!! $errors->first('state') !!}</span>
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>Select Country</label>
                            {!! Form::select('country',$countries,['India','USA']) !!}
                            <span class="error">{!! $errors->first('country') !!}</span>
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>Phone Number</label>
                            {!! Form::text('phone',$user_data->phone,['id'=>'phone','placeholder'=>'Phone Number']) !!}
                            <span class="error">{!! $errors->first('phone') !!}</span>
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                             {!! Form::submit('Update Profile') !!}
                        </div> <!-- prof-cell -->
                    </div> <!-- prof-info -->
                    <div class="clearfix"></div>
                    @if(session()->has('alert-success'))
                        @include('partials/error', ['type' => 'success', 'message' => session('alert-success')])
                    @endif
                    {!! Form::close() !!}
                </div> <!-- prof-left -->

                <div class="prof-left">
                    <h4>Change Password</h4>
                    <div class="prof-info">
                       {!!  Form::open(['url'=>'updatePassword','method'=>'post'])  !!}
                        <div class="prof-cell contForm">
                            <label>Current Password</label>
                            {!! Form::text('old_password',$user_data->password,['id'=>'old_password','placeholder'=>'Password']) !!}
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>New Password</label>
                            {!! Form::password('password',['id'=>'password','placeholder'=>'Password']) !!}
                        </div> <!-- prof-cell -->
                        <div class="prof-cell contForm">
                            <label>Confirm Password</label>
                            {!! Form::password('confirm_password',['id'=>'confirm_password','placeholder'=>'Password']) !!}
                        </div> <!-- prof-cell -->

                        <div class="prof-cell contForm">
                            <input type="submit"  value="Change Password" />
                        </div> <!-- prof-cell -->
                        {!! Form::close() !!}
                    </div> <!-- prof-info -->
                </div> <!-- prof-left -->





            </div> <!-- user-content -->
        </div> <!-- user panel -->
    </div> <!-- container -->
</div> <!-- innerPage -->
@stop