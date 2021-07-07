       <?php
        include('security.php');

        ?>
       <!-- Sidebar -->
       <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

           <!-- Sidebar - Brand -->
           <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
               <div class="sidebar-brand-icon ">
                   <img src="../img/logo.png" alt="logo">
               </div>
           </a>
           <!-- Divider -->
           <hr class="sidebar-divider my-0">

           <!-- Nav Item - Dashboard -->
           <li class="nav-item active">
               <a class="nav-link" href="index.php">
                   <i class="fas fa-fw fa-tachometer-alt"></i>
                   <span>School Dashboard</span></a>
           </li>



           <!-- Divider -->
           <hr class="sidebar-divider">

           <!-- Heading -->
           <div class="sidebar-heading">
               Interface
           </div>

           

           <li class="nav-item">
               <a class="nav-link" href="register.php">
                   <i class="fas fa-users"></i>
                   <span>Admin Profile</span>
           </li>

           <!-- Divider -->
           <hr class="sidebar-divider">

           <!-- Heading -->
           <div class="sidebar-heading">
               Addons
           </div>

           <!-- Nav Item - Pages Collapse Menu -->
           <li class="nav-item">
               <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                   <i class="fas fa-fw fa-folder"></i>
                   <span>Pages</span>
               </a>
               <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                   <div class="bg-white py-2 collapse-inner rounded">
                       <h6 class="collapse-header">Login Screens:</h6>
                       <a class="collapse-item" href="login.php">Login</a>
                       <a class="collapse-item" href="register.php">Register</a>
                       <div class="collapse-divider"></div>
                       <h6 class="collapse-header">Other Pages:</h6>
                       <a class="collapse-item" href="teacher.php">Teacher Page</a>
                       <a class="collapse-item" href="Advertisement.php">Advertisement Page</a>
                       <a class="collapse-item" href="news.php">New Page</a>
                       <a class="collapse-item" href="galleryschool.php">Gallery School Page</a>
                   </div>
               </div>
           </li>

          

         

           <!-- Divider -->
           <hr class="sidebar-divider d-none d-md-block">

           <!-- Sidebar Toggler (Sidebar) -->
           <div class="text-center d-none d-md-inline">
               <button class="rounded-circle border-0" id="sidebarToggle"></button>
           </div>



       </ul>
       <!-- End of Sidebar -->

       <!-- Content Wrapper -->
       <div id="content-wrapper" class="d-flex flex-column">

           <!-- Main Content -->
           <div id="content">

               <!-- Topbar -->
               <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                   <!-- Sidebar Toggle (Topbar) -->
                   <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                       <i class="fa fa-bars"></i>
                   </button>

                   <!-- Topbar Search -->
                   <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                       <div class="input-group">
                           <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                           <div class="input-group-append">
                               <button class="btn btn-success" type="button">
                                   <i class="fas fa-search fa-sm"></i>
                               </button>
                           </div>
                       </div>
                   </form>

                   <!-- Topbar Navbar -->
                   <ul class="navbar-nav ml-auto">

                       

                    
                      

                       <div class="topbar-divider d-none d-sm-block"></div>

                       <!-- Nav Item - User Information -->
                       <li class="nav-item dropdown no-arrow">
                           <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                   <?php echo $_SESSION['username']; ?>
                               </span>
                               <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                           </a>
                           <!-- Dropdown - User Information -->
                           <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                               <div class="dropdown-divider"></div>
                               <form action="code.php" method="POST" class="align-items-center ">
                                   <button type="submit" name="logout_btn" class=" btn btn-success   ">
                                   <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</button>
                               </form>
                           </div>
                       </li>

                   </ul>

               </nav>
               <!-- End of Topbar -->