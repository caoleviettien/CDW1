@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
@parent
@endsection

@section('content')
<main>
    <div class="container">
        <h2>Booking</h2>
        <div class="row">
            <div class="col-md-8">
                <form role="form" action="flight-book.php" method="POST">
                    <section>
                        <h3>Contact Information</h3>
                        <div class="panel panel-default">
                            <div class="panel-body">
                            <?php 
                                foreach ($user as $row) {
                          
                             ?>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label class="control-label">
                                            First Name:
                                        </label>
                                        <input type="text" value="<?php echo $row['user_name'] ?>" class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="control-label">
                                            Last Name:
                                        </label>
                                        <input type="text" value="<?php echo $row['user_name'] ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label class="control-label">
                                            Contact's Mobile phone number
                                        </label>
                                        <input type="tel" value="<?php echo $row['user_phone'] ?>" class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="control-label">
                                            Contact's email address
                                        </label>
                                        <input type="email" name="user_email" value="<?php echo $row['user_email'] ?>" class="form-control">
                                    </div>
                                </div>
                                <?php } ?>
                                <div class="text-right">
                                    <input type="button" id = "clear" class="btn btn-default" value="Clear all">
                                    <button type="button" id = "reset" class="btn btn-default">Reset</button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <h3>Passenger(s) Details</h3>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h4>Passenger #1</h4>
                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <label class="control-label">Title:</label>
                                        <select class="form-control">
                                            <option value="mr">Mr.</option>
                                            <option value="mrs">Mrs.</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label class="control-label">First Name:</label>
                                        <input type="text" name="cus_first" class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="control-label">Last Name:</label>
                                        <input type="text" name="cus_name" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <h3>Price Details</h3>
                        <div>
                            <h5>
                                <strong class="airline"></strong>
                                <p><span class="flight-class"></span></p>
                            </h5>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="pull-left">
                                        <strong>Passengers Fare</strong>
                                    </div>
                                    <div class="pull-right">
                                        <strong>IDR</strong>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                                <li class="list-group-item">
                                    <div class="pull-left">
                                        <span>Tax</span>
                                    </div>
                                    <div class="pull-right">
                                        <span>Included</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                                <li class="list-group-item list-group-item-info">
                                    <div class="pull-left">
                                        <strong>You Pay</strong>
                                    </div>
                                    <div class="pull-right">
                                        <strong>IDR</strong>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <section>
                        <h3>Payment</h3>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="control-label">
                                        Payment Method:
                                    </label>
                                    <select class="form-control">
                                        <option value="transfer">Transfer</option>
                                        <option value="credit_card">Credit Card</option>
                                        <option value="paypal">Paypal</option>
                                    </select>
                                </div>
                                <h4>Credit Card</h4>
                                <div class="form-group">
                                    <label class="control-label">Card Number</label>
                                    <input type="number" class="form-control" placeholder="Digit card number">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <label class="control-label">Name on card:</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="control-label">CCV Code:</label>
                                        <input type="number" maxlength="3" class="form-control" placeholder="Digit CCV">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="text-right">
                            <button type="submit" name="submit" class="btn btn-primary">
                                Continue to Booking
                            </button>
                        </div>
                    </section>
                </form>
            </div>
            <div class="col-md-4">
                <h3>Flights</h3>
                <aside>
                    <article>
                        <div>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5>
                                        <strong class="airline"></strong>
                                        <p><span class="flight-class">Economy</span></p>
                                    </h5>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div><big class="time"></big></div>
                                                    <div><small class="date"></small></div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div><span class="place"></span></div>
                                                    <div><small class="airport">Soekarno Hatta Intl Airport</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <i class="glyphicon glyphicon-arrow-down"></i>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div><big class="time"></big></div>
                                                    <div><small class="date"></small></div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div><span class="place"></span></div>
                                                    <div><small class="airport">Doha Hamad International Airport</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                                <li class="list-group-item list-group-item-warning">
                                    <ul>
                                        <li>Transit for 1h 30m in Doha (DOH)</li>
                                    </ul>
                                </li>
                                <li class="list-group-item">
                                    <h5>
                                        <strong class="airline">Qatar Airways QR-1052</strong>
                                        <p><span class="flight-class">Economy</span></p>
                                    </h5>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div><big class="time">00:50</big></div>
                                                    <div><small class="date">30 Apr 2017</small></div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div><span class="place">Doha (DOH)</span></div>
                                                    <div><small class="airport">Doha Hamad International Airport</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <i class="glyphicon glyphicon-arrow-down"></i>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div><big class="time">02:55</big></div>
                                                    <div><small class="date">30 Apr 2017</small></div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div><span class="place">Abu Dhabi (AUH)</span></div>
                                                    <div><small class="airport">Abu Dhabi Intl</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </article>
                </aside>
            </div>
        </div>
    </div>
    <br>
</main>
@endsection