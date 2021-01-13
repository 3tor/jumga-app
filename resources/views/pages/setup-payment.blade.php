@extends('layouts.general')
@section('css')
<style>
	.credit-card-form, .bank-form, .mobile-money-form{
		display: none;
	}
</style>
@endsection
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
                        {{ Form::open(['route' => ['setup.payment'], 'class' => 'credit-card-form']) }}
                            <div class="form-group mt-5">
                                <label>Name on card</label>
                                <input type="text" class="form-control" name="name_of_card" placeholder="">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="cardNumber">Card number</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" name="cardNumber" placeholder="">
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
                                    <input type="number" class="form-control" name="expiry_month" placeholder="MM">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Year</label>
                                    <input type="number" class="form-control" name="expiry_year" placeholder="YY">
                                </div>
                                <div class="form-group col-md-2">
                                    <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card" aria-describedby="tooltip873823">CVV <i class="fa fa-question-circle"></i></label>
                                    <input type="number" class="form-control" name="cvv">
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <button class="subscribe btn btn-success btn-lg btn-block" type="submit">Make Payment</button>
                            </div>
                        {{ Form::close() }}
                        {{ Form::open(['route' => ['setup.payment'], 'class' => 'bank-form mt-5']) }}
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Account Bank</label>
                                    <input type="text" class="form-control" placeholder="Account Bank">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Account Number</label>
                                    <input type="text" class="form-control" placeholder="Account Number">
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <button class="subscribe btn btn-success btn-lg btn-block" type="submit">Make Payment</button>
                            </div>
                        {{ Form::close() }}
                        {{ Form::open(['route' => ['setup.payment'], 'class' => 'mobile-money-form mt-5']) }}
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                </div>
                                <div class="form-group col-md-6">
                                   <label>Phone Number</label>
                                   <select id="inputState" name="network" class="form-control" required>
                                    <option value="" selected="">Choose...</option>
                                    <option value='MTN'>MTN</option>
                                    <option value='VODAFONE'>VODAFONE</option>
                                    <option value='TIGO'>TIGO</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <button class="subscribe btn btn-success btn-lg btn-block" type="submit">Make Payment</button>
                            </div>
                        {{ Form::close() }}
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
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('.form-check-input').click(function(){
            var payment_options = $('input[name="exampleRadio"]:checked').val();
            if(payment_options === 'card_payment'){
                $(".credit-card-form").show();
                $(".bank-form").hide();
                $(".mobile-money-form").hide();
            }
            else if(payment_options === 'bank_direct' || payment_options === 'bank_account'){
                $(".bank-form").show();
                $(".credit-card-form").hide();
                $(".mobile-money-form").hide();
            }
            else if(payment_options === 'mobile_money'){
                $(".mobile-money-form").show();
                $(".credit-card-form").hide();
                $(".bank-form").hide();
            }
        });
    });
</script>
@endsection