@extends('admin-dashboard')
@section('admin_content')
<section id="main-content">
<section class="wrapper">
        <h3  style="margin-left:1.5px;"><i class="fa fa-angle-right"></i>All Manufacture</h3>
        @if(Session::has('message'))
              <p class="alert alert-success">{{ Session::get('message') }}</p>
              @endif
        <div class="row mb" style="margin-left:1.5px;">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Manufacture Name</th>
                    <th class="hidden-phone">Manufacture Description</th>
                    <th class="hidden-phone">Publication Status</th>
                    <th class="text-center hidden-phone">Status</th>
                    <th class="text-center hidden-action">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($all_manufacture as $row)
                  <tr class="gradeA even">
                    <td>{{ $row->manufacture_id }}</td>
                    <td>{{ $row->manufacture_name }}</td>
                    <td class="hidden-phone">{{ $row->manufacture_description }}</td>
                    <td class="center hidden-phone">{{ $row->manufacture_status }}</td>
                  @if($row->manufacture_status == 1)
                    <td class="center hidden-phone"><a href="" class="btn btn-success">Active</a></td>
                  @else
                      <td class="center hidden-phone"><a href="" class="btn btn-warning">Inactive</a></td>
                  @endif
                    <td class="center hidden-action">
                    @if($row->manufacture_status == 1)
                        <a href="{{ route('manufacture-inactive',$row->manufacture_id)}}" class="btn btn-success btn-sm"><i class="fa fa-thumbs-up"></i></a>
                    @else
                    <a href="{{ route('manufacture-active',$row->manufacture_id)}}" class="btn btn-warning btn-sm"><i class="fa fa-thumbs-down"></i></a>
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
