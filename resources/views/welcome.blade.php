<!doctype html>
<html class="no-js " lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: MCPSB |Audit Assista  Portal</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Custom Css -->
<link rel="stylesheet" href="{{asset('assets/front/plugins/bootstrap/css/bootstrap.min.css')}}}">
<link rel="stylesheet" href="{{asset('assets/front/css/style.min.css')}}">  
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  
</head>

<body class="theme-blush">

<div class="authentication">
    <div class="container">
    @if(session('message'))
    
    <div class="alert alert-success" role="alert">
     {{ session('message')}}
</div>


    @endif
    @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif
        <div class="row">
            <div class="col-lg-4 col-sm-12">
             
                                    
                                
                <form class="card auth_form" method="POST" action="{{ route('login') }}">
                        @csrf
                     
                    <div class="header">

                    
                   
                        
                    <!--<h5>Job Portal</h5>-->
                    <button class="btn btn-success">
                                    {{ __(' Mandera County Public Service Board') }}
                                </button><p>
                    <h5><div class="card-header">{{ __(' Audit  Assista') }}</div></h5>
                    </div>
                    <div class="body">
                    <label  for='email'>Email</label>
                        <div class="input-group mb-3">

                        <input class="form-control" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="input-group-append">
                                <span class="input-group-text"  input id="email" type="email" class="form-control" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                
                                    </span>
                            </div>
                        </div>
                        <label  for='email'>Password</label>
                        <div class="input-group mb-3">
                        <input id="password" class="form-control" type="password" class="form-control" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror     
                            <div class="input-group-append">                                
                                <span class="input-group-text"input id="password" type="password" class="form-control" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"><a href="forgot-password.html" class="forgot" title="Forgot Password"></a></span>
                            </div>   
                                               
                        </div>
                    
                        <button type="submit" class="btn btn-success">
                                    {{ __('Login') }}
                                </button>

                                <!-- @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-green underline">Register</a>
                                    @endif
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                   
                                @endif -->
</a>                 
                      
                    </div>
                </form>
                <div class="copyright text-center">All Rights Reserved
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>,
                  
                </div>
                
            </div>
            <div class="col-lg-8 col-sm-12" float="right">
                <div class="card">
                <img src="{{asset('assets/front/images/images.png')}}" width="600" height="80" alt="cpsb">
                 
                
                <img src="{{asset('assets/front//images/mdrlogo2.jpg')}}" width="400"  alt="cpsb"></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="{{asset('assets/front/bundles/libscripts.bundle.js')}}"></script>
<script src="{{asset('assets/front/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
</body>


</html>