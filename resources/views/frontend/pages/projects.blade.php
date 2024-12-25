@extends('layouts.frontend.pages')

@section('style')
	<style>

	</style>
@endsection


@section('content')

    @include('partials.breadcrumb')

    <!-- Popular product -->
    <section class="flat-spacing-5 pt_0">
            <div class="container">
                <div class="flat-animate-tab">
                    <div class="flat-title flat-title-tab flex-row justify-content-between px-0">
                        <span class="title text-nowrap fw-6 wow fadeInUp" data-wow-delay="0s">Popular products</span>
                        <ul class="widget-tab-5" role="tablist">
                            <li class="nav-tab-item" role="presentation">   
                                <a href="#meat" class="active" data-bs-toggle="tab">Meat</a>
                            </li>
                            <li class="nav-tab-item" role="presentation">
                                <a href="#oils"  data-bs-toggle="tab">Oils</a>
                            </li>
                            <li class="nav-tab-item" role="presentation">
                                <a href="#fruits" data-bs-toggle="tab">Fruits</a>
                            </li>
                            <li class="nav-tab-item" role="presentation">
                                <a href="#tomatoes" data-bs-toggle="tab">Tomatoes</a>
                            </li>
                            <li class="nav-tab-item" role="presentation">
                                <a href="#soup" data-bs-toggle="tab">Soup</a>
                            </li>
                            <li class="nav-tab-item">
                                <a href="shop-collection-sub.html" class="d-flex align-items-center gap-10">
                                    Shop all
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">  <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor"></path></svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active show" id="meat" role="tabpanel">
                            <div class="tf-grid-layout tf-col-2 lg-col-4">
                                <!-- card product 1 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/vegetable1.jpg" src="images/products/vegetable1.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/vegetable2.jpg" src="images/products/vegetable2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Ocado Little Gem Lettuce</a>
                                            <span class="price fw-6">$85.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 2 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/fruits.jpg" src="images/products/fruits.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/fruits2.jpg" src="images/products/fruits2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Ocado Red Seedless Grapes</a>
                                            <span class="price fw-6">$4.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 3 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/meat1.jpg" src="images/products/meat1.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/meat2.jpg" src="images/products/meat2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Silere Merino Lamb Boneless Leg Joint</a>
                                            <span class="price fw-6">$13.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 4 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/fruits3.jpg" src="images/products/fruits3.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/fruits4.jpg" src="images/products/fruits4.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Ocado Little Gem Lettuce</a>
                                            <span class="price fw-6">$85.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 5 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/fruits5.jpg" src="images/products/fruits5.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/fruits6.jpg" src="images/products/fruits6.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">M&S Full-Bodied Greek Kalamata Olives</a>
                                            <span class="price fw-6">$7.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 6 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/milk.jpg" src="images/products/milk.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/milk2.jpg" src="images/products/milk2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">The Collective Suckies Peach & Apricot Yoghurt</a>
                                            <span class="price fw-6">$75.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 7 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/fish.jpg" src="images/products/fish.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/fish2.jpg" src="images/products/fish2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Fish Said Fred Sea Bass Fillets</a>
                                            <span class="price fw-6">$6.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 8 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/vegetable3.jpg" src="images/products/vegetable3.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/vegetable4.jpg" src="images/products/vegetable4.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Ocado British Broccoli</a>
                                            <span class="price fw-6">$72.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="oils" role="tabpanel">
                            <div class="tf-grid-layout tf-col-2 lg-col-4">
                                <!-- card product 1 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/vegetable1.jpg" src="images/products/vegetable1.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/vegetable2.jpg" src="images/products/vegetable2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Ocado Little Gem Lettuce</a>
                                            <span class="price fw-6">$85.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 2 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/fruits.jpg" src="images/products/fruits.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/fruits2.jpg" src="images/products/fruits2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Ocado Red Seedless Grapes</a>
                                            <span class="price fw-6">$4.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 3 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/meat1.jpg" src="images/products/meat1.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/meat2.jpg" src="images/products/meat2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Silere Merino Lamb Boneless Leg Joint</a>
                                            <span class="price fw-6">$13.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 4 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/fruits3.jpg" src="images/products/fruits3.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/fruits4.jpg" src="images/products/fruits4.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Ocado Little Gem Lettuce</a>
                                            <span class="price fw-6">$85.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 5 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/fruits5.jpg" src="images/products/fruits5.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/fruits6.jpg" src="images/products/fruits6.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">M&S Full-Bodied Greek Kalamata Olives</a>
                                            <span class="price fw-6">$7.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 6 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/milk.jpg" src="images/products/milk.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/milk2.jpg" src="images/products/milk2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">The Collective Suckies Peach & Apricot Yoghurt</a>
                                            <span class="price fw-6">$75.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 7 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/fish.jpg" src="images/products/fish.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/fish2.jpg" src="images/products/fish2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Fish Said Fred Sea Bass Fillets</a>
                                            <span class="price fw-6">$6.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 8 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/vegetable3.jpg" src="images/products/vegetable3.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/vegetable4.jpg" src="images/products/vegetable4.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Ocado British Broccoli</a>
                                            <span class="price fw-6">$72.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="fruits" role="tabpanel">
                            <div class="tf-grid-layout tf-col-2 lg-col-4">
                                <!-- card product 1 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/vegetable1.jpg" src="images/products/vegetable1.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/vegetable2.jpg" src="images/products/vegetable2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Ocado Little Gem Lettuce</a>
                                            <span class="price fw-6">$85.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 2 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/fruits.jpg" src="images/products/fruits.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/fruits2.jpg" src="images/products/fruits2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Ocado Red Seedless Grapes</a>
                                            <span class="price fw-6">$4.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 3 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/meat1.jpg" src="images/products/meat1.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/meat2.jpg" src="images/products/meat2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Silere Merino Lamb Boneless Leg Joint</a>
                                            <span class="price fw-6">$13.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 4 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/fruits3.jpg" src="images/products/fruits3.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/fruits4.jpg" src="images/products/fruits4.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Ocado Little Gem Lettuce</a>
                                            <span class="price fw-6">$85.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 5 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/fruits5.jpg" src="images/products/fruits5.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/fruits6.jpg" src="images/products/fruits6.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">M&S Full-Bodied Greek Kalamata Olives</a>
                                            <span class="price fw-6">$7.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 6 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/milk.jpg" src="images/products/milk.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/milk2.jpg" src="images/products/milk2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">The Collective Suckies Peach & Apricot Yoghurt</a>
                                            <span class="price fw-6">$75.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 7 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/fish.jpg" src="images/products/fish.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/fish2.jpg" src="images/products/fish2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Fish Said Fred Sea Bass Fillets</a>
                                            <span class="price fw-6">$6.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 8 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/vegetable3.jpg" src="images/products/vegetable3.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/vegetable4.jpg" src="images/products/vegetable4.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Ocado British Broccoli</a>
                                            <span class="price fw-6">$72.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tomatoes" role="tabpanel">
                            <div class="tf-grid-layout tf-col-2 lg-col-4">
                                <!-- card product 1 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/vegetable1.jpg" src="images/products/vegetable1.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/vegetable2.jpg" src="images/products/vegetable2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Ocado Little Gem Lettuce</a>
                                            <span class="price fw-6">$85.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 2 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/fruits.jpg" src="images/products/fruits.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/fruits2.jpg" src="images/products/fruits2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Ocado Red Seedless Grapes</a>
                                            <span class="price fw-6">$4.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 3 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/meat1.jpg" src="images/products/meat1.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/meat2.jpg" src="images/products/meat2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Silere Merino Lamb Boneless Leg Joint</a>
                                            <span class="price fw-6">$13.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 4 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/fruits3.jpg" src="images/products/fruits3.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/fruits4.jpg" src="images/products/fruits4.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Ocado Little Gem Lettuce</a>
                                            <span class="price fw-6">$85.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 5 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/fruits5.jpg" src="images/products/fruits5.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/fruits6.jpg" src="images/products/fruits6.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">M&S Full-Bodied Greek Kalamata Olives</a>
                                            <span class="price fw-6">$7.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 6 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/milk.jpg" src="images/products/milk.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/milk2.jpg" src="images/products/milk2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">The Collective Suckies Peach & Apricot Yoghurt</a>
                                            <span class="price fw-6">$75.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 7 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/fish.jpg" src="images/products/fish.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/fish2.jpg" src="images/products/fish2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Fish Said Fred Sea Bass Fillets</a>
                                            <span class="price fw-6">$6.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 8 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/vegetable3.jpg" src="images/products/vegetable3.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/vegetable4.jpg" src="images/products/vegetable4.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Ocado British Broccoli</a>
                                            <span class="price fw-6">$72.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="soup" role="tabpanel">
                            <div class="tf-grid-layout tf-col-2 lg-col-4">
                                <!-- card product 1 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/vegetable1.jpg" src="images/products/vegetable1.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/vegetable2.jpg" src="images/products/vegetable2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Ocado Little Gem Lettuce</a>
                                            <span class="price fw-6">$85.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 2 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/fruits.jpg" src="images/products/fruits.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/fruits2.jpg" src="images/products/fruits2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Ocado Red Seedless Grapes</a>
                                            <span class="price fw-6">$4.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 3 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/meat1.jpg" src="images/products/meat1.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/meat2.jpg" src="images/products/meat2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Silere Merino Lamb Boneless Leg Joint</a>
                                            <span class="price fw-6">$13.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 4 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/fruits3.jpg" src="images/products/fruits3.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/fruits4.jpg" src="images/products/fruits4.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Ocado Little Gem Lettuce</a>
                                            <span class="price fw-6">$85.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 5 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/fruits5.jpg" src="images/products/fruits5.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/fruits6.jpg" src="images/products/fruits6.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">M&S Full-Bodied Greek Kalamata Olives</a>
                                            <span class="price fw-6">$7.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 6 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/milk.jpg" src="images/products/milk.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/milk2.jpg" src="images/products/milk2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">The Collective Suckies Peach & Apricot Yoghurt</a>
                                            <span class="price fw-6">$75.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 7 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/fish.jpg" src="images/products/fish.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/fish2.jpg" src="images/products/fish2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Fish Said Fred Sea Bass Fillets</a>
                                            <span class="price fw-6">$6.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- card product 8 -->
                                <div class="card-product style-9">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/vegetable3.jpg" src="images/products/vegetable3.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/vegetable4.jpg" src="images/products/vegetable4.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <div class="inner-info">
                                            <a href="product-detail.html" class="title link fw-6">Ocado British Broccoli</a>
                                            <span class="price fw-6">$72.00</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- /Popular product -->
         
          <!--Projects Section-->
          <section class="activity-section">
            <div class="container">
                <div class="sec-title" style = "margin-top: 10px;">
                    <h2>Projects Highlights</h2>
                    <div class="text" style = "font-size: 14px;">Projects that highlight innovation, efficiency, and user-focused design, demonstrating proven results and expertise.</div>
                </div>

                <div class="mixit-gallery">
                    <!--Filter-->
                    <div class="global-reset filters text-center clearfix">
                        <ul class="filter-tabs filter-btns clearfix">
                            <li class="filter active" data-role="button" data-filter="all"><span class="txt">All</span></li>
                                @foreach ($categories as $category)
                                    <li class="filter" data-role="button" data-filter=".{{ $category->slug }}">
                                        <span class="txt">{{ $category->name }}</span>
                                    </li>
                                @endforeach
                         
                        </ul>                     
                    </div>  
                        <div class="filter-list row clearfix">
                            @foreach ($allprojects as $item) 
                                <!--Activity Block-->
                                <div class="activity-block mix all {{ optional($item->projectcategory)->slug }} col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <figure class="image">
                                            <img src="{{ asset($item->image) }}" alt="">
                                            <a href="{{ asset($item->image) }}" class="lightbox-image overlay" data-fancybox="gallery-two"><span class="icon fa fa-search-plus"></span></a>
                                        </figure>
                                        <div class="caption-box">
                                            <div class="cap-inner">
                                                <h3><a href="{{ $item->link}}">{{ $item->name }}</a></h3>
                                                <div class="cat-info"> {{ $item->description }} </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                </div>
            </div>
        </section>

        @include('layouts.frontend.inc.testimonials')
        
@endsection