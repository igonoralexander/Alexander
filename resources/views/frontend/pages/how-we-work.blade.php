@extends('layouts.frontend.pages')

@section('style')
    <style>
        /* Paragraph spacing */
        .text p {
            margin: 1em 0;
        }

        /* List styling */
        .text ul,
        .text ol {
            margin: 1em 0;
            padding-left: 1.5em;
        }

        .text ul li,
        .text ol li {
            line-height: 1.6;
            margin-bottom: 0.5em;
        }

        /* Bullet styling */
        .text ul {
            list-style-type: disc;
        }

        .text ol {
            list-style-type: decimal;
        }

        /* Additional formatting */
        .text h1, .text h2, .text h3, .text h4, .text h5, .text h6 {
            margin-top: 1.5em;
            margin-bottom: 0.5em;
            line-height: 1.2;
        }

        /* Optional: Quote styling */
        .text blockquote {
            margin: 1em 1.5em;
            padding-left: 1em;
            border-left: 4px solid #ccc;
            color: #666;
        }
    </style>
@endsection


@section('content')
    @include('partials.breadcrumb')

    <!--About Section-->
    <section class="about-section-three">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Text Column-->
                <div class="text-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <h2> {{ $howweworkpage->main_title }} </h2>
                        </div>
                        
                        <div class="text" style="font-family: Arial, sans-serif; font-size: 14px; text-align: justify; line-height: 1.6; color: #333;">{!! $howweworkpage->content !!}</div></br>

                    </div>
                </div>
                <!--Image Column-->
                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <figure class="image wow slideInRight" data-wow-delay="0ms"><img src="{{ asset($about->featured_image)}}" alt="" /></figure>
                </div>
            </div>

            @include('layouts.frontend.inc.contactus-cta')
            
        </div>
    
    </section>

@endsection