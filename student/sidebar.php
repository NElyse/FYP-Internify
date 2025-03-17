 <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.php" class="text-nowrap logo-img">
         <h1 style="font-size: 26px;">INTERNIFY</h1>
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <?php

        $check=proj::check_stage($_SESSION['userid']);
        $check_data=mysqli_num_rows($check);
        if ($check_data !=0) {
         ?>

            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">E-Logo books</span>
            </li> 

            <li class="sidebar-item">
              <a class="sidebar-link" href="agreement" aria-expanded="false">
                <span>
                  <i class="ti ti-minus"></i>
                </span>
                <span class="hide-menu">IAP S.C Implemented</span>
              </a>
            </li>
             

             <li class="sidebar-item">
              <a class="sidebar-link" href="weeklyreport" aria-expanded="false">
                <span>
                  <i class="ti ti-minus"></i>
                </span>
                <span class="hide-menu">Weekly report sheet</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="students_self_assement" aria-expanded="false">
                <span>
                  <i class="ti ti-minus"></i>
                </span>
                <span class="hide-menu">Self-Assessment Sheet </span>
              </a>
            </li>
            <?php
            }
            else{
              ?>
              <li class="sidebar-item">
              <a class="sidebar-link" href="index" aria-expanded="false">
                <span>
                  <i class="ti ti-minus"></i>
                </span>
                <span class="hide-menu">No Internaship Applied</span>
              </a>
            </li>
            <?php
            }

             ?>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->