@extends('layouts.master')

@section('content')
<div class="container-fluid bg-primary py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white pr-3" href="{{url('/')}}">FAQs</a>
                    <span class="text-white">|</span>
                    <a class="text-white px-3" href="{{url('/')}}">Help</a>
                    <span class="text-white">|</span>
                    <a class="text-white pl-3" href="{{url('/')}}">Support</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-3" href="{{url('/')}}">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-3" href="{{url('/')}}">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-3" href="{{url('/')}}">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-3" href="{{url('/')}}">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-3" href="{{url('/')}}">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid position-relative nav-bar p-0">
    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="{{url('/')}}" class="navbar-brand">
                <h1 class="m-0 text-secondary"><span class="text-primary">DRY</span>ME</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="{{url('/')}}" class="nav-item nav-link">Home</a>
                    <a href="{{url('about')}}" class="nav-item nav-link active">About</a>
                    <a href="{{url('service')}}" class="nav-item nav-link">Services</a>
                    <a href="{{url('pricing')}}" class="nav-item nav-link">Pricing</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu border-0 rounded-0 m-0">
                            <a href="{{url('blog')}}" class="dropdown-item">Blog Grid</a>
                            <a href="{{url('details')}}" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <a href="{{url('contact')}}" class="nav-item nav-link">Contact</a>
                    <a href="{{url('display')}}" class="nav-item nav-link">Contact_Lists</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
    <div class="container py-5">
        <div class="row align-items-center py-4">
            <div class="col-md-6 text-center text-md-left">
                <h1 class="mb-4 mb-md-0 text-white">About Us</h1>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <div class="d-inline-flex align-items-center">
                    <a class="btn text-white" href="">Home</a>
                    <i class="fas fa-angle-right text-white"></i>
                    <a class="btn text-white disabled" href="">About Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header Start -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid" src="{{asset('/assets/')}}/img/about.jpg" alt="">
            </div>
            <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">
                <h6 class="text-secondary text-uppercase font-weight-medium mb-3">Learn About Us</h6>
                <h1 class="mb-4">We Are Quality Laundry Provider In Your City</h1>
                <h5 class="font-weight-medium font-italic mb-4">Clita sit et ipsum sed. Volup duo sea dolor rebum ea rebum kasd stet. Dolor at duo dolor sit stet.</h5>
                <p class="mb-2">Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor</p>
                <div class="row">
                    <div class="col-sm-6 pt-3">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check text-primary mr-2"></i>
                            <p class="text-secondary font-weight-medium m-0">Quality Laundry Service</p>
                        </div>
                    </div>
                    <div class="col-sm-6 pt-3">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check text-primary mr-2"></i>
                            <p class="text-secondary font-weight-medium m-0">Express Fast Delivery</p>
                        </div>
                    </div>
                    <div class="col-sm-6 pt-3">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check text-primary mr-2"></i>
                            <p class="text-secondary font-weight-medium m-0">Highly Professional Staff</p>
                        </div>
                    </div>
                    <div class="col-sm-6 pt-3">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check text-primary mr-2"></i>
                            <p class="text-secondary font-weight-medium m-0">100% Satisfaction Gguarantee</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Working Process Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Working Process</h6>
        <h1 class="display-4 text-center mb-5">How We Work</h1>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                        <h2 class="display-2 text-secondary m-0">1</h2>
                    </div>
                    <h3 class="font-weight-bold m-0 mt-2">Order Place</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                        <h2 class="display-2 text-secondary m-0">2</h2>
                    </div>
                    <h3 class="font-weight-bold m-0 mt-2">Free Pick Up</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                        <h2 class="display-2 text-secondary m-0">3</h2>
                    </div>
                    <h3 class="font-weight-bold m-0 mt-2">Dry Cleaning</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                        <h2 class="display-2 text-secondary m-0">4</h2>
                    </div>
                    <h3 class="font-weight-bold m-0 mt-2">Free Delivery</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Working Process End -->


<!-- Features Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-0 my-lg-5 pt-0 pt-lg-5 pr-lg-5">
                <h6 class="text-secondary text-uppercase font-weight-medium mb-3">Our Features</h6>
                <h1 class="mb-4">Why Choose Us</h1>
                <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor</p>
                <div class="row">
                    <div class="col-sm-6 mb-4">
                        <h1 class="text-secondary" data-toggle="counter-up">10</h1>
                        <h5 class="font-weight-bold">Years Expereince</h5>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <h1 class="text-secondary" data-toggle="counter-up">250</h1>
                        <h5 class="font-weight-bold">Expert Worker</h5>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <h1 class="text-secondary" data-toggle="counter-up">1250</h1>
                        <h5 class="font-weight-bold">Happy Clients</h5>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <h1 class="text-secondary" data-toggle="counter-up">9550</h1>
                        <h5 class="font-weight-bold">Dry Cleaning</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="d-flex flex-column align-items-center justify-content-center bg-secondary h-100 py-5 px-3">
                    <i class="fa fa-5x fa-certificate text-white mb-5"></i>
                    <h1 class="display-1 text-white mb-3">10+</h1>
                    <h1 class="text-white m-0">Years Experience</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection