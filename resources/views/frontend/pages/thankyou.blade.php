
@extends('layouts.frontend.pages')

@section('content')
 
    <div id="thankyou" class="thankyou-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="thankyou-message">
                        <br>
                        <div style="padding: 50px; text-align: center;">
                            @if(empty($thankyou_name)) 
                                <h3 style="color: #007bff;"><b>THANK YOU FOR REACHING OUT TO ME</b></h3>
                            @else
                                <h3 style="color: green;"><b>DEAR <strong style = "color: black;"> {{$thankyou_name}}</strong>, THANK YOU FOR CONTACTING ME</b></h3>
                            @endif
                            <br>
                            <h6 style="color: #333;">I appreciate your interest in my services. I will review your inquiry and get back to you shortly to discuss your project in detail.</h6>
                            <br>
                            <h6 style="color: #333;">I am committed to turning your ideas into reality with customized, innovative solutions that align with your goals.</h6>
                            <br>
                            <h6 style="background-color: red; color: white; padding: 10px; border-radius: 5px;">
                                <b>Please ensure you check your email for any updates from us.</b>
                            </h6>
                            <br>
                            <h6 style="color: #333;">If you have any immediate questions, feel free to reach out to us via:</h6>
                            <ul style="list-style: none; padding: 0; color: #333;">
                                <li><b>Call or WhatsApp:</b> {{ $contact->phone }} </li>
                                <li><b>Email:</b> {{ $contact->email }}</li>
                            </ul>
                            <br>
                            <h6 style="color: #333;">I look forward to working with you!</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
