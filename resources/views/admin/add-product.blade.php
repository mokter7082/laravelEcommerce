@extends('admin-dashboard')
@section('admin_content')

<section id="main-content">
		 <section class="wrapper">
			 <!-- page start-->
			 <div class="col-lg-8 col-md-6 col-sm-6"  style="margin-left:195px;">
            <h3 class="title">Add Product</h3>
            @if(Session::has('message'))
              <p class="alert alert-success">{{ Session::get('message') }}</p>
              @endif
            <div id="message"></div>
            <form class="contact-form php-mail-form" role="form" action="{{ route('save-product') }}" method="POST" enctype="multipart/form-data">
						@csrf
            <div class="form-group">
				     	<input type="text" name="product_name" class="form-control" placeholder="Product Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
				     	<div class="validate"></div>
              </div>
              <div class="form-group">
			      	<select name="category_id" id="" class="form-control">
                <option value="">--Category Name--</option>
                <?php 
                   $category = DB::table('tbl_category')
                                         ->where('public_status',1)
                                         ->get();
                  foreach($category as $v_category){
                ?>
                   <option value="{{$v_category->category_id}}">{{$v_category->category_name}}</option>
                   <?php
                }
                ?>
                
                </select>
              </div>
              <div class="form-group">
				<select name="manufacture_id" id="" class="form-control">
                <option value="">--Manufacture Name--</option>
                <?php 
                   $manufacture = DB::table('tbl_manufacture')
                                         ->where('manufacture_status',1)
                                         ->get();
                  foreach($manufacture as $v_manufacture){
                ?>
                   <option value="{{$v_manufacture->manufacture_id}}">{{$v_manufacture->manufacture_name}}</option>
                   <?php
                }
                ?>
                </select>
              </div>
              <div class="form-group">
                    <textarea class="form-control" name="product_short_description" placeholder="Product Short Description !!" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                    <div class="validate"></div>
              </div>
              <div class="form-group">
                    <textarea class="form-control" name="product_long_description" placeholder="Product Long Description !!" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                    <div class="validate"></div>
              </div>
              <div class="form-group">
				     	<input type="text" name="product_price" class="form-control" placeholder="Product Price" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
				     	<div class="validate"></div>
              </div>
              <div class="form-group">
				 	<input type="file" name="product_image" class="form-control" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
					<div class="validate"></div>
              </div>
              <div class="form-group">
				 	<input type="text" name="product_size" class="form-control" placeholder="Product Size" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
					<div class="validate"></div>
              </div>
              <div class="form-group">
				 	<input type="text" name="product_color" class="form-control" placeholder="Product Color" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
					<div class="validate"></div>
              </div>
			  <div class="form-group">
					public Status  <input type="checkbox" name="publication_status" value="1">
					<div class="validate"></div>
              </div>

              <div class="loading"></div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">Add Product</button>
              </div>

            </form>
          </div>
		 </section>
		 <!-- /wrapper -->
	 </section>
@endsection
