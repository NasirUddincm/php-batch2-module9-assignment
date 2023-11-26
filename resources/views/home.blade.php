@extends('layouts.master')
@section('content')
   
<!-- start hero section -->
<section>
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
              <div class="col-10 col-sm-8 col-lg-6">
                <img src="{{asset('asset/images/banner-man.png')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
              </div>
              <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Hi, I am Nasir Uddin</h1>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                  <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">
                    Download CV <i class="fa fa-download"></i>
                </button>
                  <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                </div>
              </div>
            </div>
          </div>
    </section>
    <!-- end hero section -->

    <!-- Start Service section -->
    <section>
        <div class="container px-4 py-5" id="custom-cards">
            <h2 class="pb-2 border-bottom">My Service</h2>        
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                        <li class="me-auto">
                            <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                        </li>
                        <li class="d-flex align-items-center me-3">
                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                            <small>Earth</small>
                        </li>
                        <li class="d-flex align-items-center">
                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                            <small>3d</small>
                        </li>
                        </ul>
                    </div>
                    </div>
                </div>
        
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                        <li class="me-auto">
                            <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                        </li>
                        <li class="d-flex align-items-center me-3">
                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                            <small>Pakistan</small>
                        </li>
                        <li class="d-flex align-items-center">
                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                            <small>4d</small>
                        </li>
                        </ul>
                    </div>
                    </div>
                </div>
        
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                        <li class="me-auto">
                            <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                        </li>
                        <li class="d-flex align-items-center me-3">
                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                            <small>California</small>
                        </li>
                        <li class="d-flex align-items-center">
                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                            <small>5d</small>
                        </li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service section -->

    <!-- start my project section -->
    <section>
        <div class="container px-4 py-5" id="custom-cards">
            <h2 class="pb-2 border-bottom">My Projects</h2>        
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                <div class="col">
                    <div class="card card-cover overflow-hidden text-bg-dark rounded-4 shadow-lg" >
                        <img src="{{asset('asset/images/porject1.jpg')}}" alt="">
                        <h3 class="display-6 fw-bold card-img-overlay text-dark">Short title, long jacket</h3>                        
                    </div>                 

                </div>
                <div class="col">
                    <div class="card card-cover overflow-hidden text-bg-dark rounded-4 shadow-lg" >
                        <img src="{{asset('asset/images/porject2.jpg')}}" alt="">
                        <h3 class="display-6 fw-bold card-img-overlay text-dark">Short title, long jacket</h3>                        
                    </div>                 

                </div>
                <div class="col">
                    <div class="card card-cover overflow-hidden text-bg-dark rounded-4 shadow-lg" >
                        <img src="{{asset('asset/images/porject3.jpg')}}" alt="">
                        <h3 class="display-6 fw-bold card-img-overlay">Short title, long jacket</h3>                        
                    </div>                 

                </div>
             
            </div>
        </div>
    </section>
    <!-- end my project section -->
@endsection
