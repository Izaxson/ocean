<aside id="sidebar-wrapper">
          <div class="sidebar-brand" height="10">
           <!-- <a href="{{route('admin.dashboard')}}"> <img alt="image" src="{{ asset('assets/img/images.jpg' )}}" /> <span
                class="logo-name">  Audit Assista</span>-->
               
                
            </a>
          </div>
          <ul class="sidebar-menu">
          
            <li class="dropdown">
              <a href="{{route('staff.dashboard')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="users"></i><span>Audits</span></a>
              <ul class="dropdown-menu">
               <li><a class="nav-link" href="{{route('staff.auditform')}}">Add New Audit </a></li>
                <li><a class="nav-link" href="{{route('staff.auditrecords')}}">view  Audit Records </a></li>
                
               
              </ul>
            </li>
           <!-- <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="trending-up"></i><span>Reports</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="chat.html">view</a></li>
                
              </ul>
            </li>-->
            
           
         
         
          
          
        
          </ul>

        </aside>
 