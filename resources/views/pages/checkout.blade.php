@extends('welcome')
@section('content')
<div class="col-sm-9 padding-right">
<section id="cart_items">
		<div class="container">
			<div class="register-req">
				<p>Please Fillup form</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					
					<div class="col-sm-9 clearfix">
						<div class="bill-to">
							<p>Bill To</p>
							<div class="form-one">
								<form method="post" action="{{ route('shiping-save') }}">
								@csrf
                                    <input type="text" name="shiping_first_name" placeholder="First Name *">
                                    <input type="text" name="shiping_last_name" placeholder="Last Name *">
									<input type="text" name="shiping_email" placeholder="Email*">
									<input type="text" name="shiping_phone" placeholder="Phone*">
									<input type="text" name="shiping_address" placeholder="Address 1 *">
                                    <input type="text" name="shiping_city" placeholder="City *">
                                    <input type="submit" class="btn btn-primary btn-block">
								</form>
							</div>
						</div>
					</div>					
				</div>
			</div>
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>

			
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
					<span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
				</div>
		</div>
	</section> <!--/#cart_items-->
    </div>
@endsection