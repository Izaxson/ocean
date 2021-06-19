<!DOCTYPE html>
<html lang="en">


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Audit Assista|| @yield('title') </title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/css/app.min.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css')}}">
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <!-- Custom style CSS -->
  <!-- /BOOTSRAP CDN -->
  


  <link rel="stylesheet” href=” https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src= "{{secure_asset('assets/lib/js/jquery.min.js')}}"></script>
<script src="{{secure_asset('assets/lib/js/bootstrap.min.js')}}"></script>
</head>


<body>
  
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
     
      <div class="main-sidebar sidebar-style-2">
      @include('includes.navbar')
      @include('includes.aside')
     
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <!-- add content here -->
            @yield('content')
          </div>
        </section>

        @include('includes.sidebar')
        
      </div>
      <footer class="main-footer">
        <div class="footer-centre">
          <a href="#"><img height="164" width="100%" alt="image" src="{{ asset('assets/img/mcpsblogo.png')}}"> </a></a><br>
         
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <script src="{{ asset('assets/js/sweetalert.js')}}"></script>
  <script">
           @if (session('status'))
              alert('{{session('status')}}') ;                  
           @endif
  </script>
  @yield('scripts')
  <!-- General JS Scripts -->
  
  <!-- JS Libraies -->
  < <script src="{{ asset('assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{ asset('assets/js/page/index.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{ asset('assets/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{ asset('assets/js/custom.js')}}"></script>

  
  
  
  

  <script src="{{ asset('assets/bundles/datatables/datatables.min.js')}}"></script>
  <script src="{{ asset('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('assets/bundles/datatables/export-tables/dataTables.buttons.min.js')}}"></script>
  <script src="{{ asset('assets/bundles/datatables/export-tables/buttons.flash.min.js"')}}></script>
  <script src="{{ asset('assets/bundles/datatables/export-tables/jszip.min.js')}}"></script>
  <script src="{{ asset('assets/bundles/datatables/export-tables/pdfmake.min.js')}}"></script>
  <script src="{{ asset('assets/bundles/datatables/export-tables/vfs_fonts.js')}}"></script>
  <script src="{{ asset('assets/bundles/datatables/export-tables/buttons.print.min.js')}}"></script>
  <script src="{{ asset('assets/js/page/datatables.js')}}"></script>
  <!-- Template JS File -->
  
  <!-- Custom JS File -->

   <!-- Custom sweet alert -->
   
   

   @stack('scripts')

  
</body>


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->
</html>