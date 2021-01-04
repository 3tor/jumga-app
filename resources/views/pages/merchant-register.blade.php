@extends('layouts.general')
@section('content')
<section class="section-pagetop bg-dark">
    <div class="container clearfix">
        <h2 class="title-page">Merchant Registration</h2>
    </div> <!-- container //  -->
</section>
<section class="section-content bg padding-y">
    <div class="container">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <header class="card-header">
                    <h4 class="card-title mt-2">Sign up</h4>
                </header>
                <article class="card-body">
                    <form>
                        <div class="form-group">
                            <label>Business name</label>
                            <input type="text" class="form-control" placeholder="Please enter the name of business here">
                        </div>
                        <div class="form-group">
                            <label>Business phone</label>
                            <input type="text" class="form-control" placeholder="Please enter the contact/phone of business">
                        </div>
                        <div class="form-group">
                            <label>Business Email address</label>
                            <input type="email" class="form-control" placeholder="Please enter email of business e.g info@jumga.com">
                            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Country</label>
                                <select id="inputState" class="form-control">
                                    <option selected="">Choose...</option>
                                    <option>Ghana</option>
                                    <option>Nigeria</option>
                                    <option>Kenya</option>
                                    <option>UK</option>
                                </select>
                            </div>
                        </div>
                        <!-- form-row.// -->
                        <div class="form-group">
                            <label>Create password</label>
                            <input class="form-control" type="password">
                        </div>
                        <!-- form-group end.// -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"> Register </button>
                        </div>
                        <!-- form-group// -->
                        <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>
                    </form>
                </article>
                <!-- card-body end .// -->
                <div class="border-top card-body text-center">Have an account? <a href="">Log In</a></div>
            </div>
            <!-- card.// -->
        </div>
    </div>
</section>
@endsection