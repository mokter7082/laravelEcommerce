@extends('welcome')
@section('content')
<div class="col-sm-9 padding-right">
<section id="cart_items">
		<div class="container col-sm-12">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description">Name</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td>Action</td>
						</tr>
					</thead>
					<tbody>
					<?php 
						$cart_content = Cart::content(); 
						?>
					@foreach($cart_content as $c_value)
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{url('images/'.$c_value->options->image)}}" alt="product img" style="height:100px; width:80px;"></a>
							</td>
							<td class="cart_description">
								<p>{{$c_value->name}}</p>
							</td>
							<td class="cart_price">
								<p>{{$c_value->price}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
								<form action="{{ route('qty-update') }}" method="POST">
					           	@csrf
									<input class="cart_quantity_input" type="text" name="qty" value="{{$c_value->qty}}" autocomplete="off" size="2">
									<input class="cart_quantity_input" type="hidden" name="rowid" value="{{$c_value->rowId}}" autocomplete="off" size="2">
									<input type="submit" calss="btn btn-primary" value="update" />
								</form>
								</div>
							</td>
							
							<td class="cart_subtotal">
								<p>{{$c_value->subtotal}}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{ route('order-cancel',$c_value->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</section>
<section id="cart_items">
		<div class="container col-sm-12">
			<div class="table-responsive cart_info">
				<section id="cart_items">
		<div class="container col-sm-12">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping payment</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
			<div class="headingWrap">
					<h3 class="headingTop text-center">Select Your Payment Method</h3>	
					<p class="text-center">Created with bootsrap button and using radio button</p>
			</div>
			<div class="footerNavWrap clearfix" style="margin-left: 05px;">
						<form method="post" action="{{route('payment-method')}}">
							@csrf
							<div class="radio">
							  <label><input type="radio" name="payement_get_away" value="bkash">Bkash</label>
							</div>
							<div class="radio">
							  <label><input type="radio" name="payement_get_away" value="nogot">Nogot</label>
							</div>
							<div class="radio">
							  <label><input type="radio" name="payement_get_away" value="dabit_card">Debit Card</label>
							</div>
							<div class="">
							  <label><input type="submit" value="Done" class="btn btn-primary">
							</div>
						</form>
					</div>
			</div>
		</div>
	</section>
			</div>
		</div>
	</section>

</div>
@endsection
