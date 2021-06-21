
@extends('layouts.master')
@section('title','Audit Form');
@section('content')


<section class="section">
        <form action="{{route('admin.addaudit')}}" method="POST">
         @csrf

             <div class="section-body">
             <div class="row">
               
                  <div class="card">
                
                    <button class="btn btn-success " ><h4>STAFF AUDIT TOOL,OCTOBER 2020 AUDIT FORM</h4></button>
                   
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
                   <hr> <button class="btn btn-success ">AUDIT FORM</button><hr>
                <div class="form-group" class="col-24 col-md-12 col-lg-12">
                              <button class="btn btn-success " >SECTION A.</button>
                              <button class="btn btn-success " >PERSONAL DETAILS</button>
                              
                                   
                        </div>
                        <hr>
                            <div class="row clearfix">
                                <div class="col-md-4">
                                <label>Employee Name</label>
                                    <div class="form-group">
                                    <input style="text-transform: uppercase;" class="form-control"value="{{ old('employee_name') }}" type="text" name="employee_name">
                                        <!-- <input type="text" value="{{ old('employee_name') }}" autofocus class="form-control" name="employee_name" placeholder="Employee Name"> -->
                                    </div>
                                </div>
                               
                                <div class="form-group col-md-4">
                                    <label>Gender  </label>
                                    <p>Please select  gender:</p>
                                        <input type="radio" id="male" name="gender" value="MALE">
                                        <label for="MALE">MALE</label><br>
                                        <input type="radio" id="FEMALE" name="gender" value="FEMALE">
                                        <label for="female">FEMALE</label><br>
                                       
                                      
                                    
                                </div>
                                <div class="col-md-3">
                                  <label>Date of Birth</label>
                                    <div class="form-group" >
                                        <input type="date"  value="{{ old('date_of_birth') }}" class="form-control" name="date_of_birth" placeholder="col-md-4">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                     <label>Employee Personal Number</label>
                                    <div class="form-group">
                                        <input type="number" class="form-control" value="{{ old('employee_personal_no') }}" name="employee_personal_no" placeholder="Employee Personal Number">
                                    </div>
                                </div>
                                
                               
                                <div class="col-md-4">
                                        <label>ID Number/Passport  No.</label>
                                         <input type="TEXT"  id="id_no" type="text" class="form-control" @error('id_no') is-invalid @enderror" name="id_no" value="{{ old('id_no') }}"  autocomplete="id_no" placeholder="Enter id no/passport no">
                                    
                                    </div>
                           
                                    
                                
                                
                                <div class="col-md-4">
                                <label>First Designation </label>
                                    <div class="form-group">
                                        <!-- <input type="text" class="form-control" value="{{ old('first_designation') }}" name="first_designation"placeholder="First Designation "> -->
                                        <input style="text-transform: uppercase;" placeholder="FIRST Designation " class="form-control"value="{{ old('first_designation') }}" type="text" name="first_designation">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <label>Current Designation </label>
                                    <div class="form-group">
                                      
                                       
                                    <input style="text-transform: uppercase;" class="form-control"value="{{ old('current_designation') }}" type="text" name="current_designation" placeholder="Current Designation ">
                                        <input type="text" class="form-control" value="{{ old('current_designation') }}" name="current_designation"placeholder="Current Designation ">
                                    </div>
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <label>Terms of Service  </label>
                                    <select name="terms_of_service"   value="{{ old('terms_of_service') }}"   class="form-control">
                                        <option value=""></option>
                                          <?php foreach($terms as $term):?>
                                                <option><?=$term->name?></option>
                                          <?php endforeach;?>
                                        
                                    </select> 
                                </div>
                                <div class="col-md-4">
                                <label>Duty Station  </label>
                                    <div class="form-group">
                                    <!-- <input type="text" class="form-control" value="{{ old('duty_station') }}" name="duty_station"placeholder="duty station  "> -->
                                    <input style="text-transform: uppercase;" placeholder="duty station " class="form-control"value="{{ old('duty_station') }}" type="text" name="duty_station">
                                    </div>
                                </div>

                                <div class="form-group col-md-2 ">
                                    <label>Sub County Duty station  </label>
                                    <select name="subcounty_duty_station"    value="{{ old('subcounty_duty_station') }}"  class="form-control">
                               
                                    <option value=""></option>
                                          <?php foreach($subdutystation as $row):?>
                                                <option><?=$row->sub_county_name?></option>
                                          <?php endforeach;?>
                                        

                                            
                                        
                                    </select> 
                                </div> 

                                <div class="col-md-2">
                                <label>Date of First Appointment  </label>
                                    <div class="form-group">
                                        <input type="date" class="form-control" value="{{ old('duty_sdate_of_first_appointmenttation') }}"   name="date_of_first_appointment" placeholder="Date of First Appointment">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                <label>Date of Current Appointment  </label>
                                    <div class="form-group  ">
                                        <input type="date" class="form-control" value="{{ old('date_of_current_appointment') }}" name="date_of_current_appointment" placeholder="Date of Current Appointment">
                                    </div>
                                </div>

                                <div class="form-group col-md-2 ">
                                    <label>First  Job Group  </label>
                                    <select name="first_job_group"    value="{{ old('first_job_group') }}"  class="form-control">
                                <option value=""></option>
                                        
                                        <option value=""></option>
                                          <?php foreach($jobgroup as $row):?>
                                                <option><?=$row->name?></option>
                                          <?php endforeach;?>


                                            
                                        
                                    </select> 
                                </div>  
                               
                              
                                <div class="form-group col-md-2 ">
                                    <label>Current  Job Group  </label>
                                    <select name="current_job_group"    value="{{ old('current_job_group') }}"  class="form-control">
                                    <option value=""></option>
                                          <?php foreach($jobgroup as $row):?>
                                                <option><?=$row->name?></option>
                                          <?php endforeach;?>
                                       

                                        
                                        
                                    </select> 
                                </div>

                                <div class="form-group col-md-5">
                                    <label>Department</label>
                                    <select name="department" value="{{ old('department') }}" class="form-control">
                                    <option value=""></option>
                                          <?php foreach($department as $row):?>
                                                <option><?=$row->name?></option>
                                          <?php endforeach;?>
                                        
                                       
                                        
                                        
                                    </select> 
                                </div>
                                <div class="col-md-5">
                                <label>Section  </label>
                                    <div class="form-group">
                                    <select name="section" value="{{ old('section') }}" class="form-control">
                                    <option value=""></option>
                                          <?php foreach($section as $row):?>
                                                <option><?=$row->name?></option>
                                          <?php endforeach;?>
                                        
                                       
                                        
                                        
                                    </select> 
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Home County</label>
                                    <select name="home_county" value="{{ old('home_county') }}"    class="form-control" id="HCounty">
                                    <option value=""></option>
                                          <?php foreach($county as $row):?>
                                                <option><?=$row->county_name?></option>
                                          <?php endforeach;?>
                                        
                                        
                                    </select> 
                                </div>
                                <div class="col-md-4">
                                <label>Sub County  </label>
                                    <div class="form-group">
                                        <!-- <input type="text" class="form-control" value="{{ old('sub_county') }}" name="sub_county" placeholder="Sub county"> -->
                                        <select name="sub_county" value="{{ old('sub_county') }}"    class="form-control" Id="SubCounty">
                                    <option value=""></option>
                                          <?php foreach($subcounties as $row):?>
                                                <option><?=$row->name?></option>
                                          <?php endforeach;?>
                                        
                                        
                                    </select> 
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <label>Ethnicity  </label>
                                    <div class="form-group">
                                    <select name="ethnicity" value="{{ old('ethnicity') }}" class="form-control" id="Tribe">
                                    <option value=""></option>
                                          <?php foreach($ethnicities as $row):?>
                                                <option><?=$row->name?></option>
                                          <?php endforeach;?>
                                        
                                       
                                        
                                        
                                    </select>
                                    </div>
                                </div>
                               

                                <div class="form-group col-md-4 d-none msomali">
                                    <label>Clan</label>
                                    <select name="clan"     value="{{ old('clan') }}" class="form-control" id="Clan">
                                    <option value=""></option>
                                          <?php foreach($clans as $row):?>
                                                <option><?=$row->name?></option>
                                          <?php endforeach;?>
                                        
                           
                                    </select> 
                                </div>
                              

                                <div class="form-group col-md-4 d-none  msomali">
                                    <label>Sub Clan</label>
                                    <select name="sub_clan"     value="{{ old('sub_clan') }}" class="form-control" id="SubClan">
                                        
                                        <option value=""></option>
                                          <?php foreach($subclan as $row):?>
                                                <option><?=$row->name?></option>
                                          <?php endforeach;?>


                                        
                                    </select> 
                                </div>
                                <div class="col-md-4">
                                <label>Mobile Number </label>
                                    <div class="form-group">
                                        
                                    <input type="tel"  class="form-control"  name="mobile_number"   placeholder="Mobile Number">
                                        
                                    </div>
                                </div>
                               
                              
                                
                                <div class="col-md-4">
                                <label>Contact Address</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ old('contact_address') }}" name="contact_address" placeholder="Contact Address">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <label>Email Address</label>
                                <div class="form-group">
                                        <input type="email" class="form-control" value="{{ old('email_address') }}" name="email_address" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                        <label>Living with DISABILITY</label><br>
                                        <label><input type="radio" class="form-control radio-inline" name="disability" value="YES"> YES</label>
                                            <label style="margin-left:12%;"><input type="radio" class="form-control radio-inline" name="disability" value="NO"> NO</label>
                                    <div class="YES box  pwd d-none">
                                        <label>IF YES Nature of Disability </label>
                                            <div class="form-group">
                                                <textarea placeholder='Nature of disability' id="description" class="form-control" name="nature_of_disability" cols="40" rows="6"></textarea>
                                        
                                            </div>
                                    </div>                         
                                        
                
                                
                                </div>
                 
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
                                    <div class="form-group">
                                    
                                    <!-- <select name="academic_qualification"     value="{{ old('academic_qualification') }}" class="form-control" > -->
                                        
                                    <!-- <option value=""></option>
                                        <option value="MASTERS">MASTERS</option>
                                        <option value="BACHELORS">BACHELORS</option>
                                        <option value="DIPLOMA">DIPLOMA</option>
                                        <option value="CERTIFICATE">CERTIFICATE</option>
                                        <option value="KCSE">KCSE</option>
                                        <option value="KCPE">KCPE</option>
                                        <option value="MADRASSA">MADRASSA</option>
                                        <option value="NOT SCHOOLED">NOT SCHOOLED</option> -->
                                        <select name="academic_qualification"   value="{{ old('academic_qualification') }}"   class="form-control">
                                        <option value=""></option>
                                          <?php foreach($academics as $row):?>
                                                <option><?=$row->name?></option>
                                          <?php endforeach;?>
                                        
                                    </select> 


                                        
                                    </select> 
                                        <!-- <input type="text" class="form-control"  value="{{ old('academic_qualification') }}"  name="academic_qualification" placeholder="Academic Qualification"> -->
                                    </div>
                                </div>
                              
                                <div class="col-md-4">
                                  <label>Area of Specialization</label>
                                    <div class="form-group">
                                    <input style="text-transform: uppercase;" placeholder="area of specialization station " class="form-control"value="{{ old('area_of_specialization') }}" type="text" name="area_of_specialization">
                                        <!-- <input type="text" class="form-control" value="{{ old('area_of_specialization') }}" name="area_of_specialization" placeholder="Area of Specialization"> -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <label>Professional  Qualification</label>
                                    <div class="form-group">
                                    <input style="text-transform: uppercase;" placeholder="professional qualification " class="form-control"value="{{ old('professional_qualification') }}" type="text" name="professional_qualification">
                                        <!-- <input type="text" class="form-control" value="{{ old('professional_qualification') }}" name="professional_qualification" placeholder="Professional  Qualification"> -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <label>Registration No.</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ old('registration_no') }}" name="registration_no" placeholder="Registration No. ">
                                    </div>
                                </div>

                           


                                <div class="col-md-4">
                               
                                    <div class="form-group">
                                        <!-- <input type="textarea" class="form-control" value="{{ old('training_need') }}" name="training_need" placeholder="Training Need"> -->
                                       
                                        <label>What Kind of training Do you need?  </label>
                                            
                                            <textarea placeholder='Training Need' id="training_need" class="form-control" name="training_need" cols=40" rows="6"></textarea>
                                            
                                            <br><br>
                                           
                                       
                                    </div>
                                </div>
                                <br><br><br>
                             
                               
                            </div>
                            <div class="col-md-4">
                                    <label>Are you rightly placed in your area of specialization?  </label><BR><BR>
                                            <label style="margin-left:12%;"><input type="radio" class="form-control radio-inline" name="placement" value="YES"> YES</label>
                                                <label style="margin-left:12%;"><input type="radio" class="form-control radio-inline" name="placement" value="NO"> NO</label>
                                        <div class="YES box isCivilServant d-none">
                                        <label>if NO give reason</label>
                                                <div class="form-group">
                                                    <textarea placeholder='if NO give reason' id="if_no_placement_reason" class="form-control" name="if_no_placement_reason" cols="40" rows="6"></textarea>
                                            
                                                </div>
                                        </div>                         
                                        
                
                                
                                </div>

                                <div class="col-md-4">
                                    <label>Have you gone for study leave for more than 6 months?  </label><br>
                                            <label><input type="radio" class="form-control radio-inline" name="study_leave" value="YES"> YES</label>
                                            <label style="margin-left:12%;"><input type="radio" class="form-control radio-inline" name="study_leave" value="NO"> NO</label>
                                        <div class="YES box isCivilServantBefore d-none">
                                     
                                                <div class="form-group">
                                                    <textarea placeholder='If yes ,when and which course' id="study_leave_details" class="form-control" name="study_leave_details" cols="40" rows="6"></textarea>
                                            
                                                </div>
                                        </div>                         
                                        
                
                                
                                </div>
                             
                                </div>
                                
                        
                   

                                   
    
                             
                                
                               
                          </div>  <hr><hr>
                        </div>
                            <div class="form-group" class="col-12 col-md-12 col-lg-12">
                              <button class="btn btn-success " >SECTION C.</button>
                              <button class="btn btn-success " >VALUES AND PRINCIPLE OF PUBLIC SERVICE</button>
                                                                   
                        </div>
                        <hr>
                            <div class="row clearfix">
                           

                                <div class="form-group col-md-4">
                                    <label>Have you been trained on Values and Principles of Governance ?   </label>
                                    <p>Please select  :</p>
                                        <input type="radio" id="principle_of_governance" name="principle_of_governance" value="YES">
                                        <label for="YES">YES</label><br>
                                        <input type="radio" id="principle_of_governance" name="principle_of_governance" value="NO">
                                        <label for="NO">NO</label><br>
                                       
                                      
                                    
                                </div>
                              
                               
                               

                                <div class="form-group col-md-4">
                                    <label>Are you conversant with code of conduct,Human resource Manual & Work Ethics?   </label>
                                    <p>Please select  :</p>
                                        <input type="radio" id="code" name="code" value="YES">
                                        <label for="YES">YES</label><br>


                                        <input type="radio" id="code" name="code" value="NO">
                                        <label for="NO">NO</label><br>
                                       
                                      
                                    
                                </div>
                                <!-- <div class="col-md-4">
                                   
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ old('comment') }}" name="comment" placeholder="Any other Comment. ">
                                    </div>
                                </div> -->
                                <div class="col-md-4">
                               
                               <div class="form-group">
                                   <!-- <input type="text" class="form-control" value="{{ old('remarks') }}" name="remarks" placeholder="remarks. "> -->
                                   <label>Any other Comment.</label>
                                       <!-- <textarea  name="comment" rows="1" class="form-control" value="{{ old('comment') }}" name="comment" placeholder="comment. " cols="30"> -->
                                       <textarea placeholder='Comment' id="comment" class="form-control" value="{{ old('comment') }}" name="comment" cols=40" rows="6"></textarea>
                                       </textarea>
                               </div>
                           </div>
                               
                                
                                <hr>
                                <div class="col-md-4">
                               
                                    <div class="form-group">
                                        <!-- <input type="text" class="form-control" value="{{ old('remarks') }}" name="remarks" placeholder="remarks. "> -->
                                        <label>Remarks.</label>
                                            <!-- <textarea  name="remarks" rows="1" class="form-control" value="{{ old('remarks') }}" name="remarks" placeholder="remarks. " cols="30"> -->
                                            <textarea placeholder='Remarks' id="remarks" class="form-control" value="{{ old('remarks') }}" name="remarks" cols=40" rows="6"></textarea>
                                            
                                    </div>
                                </div>
                            
                                <div class="col-md-3">
                                <label>Date of Audit </label>
                                    <div class="form-group">
                                        <input type="date" class="form-control" value="{{ old('date_of_audit') }}" name="date_of_audit" placeholder="Date of Audit. ">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Approved by</label>
                                    <select name="approved_by"     value="{{ old('approved_by') }}" class="form-control">
                                        <option value=""></option>
                                        <option value="CHAIRPERSON">CHAIRPERSON-ETHILLAH</option>
                                        <option value="CEO">CEO-SECRETARY</option>
                                        <option value="COMMISSIONER-JAMA">COMMISSIONER-JAMA</option>
                                        <option value="COMMISSIONER-HASSAN">COMMISSIONER-HASSAN</option>
                                        <option value="COMMISSIONER-DAKANE">COMMISSIONER-DAKANE</option>
                                        <option value="COMMISSIONER-HALIMA">COMMISSIONER-HALIMA</option>
                                        <option value="COMMISSIONER-NASRA">COMMISSIONER-NASRA</option>
                                        <option value="DIRECTOR-HASSAN">DIRECTOR-HASSAN</option>


                                        
                                    </select> 
                                </div>
                               

                                <div class="col-md-4">
                                <label>Date Captured  </label>
                                    <div class="form-group">
                                        <input type="text" readonly    value="{{Carbon\Carbon::now() }}" class="form-control "name="date_captured" placeholder="Date Captured. ">
                                    </div>
                                    
                                </div>
                               
                                <div class="col-md-4 col-mr-4">
                                <label>Captured by </label>
                                    <div class="form-group" class="disabled" >
                                        <input type="text" readonly  class="form-control"  name="captured_by"  value="{{ Auth::user()->name}}" placeholder="Captured by ">
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
                 
             
                  </div>
                

                
                  <div class="card-footer text-right">
                    <button class="btn btn-success " type="submit">Save</button>
                    
                  </div>
                  </div>
                  
                
              
           
              
            </div>
          </div>
          </form>
