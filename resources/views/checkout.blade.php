{{-- <script src="https://js.stripe.com/v3/"></script>
<div class="right-side-bar" style="width:35%; float:left;">
			@foreach (Cart::content() as $item)
				<div class="checkout">
					<div class="col-1">
						<img src="{{ asset('images/'.$item->model->slug.'.jpg') }}" alt="">
					</div>
					<div class="col-2">
						<p> {{ $item->model->name }}</p>
					</div>
					<div class="col-3">
							<p> {{ $item->model->details }}</p>
					</div>
					<div class="col-4">
						<p> {{ $item->model->presentPrice() }}</p>
					</div>
					<div class="col-4">
						<p> {{ $item->qty }}</p>
					</div>
				</div>
			@endforeach 
		</div> --}}
		
@extends('includes.header')

<script src="https://js.stripe.com/v3/"></script>
@section('content')
	<div role="main" class="main">
		<section class="page-header mb-0">
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
						<h1 class="font-weight-bold">Checkout</h1>
					</div>
				</div>
			</div>
		</section>

		<section class="section">
			<div class="container">
				<div class="row pb-4 mb-3">
					<div class="col-md-12 mb-12 mb-md-0">
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
					</div>
					</div>
					<div class="row pb-4 mb-3">
					<div class="col-md-6 mb-4 mb-md-0">
						<div class="accordion accordion-default accordion-toggle accordion-style-1" role="tablist">
							<div class="card">
								<div class="card-header accordion-header accordion-header-shrink" role="tab" id="shopCheckoutLogin">
									<span class="mb-0">
										<a href="#" class="text-color-dark collapsed" data-toggle="collapse" data-target="#toggleShopCheckoutLogin" aria-expanded="false" aria-controls="toggleShopCheckoutLogin">Returning Customer? <span class="text-color-primary">Click here to login</span></a>
									</span>
								</div>
								<div id="toggleShopCheckoutLogin" class="accordion-body collapse" role="tabpanel" aria-labelledby="shopCheckoutLogin">
									<div class="card-body">
										<form action="#" id="shopCheckoutSignIn" method="post">
											<div class="form-row">
												<div class="form-group col mb-2">
													<input type="email" value="" maxlength="100" class="form-control rounded-0 bg-light-5 border-0 px-3 text-1" name="email" id="signInEmail" placeholder="Email / Username">
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col">
													<input type="password" value="" class="form-control rounded-0 bg-light-5 border-0 px-3 text-1" name="password" id="signInPassword" placeholder="Password">
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col">
													<div class="form-check checkbox-custom checkbox-default">
														<input class="form-check-input" type="checkbox" id="signInRemember">
														<label class="form-check-label" for="signInRemember">
															  Remember me
														</label>
													  </div>
												</div>
												  <div class="form-group col text-right">
													  <a href="#" id="headerRecover" class="forgot-pw text-color-dark d-block">Forgot password?</a>
												  </div>
											</div>
											<div class="row align-items-center">
												<div class="col text-right">
													<button class="btn btn-primary btn-rounded btn-v-3 btn-h-3 text-color-light font-weight-bold">SIGN IN</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="accordion accordion-default accordion-toggle accordion-style-1" role="tablist">
							<div class="card">
								<div class="card-header accordion-header accordion-header-shrink" role="tab" id="shopCheckoutCoupon">
									<span class="mb-0">
										<a href="#" class="text-color-dark collapsed" data-toggle="collapse" data-target="#toggleShopCheckoutCoupon" aria-expanded="false" aria-controls="toggleShopCheckoutCoupon">Have a Coupon? <span class="text-color-primary">Click here to enter your code</span></a>
									</span>
								</div>
								<div id="toggleShopCheckoutCoupon" class="accordion-body collapse" role="tabpanel" aria-labelledby="shopCheckoutCoupon">
									<div class="card-body">
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
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="row mb-5">
							<div class="col-md-6 mb-5 mb-md-0">
								<form id="payment-form" action="{{ route('checkout.store') }}" method="POST">
									{{ csrf_field() }}
									<h2 class="font-weight-bold mb-3">Billing Address</h2>
									<p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc.</p>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label class="text-color-dark font-weight-semibold" for="fname">FIRST NAME:</label>
											<input type="text" value="{{ old('fname') }}" class="form-control line-height-1 bg-light-5" name="fname" id="fname" required>
										</div>
										<div class="form-group col-md-6">
											<label class="text-color-dark font-weight-semibold" for="lname">LAST NAME:</label>
											<input type="text" value="{{ old('lname') }}" class="form-control line-height-1 bg-light-5" name="lname" id="lname" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<label class="text-color-dark font-weight-semibold" for="email">EMAIL ADDRESS:</label>
											@if(auth()->user())
												<input type="email" value="{{ auth()->user()->email }}" class="form-control line-height-1 bg-light-5" name="email" id="email" readonly>
											@else
												<input type="email" value="{{ old('email') }}" class="form-control line-height-1 bg-light-5" name="email" id="email" required>
											@endif	
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<label class="text-color-dark font-weight-semibold" for="phone">PHONE NUMBER</label>
											<input type="tel" value="{{ old('phone') }}" class="form-control line-height-1 bg-light-5" name="phone" id="phone" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<label class="text-color-dark font-weight-semibold" for="address">ADDRESS:</label>
											<input type="text" value="{{ old('address') }}" class="form-control line-height-1 bg-light-5" name="address" id="address" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<input type="text" value="{{ old('address2') }}" class="form-control line-height-1 bg-light-5" name="address2" id="address2" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<label class="text-color-dark font-weight-semibold" for="city">CITY / TOWN:</label>
											<input type="text" value="{{ old('city') }}" class="form-control line-height-1 bg-light-5" name="city" id="city" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label class="text-color-dark font-weight-semibold" for="state">State</label>
											<input type="text" value="{{ old('state') }}" class="form-control line-height-1 bg-light-5" name="state" id="state" required>
										</div>
										<div class="form-group col-md-6">
											<label class="text-color-dark font-weight-semibold" for="zip">Pin Code</label>
											<input type="tel" value="{{ old('zip') }}" class="form-control line-height-1 bg-light-5" name="zip" id="zip" required>
										</div>
									</div>
									<h3 class="font-weight-bold text-4 mb-3">Payment</h3>
									<div class="form-row">
										<div class="form-group col">
											<label class="text-color-dark font-weight-semibold" for="name_on_card">Name On Card</label>
											<input type="text" value="" class="form-control line-height-1 bg-light-5" name="name_on_card" id="name_on_card">
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<label for="card-element text-color-dark font-weight-semibold">
												Credit or debit card
											</label>
											<div id="card-element">
												<!-- A Stripe Element will be inserted here. -->
											</div>
										
											<!-- Used to display form errors. -->
											<div id="card-errors" role="alert"></div>
										</div>	
									</div>
									{{-- <div id="shopPayment">
										<div class="radio-custom">
											<input type="radio" id="shopPaymentBankTransfer" name="paymentMethod" checked>
											<label class="font-weight-semibold" for="shopPaymentBankTransfer">Direct Bank Transfer</label>
										</div>
										<div class="radio-custom">
											<input type="radio" id="shopPaymentCheque" name="paymentMethod">
											<label class="font-weight-semibold" for="shopPaymentCheque">Cheque Payment</label>
										</div>
										<div class="radio-custom">
											<input type="radio" id="shopPaymentPaypal" name="paymentMethod">
											<label class="font-weight-semibold" for="shopPaymentPaypal">Paypal</label>
										</div>
									</div> --}}
									<div class="col text-right">
										<button id="place-order"class="btn btn-primary btn-rounded font-weight-bold btn-h-2 btn-v-3" type="submit">PLACE ORDER</button>
									</div>
								</form>
							</div>
							<div class="col-md-6 mb-4">
								<h3 class="font-weight-bold text-4">Your Orders</h3>
								<div class="shop-cart mb-4">
									<div class="table-responsive">
										<table class="shop-cart-table w-100">
											<thead>
												<tr>
													<th class="product-thumbnail"></th>
													<th class="product-name"><strong>Product</strong></th>
													<th class="product-price"><strong>Price</strong></th>
													<th class="product-quantity"><strong>Quantity</strong></th>
													<th class="product-subtotal"><strong>Total</strong></th>
												</tr>
											</thead>
											<tbody>
												@foreach (Cart::content() as $item)
													<tr class="cart-item">
														<td class="product-thumbnail">
															<img src="img/products/product-1.jpg" class="img-fluid" width="67" alt="" />
														</td>
														<td class="product-name">
															<a href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->name }}</a>
														</td>
														<td class="product-price">
															<span class="unit-price">{{ $item->model->presentPrice() }}</span>
														</td>
														<td class="product-quantity">
															<span class="quantity">{{ $item->qty }}</span>
														</td>
														<td class="product-subtotal">
															<span class="sub-total"><strong>{{ $item->model->presentPrice() }}</strong></span>
														</td>
													</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
								<h3 class="font-weight-bold text-4 mb-3">Cart Totals</h3>
								<div class="table-responsive mb-4">
									<table class="cart-totals w-100">
										<tbody class="border-top-0">
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
														<span class="cart-total-value">-{{ presentPrice($discount)}}</span>
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
					</div>
				</div>
			</div>
		</section>
	</div>
