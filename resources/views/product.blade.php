@extends('includes.header')
@section('title', $product->name )
@section('content')
	<div role="main" class="main">
		<div class="container">
			<div class="row">
				<div class="col">
					<ul class="breadcrumb mt-3">
						<li><a href="#">Home</a></li>
						<li class="#">Shop</li>
						<li class="active">{{ $product->name }}</li>
					</ul>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-md-5 mb-5 mb-md-0">
					<div class="owl-carousel owl-theme manual dots-style-2 nav-style-2 nav-color-dark mb-3" id="thumbGalleryDetail">
						@if($product->images)
							@foreach (json_decode($product->images, true) as $image)
								<div>
									<img src="{{ productImage($image)}}" class="img-fluid" alt=" {{ $product->name }}">
								</div>
							@endforeach
						@endif
					</div>
					<div class="owl-carousel owl-theme manual thumb-gallery-thumbs mt" id="thumbGalleryThumbs">
						@if($product->images)
							@foreach (json_decode($product->images, true) as $image)
								<div>
									<span class="d-block">
										<img alt="Product Image" src="{{ productImage($image) }}" class="img-fluid" alt="{{ $product->name }}">
									</span>
								</div>
							@endforeach
						@endif
					</div>
				</div>
				<div class="col-md-7">
					<h2 class="line-height-1 font-weight-bold mb-2">{{ $product->name }}</h2>
					<div class="product-info-rate d-flex mb-3">
						<i class="fas fa-star text-color-default mr-1"></i>
						<i class="fas fa-star text-color-default mr-1"></i>
						<i class="fas fa-star text-color-default mr-1"></i>
						<i class="fas fa-star text-color-default mr-1"></i>
						<i class="fas fa-star text-color-default"></i>									
					</div>
					<span class="price font-primary text-4"><strong class="text-color-dark">{{ $product->presentPrice() }}</strong></span>
				<span class="old-price font-primary text-line-trough text-2"><strong class="text-color-default">{{ $product->mrpPrice() }}</strong></span>
					<p class="mt-4">{!! $product->details !!}</p>
					<hr class="my-4">
					<ul class="list list-unstyled">
						<li>AVAILABILITY: <strong>{!!$stockLevel!!}</strong></li>
						<li>SKU: <strong>{{$product->sku}}</strong></li>
					</ul>
					<hr class="my-4">
					{{-- TODO: Check this if condition with andre --}}
					@if ($product->quantity > 0)
						<form class="shop-cart d-flex align-items-center" method="POST" action="{{ route('cart.store', $product) }}" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div class="quantity">
								<input type="button" value="-" class="minus">
								<input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="qty" size="2">
								<input type="button" value="+" class="plus">
								<input type="hidden" name="id" value="{{ $product->id }}">
								<input type="hidden" name="name" value="{{ $product->name }}">
								<input type="hidden" name="price" value="{{ $product->price }}">  
							</div>
							<button type="submit" class="add-to-cart btn btn-primary   font-weight-semibold btn-v-3 btn-h-2 btn-fs-2 ml-3">ADD TO CART</button>
						</form>
					@else
						<button type="submit" class="add-to-cart btn btn-primary   font-weight-semibold btn-v-3 btn-h-2 btn-fs-2 ml-3">Out Of Stock</button>
						@endif
					<hr class="my-4">
					<div class="d-flex align-items-center">
						<span class="text-2">SHARE</span>
						<ul class="social-icons social-icons-dark social-icons-1 ml-3">
							<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
							<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
							<li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col">
					<ul class="nav nav-tabs nav-tabs-default" id="productDetailTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link font-weight-bold active" id="productDetailDescTab" data-toggle="tab" href="#productDetailDesc" role="tab" aria-controls="productDetailDesc" aria-expanded="true">DESCRIPTION</a>
						</li>
						<li class="nav-item">
							<a class="nav-link font-weight-bold" id="productDetailMoreInfoTab" data-toggle="tab" href="#productDetailMoreInfo" role="tab" aria-controls="productDetailMoreInfo">MORE INFO</a>
						</li>
						<li class="nav-item">
							<a class="nav-link font-weight-bold" id="productDetailReviewsTab" data-toggle="tab" href="#productDetailReviews" role="tab" aria-controls="productDetailReviews">REVIEWS (3)</a>
						</li>
					</ul>
					<div class="tab-content" id="contentTabProductDetail">
						<div class="tab-pane fade pt-4 pb-4 show active" id="productDetailDesc" role="tabpanel" aria-labelledby="productDetailDescTab">
							{{-- <p class="text-color-light-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<ul class="list list-unstyled text-color-light-3 pl-5">
								<li class="mb-2"><i class="fas fa-check-circle text-color-dark mr-2"></i> Lorem ipsum dolor sit amet</li>
								<li class="mb-2"><i class="fas fa-check-circle text-color-dark mr-2"></i> Nulla volutpat aliquam velit </li>
								<li class="mb-2"><i class="fas fa-check-circle text-color-dark mr-2"></i> Consectetur adipiscing elit</li>
							</ul>
							<p class="text-color-light-3 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> --}}
							{!! $product->description !!}
						</div>
						<div class="tab-pane fade pt-4 pb-4" id="productDetailMoreInfo" role="tabpanel" aria-labelledby="productDetailMoreInfoTab">
							<table class="table">
								<tbody>
									<tr>
										<th class="border-top-0" scope="row">SIZE</th>
										<td class="border-top-0">31, 32, 33, 34, 35</td>
									</tr>
									<tr>
										<th scope="row">COLOR</th>
										<td>blue, red, rosa, white</td>
									</tr>													
									<tr>
										<th scope="row">STYLE</th>
										<td>classic, modern</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="tab-pane fade pt-4 pb-4" id="productDetailReviews" role="tabpanel" aria-labelledby="productDetailReviewsTab">
							<ul class="comments">
								<li>
									<div class="comment">
										<div class="d-none d-sm-block">
											<img class="avatar rounded-circle" alt="" src="{{ asset('img/authors/author-2.jpg') }}">
										</div>
										<div class="comment-block">
											<span class="comment-by">
												<span class="comment-rating">
													<i class="fas fa-star text-color-dark mr-1"></i>
													<i class="fas fa-star text-color-dark mr-1"></i>
													<i class="fas fa-star text-color-dark mr-1"></i>
													<i class="fas fa-star text-color-dark mr-1"></i>
													<i class="fas fa-star text-color-dark"></i>	
												</span>
												<strong class="comment-author text-color-dark">Robert Doe</strong>
												<span class="comment-date border-right-0 text-color-light-3">MARCH 5, 2018 at 2:28 pm</span>
											</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. </p>
										</div>
									</div>
								</li>
								<li>
									<div class="comment">
										<div class="d-none d-sm-block">
											<img class="avatar rounded-circle" alt="" src="{{ asset('img/authors/author-2.jpg') }}">
										</div>
										<div class="comment-block">
											<span class="comment-by">
												<span class="comment-rating">
													<i class="fas fa-star text-color-dark mr-1"></i>
													<i class="fas fa-star text-color-dark mr-1"></i>
													<i class="fas fa-star text-color-dark mr-1"></i>
													<i class="fas fa-star text-color-dark mr-1"></i>
													<i class="fas fa-star-half text-color-dark"></i>	
												</span>
												<strong class="comment-author text-color-dark">John Doe</strong>
												<span class="comment-date border-right-0 text-color-light-3">MARCH 5, 2018 at 2:28 pm</span>
											</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. </p>
										</div>
									</div>
								</li>
								<li>
									<div class="comment">
										<div class="d-none d-sm-block">
											<img class="avatar rounded-circle" alt="" src="{{ asset('img/authors/author-2.jpg') }}">
										</div>
										<div class="comment-block">
											<span class="comment-by">
												<span class="comment-rating">
													<i class="fas fa-star text-color-dark mr-1"></i>
													<i class="fas fa-star text-color-dark mr-1"></i>
													<i class="fas fa-star text-color-dark mr-1"></i>
													<i class="fas fa-star text-color-dark mr-1"></i>
												</span>
												<strong class="comment-author text-color-dark">Jessica Doe</strong>
												<span class="comment-date border-right-0 text-color-light-3">MARCH 5, 2018 at 2:28 pm</span>
											</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. </p>
										</div>
									</div>
								</li>
							</ul>

							<div class="row mt-4 pt-2">
								<div class="col">
									<h2 class="font-weight-bold text-3 mb-3">LEAVE A REVIEW</h2>
									<form class="form-style-2" action="#" method="post">
										<div class="form-row">
											<div class="form-group">
												<div class="rating p-1">
													<label>
														<input type="radio" name="rating" value="5" title="5 stars"> 5
													</label>
													<label>
														<input type="radio" name="rating" value="4" title="4 stars"> 4
													</label>
													<label>
														<input type="radio" name="rating" value="3" title="3 stars"> 3
													</label>
													<label>
														<input type="radio" name="rating" value="2" title="2 stars"> 2
													</label>
													<label>
														<input type="radio" name="rating" value="1" title="1 star"> 1
													</label>
												</div>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<textarea class="form-control bg-light-5 border-0 rounded-0" placeholder="Review" rows="6" name="review" required></textarea>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<input type="text" value="" class="form-control border-0 rounded-0" name="name" placeholder="Name" required>
											</div>
											<div class="form-group col-md-6">
												<input type="email" value="" class="form-control border-0 rounded-0" name="email" placeholder="E-mail" required>
											</div>
										</div>
										<div class="form-row mt-2">
											<div class="col">
												<input type="submit" value="POST REVIEW" class="btn btn-primary   btn-h-2 btn-v-2 font-weight-bold">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@include('includes.mightalso')
	</div>
@endsection
