<!doctype html>
<html class="no-js " lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: HEC Laptop Destribution :: Sign Up</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/style.min.css')}}">
</head>

<body class="theme-blush">

<div class="authentication">    
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                 <form class="card auth_form" action="{{URL::to('update_user')}}/{{$users->id}}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                    <div class="header">
                        <img class="logo" src="assets/images/logo.svg" alt="">
                        <h5>{{$users->name}}</h5>
                        <span>Make Changes</span>
                    </div>
                    <div class="body">
                        <div class="input-group mb-3">


                            
                            <input type="text" id="inputText" class="form-control" placeholder="Enter Name"  name="name" value="{{$users->name}}">
        
        
                           

                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                            </div> 
                            @if ($errors->has('name'))
                              <div style="color:red;">{{ $errors->first('name') }}</div>
                            @endif
                             
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" id="inputEmail" class="form-control" placeholder="Enter Email"  name="email" value="{{$users->email}}">


                               
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-email"></i></span>
                            </div>
                             @if ($errors->has('email'))
                              <div style="color:red;">{{ $errors->first('email') }}</div>
                            @endif
                            
                        </div>                        
                        <div class="input-group mb-3">
                            <input type="text" id="inputPassword" class="form-control" placeholder="Enter Password"  name="password" value="{{$users->password}}">
        

                             
                            <div class="input-group-append">                                
                                <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                            </div>
                            @if ($errors->has('password'))
          <div style="color:red;">{{ $errors->first('password') }}</div>
        @endif
                               

                        </div>
                         <div class="input-group mb-3">
                            <input type="text" id="inputPassword" class="form-control" placeholder="Confirm Password"  name="confirm_password" value="{{$users->password}}">

                            <div class="input-group-append">                                
                                <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>

                            </div>
                            @if ($errors->has('confirm_password'))
          <div style="color:red;">{{ $errors->first('confirm_password') }}</div>
        @endif

                        </div>
                        <div class="checkbox">
                            <input id="remember_me" type="checkbox">
                            <label for="remember_me">I read and agree to the <a href="javascript:void(0);">terms of usage</a></label>
                        </div>
                        
                        <button class="btn btn-lg btn-info btn-block btn-block waves-effect waves-light" type="submit" class="fieldgroup">Register</button>
                        <div class="signin_with mt-3">
                            <a class="link" href="{{ url('/login_page')}}">You already have a membership?</a>
                        </div>
                    </div>
                </form>
                <div class="copyright text-center">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>,
                    <span><a href="{{ url('/')}}">HEC Distribution System</a></span>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <img src="{{ asset('assets/images/signup.svg')}}" alt="Sign Up" />
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Jquery Core Js -->
<script src="{{ asset('assets/bundles/libscripts.bundle.js')}}"></script>
<script src="{{ asset('assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 
</body>


</html>