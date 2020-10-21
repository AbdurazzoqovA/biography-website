@extends('admin.admin_layouts')
@php
$category = DB::table('categories')->get();
@endphp
@section('admin_content')
<div class="sl-mainpanel">
<div class="sl-pagebody">
<div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Update post
          <a href="{{ route('all.posts') }}" class="btn btn-success btn-sm pull-right">All posts</a>

          </h6>
          
          <form action=" {{url('update/post/withoutphoto/' . $post->id)}} " method="post" enctype="multipart/form-data">
          @csrf

          <div class="form-layout">
            <div class="row mg-b-25">
              


              <!-- Title(name of person) -->
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Title(name of person): <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="title"  value="{{$post->title}}">
                </div>
              </div>
              <!-- end of Title(name of person) -->

             

                <!-- Full name(name of person) -->
                <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Full name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="fullname"  value="{{$post->fullname	}}">
                </div>
              </div>
              <!-- end of Full name(name of person) -->
              

              <!-- Birth date -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Birth date: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="date" name="birth_date" value="{{$post->birth_date}}"  >
                </div>
              </div>
              <!-- end of Birth date -->


              <!-- Death date -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Death date: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="date" name="death_date" value="{{$post->death_date}}" >
                </div>
              </div>
              <!-- end of Death date -->

              <!-- birth date maunaly -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Birth date(maually): <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="birth_manually" value="{{$post->birth_date_maually}}"  >
                </div>
              </div>
              <!-- end of Death date -->


                <!-- death date maunaly -->
                <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Death date(maually): <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="death_manually" value="{{$post->death_date_maually}}"  >
                </div>
              </div>
              <!-- end of Death date -->


              <!-- Birth place -->
                <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Birth place: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="birth_place"  value="{{$post->birth_place}}" >
                </div>
              </div>
              <!-- end Birth place -->
              
              
              <!-- Death place -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Death place: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="death_place" value="{{$post->death_place}}" >
                </div>
              </div>
              <!-- end of Death place -->
              


               <!-- category -->
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose category" name="category_id">
                    <option label="Choose category"></option>
                    @foreach($category as $cat)
                    <option value=" {{ $cat->id }} " <?php if ($cat->id == $post->category_id) {
                        echo "selected";
                    } ?>> {{$cat->category_name}}  </option>
                    @endforeach
                   
                  </select>
                </div>
              </div>
              <!-- end of category -->



              


              
              <!-- Full text -->
              <div class="col-lg-12">
                <div class="form-group mg-b-10-force">
                  
                  <label class="form-control-label">Full text: <span class="tx-danger">*</span></label>
                  <textarea class="form-control" name="full_text" id="summernote" >
                      {{$post->full_text}}
                  </textarea>
                </div>
              </div>


              <!-- tags text -->
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Tags: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="tags" id="tag" data-role="tagsinput" value="{{ $post->tags }}">
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
                        <input type="checkbox" name="top_slider" value="1" <?php if ($post->top_slider == 1) {
                            echo "checked";
                        } ?>>
                        <span>Top slider</span>
                    </label>
                </div>   
                <!-- end of checkbox top slider  --> 


                 <!-- checkbox low slider -->
                 <div class="col-lg-4">
                    <label class="ckbox">
                        <input type="checkbox" name="low_slider" value="1" <?php if ($post->low_slider == 1) {
                            echo "checked";
                        } ?>>
                        <span>Low slider</span>
                    </label>
                </div>   
                <!-- end of checkbox low slider  --> 
                
            </div> <!-- row  --> 
            <br><br>
            
            
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Update product</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
          </form>
          
        </div><!-- card -->
        
</div>
<!-- image part -->
<div class="sl-pagebody">
           <div class="card pd-20 pd-sm-40">
           <h6 class="card-body-title">Update image </h6>
           <form action="{{ url('update/post/photo/' . $post->id) }} " method="post" enctype="multipart/form-data">
          @csrf

         <!-- image of person -->
         <div class="row">
         <div class="col-lg-6 col-sm-6">
                
                  <label class="form-control-label">Image of person: <span class="tx-danger">*</span></label><br>
                        <label class="custom-file">
                                <input type="file" id="file" class="custom-file-input" name="image" onchange="readURL(this)">
                                <span class="custom-file-control"></span>
                                <input type="hidden" name="old_image" value="{{ $post->image }}">
                                <img src="#" id="one">
                        </label>
                
              </div>
              <div class="col-lg-6 col-sm-6">
                  <img src="{{URL::to($post->image)}}" style="height: 100px; width:100px;">
              </div>
         </div>
              <!-- end of image of person -->
              <button class="btn btn-sm btn-warning" type="submit" >Update image</button>

           
          </div>
          
          </div>
          <!-- end of image part -->
          </form>
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
