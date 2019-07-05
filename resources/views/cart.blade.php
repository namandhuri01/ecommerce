@extends('includes.header')
@section('title', 'Shopping Cart')
@section('content')
{{-- TODO: Dummy Images Ned too be change  add function at update cart button/ remove this button --}}
<div role="main" class="main">
		<section class="page-header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="index.html">Home</a></li>
							<li class="active">Shop</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h1 class="font-weight-bold">Cart</h1>

					</div>
				</div>
			</div>
		</section>

		<section class="section pt-0">
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
				@if(Cart::count() > 0)
					<div class="row mb-5">
						<div class="col">
							<h2>{{ Cart::count() }} Item(s) In Your Cart</h2>
							<div class="shop-cart">
								
								<div class="table-responsive">
									<table class="shop-cart-table w-100">
										<thead>
											<tr>
												<th class="product-thumbnail">Thumbnail</th>
												<th class="product-name"><strong>Product</strong></th>
												<th class="product-price"><strong>Unit Price</strong></th>
												<th class="product-quantity"><strong>Quantity</strong></th>
												<th class="product-remove">Remove</th>
												<th class="product-wishlist">Wishlist</th>
												<th class="product-subtotal"><strong>Total</strong></th>
											</tr>
										</thead>
										<tbody>
											@foreach (Cart::content() as $item)
												<tr class="cart-item">
													<td class="product-thumbnail">
														<a href="{{ route('shop.show', $item->model->slug) }}"><img src="{{ asset('img/products/product-1.jpg') }}" class="img-fluid" width="67" alt="" /></a>
													</td>
													<td class="product-name">
														<a href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->name }}</a>
													</td>
													<td class="product-price">
														<span class="unit-price">{{ $item->model->presentPrice() }}</span>
													</td>
													<td class="product-quantity">
														{{-- <div class="quantity cart-value">
															<input type="button" value="-" class="minus">
															<input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="qty " size="2">
															<input type="button" value="+" class="plus">
														</div> --}}
														<select class="quantity" data-id="{{ $item->rowId }}" data-productQuantity="{{ $item->model->quantity }}">
															@for ($i = 1; $i < 10 + 1 ; $i++)
																<option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
															@endfor
														</select>
													</td>
													<td class="product-remove">
														<form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
															{{ csrf_field() }}
															{{ method_field('DELETE') }}
															<button type="submit"><i class="fas fa-times" aria-label="Remove"></i></button>
														</form>
													</td>
													<td class="product-wishlist">
														<form action="{{ route('cart.save', $item->rowId) }}" method="POST">
															{{ csrf_field() }}
															<button type="submit"><i class="fa fa-heart"></i></button>
														</form>
													</td>
													<td class="product-subtotal">
														<span class="sub-total"><strong>{{ presentPrice($item->subtotal) }}</strong></span>
													</td>
												</tr>
											@endforeach
											<tr class="border-bottom-0">
												<td colspan="6" class="px-0">
													<div class="row mx-0">
														<div class="col-md-5 px-0 mb-3 mb-md-0">
															<div class="input-group input-group-style-3 rounded">
																<form action="{{ route('coupon.store')}}" method="POST">
																	{{ csrf_field() }}
																	<input type="text" name="coupon_code" id="coupon_code" class="form-control bg-light-5 border-0" placeholder="Enter Coupon Code..." aria-label="Enter Coupon Code">
																	<span class="input-group-btn bg-light-5 p-1">
																		<button class="btn btn-primary font-weight-semibold btn-h-3 rounded h-100" type="submit">APPLY</button>
																	</span>
																</form>
															</div>
														</div>
														<div class="col-md-7 text-right px-0">
															<button class="btn btn-dark btn-outline btn-rounded font-weight-bold btn-h-2 btn-v-3">UPDATE CART</button>
															<a href="/checkout" class="btn btn-primary btn-rounded font-weight-bold btn-h-2 btn-v-3">PROCEED TO CHECKOUT</a>
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<h2 class="font-weight-bold text-4 mb-3">Cart Totals</h2>
							<div class="table-responsive">
								<table class="cart-totals w-100">
									<tbody>
										<tr>
											<td>
												<span class="cart-total-label">Cart Subtotal</span>
											</td>
											<td>
												<span class="cart-total-value">{{ presentPrice(Cart::subtotal()) }}</span>
											</td>
										</tr>
										@if(session()->has('coupon'))
											<tr>
												<td>
													<span class="cart-total-label">Discount ({{ session()->get('coupon')['name']}})
														<span style="display: inline-block;">
															<form action="{{ route('coupon.destroy')}}" method="POST">
																{{ csrf_field() }}
																{{ method_field('delete') }}
																<button type="submit" class="btn btn-remove font-weight-bold">Remove Coupon</button>
															</form>
														</span>
													</span>
												</td>
												<td>
													<span class="cart-total-value">-{{ presentPrice(session()->get('coupon')['discount'])}}</span>
												</td>
											</tr>
											<tr>
												<td>
													<span class="cart-total-label">NewSubtotal</span>
												</td>
												<td>
													<span class="cart-total-value">{{ presentPrice($newSubtotal)}}</span>
												</td>
											</tr>
										@endif
										<tr>
											<td>
												<span class="cart-total-label">Tax</span>
											</td>
											<td>
												<span class="cart-total-value">{{ presentPrice($newTax) }}</span>
											</td>
										</tr>
										<tr class="border-bottom-0">
											<td>
												<span class="cart-total-label">Total</span>
											</td>
											<td>
												<span class="cart-total-value text-color-primary text-4">{{ presentPrice($newTotal) }}</span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				@else
					<h3>No Item in cart</h3>
					<a href="{{ route('shop.index') }}" class="btn btn-primary btn-rounded font-weight-semibold btn-v-3 btn-fs-2">Continue Shopping</a>
				@endif
			</div>
		</section>
		<section class="section pt-0">
			<div class="container">
				@if(Cart::instance('saveForLater')->count() > 0)
					<div class="row mb-5">
						<div class="col">
							<h2>{{ Cart::instance('saveForLater')->count() }} Item(s) Saved For Later</h2> 
							<div class="shop-cart">
								<div class="table-responsive">
									<table class="shop-cart-table w-100">
										<thead>
											<tr>
												<th class="product-thumbnail">Thumbnail</th>
												<th class="product-name"><strong>Product</strong></th>
												<th class="product-price"><strong>Unit Price</strong></th>
												<th class="product-quantity"><strong>Quantity</strong></th>
												<th class="product-remove">Remove</th>
												<th class="product-move-to-cart">Move To cart</th>
												<th class="product-subtotal"><strong>Total</strong></th>
											</tr>
										</thead>
										<tbody>
											@foreach ( Cart::instance('saveForLater')->content() as $item)
											<tr class="cart-item">
												<td class="product-thumbnail">
													<a href="{{ route('shop.show', $item->model->slug) }}"><img src="{{ asset('img/products/product-1.jpg') }}" class="img-fluid" width="67" alt="" /></a>
												</td>
												<td class="product-name">
													<a href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->name }}</a>
												</td>
												<td class="product-price">
													<span class="unit-price">{{ $item->model->presentPrice() }}</span>
												</td>
												<td class="product-quantity">
													{{-- <div class="quantity cart-value">
														<input type="button" value="-" class="minus">
														<input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="qty " size="2">
														<input type="button" value="+" class="plus">
													</div> --}}
													<select class="quantity" data-id="{{ $item->rowId }}" data-productQuantity="{{ $item->model->quantity }}">
														@for ($i = 1; $i < 10 + 1 ; $i++)
															<option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
														@endfor
													</select>
												</td>
												<td class="product-remove">
													<form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
														{{ csrf_field() }}
														{{ method_field('DELETE') }}
														<button type="submit"><i class="fas fa-times" aria-label="Remove"></i></button>
													</form>
												</td>
												<td class="product-wishlist">
													<form action="{{ route('cart.save', $item->rowId) }}" method="POST">
														{{ csrf_field() }}
														<button type="submit"><i class="fa fa-heart"></i></button>
													</form>
												</td>
												<td class="product-subtotal">
													<span class="sub-total"><strong>{{ presentPrice($item->subtotal) }}</strong></span>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				@else
					<h3>  You Have Not Save Any Item<h3>
				@endif
			</div>
		</section>
	</div>
@endsection
@section('extra-js')
		<script src="{{ asset('js/app.js') }}"></script>
    <script>
        (function(){
            const classname = document.querySelectorAll('.quantity')

            Array.from(classname).forEach(function(element) {
                element.addEventListener('change', function() {
                    const id = element.getAttribute('data-id')
                    const productQuantity = element.getAttribute('data-productQuantity')

                    axios.patch(`/cart/${id}`, {
                        quantity: this.value,
                        productQuantity: productQuantity
                    })
                    .then(function (response) {
                        // console.log(response);
                        window.location.href = '{{ route('cart.index') }}'
                    })
                    .catch(function (error) {
                        // console.log(error);
                        window.location.href = '{{ route('cart.index') }}'
                    });
                })
            })
		})();
		
		function pagerefresh() {
			window.location.href = '{{ route('cart.index') }}'
		}
    </script>

@endsection