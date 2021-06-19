@extends('layouts.master')
@section('title','users');
@section('content')


      <!-- Main Content -->
      <section class="section">
   
    
   <div class="form-group">
                   <button class="btn btn-success btn-lg btn-block" tabindex="2">
                       
                   <h2 class="text-center mt-5"> Mandera County Public Service Board </h2>
                   </button>
                 </div>
           <h2 class="text-center"> Audit Assista</h2>
     <div class="container mt-5">
       <div class="row">
         <div class="col-8 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
           <div class="card card-success">
             <div class="card-header">
               <h4>Register</h4>
             </div>
             <form class="card auth_form" method="POST" action="{{ route('register') }}">
             <div class="card-body">
             
                       @csrf
                   <div class="header" align="center">
                  
                       
                    
                       
                   </div>
                   @if ($errors->any())
                       <div class="alert alert-danger">
                           <ul>
                               @foreach ($errors->all() as $error)
                                   <li>{{ $error }}</li>
                               @endforeach
                           </ul>
                       </div>   
                       @endif        
                   <div class="body">
                       <div class="input-group mb-3">
                     
                        <input type="text" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus placeholder="Username">
                      
                           <div class="input-group-append">
                               <span class="input-group-text"><i class="fas fa-user"></i></span>
                           </div>
                           
                       </div>
                       <div class="input-group mb-3">
                           
                           <input type="email" id="email" type="email" class="form-control" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" placeholder="Enter Email">
                           <div class="input-group-append">
                               <span class="input-group-text"><i class="fas fa-envelope-square"></i></span>
                           </div>

                          
                       </div>                        
                       <div class="input-group mb-3">
                          
                           <input  id="password" type="password" class="form-control" @error('password') is-invalid @enderror" name="password"  autocomplete="new-password" placeholder="Password">
                          
                           <div class="input-group-append">                                
                               <span class="input-group-text"><i class="fas fa-key"></i></span>
                           </div> 
                                                 
                       </div>
                       <div class="input-group mb-3">
                            
                           
                           <input id="password-confirm" type="password" class="form-control"   @error('confirm_password') is-invalid @enderror" name="password_confirmation" = autocomplete="new-password" placeholder="Confirm Password">
                           <div class="input-group-append">                                
                               <span class="input-group-text"><i class="fas fa-key"></i></span>
                           </div> 
                                                    
                       </div>
                 
                       <button type="submit" class="btn btn-success btn-block waves-effect waves-light">
                                   {{ __('Register') }}
                               </button>
                               
                       
                   </div>
               
             </div>
             </form>
             <div class="mb-4 text-muted text-center">
               
             </div>
           </div>
         </div>
       </div>
     </div>
    <div align="center" class="mt-5">
              
               <img src="assets/img/images.png" width="600" height="80" alt="cpsb"><br><br.<br<br><br>
      </div>

      
               
               
          </section>
        
    </div>
  
    <script src="{{ asset('assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{ asset('assets/js/page/index.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{ asset('assets/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{ asset('assets/js/custom.js')}}"></script>
   
       
      
 @endsection
