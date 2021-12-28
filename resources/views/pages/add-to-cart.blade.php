@extends('welcome')
@section('content')
<div class="col-sm-9 padding-right">
<div class="features_items">
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
	</section> <!--/#cart_items-->
	<section id="do_action">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>{{ Cart::subtotal()}}</span></li>
							<li>Eco Tax <span>{{ Cart::tax()}}</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>{{ Cart::total()}}</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="{{ URL::to('checkout-login')}}">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
</div>
</div>
@endsection
