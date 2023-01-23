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
                    <a href="{{url('service')}}" class="nav-item nav-link">Services</a>
                    <a href="{{url('pricing')}}" class="nav-item nav-link">Pricing</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu border-0 rounded-0 m-0">
                            <a href="{{url('blog')}}" class="dropdown-item">Blog Grid</a>
                            <a href="{{url('details')}}" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <a href="{{url('contact')}}" class="nav-item nav-link active">Contact</a>
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
                <h1 class="mb-4 mb-md-0 text-white">Contact Us</h1>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <div class="d-inline-flex align-items-center">
                    <a class="btn text-white" href="">Home</a>
                    <i class="fas fa-angle-right text-white"></i>
                    <a class="btn text-white disabled" href="">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header Start -->


<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container" style="max-width: 900px;">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 100px; height: 100px; border-width: 15px !important;">
                                <i class="fa fa-2x fa-map-marker-alt text-secondary"></i>
                            </div>
                            <h5 class="font-weight-medium m-0 mt-2">123 Street, New York, USA</h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 100px; height: 100px; border-width: 15px !important;">
                                <i class="fa fa-2x fa-envelope-open text-secondary"></i>
                            </div>
                            <h5 class="font-weight-medium m-0 mt-2">info@example.com</h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 100px; height: 100px; border-width: 15px !important;">
                                <i class="fa fa-2x fa-phone-alt text-secondary"></i>
                            </div>
                            <h5 class="font-weight-medium m-0 mt-2">+012 345 6789</h5>
                        </div>
                    </div>
                </div>
            </div>
            @if(session('status'))
                <div class="alert alert-success">
                    <h6 style="color:red;">{{ session('status') }}</h6>
                </div>
                @endif
            <div class="col-12">
                <div class="contact-form">
                    <div ></div>
                    <form  method="POST" action="/saveContact"  novalidate="novalidate">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="control-group">
                                    <input type="text" class="form-control" name="name"  placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="control-group">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" name="subject"placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="6" name="message"  placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@endsection