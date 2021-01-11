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
                    {{ Form::open(['route' => ['merchant.register'], 'files' => true]) }}
                        <div class="form-group">
                            <label>Business name</label>
                            <input type="text" class="form-control" name="business_name" value="{{ old('business_name') }}" placeholder="Please enter the name of business here" required>
                            @error('business_name')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Business phone</label>
                            <input type="text" class="form-control" name="business_phone" value="{{ old('business_phone') }}" placeholder="Please enter the contact/phone of business" required>
                            @error('business_phone')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Business Email address</label>
                            <input type="email" class="form-control" name="business_email" value="{{ old('business_email') }}" placeholder="Please enter email of business e.g info@jumga.com" required>
                            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                            @error('business_email')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Country</label>
                                <select id="inputState" name="country" value="{{ old('country') }}" class="form-control" required>
                                    <option value="" selected="">Choose...</option>
                                    <option value='gh'>Ghana</option>
                                    <option value='ng'>Nigeria</option>
                                    <option value='ke'>Kenya</option>
                                    <option value='uk'>UK</option>
                                </select>
                                @error('country')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Create password</label>
                            <input class="form-control" name="password" value="{{ old('password') }}" type="password" required>
                            @error('password')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"> Register </button>
                        </div>
                        <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>
                    {{ Form::close() }}
                </article>
                <!-- card-body end .// -->
                <div class="border-top card-body text-center">Have an account? <a href="">Log In</a></div>
            </div>
            <!-- card.// -->
        </div>
    </div>
</section>
@endsection