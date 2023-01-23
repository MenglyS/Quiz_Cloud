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
                    <a href="{{url('about')}}" class="nav-item nav-link">About</a>
                    <a href="{{url('service')}}" class="nav-item nav-link active">Services</a>
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
<!-- Page Header Start -->
<div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
    <div class="container py-5">
        <div class="row align-items-center py-4">
            <div class="col-md-6 text-center text-md-left">
                <h1 class="mb-4 mb-md-0 text-white">Our Services</h1>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <div class="d-inline-flex align-items-center">
                    <a class="btn text-white" href="">Home</a>
                    <i class="fas fa-angle-right text-white"></i>
                    <a class="btn text-white disabled" href="">Services</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header Start -->


<!-- Services Start -->
<div class="container-fluid pt-5 pb-3">
    <div class="container">
        <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Our Services</h6>
        <h1 class="display-4 text-center mb-5">What We Offer</h1>
        <div class="row">
            <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                        <i class="fa fa-3x fa-cloud-sun text-secondary"></i>
                    </div>
                    <h4 class="font-weight-bold m-0">Dry Cleaning</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                        <i class="fas fa-3x fa-soap text-secondary"></i>
                    </div>
                    <h4 class="font-weight-bold m-0">Wash & Laundry</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                        <i class="fa fa-3x fa-burn text-secondary"></i>
                    </div>
                    <h4 class="font-weight-bold m-0">Curtain Laundry</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                        <i class="fa fa-3x fa-tshirt text-secondary"></i>
                    </div>
                    <h4 class="font-weight-bold m-0">Suits Cleaning</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                        <i class="fa fa-3x fa-cloud-sun text-secondary"></i>
                    </div>
                    <h4 class="font-weight-bold m-0">Dry Cleaning</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                        <i class="fas fa-3x fa-soap text-secondary"></i>
                    </div>
                    <h4 class="font-weight-bold m-0">Wash & Laundry</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                        <i class="fa fa-3x fa-burn text-secondary"></i>
                    </div>
                    <h4 class="font-weight-bold m-0">Curtain Laundry</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                        <i class="fa fa-3x fa-tshirt text-secondary"></i>
                    </div>
                    <h4 class="font-weight-bold m-0">Suits Cleaning</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->


<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container">
        <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Testimonial</h6>
        <h1 class="display-4 text-center mb-5">Our Clients Say</h1>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item">
                <img class="position-relative rounded-circle bg-white shadow mx-auto" src="{{asset('/assets/')}}/img/testimonial-1.jpg" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                <div class="bg-light text-center p-4 pt-0">
                    <h5 class="font-weight-medium mt-5">Client Name</h5>
                    <p class="text-muted font-italic">Profession</p>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor ipsum clita</p>
                </div>
            </div>
            <div class="testimonial-item">
                <img class="position-relative rounded-circle bg-white shadow mx-auto" src="{{asset('/assets/')}}/img/testimonial-2.jpg" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                <div class="bg-light text-center p-4 pt-0">
                    <h5 class="font-weight-medium mt-5">Client Name</h5>
                    <p class="text-muted font-italic">Profession</p>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor ipsum clita</p>
                </div>
            </div>
            <div class="testimonial-item">
                <img class="position-relative rounded-circle bg-white shadow mx-auto" src="{{asset('/assets/')}}/img/testimonial-3.jpg" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                <div class="bg-light text-center p-4 pt-0">
                    <h5 class="font-weight-medium mt-5">Client Name</h5>
                    <p class="text-muted font-italic">Profession</p>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor ipsum clita</p>
                </div>
            </div>
            <div class="testimonial-item">
                <img class="position-relative rounded-circle bg-white shadow mx-auto" src="{{asset('/assets/')}}/img/testimonial-4.jpg" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                <div class="bg-light text-center p-4 pt-0">
                    <h5 class="font-weight-medium mt-5">Client Name</h5>
                    <p class="text-muted font-italic">Profession</p>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor ipsum clita</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
@endsection