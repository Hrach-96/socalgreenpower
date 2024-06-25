@extends('layouts.template')
@section('content')
<div class="container-fluid booking py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-12 pt-5">
                <h1 class="text-white text-center mb-3">Gallery</h1>
            </div>
        </div>
    </div>
</div>
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
                            <img src="{{url('assets/images/a13.jfif')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="{{url('assets/images/a13.jfif')}}" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="{{url('assets/images/a15.jfif')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="{{url('assets/images/a15.jfif')}}" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="{{url('assets/images/a16.jfif')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="{{url('assets/images/a16.jfif')}}" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="{{url('assets/images/a17.jfif')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="{{url('assets/images/a17.jfif')}}" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="{{url('assets/images/a18.jfif')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="{{url('assets/images/a18.jfif')}}" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="{{url('assets/images/a19.jfif')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="{{url('assets/images/a19.jfif')}}" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="{{url('assets/images/a20.jfif')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="{{url('assets/images/a20.jfif')}}" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="{{url('assets/images/a21.jfif')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="{{url('assets/images/a21.jfif')}}" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="{{url('assets/images/a22.jfif')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="{{url('assets/images/a22.jfif')}}" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="{{url('assets/images/a23.jfif')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="{{url('assets/images/a23.jfif')}}" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="{{url('assets/images/a24.jfif')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="{{url('assets/images/a24.jfif')}}" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="{{url('assets/images/a25.jfif')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="{{url('assets/images/a25.jfif')}}" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
