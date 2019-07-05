<section class="section pt-0 pb-5">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col">
                <div class="overflow-hidden mb-2">
                    <h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Might Also Like</h2>
                </div>
            </div>
        </div>
        <div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
            <div class="col">
                <div class="owl-carousel owl-theme nav-style-3" data-plugin-options="{'loop': true, 'autoplay': false, 'items': 4, 'nav': true, 'dots': false, 'margin': 20, 'autoplayHoverPause': true, 'autoHeight': true}">
                    @foreach ($mightAlsoLike as $product)
                        <div class="text-center">
                            <div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
                                <div class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                                    <a href="{{ route('shop.show', $product->slug) }}">
                                        <img src="{{ asset('img/products/product-1.jpg') }}" class="img-fluid" alt="">
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