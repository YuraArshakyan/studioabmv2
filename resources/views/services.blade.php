@extends('layout.index')
@section('title', 'Services')
@section('content')
    <div class="services_head">
        {{-- <img src="/services_img/2.jpg" class="w-100 h-100"> --}}

        <h1>
            {{$services->header}}
        </h1>
    </div>

    
    <div class="container">
        <div class="services_main_content p-20">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <img src="/services_img/2.jpg" class="object-fit-contain w-100 h-100">
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 d-flex align-items-center">
                    <p class="color-w">
                        {!! nl2br($services->main_text) !!}
                    </p>
                </div>
                <div class="p-15 d-flex justify-content-end">
                    <button type="button" class="text contacts_button btn btn-outline-primary">Contact Us</button>
                </div>
            </div>
        </div>
    </div>
    
@endsection