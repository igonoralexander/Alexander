@extends('layouts.frontend.pages')

@section('style')
	<style>

	</style>
@endsection

@section('content')

    @include('partials.breadcrumb')

    <!--FAQs Section-->
    <section class="faq-section">
        <div class="auto-container">
                        
            <div class="row clearfix">
            
                <!--FAQ Column -->
                <div class="faq-column col-lg-6 col-md-12 col-sm-12">
                    @if(isset ($faq[0]))
                        @foreach ($faq[0] as $item) 
                            <div class="faq-block">
                                <h3>{{$item->question}}</h3>
                                <div class="text">{{$item->answer}}</div>
                            </div>
                        @endforeach
                    @endif
                </div>

                <!--FAQ Column -->
                <div class="faq-column col-lg-6 col-md-12 col-sm-12">
                    @if(isset ($faq[1]))
                        @foreach ($faq[1] as $item) 
                            <div class="faq-block">
                                <h3>{{$item->question}}</h3>
                                <div class="text">{{$item->answer}}</div>
                            </div>
                        @endforeach
                    @endif 
                </div>
            </div>
            @include('layouts.frontend.inc.newsletter-cta')
        </div>
    </section>

@endsection