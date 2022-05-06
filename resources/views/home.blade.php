@extends('layouts.partials.app')

@section('content')
    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Intership pool</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Mentarship program</h5>
                            <h1 class="mb-0" data-toggle="counter-up">34</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Enterprenuer program</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">45</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <!-- About Start -->
    <div class="container-fluid py-5  data-wow-delay=" 0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">Creates opportunities to stimulates the economy for growth.</h1>
                    </div>
                    <p class="mb-4">The Startup Junior program aims at presenting a comprehensive vision for
                        integrating entrepreneurship
                        in the school system at different levels first in and Zanzibar then Mainland Tanzania and Africa at
                        large.</p>
                    <p class="mb-4">
                        Startup Junior was first launched on March 28, 2019 with the aim of associating students from both
                        public
                        and private schools to introduce entrepreneurship at the early age of 12 -18 years old in order to
                        spur and
                        ignite light-bulb moments towards sustainable economic development and social progress thus
                        contributing to poverty reduction caused by unemployment.
                    </p>

                    <a href="/pages/abouts" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Read
                        more</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="{{ asset('assets/img/about.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team End -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card..">
                    <div class="card-body">
                        <h1 class="card-title mb-5 ml-5" style="margin-left: 50px">StartUp - Junior Launch</h1>
                        <div class="hori-timeline" dir="ltr">
                            <ul class="list-inline events">
                                <li class="list-inline-item event-list">

                                    <div class="px-4 col-md-12">
                                        <div style="width: 150px; " class="event-date bg-soft-danger text-succes">April 2022
                                        </div>
                                        <h5 class="font-size-16">Event One</h5>
                                        <p class="text-muted">Follow the link below to register your school for upcoming
                                            events and offers
                                            <a href="#">Click here to register?</a>
                                        </p>
                                    </div>
                                </li>
                                <li class="list-inline-item event-list">
                                    <div class="px-4">
                                        <div style="width: 150px;" class="event-date bg-soft-success text-success">May 2022
                                        </div>
                                        <h5 class="font-size-16">Event Two</h5>
                                        <p class="text-muted">Light bulb moment interschool competation - throw those
                                            business ideas</p>
                                    </div>
                                </li>
                                <li class="list-inline-item event-list">
                                    <div class="px-4">
                                        <div style="width: 150px;" class="event-date bg-soft-danger text-danger">June 2022
                                        </div>
                                        <h5 class="font-size-16">Event Three</h5>
                                        <p class="text-muted">Selection process, let's screen those ideas, is yours in?
                                        </p>
                                    </div>
                                </li>
                                <li class="list-inline-item event-list">
                                    <div class="px-4">
                                        <div style="width: 150px;" class="event-date bg-soft-warning text-warning">Aug - Oct
                                            2022</div>
                                        <h5 class="font-size-16">Event Four</h5>
                                        <p class="text-muted">
                                            JS Bootcamp - great ideas needs refining! <br>
                                            {{-- The top 20 selected students shall enter a 15 days boot-camp. During the camp
                                            students shall have teachers and mentors and time to develop their startups for
                                            the final selection using a simple Business Canvas Model --}}
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <div style="margin-top: 50px;"></div>
            <div class="col-lg-12">
                <div class="card..">
                    <div class="card-body..">
                        <div class="hori-timeline" dir="ltr">
                            <ul class="list-inline events">

                                <li class="list-inline-item event-list">
                                    <div class="px-4">
                                        <div style="width: 150px;" class="event-date bg-soft-primary text-primary">November
                                            2022</div>
                                        <h5 class="font-size-16">Event Five</h5>
                                        <p class="text-muted">
                                            The finale is here! Pitch your idea Global Entrepreneurship Week Tanzania
                                        </p>
                                    </div>
                                </li>
                                <li class="list-inline-item event-list">
                                    <div class="px-4">
                                        <div style="width: 150px;" class="event-date bg-soft-success text-success">December
                                            2022</div>
                                        <h5 class="font-size-16">Event Five</h5>
                                        <p class="text-muted">
                                            You need to rest those brains, enjoy your Festive Season!
                                        </p>
                                    </div>
                                </li>

                                <li class="list-inline-item event-list">
                                    <div class="px-4">
                                        <div style="width: 150px;" class="event-date bg-soft-danger text-danger">Jan -
                                            Mar
                                            2023</div>
                                        <h5 class="font-size-16">Finale Event</h5>
                                        <p class="text-muted">
                                            it’s just you and your mentor – and us on the background
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>
        </div>
        <!-- Quote Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="section-title position-relative pb-3 mb-5">
                            <h5 class="fw-bold text-primary text-uppercase">Contact us</h5>
                            <h1 class="mb-0">Need A Free Quote? Please Feel Free to Contact Us</h1>
                        </div>
                        <div class="row gx-3">
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                                <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24
                                    hours
                                </h5>
                            </div>
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                                <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24 hrs telephone
                                    support</h5>
                            </div>
                        </div>
                        <p class="mb-4">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum.
                            Dolor
                            ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos
                            vero
                            ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore
                            sanctus sed et. Takimata takimata sanctus sed.</p>
                        <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="mb-2">Call to ask any question</h5>
                                <h4 class="text-primary mb-0">+(255) 743 000 000</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn"
                            data-wow-delay="0.9s">
                            <form method="POST" action="#">
                                <div class="row g-3">
                                    <div class="col-xl-12">
                                        <input type="text" class="form-control bg-light border-0" placeholder="Your Name"
                                            style="height: 55px;">
                                    </div>
                                    <div class="col-12">
                                        <input type="email" class="form-control bg-light border-0" placeholder="Your Email"
                                            style="height: 55px;">
                                    </div>
                                    <div class="col-12">
                                        <select class="form-select bg-light border-0" style="height: 55px;">
                                            <option selected>Select A Service</option>
                                            <option value="1">Service 1</option>
                                            <option value="2">Service 2</option>
                                            <option value="3">Service 3</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-dark w-100 py-3" type="submit">SUBMIT</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quote End -->

        <!-- Blog Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Latest Blog</h5>
                    <h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="{{ asset('assets/img/blog-1.jpg') }}" alt="">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                    href="">Events</a>
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>John
                                        Doe</small>
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                                </div>
                                <h4 class="mb-3">Innovation and Entrepreneurs Event</h4>
                                <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                                <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="{{ asset('assets/img/blog-2.jpg') }}" alt="">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                    href="">Events</a>
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>John
                                        Doe</small>
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                                </div>
                                <h4 class="mb-3">Innovation and Entrepreneurs Event</h4>
                                <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                                <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="{{ asset('assets/img/blog-3.jpg') }}" alt="">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                    href="">Events</a>
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="far fa-user text-primary me-2"></i>John
                                        Doe</small>
                                    <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                                </div>
                                <h4 class="mb-3">Innovation and Entrepreneurs Event</h4>
                                <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                                <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Blog Start -->


        <!-- Vendor Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 mb-5">
                <div class="bg-white">

                    <div class="owl-carousel vendor-carousel">
                        <img src="{{ asset('assets/img/vendor-1.jpg') }}" alt="partern1">
                        <img src="{{ asset('assets/img/vendor-2.jpg') }}" alt="">
                        <img src="{{ asset('assets/img/vendor-3.jpg') }}" alt="">
                        <img src="{{ asset('assets/img/vendor-4.jpg') }}" alt="">
                        <img src="{{ asset('assets/img/vendor-5.jpg') }}" alt="">
                        <img src="{{ asset('assets/img/vendor-6.jpg') }}" alt="">
                        <img src="{{ asset('assets/img/vendor-7.jpg') }}" alt="">
                        <img src="{{ asset('assets/img/vendor-8.jpg') }}" alt="">
                        <img src="{{ asset('assets/img/vendor-9.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Vendor End -->


        <!-- Footer Start -->
        @include('layouts.partials.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
        @include('assets.js')
    @endsection
