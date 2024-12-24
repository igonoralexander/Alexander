@extends('layouts.frontend.pages')

@section('style')
	<style>

	</style>
@endsection

@section('content')

    @include('partials.breadcrumb')


        <!-- FAQ -->
        <section class="flat-spacing-11">
            <div class="container">
                <div class="tf-accordion-wrap d-flex justify-content-between">
                    <div class="content">
                        <h5 class="mb_24">Frequently Ask Questions</h5>
                        <div class="flat-accordion style-default has-btns-arrow mb_60">
                            @foreach ($faq as $item)
                                <div class="flat-toggle">
                                    <div class="toggle-title"> {{$item->question}}</div>
                                    <div class="toggle-content">
                                        <p>{{$item->answer}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="box tf-other-content radius-10 bg_grey-8">
                        <h5 class="mb_20">Have a question</h5>
                        <p class="text_black-2 mb_40">If you have an issue or question that requires immediate assistance, you can click the button below to leave a message or chat live with us.</p>
                        <div class="d-flex gap-20 align-items-center">
                            <a href="/contact" class="tf-btn radius-3 btn-fill animate-hover-btn justify-content-center">Contact us</a>
                            <a href="https://wa.me/+2347069198779?text=Hello%20Alexander" target="_blank" aria-label="Chat with us on WhatsApp" class="tf-btn btn-line">Live chat<i class="icon icon-arrow1-top-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /FAQ -->

@endsection