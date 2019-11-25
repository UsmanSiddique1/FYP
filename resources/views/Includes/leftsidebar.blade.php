  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset('/dashboard')}}" class="brand-link">
      
      <span class="brand-text font-weight-light text-center"> HEC LAPTOP SCHEME</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
            
          </li>
         
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                HEC List
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('show_heclist')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show HEC_List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('show_issued_cniclist')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Issued CNIC by HEC</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Examination List
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('exam_show_bsbotany')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show Exam_list</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Eligible Students
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('show_eligiblelist')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>See Eligible List</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Approved Students
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('show_aprovedlist')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>See Approved List</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Selected Students
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('show_awardedlist')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>See Selected List</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Assigned Students
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('show_assigned_page')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>See Assigned List</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Items
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('show_laptop')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laptop</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('show_evo')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Evo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('show_bag')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bag</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">

          
            <a href="{{URL::to('show_user')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Show Users
               
                
              </p>
            </a>
          </li>
 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
