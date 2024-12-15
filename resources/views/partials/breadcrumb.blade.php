<!-- page-title -->
<div class="tf-page-title">
    <div class="container-full">
        <div class="row">
            <div class="col-12">
                        <div class="heading text-center"><strong> {{$title}} </strong></div>
                        <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                            <li>
                                <a href="/">Home</a>
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