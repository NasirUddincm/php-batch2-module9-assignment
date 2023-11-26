@extends('layouts.master')
@section('content')
<section class="my-5">
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
@endsection