@endsection
@section('extra-js')
	<script>
			// Create a Stripe client.
		var stripe = Stripe('pk_test_4fwwKd21IrJnV5cdYuKsrNRh00Hmvk193X');

		// Create an instance of Elements.
		var elements = stripe.elements();

		// Custom styling can be passed to options when creating an Element.
		// (Note that this demo uses a wider set of styles than the guide below.)
		var style = {
			base: {
				color: '#32325d',
				fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
				fontSmoothing: 'antialiased',
				fontSize: '16px',
				'::placeholder': {
				color: '#aab7c4'
				}
			},
			invalid: {
				color: '#fa755a',
				iconColor: '#fa755a'
			}
		};

		// Create an instance of the card Element.
		var card = elements.create('card', {
			style: style,
			hidePostalCode: true
		});

		// Add an instance of the card Element into the `card-element` <div>.
		card.mount('#card-element');

		// Handle real-time validation errors from the card Element.
		card.addEventListener('change', function(event) {
		var displayError = document.getElementById('card-errors');
		if (event.error) {
			displayError.textContent = event.error.message;
		} else {
			displayError.textContent = '';
		}
		});

		// Handle form submission.
		var form = document.getElementById('payment-form');
		form.addEventListener('submit', function(event) {
			event.preventDefault();
			
			// Disable Place order submit button
			document.getElementById('place-order').disabled = true;

			var options = {

				name:document.getElementById('name_on_card').value,
				address_line1:document.getElementById('address').value,
				address_line2:document.getElementById('address2').value,
				address_zip:document.getElementById('zip').value,
				address_city:document.getElementById('city').value,
				address_state:document.getElementById('state').value,
				

			}

			stripe.createToken(card).then(function(result) {
					if (result.error) {
					// Inform the user if there was an error.
					var errorElement = document.getElementById('card-errors');
					errorElement.textContent = result.error.message;

					// Enable Place Order Submit Button
					document.getElementById('place-order').disabled = false;
					
					} else {
					// Send the token to your server.
					stripeTokenHandler(result.token);
					}
			});
		});

		// Submit the form with the token ID.
		function stripeTokenHandler(token) {
		// Insert the token ID into the form so it gets submitted to the server
			var form = document.getElementById('payment-form');
			var hiddenInput = document.createElement('input');
			hiddenInput.setAttribute('type', 'hidden');
			hiddenInput.setAttribute('name', 'stripeToken');
			hiddenInput.setAttribute('value', token.id);
			form.appendChild(hiddenInput);

			// Submit the form
			form.submit();
		}
	</script>
@endsection