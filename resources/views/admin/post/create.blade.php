@extends('admin.admin_layouts')

@section('admin_content')
<div class="sl-mainpanel">
<div class="sl-pagebody">
<div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Add post
          <a href="{{ route('all.posts') }}" class="btn btn-success btn-sm pull-right">All posts</a>

          </h6>
          <p class="mg-b-20 mg-sm-b-30">Add people who young generetion should know.</p>
          
          <form action="{{ route('store.post') }}" method="post" enctype="multipart/form-data">
          @csrf

          <div class="form-layout">
            <div class="row mg-b-25">
              


              <!-- Title(name of person) -->
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Title(name of person): <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="title"  placeholder="Enter title here">
                </div>
              </div>
              <!-- end of Title(name of person) -->

             

                <!-- Full name(name of person) -->
                <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Full name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="fullname"  placeholder="Enter fullname here">
                </div>
              </div>
              <!-- end of Full name(name of person) -->
              

              <!-- Birth date -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Birth date: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="date" name="birth_date"  >
                </div>
              </div>
              <!-- end of Birth date -->


              <!-- Death date -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Death date: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="date" name="death_date"  >
                </div>
              </div>
              <!-- end of Death date -->

              <!-- birth date maunaly -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Birth date(maually): <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="birth_manually"  >
                </div>
              </div>
              <!-- end of Death date -->


                <!-- death date maunaly -->
                <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Death date(maually): <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="death_manually"  >
                </div>
              </div>
              <!-- end of Death date -->


              <!-- Birth place -->
                <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Birth place: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="birth_place"  >
                </div>
              </div>
              <!-- end Birth place -->
              
              
              <!-- Death place -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Death place: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="death_place"  >
                </div>
              </div>
              <!-- end of Death place -->
              


               <!-- category -->
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose category" name="category_id">
                    <option label="Choose category"></option>
                    @foreach($category as $row)
                    <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                    @endforeach
                   
                  </select>
                </div>
              </div>
              <!-- end of category -->



              <!-- image of person -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image of person: <span class="tx-danger">*</span></label>
                        <label class="custom-file">
                                <input type="file" id="file" class="custom-file-input" name="image" onchange="readURL(this)">
                                <span class="custom-file-control"></span>
                                <img src="#" id="one">
                        </label>
                </div>
              </div>
              <!-- end of image of person -->


              
              <!-- Full text -->
              <div class="col-lg-12">
                <div class="form-group mg-b-10-force">
                  
                  <label class="form-control-label">Full text: <span class="tx-danger">*</span></label>
                  <textarea class="form-control" name="full_text" id="summernote" ></textarea>
                </div>
              </div>


              <!-- tags text -->
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Tags: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="tags" id="tag" data-role="tagsinput" >
                </div>
              </div>
              <!-- end of tags text -->


            </div><!-- row -->


            <hr>
            <br><br>

            
            <div class="row">

                <!-- checkbox top slider -->
                <div class="col-lg-4">
                    <label class="ckbox">
                        <input type="checkbox" name="top_slider" value="1">
                        <span>Top slider</span>
                    </label>
                </div>   
                <!-- end of checkbox top slider  --> 


                 <!-- checkbox low slider -->
                 <div class="col-lg-4">
                    <label class="ckbox">
                        <input type="checkbox" name="low_slider" value="1">
                        <span>Low slider</span>
                    </label>
                </div>   
                <!-- end of checkbox low slider  --> 
                
            </div> <!-- row  --> 
            <br><br>
            
            
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Submit Form</button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
          </form>
        </div><!-- card -->
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

<script type="text/javascript">
  function readURL(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#one')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

    
@endsection
