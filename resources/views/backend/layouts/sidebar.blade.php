<!-- Sidebar -->
<div class="sidebar" id="sidebar">
   <!-- Logo -->
   <div class="sidebar-logo active">
      <a href="{{ route('dashboard') }}" class="logo logo-normal">
         <img src="{{asset('backend/assets/sunbeam-img/sunbeam.png')}}" alt="Img">
      </a>
      <a href="{{ route('dashboard') }}" class="logo logo-white">
         <img src="{{asset('backend/assets/sunbeam-img/sunbeam.png')}}" alt="Img">
      </a>
      <a href="{{ route('dashboard')}}" class="logo-small">
         <img src="{{asset('backend/assets/sunbeam-img/fav-icon.png')}}" alt="Img">
      </a>
      <!-- <a id="toggle_btn" href="javascript:void(0);">
         <i data-feather="chevrons-left" class="feather-16"></i>
      </a> -->
   </div>
   <!-- /Logo -->
   
   <div class="sidebar-header p-3 pb-0 pt-2">
      <div class="text-center rounded bg-light p-2 mb-4 sidebar-profile d-flex align-items-center">
         <div class="avatar avatar-md onlin">
            <img src="{{asset('backend/assets/img/customer/customer15.jpg')}}" alt="Img" class="img-fluid rounded-circle">
         </div>
         <div class="text-start sidebar-profile-info ms-2">
            <h6 class="fs-14 fw-bold mb-1">Adrian Herman</h6>
            <p class="fs-12">System Admin</p>
         </div>
      </div>
      <div class="d-flex align-items-center justify-content-between menu-item mb-3">
         <div>
            <a href="index.html" class="btn btn-sm btn-icon bg-light">
               <i class="ti ti-layout-grid-remove"></i>
            </a>
         </div>
         <div>
            <a href="chat.html" class="btn btn-sm btn-icon bg-light">
               <i class="ti ti-brand-hipchat"></i>
            </a>
         </div>
         <div>
            <a href="email.html" class="btn btn-sm btn-icon bg-light position-relative">
               <i class="ti ti-message"></i>
            </a>
         </div>
         <div class="notification-item">
            <a href="activities.html" class="btn btn-sm btn-icon bg-light position-relative">
               <i class="ti ti-bell"></i>
               <span class="notification-status-dot"></span>
            </a>
         </div>
         <div class="me-0">
            <a href="general-settings.html" class="btn btn-sm btn-icon bg-light">
               <i class="ti ti-settings"></i>
            </a>
         </div>
      </div>
   </div>
   <div class="sidebar-inner slimscroll">
      <div id="sidebar-menu" class="sidebar-menu">
         <ul>
            <li class="submenu-open">
               <ul>
                  <li class="active">
                     <a href="{{ route('dashboard') }}">
                        <i class="ti ti-layout-grid fs-16 me-2"></i>
                        <span>Dashboard</span>
                     </a>
                  </li>
                  <li class="submenu">
                     <a href="javascript:void(0);">
                        <i class="ti ti-brand-apple-arcade fs-16 me-2"></i>
                        <span>Manage Branches</span>
                        <span class="menu-arrow"></span>
                     </a>
                     <ul>
                        <li><a href="{{ route('branches') }}">Branches</a></li>
                     </ul>
                  </li>
                  <li class="submenu">
                     <a href="javascript:void(0);">
                        <i class="ti ti-files fs-16 me-2"></i>
                        <span>Notice Board</span>
                        <span class="menu-arrow"></span>
                     </a>
                     <ul>
                        <li><a href="{{ route('manage-notice-board') }}">Notice</a></li>
                     </ul>
                  </li>
                  <li class="submenu">
                     <a href="javascript:void(0);">
                        <i class="ti ti-files fs-16 me-2"></i>
                        <span>Manage Classes</span>
                        <span class="menu-arrow"></span>
                     </a>
                     <ul>
                        <li><a href="{{ route('manage-notice-board') }}">Notice</a></li>
                     </ul>
                  </li>

                  

               </ul>
            </li>
         </ul>
      </div>
   </div>
</div>
<!-- /Sidebar -->