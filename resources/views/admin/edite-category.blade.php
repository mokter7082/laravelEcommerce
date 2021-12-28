@extends('admin-dashboard')
@section('admin_content')

<section id="main-content">
		 <section class="wrapper">
			 <!-- page start-->
			 <div class="col-lg-8 col-md-6 col-sm-6"  style="margin-left:195px;">
            <h4 class="title">Add Category</h4>
            <div id="message"></div>
            <form class="contact-form php-mail-form" role="form" action="{{ route('update-category',$edite_data->category_id) }}" method="POST">
						@csrf
              <div class="form-group">
					<input type="text" name="category_name" class="form-control" placeholder="Your Category Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="{{ $edite_data->category_name}}">
					<div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="category_discription" placeholder="Your Description !!" rows="5" data-rule="required" data-msg="Please write something for us">{{ $edite_data->category_discription}}</textarea>
                <div class="validate"></div>
              </div>
              <div class="loading"></div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">Update Category</button>
              </div>

            </form>
          </div>
		 </section>
		 <!-- /wrapper -->
	 </section>
@endsection
