@extends('layouts.master')
@section('title','users');
@section('content')
<div class="modal fade" id="EDIT" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD NEW JOB </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <div class="modal-body">
      <form action="{{url('/addjob')}}" method="POST">
          <div class="modal-body">
            {{ csrf_field() }}
                   <div class="form-group">
                      <label for="recipient-name" valu="{{ Auth::user()->name}}" class="col-form-label">Position Name</label>
                      <input type="text" name="position"class="form-control" value="{{old('position[]')}}"  required >
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Number of post:</label>
                      <input type="text" name="no_of_posts"class="form-control"required value="{{old('no_of_posts[]')}}" >
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Department:</label>
                      <input type="text" name="department"class="form-control" required value="{{old('department[]')}}" >
                    </div>
                    <div class="col-lg-14 col-md-12">
                                    <p> <b>Job Group</b> </p>
                                    <select class="form-control show-tick ms select2" name="job_group" data-placeholder="Select" value="{{old('job_group[]')}}" required>
                                        <option></option>
                                        <option>J</option>
                                        <option>K</option>
                                        <option>L</option>
                                    </select>
                                </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Posting Date :</label>
                      <input type="date" name="posting_date"class="form-control" value="{{old('posting_date[]')}}" required >
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Closing Date :</label>
                      <input type="date" name="closing_date" class="form-control"  value="{{old('closing_date[]')}}" required >
                    </div>

                    
                    </div>
                   
                                    
                    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit"  class="btn btn-success">Add</button>
      </div>
                              
         
      </form>
      </div>
     
    </div>
  </div>
</div>

<div class="modal fade" id="useredit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Add New user</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{ route('register') }}">
                        @csrf

        {{ csrf_field() }}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" name="name"class="form-control" required >
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Email:</label>
            <input type="text" name="email"class="form-control" required >
          </div>
          <div class="form-group">
                      <label>Branch  </label>
                    <select name="branch"  style="height: 49px;" required  class="form-control">
                          <option value=""></option>
                          <option value="Athiriver">Athiriver</option>
                          <option value="Isinya">Isinya</option>
                          <option value="Juja">Juja</option>
                     </select> 
                   </div>

                   <div class="form-group">
                      <label>Password  </label>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                   </div>
                   <div class="form-group">
                      <label>Confirm Password  </label>
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                   </div>

                   

          <div class="form-group">
                      <label>Assign Role </label>
                    <select name="usertype"  style="height: 49px;"  class="form-control">
                          <option value=""></option>
                          <option value="admin">Admin</option>
                          <option value="manager">Manager</option>
                          <option value="driver">Driver</option>
                     </select> 
                   </div>

                   
        </form>
      </div>
      <div class="modal-footer">
        
        <button type="submit" class="btn btn-warning">Register</button>
        <a href="/myapp/users" class="btn btn-info">Cancel</a>
      </div>
    </div>
  </div>
</div>

      <!-- Main Content -->
   
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Users Management</h4>
           
                  </div>
                  <div class="card-body mt-3">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                          <th>User id</th>
                      <th>
                        Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                      User Role
                      </th>
                      
                      <th>
                        Action
                      </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $row)
                      <tr>
                          <td>MCPSB-USERID-000{{ $row->id }} </td>
                         <td>{{ $row->name }} </td>
                          <td>{{ $row->email }} </td>
                             <td>{{ $row->role }} </td>
                       
                        <!-- <td>
                        <a href="/admin.user-edit/{{ $row->id }}" class= "btn btn btn-success">Edit</a>
                        </td> -->
                        <td>
                       
                       <a href="user-edit/{{ $row->id }}" id="EDIT" class= "btn btn btn-primary"</a>
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
