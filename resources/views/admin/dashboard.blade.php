

@extends('layouts.master')
@section('title','Dashboard');
@section('content')
      <div>
        <section class="section">
          <div class="row ">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-right justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">TOTAL HEAD COUNTS CAPTURED</h5>
                          <h1 class="mb-3 font-18 align="center" ><b> {{$count = DB::table('audits')->count()}}</b></h1>
                          
                         
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">

                          <img src="{{asset('assets/img/banner/img-license.png')}}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-right justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">GENDER</h5>
                          <h1 class="mb-3 font-18 align="center" ><b> MALE -{{$count = DB::table('audits')->where('gender','male')->count()}}
                          <BR>FEMALE- {{$count = DB::table('audits')->where('gender','female')->count()}}</b></h1>
                          
                         
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                       
                        <img src="data:image/png;base64,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" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-right justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">DISABILITY</h5>
                          <h1 class="mb-3 font-18 align="center" ><b> DISABLED - {{$count = DB::table('audits')->where('disability','YES')->count()}}<BR>NONE- {{$count = DB::table('audits')->where('disability','NO')->count()}}</b></h1>
                          
                         
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">

                          <img height="140" src="https://cdn3.vectorstock.com/i/1000x1000/00/42/disability-icon-vector-15280042.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-right justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">ETHNICITY</h5>
                          <h1 class="mb-3 font-18 align="center" ><b> LOCALS -{{$count = DB::table('audits')->where('home_county','Mandera')->count()}}
                          <BR></b></h1>
                          
                         
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">

                          <img height="140" src="data:image/png;base64,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" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-right justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">EDUCATION</h5>
                          <h1 class="mb-3 font-18 align="center" >MASTERS -{{$count = DB::table('audits')->where('academic_qualification','MASTERS')->count()}}
                          BACHELOR-{{$count = DB::table('audits')->where('academic_qualification','BACHELORS')->count()}}  DIPLOMA-{{$count = DB::table('audits')->where('academic_qualification','DIPLOMA')->count()}} </h1>
                          
                         
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">

                          <img height="90" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIdvoL8H7nY2X9i9jTLday_oFdrNFUNTedTw&usqp=CAU" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>

           
         
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">EDUCATION </h5>
                            <h2 class="mt-3 font-38"><span class="h4 d-block font-weight-normal mb-2">
                            <h1 class="mb-3 font-18 align="center" >KCSE- {{$count = DB::table('audits')->where('academic_qualification','KCSE')->count()}} <BR> KCPE-{{$count = DB::table('audits')->where('academic_qualification','KCPE')->count()}}<BR>
                               NOT SCHOOLED -{{$count = DB::table('audits')->where('academic_qualification','NOT SCHOOLED')->count()}} </h1>
                              
                              
                          </span></h2>
                          
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                        <img height="90" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIdvoL8H7nY2X9i9jTLday_oFdrNFUNTedTw&usqp=CAU" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
          
            
          </div>
          <div class="row">
            <div class="col-12 ">
              <div class="card">
                <div class="card-header">
                  <h4></h4>
                </div>
                <div class="card-body">
                  <div id="chart4" class="chartsh"></div>
                </div>
              </div>
            </div>
            <div class="col-12 ">
              <div class="card">
                <div class="card-header">
                  <h4></h4>
                </div>
                <div class="card-body">
                  <div class="summary">
                    <div class="summary-chart active" data-tab-group="summary-tab" id="summary-chart">
                      <div id="chart3" class="chartsh"></div>
                    </div>
                    <div data-tab-group="summary-tab" id="summary-text">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12  ">
              <div class="card">
                <div class="card-header">
                  <h4></h4>
                </div>
                <div class="card-body">
                  <div id="chart2" class="chartsh"></div>
                </div>
              </div>
            </div>
          </div>
              
        
      
         
         
         
        </section>

              
        </div>
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/bundles/morrisscripts.bundle.js"></script> <!-- Morris Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/charts/morris.js"></script>
         
@endsection
