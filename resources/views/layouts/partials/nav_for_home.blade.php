 <!-- Navbar & Carousel Start -->
 <div class="container-fluid position-relative p-0">
     <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
         <a href="{{ route('home') }}" class="navbar-brand p-0">
             <h1 class="m-0">
                 <img src="{{ asset('logo-small.png') }}" width="50" height="50" alt="" srcset="">Startup
             </h1>
             {{-- <img src="{{ asset('logo-big.png') }}" alt="logo" width="50%" height="200" srcset=""> --}}
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
             <span class="fa fa-bars"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
             <div class="navbar-nav ms-auto py-0">
                 <a href="/" class="nav-item nav-link">Home</a>
                 <a href="/pages/abouts" class="nav-item nav-link">About</a>
                 <a href="/pages/blogs" class="nav-item nav-link">Events</a>
                 <a href="/pages/contact" class="nav-item nav-link">Contact</a>
             </div>
             {{-- <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal">
                 <i class="fa fa-search"></i>
             </butaton> --}}
             @auth()
                 <form action="{{ route('logout') }}" method="post">
                     @csrf

                     <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();"
                         class="btn btn-primary py-2 px-4 ms-3">Logout</a>
                 </form>
             @else
                 <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 ms-3">Login / Register</a>
             @endauth()

         </div>
     </nav>

     <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
         <div class="carousel-inner">
             <div class="carousel-item active">
                 <img class="w-100" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="Image">
                 <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                     <div class="p-3" style="max-width: 900px;">
                         <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                         <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & Innovative Digital Solution
                         </h1>
                         <a href="/pages/abouts" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">About
                             Us</a>
                         <a href="/pages/contact"
                             class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                     </div>
                 </div>
             </div>
             <div class="carousel-item">
                 <img class="w-100" src="{{ asset('assets/img/carousel-2.jpg') }}" alt="Image">
                 <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                     <div class="p-3" style="max-width: 900px;">
                         <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                         <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & Innovative Digital Solution
                         </h1>
                         <a href="/pages/abouts" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">About
                             Us</a>
                         <a href="/pages/contact"
                             class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                     </div>
                 </div>
             </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
         </button>
     </div>
 </div>
 <!-- Navbar & Carousel End -->
