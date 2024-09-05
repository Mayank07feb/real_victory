 <!-- Topbar Start -->
 <div class="container-fluid bg-dark py-2 d-none d-md-flex">
     <div class="container">
         <div class="d-flex justify-content-between topbar">
             <div class="top-info">
                 <small class="me-3 text-white"><a href="#"><i
                             class="fas fa-map-marker-alt me-2 text-white"></i></a>23 Ranking Street, New
                     York</small>
                 <small class="me-3 text-white"><a href="#"><i
                             class="fas fa-envelope me-2 text-white"></i></a>Email@Example.com</small>
             </div>
             <div id="note" class="text-white d-none d-xl-flex"><small>Note : We help you to Grow your
                     Business</small></div>
             <div class="top-link">
                 <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i
                         class="fab fa-facebook-f text-primary"></i></a>
                 <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i
                         class="fab fa-twitter text-primary"></i></a>
                 <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i
                         class="fab fa-instagram text-primary"></i></a>
                 <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle me-0"><i
                         class="fab fa-linkedin-in text-primary"></i></a>
             </div>
         </div>
     </div>
 </div>
 <!-- Topbar End -->

 <!-- Navbar Start -->
 <div class="container-fluid bg-primary">
     <div class="container">
         <nav class="navbar navbar-dark navbar-expand-lg py-0">
            <a href="{{ route('home') }}" class="navbar-brand">
                <img src="{{ asset('asset/img/logo.jpg') }}" alt="Real Victory Logo" class="logo-img" style="width: 200px; height: auto;">
            </a>                       
             <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                 data-bs-target="#navbarCollapse">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                 <div class="navbar-nav ms-auto mx-xl-auto p-0">
                     <a href="{{route('home')}}" class="nav-item nav-link active text-secondary">Home</a>
                     <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                     <a href="{{route('service')}}" class="nav-item nav-link">Services</a>
                     <a href="{{route('project')}}" class="nav-item nav-link">Projects</a>
                     <div class="nav-item dropdown">
                         <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                         <div class="dropdown-menu rounded">
                             <a href="{{route('blog')}}" class="dropdown-item">Our Blog</a>
                             <a href="{{route('team')}}" class="dropdown-item">Our Team</a>
                         </div>
                     </div>
                     <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                 </div>
             </div>
             <div class="d-none d-xl-flex flex-shirink-0">
                 <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                     <a href="" class="position-relative animated tada infinite">
                         <i class="fa fa-phone-alt text-white fa-2x"></i>
                         <div class="position-absolute" style="top: -7px; left: 20px;">
                             <span><i class="fa fa-comment-dots text-secondary"></i></span>
                         </div>
                     </a>
                 </div>
                 <div class="d-flex flex-column pe-4 border-end">
                     <span class="text-white">Have any questions?</span>
                     <span class="text-secondary">Call: + 0123 456 7890</span>
                 </div>
                 <div class="d-flex align-items-center justify-content-center ms-4 ">
                     <a href="#"><i class="bi bi-search text-white fa-2x"></i> </a>
                 </div>
             </div>
         </nav>
     </div>
 </div>
 <!-- Navbar End -->
