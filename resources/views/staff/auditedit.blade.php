@extends('layouts.staffmaster')
@section('title','Edit Audit Record');
@section('content')
   
             <div class="section-body">
             <div class="row">
                
                  <div class="card">
                
                    <button class="btn btn-success " ><h4>STAFF AUDIT TOOL,OCTOBER 2020 </h4></button>
                    <button class="btn btn-success " ><h4>EDIT AUDIT FORM </h4></button>
                 <img height="184" width="100%" alt="image" src="{{ asset('assets/img/mcpsblogo.png')}}"> 
                  <div class="card-header">

                       
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
                        
                   <div class="col" >
                   <hr> <button class="btn btn-success ">AUDIT FORM</button><hr>
                          <div class="form-group" class="col-24 col-md-12 col-lg-12">
                              <button class="btn btn-success " >SECTION A.</button>
                              <button class="btn btn-success " >PERSONAL DETAILS</button>
                              
                                   
                        </div>
                        <form action="/staff/auditupdate/{{ $audit->id}}" method="POST">
                            @csrf

                        <hr>
                            <div class="row clearfix">
                                <div class="col-md-4">
                                <label>Employee Name</label>
                                    <div class="form-group">
                                        <input type="text" value="{{ $audit->employee_name}}"   value="{{ old('employee_name') }}" class="form-control" name="employee_name" placeholder="Employee Name">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Gender  </label>
                                    <p>Please select  gender:</p>
                                        <input type="radio" id="male" name="gender" value="male">
                                        <label for="MALE">MALE</label><br>
                                        <input type="radio" id="FEMALE" name="gender" value="female">
                                        <label for="female">FEMALE</label><br>
                                       
                                      
                                    
                                </div>
                                <div class="col-md-2">
                                  <label>Date of Birth</label>
                                    <div class="form-group" >
                                        <input type="date" value="{{ $audit->date_of_birth}}"  value="{{ old('date_of_birth') }}" class="form-control" name="date_of_birth" placeholder="col-md-4">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <label>Employee Personal Number</label>
                                    <div class="form-group">
                                        <input type="text" value="{{ $audit->employee_personal_no}}" class="form-control" value="{{ old('employee_personal_no') }}" name="employee_personal_no" placeholder="Employee Personal Number">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <label>ID/PASSPORT No.</label>
                                    <div class="form-group">
                                        <input type="text" value="{{ $audit->id_no}}" class="form-control"  value="{{ old('id_no') }}" name="id_no" placeholder="ID/PASSPORT ">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Disability  </label>
                                    <p>Please select  :</p>
                                        <input type="radio" id="disability" name="disability" value="YES">
                                        <label for="YES">YES</label><br>
                                        <input type="radio" id="NO" name="disability" value="NO">
                                        <label for="NO">NO</label><br>
                                       
                                      
                                    
                                </div>
                                
                                <div class="col-md-4">
                                <label>Nature of Disability </label>
                                    <div class="form-group">
                                        <input type="textarea" value="{{ $audit->nature_of_disability}}" class="form-control"  value="{{ old('nature_of_disability') }}" name="nature_of_disability" placeholder="if yes Nature of Disability">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <label>First Designation </label>
                                    <div class="form-group">
                                        <input type="text"  value="{{ $audit->first_designation}}" class="form-control" value="{{ old('first_designation') }}" name="first_designation"placeholder="First Designation ">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <label>Current Designation </label>
                                    <div class="form-group">
                                        <input type="text" value="{{ $audit->current_designation}}" class="form-control" value="{{ old('current_designation') }}" name="current_designation"placeholder="Current Designation ">
                                    </div>
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <label>Terms OF Service  </label>
                                    <select name="terms_of_service"  value="{{ $audit->terms_of_service}}"  value="{{ old('terms_of_service') }}"   class="form-control">
                                        <option value=""></option>
                                        <option value="Permanent and Pensionable">Permanent and Pensionable</option>
                                        <option value="Contract">Contract</option>
                                        <option value="intern">Intern </option>
                                        <option value="Casual">Casual</option>
                                        
                                    </select> 
                                </div>
                                <div class="col-md-4">
                                <label>Duty Station  </label>
                                    <div class="form-group">
                                        <input type="text" value="{{ $audit->duty_station}}" class="form-control" value="{{ old('duty_station') }}"  name="duty_station" placeholder="Duty Station">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                <label>Date of First Appointment  </label>
                                    <div class="form-group">
                                        <input type="date" class="form-control" value="{{ $audit->date_of_first_appointment}}" value="{{ old('duty_sdate_of_first_appointmenttation') }}"   name="date_of_first_appointment" placeholder="Date of First Appointment">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                <label>Date of Current Appointment  </label>
                                    <div class="form-group  ">
                                        <input type="date" class="form-control"  value="{{ $audit->date_of_current_appointment}}"  value="{{ old('date_of_current_appointment') }}" name="date_of_current_appointment" placeholder="Date of Current Appointment">
                                    </div>
                                </div>
                                <div class="form-group col-md-2 ">
                                    <label>First Job Group  </label>
                                    <select name="first_job_group" value="{{ $audit->first_job_group}}"  value="{{ old('first_job_group') }}"    class="form-control">
                                        <option value=""></option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C </option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                        <option value="F">F</option>
                                        <option value="G">G</option>
                                        <option value="H">H </option>
                                        <option value="J">J</option>
                                        <option value="K">K</option>
                                        <option value="L">L</option>
                                        <option value="M">M</option>
                                        <option value="N">N </option>
                                        <option value="P">P</option>
                                        <option value="Q">Q</option>
                                        <option value="R">R</option>
                                        
                                        
                                    </select> 
                                </div>
                               
                              
                                <div class="form-group">
                                    <label>Current  Job Group  </label>
                                    <select name="current_job_group"  value="{{ $audit->current_job_group}}"  value="{{ old('current_job_group') }}"  class="form-control">
                                        <option value=""></option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C </option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                        <option value="F">F</option>
                                        <option value="G">G</option>
                                        <option value="H">H </option>
                                        <option value="J">J</option>
                                        <option value="K">K</option>
                                        <option value="L">L</option>
                                        <option value="M">M</option>
                                        <option value="N">N </option>
                                        <option value="P">P</option>
                                        <option value="Q">Q</option>
                                        <option value="R">R</option>
                                        
                                        
                                    </select> 
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Department</label>
                                    <select name="department" value="{{ $audit->department}}"  value="{{ old('department') }}" class="form-control">
                                        <option></option>
                                        <option value="Health">HEALTH</option>
                                        <option value="WATER,ENVIRONMENT AND SANITATION">WATER,ENVIRONMENT AND SANITATION</option>
                                        <option value="ROADS &PUBLIC WORKS">ROADS &PUBLIC WORKS </option>
                                        <option value="LAND HOUSING AND URBAN PLANNING">LAND HOUSING AND URBAN PLANNING</option>
                                        <option value="PUBLIC SERVICE ,COHESION INTEGRATION AND DEVOLVEDUNIT">PUBLIC SERVICE ,COHESION INTEGRATION AND DEVOLVEDUNIT</option>
                                        <option value="AGRICULTURE,LIVESTOCK AND FISHERIES">AGRICULTURE,LIVESTOCK AND FISHERIES</option>
                                        <option value="EDUCATION ,CULTURE AND SPORTS">EDUCATION ,CULTURE AND SPORTS</option>
                                        <option value="FINANCE,ECONOMIC PLANNING & ICT">FINANCE,ECONOMIC PLANNING & ICT</option>
                                        <option value="TRADE &INDUSTRILISATION">TRADE &INDUSTRILISATION</option>
                                        <option value="GENDER AND SOCIAL SERVICES">GENDER AND SOCIAL SERVICES</option>
                                       
                                        
                                        
                                    </select> 
                                </div>
                                <div class="col-md-4">
                                <label>Section  </label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ $audit->section}}" value="{{ old('section') }}" name="section"placeholder="Section">
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Home County</label>
                                    <select name="home_county" value="{{ $audit->home_county}}" value="{{ old('home_county') }}"    class="form-control">
                                        <option value=""></option>
                                        <option value="baringo">Baringo</option>
                                        <option value="bomet">Bomet</option>
                                        <option value="bungoma">Bungoma</option>
                                        <option value="busia">Busia</option>
                                        <option value="elgeyo marakwet">Elgeyo Marakwet</option>
                                        <option value="embu">Embu</option>
                                        <option value="garissa">Garissa</option>
                                        <option value="homa bay">Homa Bay</option>
                                        <option value="isiolo">Isiolo</option>
                                        <option value="kajiado">Kajiado</option>
                                        <option value="kakamega">Kakamega</option>
                                        <option value="kericho">Kericho</option>
                                        <option value="kiambu">Kiambu</option>
                                        <option value="kilifi">Kilifi</option>
                                        <option value="kirinyaga">Kirinyaga</option>
                                        <option value="kisii">Kisii</option>
                                        <option value="kisumu">Kisumu</option>
                                        <option value="kitui">Kitui</option>
                                        <option value="kwale">Kwale</option>
                                        <option value="laikipia">Laikipia</option>
                                        <option value="lamu">Lamu</option>
                                        <option value="machakos">Machakos</option>
                                        <option value="makueni">Makueni</option>
                                        <option value="mandera">Mandera</option>
                                        <option value="meru">Meru</option>
                                        <option value="migori">Migori</option>
                                        <option value="marsabit">Marsabit</option>
                                        <option value="mombasa">Mombasa</option>
                                        <option value="muranga">Muranga</option>
                                        <option value="nairobi">Nairobi</option>
                                        <option value="nakuru">Nakuru</option>
                                        <option value="nandi">Nandi</option>
                                        <option value="narok">Narok</option>
                                        <option value="nyamira">Nyamira</option>
                                        <option value="nyandarua">Nyandarua</option>
                                        <option value="nyeri">Nyeri</option>
                                        <option value="samburu">Samburu</option>
                                        <option value="siaya">Siaya</option>
                                        <option value="taita taveta">Taita Taveta</option>
                                        <option value="tana river">Tana River</option>
                                        <option value="tharaka nithi">Tharaka Nithi</option>
                                        <option value="trans nzoia">Trans Nzoia</option>
                                        <option value="turkana">Turkana</option>
                                        <option value="uasin gishu">Uasin Gishu</option>
                                        <option value="vihiga">Vihiga</option>
                                        <option value="wajir">Wajir</option>
                                        <option value="pokot">West Pokot</option>
                                        
                                        
                                    </select> 
                                </div>
                                <div class="col-md-4">
                                <label>Sub County  </label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ $audit->sub_county}}" value="{{ old('sub_county') }}" name="sub_county" placeholder="Sub county">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <label>Ethnicity  </label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ old('ethnicity') }}" name="ethnicity" placeholder="Ethnicity">
                                    </div>
                                </div>
                               

                                <div class="form-group col-md-4">
                                    <label>Clan</label>
                                    <select name="clan"     value="{{ old('clan') }}" class="form-control">
                                        <option value=""></option>
                                        <option value="GARREE">GARREE</option>
                                        <option value="DEGODIA">DEGODIA</option>
                                        <option value="MURULLE">MURULLE</option>
                                        <option value="CORNER TRIBE">CORNER TRIBE</option>
                                        <option value="OGADEN">OGADEN</option>
                                        <option value="AJURAN">AJURAN</option>
                                        <option value="MAREHAN">MAREHAN</option>
                                       


                                        
                                    </select> 
                                </div>
                              

                                <div class="form-group col-md-4">
                                    <label>Sub Clan</label>
                                    <select name="sub_clan"     value="{{ old('sub_clan') }}" class="form-control">
                                        <option value=""></option>
                                     
                                        <option value="SABDAWA">SABDAWA</option>
                                        <option value="KALULA">KALULA</option>
                                        <option value="TAULE">TAULE</option>
                                        <option value="KALWINA">KALWINA</option>
                                        <option value="RERMUG">RERMUG</option>
                                        <option value="KALMASA">KALMASA</option>
                                        <option value="MAQABILLE">MAQABILLE</option>

                                        <option value="OTHOMAI">OTHOMAI</option>
                                        <option value="MEDH">MEDH</option>
                                        <option value="BURSUNI">BURSUNI</option>
                                        <option value="TUBADI">TUBADI</option>
                                        <option value="KALWESHA">KALWESHA</option>
                                        <option value="DARAWA">DARAWA</option>
                                        <option value="OYTIRA">OYTIRA</option>

                                        <option value="OTHKOYA">OTHKOYA</option>
                                        <option value="BIRKAYA">BIRKAYA</option>
                                        <option value="URDEQ">URDEQ</option>
                                        <option value="SUGUB TURE">SUGUB TURE</option>
                                        <option value="KALWESHA">BANNA</option>
                                        <option value="DARAWA">KILIYA</option>
                                        <option value="OYTIRA">OYTIRA</option>
                                            //MURULLE
                                        <option value="YABARSEN">YABARSEN</option>
                                        <option value="SHARMAKE">SHARMAKE</option>
                                        <option value="KULOW">KULOW</option>
                                        <option value="NAABSOR">NAABSOR </option>
                                        <option value="DALOTIRA">DALOTIRA</option>
                                        //DEGODIA

                                        <option value="FARDANOW">FARDANOW</option>
                                        <option value="GELIBLE">GELIBLE</option>
                                        <option value="WALACJELE">WALACJELE</option>
                                        <option value="MASARE">MASARE </option>
                                        <option value="RAQAY">RAQAY</option>

                                        <option value="IDRIS">IDRIS</option>
                                        <option value="ABRISHE">ABRISHE</option>
                                        <option value="ABADWAQA">ABADWAQA</option>
                                        <option value="BEYDISLE">BEYDISLE </option>
                                        <option value="JIBRAIL">JIBRAIL</option>
                                       
                                        <option value="FAI">FAI</option>
                                        <option value="RER MAHMUD">RER MAHMUD</option>
                                        <option value="RER SAMATAR">RER SAMATAR</option>
                                        <option value="RER MAOW">RER MAOW </option>
                                        <option value="ADAN YARE">ADAN YARE</option>

                                        //corner tribe

                                        <option value="SHARMOGE">SHARMOGE</option>
                                        <option value="WARABE">WARABE</option>
                                        <option value="SHABELLE">SHABELLE</option>
                                        <option value="SHEKHAL">SHEKHAL </option>
                                        <option value="ISSACK">ISSACK</option>


                                        
                                    </select> 
                                </div>
                                <div class="col-md-4">
                                <label>Mobile Number </label>
                                    <div class="form-group">
                                        
                                    <input type="tel"  class="form-control" value="{{ old('mobile_number') }}" name="mobile_number"   placeholder="Mobile Number">
                                        
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
                                        <input type="text" class="form-control"  value="{{ old('academic_qualification') }}"  name="academic_qualification" placeholder="Academic Qualification">
                                    </div>
                                </div>
                              
                                <div class="col-md-4">
                                  <label>Area of Specialization</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ old('area_of_specialization') }}" name="area_of_specialization" placeholder="Area of Specialization">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <label>Professional  Qualification</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ old('professional_qualification') }}" name="professional_qualification" placeholder="Professional  Qualification">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <label>Registration No.</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ old('registration_no') }}" name="registration_no" placeholder="Registration No. ">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <label>What Kind of training Do you need?  </label>
                                    <div class="form-group">
                                        <input type="textarea" class="form-control" value="{{ old('training_need') }}" name="training_need" placeholder="Training Need">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Have you gone for study leave for more than 6 months?  </label>
                                    <p>Please select  :</p>
                                        <input type="radio" id="study_leave" name="study_leave" value="YES">
                                        <label for="YES">YES</label><br>
                                        <input type="radio" id="study_leave" name="study_leave" value="NO">
                                        <label for="NO">NO</label><br>
                                       
                                      
                                    
                                </div>
                                <div class="col-md-4">
                                    <label>If yes when and which course</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="{{ old('study_leave_details') }}" name="study_leave_details"  placeholder="If yes when and which course ">
                                        </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Are you rightly placed in your area of specialization?  </label>
                                    <p>Please select  :</p>
                                        <input type="radio" id="placement" name="placement" value="YES">
                                        <label for="YES">YES</label><br>
                                        <input type="radio" id="placement" name="placement" value="NO">
                                        <label for="NO">NO</label><br>
                                       
                                      
                                    
                                </div>
                                <div class="col-md-4">
                                <label>if No Give reason  </label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ old('if_no_placement_reason') }}" name="if_no_placement_reason" placeholder="if No Give reason ">
                                    </div>
                                </div>
                                
                               
                            </div><hr><hr>

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
                                <div class="col-md-4">
                                <label>Any other Comment.</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ old('comment') }}" name="comment" placeholder="Any other Comment. ">
                                    </div>
                                </div>
                               
                                
                                <hr>
                                <div class="col-md-4">
                                <label>Remarks.</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ old('remarks') }}" name="remarks" placeholder="remarks. ">
                                    </div>
                                </div>
                            
                                <div class="col-md-4">
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
                                        <input type="text"   value="{{ Carbon\Carbon::now() }}" class="form-control "name="date_captured" placeholder="Date Captured. ">
                                    </div>
                                    
                                </div>
                               
                                <div class="col-md-4 col-mr-4">
                                <label>Captured by </label>
                                    <div class="form-group" class="disabled" >
                                        <input type="text" class="form-control"  name="captured_by"  value="{{ Auth::user()->name}}" placeholder="Captured by ">
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
                    <button class="btn btn-success " type="submit">UPDATE</button>
                    <a href="{{route('admin.auditrecords')}}"><button class="btn btn-info">Back</button></a>
                  </div>
                  </div>
                  
                
              </div>
           
              
            </div>
          </div>
          </form>



          <script src="{{ asset('assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{ asset('assets/js/page/index.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{ asset('assets/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{ asset('assets/js/custom.js')}}"></script>


@stop