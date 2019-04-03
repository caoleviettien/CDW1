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
                <form role="form" action="{{route('update')}}" method="post">
                    {{csrf_field() }}
                    @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                    <p class='alert alert-danger'>{{$error}}</p>
                    @endforeach
                    @endif
                    @if (session()->has('success'))
                    <h1>{{ session('success') }}</h1>
                    @endif
                    @foreach($gInfor as $user)
                    <div class="form-group">
                        <label class="control-label">Email Address:</label>
                        <input name="email" id="email" type="email" value="{{$user->email}}" class="form-control" placeholder="Enter your email address" readonly>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Password:</label>
                        <input name="password" id="password" type="password" value="" class="form-control" placeholder="Enter your password">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Name:</label>
                        <input name="name" id="name" type="text" value="{{$user->name}}" class="form-control" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Phone Number:</label>
                        <input name="phone" id="phone" type="tel" value="{{$user->phone}}" class="form-control" placeholder="Enter your phone number">
                    </div>
                    @endforeach
                    <div class="text-right">
                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
