@extends('layouts.frontend.pages')

@section('style')
    <style>
    /* Paragraph spacing */
    
        .faq-block .text ul {
            list-style-type: disc; /* Adds bullet points */
            margin-left: 20px; /* Adds some spacing to align bullets */
        }

        .faq-block .text li {
            margin-bottom: 8px; /* Adds spacing between list items */
        }

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

    <!--FAQs Section-->
    <section class="faq-section">
        <div class="auto-container">
                        
            <div class="row clearfix">
                <!--FAQ Column -->
                <div class="faq-column col-lg-12 col-md-12 col-sm-12">
                            <div class="faq-block">
                                <div class="text" style="font-family: Arial, sans-serif; text-align: justify; font-size: 14px; line-height: 1.5; color: #333;">{!! $terms_conditions->content !!}</div>
                            </div>
                </div>
            </div>
            
        </div>
    </section>

@endsection