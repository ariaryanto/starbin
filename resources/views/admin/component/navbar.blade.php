         <div class="position-relative iq-banner">
             <!--Nav Start-->
             <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
                 <div class="container-fluid navbar-inner">
                     <a href="#" class="navbar-brand">
                         <!--Logo start-->

                         <!--logo End-->
                     </a>
                     <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                         <i class="icon">
                             <svg width="20px" height="20px" viewBox="0 0 24 24">
                                 <path fill="currentColor"
                                     d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                             </svg>
                         </i>
                     </div>
                     <div class="input-group search-input">
                     </div>
                     <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                         data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                         aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon">
                             <span class="mt-2 navbar-toggler-bar bar1"></span>
                             <span class="navbar-toggler-bar bar2"></span>
                             <span class="navbar-toggler-bar bar3"></span>
                         </span>
                     </button>
                     <div class="navbar-collapse collapse" id="navbarSupportedContent">
                         <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0">
                             <li class="nav-item dropdown">
                                 <a class="py-0 nav-link d-flex align-items-center" href="#" id="navbarDropdown"
                                     role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                     <img src="/images/{{Auth::user()->image}}" alt="User-Profile"
                                         class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded">
                                     <div class="caption ms-3 d-none d-md-block ">
                                         <h6 class="mb-0 caption-title">{{Auth::user()->name}}</h6>
                                         <p class="mb-0 caption-sub-title">{{Auth::user()->role}}</p>
                                     </div>
                                 </a>
                                 <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                     <li><a class="dropdown-item" href="{{route('admin-profile')}}">Profile</a>
                                     </li>
                                     <li>
                                         <hr class="dropdown-divider">
                                     </li>
                                     <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                         data-bs-target="#exampleModal">
                                         Logout
                                     </button>
                                 </ul>
                             </li>
                         </ul>
                     </div>
                 </div>
             </nav>
             <!-- Nav Header Component Start -->
             <div class="iq-navbar-header" style="height: 215px;">
                 <div class="container-fluid iq-container">
                     <div class="row">
                         <div class="col-md-12">
                             <div class="flex-wrap d-flex justify-content-between align-items-center">
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="iq-header-img">
                     <img src="../assets/images/dashboard/top-header.png" alt="header"
                         class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
                     <img src="../assets/images/dashboard/top-header1.png" alt="header"
                         class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX">
                     <img src="../assets/images/dashboard/top-header2.png" alt="header"
                         class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX">
                     <img src="../assets/images/dashboard/top-header3.png" alt="header"
                         class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX">
                     <img src="../assets/images/dashboard/top-header4.png" alt="header"
                         class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX">
                     <img src="../assets/images/dashboard/top-header5.png" alt="header"
                         class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX">
                 </div>
             </div>
             <!-- Nav Header Component End -->
             <!--Nav End-->
         </div>
         <!-- Modal -->
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar?</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                         <a href="{{route('admin-logout')}}">
                             <button type="button" class="btn btn-primary">Logout</button>
                         </a>
                     </div>
                 </div>
             </div>
         </div>