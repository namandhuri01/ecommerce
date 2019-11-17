@extends('includes.header')
@section('content')
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
            {{-- {{dd($categories as $category)}} --}}
            @foreach ($categories as $category )
                @foreach ($category->products as $product )
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
                                        <button type="submit" class="btn btn-primary   font-weight-semibold btn-v-3 btn-fs-2">Add To Cart</button>
                                    </form>
                                </div>
                            </span>
                        </div>
                        <h3 class="text-color-default text-2 mb-0"><a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a></h3>
                        <span class="price font-primary text-4"><strong class="text-color-dark">{{ $product->presentPrice() }}</strong></span>
                        <span class="old-price font-primary text-line-trough text-2"><strong class="text-color-default">
                            
                            {{-- @if($product->mrpPrice() == 0)
                                {{$product->presentPrice()}}
                            @else
                                {{$product->mrpPrice()}}
                            
                            @endif --}}
                        </strong></span>
                    </div>
                </div>
            @endforeach
            @endforeach
        </div>
    </div>
</section>
{{-- End Grid section --}}
{{-- Testimonial Section --}}

@endsection