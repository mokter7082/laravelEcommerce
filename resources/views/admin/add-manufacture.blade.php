@extends('admin-dashboard')
@section('admin_content')

<section id="main-content">
		 <section class="wrapper">
			 <!-- page start-->
			 <div class="col-lg-8 col-md-6 col-sm-6"  style="margin-left:195px;">
            <h4 class="title">Add Manufacture</h4>
            @if(Session::has('message'))
              <p class="alert alert-success">{{ Session::get('message') }}</p>
              @endif
            <div id="message"></div>
            <form class="contact-form php-mail-form" role="form" action="{{ route('save-manufacture') }}" method="POST">
						@csrf
              <div class="form-group">
					<input type="text" name="manufacture_name" class="form-control" placeholder="Your Manufacture Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
					<div class="validate"></div>
              @error('manufacture_name')
               <span class="alert-danger">{{ $message }}</span>
              @endif
              </div>
              <div class="form-group">
                <textarea class="form-control" name="manufacture_description" placeholder="Your Description !!" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
                 @error('manufacture_description')
               <span class="alert-danger">{{ $message }}</span>
              @endif
              </div>
			  <div class="form-group">
					public Status  <input type="checkbox" name="manufacture_status" value="1">
					<div class="validate"></div>
              </div>

              <div class="loading"></div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">Add Category</button>
              </div>

            </form>
          </div>
		 </section>
		 <!-- /wrapper -->
	 </section>
@endsection
