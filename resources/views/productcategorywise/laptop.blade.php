@extends('includes.header')
@section('title', 'laptop' )
{{-- TODO: Fix sidebar,showing result  to dyanmic and grid\list view on click  --}}
@section('content')
    <div role="main" class="main">
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Products</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="container mb-4 p-4">
            <div class="row">
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
                {{-- <aside class="sidebar col-md-4 col-lg-3 order-2 order-md-1">
                    <div class="accordion accordion-default accordion-toggle accordion-style-1" role="tablist">
                
                        <div class="card">
                            <div class="card-header accordion-header" role="tab" id="categories">
                                <h5 class="mb-0">
                                    <a href="#" data-toggle="collapse" data-target="#toggleCategories" aria-expanded="false" aria-controls="toggleCategories">FASHION</a>
                                </h5>
                            </div>
                            <div id="toggleCategories" class="accordion-body collapse show" role="tabpanel" aria-labelledby="categories">
                                <div class="card-body">
                                    {{-- <ul class="list list-unstyled mb-0">
                                        @foreach ($categories as $categories)
                                            <li><a href="#">{{$categories->name}}</a></li>
                                        @endforeach
                                    </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header accordion-header" role="tab" id="price">
                                <h5 class="mb-0">
                                    <a href="#" data-toggle="collapse" data-target="#togglePrice" aria-expanded="false" aria-controls="togglePrice" class="collapsed">PRICE</a>
                                </h5>
                            </div>
                            <div id="togglePrice" class="accordion-body collapse show" role="tabpanel" aria-labelledby="price">
                                <div class="card-body">
                                    <div class="slider-range-wrapper">
                                        {{-- <div class="slider-range mb-3" data-plugin-slider-range></div>
                                        <form class="d-flex align-items-center justify-content-between" method="get">
                                            <span>
                                                Price $<span class="price-range-low">15000</span> - $<span class="price-range-high">0</span>
                                            </span>
                                            <input type="hidden" class="hidden-price-range-low" name="priceLow" value="" />
                                            <input type="hidden" class="hidden-price-range-high" name="priceHigh" value="" />
                                            <button type="submit" class="btn btn-primary btn-h-1 font-weight-bold rounded-0">FILTER</button>
                                        </form> 
                                        <ul class="list list-unstyled mb-0">
                                            <li> <a href="{{ route('category.index',['category' =>request()->category, 'sort' => 'low_high']) }}">Low To High</a></li>
                                            <li><a href="{{ route('category.index',['category' =>request()->category, 'sort' => 'high_low']) }}">High To Low</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header accordion-header" role="tab" id="sizes">
                                <h5 class="mb-0">
                                    <a href="#" data-toggle="collapse" data-target="#toggleSizes" aria-expanded="false" aria-controls="toggleSizes">SIZES</a>
                                </h5>
                            </div>
                            <div id="toggleSizes" class="accordion-body collapse show" role="tabpanel" aria-labelledby="sizes">
                                <div class="card-body">
                                    <ul class="list list-inline list-filter">
                                        <li class="list-inline-item">
                                            <a href="#">S</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="active">M</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">L</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">XL</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">2XL</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">3XL</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header accordion-header" role="tab" id="brands">
                                <h5 class="mb-0">
                                    <a href="#" data-toggle="collapse" data-target="#toggleBrands" aria-expanded="false" aria-controls="toggleBrands">BRANDS</a>
                                </h5>
                            </div>
                            <div id="toggleBrands" class="accordion-body collapse show" role="tabpanel" aria-labelledby="brands">
                                <div class="card-body">
                                    <ul class="list list-unstyled mb-0">
                                        <li><a href="#">Adidas <span class="float-right">18</span></a></li>
                                        <li><a href="#">Camel <span class="float-right">22</span></a></li>
                                        <li><a href="#">Samsung Galaxy <span class="float-right">05</span></a></li>
                                        <li><a href="#">Seiko <span class="float-right">68</span></a></li>
                                        <li><a href="#">Sony <span class="float-right">03</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside> --}}
                <div class="col-md-12 col-lg-12 order-1 order-md-2 mb-5 mb-md-0">
                    <div class="row align-items-center justify-content-between mb-4">
                        <div class="col-auto mb-3 mb-sm-0">
                            <form method="get" action="{{ route('shop.index',['category' =>request()->category, 'sort' => 'low_high']) }}">
                                <div class="custom-select-1">
                                    <select class="form-control border">
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date" selected="selected">Sort by newness</option>
                                        <option value="price"><a href="">Sort by price: low to high</a></option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                    {{-- <b>Price</b>
                                    <a href="{{ route('shop.index',['category' =>request()->category, 'sort' => 'low_high']) }}">low to high</a>
                                    <a href="{{ route('shop.index',['category' =>request()->category, 'sort' => 'high_low']) }}">high to low</a> --}}
                                </div>
                            </form>
                        </div>
                        <div class="col-auto ">
                            <h2>{{$categoryName}}</h2>
                        </div>
                        <div class="col-auto ">
                            <div class="d-flex align-items-center">
                                <span>Showing 1-9 of 60 results</span>
                                <a href="#" class="text-color-dark text-3 ml-2" data-toggle="tooltip" data-placement="top" title="Grid"><i class="fas fa-th"></i></a>
                                <a href="#" class="text-color-dark text-3 ml-2" data-toggle="tooltip" data-placement="top" title="List"><i class="fas fa-list-ul"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @forelse ($products as $product)
                            <div class="col-sm-6 col-md-3 mb-4">
                                <div class="product portfolio-item portfolio-item-style-2">
                                    <div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
                                        <span class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                                            <a href="{{ route('shop.show', $product->slug) }}">
                                                <img src="{{ asset('img/products/' .$product->slug.'.jpg')}}" class="img-fluid" alt="">
                                            </a>
                                            <span class="image-frame-action">
                                                <form action="{{ route('cart.store') }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                                    <input type="hidden" name="name" value="{{ $product->name }}">
                                                    <input type="hidden" name="price" value="{{ $product->price }}">
                                                    <button type="submit" class="btn btn-primary btn-rounded font-weight-semibold btn-v-3 btn-fs-2">Add To Cart</button>
                                                </form>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="product-info d-flex flex-column flex-lg-row justify-content-between">
                                        <div class="product-info-title">
                                            <h3 class="text-color-default text-2 line-height-1 mb-1"><a href="{{ route('shop.show', $product->slug) }}">{{$product->name}}</a></h3>
                                            <span class="price font-primary text-4"><strong class="text-color-dark">{{ $product->presentPrice() }}</strong></span>
                                            <span class="old-price font-primary text-line-trough text-1"><strong class="text-color-default">{{ $product->presentPrice() }}</strong></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                        <h2>No Product Found</h2>
                        @endforelse
                    </div>
                    <hr class="mt-5 mb-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mb-3 mb-sm-0">
                            <span>Showing 1-6 of 60 results</span>
                        </div>
                        <div class="col-auto">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination mb-0">
                                    {{-- <li class="page-item">
                                        <a class="page-link prev" href="#" aria-label="Previous">
                                            <span><i class="fas fa-angle-left" aria-label="Previous"></i></span>
                                        </a>
                                    </li> --}}
                                    {{-- <li class="page-item active">{{ $products->links() }}</li> --}}
                                    {{-- <li class="page-item">{{ $products->appends(request()->input())->links() }}</li> --}}
                                    {{-- <li class="page-item">
                                        <a class="page-link next" href="#" aria-label="Next">
                                            <span><i class="fas fa-angle-right" aria-label="Next"></i></span>
                                        </a>
                                    </li> --}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extra-js')
    <script>
        $(document).ready(function(){
          $("#toggleBrands").click(function(){
            $(".accordion-body").removeClass("show");
            $("div").addClass("important");
          });
        });
        </script>
@endsection