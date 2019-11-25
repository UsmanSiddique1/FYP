@extends('backend/layout/default')
@section('content')


<!-- NOTE: actully kuch div's header.blade.php mein start ho rahi hain or yahan neeche 
     coding portiom k baad end ho rahi hain es liye oun div's ko wese hi rehne dain. -->


  <div class="m-grid__item m-grid__item--fluid m-grid m-grid--desktop m-grid--ver-desktop m-body__content">
          
  <div class="m-grid__item m-grid__item--fluid m-wrapper">
                        
<!-- BEGIN: Subheader -->
<div class="m-subheader ">
  <div class="d-flex align-items-center">
    <div class="mr-auto">
      <h3 class="m-subheader__title ">HEC Student List</h3> 
          </div>    
      
       <div>
          <span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
          <span class="m-subheader__daterange-label">
            <span class="m-subheader__daterange-title"></span>
            <span class="m-subheader__daterange-date m--font-brand"></span>
          </span>
          <a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
            <i class="la la-angle-down"></i>
          </a>
        </span>
            </div>
  </div>
      Gender:
      <a href="show_employee?gender=male">Male</a> 
      <a href="show_employee?gender=female">Female</a>
      <a href="show_employee">Reset</a>
      
</div>
<!-- END: Subheader -->              


<!--THIS BELOW PORTION IS THE MAIN BODY, PLEASE START CODING BELOW  -->


<!--Begin::Section-->
<div class="row">
  <div class="col-xl-12"> <br> </div>
  <div class="col-xl-12">
    <!--begin::Portlet-->
<div class="m-portlet  m-portlet--rounded"  id="m_portlet">
  <div class="m-portlet__head">
    <div class="m-portlet__head-caption">
      <div class="m-portlet__head-title">
        <span class="m-portlet__head-icon">
          <i class="flaticon-map-location"></i>
        </span>
        <h3 class="m-portlet__head-text">
          Division of Science & Technology
        </h3>
      </div>      
    </div>
    <div class="m-portlet__head-tools">
      <ul class="m-portlet__nav">
        <li class="m-portlet__nav-item">
               <form action="{{URL::to('upload_employee')}}" method="POST" enctype="multipart/form-data">
                 {{csrf_field()}}  
                 <input type="file" name="upload_file" class="form-control" style="padding: 0%;">
                 <input class="btn btn-sm btn-success" type="submit" value="Upload List" name="submit" style="padding: 0%;">
               </form> 
        </li>
      </ul>
    </div>
  </div>

<div class="container">
          <div class="table-responsive">
            <table id="datatable" class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>First_Name</th>
                  <th>Last_Name</th>
                  <th>Gender</th>
                  <th>Job_Title</th>
                  <th>Hire_Date</th>
                </tr>
              </thead> 


              <tbody>

@foreach($values as $value) 
                <tr>

                  <td>{{$value->id}}</td>
                  <td>{{$value->firstname}}</td>
                  <td>{{$value->lastname}}</td>
                  <td>{{$value->gender}}</td> 
                  <td>{{$value->jobtitle}}</td>
                  <td>{{$value->hiredate}}</td>

                </tr>
@endforeach

              </tbody>

            </table>
            {{ $values->links() }}
          </div>

</div> <!-- inner container-->

</div>  
<!--end::Portlet-->
  </div>
</div>
<!--End::Section-->



<!-- PLEASE END CODING ABOVE AND DON'T TOUCH OTHER DIV'S OUT SIDE OF THIS PORTION -->



<!--End::Section-->

</div> <!--m-content--> 

</div><!-- fluid m-wrapper --> 
</div><!--  m-body__content -->  


<!-- plzz ye neechay wali 6 closing div's ko nahi cheerna -->
</div>            
</div>
</div>
</div>        
</div>
</div>

<!-- end::Body --> 
<!-- yahan oper jo "end::Body" likha howa hai, ye wali body header.blade.php mein 
     "begin::Horizontal Menu" k oper se start ho rahi hai.. beshak check kr lo -->
  

<script src="{{URL::to('public/assets')}}/www.google-analytics.com/analytics.js"></script>
<script src="{{URL::to('public/assets')}}/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="{{URL::to('public/assets')}}/ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
<script src="{{URL::to('public/assets')}}/css/app.css"></script>
<script src="{{URL::to('public/assets')}}/js/app.js"></script>


    
@stop