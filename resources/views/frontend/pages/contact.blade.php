@extends('layouts.frontend.pages')

@section('style')
	<style>

	</style>
@endsection

@section('content')
        
        @include('partials.breadcrumb')
        
        <!-- form -->
        <section class="flat-spacing-21">
            <div class="container">
                <div class="tf-grid-layout gap30 lg-col-2">
                    <div class="tf-content-left">
                        <div class="mb_36">
                            <h2 class="mb_15"><strong>My Availability</strong></h2>
                            <p class="mb_15">I am available for hire, consultations and collaborations.</p>
                        </div>
                        <div class="mb_20">
                            <p class="mb_15"><strong>Phone</strong></p>
                            <p>{{ $contact->phone }}</p>
                        </div>
                        <div class="mb_20">
                            <p class="mb_15"><strong>Email</strong></p>
                            <p>{{ $contact->email }}</p>
                        </div>
                        
                        <div>
                            <ul class="tf-social-icon d-flex gap-20 style-default">
                                <li><a href="{{ $contact->linkedin }}" target="_blank" rel="noopener noreferrer" class="box-icon link round social-linkedin border-line-black"><i class="fab fa-linkedin fs-14"></i></a></li>
                                <li><a href="{{ $contact->github }}" target="_blank" rel="noopener noreferrer" class="box-icon link round social-github border-line-black"><i class="fab fa-github fs-14"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tf-content-right">
                        <h5 class="mb_20">{{ $contact->title }}</h5>
                        <p class="mb_24">{{ $contact->description }}</p>
                        <div>
                            <form class="form-contact" action="{{ route('send.email') }}" method="post">
                                @csrf
                                @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session('message') }}
                                    </div>
                                @endif

                                <div class="d-flex gap-15 mb_15">
                                    <fieldset class="w-100">
                                        <input type="text" name="name" id="name" required placeholder="Name *"/>
                                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </fieldset>

                                    <fieldset class="w-100">
                                        <input type="email" name="email" id="email" required placeholder="Email *"/>
                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </fieldset>
                                </div>
                                <div class="mb_15">
                                    <textarea placeholder="Message" name="content" id="content" required cols="30" rows="10"></textarea>
                                    @error('content') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="send-wrap">
                                    <button type="submit" class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /form -->

@endsection
