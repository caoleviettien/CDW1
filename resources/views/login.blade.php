@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
@parent
@endsection
@if (Session::get('login') == TRUE)
    return redirect()->intended('/index');
@endif
@section('content')
<div class="row">
    <div class="col-md-6 col-md-push-3">
        <h2>Log in to your account</h2>
        <div class="panel panel-default">
            <div class="panel-body">

                <form action="{{ url('login') }}" method="post">
                    {{ csrf_field() }}
                    @if(count($errors)>0)
                      @foreach($errors->all() as $error)
                         <p class='alert alert-danger'>{{$error}}</p>
                      @endforeach
                    @endif
                    <div class="form-group">
                        <label class="control-label">Email Address:</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" autofocus placeholder="Enter your email address">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Password:</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter your password">
                    </div>
                    <div class="text-right">
                        <button type="submit" name="login" class="btn btn-primary" value="Login">Log In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection