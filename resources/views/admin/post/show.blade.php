@extends('admin.admin_layouts')

@section('admin_content')
<div class="sl-mainpanel">
<div class="sl-pagebody">
<div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Post details</h6>

          
          
          

          <div class="form-layout">
            <div class="row mg-b-25">
              


              <!-- Title(name of person) -->
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Title(name of person): </label><br>
                  <strong>{{ $all_posts->title }}</strong>
                      
                </div>
              </div>
              <!-- end of Title(name of person) -->

             

                <!-- Full name(name of person) -->
                <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Full name: <span class="tx-danger"></span></label><br>
                  <strong>{{ $all_posts->fullname }}</strong>

                </div>
              </div>
              <!-- end of Full name(name of person) -->
              

              <!-- Birth date -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Birth date: <span class="tx-danger"></span></label><br>
                  <strong>{{ date('d-m-Y', strtotime($all_posts->birth_date))  }}</strong>

                </div>
              </div>
              <!-- end of Birth date -->


              <!-- Death date -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Death date: <span class="tx-danger"></span></label><br>
                  <strong>{{ date('d-m-Y', strtotime($all_posts->death_date))  }}</strong>
                </div>
              </div>
              <!-- end of Death date -->

              <!-- birth date maunaly -->
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Birth date(maually): <span class="tx-danger"></span></label><br>
                  <strong>{{ $all_posts->birth_date_maually }}</strong>
                </div>
              </div>
              <!-- end of Death date -->


                <!-- death date maunaly -->
                <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Death date(maually): <span class="tx-danger"></span></label><br>
                  <strong>{{ $all_posts->death_date_maually }}</strong>
                </div>
              </div>
              <!-- end of Death date -->


              <!-- Birth place -->
                <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Birth place: <span class="tx-danger"></span></label><br>
                  <strong>{{ $all_posts->birth_place }}</strong>
                </div>
              </div>
              <!-- end Birth place -->
              
              
              <!-- Death place -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Death place: <span class="tx-danger"></span></label><br>
                  <strong>{{ $all_posts->death_place }}</strong>
                </div>
              </div>
              <!-- end of Death place -->
              


               <!-- category -->
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Category: <span class="tx-danger"></span></label><br>
                  <strong>{{ $all_posts->category_name }}</strong>
                    
                  
                   
                  </select>
                </div>
              </div>
              <!-- end of category -->



              <!-- image of person -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image of person: <span class="tx-danger">*</span></label>
                  <label class="custom-file" >
                  <img src=" {{URL::to($all_posts->image)}} " style="width: 80px; height:80px;" >
                  </label>
                </div>
              </div>
              <!-- end of image of person -->


              
              <!-- Full text -->
              <div class="col-lg-12">
                <div class="form-group mg-b-10-force">
                  
                  <label class="form-control-label">Full text: <span class="tx-danger">*</span></label><br>
                  <strong>{!! $all_posts->full_text !!}</strong>

                </div>
              </div>


              <!-- tags text -->
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Tags: <span class="tx-danger"></span></label><br>
                  <p>{{ $all_posts->tags }}</p>
                </div>
              </div>
              <!-- end of tags text -->


            </div><!-- row -->


            <hr>
            <br><br>

            
            <div class="row">

                <!-- checkbox top slider -->
                <div class="col-lg-4">
                    <label class="">
                        @if($all_posts->top_slider == 1)
                        <span class="badge badge-success">Activae</span>

                        @else
                        <span class="badge badge-danger">Inactive</span>

                        @endif
                        <span>Top slider</span>
                    </label>
                </div>   
                <!-- end of checkbox top slider  --> 


                 <!-- checkbox low slider -->
                 <div class="col-lg-4">
                    <label class="">
                        @if($all_posts->low_slider == 1)
                        <span class="badge badge-success">Activae</span>
                        @else
                        <span class="badge badge-danger">Inactive</span>


                        @endif
                        <span>Low slider</span>
                    </label>
                </div>   
                <!-- end of checkbox low slider  --> 
                
            </div> <!-- row  --> 
            
            
            
           
          </div><!-- form-layout -->
          
        </div><!-- card -->
</div>
</div>



    
@endsection
