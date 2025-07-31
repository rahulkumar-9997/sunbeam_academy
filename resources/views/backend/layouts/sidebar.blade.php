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
                        <i class="ti ti-library-photo fs-16 me-2"></i>
                        <span>Manage Banner</span>
                        <span class="menu-arrow"></span>
                     </a>
                     <ul>
                        <li><a href="{{ route('manage-banner.index') }}">Banner</a></li>
                     </ul>
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
                        <i class="ti ti-note fs-16 me-2"></i>
                        <span>Manage Classes</span>
                        <span class="menu-arrow"></span>
                     </a>
                     <ul>
                        <li><a href="{{ route('manage-classes') }}">Classes</a></li>
                     </ul>
                  </li>

                  <li class="submenu">
                     <a href="javascript:void(0);">
                        <i class="ti ti-wallpaper fs-16 me-2"></i>
                        <span>Manage Blog</span>
                        <span class="menu-arrow"></span>
                     </a>
                     <ul>
                        <li><a href="{{ route('manage-blog.index') }}">Blog</a></li>
                     </ul>
                  </li>

                  <li class="submenu">
                     <a href="javascript:void(0);">
                        <i class="ti ti-brand-appgallery fs-16 me-2"></i>
                        <span>Manage Gallery</span>
                        <span class="menu-arrow"></span>
                     </a>
                     <ul>
                        <li><a href="{{ route('manage-album.index') }}">Album</a></li>
                        <li><a href="{{ route('manage-gallery.index') }}">Gallery</a></li>
                     </ul>
                  </li>

                  

               </ul>
            </li>
         </ul>
      </div>
   </div>
</div>
<!-- /Sidebar -->