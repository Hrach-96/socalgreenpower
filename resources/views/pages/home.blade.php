@extends('layouts.template')
@section('content')
            <!-- Carousel Start -->
            <div class="carousel-header">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="{{url('assets/images/main-1.jpg')}}" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h1 class="display-2 text-capitalize text-white mb-4">Welcome to Socalgreenpower!</h1>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="{{route('contact_us')}}">Contact</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{url('assets/images/main-2.jpg')}}" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{url('assets/images/main-3.jpg')}}" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Carousel End -->
        </div>

        <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="h-100" style="border: 50px solid; border-color: transparent #13357B transparent #13357B;">
                            <img src="{{url('assets/images/6f5e74b0-b252-45c0-8b06-01acdc695c4a.jfif')}}" class="img-fluid w-100 h-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                        <h5 class="section-about-title pe-3">Socalgreenpower</h5>
                        <p class="mb-4">As our products represent the top of the solar technology, our aim is to ensure superior professional service to our clients. Therefore, we endeavor to create the network of partnerships based on proven experience and professional expertise. Together with our partners we expect maintain the highest standards and qualifications within solar industry.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <div class="container-fluid gallery py-5 my-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Our Gallery</h5>
            </div>
            <div class="tab-class text-center">
                <div class="tab-content">
                    <div id="GalleryTab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-2">
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="gallery-item h-100">
                                    <img src="{{url('assets/images/7cc9d2ad-091d-44e7-b873-9572bfbb1fd8.jfif')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                        <div class="gallery-info">
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href="{{url('assets/images/7cc9d2ad-091d-44e7-b873-9572bfbb1fd8.jfif')}}" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="gallery-item h-100">
                                    <img src="{{url('assets/images/80af7dde-2ae1-4fa3-bb10-6f45ead5320e.jfif')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                        <div class="gallery-info">
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href="{{url('assets/images/80af7dde-2ae1-4fa3-bb10-6f45ead5320e.jfif')}}" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="gallery-item h-100">
                                    <img src="{{url('assets/images/56be22aa-1865-4762-870a-60de699be24c.jfif')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                        <div class="gallery-info">
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href="{{url('assets/images/56be22aa-1865-4762-870a-60de699be24c.jfif')}}" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="gallery-item h-100">
                                    <img src="{{url('assets/images/4547d2d2-3eae-41b7-97ee-3e79b97a3b3b.jfif')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                        <div class="gallery-info">
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href="{{url('assets/images/4547d2d2-3eae-41b7-97ee-3e79b97a3b3b.jfif')}}" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="gallery-item h-100">
                                    <img src="{{url('assets/images/41347fab-37b2-4e70-945c-197f1fd8b7d1.jfif')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                        <div class="gallery-info">
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href="{{url('assets/images/41347fab-37b2-4e70-945c-197f1fd8b7d1.jfif')}}" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="gallery-item h-100">
                                    <img src="{{url('assets/images/86207bc6-8099-46da-b31b-2ab4ccca743b.jfif')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                        <div class="gallery-info">
                                        </div>
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href="{{url('assets/images/86207bc6-8099-46da-b31b-2ab4ccca743b.jfif')}}" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Start -->
        <div class="container-fluid bg-light service py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Information</h5>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                    <div class="service-content text-end">
                                        <h5 class="mb-4">The Services We Provide</h5>
                                        <p class="mb-0">We have spent years learning and perfecting our skills. Since the installation of solar panels is not an easy task, we are specialists that have the necessary skills and know-how you can trust. We will check your roofing system to make sure it is suitable for such an installation. Our company offers residential and commercial installation and battery storage services. Read our Services page!
                                        </p>
                                    </div>
                                    <div class="service-icon p-4">
                                        <i class="fa fa-globe fa-4x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center  bg-white border border-primary rounded p-4 pe-0">
                                    <div class="service-content text-end">
                                        <h5 class="mb-4">Solar Panels</h5>
                                        <p class="mb-0">Our solar panels are easy to install and affordable enough to actually own. With solar energy, you will save tons of money on your electric bills and will also be using renewable resources, so you will be doing the world and your neighbor a favor. Financing options are available for our solar panel sets to make your solar panel installation dream into a reality.
                                        </p>
                                    </div>
                                    <div class="service-icon p-4">
                                        <i class="fa fa-hotel fa-4x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                    <div class="service-icon p-4">
                                        <i class="fa fa-globe fa-4x text-primary"></i>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="mb-4">How We Do It</h5>
                                        <p class="mb-0">If you want to decrease your energy bills, you might find the idea of panels and solar battery beneficial. The equipment we install and the tools and devices we use help us determine whether your residential or commercial roof is ready for such a project. There are several compulsory steps we follow. Everything begins with a thorough inspection and continues with obtaining a permit.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                    <div class="service-icon p-4">
                                        <i class="fa fa-hotel fa-4x text-primary"></i>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="mb-4">Why Choose Socalgreenpower Installation?</h5>
                                        <p class="mb-0">Socalgreenpower is a family owned and operated solar energy business. We strive to make all of our customers happy. We do both commercial and residential installs and have been involved in the installation of more than 1,000 solar panel system overall! Customer satisfaction is our number one goal. We will make sure that the job is done right, and if a problem should arise.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="service-content-inner text-center align-items-center bg-white border border-primary rounded p-5">
                                    <div class="service-content">
                                        <h5 class="mb-4">Solar battery storage</h5>
                                        <p class="mb-0">Solar battery storage is another service that we offer. You will have a device that reserves energy for later consumption. Along with your solar equipment, you will have a battery that will store energy to be used by your household long after the sun goes down. Isn’t that amazing? Not only will the system protect your roofing system from damage but help you store energy. Many solar systems produce more electricity than the household can consume. In such cases, your battery will store that energy, and when the panels can’t produce enough energy, you will have an additional energy source or you can opt to send it back to the grid. This is what solar batteries do!
                                        </p>
                                        <br>
                                        <p>
                                            If your to speak with our technicians urgently, do not delay, call us at +8189342985. If you want to discover more about our dependable and useful services and pricing, call to us today. We offer the most efficient equipment in the region with instant results. Call us now.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->
        <div class="container-fluid booking py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12 pt-5">
                        <h1 class="text-white text-center mb-3">Energizing your future positively</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-light service py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Services</h5>
                </div>
                <div class="row g-4">
                    <div class="col-lg-12 text-center">
                        <div class="row g-4">
                            <div class="col-md-4 col-xs-12 col-sm-12 text-center">
                                <div class="service-content-inner align-items-center bg-white border border-primary rounded p-4 pe-0">
                                    <div class="service-content">
                                        <h5 class="mb-4 text-center">Ev Charger</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12 col-sm-12">
                                <div class="service-content-inner align-items-center  bg-white border border-primary rounded p-4 pe-0">
                                    <div class="service-content">
                                        <h5 class="mb-4 text-center">Residential Solar</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12 col-sm-12">
                                <div class="service-content-inner align-items-center  bg-white border border-primary rounded p-4 pe-0">
                                    <div class="service-content">
                                        <h5 class="mb-4 text-center">Battery Installation</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection