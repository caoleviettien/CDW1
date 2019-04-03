@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
@parent
@endsection

@section('content')

<section>
<?php foreach ($flights as $flight): ?>
<h2> {{$flight->place_from}} <i class="glyphicon glyphicon-arrow-right"> {{$flight->place_to}} </i></h2>
    <article>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4><strong><a href="flight-detail.blade.php">Qatar Airways</a></strong></h4>
                        <div class="row">
                            <div class="col-sm-3">
                                <label class="control-label">From:</label>
                                <div><big class="time">{{$flight->time_from}}</big></div>
                                <div><span class="place">{{$flight->place_from}}</span></div>
                            </div>
                            <div class="col-sm-3">
                                <label class="control-label">To:</label>
                                <div><big class="time">{{$flight->time_to}}</big></div>
                                <div><span class="place">{{$flight->place_to}}</span></div>
                            </div>
                            <div class="col-sm-3">
                                <label class="control-label">Duration:</label>
                                <div><big class="time">{{$flight->duration}}</big></div>
                                <div><strong class="text-danger">{{$flight->transit}} Transit</strong></div>
                            </div>
                            <div class="col-sm-3 text-right">
                                <h3 class="price text-danger"><strong>{{$flight->total_sit}}</strong></h3>
                                <div>
                                    <a href="" class="btn btn-link">See Detail</a>
                                    <a href="{{ url('/flight-book') }}" class="btn btn-primary">Choose</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
<?php endforeach; ?>
<div class="text-center">
    <ul class="pagination">
        <li><a href="#">&laquo;</a></li>
        <li><a href="#">&lsaquo;</a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">&rsaquo;</a></li>
        <li><a href="#">&raquo;</a></li>
    </ul>
</div>
</section>
@endsection