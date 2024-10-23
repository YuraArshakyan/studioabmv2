@extends('layout.index')
@section('title', 'Home')
@section('content')
    <div class="header">
        <div class="first_section">
            <div class="carousel">
                <img src="front_image/1.jpg" class="front_carusel activated" alt="">
                <img src="front_image/2.jpg" class="front_carusel activated" alt="">
                <img src="front_image/3.jpg" class="front_carusel activated" alt="">
                <img src="front_image/4.jpg" class="front_carusel activated" alt="">
            </div>
            <div class="text">

            </div>
            <div class="d-flex justify-content-center">
                <div class="container small_img&control_button d-flex justify-content-space position-absolute bottom-0">
                    <div class="small_img">
                        <div class="container small_img_container">
                            <img src="front_image/1.jpg" class="small_img choosed" alt="">
                            <img src="front_image/2.jpg" class="small_img " alt="">
                            <img src="front_image/3.jpg" class="small_img " alt="">
                            <img src="front_image/4.jpg" class="small_img " alt="">
                        </div>
                    </div>
                    <div class="control_button d-flex align-items-center">
                        <span class="carusel_control_button mr-10"><i class="fa fa-angle-left d-flex justify-content-center align-items-center"></i></span>
                        <span class="carusel_control_button "><i class="fa fa-angle-right d-flex justify-content-center align-items-center"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection