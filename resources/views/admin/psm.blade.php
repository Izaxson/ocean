@extends('layouts.master')
@section('title','Audit Records');
@section('content')


      <!-- Main Content -->
     
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>PUBLIC SERVICE MANAGEMENT,COHESION INTEGRATION ,DEVOLVED UNIT EMPLOYEES AUDITED</h4>
                    <div class="col" ><a href="#"><button class="btn btn-primary float-right " >PUBLIC SERVICE MANAGEMENT,COHESION INTEGRATION ,DEVOLVED UNIT DEPARTMENT</button></a></div>
                  </div>
                 

                    @if (session('status'))
                       <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                       </div>
                    @endif
                    
                    
                  <div class="card-body mt-3">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                          <th>AUDIT ID</th>
                          <th>
                            EMPLOYEE NAME
                          </th>
                          <th>
                            ID /PASSPORT NUMBER
                          </th>
                          <th>
                            PERSONAL NUMBER
                          </th>
                         
                          <th>
                          SECTION
                          </th>
                          
                  
                          
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($audit as $row)
                      <tr>
                       <td>MCPSB-AUD-ID-{{ $row->id }} </td>
                         <td>{{ $row->employee_name }} </td>
                          <td>{{ $row->id_no }} </td>
                          <td>{{ $row->employee_personal_no }} </td>
                           <td>{{ $row->section }} </td>
                         
                             
                           
                          
                       
                    
                        </td>
                     
                    
                       
                        
                          
                        
                      </tr>
                      @endforeach
                      
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
    </div>
  
   
   
       
      
 @endsection
