@extends('layouts.frontend.pages')

@section('style')
	<style>

	</style>
@endsection

@section('content')

    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image: url( {{ asset('frontend/images/background/bg-page-title.jpg') }});"></div>

        <div class="auto-container">
            <h1>Donations</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Donation</li>
                </ul>
            </div>
        </div>

    </section>
    <!--End Banner Section -->

    <!--Donate Section-->
    <section class="donate-section">
        <div class="auto-container">
            <div class="row clearfix">        
                <!--Form Column-->
                <div class="form-column col-lg-8 col-md-12">
                    <div class="default-form donate-form">
                        <form method="post" action="{{ route('pay') }}">
                            @csrf
                            <div class="sel-payment-type">
                                <!-- <h3>What type of donation are you making?</h3> -->
                                <!-- <div class="sel-type clearfix">
                                    <div class="select-box-one"><input type="radio" name="payment-group" id="radio-one" checked><label for="radio-one">One Time Payment</label></div>
                                    <div class="select-box-one"><input type="radio" name="payment-group" id="radio-two"><label for="radio-two">Weekly</label></div>
                                    <div class="select-box-one"><input type="radio" name="payment-group" id="radio-three"><label for="radio-three">Monthly</label></div>
                                </div> -->
                            </div>
                             <div class="sel-payment-amount">
                                <h3>Donation Amount</h3>
                                <div class="select-amount clearfix">
                                    <div class="select-box-two"><input type="radio" name="payment_amount" id="radio-four" value = "10"><label for="radio-four">$10</label></div>
                                    <div class="select-box-two"><input type="radio" name="payment_amount" id="radio-five" value = "15"><label for="radio-five">$15</label></div>
                                    <div class="select-box-two"><input type="radio" name="payment_amount" id="radio-six" value = "25"><label for="radio-six">$25</label></div>
                                    <div class="select-box-two"><input type="radio" name="payment_amount" id="radio-seven" value = "50"><label for="radio-seven">$50</label></div>
                                    <div class="select-box-two"><input type="radio" name="payment_amount" id="radio-eight" value = "100"><label for="radio-eight">$100</label></div>
                                </div>
                                <div class="other-input-box clearfix">
                                    <div class="field-label">Other Amount</div>
                                    <input type="number" name="other_payment" placeholder="Enter Your Amount">
                                </div>
                            </div>
                            <!-- <h3>Personal Information</h3> -->
                            <!-- <div class="row clearfix"> -->
                                <!-- <div class="form-group col-md-6 col-sm-12">
                                    <div class="field-label">Your Name</div>
                                    <input type="text" name="field-name" value="" placeholder="" required>
                                </div> -->
                                
                                <!-- <div class="form-group col-md-6 col-sm-12">
                                    <div class="field-label">Email</div>
                                    <input type="email" name="field-name" value="" placeholder="" required>
                                </div>
                                 -->
                                <!-- <div class="form-group col-md-6 col-sm-12">
                                    <div class="field-label">Phone</div>
                                    <input type="email" name="field-name" value="" placeholder="">
                                </div> -->
                                
                                <!-- <div class="form-group col-md-6 col-sm-12">
                                    <div class="field-label">Country</div>
                                    <select class="custom-select-box">
                                        <option>Albania</option>
                                        <option>India</option>
                                        <option>Ghana</option>
                                        <option>Turkey</option>
                                        <option>United Kingdom</option>
                                        <option>USA</option>
                                    </select>
                                </div> -->

                                <!-- <div class="form-group col-md-12 col-sm-12">
                                    <div class="field-label">Address</div>
                                    <textarea name="field-name" placeholder=""></textarea>
                                </div> -->
                            <!-- </div> -->
                            <div class="payment-info">
                                <h3>Payment Method</h3>
                                <div class="payment-options clearfix">
                                    <div class="payment-info-select"><input type="radio" name="payment-option-group" id="radio-nine" checked><label for="radio-nine">PayStack <img src="{{ asset ('frontend/images/icons/icon-paystack.png') }}" alt="" /></label></div>
                                    <div class="payment-info-select"> <input type="radio" name="payment-option-group" id="radio-nine"><label for="radio-ten"> Pay With Paypal <img src="{{ asset ('frontend/images/icons/icon-paypal.png') }}" alt="" /></label></a></div>
                                </div>
                                 <div class="row clearfix">
                                    
                                    <div class="form-group col-md-12 col-sm-12">
                                        <div class="field-label">Email</div>
                                        <input type="email" name="email" value="" placeholder="" required>
                                    </div>
                                    <!-- <div class="form-group col-md-6 col-sm-12">
                                        <div class="field-label">Expiry (MM/YY)</div>
                                        <input type="text" name="field-name" value="" placeholder="" required>
                                    </div> -->
                                    
                                    <!-- <div class="form-group col-md-6 col-sm-12">
                                        <div class="field-label">CVC</div>
                                        <input type="text" name="field-name" value="" placeholder="" required>
                                    </div> -->
                                    
                                </div>
                            </div>
                            <div class="btn-box">
                               <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Donate Now</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection