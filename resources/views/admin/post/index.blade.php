@extends('admin.admin_layouts')
@section('admin_content')

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
      
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Post Table</h5>
          
        </div> <!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Post list
              <a href="{{ route('create.post') }}" class="btn btn-sm btn-warning" style="float: right;">Add new</a>
          </h6>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Id</th>
                  <th class="wd-15p">Post title</th>
                  <th class="wd-15p">Image</th>
                  <th class="wd-15p">Category</th>
                  <th class="wd-15p">Status</th>
                  <th class="wd-20p">Action</th>
            
                </tr>
              </thead>
              <tbody>
                 @foreach($all_posts as $key=>$row)  
                <tr>
                  <td>{{ $key +1 }}</td>
                  <td>{{ $row->title }}</td>
                  <td><img src="{{ URL::to($row->image) }}" height="50px;" width="50px;"></td>
                  <td>{{ $row->category_name }}</td>
                  <td>
                      @if ($row->status == 1)
                      <span class="badge badge-success">Active</span>
                      @else
                      <span class="badge badge-danger">Inactive</span>
                      @endif


                  </td>
                  
                  <td>
                   <a href="{{URL::to('edit/post/' . $row->id)}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                   <a href="{{ URL::to('delete/post/'. $row->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
                   <a href="{{ URL::to('view/post/'. $row->id) }}" class="btn btn-sm btn-warning" ><i class="fa fa-eye"></i></a>
                   @if ($row->status == 1)
                   <a href="{{ URL::to('admin/posts/deactivate/'. $row->id) }}" class="btn btn-sm btn-danger" >Deactivate</a>
                   @else
                   <a href="{{ URL::to('admin/posts/activate/'. $row->id) }}" class="btn btn-sm btn-success" >Activate</a>
                   @endif
                </td>
                 
                </tr>
                @endforeach
                
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

        

        
    <!-- ########## END: MAIN PANEL ########## -->
      
    
      </div>
</div>
@endsection