</section>
<script>
                $(document).ready(function () {
                $('#sub_category_name').on('change', function () {
                let id = $(this).val();
                $('#sub_category').empty();
                $('#sub_category').append(`<option value="0" disabled selected>Processing...</option>`);
                $.ajax({
                type: 'GET',
                url: 'GetSubCatAgainstMainCatEdit/' + id,
                success: function (response) {
                var response = JSON.parse(response);
                console.log(response);   
                $('#sub_category').empty();
                $('#sub_category').append(`<option value="0" disabled selected>Select Sub Category*</option>`);
                response.forEach(element => {
                    $('#sub_category').append(`<option value="${element['id']}">${element['name']}</option>`);
                    });
                }
            });
        });
    });
    </script>
       


@endsection
@push('scripts')

<script type="text/javascript">
    
   $("#HCounty").on("change",function(e){
    e.preventDefault();
    var county=$(this).val();
       if(county.length>0)
       {
           var url="<?=url('/admin/County/GetSubcounties')?>";
              $.get(url,{'County':county},function(data){
                
                 $("#SubCounty").html(data);

              })
       }

       

   });



     $("#Clan").on("change",function(e){
    e.preventDefault();
    var county=$(this).val();
       if(county.length>0)
       {
           var url="<?=url('/admin/Clan/GetSubClan')?>";
              $.get(url,{'Clan':county},function(data){
                
                 $("#SubClan").html(data);

              })
       }

       

   });






    $("#Tribe").on("click",function(e){
        e.preventDefault();
           var value=$(this).val();
            if(value=="SOMALI")
            {
                $(".msomali").removeClass("d-none");

            }else{
                 $(".msomali").addClass("d-none");


            }

    });

</script>
<script type="text/javascript">
    

      $("body").on('click',".radio-inline",function(){
              var them=($("input[name=study_leave]:checked").val());
                 
              if(them=="YES"){
                 $(".isCivilServantBefore").removeClass("d-none");
                  }else{
                     $(".isCivilServantBefore").addClass("d-none");
                      }
            });
       $("body").on('click',".radio-inline",function(){
              var them=($("input[name=placement]:checked").val());
                     
              if(them=="NO"){
                 $(".isCivilServant").removeClass("d-none");
                  }else{
                     $(".isCivilServant").addClass("d-none");
                      }
            });

        $("body").on('click',".radio-inline",function(){
              var them=($("input[name=disability]:checked").val());
                    
              if(them=="YES"){
                 $(".pwd").removeClass("d-none");
                  }else{
                     $(".pwd").addClass("d-none");
                      }
            });

</script>



@endpush