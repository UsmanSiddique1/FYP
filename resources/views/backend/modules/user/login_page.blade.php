<!doctype html>
<html class="no-js " lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Aero Bootstrap4 Admin :: Sign In</title>
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
                
                    <form class="card auth_form" action="{{URL::to('login')}}" method="POST" id="register-form">
                
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                    <div class="header">
                        <img class="logo" src="assets/images/logo.svg" alt="">
                        <h5>Log in</h5>
                    </div>
                    <div class="body">
                        <div class="input-group mb-3">
                            
                            <input type="email" id="inputEmail" class="form-control" placeholder="Email address"  name="Email" value="{{old('Email')}}">
        
                               
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                            </div>
                            @if ($errors->has('Email'))
                              <div style="color:red;">{{ $errors->first('Email') }}</div>
                            @endif

                            
                             
                        </div>
                       
                        <div class="input-group mb-3">
                           <input type="password" id="inputPassword" class="form-control" placeholder="Password"  name="Password" value="{{old('Password')}}">
                            

                               
                            <div class="input-group-append">                                
                                <span class="input-group-text"><a href="forgot-password.html" class="forgot" title="Forgot Password"><i class="zmdi zmdi-lock"></i></a></span>
                            </div> 
                            @if ($errors->has('Password'))
                              <div style="color:red;">{{ $errors->first('Password') }}</div>
                            @endif 
                                                   
                        </div>
                       
                        <div class="checkbox">
                            <input id="remember_me" type="checkbox">
                            <label for="remember_me">Remember Me</label>
                        </div>
                       
                        <button class="btn btn-lg btn-success btn-block waves-effect waves-light" type="submit" class="fieldgroup">Log In</button>                        
                        
                    </div>
                </form>


                <div class="copyright text-center">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>,
                    <span><a href="templatespoint.net">Templates Point</a></span>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <img src="{{ asset('assets/images/signin.svg')}}" alt="Sign In"/>
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