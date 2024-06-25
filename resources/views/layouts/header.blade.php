<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Socalgreenpower</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="icon" href="{{url('assets/images/sm-logo.png')}}" type="image/x-icon"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="{{route('main')}}" class="navbar-brand p-0">
                    <img src="{{url('assets/images/logo.png')}}" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{route('main')}}" class="nav-item nav-link {{ Request::segment(1) == '' ? "active" : "" }}">Home</a>
                        <a href="{{route('about_us')}}" class="nav-item nav-link {{ Str::contains(url()->current(),'about-us') == 1 ? "active" : "" }}">About</a>
                        <a href="{{route('testimonials')}}" class="nav-item nav-link {{ Str::contains(url()->current(),'testimonials') == 1 ? "active" : "" }}">Testimonials</a>
                        <a href="{{route('services')}}" class="nav-item nav-link {{ Str::contains(url()->current(),'services') == 1 ? "active" : "" }}">Services</a>
                        <a href="{{route('gallery')}}" class="nav-item nav-link {{ Str::contains(url()->current(),'gallery') == 1 ? "active" : "" }}">Gallery</a>
                        <a href="{{route('contact_us')}}" class="nav-item nav-link {{ Str::contains(url()->current(),'contact-us') == 1 ? "active" : "" }}">Contact</a>
                    </div>
                </div>
            </nav>