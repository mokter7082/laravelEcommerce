@extends('admin-dashboard')
@section('admin_content')
<section id="main-content">
<section class="wrapper">
        <h3  style="margin-left:1.5px;"><i class="fa fa-angle-right"></i>All Product</h3>
        @if(Session::has('message'))
          <p class="alert alert-info">{{ Session::get('message') }}</p>
          @endif
        <div class="row mb" style="margin-left:1.5px;">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>image</th>
                    <th>Action</th>
                    <th>Activity</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($all_slider as $row)
                  <tr class="gradeA even">
                    <td><img  src="{{url('slider/'.$row->slider_image)}}"  width="100" height="100"></td> 
                  @if($row->publication_status == 1)
                    <td class="center hidden-phone"><a href="" class="btn btn-success">Active</a></td>
                  @else
                      <td class="center hidden-phone"><a href="" class="btn btn-warning">Inactive</a></td>
                  @endif
                    <td class="center hidden-action">
                    @if($row->publication_status == 1)
                        <a href="{{route('slider-inactive',$row->slider_id)}}" class="btn btn-success btn-sm"><i class="fa fa-thumbs-up"></i></a>
                    @else
                    <a href="{{route('slider-active',$row->slider_id)}}" class="btn btn-warning btn-sm"><i class="fa fa-thumbs-down"></i></a>
                    @endif
                         <a href="" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                         <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>
	 </section>
  
@endsection
