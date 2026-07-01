<!-- page-title -->
<div class="tf-page-title global-reset">
    <div class="container-full">
        <div class="row">
            <div class="col-12">
                        <br>
                        <h1 class="heading text-center text-white">{{ $title }}</h1>
                        <ul class="breadcrumbs d-flex align-items-center justify-content-center" >
                            <li>
                                <a href="/"> <strong style = "color: white;"> Home </strong> </a>
                            </li>
                            <li>
                                <i class="icon-arrow-right"></i>
                            </li>
                            @foreach($breadcrumbs as $breadcrumb)
                                <li class="{{ $loop->last ? 'active' : '' }}">
                                    @if(!$loop->last)
                                        <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['label'] }}</a>
                                    @else
                                        {{ $breadcrumb['label'] }}
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
</div>
<!-- /page-title -->


