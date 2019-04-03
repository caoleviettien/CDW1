@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
@parent
@endsection

@section('content')

<section>
<?php foreach ($airport as $airport): ?>
    <article>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4><strong><a href="flight-detail.blade.php">{{$airport->name}}</a></strong></h4>
                        <div class="row">                                
                            <div class="col-sm-6 text-center">
                                <h3 class="price text-danger"><strong></strong></h3>
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