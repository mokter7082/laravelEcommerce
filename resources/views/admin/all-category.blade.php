@extends('admin-dashboard')
@section('admin_content')
<section id="main-content">
<section class="wrapper">
        <h3  style="margin-left:1.5px;"><i class="fa fa-angle-right"></i>All Category</h3>
        <div class="row mb" style="margin-left:1.5px;">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th class="hidden-phone">Category Description</th>
                    <th class="hidden-phone">Publication Status</th>
                    <th class="text-center hidden-phone">Status</th>
                    <th class="text-center hidden-action">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($all_category as $row)
                  <tr class="gradeA even">
                    <td>{{ $row->category_id }}</td>
                    <td>{{ $row->category_name }}</td>
                    <td class="hidden-phone">{{ $row->category_discription }}</td>
                    <td class="center hidden-phone">{{ $row->public_status }}</td>
                  @if($row->public_status == 1)
                    <td class="center hidden-phone"><a href="" class="btn btn-success">Active</a></td>
                  @else
                      <td class="center hidden-phone"><a href="" class="btn btn-warning">Inactive</a></td>
                  @endif
                    <td class="center hidden-action">
                    @if($row->public_status == 1)
                        <a href="{{ route('category-unactive',$row->category_id)}}" class="btn btn-success btn-sm"><i class="fa fa-thumbs-up"></i></a>
                    @else
                    <a href="{{ route('category-active',$row->category_id)}}" class="btn btn-warning btn-sm"><i class="fa fa-thumbs-down"></i></a>
                    @endif
                        <a href="{{ route('edite-category',$row->category_id) }}" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                        <a href="{{ route('delete-category',$row->category_id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
