@extends('admin-dashboard')
@section('admin_content')

<section id="main-content">
		 <section class="wrapper">
			 <!-- page start-->
			 <div class="col-lg-8 col-md-6 col-sm-6"  style="margin-left:195px;">
            <h4 class="title">Add Slider</h4>
            @if(Session::has('message'))
              <p class="alert alert-info">{{ Session::get('message') }}</p>
              @endif
            <form class="contact-form php-mail-form" role="form" action="{{ route('save-slider') }}" method="POST" enctype="multipart/form-data">
						@csrf
              <div class="form-group">
              <input type="file" name="slider_image" class="form-control" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
              <div class="validate"></div>
              </div>
			  <div class="form-group">
					public Status  <input type="checkbox" name="publication_status" value="1">
					<div class="validate"></div>
              </div>
              <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">Add Slider</button>
              </div>

            </form>
          </div>
		 </section>
		 <!-- /wrapper -->
	 </section>
@endsection
