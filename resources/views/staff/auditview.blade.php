@extends('layouts.staffmaster')
@section('title','view Audit Form Details');
@section('content')

<section class="section">
        <form action="/staff/auditview/{{ $audit->id}}" method="POST">
        

             <div class="section-body">
             <div class="row">
                
                  <div class="card">
                
                    <button class="btn btn-success " ><h4>STAFF AUDIT TOOL,OCTOBER 2020 </h4></button>
                    <button class="btn btn-success " ><h4>VIEW AUDIT FORM DETAILS </h4></button>
                 <img height="184" width="100%" alt="image" src="{{ asset('assets/img/mcpsblogo.png')}}"> 
                  <div class="card-header">

                       
                   </div>
                   @if (session('status'))
                       <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                       </div>
                    @endif
                   @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>   
                        @endif        
                        
                   <div class="col" >
                   <hr> <button class="btn btn-success ">AUDIT FORM</button><hr> <button class="btn btn-success " ><h4> </h4>MCPSB-AUD-ID-000{{ $audit->id }}</button>
                              <hr>
                          <div class="form-group" class="col-24 col-md-12 col-lg-12">
                              <button class="btn btn-success " >SECTION A.</button>
                              <button class="btn btn-success " >PERSONAL DETAILS</button>
                             
                                   
                        </div>
                        <hr>
                            <div class="row clearfix">
                                <div class="col-md-4">
                                <label>Employee Name</label>
                                    <div class="form-group">
                                   <input type="text" disabled value="{{ $audit->employee_name}}" value="{{ old('employee_name') }}" class="form-control" name="employee_name" placeholder="Employee Name">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Gender  </label>
                                    <input  disabled value="{{ $audit->gender}}" class="form-control" name="gender" >
                                       
                                </div>
                                <div class="col-md-2">
                                  <label>Date of Birth</label>
                                    <div class="form-group" >
                                    <input type="text" disabled value="{{ $audit->date_of_birth}}" class="form-control" name="date_of_birth" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <label>Employee Personal Number</label>
                                    <div class="form-group">
                                    <input type="text" disabled value="{{ $audit->employee_personal_no}}" class="form-control" name="employee_personal_no" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                        <label>ID/PASSPORT No.</label>
                                            <div class="form-group">
                                            <input type="text" disabled value="{{ $audit->id_no}}" class="form-control" name="id_no" >
                                                
                                            </div>

                                            @error('name')

                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                
                                <div class="form-group col-md-4">
                                    <label>Disability  </label>
                                    <input type="text" disabled value="{{ $audit->disability}}" class="form-control" name="disability" >
                                     
                                        
                                    </select> 
                                </div>
                                
                                <div class="col-md-4">
                                <label>Nature of Disability </label>
                                     <input type="text" disabled value="{{ $audit->nature_of_disability}}" class="form-control" name="nature_of_disability" >
                                     
                                </div>
                                <div class="col-md-4">
                                <label>First Designation </label>
                                    <div class="form-group">
                                    <input type="text" disabled value="{{ $audit->first_designation}}" class="form-control" name="first_designation" >
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <label>Current Designation </label>
                                    <div class="form-group">
                                    <input type="text" disabled value="{{ $audit->current_designation}}" class="form-control" name="current_designation" >
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <label>Terms OF Service  </label>
                                    <input type="text" disabled value="{{ $audit->terms_of_service}}" class="form-control" name="current_designation" >
                                    
                                </div>
                                <div class="col-md-4">
                                <label>Duty Station  </label>
                                    <div class="form-group">
                                    <input type="text" disabled value="{{ $audit->duty_station}}" class="form-control" name="current_designation" >
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Date of First Appointment  </label>
                                    
                                    <input type="text" disabled value="{{ $audit->date_of_first_appointment}}" class="form-control" name="date_of_first_appointment" >
                                   
                                       
                                   
                                </div>
                                <div class="col-md-3">
                                <label>Date of Current Appointment  </label>
                                    <div class="form-group  ">
                                    <input type="text" disabled value="{{ $audit->date_of_current_appointment}}" class="form-control"  >
                                    </div>
                                </div>
                                <div class="form-group col-md-2 ">
                                    <label>First Job Group  </label>
                                    <input type="text" disabled value="{{ $audit->first_job_group}}" class="form-control"  >
                                </div>
                               
                              
                                <div class="form-group">
                                    <label>Current  Job Group  </label>
                                    <input type="text" disabled value="{{ $audit->current_job_group}}" class="form-control"  >
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Department</label>
                                    <input type="text" disabled value="{{ $audit->department}}" class="form-control"  >
                                </div>
                                <div class="col-md-4">
                                <label>Section  </label>
                                    <div class="form-group">
                                        <input disabled class="form-control" value="{{ old('section') }}">
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Home County</label>
                                    <input type="text" disabled value="{{ $audit->home_county}}" class="form-control"  >
                                </div>

                                <div class="col-md-4">
                                <label>Sub County  </label>
                                <input type="text" disabled value="{{ $audit->sub_county}}" class="form-control"  >
                                </div>
                                <div class="col-md-4">
                                <label>Ethnicity  </label>
                                <input type="text" disabled value="{{ $audit->ethnicity}}" class="form-control"  >
                                </div>
                               

                                <div class="form-group col-md-4">
                                    <label>Clan</label>
                                    <input type="text" disabled value="{{ $audit->clan}}" class="form-control"  >
                                </div>
                              

                                <div class="form-group col-md-4">
                                    <label>Sub Clan</label>
                                    <input type="text" disabled value="{{ $audit->sub_clan}}" class="form-control"  > 
                                </div>
                                <div class="col-md-4">
                                <label>Mobile Number </label>
                                <input type="text" disabled value="0{{ $audit->mobile_number}}" class="form-control"  > 
                                </div>
                               
                              
                                
                                <div class="col-md-4">
                                <label>Contact Address</label>
                                <input type="text" disabled value="{{ $audit->contact_address}}" class="form-control"  > 
                                </div>
                                <div class="col-md-4">
                                <label>Email Address</label>
                                <input type="text" disabled value="{{ $audit->email_address}}" class="form-control"  > 
                                </div>
                 
                            </div>
                        </div>
                          <div class="col" >
                        <hr><hr>
                          <div class="form-group" class="col-24 col-md-12 col-lg-12">
                              <button class="btn btn-success " >SECTION B.</button>
                              <button class="btn btn-success " >QUALIFICATIONS</button>
                      
                        </div>
                        <hr>
                            <div class="row clearfix">
                                <div class="col-md-4">
                                <label>Academic Qualification</label>
                                <input type="text" disabled value="{{ $audit->academic_qualification}}" class="form-control"  > 
                                   
                                </div>
                              
                                <div class="col-md-4">
                                  <label>Area of Specialization</label>
                                  <input type="text" disabled value="{{ $audit->area_of_specialization}}" class="form-control"  >
                                    
                                </div>
                                <div class="col-md-4">
                                <label>Professional  Qualification</label>
                                <input type="text" disabled value="{{ $audit->professional_qualification}}" class="form-control"  >
                                    
                                </div>
                                <div class="col-md-4">
                                <label>Registration No.</label>
                                <input type="text" disabled value="{{ $audit->registration_no}}" class="form-control"  >
                                   
                                </div>
                                <div class="col-md-4">
                                <label>What Kind of training Do you need?  </label>
                                <input type="text" disabled value="{{ $audit->training_need}}" class="form-control"  >
                                    
                                </div>
                                <div class="form-group">
                                    <label>Have you gone for study for more than 6 months ? </label>
                                    <input type="text" disabled value="{{ $audit->study_leave}}" class="form-control"  >
                                  
                                </div>
                                <div class="col-md-4">
                                <label>If yes when and which course</label>
                                <input type="text" disabled value="{{ $audit->study_leave_details}}" class="form-control"  >
                                   
                                </div>
                                <div class="form-group">
                                    <label>Are you rightly placed in area of your specialization?  </label>
                                    <input type="text" disabled value="{{ $audit->placement}}" class="form-control"  >
                                    
                                </div>
                                <div class="col-md-4">
                                <label>if No Give reason  </label>
                                <input type="text" disabled value="{{ $audit->if_no_placement_reason}}" class="form-control"  >
                                    
                                </div>
                                
                               
                            </div><hr><hr>

                            <div class="form-group" class="col-12 col-md-12 col-lg-12">
                              <button class="btn btn-success " >SECTION C.</button>
                              <button class="btn btn-success " >VALUES AND PRINCIPLE OF PUBLIC SERVICE</button>
                                                                   
                        </div>
                        <hr>
                            <div class="row clearfix">
                            <div class="form-group mt-1 col-md-4"">
                                    <label>Have you been trained on Values and Principles of Governance ? </label>
                                    <input type="text" disabled value="{{ $audit->principle_of_governance}}" class="form-control"  >
                                    
                                </div>
                              
                               
                                <div class="form-group">
                                    <label>Are you conversant with code of conduct,Human resource Manual & Work Ethics?  </label>
                                    <input type="text" disabled value="{{ $audit->code}}" class="form-control"  >
                                    
                                </div>
                                <div class="col-md-4">
                                <label>Any other Comment.</label>
                                <input type="text" disabled value="{{ $audit->comment}}" class="form-control"  >
                                   
                                </div>
                               
                                
                                <hr>
                                <div class="col-md-4">
                                <label>Remarks.</label>
                                <input type="text" disabled value="{{ $audit->remarks}}" class="form-control"  >
                                    
                                </div>
                            
                                <div class="col-md-4">
                                <label>Date of Audit </label>
                                <input type="text" disabled value="{{ $audit->date_of_audit}}" class="form-control"  >
                                   
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Approved by</label>
                                    <input type="text" disabled value="{{ $audit->approved_by}}" class="form-control"  >
                                    
                                </div>
                               

                                <div class="col-md-4">
                                <label>Date Captured  </label>
                                <input type="text" disabled value="{{ $audit->date_captured}}" class="form-control"  >
                                    
                                    
                                </div>
                               
                                <div class="col-md-4 col-mr-4">
                                <label>Captured by </label>
                                <input type="text" disabled value="{{ $audit->captured_by}}" class="form-control"  >
                                    
                                </div>
                                
                               
                            </div>
                  
                            </div>
                        </div>
                            </div>
                       
                   
                   
                       
                     
                    </div>
                 
                                
                  </div>
                  
                   
                   
                      
                   
                  </div>
                            

                                
                            </div>
                        </div>
                    </div>
                 
                   
                      
                   
                  </div>
                    </div>
                 
             
                  </div>
                

                
                  <div class="card-footer text-right">
                   
                    
                  </div>
                  
                  
                
              </div>
           
              
            </div>
          </div>
          </form>
</section>

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