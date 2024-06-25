<div class="container-fluid footer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6 col-xl-4">
                        <div class="footer-item d-flex flex-column">
                            <img src="{{url('assets/images/logo.png')}}" style='max-width:250px' alt="Logo">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6 col-xl-4">
                        <div class="footer-item d-flex flex-column">
                            <a href=""><i class="fas fa-home me-2"></i> 10762 Mather ave sunland ca91040</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> info@socalgreenpower.com</a>
                            <a href="tel:8189342985"><i class="fas fa-phone me-2"></i> +8189342985</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6 col-xl-4">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Company </h4>
                            <a href="{{route('main')}}"><i class="fas fa-angle-right me-2"></i> Home</a>
                            <a href="{{route('about_us')}}"><i class="fas fa-angle-right me-2"></i> About</a>
                            <a href="{{route('testimonials')}}"><i class="fas fa-angle-right me-2"></i> Testimonials</a>
                            <a href="{{route('services')}}"><i class="fas fa-angle-right me-2"></i> Services</a>
                            <a href="{{route('gallery')}}"><i class="fas fa-angle-right me-2"></i> Gallery</a>
                            <a href="{{route('contact_us')}}"><i class="fas fa-angle-right me-2"></i> Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright text-body py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-12 text-center mb-md-0">
                        <i class="fas fa-copyright me-2"></i><a class="text-white" href="#">Socalgreenpower</a>, All right reserved.
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
		<script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
		<script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
		<script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>

</html>