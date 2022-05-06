 <!-- Navbar & Carousel Start -->
 <div class="container-fluid position-relative p-0">
     <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
         <a href="index.html" class="navbar-brand p-0">
             <h1 class="text-primary m-0">
                 {{-- <i class="fa fa-user-tie me-2"></i> --}}
                 <img src="{{ asset('logo-small.png') }}" width="50" height="50" alt="" srcset="">
                 Starts<strong style="color: #f9c124;">up</strong>
             </h1>
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
             <span class="fa fa-bars"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
             <div class="navbar-nav ms-auto py-0">
                 <a href="/" class="text-dark nav-item nav-link">Home</a>
                 <a href="/pages/abouts" class="text-dark nav-item nav-link">About</a>
                 <a href="/pages/blogs" class="text-dark nav-item nav-link">Events</a>
                 <a href="/pages/contact" class="text-dark nav-item nav-link">Contact</a>
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
 </div>

 <div style="margin-top: 50px;"></div>
 <!-- Navbar & Carousel End -->
