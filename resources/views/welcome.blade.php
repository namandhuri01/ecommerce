@extends('includes.header')
{{-- @section('title', 'Checkout') --}}
@section('content')
    <div class="main" role="main">
        {{-- Rev Slider --}}
        <div class="slider-container slider-container-height-600 rev_slider_wrapper">
            <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.7" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'sliderLayout': 'standard', 'gridwidth': [1140,960,720,540], 'gridheight': [600,600,600,600], 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,576], 'navigation' : {'arrows': { 'enable': true, 'hide_under': 767, 'style': 'slider-arrows-style-1 slider-arrows-light' }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 35, 'h_offset': 0}}}">
                    <ul>
                        <li data-transition="fade">
                            <img src="img/slides/shop/slide-1-1.jpg"  
                                alt=""
                                data-bgposition="center center" 
                                data-bgfit="cover" 
                                data-bgrepeat="no-repeat" 
                                data-kenburns="on" 
                                data-duration="2500" 
                                data-ease="Power2.easeInOut" 
                                data-scalestart="125" 
                                data-scaleend="100" 
                                data-rotatestart="0" 
                                data-rotateend="0" 
                                data-blurstart="20" 
                                data-blurend="0" 
                                data-offsetstart="0 0" 
                                data-offsetend="0 0"
                                class="rev-slidebg">

                            <div class="tp-caption text-color-light font-primary font-weight-bold"
                                data-x="left" data-hoffset="['52','52','17','17']"
                                data-y="center" data-voffset="['-80','-80','-80','-70']"
                                data-start="1000"
                                data-fontsize="['55','55','55','55']"
                                data-lineheight="['60','60','60','60']"
                                data-transform_in="y:[100%];opacity:0;s:500;"
                                data-transform_out="y:[100%];opacity:0;s:500;"
                                data-mask_in="x:0px;y:0px;">SUMMER</div>

                            <div class="tp-caption text-color-light font-primary font-weight-bold"
                                data-x="left" data-hoffset="['50','50','15','15']"
                                data-y="center" data-voffset="['-30','-30','-30','-30']"
                                data-start="1000"
                                data-fontsize="['55','55','55','47']"
                                data-lineheight="['60','60','60','52']"
                                data-transform_in="y:[100%];opacity:0;s:500;"
                                data-transform_out="y:[100%];opacity:0;s:500;"
                                data-mask_in="x:0px;y:0px;">COLLECTION</div>

                            <div class="tp-caption text-color-light font-primary"
                                data-x="left" data-hoffset="['50','50','15','15']"
                                data-y="center" data-voffset="['30','30','30','15']"
                                data-start="1000"
                                data-fontsize="['18','18','18','18']"
                                data-lineheight="['25','25','25','25']"
                                data-transform_in="y:[100%];opacity:0;s:500;"
                                data-transform_out="y:[100%];opacity:0;s:500;"
                                data-mask_in="x:0px;y:0px;">COOL GIRLS STYLE UP TO <span class="bg-light text-color-dark font-weight-bold p-1">40% OFF</span></div>

                            <a class="tp-caption btn btn-rounded btn-primary font-weight-semibold text-1"
                                href="shop-3-columns-right-sidebar.html"
                                data-x="left" data-hoffset="['50','50','15','15']"
                                data-y="center" data-voffset="['115','115','115','115']"
                                data-start="1600"
                                data-whitespace="nowrap"
                                data-fontsize="['13','14','14','14']"
                                data-paddingtop="['13','14','14','14']"
                                data-paddingbottom="['13','13','13','16']"
                                data-paddingleft="['70','70','70','70']"
                                data-paddingright="['70','70','70','70']"	 
                                data-transform_in="y:[-50%];opacity:0;s:500;"
                                data-transform_out="y:[50%];opacity:0;s:500;">SHOP NOW
                            </a>
                                
                        </li>
                        <li data-transition="fade">
                            <img src="img/slides/shop/slide-1-2.jpg"  
                                    alt=""
                                    data-bgposition="center center" 
                                    data-bgfit="cover" 
                                    data-bgrepeat="no-repeat" 
                                    data-kenburns="on" 
                                    data-duration="2500" 
                                    data-ease="Power2.easeInOut" 
                                    data-scalestart="125" 
                                    data-scaleend="100" 
                                    data-rotatestart="0" 
                                    data-rotateend="0" 
                                    data-blurstart="20" 
                                    data-blurend="0" 
                                    data-offsetstart="0 0" 
                                    data-offsetend="0 0"
                                    class="rev-slidebg">

                            <div class="tp-caption text-color-light font-primary font-weight-bold"
                                data-x="left" data-hoffset="['750','630','420','290']"
                                data-y="center" data-voffset="['-80','-80','-80','-70']"
                                data-start="1000"
                                data-fontsize="['55','55','55','55']"
                                data-lineheight="['60','60','60','60']"
                                data-transform_in="y:[100%];opacity:0;s:500;"
                                data-transform_out="y:[100%];opacity:0;s:500;"
                                data-mask_in="x:0px;y:0px;">COOL
                            </div>

                            <div class="tp-caption text-color-light font-primary font-weight-bold"
                                data-x="left" data-hoffset="['750','630','420','290']"
                                data-y="center" data-voffset="['-30','-30','-30','-30']"
                                data-start="1000"
                                data-fontsize="['55','55','55','47']"
                                data-lineheight="['60','60','60','52']"
                                data-transform_in="y:[100%];opacity:0;s:500;"
                                data-transform_out="y:[100%];opacity:0;s:500;"
                                data-mask_in="x:0px;y:0px;">DRESSES
                            </div>

                            <div class="tp-caption text-color-light font-primary"
                                data-x="left" data-hoffset="['750','630','420','290']"
                                data-y="center" data-voffset="['30','30','30','15']"
                                data-start="1000"
                                data-fontsize="['18','18','18','18']"
                                data-lineheight="['25','25','25','25']"
                                data-transform_in="y:[100%];opacity:0;s:500;"
                                data-transform_out="y:[100%];opacity:0;s:500;"
                                data-mask_in="x:0px;y:0px;">SALE UP TO <span class="bg-light text-color-dark font-weight-bold p-1">35% OFF</span>
                            </div>

                        <a class="tp-caption btn btn-rounded btn-primary font-weight-semibold text-1"
                            href="shop-3-columns-right-sidebar.html"
                            data-x="left" data-hoffset="['750','630','420','290']"
                            data-y="center" data-voffset="['115','115','115','115']"
                            data-start="1600"
                            data-whitespace="nowrap"
                            data-fontsize="['13','14','14','14']"
                            data-paddingtop="['13','14','14','14']"
                            data-paddingbottom="['13','13','13','16']"
                            data-paddingleft="['70','70','70','70']"
                            data-paddingright="['70','70','70','70']"	 
                            data-transform_in="y:[-50%];opacity:0;s:500;"
                            data-transform_out="y:[50%];opacity:0;s:500;">SHOP NOW
                        </a>
                                
                    </li>
                </ul>
            </div>
        </div>
        {{-- End Rev slider --}}
        {{-- 3 Image Section --}}
        <section class="section pt-4 pb-5 mt-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                        <div class="image-frame">
                            <div class="image-frame-wrapper">
                                <img src="img/shop/product-bg-1.jpg" class="img-fluid" alt="">
                                <div class="image-frame-info image-frame-info-show flex-column align-items-start px-4 mx-2">
                                    <span class="text-color-dark font-primary font-weight-bold text-3">Amazing</span>
                                    <h2 class="text-color-dark font-weight-bold text-4 mb-4">LADIES BOOTS</h2>
                                    <a href="shop-3-columns-left-sidebar.html" class="btn btn-dark btn-rounded font-weight-bold btn-h-1 btn-v-3 text-0">SALE UP TO 20%</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeIn">
                        <div class="image-frame">
                            <div class="image-frame-wrapper">
                                <img src="img/shop/product-bg-2.jpg" class="img-fluid" alt="">
                                <div class="image-frame-info image-frame-info-show flex-column align-items-start px-4 mx-2">
                                    <span class="text-color-dark font-primary font-weight-bold text-3">Cool</span>
                                    <h2 class="text-color-dark font-weight-bold text-4 mb-4">MENS JACKETS</h2>
                                    <a href="shop-3-columns-left-sidebar.html" class="btn btn-dark btn-rounded font-weight-bold btn-h-1 btn-v-3 text-0">SALE UP TO 15%</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                        <div class="image-frame">
                            <div class="image-frame-wrapper">
                                <img src="img/shop/product-bg-3.jpg" class="img-fluid" alt="">
                                <div class="image-frame-info image-frame-info-show flex-column align-items-start px-4 mx-2">
                                    <span class="text-color-dark font-primary font-weight-bold text-3">Trendy</span>
                                    <h2 class="text-color-dark font-weight-bold text-4 mb-4">SCHOOL BAG</h2>
                                    <a href="shop-3-columns-left-sidebar.html" class="btn btn-dark btn-rounded font-weight-bold btn-h-1 btn-v-3 text-0">SALE UP TO 70%</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End 3 imag section --}}
        {{-- Product Grid Section --}}
        <section class="section pt-0 pb-5">
            <div class="container">
                    @if (session()->has('success_message'))
                    <div class="alert alert-success">
                        {{ session()->get('success_message') }}
                    </div>
                @endif
        
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row text-center mb-4">
                    <div class="col">
                        <div class="overflow-hidden">
                            <span class="d-block top-sub-title text-color-primary appear-animation" data-appear-animation="maskUp">RECOMENDED</span>
                        </div>
                        <div class="overflow-hidden mb-2">
                            <h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Sale Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                    <div class="col">
                        <div class="owl-carousel owl-theme nav-style-3" data-plugin-options="{'loop': true, 'autoplay': false, 'items': 4, 'nav': true, 'dots': false, 'margin': 20, 'autoplayHoverPause': true, 'autoHeight': true}">
                            @foreach($products as $product)
                                <div class="text-center">
                                    <div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
                                        <div class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                                            <a href="{{ route('shop.show', $product->slug) }}">
                                                <img src="{{ productImage($product->image)}}" class="img-fluid" alt="">
                                            </a>
                                            <div class="image-frame-action">
                                                <form action="{{ route('cart.store') }}" method="POST">
                                                        {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                                    <input type="hidden" name="name" value="{{ $product->name }}">
                                                    <input type="hidden" name="price" value="{{ $product->price }}">
                                                    <button type="submit" class="btn btn-primary btn-rounded font-weight-semibold btn-v-3 btn-fs-2">Add To Cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="text-color-default text-2 mb-0"><a href="{{ route('shop.show', $product->slug) }}">{{$product->name}}</a></h3>
                                    <span class="price font-primary text-4"><strong class="text-color-dark">{{$product->presentPrice()}}</strong></span>
                                    <span class="old-price font-primary text-line-trough text-2"><strong class="text-color-default">{{$product->presentPrice()}}</strong></span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        {{-- Background color category section --}}
        <section class="section bg-primary appear-animation" data-appear-animation="fadeIn">
            <div class="container">
                <div class="row text-center mb-4">
                    <div class="col">
                        <div class="overflow-hidden">
                            <span class="d-block top-sub-title text-color-light appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">RECOMENDED</span>
                        </div>
                        <div class="overflow-hidden mb-2">
                            <h2 class="text-color-light font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Browser Our Categories</h2>
                        </div>
                    </div>
                </div>
                <div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                    <div class="col">
                        <div class="owl-carousel owl-theme carousel-items-border-divider nav-style-3 nav-color-light" data-plugin-options="{'loop': true, 'autoplay': false, 'items': 4, 'nav': true, 'dots': false, 'autoplayHoverPause': true, 'autoHeight': true}">
                            <div class="px-3">
                                <a href="shop-3-columns-left-sidebar.html">
                                    <div class="icon-box-animation-1 icon-box-animation-1-light">
                                        <div class="icon-box icon-box-style-5 p-4">
                                            <div class="icon-box-icon mb-3">
                                                <img width="70" src="img/icons/home.svg" alt="" data-icon data-plugin-options="{'color': '#FFF'}" />
                                            </div>
                                            <div class="icon-box-info">
                                                <div class="icon-box-info-title">
                                                    <h4 class="text-color-light mb-0">HOME & GARDEN</h4>
                                                </div>
                                                <p class="text-color-light font-primary">55 PRODUCTS</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="px-3">
                                <a href="shop-3-columns-left-sidebar.html">
                                    <div class="icon-box-animation-1 icon-box-animation-1-light">
                                        <div class="icon-box icon-box-style-5 p-4">
                                            <div class="icon-box-icon mb-3">
                                                <img width="70" src="img/icons/sports.svg" alt="" data-icon data-plugin-options="{'color': '#FFF'}" />
                                            </div>
                                            <div class="icon-box-info">
                                                <div class="icon-box-info-title">
                                                    <h4 class="text-color-light mb-0">SPORTS</h4>
                                                </div>
                                                <p class="text-color-light font-primary">155 PRODUCTS</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="px-3">
                                <a href="shop-3-columns-left-sidebar.html">
                                    <div class="icon-box-animation-1 icon-box-animation-1-light">
                                        <div class="icon-box icon-box-style-5 p-4">
                                            <div class="icon-box-icon mb-3">
                                                <img width="70" src="img/icons/technology.svg" alt="" data-icon data-plugin-options="{'color': '#FFF'}" />
                                            </div>
                                            <div class="icon-box-info">
                                                <div class="icon-box-info-title">
                                                    <h4 class="text-color-light mb-0">ELECTRONICS</h4>
                                                </div>
                                                <p class="text-color-light font-primary">15 PRODUCTS</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="px-3">
                                <a href="shop-3-columns-left-sidebar.html">
                                    <div class="icon-box-animation-1 icon-box-animation-1-light">
                                        <div class="icon-box icon-box-style-5 p-4">
                                            <div class="icon-box-icon mb-3">
                                                <img width="70" src="img/icons/fashion.svg" alt="" data-icon data-plugin-options="{'color': '#FFF'}" />
                                            </div>
                                            <div class="icon-box-info">
                                                <div class="icon-box-info-title">
                                                    <h4 class="text-color-light mb-0">FASHION</h4>
                                                </div>
                                                <p class="text-color-light font-primary">25 PRODUCTS</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="px-3">
                                <a href="shop-3-columns-left-sidebar.html">
                                    <div class="icon-box-animation-1 icon-box-animation-1-light">
                                        <div class="icon-box icon-box-style-5 p-4">
                                            <div class="icon-box-icon mb-3">
                                                <img width="70" src="img/icons/jewelry.svg" alt="" data-icon data-plugin-options="{'color': '#FFF'}" />
                                            </div>
                                            <div class="icon-box-info">
                                                <div class="icon-box-info-title">
                                                    <h4 class="text-color-light mb-0">JEWELRY</h4>
                                                </div>
                                                <p class="text-color-light font-primary">51 PRODUCTS</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Background color category section --}}
        {{-- Product grid section --}}
        <section class="section">
                <div class="container">
                    <div class="row text-center mb-4">
                        <div class="col">
                            <div class="overflow-hidden">
                                <span class="d-block top-sub-title text-color-primary appear-animation" data-appear-animation="maskUp">WHAT'S NEW?</span>
                            </div>
                            <div class="overflow-hidden mb-2">
                                <h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">New Arrivals</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-sm-6 col-lg-3 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                <div class="text-center mb-4">
                                    <div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
                                        <span class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                                            <a href="{{ route('shop.show', $product->slug) }}">
                                                <img src="{{ productImage($product->image)}}" class="img-fluid" alt="">
                                            </a>
                                            <div class="image-frame-action">
                                                <form action="{{ route('cart.store') }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                                    <input type="hidden" name="name" value="{{ $product->name }}">
                                                    <input type="hidden" name="price" value="{{ $product->price }}">
                                                    <button type="submit" class="btn btn-primary btn-rounded font-weight-semibold btn-v-3 btn-fs-2">Add To Cart</button>
                                                </form>
                                            </div>
                                        </span>
                                    </div>
                                    <h3 class="text-color-default text-2 mb-0"><a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a></h3>
                                    <span class="price font-primary text-4"><strong class="text-color-dark">{{ $product->presentPrice() }}</strong></span>
                                    <span class="old-price font-primary text-line-trough text-2"><strong class="text-color-default">{{ $product->presentPrice() }}</strong></span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        {{-- End Grid section --}}
        {{-- Testimonial Section --}}
        <div class="section section-background section-height-3 overlay overlay-color-primary overlay-show overlay-op-9" data-plugin-image-background data-plugin-options="{'imageUrl': 'img/backgrounds/background-1.jpg'}">
            <div class="container">
                <div class="row appear-animation" data-appear-animation="fadeInLeftShorter">
                    <div class="col">

                        <div class="owl-carousel owl-theme dots-style-3 nav-style-3 mb-0" data-plugin-options="{'items': 1, 'dots': true, 'nav': true, 'navtext': []}">
                            <div>
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-md-9 text-center">
                                        <div class="testimonial testimonial-style-1">
                                            <blockquote>
                                                <p class="text-light">" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam magna purus, aliquet vitae nisi ac, aliquet consectetur est. Suspendisse mattis eu urna eget sodales. Phasellus a vehicula risus. Donec pharetra lectus quis. "</p>
                                            </blockquote>
                                            <div class="testimonial-author mb-4">
                                                <span>
                                                    <strong class="text-light">John Doe</strong>
                                                    <span class="text-light">Okler Themes</span>
                                                </span>
                                            </div>
                                        </div>		
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-md-9 text-center">
                                        <div class="testimonial testimonial-style-1">
                                            <blockquote>
                                                <p class="text-light">" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam magna purus, aliquet vitae nisi ac, aliquet consectetur est. Suspendisse mattis eu urna eget sodales. Phasellus a vehicula risus. Donec pharetra lectus quis. "</p>
                                            </blockquote>
                                            <div class="testimonial-author mb-4">
                                                <span>
                                                    <strong class="text-light">Bob Doe</strong>
                                                    <span class="text-light">EZY Theme</span>
                                                </span>
                                            </div>
                                        </div>		
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-md-9 text-center">
                                        <div class="testimonial testimonial-style-1">
                                            <blockquote>
                                                <p class="text-light">" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam magna purus, aliquet vitae nisi ac, aliquet consectetur est. Suspendisse mattis eu urna eget sodales. Phasellus a vehicula risus. Donec pharetra lectus quis. "</p>
                                            </blockquote>
                                            <div class="testimonial-author mb-4">
                                                <span>
                                                    <strong class="text-light">Monica Doe</strong>
                                                    <span class="text-light">Themes Inc</span>
                                                </span>
                                            </div>
                                        </div>		
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        {{-- End Testimonial section --}}
        {{-- Product Horigential grid --}}
        <section class="section pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                            <h2 class="font-weight-bold text-4 mb-4">New Arrivals Products</h2>
                            @foreach($products as $product)
                                <div class="product row align-items-center mb-4">
                                    <div class="col-4">
                                        <div class="image-frame image-frame-style-1 image-frame-effect-2">
                                            <span class="image-frame-wrapper">
                                                <img src="{{ productImage($product->image)}}" class="img-fluid" alt="">
                                                <span class="image-frame-action image-frame-action-style-2 image-frame-action-effect-1 image-frame-action-md">
                                                    <a href="{{ route('shop.show', $product->slug) }}">
                                                        <span class="image-frame-action-icon">
                                                            <i class="lnr lnr-link text-color-light"></i>
                                                        </span>
                                                    </a>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h3 class="text-color-default text-2 mb-0"><a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a></h3>
                                        <span class="price font-primary text-4"><strong class="text-color-dark">{{ $product->presentPrice() }}</strong></span>
                                        <span class="old-price font-primary text-line-trough text-2"><strong class="text-color-default">{{ $product->presentPrice() }}</strong></span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                            <h2 class="font-weight-bold text-4 mb-4">Top Rated Products</h2>

                            @foreach($products as $product)
                                <div class="product row align-items-center mb-4">
                                    <div class="col-4">
                                        <div class="image-frame image-frame-style-1 image-frame-effect-2">
                                            <span class="image-frame-wrapper">
                                                <img src="{{ productImage($product->image)}}" class="img-fluid" alt="">
                                                <span class="image-frame-action image-frame-action-style-2 image-frame-action-effect-1 image-frame-action-md">
                                                    <a href="{{ route('shop.show', $product->slug) }}">
                                                        <span class="image-frame-action-icon">
                                                            <i class="lnr lnr-link text-color-light"></i>
                                                        </span>
                                                    </a>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h3 class="text-color-default text-2 mb-0"><a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a></h3>
                                        <span class="price font-primary text-4"><strong class="text-color-dark">{{ $product->presentPrice() }}</strong></span>
                                        <span class="old-price font-primary text-line-trough text-2"><strong class="text-color-default">{{ $product->presentPrice() }}</strong></span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                            <h2 class="font-weight-bold text-4 mb-4">Special Offer</h2>
                            <div class="image-frame">
                                <div class="image-frame-wrapper align-items-center">
                                    <img src="img/shop/product-bg-14.jpg" class="img-fluid" alt="">
                                    <div class="image-frame-info image-frame-info-show flex-column align-items-start px-4 mx-2">
                                        <h2 class="text-color-light font-weight-semibold text-4 line-height-1 mb-4"><strong class="font-weight-semibold text-6">55% OFF</strong><br>SUNGLASSES</h2>
                                        <a href="shop-3-columns-left-sidebar.html" class="btn btn-primary btn-rounded font-weight-bold btn-h-2 btn-v-3">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        {{-- end grid --}}
    </div> 
    
@endsection
