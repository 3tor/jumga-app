@extends('layouts.general')
@section('content')
<section class="section-pagetop bg-dark">
    <div class="container clearfix">
        <h2 class="title-page">Merchant Platform Charge</h2>
    </div> <!-- container //  -->
</section>
<section class="section-content bg padding-y">
   <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <header class="card-header">
                        <h4 class="card-title mt-2">Billing Details</h4>
                    </header>
                    <article class="card-body">
                        <label class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadio" value="card_payment">
                                <span class="form-check-label">
                                Card Payments
                                </span>
                            </label>
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadio" value="bank_direct">
                                <span class="form-check-label">
                                Direct bank account payments (Nigeria)
                                </span>
                            </label>
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadio" value="bank_account">
                                <span class="form-check-label">
                                Bank account payments (UK)
                                </span>
                            </label>
                            <label class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadio" value="mobile_money">
                                <span class="form-check-label">
                                Mobile Money
                                </span>
                            </label>
                        <form>
                            <div class="form-group mt-5">
                                <label>Name on card</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="cardNumber">Card number</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="cardNumber" placeholder="">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fab fa-cc-visa"></i> &nbsp; <i class="fab fa-cc-amex"></i> &nbsp; 
                                                <i class="fab fa-cc-mastercard"></i> 
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Expiration(Month)</label>
                                    <input type="text" class="form-control" placeholder="MM">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Year</label>
                                    <input type="text" class="form-control" placeholder="YY">
                                </div>
                                <div class="form-group col-md-2">
                                    <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card" aria-describedby="tooltip873823">CVV <i class="fa fa-question-circle"></i></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </form>
                    </article>
                </div>
                <!-- card.// -->
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <header class="card-header">
                                <h4 class="card-title mt-2">Your Order</h4>
                            </header>
                            <article class="card-body">
                                <dl class="dlist-align">
                                    <dt>Name: </dt>
                                    <dd class="text-right">Value name</dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt>Contact:</dt>
                                    <dd class="text-right">Contact value</dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt>Country:</dt>
                                    <dd class="text-right">Country value</dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt>Total cost: </dt>
                                    <dd class="text-right h5 b"> USD20</dd>
                                </dl>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <button class="subscribe btn btn-success btn-lg btn-block" type="button">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection