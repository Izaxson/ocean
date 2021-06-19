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
                    <h4>Head Count/Audit  Records</h4>
                    <div class="col" ><a href="{{route('admin.auditform')}}"><button class="btn btn-success float-right " >Add new Audit Record</button></a></div>
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
                          GENDER
                          </th>
                          <th>
                          MOBILE NO.
                          </th>
                          
                  
                          <th>
                            ACTION
                          </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($audit as $row)
                      <tr>
                       <td>MCPSB-AUD-ID-{{ $row->id }} </td>
                         <td>{{ $row->employee_name }} </td>
                          <td>{{ $row->id_no }} </td>
                           <td>{{ $row->gender }} </td>
                           <td>0{{ $row->mobile_number }} </td>
                         
                             
                           
                          
                       
                        <td>
                       
                            <a href="editform/{{ $row->id }}" class= "btn btn btn-primary"</a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                            class="feather feather-eye"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                            </path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> 
                          </a>
                          <a href="auditview/{{ $row->id }}" class= "btn btn btn-success"</a>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                          </a>
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
