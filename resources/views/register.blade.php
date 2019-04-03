@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
@parent
@endsection

@section('content')
<div class="row">
    <div class="col-md-6 col-md-push-3">
        <h2>Join as a Wordskills Travel Member</h2>
        <div class="panel panel-default">
            <div class="panel-body">
                <form role="form" action="{{route('register')}}" method="post">
                    {{csrf_field() }}
                        @if(count($errors)>0)
                            @foreach($errors->all() as $error)
                                <p class='alert alert-danger'>{{$error}}</p>
                            @endforeach
                        @endif
                    <div class="form-group">
                        <label class="control-label">Email Address:</label>
                        <input name="email" id="email" type="email" class="form-control" placeholder="Enter your email address">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Password:</label>
                        <input name="password" id="password" type="password" class="form-control" placeholder="Enter your password">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Name:</label>
                        <input name="name" id="name" type="text" class="form-control" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Phone Number:</label>
                        <input name="phone" id="phone" type="tel" class="form-control" placeholder="Enter your phone number">
                    </div>
                    <div class="text-right">
                        <button type="submit" name="register" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
