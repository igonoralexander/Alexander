
@extends('layouts.frontend.pages')

@section('content')
 
    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image: url('{{ asset('storage/' . $breadcrumb_image) }}');"></div>
        <div class="auto-container">
            <h1>Thank you</h1>
        </div>
        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li class="active">Thank you</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Banner Section -->

    <div id="thankyou" class="thankyou-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="thankyou-message">
                        <br>
                        <div style="padding: 50px; text-align: center;">
                            @if(empty($thankyou_name)) 
                                <h3 style="color: #007bff;"><b>THANK YOU FOR REACHING OUT TO US</b></h3>
                            @else
                                <h3 style="color: green;"><b>DEAR <strong style = "color: black;"> {{$thankyou_name}}</strong>, THANK YOU FOR CONTACTING IG SOFTWARE NIG</b></h3>
                            @endif
                            <br>
                            <h6 style="color: #333;">We appreciate your interest in our web development and design services. Our team will review your inquiry and get back to you shortly to discuss your project in detail.</h6>
                            <br>
                            <h6 style="color: #333;">At IG Software Nig, we’re committed to turning your ideas into reality with tailored, innovative solutions that align with your business goals.</h6>
                            <br>
                            <h6 style="background-color: red; color: white; padding: 10px; border-radius: 5px;">
                                <b>Please ensure your phone is reachable and check your email for any updates from us.</b>
                            </h6>
                            <br>
                            <h6 style="color: #333;">If you have any immediate questions, feel free to reach out to us via:</h6>
                            <ul style="list-style: none; padding: 0; color: #333;">
                                <li><b>Call or WhatsApp:</b> 07069198779 </li>
                                <li><b>Email:</b> contact@igsoftware.com.ng</li>
                            </ul>
                            <br>
                            <h6 style="color: #333;">We look forward to working with you!</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
