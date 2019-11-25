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
      <h3 class="m-subheader__title ">SIGN IN </h3>     
          </div>
 
  </div>
</div>
<!-- END: Subheader -->              


<div class="m-content">

<!--THIS BELOW PORTION IS THE MAIN BODY, PLEASE START CODING BELOW  -->



<!--Begin::Section-->
<div class="row">
  <div class="col-xl-8">
    
    <!--begin:: Sign Up-->
<div class="m-portlet m-portlet--full-height  m-portlet--rounded" style="height: 400px;" >
  <div class="m-portlet__head">
    <div class="m-portlet__head-caption">
      <div class="m-portlet__head-title">
        <h3 class="m-portlet__head-text">
          Register New User
        </h3>
      </div>
    </div>
    <div class="m-portlet__head-tools">
      <ul class="m-portlet__nav">
        <li class="m-portlet__nav-item" m-dropdown-toggle="hover">
          <a href="#" class="m-portlet__nav-link m-dropdown__toggle ">
         &copy; UE Production
          </a>
        </li>
      </ul>
    </div>
  </div>
  
  <div class="m-portlet__body">
    <div class="tab-content">

<form class="form-signin" action="{{URL::to('register')}}" method="POST" id="register-form">

  <input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="row"> <!-- inner row -->


        <div class="col-xl-6">
        <label for="inputText"><h6>Name</h6></label>
        <input type="text" id="inputText" class="form-control" placeholder="Enter Name"  name="name" value="{{old('name')}}">
        @if ($errors->has('name'))
          <div style="color:red;">{{ $errors->first('name') }}</div>
        @endif
        </div>

        <div class="col-xl-6">
        <label for="inputEmail"><h6>Email</h6></label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Enter Email"  name="email" value="{{old('email')}}">
        @if ($errors->has('email'))
          <div style="color:red;">{{ $errors->first('email') }}</div>
        @endif
        <br>
        </div>

     
        <div class="col-xl-6">
        <label for="inputPassword" ><h6>Password</h6></label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Enter Password"  name="password" value="{{old('password')}}">
        @if ($errors->has('password'))
          <div style="color:red;">{{ $errors->first('password') }}</div>
        @endif
        </div>


        <div class="col-xl-6">
        <label for="inputPassword" ><h6>Confirm Password</h6></label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Confirm Password"  name="confirm_password" value="{{old('confirm_password')}}">
        @if ($errors->has('confirm_password'))
          <div style="color:red;">{{ $errors->first('confirm_password') }}</div>
        @endif
        <br>
        </div>
        

      </div> <!-- inner row -->


        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Check me out
          </label>
        </div>
        <button class="btn btn-lg btn-info btn-block" type="submit" class="fieldgroup">Register</button>
    

      </form>


    </div>
  </div>
</div>

<!--end:: Sign Up-->  </div>



  <div class="col-xl-4">
    <!--begin:: Sign in-->
<div class="m-portlet m-portlet--full-height m-portlet--fit  m-portlet--rounded" style="height: 400px;">
  <div class="m-portlet__head">
    <div class="m-portlet__head-caption">
      <div class="m-portlet__head-title">
        <h3 class="m-portlet__head-text">
          Log In User
        </h3>
      </div>
    </div>
    <div class="m-portlet__head-tools">
      <ul class="m-portlet__nav">
        <li class="m-portlet__nav-item" m-dropdown-toggle="hover">
          <a href="#" class="m-portlet__nav-link m-dropdown__toggle ">
         &copy; UE Production
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="m-portlet__body">
    <div class="m-widget4 m-widget4--chart-bottom" style="min-height: 350px">
     
      <form class="form-signin" action="{{URL::to('login')}}" method="POST" id="register-form">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <label for="inputEmail"><h6>Email Address</h6></label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address"  name="Email" value="{{old('Email')}}">
        @if ($errors->has('Email'))
          <div style="color:red;">{{ $errors->first('Email') }}</div>
        @endif
        <br>
        <label for="inputPassword" ><h6>Password</h6></label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password"  name="Password" value="{{old('Password')}}">
        @if ($errors->has('Password'))
          <div style="color:red;">{{ $errors->first('Password') }}</div>
        @endif
        <br>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-success btn-block" type="submit" class="fieldgroup">Log In</button>
      </form>

      



    </div>
  </div>
</div>
<!--end:: Sign in--> </div>

</div>
<!--End::Section-->



<!-- PLEASE END CODING ABOVE AND DON'T TOUCH OTHER DIV'S OUT SIDE OF THIS PORTION -->


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
  
    
@stop